<?php
class Pemesanan extends CI_Controller{
    
    function __construct() 
    {
        parent::__construct();
        login_check();
        $this->load->model(array('Model_barangjual','Model_transaksijual'));
        $this->Model_transaksijual->getsecurity();
    }

    public function index()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title']  = 'SELAMAT DATANG DI WAROENG SS';

        $this->db->select_max('id_carinota');
        $query_nota = $this->db->get('nota')->row_array();
        $result     = $query_nota['id_carinota'];
        $result     = $result + 1;

        $no_nota            = date('Ymd').'000'.$result;
        $data['no_nota']    = $no_nota;

        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required');
        $this->form_validation->set_rules('jumlah_nasi', 'Jumlah Nasi yang Dipesan', 'trim|required');

        if ($this->form_validation->run()==false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('transaksi/form_nama_pemesan.php', $data);
            $this->load->view('templates/footer.php');
        }else{
            $this->session->set_tempdata('no_nota', $no_nota, 600);

            $userdata = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $user       = $userdata['name'];
            $data_nota  = array('nama_pelayan' => $user);
            $this->db->insert('nota', $data_nota);

            $this->Model_transaksijual->simpan_nama_pelanggan();

            //set session data pemesan
            $data_pemesan = $this->db->get_where('invoice', ['id_invoice' => $this->session->tempdata('no_nota')])->row_array();
            $pemesan = $data_pemesan['nama_pelanggan'];
            $this->session->set_tempdata('pemesan', $pemesan, 600);

            redirect('pemesanan/pesan');
        }  
    }
    
    function pesan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Form Pemesanan Hidangan';

        if(isset($_POST['submit']))
        {
            $nama_barangjual    =  $this->input->post('barang');
            $jumlah             =  $this->input->post('jumlah');
            $idbarang           =  $this->db->get_where('barangjual',array('nama_barangjual'=>$nama_barangjual))->row_array();

            $user       =  $this->session->userdata('name');
            $tanggal    =  date('Ymd');  
            $id_user    =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $data_pesanan        =  array(   
                                    'id_barangjual'     => $idbarang['id_barangjual'],
                                    'id_user'           => $id_user['id_user'],
                                    'nama_lengkap'      => $id_user['name'],
                                    'pemesan'           => $this->session->tempdata('pemesan'),
                                    'jumlah'            => $jumlah,
                                    'nama_barangjual'   => $idbarang['nama_barangjual'],
                                    'no_nota'           => $this->session->tempdata('no_nota'),
                                    'tanggal'           => $tanggal,
                                    'harga_jual'        => $idbarang['harga_jual']
                                );
            $this->db->insert('transaksijual', $data_pesanan);
            redirect('pemesanan/pesan');
        }
        else
        { 
            $data['barang']= $this->Model_barangjual->tampilkan_data();
            $no_nota = $this->session->tempdata('no_nota');
            $data['detail']= $this->Model_transaksijual->tampilkan_detail_transaksi($no_nota)->result();
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('transaksi/form_transaksijual.php', $data);
            $this->load->view('templates/footer.php');
        }
    }

    function hapusitem()
    {
        $id=  $this->uri->segment(3);
        $this->Model_transaksijual->hapusitem($id);
        redirect('pemesanan/pesan');
    }

    public function pesanMenu($total, $user, $tanggal)
    {
        $no_nota = $this->session->tempdata('no_nota');
        $nama_pemesan = $this->session->tempdata('pemesan');
        $invoice = array(
                'id_invoice'    => $no_nota,
                'nama_pelanggan'=> $nama_pemesan,
                'nama_user'     => $user,
                'tanggal'       => $tanggal,
                'total'         => $total
        );

        $this->db->replace('invoice', $invoice);
        redirect('pemesanan/tampil_nota/'.$no_nota);
    }

    public function tampil_nota($no_nota)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Silahkan Bayar di Kasir';
        $data['nota_no'] = $no_nota;

        if (isset($_POST['submit'])) {
            
        }else{
            $this->session->unset_tempdata('no_nota');
            $this->session->unset_tempdata('pemesan');
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('transaksi/tampil_nota.php',$data);
            $this->load->view('templates/footer.php');
        }
    }
}


<?php 
/**
 * 
 */
class Kasir extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        login_check();
        $this->load->model(array('Model_barangjual','Model_transaksijual'));
        $this->Model_transaksijual->getsecurity();

    }

    public function index(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['title'] = 'Pilih Nota';

        if (isset($_POST['submit'])) {
            $nota = $this->input->post('nota');
            redirect('kasir/bayar/'.$nota);
        }else{
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('transaksi/form_cari_bayar.php', $data);
            $this->load->view('templates/footer.php');
        } 
    }

    public function bayar($nota)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Konfirmasi Pembayaran';

        if(isset($_POST['submit']))
        {
            $this->Model_transaksijual->simpan_barang($nota);
            redirect('kasir');
        }
        else
        {
            $data['barang'] = $this->Model_barangjual->tampilkan_data($nota);
            $data['detail'] = $this->Model_transaksijual->tampilkan_detail_transaksi_bayar($nota)->result_array();
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('transaksi/form_bayar.php', $data);
            $this->load->view('templates/footer.php');
        }
    }

    public function selesai_belanja($no_nota)
    {
        $status  =  '0';
        $data    = array(
            'status'    =>$status,
            'no_nota'   =>$no_nota
        );
        $this->Model_transaksijual->selesai_belanja($data);
        redirect('kasir');
    }
}
 ?>
<?php
class Model_transaksijual extends ci_model{

    public function simpan_nama_pelanggan()
    {
        $tanggal        = date('Ymd');
        $nama_pelanggan = $this->input->post('nama_pelanggan');

        $userdata       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user           = $userdata['name'];
        $user_id        = $userdata['id_user'];
        $no_nota        = $this->session->tempdata('no_nota');
        $nasi           = $this->db->get_where('barangjual', ['nama_barangjual' => 'Nasi'])->row_array();
        $jumlah_nasi    = $this->input->post('jumlah_nasi');

        $invoice        = array(
                'id_invoice'    => $no_nota,
                'tanggal'       => $tanggal,
                'nama_user'     => $user,
                'nama_pelanggan'=> $nama_pelanggan
        );

        $data_nasi = array(
                'id_barangjual'     => $nasi['id_barangjual'],
                'id_user'           => $user_id,
                'nama_lengkap'      => $user,
                'pemesan'           => $nama_pelanggan,
                'no_nota'           => $no_nota,
                'tanggal'           => $tanggal,
                'nama_barangjual'   => $nasi['nama_barangjual'],
                'jumlah'            => $jumlah_nasi,
                'harga_jual'        => $nasi['harga_jual'],
                'status'            => 1
        );
        
        $this->db->insert('invoice', $invoice);
        $this->db->insert('transaksijual', $data_nasi);
    }
    
    function simpan_barang($nota)
    {
        $idbarang           =  $this->db->get_where('barangjual',array('nama_barangjual'=>$nama_barangjual))->row_array();
        $nama_barangjual    =  $this->input->post('barang');
        $jumlah             =  $this->input->post('jumlah');
        $user               =  $this->session->userdata('name');
        $tanggal            =  date('Ymd');  
        $id_user            =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data_pesanan        =  array(   
                                'id_barangjual'     => $idbarang['id_barangjual'],
                                'id_user'           => $id_user['id_user'],
                                'nama_lengkap'      => $id_user['name'],
                                'pemesan'           => $this->session->tempdata('pemesan'),
                                'jumlah'            => $jumlah,
                                'nama_barangjual'   => $idbarang['nama_barangjual'],
                                'no_nota'           => $nota,
                                'tanggal'           => $tanggal,
                                'harga_jual'        => $idbarang['harga_jual']
                            );
        
        $this->db->insert('transaksijual', $data_pesanan);
    }

    
    function tampilkan_detail_transaksi($no_nota)
    {

        $query  ="SELECT * FROM transaksijual AS tj JOIN barangjual AS bj WHERE bj.id_barangjual=tj.id_barangjual AND tj.status=1 AND tj.no_nota = $no_nota ORDER BY id_transaksijual ASC";
        
        return $this->db->query($query);
    }

    function tampilkan_detail_transaksi_bayar($nota)
    {
        // $query  ="SELECT *
        //         FROM transaksijual as tj join barangjual as bj
        //         WHERE bj.id_barangjual=tj.id_barangjual and tj.status=1 and tj.no_nota=$nota
        //         ORDER BY `id_transaksijual` ASC";
        $query = "SELECT `transaksijual`.*, `invoice`.`total` FROM `transaksijual` JOIN `invoice` ON `transaksijual`.`no_nota` = `invoice`.`id_invoice` WHERE `transaksijual`.`status` = 1 AND `transaksijual`.`no_nota` = $nota ORDER BY `transaksijual`.`id_transaksijual`";
        return $this->db->query($query);
    }
    
    function hapusitem($id)
    {
        $this->db->where('id_transaksijual',$id);
        $this->db->delete('transaksijual');
    }
    
    function selesai_belanja($data)
    {   
        $where['status']    = 1;
        $where['no_nota']   = $data['no_nota'];
        $this->db->where($where);
        $this->db->update('transaksijual',$data);


        $where2['bayar']        = 0;
        $where2['id_invoice']   = $data['no_nota'];
        $data2 = array(
        'bayar'  => 1
        );
        $this->db->where($where2);
        $this->db->update('invoice', $data2);
    }

    public function getsecurity() 
    {
    $username = $this->session->userdata('email');
    if (empty($username)) {
        $this->session->sess_destroy();
        redirect('');
        }
    }

    public function tampilkan_dataNota()
        {
            // $query = "SELECT DISTINCT no_nota FROM barangjual WHERE status = 1";

            // return $this->db->query($query);
            $query=  "SELECT  *  from barangjual ORDER BY nama_barangjual ASC ";
        
            return $this->db->query($query);
        }    
}
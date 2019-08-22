<?php
class Model_barangjual extends CI_Model{

    
    function tampilkan_data()
    {
        $query=  "SELECT  *  FROM `barangjual` WHERE hidangan_id != 0 AND is_available = 1 ORDER BY nama_barangjual ASC ";
        
        return $this->db->query($query);
    }


    function post($data)
    {
        $this->db->insert('barangjual',$data);
    }
    
    
    function get_one($id)
    {
        $param  =   array('id_barangjual'=>$id);
        return $this->db->get_where('barangjual',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_barangjual',$id);
        $this->db->update('barangjual',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_barangjual',$id);
        $this->db->delete('barangjual');
    }

      public function getsecurity() {
        $username = $this->session->userdata('username');
        if (empty($username)) {
              $this->session->sess_destroy();
              redirect('');
            }
        }
}
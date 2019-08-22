<?php 
/**
 * 
 */
class Model_hidangan extends CI_Model
{
	

	public function getAllSambal()
	{
		$query = "SELECT * FROM barangjual WHERE hidangan_id = 1 ORDER BY nama_barangjual DESC";
		return $this->db->query($query)->result_array();
	}

	public function get_sambal($id_barangjual)
	{
		return $query = $this->db->get_where('barangjual', ['id_barangjual' => $id_barangjual])->row_array();
	}

	public function getAllLauk()
	{
		$query = "SELECT * FROM barangjual WHERE hidangan_id = 2 ORDER BY nama_barangjual";
		return $this->db->query($query)->result_array();
	}

	public function get_lauk($id_barangjual)
	{
		return $query = $this->db->get_where('barangjual', ['id_barangjual' => $id_barangjual])->row_array();
	}

	public function getAllSayur()
	{
		return $query = $this->db->get_where('barangjual', ['hidangan_id' => 3])->result_array();
	}

	public function get_sayur($id_barangjual)
	{
		return $query = $this->db->get_where('barangjual', ['id_barangjual' => $id_barangjual])->row_array();
	}

	public function getAllMinum()
	{
		return $query = $this->db->get_where('barangjual', ['hidangan_id' => 4])->result_array();
	}

	public function get_minum($id_barangjual)
	{
		return $query = $this->db->get_where('barangjual', ['id_barangjual' => $id_barangjual])->row_array();
	}

	public function getAllBuah()
	{
		return $query = $this->db->get_where('barangjual', ['hidangan_id' => 5])->result_array();
	}

	public function get_buah($id_barangjual)
	{
		return $query = $this->db->get_where('barangjual', ['id_barangjual' => $id_barangjual])->row_array();
	}

	public function getAllUnavailable()
	{
		$query = "SELECT * FROM barangjual WHERE stok <= 0 AND hidangan_id != 0";
		return $this->db->query($query)->result_array();
	}

	public function get_unavailable($id_barangjual)
	{
		return $query = $this->db->get_where('barangjual', ['id_barangjual' => $id_barangjual])->row_array();
	}

	public function get_daftarmasak()
	{

		// $query = "SELECT * FROM transaksijual WHERE bayar = 0 ORDER BY id_transaksijual ASC";
		$query = "SELECT transaksijual.*, invoice.bayar FROM transaksijual JOIN invoice ON transaksijual.no_nota = invoice.id_invoice WHERE transaksijual.masak = 0 AND invoice.bayar = 1 ORDER BY transaksijual.id_transaksijual ASC";
		return $this->db->query($query);
	}
	
}
 ?>
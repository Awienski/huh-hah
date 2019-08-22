<?php 
/**
 * 
 */
class Cart_model extends CI_Model
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function getAllproduct()
	{
		return $query = $this->db->get_where('hidangan', ['is_available' => 1])->result();
	}
}
 ?>
<?php 
/**
 * 
 */
class Role_model extends CI_model
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public function delete_role($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_role');
	}

	public function getRole($id)
	{
		return $query = $this->db->get_where('user_role', ['id' => $id])->row_array();
	}

	public function updateRole()
	{
		$data = [
			'role' => $this->input->post('role_id', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_role', $data);

	}

}
 ?>
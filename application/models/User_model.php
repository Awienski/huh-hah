<?php 
/**
 * 
 */
class User_model extends CI_Model
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function getalluser()
	{
		$query = "SELECT `user`.*, `user_role`.`role` FROM `user` JOIN `user_role` ON `user`.`role_id` = `user_role`.`id` WHERE `user_role`.`id` != 1";

		return $this->db->query($query)->result_array();
	}

	public function getUser($id)
	{
		$query = "SELECT `user`.*, `user_role`.`role` FROM `user` JOIN `user_role` ON `user`.`role_id` = `user_role`.`id` WHERE `user`.`id_user` = $id ";

		return $this->db->query($query)->row_array();
	}

	public function getUser_password($id)
	{
		return $query = $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function delete_user($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

	public function update_user()
	{
		$data = [
			'role_id' => $this->input->post('role_id'),
			'is_active' => $this->input->post('is_active')
		];

		$this->db->where('id_user', $this->input->post('id'));
		$this->db->update('user', $data);
	}

	
}

 ?>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Menu extends CI_Controller
{	
	function __construct()
	{
		parent:: __construct();
		login_check();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Menu Management';

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu_name', 'Menu', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('menu/index.php', $data);
		$this->load->view('templates/footer.php');
		}else{
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu_name')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu added</div>');
			redirect('menu');
		}

	}

	public function delete($id)
	{
		$this->load->model('Menu_model');
		$this->Menu_model->delete_menu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Menu deleted</div>');

		redirect('menu');
	}

	public function edit($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Menu';

		$this->load->model('Menu_model');
		$data['edit_menu'] = $this->Menu_model->getMenu($id);



		$this->form_validation->set_rules('menu_name', 'Menu', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('menu/update.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$this->Menu_model->updateMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated</div>');
			redirect('menu');
		}
	}

	public function submenu()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Submenu Management";
		$this->load->model('Menu_model');
		$data['submenu'] = $this->Menu_model->getAllsubmenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'trim|required');
		$this->form_validation->set_rules('url', 'Submenu Url', 'trim|required');
		$this->form_validation->set_rules('icon', 'Submenu Icon', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('menu/submenu.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];

			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Added</div>');
			redirect('menu/submenu');
		}
		
	}

	public function delete_submenu($id)
	{
		$this->load->model('Menu_model');
		$this->Menu_model->delete_submenu($id);
		$this->session->set_flashdata('flash', 'Deleted.');
		redirect('menu/submenu');
	}

	public function edit_submenu($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Submenu";

		$this->load->model('Menu_model');
		$data['editsub'] = $this->Menu_model->getsubmenu($id);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'trim|required');
		$this->form_validation->set_rules('url', 'Submenu Url', 'trim|required');
		$this->form_validation->set_rules('icon', 'Submenu Icon', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('menu/update_submenu.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$this->Menu_model->updateSubmenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu Edited</div>');
			redirect('menu/submenu');
		}

	}

	

}
 ?>

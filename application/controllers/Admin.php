<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_barangjual','Model_transaksijual','Model_laporan'));
		login_check();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer.php');
	}

	public function role()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Role';

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('role_name', 'Role', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('templates/footer.php');
		}else{
			$this->db->insert('user_role', ['role' => $this->input->post('role_name')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Berhasil Ditambahkan</div>');
			redirect('admin/role');
		}
	}

	public function delete_role($id)
	{
		$this->load->model('role_model');
		$this->role_model->delete_role($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Role Berhasil Dihapus</div>');
		redirect('admin/role');
	}

	public function edit_role($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Role';

		$this->load->model('role_model');
		$data['role'] = $this->role_model->getRole($id);

		$this->form_validation->set_rules('role_id', 'Role', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('admin/edit_role', $data);
			$this->load->view('templates/footer.php');
		}else{
			$this->role_model->updateRole();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Berhasil Diubah</div>');
			redirect('admin/role');
		}	
	}

	public function access_role($role_id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Role Access';

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('role_name', 'Role', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('admin/roleAccess', $data);
			$this->load->view('templates/footer.php');
		}else{
			$this->db->insert('user_role', ['role' => $this->input->post('role_name')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Ditambahkan</div>');
			redirect('admin/role');
		}
		
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		}else{
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Berhasil Diubah!</div>');
	}

	public function user_management()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "User Management";

		$this->load->model('User_model');
		$data['userall'] = $this->User_model->getalluser();
		$data['role'] = $this->db->get('user_role')->result_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('admin/user_management.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function delete_user($id)
	{
		$this->load->model('User_model');
		$this->User_model->delete_user($id);
		$this->session->set_flashdata('message', 'Berhasil Dihapus.');
		redirect('admin/user_management');
	}

	public function edit_user($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit User";

		$this->load->model('User_model');
		$data['user_data'] = $this->User_model->getUser($id);
		$data['role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('role_id', 'Role', 'required|trim');

		if ($this->form_validation->run()==false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('admin/edit_user.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$this->User_model->update_user();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Data Edited</div>');
			redirect('admin/user_management');
		}
	}

	public function reset_password($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Reset User Password";

		$this->load->model('User_model');
		$data['user_pass'] = $this->User_model->getUser_password($id);

		$this->form_validation->set_rules('new_password1', 'Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Password', 'required|trim|min_length[3]|matches[new_password1]');

		if ($this->form_validation->run()==false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('admin/reset_password.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$new_password = $this->input->post('new_password1');

			$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

			$this->db->set('password', $password_hash);
			$this->db->where('id_user', $this->input->post('id'));
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
					
			redirect('admin/user_management');
		}
	}

	function laporan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Laporan';

        if(isset($_POST['submit']))
        {
            $tanggal1       =  $this->input->post('tanggal1');
            $tanggal2       =  $this->input->post('tanggal2');
            $data['record'] =  $this->Model_laporan->laporan_periode($tanggal1,$tanggal2);
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('laporan/laporan.php', $data);
            $this->load->view('templates/footer.php');
        }
        else
        {
            $data['record']=  $this->Model_laporan->laporan_default();
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('templates/topbar.php', $data);
            $this->load->view('laporan/laporan.php', $data);
            $this->load->view('templates/footer.php');
        }
    }
    
    function pdf()
    {
        $this->load->library('Cfpdf');
        $pdf=new FPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont       ('Arial','B','L');
        $pdf->SetFontSize   (14);
        $pdf->Text          (10, 10, 'LAPORAN TRANSAKSI');
        $pdf->SetFont       ('Arial','B','L');
        $pdf->SetFontSize   (10);
        $pdf->Cell          (10, 10,'','',1);
        $pdf->Cell          (10, 7, 'No'                 , 1,0, 'C');
        $pdf->Cell          (35, 7, 'No Transaksi'       , 1,0, 'C');
        $pdf->Cell          (45, 7, 'Tanggal Transaksi'  , 1,0, 'C');
        $pdf->Cell          (50, 7, 'Nama Kasir'         , 1,0, 'C');
        $pdf->Cell          (50, 7, 'Nama Pelanggan'     , 1,0, 'C');
        $pdf->Cell          (30, 7, 'Total'         , 1,1, 'C');
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->Model_laporan->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no,                  1,0, 'C');
            $pdf->Cell(35, 7, $r->id_invoice,       1,0, 'C');
            $pdf->Cell(45, 7, $r->tanggal,          1,0, 'C');
            $pdf->Cell(50, 7, $r->nama_user,        1,0);
            $pdf->Cell(50, 7, $r->nama_pelanggan,   1,0);
            $pdf->Cell(30, 7, $r->total,            1,1, 'C');
            
            $no++;
            $total += $r->total;
        }
        // end
        $pdf->Cell(190,7,'Total',1,0,'R');
        $pdf->Cell(30,7,$total,1,0, 'C');
        $pdf->Output();

    }
}
 ?>
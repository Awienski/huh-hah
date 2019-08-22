<?php 
/**
 * 
 */
class Hidangan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		login_check();
	}

	public function sambal()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Sambal';

		$this->load->model('Model_hidangan');
		$data['sambal'] = $this->Model_hidangan->getAllSambal();

		$this->form_validation->set_rules('image', 'Foto Sambal', 'trim');
		$this->form_validation->set_rules('name', 'Sambal', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Sambal', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/sambal.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];
			$this->db->insert('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sambal Berhasil Ditambahkan</div>');
			redirect('hidangan/sambal');
		}
	}

	public function delete_sambal($id_barangjual)
	{
		$this->db->where('id_barangjual', $id_barangjual);
		$this->db->delete('barangjual');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sambal Berhasil Dihapus</div>');
			redirect('hidangan/sambal');
	}

	public function edit_sambal($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Sambal";

		$this->load->model('Model_hidangan');
		$data['sambal'] = $this->Model_hidangan->get_sambal($id_barangjual);

		$this->form_validation->set_rules('image', 'Foto Sambal', 'trim');
		$this->form_validation->set_rules('name', 'Sambal', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Sambal', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/edit_sambal.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->where('id_barangjual', $this->input->post('id_barangjual'));
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sambal Berhasil Diedit</div>');
			redirect('hidangan/sambal');
		}
		
	}

	public function lauk()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Lauk';

		$this->load->model('Model_hidangan');
		$data['lauk'] = $this->Model_hidangan->getAllLauk();


		$this->form_validation->set_rules('image', 'Foto Lauk', 'trim');
		$this->form_validation->set_rules('name', 'Lauk', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Lauk', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/lauk.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->insert('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lauk Berhasil Ditambahkan</div>');
			redirect('hidangan/lauk');
		}

	}

	public function delete_lauk($id_barangjual)
	{
		$this->db->where('id_barangjual', $id_barangjual);
		$this->db->delete('barangjual');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Lauk Berhasil Dihapus</div>');
			redirect('hidangan/lauk');
	}

	public function edit_lauk($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Lauk";

		$this->load->model('Model_hidangan');
		$data['lauk'] = $this->Model_hidangan->get_lauk($id_barangjual);

		$this->form_validation->set_rules('image', 'Foto Lauk', 'trim');
		$this->form_validation->set_rules('name', 'Lauk', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Lauk', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/edit_lauk.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->where('id_barangjual', $this->input->post('id_barangjual'));
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lauk Berhasil Diedit</div>');
			redirect('hidangan/lauk');
		}
		
	}

	public function sayur()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Sayur';

		$this->load->model('Model_hidangan');
		$data['sayur'] = $this->Model_hidangan->getAllSayur();


		$this->form_validation->set_rules('image', 'Foto Sayur', 'trim');
		$this->form_validation->set_rules('name', 'Sayur', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Sayur', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/sayur.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->insert('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sayur Berhasil Ditambahkan</div>');
			redirect('hidangan/sayur');
		}

	}

	public function delete_sayur($id_barangjual)
	{
		$this->db->where('id_barangjual', $id_barangjual);
		$this->db->delete('barangjual');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Lauk Berhasil Dihapus</div>');
			redirect('hidangan/sayur');
	}

	public function edit_sayur($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Sayur";

		$this->load->model('Model_hidangan');
		$data['sayur'] = $this->Model_hidangan->get_sayur($id_barangjual);

		$this->form_validation->set_rules('image', 'Foto Sayur', 'trim');
		$this->form_validation->set_rules('name', 'Sayur', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Sayur', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/edit_sayur.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->where('id_barangjual', $this->input->post('id_barangjual'));
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sayur Berhasil Diubah</div>');
			redirect('hidangan/sayur');
		}
		
	}

	public function minum()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Minum';

		$this->load->model('Model_hidangan');
		$data['minum'] = $this->Model_hidangan->getAllMinum();

		$this->form_validation->set_rules('image', 'Foto Minum', 'trim');
		$this->form_validation->set_rules('name', 'Minum', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Minum', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/minum.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->insert('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Minuman Berhasil Ditambahkan</div>');
			redirect('hidangan/minum');
		}

	}

	public function delete_minum($id_barangjual)
	{
		$this->db->where('id_barangjual', $id_barangjual);
		$this->db->delete('barangjual');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Minum Berhasil Dihapus</div>');
			redirect('hidangan/minum');
	}

	public function edit_minum($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Minum";

		$this->load->model('Model_hidangan');
		$data['minum'] = $this->Model_hidangan->get_sayur($id_barangjual);

		$this->form_validation->set_rules('image', 'Foto Minum', 'trim');
		$this->form_validation->set_rules('name', 'Minum', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Minum', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/edit_minum.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->where('id_barangjual', $this->input->post('id_barangjual'));
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Minum Berhasil Diedit</div>');
			redirect('hidangan/minum');
		}	
	}

	public function buah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Buah';

		$this->load->model('Model_hidangan');
		$data['buah'] = $this->Model_hidangan->getAllBuah();

		$this->form_validation->set_rules('image', 'Foto Buah', 'trim');
		$this->form_validation->set_rules('name', 'Buah', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Buah', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/buah.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->insert('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buah Berhasil Ditambahkan</div>');
			redirect('hidangan/buah');
		}

	}

	public function delete_buah($id_barangjual)
	{
		$this->db->where('id_barangjual', $id_barangjual);
		$this->db->delete('barangjual');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Buah Berhasil Dihapus</div>');
			redirect('hidangan/buah');
	}

	public function edit_buah($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Buah";

		$this->load->model('Model_hidangan');
		$data['buah'] = $this->Model_hidangan->get_sayur($id_barangjual);

		$this->form_validation->set_rules('image', 'Foto Buah', 'trim');
		$this->form_validation->set_rules('name', 'Buah', 'trim|required');
		$this->form_validation->set_rules('price', 'Harga Buah', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('hidangan/edit_buah.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$data = [
				'image' => $this->input->post('image'),
				'nama_barangjual' => $this->input->post('name'),
				'harga_jual' => $this->input->post('price'),
				'hidangan_id' => $this->input->post('jenis'),
				'is_available' => $this->input->post('is_available')
			];

			$this->db->where('id_barangjual', $this->input->post('id_barangjual'));
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buah Berhasil Diedit</div>');
			redirect('hidangan/buah');
		}
		
	}
}
 ?>
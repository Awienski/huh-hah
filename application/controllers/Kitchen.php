<?php 
/**
 * 
 */
class Kitchen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		login_check();
	}

	public function ketersediaan()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Ketersediaan Menu';
		$data['title2'] = 'Sambal';

		$this->load->model('Model_hidangan');
		$data['sambal'] = $this->Model_hidangan->getAllSambal();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/ketersediaan.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit_ketersediaan_sambal($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Ketersediaan Sambal";

		$this->load->model('Model_hidangan');
		$data['sambal'] = $this->Model_hidangan->get_sambal($id_barangjual);

		$this->form_validation->set_rules('stok_baru', 'Stok Sambal', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('kitchen/edit_ketersediaan_sambal.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$stok_lama = $this->input->post('stok_lama');
			$stok_baru = $this->input->post('stok_baru');
			$stok = $stok_lama + $stok_baru;
			$data = [
				'stok' => $stok
			];

			$this->db->where('id_barangjual', $id_barangjual);
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Stok Sambal Berhasil Diupdate</div>');
			redirect('kitchen/ketersediaan');
		}
	}

	public function ketersediaan_lauk()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Ketersediaan Menu';
		$data['title2'] = 'Lauk';

		$this->load->model('Model_hidangan');
		$data['lauk'] = $this->Model_hidangan->getAllLauk();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/ketersediaan_lauk.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit_ketersediaan_lauk($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Ketersediaan Lauk";

		$this->load->model('Model_hidangan');
		$data['lauk'] = $this->Model_hidangan->get_lauk($id_barangjual);

		$this->form_validation->set_rules('stok_baru', 'Stok Lauk', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('kitchen/edit_ketersediaan_lauk.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$stok_lama = $this->input->post('stok_lama');
			$stok_baru = $this->input->post('stok_baru');
			$stok = $stok_lama + $stok_baru;
			$data = [
				'stok' => $stok
			];

			$this->db->where('id_barangjual', $id_barangjual);
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ketersediaan Berhasil Diedit</div>');
			redirect('kitchen/ketersediaan_lauk');
		}
	}

	public function ketersediaan_sayur()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Ketersediaan Menu';
		$data['title2'] = 'Sayur';

		$this->load->model('Model_hidangan');
		$data['sayur'] = $this->Model_hidangan->getAllSayur();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/ketersediaan_sayur.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit_ketersediaan_sayur($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Ketersediaan Sayur";

		$this->load->model('Model_hidangan');
		$data['sayur'] = $this->Model_hidangan->get_sayur($id_barangjual);

		$this->form_validation->set_rules('stok_baru', 'Stok Sayur', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('kitchen/edit_ketersediaan_sayur.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$stok_lama = $this->input->post('stok_lama');
			$stok_baru = $this->input->post('stok_baru');
			$stok = $stok_lama + $stok_baru;
			$data = [
				'stok' => $stok
			];

			$this->db->where('id_barangjual', $id_barangjual);
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ketersediaan Berhasil Diedit</div>');
			redirect('kitchen/ketersediaan_sayur');
		}
	}

	public function ketersediaan_minum()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Ketersediaan Menu';
		$data['title2'] = 'Minum';

		$this->load->model('Model_hidangan');
		$data['minum'] = $this->Model_hidangan->getAllMinum();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/ketersediaan_minum.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit_ketersediaan_minum($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Ketersediaan Minum";

		$this->load->model('Model_hidangan');
		$data['minum'] = $this->Model_hidangan->get_minum($id_barangjual);

		$this->form_validation->set_rules('stok_baru', 'Stok Minum', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('kitchen/edit_ketersediaan_minum.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$stok_lama = $this->input->post('stok_lama');
			$stok_baru = $this->input->post('stok_baru');
			$stok = $stok_lama + $stok_baru;
			$data = [
				'stok' => $stok
			];

			$this->db->where('id_barangjual', $id_barangjual);
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ketersediaan Berhasil Diedit</div>');
			redirect('kitchen/ketersediaan_minum');
		}
	}

	public function ketersediaan_buah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Ketersediaan Menu';
		$data['title2'] = 'Buah';

		$this->load->model('Model_hidangan');
		$data['buah'] = $this->Model_hidangan->getAllBuah();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/ketersediaan_buah.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit_ketersediaan_buah($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Ketersediaan Buah";

		$this->load->model('Model_hidangan');
		$data['buah'] = $this->Model_hidangan->get_buah($id_barangjual);

		$this->form_validation->set_rules('stok_baru', 'Stok Buah', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('kitchen/edit_ketersediaan_buah.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$stok_lama = $this->input->post('stok_lama');
			$stok_baru = $this->input->post('stok_baru');
			$stok = $stok_lama + $stok_baru;
			$data = [
				'stok' => $stok
			];

			$this->db->where('id_barangjual', $id_barangjual);
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ketersediaan Berhasil Diedit</div>');
			redirect('kitchen/ketersediaan_buah');
		}
	}

	public function unavailable_list()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Ketersediaan Menu';
		$data['title2'] = 'Unavailable List';

		$this->load->model('Model_hidangan');
		$data['unavailable'] = $this->Model_hidangan->getAllUnavailable();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/unavailable_list.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit_unavailable_list($id_barangjual)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Ketersediaan";

		$this->load->model('Model_hidangan');
		$data['unavailable'] = $this->Model_hidangan->get_unavailable($id_barangjual);

		$this->form_validation->set_rules('stok_baru', 'Stok', 'required');


		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('kitchen/edit_unavailable_list.php', $data);
			$this->load->view('templates/footer.php');
		}else{
			$stok_lama = $this->input->post('stok_lama');
			$stok_baru = $this->input->post('stok_baru');
			$stok = $stok_lama + $stok_baru;
			$data = [
				'stok' => $stok
			];

			$this->db->where('id_barangjual', $id_barangjual);
			$this->db->update('barangjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Stok Berhasil Ditambahkan</div>');
			redirect('kitchen/unavailable_list');
		}
	}

	public function masak()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Daftar Hidangan Masak";

		$this->load->model('Model_hidangan');
		$data['daftarmasak'] = $this->Model_hidangan->get_daftarmasak()->result_array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
		$this->load->view('kitchen/daftar_masak.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function sudah_dimasak($id_transaksijual)
	{
		$data = array('masak' => 1);

			$this->db->where('id_transaksijual', $id_transaksijual);
			$this->db->update('transaksijual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil!</div>');
			redirect('kitchen/masak');
	}


}
 ?>
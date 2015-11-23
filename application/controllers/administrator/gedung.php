<?php 

class Gedung extends Admin_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
	}

	public function index() {
		$this->global_data['gedungs'] = $this->gedung_m->get();
		$this->global_data['title'] = "Daftar Gedung";
		$this->load->view('administrator/admin_gedung_v', $this->global_data);
	}

	public function delete($id) {
		$this->gedung_m->delete($id);
		$this->session->set_flashdata('notif', 'Delete Gedung Successful!');
		redirect('administrator/gedung');
	}
}
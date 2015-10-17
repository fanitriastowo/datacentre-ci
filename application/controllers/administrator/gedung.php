<?php 

class Gedung extends Admin_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
	}

	public function index() {
		$model['gedungs'] = $this->gedung_m->get();
		$this->load->view('administrator/gedung', $model);
	}

	public function delete($id) {
		$this->gedung_m->delete($id);
		$this->session->set_flashdata('notif', 'Delete Gedung Successful!');
		redirect('administrator/gedung');
	}
}
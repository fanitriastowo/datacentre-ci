<?php 

class Gedung extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
	}

	public function index() {
		$data['gedungs'] = $this->gedung_m->get();
		$this->load->view('gedung_v', $data);
	}
}
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
}
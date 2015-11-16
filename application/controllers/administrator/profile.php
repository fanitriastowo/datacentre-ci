<?php 

class Profile extends Admin_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$model['users'] = $this->ion_auth->users(2)->result();
		$this->load->view('administrator/profile', $model);
	}
}
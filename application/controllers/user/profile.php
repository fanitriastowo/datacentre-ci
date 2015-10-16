<?php 

class Profile extends User_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('user/profile');
	}
}
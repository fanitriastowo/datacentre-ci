<?php 

class Profile extends Admin_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->global_data['users'] = $this->ion_auth->users(2)->result();
		$this->global_data['title'] = 'Summary';
		$this->load->view('administrator/admin_profile_v', $this->global_data);
	}
}
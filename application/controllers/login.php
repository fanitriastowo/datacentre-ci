<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()	{
		$this->load->view('login_v');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
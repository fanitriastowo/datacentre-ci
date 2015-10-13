<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()	{
		$this->load->view('login_v');
	}

	public function login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->ion_auth->login($email, $password);
	}

	public function logout() {
		$this->ion_auth->logout();
		redirect('login/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
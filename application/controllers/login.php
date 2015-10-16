<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index(){
		if ($this->ion_auth->logged_in()) {
			show_404();
		}
		$this->load->view('login_v');
	}

	public function do_login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if ($this->ion_auth->login($email, $password) == TRUE) {
			if ($this->ion_auth->is_admin()){
				redirect('administrator/profile');
			} else if($this->ion_auth->in_group('members')) {
				redirect('user/profile');
			} else {
				$this->session->set_flashdata('error', TRUE);
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('error', TRUE);
			redirect('login');
		}
	}

	public function logout() {
		if ($this->ion_auth->logged_in()) {
			$this->ion_auth->logout();
			redirect('login');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
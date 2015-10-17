<?php 

class User extends Admin_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index() {
		$model['users'] = $this->ion_auth->users(2)->result();
		$this->load->view('administrator/user', $model);
	}

	public function insert() {
		$username = $this->input->post('username');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');
		$data = array(
				'phone' => $phone,
				'confirm_password' => $confirm_password
			);
		$this->ion_auth->register($username, $password, $email, $data);
		$this->session->set_flashdata('notif', 'Register new User Successful!');
		redirect('administrator/user');
	}
}
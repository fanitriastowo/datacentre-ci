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
			);
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$this->ion_auth->register($username, $password, $email, $data);
			$this->session->set_flashdata('notif', 'Register new User Successful!');
			redirect('administrator/user');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('administrator/user');
		}
	}

	public function delete($id) {
		$this->ion_auth->delete_user($id);
		$this->session->set_flashdata('notif', 'Delete User Successful!');
		redirect('administrator/user');
	}

	public function detail($id) {
		$user = $this->ion_auth->user($id)->row();
		return $this->output->set_content_type('application/json')->set_output(json_encode($user));
	}

	public function update() {
		$id = $this->input->post('update_id');
		$username = $this->input->post('username');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');
		$data = array(
				'username' => $username,
				'phone' => $phone,
				'email' => $email,
				'password' => $password
			);
		$this->ion_auth->update($id, $data);
		$this->session->set_flashdata('notif', 'Update User Successful!');
		redirect('administrator/user');
	}

	public function _unique_email(){
		// Do NOT validate if email already exists
		// UNLESS it's the email for the current user
		
		$this->db->where('email', $this->input->post('email'));
		$user = $this->user_m->get();
		
		if (count($user)) {
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}
		return TRUE;
	}
}
<?php 

class Profile extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
		$this->load->model('air_m');
		$this->load->model('atap_m');
		$this->load->model('kelistrikan_m');
	}

	public function index() {
		$user = $this->ion_auth->user()->row();
		$this->global_data['option_kondisi'] = $this->air_m->option_kondisi;

		$this->global_data['gedung'] = $this->gedung_m->get($user->id, TRUE);
		$this->global_data['air'] = $this->air_m->get($user->id, TRUE);
		$this->global_data['atap'] = $this->atap_m->get($user->id, TRUE);
		$this->global_data['kelistrikan'] = $this->kelistrikan_m->get($user->id, TRUE);

		$this->global_data['title'] = 'Your Profile';

		if (!count($this->global_data['gedung'])) {
			$this->global_data['gedung'] = $this->gedung_m->get_new();
		} 

		if (!count($this->global_data['air'])) {
			$this->global_data['air'] = $this->air_m->get_new();
		}

		if (!count($this->global_data['atap'])) {
			$this->global_data['atap'] = $this->atap_m->get_new();
		}

		if (!count($this->global_data['kelistrikan'])) {
			$this->global_data['kelistrikan'] = $this->kelistrikan_m->get_new();
		}

		$this->load->view('user/user_profile_v', $this->global_data);
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$gedung = $this->gedung_m->get($user->id, TRUE);

		// Update
		if (count($gedung)) {
			$data = array(
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'lokasi' => $this->input->post('lokasi'),
				'jenis_gedung' => $this->input->post('jenis_gedung'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'tahun_survey' => $this->input->post('tahun_survey'),
				'fungsi' => $this->input->post('fungsi'),
				'luas' => $this->input->post('luas')
			);

			$this->form_validation->set_rules($this->gedung_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->gedung_m->save($data, $gedung->id);
				$this->session->set_flashdata('notif', 'Update Gedung Berhasil!');
				redirect('user/profile#tab-profile');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-profile');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'lokasi' => $this->input->post('lokasi'),
				'jenis_gedung' => $this->input->post('jenis_gedung'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'tahun_survey' => $this->input->post('tahun_survey'),
				'fungsi' => $this->input->post('fungsi'),
				'luas' => $this->input->post('luas')
			);

			$this->form_validation->set_rules($this->gedung_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->gedung_m->save_gedung($data);
				$this->session->set_flashdata('notif', 'Insert Gedung Berhasil!');
				redirect('user/profile#tab-profile');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-profile');
			}
		}
		
	}
}
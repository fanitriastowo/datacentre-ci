<?php 

class Profile extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
	}

	public function index() {
		$user = $this->ion_auth->user()->row();
		$model['gedung'] = $this->gedung_m->get($user->id, TRUE);
		if (count($model['gedung'])) {
			$this->load->view('user/profile', $model);
		} else {
			$model['gedung'] = $this->gedung_m->get_new();
			$this->load->view('user/profile', $model);
		}
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
				redirect('user/profile');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile');
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
				redirect('user/profile');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile');
			}
		}
		
	}
}
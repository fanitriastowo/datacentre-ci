<?php 

class Lantai extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('lantai_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$lantai = $this->lantai_m->get($user->id, TRUE);

		// Update
		if (count($lantai)) {
			$data = array(
				'keramik_panjang' => $this->input->post('keramik_panjang'),
				'keramik_bahan' => $this->input->post('keramik_bahan'),
				'keramik_kondisi' => $this->input->post('keramik_kondisi')
			);

			$this->form_validation->set_rules($this->lantai_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->lantai_m->save($data, $gedung->id);
				$this->session->set_flashdata('notif', 'Update Lantai Berhasil!');
				redirect('user/profile#tab-lantai');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-lantai');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'keramik_panjang' => $this->input->post('keramik_panjang'),
				'keramik_bahan' => $this->input->post('keramik_bahan'),
				'keramik_kondisi' => $this->input->post('keramik_kondisi')
			);

			$this->form_validation->set_rules($this->lantai_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->lantai_m->save_lantai($data);
				$this->session->set_flashdata('notif', 'Insert Lantai Berhasil!');
				redirect('user/profile#tab-lantai');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-lantai');
			}
		}
	}
}
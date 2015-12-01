<?php 

class Pondasi extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('pondasi_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$pondasi = $this->pondasi_m->get($user->id, TRUE);

		// Update
		if (count($pondasi)) {
			$data = array(
				'sloof_panjang' => $this->input->post('sloof_panjang'),
				'sloof_bahan' => $this->input->post('sloof_bahan'),
				'sloof_kondisi' => $this->input->post('sloof_kondisi')
			);

			$this->form_validation->set_rules($this->pondasi_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->pondasi_m->save($data, $pondasi->id);
				$this->session->set_flashdata('notif', 'Update Pondasi Berhasil!');
				redirect('user/profile#tab-pondasi');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-pondasi');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'sloof_panjang' => $this->input->post('sloof_panjang'),
				'sloof_bahan' => $this->input->post('sloof_bahan'),
				'sloof_kondisi' => $this->input->post('sloof_kondisi')
			);

			$this->form_validation->set_rules($this->pondasi_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->pondasi_m->save_pondasi($data);
				$this->session->set_flashdata('notif', 'Insert Pondasi Berhasil!');
				redirect('user/profile#tab-pondasi');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-pondasi');
			}
		}
	}
}
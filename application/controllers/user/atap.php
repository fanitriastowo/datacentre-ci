<?php 

class Atap extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('atap_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$atap = $this->atap_m->get($user->id, TRUE);

		// Update
		if (count($atap)) {
			$data = array(
				'usuk_panjang' => $this->input->post('usuk_panjang'),
				'usuk_bahan' => $this->input->post('usuk_bahan'),
				'usuk_kondisi' => $this->input->post('usuk_kondisi'),
				'gording_panjang' => $this->input->post('gording_panjang'),
				'gording_bahan' => $this->input->post('gording_bahan'),
				'gording_kondisi' => $this->input->post('gording_kondisi'),
				'reng_panjang' => $this->input->post('reng_panjang'),
				'reng_bahan' => $this->input->post('reng_bahan'),
				'reng_kondisi' => $this->input->post('reng_kondisi'),
				'kuda_kuda_panjang' => $this->input->post('kuda_kuda_panjang'),
				'kuda_kuda_bahan' => $this->input->post('kuda_kuda_bahan'),
				'kuda_kuda_kondisi' => $this->input->post('kuda_kuda_kondisi'),
				'ikatan_angin_panjang' => $this->input->post('ikatan_angin_panjang'),
				'ikatan_angin_bahan' => $this->input->post('ikatan_angin_bahan'),
				'ikatan_angin_kondisi' => $this->input->post('ikatan_angin_kondisi'),
				'genteng_panjang' => $this->input->post('genteng_panjang'),
				'genteng_bahan' => $this->input->post('genteng_bahan'),
				'genteng_kondisi' => $this->input->post('genteng_kondisi'),
				'bumbungan_panjang' => $this->input->post('bumbungan_panjang'),
				'bumbungan_bahan' => $this->input->post('bumbungan_bahan'),
				'bumbungan_kondisi' => $this->input->post('bumbungan_kondisi'),
			);
			$this->form_validation->set_rules($this->atap_m->rules);
			
			if ($this->form_validation->run() == TRUE) {
				$this->atap_m->save($data, $atap->id);
				$this->session->set_flashdata('notif', 'Update Atap Berhasil!');
				redirect('user/profile#tab-atap');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-atap');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'usuk_panjang' => $this->input->post('usuk_panjang'),
				'usuk_bahan' => $this->input->post('usuk_bahan'),
				'usuk_kondisi' => $this->input->post('usuk_kondisi'),
				'gording_panjang' => $this->input->post('gording_panjang'),
				'gording_bahan' => $this->input->post('gording_bahan'),
				'gording_kondisi' => $this->input->post('gording_kondisi'),
				'reng_panjang' => $this->input->post('reng_panjang'),
				'reng_bahan' => $this->input->post('reng_bahan'),
				'reng_kondisi' => $this->input->post('reng_kondisi'),
				'kuda_kuda_panjang' => $this->input->post('kuda_kuda_panjang'),
				'kuda_kuda_bahan' => $this->input->post('kuda_kuda_bahan'),
				'kuda_kuda_kondisi' => $this->input->post('kuda_kuda_kondisi'),
				'ikatan_angin_panjang' => $this->input->post('ikatan_angin_panjang'),
				'ikatan_angin_bahan' => $this->input->post('ikatan_angin_bahan'),
				'ikatan_angin_kondisi' => $this->input->post('ikatan_angin_kondisi'),
				'genteng_panjang' => $this->input->post('genteng_panjang'),
				'genteng_bahan' => $this->input->post('genteng_bahan'),
				'genteng_kondisi' => $this->input->post('genteng_kondisi'),
				'bumbungan_panjang' => $this->input->post('bumbungan_panjang'),
				'bumbungan_bahan' => $this->input->post('bumbungan_bahan'),
				'bumbungan_kondisi' => $this->input->post('bumbungan_kondisi'),
			);
			
			$this->form_validation->set_rules($this->atap_m->rules);
			
			if ($this->form_validation->run() == TRUE) {
				$this->atap_m->save_atap($data);
				$this->session->set_flashdata('notif', 'Insert Atap Berhasil!');
				redirect('user/profile#tab-atap');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-atap');
			}			
		}
	}
}
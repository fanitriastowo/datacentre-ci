<?php 

class Struktur extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('struktur_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$struktur = $this->struktur_m->get($user->id, TRUE);

		// Update
		if (count($struktur)) {
			$data = array(
				'kolom_jumlah' => $this->input->post('kolom_jumlah'),
				'kolom_bahan' => $this->input->post('kolom_bahan'),
				'kolom_kondisi' => $this->input->post('kolom_kondisi'),
				'ring_balok_jumlah' => $this->input->post('ring_balok_jumlah'),
				'ring_balok_bahan' => $this->input->post('ring_balok_bahan'),
				'ring_balok_kondisi' => $this->input->post('ring_balok_kondisi'),
				'balok_jumlah' => $this->input->post('balok_jumlah'),
				'balok_bahan' => $this->input->post('balok_bahan'),
				'balok_kondisi' => $this->input->post('balok_kondisi'),
				'pelat_lantai_panjang' => $this->input->post('pelat_lantai_panjang'),
				'pelat_lantai_bahan' => $this->input->post('pelat_lantai_bahan'),
				'pelat_lantai_kondisi' => $this->input->post('pelat_lantai_kondisi')
			);

			$this->form_validation->set_rules($this->struktur_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->struktur_m->save($data, $struktur->id);
				$this->session->set_flashdata('notif', 'UpdateSstruktur Berhasil!');
				redirect('user/profile#tab-struktur');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-struktur');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'kolom_jumlah' => $this->input->post('kolom_jumlah'),
				'kolom_bahan' => $this->input->post('kolom_bahan'),
				'kolom_kondisi' => $this->input->post('kolom_kondisi'),
				'ring_balok_jumlah' => $this->input->post('ring_balok_jumlah'),
				'ring_balok_bahan' => $this->input->post('ring_balok_bahan'),
				'ring_balok_kondisi' => $this->input->post('ring_balok_kondisi'),
				'balok_jumlah' => $this->input->post('balok_jumlah'),
				'balok_bahan' => $this->input->post('balok_bahan'),
				'balok_kondisi' => $this->input->post('balok_kondisi'),
				'pelat_lantai_panjang' => $this->input->post('pelat_lantai_panjang'),
				'pelat_lantai_bahan' => $this->input->post('pelat_lantai_bahan'),
				'pelat_lantai_kondisi' => $this->input->post('pelat_lantai_kondisi')
			);

			$this->form_validation->set_rules($this->struktur_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->struktur_m->save_struktur($data);
				$this->session->set_flashdata('notif', 'Insert Struktur Berhasil!');
				redirect('user/profile#tab-struktur');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-struktur');
			}
		}
	}
}
<?php 

class Plafon extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('plafon_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$plafon = $this->plafon_m->get($user->id, TRUE);

		// Update
		if (count($plafon)) {
			$data = array(
				'lisplang_panjang' => $this->input->post('lisplang_panjang'),
				'lisplang_bahan' => $this->input->post('lisplang_bahan'),
				'lisplang_kondisi' => $this->input->post('lisplang_kondisi'),
				'rangka_plafon_panjang' => $this->input->post('rangka_plafon_panjang'),
				'rangka_plafon_bahan' => $this->input->post('rangka_plafon_bahan'),
				'rangka_plafon_kondisi' => $this->input->post('rangka_plafon_kondisi'),
				'plafon_panjang' => $this->input->post('plafon_panjang'),
				'plafon_bahan' => $this->input->post('plafon_bahan'),
				'plafon_kondisi' => $this->input->post('plafon_kondisi')
			);

			$this->form_validation->set_rules($this->plafon_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->plafon_m->save($data, $plafon->id);
				$this->session->set_flashdata('notif', 'Update Plafon Berhasil!');
				redirect('user/profile#tab-plafon');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-plafon');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'lisplang_panjang' => $this->input->post('lisplang_panjang'),
				'lisplang_bahan' => $this->input->post('lisplang_bahan'),
				'lisplang_kondisi' => $this->input->post('lisplang_kondisi'),
				'rangka_plafon_panjang' => $this->input->post('rangka_plafon_panjang'),
				'rangka_plafon_bahan' => $this->input->post('rangka_plafon_bahan'),
				'rangka_plafon_kondisi' => $this->input->post('rangka_plafon_kondisi'),
				'plafon_panjang' => $this->input->post('plafon_panjang'),
				'plafon_bahan' => $this->input->post('plafon_bahan'),
				'plafon_kondisi' => $this->input->post('plafon_kondisi')
			);

			$this->form_validation->set_rules($this->plafon_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->plafon_m->save_plafon($data);
				$this->session->set_flashdata('notif', 'Insert Plafon Berhasil!');
				redirect('user/profile#tab-plafon');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-plafon');
			}
		}
	}
}
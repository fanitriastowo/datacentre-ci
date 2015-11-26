<?php 

class Air extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('air_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$air = $this->air_m->get($user->id, TRUE);

		// Update
		if (count($air)) {
			$data = array(
				'i_p_a_b_panjang' => $this->input->post('ipab_panjang'),
				'i_p_a_b_bahan' => $this->input->post('ipab_bahan'),
				'i_p_a_b_kondisi' => $this->input->post('ipab_kondisi'),
				'tangki_air_volume' => $this->input->post('tangki_air_volume'),
				'tangki_air_kondisi' => $this->input->post('tangki_air_kondisi'),
				'pompa_jumlah' => $this->input->post('pompa_jumlah'),
				'pompa_kondisi' => $this->input->post('pompa_kondisi'),
				'kran_jumlah' => $this->input->post('kran_jumlah'),
				'kran_merek' => $this->input->post('kran_merek'),
				'kran_kondisi' => $this->input->post('kran_kondisi'),
				'ground_tank_jumlah' => $this->input->post('ground_tank_jumlah'),
				'ground_tank_merek' => $this->input->post('ground_tank_merek'),
				'ground_tank_kondisi' => $this->input->post('ground_tank_kondisi'),
				'i_a_k_panjang' => $this->input->post('i_a_k_panjang'),
				'i_a_k_bahan' => $this->input->post('i_a_k_bahan'),
				'i_a_k_kondisi' => $this->input->post('i_a_k_kondisi'),
				'drainase_jumlah' => $this->input->post('drainase_jumlah'),
				'drainase_bahan' => $this->input->post('drainase_bahan'),
				'drainase_kondisi' => $this->input->post('drainase_kondisi'),
				'water_closed_jumlah' => $this->input->post('water_closed_jumlah'),
				'water_closed_merek' => $this->input->post('water_closed_merek'),
				'water_closed_kondisi' => $this->input->post('water_closed_kondisi')
			);
			$this->form_validation->set_rules($this->air_m->rules);

			if ($this->form_validation->run() == TRUE) {
				$this->air_m->save($data, $air->id);
				$this->session->set_flashdata('notif', 'Update Air Berhasil!');
				redirect('user/profile#tab-air');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-air');
			}
			
		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'i_p_a_b_panjang' => $this->input->post('ipab_panjang'),
				'i_p_a_b_bahan' => $this->input->post('ipab_bahan'),
				'i_p_a_b_kondisi' => $this->input->post('ipab_kondisi'),
				'tangki_air_volume' => $this->input->post('tangki_air_volume'),
				'tangki_air_kondisi' => $this->input->post('tangki_air_kondisi'),
				'pompa_jumlah' => $this->input->post('pompa_jumlah'),
				'pompa_kondisi' => $this->input->post('pompa_kondisi'),
				'kran_jumlah' => $this->input->post('kran_jumlah'),
				'kran_merek' => $this->input->post('kran_merek'),
				'kran_kondisi' => $this->input->post('kran_kondisi'),
				'ground_tank_jumlah' => $this->input->post('ground_tank_jumlah'),
				'ground_tank_merek' => $this->input->post('ground_tank_merek'),
				'ground_tank_kondisi' => $this->input->post('ground_tank_kondisi'),
				'i_a_k_panjang' => $this->input->post('i_a_k_panjang'),
				'i_a_k_bahan' => $this->input->post('i_a_k_bahan'),
				'i_a_k_kondisi' => $this->input->post('i_a_k_kondisi'),
				'drainase_jumlah' => $this->input->post('drainase_jumlah'),
				'drainase_bahan' => $this->input->post('drainase_bahan'),
				'drainase_kondisi' => $this->input->post('drainase_kondisi'),
				'water_closed_jumlah' => $this->input->post('water_closed_jumlah'),
				'water_closed_merek' => $this->input->post('water_closed_merek'),
				'water_closed_kondisi' => $this->input->post('water_closed_kondisi')
			);
			$this->form_validation->set_rules($this->air_m->rules);

			if ($this->form_validation->run() == TRUE) {
				$this->air_m->save_air($data);
				$this->session->set_flashdata('notif', 'Insert Air Berhasil!');
				redirect('user/profile#tab-air');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-air');
			}
		}
	}
}
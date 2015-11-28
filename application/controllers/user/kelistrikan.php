<?php 

class Kelistrikan extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('kelistrikan_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$kelistrikan = $this->kelistrikan_m->get($user->id, TRUE);

		// Update
		if (count($kelistrikan)) {
			$data = array(
				'instalasi_kabel_panjang' => $this->input->post('instalasi_kabel_panjang'),
				'instalasi_kabel_jenis' => $this->input->post('instalasi_kabel_jenis'),
				'instalasi_kabel_kondisi' => $this->input->post('instalasi_kabel_kondisi'),
				'lampu_jumlah' => $this->input->post('lampu_jumlah'),
				'lampu_jumlah_baik' => $this->input->post('lampu_jumlah_baik'),
				'lampu_jumlah_rusak' => $this->input->post('lampu_jumlah_rusak'),
				'stop_kontak_jumlah' => $this->input->post('stop_kontak_jumlah'),
				'stop_kontak_jumlah_baik' => $this->input->post('stop_kontak_jumlah_baik'),
				'stop_kontak_jumlah_rusak' => $this->input->post('stop_kontak_jumlah_rusak'),
				'saklar_jumlah' => $this->input->post('saklar_jumlah'),
				'saklar_jumlah_baik' => $this->input->post('saklar_jumlah_baik'),
				'saklar_jumlah_rusak' => $this->input->post('saklar_jumlah_rusak'),
				'instalasi_listrik_kondisi' => $this->input->post('instalasi_listrik_kondisi'),
				'installasi_kable_LAN_panjang' => $this->input->post('installasi_kable_LAN_panjang'),
				'installasi_kable_LAN_kondisi' => $this->input->post('installasi_kable_LAN_kondisi'),
				'switch_jumlah' => $this->input->post('switch_jumlah'),
				'switch_jumlah_baik' => $this->input->post('switch_jumlah_baik'),
				'switch_jumlah_rusak' => $this->input->post('switch_jumlah_rusak')
			);
			$this->form_validation->set_rules($this->kelistrikan_m->rules);
			
			if ($this->form_validation->run() == TRUE) {
				$this->kelistrikan_m->save($data, $atap->id);
				$this->session->set_flashdata('notif', 'Update Kelistrikan Berhasil!');
				redirect('user/profile#tab-kelistrikan');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-kelistrikan');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'instalasi_kabel_panjang' => $this->input->post('instalasi_kabel_panjang'),
				'instalasi_kabel_jenis' => $this->input->post('instalasi_kabel_jenis'),
				'instalasi_kabel_kondisi' => $this->input->post('instalasi_kabel_kondisi'),
				'lampu_jumlah' => $this->input->post('lampu_jumlah'),
				'lampu_jumlah_baik' => $this->input->post('lampu_jumlah_baik'),
				'lampu_jumlah_rusak' => $this->input->post('lampu_jumlah_rusak'),
				'stop_kontak_jumlah' => $this->input->post('stop_kontak_jumlah'),
				'stop_kontak_jumlah_baik' => $this->input->post('stop_kontak_jumlah_baik'),
				'stop_kontak_jumlah_rusak' => $this->input->post('stop_kontak_jumlah_rusak'),
				'saklar_jumlah' => $this->input->post('saklar_jumlah'),
				'saklar_jumlah_baik' => $this->input->post('saklar_jumlah_baik'),
				'saklar_jumlah_rusak' => $this->input->post('saklar_jumlah_rusak'),
				'instalasi_listrik_kondisi' => $this->input->post('instalasi_listrik_kondisi'),
				'installasi_kable_LAN_panjang' => $this->input->post('installasi_kable_LAN_panjang'),
				'installasi_kable_LAN_kondisi' => $this->input->post('installasi_kable_LAN_kondisi'),
				'switch_jumlah' => $this->input->post('switch_jumlah'),
				'switch_jumlah_baik' => $this->input->post('switch_jumlah_baik'),
				'switch_jumlah_rusak' => $this->input->post('switch_jumlah_rusak')
			);
			
			$this->form_validation->set_rules($this->kelistrikan_m->rules);
			
			if ($this->form_validation->run() == TRUE) {
				$this->kelistrikan_m->save_kelistrikan($data);
				$this->session->set_flashdata('notif', 'Insert Kelistrikan Berhasil!');
				redirect('user/profile#tab-kelistrikan');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-kelistrikan');
			}			
		}
	}
}
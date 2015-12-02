<?php 

class Ruangan extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('ruangan_m');
	}

	public function insert() {
		$user = $this->ion_auth->user()->row();
		$ruangan = $this->ruangan_m->get($user->id, TRUE);

		// Update
		if (count($ruangan)) {
			$data = array(
				'dinding_ruangan_panjang' => $this->input->post('dinding_ruangan_panjang'),
				'dinding_ruangan_bahan' => $this->input->post('dinding_ruangan_bahan'),
				'dinding_ruangan_kondisi' => $this->input->post('dinding_ruangan_kondisi'),
				'cat_dinding_panjang' => $this->input->post('cat_dinding_panjang'),
				'cat_dinding_jenis' => $this->input->post('cat_dinding_jenis'),
				'cat_dinding_kondisi' => $this->input->post('cat_dinding_kondisi'),
				'kusen_pintu_jumlah' => $this->input->post('kusen_pintu_jumlah'),
				'kusen_pintu_bahan' => $this->input->post('kusen_pintu_bahan'),
				'kusen_pintu_kondisi' => $this->input->post('kusen_pintu_kondisi'),
				'daun_pintu_jumlah' => $this->input->post('daun_pintu_jumlah'),
				'daun_pintu_bahan' => $this->input->post('daun_pintu_bahan'),
				'daun_pintu_kondisi' => $this->input->post('daun_pintu_kondisi'),
				'kunci_hendel_jumlah' => $this->input->post('kunci_hendel_jumlah'),
				'kunci_hendel_bahan' => $this->input->post('kunci_hendel_bahan'),
				'kunci_hendel_kondisi' => $this->input->post('kunci_hendel_kondisi'),
				'cat_pintu_panjang' => $this->input->post('cat_pintu_panjang'),
				'cat_pintu_jenis' => $this->input->post('cat_pintu_jenis'),
				'cat_pintu_kondisi' => $this->input->post('cat_pintu_kondisi'),
				'kusen_jendela_jumlah' => $this->input->post('kusen_jendela_jumlah'),
				'kusen_jendela_bahan' => $this->input->post('kusen_jendela_bahan'),
				'kusen_jendela_kondisi' => $this->input->post('kusen_jendela_kondisi'),
				'daun_jendela_jumlah' => $this->input->post('daun_jendela_jumlah'),
				'daun_jendela_bahan' => $this->input->post('daun_jendela_bahan'),
				'daun_jendela_kondisi' => $this->input->post('daun_jendela_kondisi'),
				'kaca_panjang' => $this->input->post('kaca_panjang'),
				'kaca_kondisi' => $this->input->post('kaca_kondisi'),
				'slot_jumlah' => $this->input->post('slot_jumlah'),
				'slot_merek' => $this->input->post('slot_merek'),
				'slot_kondisi' => $this->input->post('slot_kondisi'),
				'cat_jendela_panjang' => $this->input->post('cat_jendela_panjang'),
				'cat_jendela_jenis' => $this->input->post('cat_jendela_jenis'),
				'cat_jendela_kondisi' => $this->input->post('cat_jendela_kondisi')
			);

			$this->form_validation->set_rules($this->ruangan_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->ruangan_m->save($data, $ruangan->id);
				$this->session->set_flashdata('notif', 'Update Ruangan Berhasil!');
				redirect('user/profile#tab-ruangan');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-ruangan');
			}

		// Insert
		} else {
			$data = array(
				'id' => $user->id,
				'dinding_ruangan_panjang' => $this->input->post('dinding_ruangan_panjang'),
				'dinding_ruangan_bahan' => $this->input->post('dinding_ruangan_bahan'),
				'dinding_ruangan_kondisi' => $this->input->post('dinding_ruangan_kondisi'),
				'cat_dinding_panjang' => $this->input->post('cat_dinding_panjang'),
				'cat_dinding_jenis' => $this->input->post('cat_dinding_jenis'),
				'cat_dinding_kondisi' => $this->input->post('cat_dinding_kondisi'),
				'kusen_pintu_jumlah' => $this->input->post('kusen_pintu_jumlah'),
				'kusen_pintu_bahan' => $this->input->post('kusen_pintu_bahan'),
				'kusen_pintu_kondisi' => $this->input->post('kusen_pintu_kondisi'),
				'daun_pintu_jumlah' => $this->input->post('daun_pintu_jumlah'),
				'daun_pintu_bahan' => $this->input->post('daun_pintu_bahan'),
				'daun_pintu_kondisi' => $this->input->post('daun_pintu_kondisi'),
				'kunci_hendel_jumlah' => $this->input->post('kunci_hendel_jumlah'),
				'kunci_hendel_bahan' => $this->input->post('kunci_hendel_bahan'),
				'kunci_hendel_kondisi' => $this->input->post('kunci_hendel_kondisi'),
				'cat_pintu_panjang' => $this->input->post('cat_pintu_panjang'),
				'cat_pintu_jenis' => $this->input->post('cat_pintu_jenis'),
				'cat_pintu_kondisi' => $this->input->post('cat_pintu_kondisi'),
				'kusen_jendela_jumlah' => $this->input->post('kusen_jendela_jumlah'),
				'kusen_jendela_bahan' => $this->input->post('kusen_jendela_bahan'),
				'kusen_jendela_kondisi' => $this->input->post('kusen_jendela_kondisi'),
				'daun_jendela_jumlah' => $this->input->post('daun_jendela_jumlah'),
				'daun_jendela_bahan' => $this->input->post('daun_jendela_bahan'),
				'daun_jendela_kondisi' => $this->input->post('daun_jendela_kondisi'),
				'kaca_panjang' => $this->input->post('kaca_panjang'),
				'kaca_kondisi' => $this->input->post('kaca_kondisi'),
				'slot_jumlah' => $this->input->post('slot_jumlah'),
				'slot_merek' => $this->input->post('slot_merek'),
				'slot_kondisi' => $this->input->post('slot_kondisi'),
				'cat_jendela_panjang' => $this->input->post('cat_jendela_panjang'),
				'cat_jendela_jenis' => $this->input->post('cat_jendela_jenis'),
				'cat_jendela_kondisi' => $this->input->post('cat_jendela_kondisi')
			);

			$this->form_validation->set_rules($this->ruangan_m->rules);
			if ($this->form_validation->run() == TRUE) {
				$this->ruangan_m->save_ruangan($data);
				$this->session->set_flashdata('notif', 'Insert Ruangan Berhasil!');
				redirect('user/profile#tab-ruangan');
			} else {
				$this->session->set_flashdata('error', validation_errors());
				redirect('user/profile#tab-ruangan');
			}
		}
	}
}
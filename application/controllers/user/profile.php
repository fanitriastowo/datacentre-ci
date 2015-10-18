<?php 

class Profile extends User_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
	}

	public function index() {
		$this->load->view('user/profile');
	}

	public function insert() {
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$lokasi = $this->input->post('lokasi');
		$jenis_gedung = $this->input->post('jenis_gedung');
		$tahun_berdiri = $this->input->post('tahun_berdiri');
		$tahun_survey = $this->input->post('tahun_survey');
		$fungsi = $this->input->post('fungsi');
		$luas = $this->input->post('luas');

		$data = array(
				'kode' => $kode,
				'nama' => $nama,
				'lokasi' => $lokasi,
				'jenis_gedung' => $jenis_gedung,
				'tahun_berdiri' => $tahun_berdiri,
				'tahun_survey' => $tahun_survey,
				'fungsi' => $fungsi,
				'luas' => $luas
			);
		$this->form_validation->set_rules($this->gedung_m->rules);

		if ($this->form_validation->run() == TRUE) {
			$this->gedung_m->save($data);
			$this->session->set_flashdata('notif', 'Insert Gedung Berhasil!');
			redirect('user/profile');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('user/profile');
		}
	}
}
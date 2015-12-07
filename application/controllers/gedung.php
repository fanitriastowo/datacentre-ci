<?php 

class Gedung extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('gedung_m');
		$this->load->model('air_m');
		$this->load->model('atap_m');
		$this->load->model('kelistrikan_m');
		$this->load->model('lantai_m');
		$this->load->model('plafon_m');
		$this->load->model('pondasi_m');
		$this->load->model('ruangan_m');
		$this->load->model('struktur_m');
	}

	public function index() {
		$data['gedungs'] = $this->gedung_m->get();
		$this->load->view('gedung/gedung_v', $data);
	}

	public function detail($id) {
		
		$this->global_data['gedung'] = $this->gedung_m->get($id, TRUE);
		$this->global_data['air'] = $this->air_m->get($id, TRUE);
		$this->global_data['atap'] = $this->atap_m->get($id, TRUE);
		$this->global_data['kelistrikan'] = $this->kelistrikan_m->get($id, TRUE);
		$this->global_data['lantai'] = $this->lantai_m->get($id, TRUE);
		$this->global_data['plafon'] = $this->plafon_m->get($id, TRUE);
		$this->global_data['pondasi'] = $this->pondasi_m->get($id, TRUE);
		$this->global_data['ruangan'] = $this->ruangan_m->get($id, TRUE);
		$this->global_data['struktur'] = $this->struktur_m->get($id, TRUE);
		
		$this->load->view('gedung/gedung_detail_v', $this->global_data);
	}
}
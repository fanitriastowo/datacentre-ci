<?php 

class Gedung extends Admin_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('air_m');
		$this->load->model('atap_m');
		$this->load->model('gedung_m');
		$this->load->model('kelistrikan_m');
		$this->load->model('lantai_m');
		$this->load->model('plafon_m');
		$this->load->model('pondasi_m');
		$this->load->model('ruangan_m');
		$this->load->model('struktur_m');
	}

	public function index() {
		$this->global_data['gedungs'] = $this->gedung_m->get();
		$this->global_data['title'] = "Daftar Gedung";
		$this->load->view('administrator/admin_gedung_v', $this->global_data);
	}

	public function delete($id) {
		
		$this->air_m->delete($id);
		$this->atap_m->delete($id);
		$this->gedung_m->delete($id);
		$this->kelistrikan_m->delete($id);
		$this->lantai_m->delete($id);
		$this->plafon_m->delete($id);
		$this->pondasi_m->delete($id);
		$this->ruangan_m->delete($id);
		$this->struktur_m->delete($id);
		
		$this->session->set_flashdata('notif', 'Delete Gedung Successful!');
		redirect('administrator/gedung');
	}
}
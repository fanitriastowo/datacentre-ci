<?php 

class Gedung_m extends MY_Model {

	protected $_table_name = 'gedung';
	protected $_order_by = 'kode';
	public $rules = array(
		'kode' => array(
			'field' => 'kode', 
			'label' => 'Kode',
			'rules' => 'trim|xss_clean|max_length[2]'
		),
		'nama' => array(
			'field' => 'nama', 
			'label' => 'Nama',
			'rules' => 'trim|xss_clean|max_length[100]'
		),
		'lokasi' => array(
			'field' => 'lokasi', 
			'label' => 'Lokasi',
			'rules' => 'trim|xss_clean'
		),
		'tahun_berdiri' => array(
			'field' => 'tahun_berdiri', 
			'label' => 'Tahun Berdiri',
			'rules' => 'trim|xss_clean|exact_length[10]'
		),
		'tahun_survey' => array(
			'field' => 'tahun_survey', 
			'label' => 'Tahun Survey',
			'rules' => 'trim|xss_clean|exact_length[10]'
		),
		'fungsi' => array(
			'field' => 'fungsi', 
			'label' => 'Fungsi',
			'rules' => 'trim|xss_clean'
		),
		'luas' => array(
			'field' => 'luas', 
			'label' => 'Luas',
			'rules' => 'trim|xss_clean|numeric'
		)
	);

	public $option_kondisi = array(
		'BAIK' => 'Baik',
		'RUSAK_RINGAN' => 'Rusak Ringan',
		'RUSAK_SEDANG' => 'Rusak Sedang',
		'RUSAK_BERAT' => 'Rusak Berat'
	);

	function __construct() {
		parent::__construct();
	}

	public function get_new(){
		$gedung = new stdClass();
		$gedung->kode = '';
		$gedung->nama = '';
		$gedung->lokasi = '';
		$gedung->jenis_gedung = '1_Lantai';
		$gedung->tahun_berdiri = '';
		$gedung->tahun_survey = '';
		$gedung->fungsi = '';
		$gedung->luas = 0;
		return $gedung;
	}

	public function save_gedung($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
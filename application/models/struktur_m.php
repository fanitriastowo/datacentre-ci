<?php 

class Struktur_m extends MY_Model {

	protected $_table_name = 'struktur';
	protected $_order_by = 'id';
	public $rules = array(
		'kolom_jumlah' => array(
			'field' => 'kolom_jumlah', 
			'label' => 'Jumlah Kolom',
			'rules' => 'trim|xss_clean|integer'
		),
		'kolom_bahan' => array(
			'field' => 'kolom_bahan', 
			'label' => 'Bahan Kolom',
			'rules' => 'trim|xss_clean'
		),
		'kolom_kondisi' => array(
			'field' => 'kolom_kondisi', 
			'label' => 'Kondisi Kolom',
			'rules' => 'trim|xss_clean'
		),
		'ring_balok_jumlah' => array(
			'field' => 'ring_balok_jumlah', 
			'label' => 'Jumlah Ring Balok',
			'rules' => 'trim|xss_clean|integer'
		),
		'ring_balok_bahan' => array(
			'field' => 'ring_balok_bahan', 
			'label' => 'Bahan Ring Balok',
			'rules' => 'trim|xss_clean'
		),
		'ring_balok_kondisi' => array(
			'field' => 'ring_balok_kondisi', 
			'label' => 'Kondisi Ring Balok',
			'rules' => 'trim|xss_clean'
		),
		'balok_jumlah' => array(
			'field' => 'balok_jumlah', 
			'label' => 'Jumlah Balok',
			'rules' => 'trim|xss_clean|integer'
		),
		'balok_bahan' => array(
			'field' => 'balok_bahan', 
			'label' => 'Bahan Balok',
			'rules' => 'trim|xss_clean'
		),
		'balok_kondisi' => array(
			'field' => 'balok_kondisi', 
			'label' => 'Kondisi Balok',
			'rules' => 'trim|xss_clean'
		),
		'pelat_lantai_panjang' => array(
			'field' => 'pelat_lantai_panjang', 
			'label' => 'Panjang Pelat Lantai',
			'rules' => 'trim|xss_clean|numeric'
		),
		'pelat_lantai_bahan' => array(
			'field' => 'pelat_lantai_bahan', 
			'label' => 'Bahan Pelat Lantai',
			'rules' => 'trim|xss_clean'
		),
		'pelat_lantai_kondisi' => array(
			'field' => 'pelat_lantai_kondisi', 
			'label' => 'Kondisi Pelat Lantai',
			'rules' => 'trim|xss_clean'
		)
	);

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$struktur = new stdClass();
		$struktur->kolom_jumlah = '';
		$struktur->kolom_bahan = '';
		$struktur->kolom_kondisi = 'BAIK';
		$struktur->ring_balok_jumlah = '';
		$struktur->ring_balok_bahan = '';
		$struktur->ring_balok_kondisi = 'BAIK';
		$struktur->balok_jumlah = '';
		$struktur->balok_bahan = '';
		$struktur->balok_kondisi = 'BAIK';
		$struktur->pelat_lantai_panjang = '';
		$struktur->pelat_lantai_bahan = '';
		$struktur->pelat_lantai_kondisi = 'BAIK';
		return $struktur;
	}

	public function save_struktur($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
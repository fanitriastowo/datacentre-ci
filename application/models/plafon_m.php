<?php 

class Plafon_m extends MY_Model {

	protected $_table_name = 'plafon';
	protected $_order_by = 'id';
	public $rules = array(
		'lisplang_panjang' => array(
			'field' => 'lisplang_panjang', 
			'label' => 'Panjang Lisplang',
			'rules' => 'trim|xss_clean|numeric'
		),
		'lisplang_bahan' => array(
			'field' => 'lisplang_bahan', 
			'label' => 'Bahan Lisplang',
			'rules' => 'trim|xss_clean'
		),
		'lisplang_kondisi' => array(
			'field' => 'lisplang_kondisi', 
			'label' => 'Kondisi Lisplang',
			'rules' => 'trim|xss_clean'
		),
		'rangka_plafon_panjang' => array(
			'field' => 'rangka_plafon_panjang', 
			'label' => 'Panjang Rangka Plafon',
			'rules' => 'trim|xss_clean|numeric'
		),
		'rangka_plafon_bahan' => array(
			'field' => 'rangka_plafon_bahan', 
			'label' => 'Bahan Rangka Plafon',
			'rules' => 'trim|xss_clean'
		),
		'rangka_plafon_kondisi' => array(
			'field' => 'rangka_plafon_kondisi', 
			'label' => 'Kondisi Rangka Plafon',
			'rules' => 'trim|xss_clean'
		),
		'plafon_panjang' => array(
			'field' => 'plafon_panjang', 
			'label' => 'Panjang Plafon',
			'rules' => 'trim|xss_clean|numeric'
		),
		'plafon_bahan' => array(
			'field' => 'plafon_bahan', 
			'label' => 'Bahan Plafon',
			'rules' => 'trim|xss_clean'
		),
		'plafon_kondisi' => array(
			'field' => 'plafon_kondisi', 
			'label' => 'Kondisi Plafon',
			'rules' => 'trim|xss_clean'
		)
	);

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$plafon = new stdClass();
		$plafon->lisplang_panjang = '';
		$plafon->lisplang_bahan = '';
		$plafon->lisplang_kondisi = 'BAIK';
		$plafon->rangka_plafon_panjang = '';
		$plafon->rangka_plafon_bahan = '';
		$plafon->rangka_plafon_kondisi = 'BAIK';
		$plafon->plafon_panjang = '';
		$plafon->plafon_bahan = '';
		$plafon->plafon_kondisi = 'BAIK';
		return $plafon;
	}

	public function save_plafon($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
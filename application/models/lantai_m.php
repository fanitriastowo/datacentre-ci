<?php 

class Lantai_m extends MY_Model {

	protected $_table_name = 'lantai';
	protected $_order_by = 'id';
	public $rules = array(
		'keramik_panjang' => array(
			'field' => 'keramik_panjang', 
			'label' => 'Panjang Keramik',
			'rules' => 'trim|xss_clean|decimal'
		),
		'keramik_bahan' => array(
			'field' => 'keramik_bahan', 
			'label' => 'Bahan Keramik Lantai',
			'rules' => 'trim|xss_clean'
		),
		'keramik_kondisi' => array(
			'field' => 'keramik_kondisi', 
			'label' => 'Kondisi Keramik',
			'rules' => 'trim|xss_clean'
		)
	);

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$lantai = new stdClass();
		$lantai->keramik_panjang = '';
		$lantai->keramik_bahan = '';
		$lantai->keramik_kondisi = 'BAIK';
		return $lantai;
	}

	public function save_lantai($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
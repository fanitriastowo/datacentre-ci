<?php 

class Pondasi_m extends MY_Model {

	protected $_table_name = 'pondasi';
	protected $_order_by = 'id';
	public $rules = array(
		'sloof_panjang' => array(
			'field' => 'sloof_panjang', 
			'label' => 'Panjang Sloof',
			'rules' => 'trim|xss_clean|numeric'
		),
		'sloof_bahan' => array(
			'field' => 'sloof_bahan', 
			'label' => 'Bahan Sloof',
			'rules' => 'trim|xss_clean'
		),
		'sloof_kondisi' => array(
			'field' => 'sloof_kondisi', 
			'label' => 'Kondisi Sloof',
			'rules' => 'trim|xss_clean'
		)
	);

	function __construct() {
		parent::__construct();
	}

	public function get_new(){
		$pondasi = new stdClass();
		$pondasi->sloof_panjang = '';
		$pondasi->sloof_bahan = '';
		$pondasi->sloof_kondisi = 'BAIK';
		return $pondasi;
	}

	public function save_pondasi($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
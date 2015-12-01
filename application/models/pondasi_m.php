<?php 

class Pondasi_m extends MY_Model {

	protected $_table_name = 'pondasi';
	protected $_order_by = 'id';
	public $rules = array();

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
}
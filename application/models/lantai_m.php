<?php 

class Lantai_m extends MY_Model {

	protected $_table_name = 'lantai';
	protected $_order_by = 'id';
	public $rules = array();

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
}
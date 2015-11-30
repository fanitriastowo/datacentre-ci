<?php 

class Plafon_m extends MY_Model {

	protected $_table_name = 'plafon';
	protected $_order_by = 'id';
	public $rules = array();

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
}
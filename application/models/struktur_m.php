<?php 

class Struktur_m extends MY_Model {

	protected $_table_name = 'struktur';
	protected $_order_by = 'id';
	public $rules = array();

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
}
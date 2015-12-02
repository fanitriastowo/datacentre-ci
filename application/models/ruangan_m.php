<?php 

class Ruangan_m extends MY_Model {

	protected $_table_name = 'ruangan';
	protected $_order_by = 'id';
	public $rules = array();

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$ruangan = new stdClass();
		$ruangan->dinding_ruangan_panjang = '';
		$ruangan->dinding_ruangan_bahan = '';
		$ruangan->dinding_ruangan_kondisi = 'BAIK';
		$ruangan->cat_dinding_panjang = '';
		$ruangan->cat_dinding_jenis = '';
		$ruangan->cat_dinding_kondisi = 'BAIK';
		$ruangan->kusen_pintu_jumlah = '';
		$ruangan->kusen_pintu_bahan = '';
		$ruangan->kusen_pintu_kondisi = 'BAIK';
		$ruangan->daun_pintu_jumlah = '';
		$ruangan->daun_pintu_bahan = '';
		$ruangan->daun_pintu_kondisi = 'BAIK';
		$ruangan->kunci_hendel_jumlah = '';
		$ruangan->kunci_hendel_bahan = '';
		$ruangan->kunci_hendel_kondisi = 'BAIK';
		$ruangan->cat_pintu_panjang = '';
		$ruangan->cat_pintu_jenis = '';
		$ruangan->cat_pintu_kondisi = 'BAIK';
		$ruangan->kusen_jendela_jumlah = '';
		$ruangan->kusen_jendela_bahan = '';
		$ruangan->kusen_jendela_kondisi = 'BAIK';
		$ruangan->daun_jendela_jumlah = '';
		$ruangan->daun_jendela_bahan = '';
		$ruangan->daun_jendela_kondisi = 'BAIK';
		$ruangan->kaca_panjang = '';
		$ruangan->kaca_kondisi = 'BAIK';
		$ruangan->slot_jumlah = '';
		$ruangan->slot_merek = '';
		$ruangan->slot_kondisi = 'BAIK';
		$ruangan->cat_jendela_panjang = '';
		$ruangan->cat_jendela_jenis = '';
		$ruangan->cat_jendela_kondisi = 'BAIK';
		return $ruangan;
	}
}
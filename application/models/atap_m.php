<?php 

class Atap_m extends MY_Model {

	protected $_table_name = 'atap';
	protected $_order_by = 'id';

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$atap = new stdClass();
		$atap->usuk_panjang = '';
		$atap->usuk_bahan = '';
		$atap->usuk_kondisi = 'BAIK';
		$atap->gording_panjang = '';
		$atap->gording_bahan = '';
		$atap->gording_kondisi = 'BAIK';
		$atap->reng_panjang = '';
		$atap->reng_bahan = '';
		$atap->reng_kondisi = 'BAIK';
		$atap->kuda_kuda_panjang = '';
		$atap->kuda_kuda_bahan = '';
		$atap->kuda_kuda_kondisi = 'BAIK';
		$atap->ikatan_angin_panjang = '';
		$atap->ikatan_angin_bahan = '';
		$atap->ikatan_angin_kondisi = 'BAIK';
		$atap->genteng_panjang = '';
		$atap->genteng_bahan = '';
		$atap->genteng_kondisi = 'BAIK';
		$atap->bumbungan_panjang = '';
		$atap->bumbungan_bahan = '';
		$atap->bumbungan_kondisi = 'BAIK';
		return $atap;
	}
}
<?php 

class Kelistrikan_m extends MY_Model {

	protected $_table_name = 'kelistrikan';
	protected $_order_by = 'id';
	public $rules = array();

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$kelistrikan = new stdClass();
		$kelistrikan->instalasi_kabel_panjang = '';
		$kelistrikan->instalasi_kabel_jenis = '';
		$kelistrikan->instalasi_kabel_kondisi = 'BAIK';
		$kelistrikan->lampu_jumlah = '';
		$kelistrikan->lampu_jumlah_baik = '';
		$kelistrikan->lampu_jumlah_rusak = '';
		$kelistrikan->stop_kontak_jumlah = '';
		$kelistrikan->stop_kontak_jumlah_baik = '';
		$kelistrikan->stop_kontak_jumlah_rusak = '';
		$kelistrikan->saklar_jumlah = '';
		$kelistrikan->saklar_jumlah_baik = '';
		$kelistrikan->saklar_jumlah_rusak = '';
		$kelistrikan->instalasi_listrik_kondisi = 'BAIK';
		$kelistrikan->installasi_kable_LAN_panjang = '';
		$kelistrikan->installasi_kable_LAN_kondisi = 'BAIK';
		$kelistrikan->switch_jumlah = '';
		$kelistrikan->switch_jumlah_baik = '';
		$kelistrikan->switch_jumlah_rusak = '';
		return $kelistrikan;
	}
}
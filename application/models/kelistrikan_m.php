<?php 

class Kelistrikan_m extends MY_Model {

	protected $_table_name = 'kelistrikan';
	protected $_order_by = 'id';
	public $rules = array(
		'instalasi_kabel_panjang' => array(
			'field' => 'instalasi_kabel_panjang', 
			'label' => 'Panjang Instalasi Kabel',
			'rules' => 'trim|xss_clean|decimal'
		),
		'instalasi_kabel_jenis' => array(
			'field' => 'instalasi_kabel_jenis', 
			'label' => 'Jenis Instalasi Kabel',
			'rules' => 'trim|xss_clean'
		),
		'instalasi_kabel_kondisi' => array(
			'field' => 'instalasi_kabel_kondisi', 
			'label' => 'Kondisi Instalasi Kabel',
			'rules' => 'trim|xss_clean'
		),
		'lampu_jumlah' => array(
			'field' => 'lampu_jumlah', 
			'label' => 'Jumlah Total Lampu',
			'rules' => 'trim|xss_clean|integer'
		),
		'lampu_jumlah_baik' => array(
			'field' => 'lampu_jumlah_baik', 
			'label' => 'Jumlah Lampu Kondisi Baik',
			'rules' => 'trim|xss_clean|integer'
		),
		'lampu_jumlah_rusak' => array(
			'field' => 'lampu_jumlah_rusak', 
			'label' => 'Jumlah Lampu Kondisi Rusak',
			'rules' => 'trim|xss_clean|integer'
		),
		'stop_kontak_jumlah' => array(
			'field' => 'stop_kontak_jumlah', 
			'label' => 'Jumlah Total Stop Kontak',
			'rules' => 'trim|xss_clean|integer'
		),
		'stop_kontak_jumlah_baik' => array(
			'field' => 'stop_kontak_jumlah_baik', 
			'label' => 'Jumlah Stop Kontak Kondisi Baik',
			'rules' => 'trim|xss_clean|integer'
		),
		'stop_kontak_jumlah_rusak' => array(
			'field' => 'stop_kontak_jumlah_rusak', 
			'label' => 'Jumlah Stop Kontak Kondisi Rusak',
			'rules' => 'trim|xss_clean|integer'
		),
		'saklar_jumlah' => array(
			'field' => 'saklar_jumlah', 
			'label' => 'Jumlah Total Saklar',
			'rules' => 'trim|xss_clean|integer'
		),
		'saklar_jumlah_baik' => array(
			'field' => 'saklar_jumlah_baik', 
			'label' => 'Jumlah Saklar Kondisi Baik',
			'rules' => 'trim|xss_clean|integer'
		),
		'saklar_jumlah_rusak' => array(
			'field' => 'saklar_jumlah_rusak', 
			'label' => 'Jumlah Saklar Kondisi Rusak',
			'rules' => 'trim|xss_clean|integer'
		),
		'instalasi_listrik_kondisi' => array(
			'field' => 'instalasi_listrik_kondisi', 
			'label' => 'Kondisi Instalasi Listrik',
			'rules' => 'trim|xss_clean'
		),
		'installasi_kable_LAN_panjang' => array(
			'field' => 'installasi_kable_LAN_panjang', 
			'label' => 'Panjang Instalasi Kabel LAN',
			'rules' => 'trim|xss_clean|decimal'
		),
		'installasi_kable_LAN_kondisi' => array(
			'field' => 'installasi_kable_LAN_kondisi', 
			'label' => 'Kondisi Instalasi Kabel LAN',
			'rules' => 'trim|xss_clean'
		),
		'switch_jumlah' => array(
			'field' => 'switch_jumlah', 
			'label' => 'Jumlah Total Switch',
			'rules' => 'trim|xss_clean|integer'
		),
		'switch_jumlah_baik' => array(
			'field' => 'switch_jumlah_baik', 
			'label' => 'Jumlah Switch Kondisi Baik',
			'rules' => 'trim|xss_clean|integer'
		),
		'switch_jumlah_rusak' => array(
			'field' => 'switch_jumlah_rusak', 
			'label' => 'Jumlah Switch Kondisi Rusak',
			'rules' => 'trim|xss_clean|integer'
		)
	);

	function __construct() {
		parent::__construct();
	}

	public function save_kelistrikan($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
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
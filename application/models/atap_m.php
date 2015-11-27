<?php 

class Atap_m extends MY_Model {

	protected $_table_name = 'atap';
	protected $_order_by = 'id';
	public $rules = array(
		'usuk_panjang' => array(
			'field' => 'usuk_panjang', 
			'label' => 'Panjang Usuk',
			'rules' => 'trim|xss_clean|integer'
		),
		'usuk_bahan' => array(
			'field' => 'usuk_bahan', 
			'label' => 'Bahan Usuk',
			'rules' => 'trim|xss_clean'
		),
		'usuk_kondisi' => array(
			'field' => 'usuk_kondisi', 
			'label' => 'Kondisi Usuk',
			'rules' => 'trim|xss_clean'
		),
		'gording_panjang' => array(
			'field' => 'gording_panjang', 
			'label' => 'Panjang Gording',
			'rules' => 'trim|xss_clean|integer'
		),
		'gording_bahan' => array(
			'field' => 'gording_bahan', 
			'label' => 'Bahan Gording',
			'rules' => 'trim|xss_clean'
		),
		'gording_kondisi' => array(
			'field' => 'gording_kondisi', 
			'label' => 'Kondisi Gording',
			'rules' => 'trim|xss_clean'
		),
		'reng_panjang' => array(
			'field' => 'reng_panjang', 
			'label' => 'Panjang Reng',
			'rules' => 'trim|xss_clean|integer'
		),
		'reng_bahan' => array(
			'field' => 'reng_bahan', 
			'label' => 'Bahan Reng',
			'rules' => 'trim|xss_clean'
		),
		'reng_kondisi' => array(
			'field' => 'reng_kondisi', 
			'label' => 'Kondisi Reng',
			'rules' => 'trim|xss_clean'
		),
		'kuda_kuda_panjang' => array(
			'field' => 'kuda_kuda_panjang', 
			'label' => 'Panjang Kuda Kuda',
			'rules' => 'trim|xss_clean|integer'
		),
		'kuda_kuda_bahan' => array(
			'field' => 'kuda_kuda_bahan', 
			'label' => 'Bahan Kuda Kuda',
			'rules' => 'trim|xss_clean'
		),
		'kuda_kuda_kondisi' => array(
			'field' => 'kuda_kuda_kondisi', 
			'label' => 'Kondisi Kuda Kuda',
			'rules' => 'trim|xss_clean'
		),
		'ikatan_angin_panjang' => array(
			'field' => 'ikatan_angin_panjang', 
			'label' => 'Panjang Ikatan Angin',
			'rules' => 'trim|xss_clean|integer'
		),
		'ikatan_angin_bahan' => array(
			'field' => 'ikatan_angin_bahan', 
			'label' => 'Bahan Ikatan Angin',
			'rules' => 'trim|xss_clean'
		),
		'ikatan_angin_kondisi' => array(
			'field' => 'ikatan_angin_kondisi', 
			'label' => 'Kondisi Ikatan Angin',
			'rules' => 'trim|xss_clean'
		),
		'genteng_panjang' => array(
			'field' => 'genteng_panjang', 
			'label' => 'Panjang Genteng',
			'rules' => 'trim|xss_clean|integer'
		),
		'genteng_bahan' => array(
			'field' => 'genteng_bahan', 
			'label' => 'Bahan Genteng',
			'rules' => 'trim|xss_clean'
		),
		'genteng_kondisi' => array(
			'field' => 'genteng_kondisi', 
			'label' => 'Kondisi Genteng',
			'rules' => 'trim|xss_clean'
		),
		'bumbungan_panjang' => array(
			'field' => 'bumbungan_panjang', 
			'label' => 'Panjang Bumbungan',
			'rules' => 'trim|xss_clean|integer'
		),
		'bumbungan_bahan' => array(
			'field' => 'bumbungan_bahan', 
			'label' => 'Bahan Bumbungan',
			'rules' => 'trim|xss_clean'
		),
		'bumbungan_kondisi' => array(
			'field' => 'bumbungan_kondisi', 
			'label' => 'Kondisi Bumbungan',
			'rules' => 'trim|xss_clean'
		)
	);

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

	public function save_atap($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
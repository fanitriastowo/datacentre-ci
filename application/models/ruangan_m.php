<?php 

class Ruangan_m extends MY_Model {

	protected $_table_name = 'ruangan';
	protected $_order_by = 'id';
	public $rules = array(
		'dinding_ruangan_panjang' => array(
			'field' => 'dinding_ruangan_panjang', 
			'label' => 'Panjang Dinding Ruangan',
			'rules' => 'trim|xss_clean|numeric'
		),
		'dinding_ruangan_bahan' => array(
			'field' => 'dinding_ruangan_bahan', 
			'label' => 'Bahan Dinding Ruangan',
			'rules' => 'trim|xss_clean'
		),
		'dinding_ruangan_kondisi' => array(
			'field' => 'dinding_ruangan_kondisi', 
			'label' => 'Kondisi Dinding Ruangan',
			'rules' => 'trim|xss_clean'
		),
		'cat_dinding_panjang' => array(
			'field' => 'cat_dinding_panjang', 
			'label' => 'Panjang Cat Dinding',
			'rules' => 'trim|xss_clean|numeric'
		),
		'cat_dinding_jenis' => array(
			'field' => 'cat_dinding_jenis', 
			'label' => 'Jenis Cat Dinding',
			'rules' => 'trim|xss_clean'
		),
		'cat_dinding_kondisi' => array(
			'field' => 'cat_dinding_kondisi', 
			'label' => 'Kondisi Cat Dinding',
			'rules' => 'trim|xss_clean'
		),
		'kusen_pintu_jumlah' => array(
			'field' => 'kusen_pintu_jumlah', 
			'label' => 'Jumlah Kusen Pintu',
			'rules' => 'trim|xss_clean|integer'
		),
		'kusen_pintu_bahan' => array(
			'field' => 'kusen_pintu_bahan', 
			'label' => 'Bahan Kusen Pintu',
			'rules' => 'trim|xss_clean'
		),
		'kusen_pintu_kondisi' => array(
			'field' => 'kusen_pintu_kondisi', 
			'label' => 'Kondisi Kusen Pintu',
			'rules' => 'trim|xss_clean'
		),
		'daun_pintu_jumlah' => array(
			'field' => 'daun_pintu_jumlah', 
			'label' => 'Jumlah Daun Pintu',
			'rules' => 'trim|xss_clean|integer'
		),
		'daun_pintu_bahan' => array(
			'field' => 'daun_pintu_bahan', 
			'label' => 'Bahan Daun Pintu',
			'rules' => 'trim|xss_clean'
		),
		'daun_pintu_kondisi' => array(
			'field' => 'daun_pintu_kondisi', 
			'label' => 'Kondisi Daun Pintu',
			'rules' => 'trim|xss_clean'
		),
		'kunci_hendel_jumlah' => array(
			'field' => 'kunci_hendel_jumlah', 
			'label' => 'Jumlah Kunci Hendel',
			'rules' => 'trim|xss_clean|integer'
		),
		'kunci_hendel_bahan' => array(
			'field' => 'kunci_hendel_bahan', 
			'label' => 'Bahan Kunci Hendel',
			'rules' => 'trim|xss_clean'
		),
		'kunci_hendel_kondisi' => array(
			'field' => 'kunci_hendel_kondisi', 
			'label' => 'Kondisi Kunci Hendel',
			'rules' => 'trim|xss_clean'
		),
		'cat_pintu_panjang' => array(
			'field' => 'cat_pintu_panjang', 
			'label' => 'Panjang Cat Pintu',
			'rules' => 'trim|xss_clean|numeric'
		),
		'cat_pintu_jenis' => array(
			'field' => 'cat_pintu_jenis', 
			'label' => 'Jenis Cat Pintu',
			'rules' => 'trim|xss_clean'
		),
		'cat_pintu_kondisi' => array(
			'field' => 'cat_pintu_kondisi', 
			'label' => 'Kondisi Cat Pintu',
			'rules' => 'trim|xss_clean'
		),
		'kusen_jendela_jumlah' => array(
			'field' => 'kusen_jendela_jumlah', 
			'label' => 'Jumlah Kusen Jendela',
			'rules' => 'trim|xss_clean|integer'
		),
		'kusen_jendela_bahan' => array(
			'field' => 'kusen_jendela_bahan', 
			'label' => 'Bahan Kunci Jendela',
			'rules' => 'trim|xss_clean'
		),
		'kusen_jendela_kondisi' => array(
			'field' => 'kusen_jendela_kondisi', 
			'label' => 'Kondisi Kusen Jendela',
			'rules' => 'trim|xss_clean'
		),
		'daun_jendela_jumlah' => array(
			'field' => 'daun_jendela_jumlah', 
			'label' => 'Jumlah Daun Jendela',
			'rules' => 'trim|xss_clean|integer'
		),
		'daun_jendela_bahan' => array(
			'field' => 'daun_jendela_bahan', 
			'label' => 'Bahan Daun Jendela',
			'rules' => 'trim|xss_clean'
		),
		'daun_jendela_kondisi' => array(
			'field' => 'daun_jendela_kondisi', 
			'label' => 'Kondisi Daun Jendela',
			'rules' => 'trim|xss_clean'
		),
		'kaca_panjang' => array(
			'field' => 'kaca_panjang', 
			'label' => 'Jumlah Kaca',
			'rules' => 'trim|xss_clean|numeric'
		),
		'kaca_kondisi' => array(
			'field' => 'kaca_kondisi', 
			'label' => 'Kondisi Kaca',
			'rules' => 'trim|xss_clean'
		),
		'slot_jumlah' => array(
			'field' => 'slot_jumlah', 
			'label' => 'Jumlah Slot',
			'rules' => 'trim|xss_clean|integer'
		),
		'slot_merek' => array(
			'field' => 'slot_merek', 
			'label' => 'Merek Slot',
			'rules' => 'trim|xss_clean'
		),
		'slot_kondisi' => array(
			'field' => 'slot_kondisi', 
			'label' => 'Kondisi Slot',
			'rules' => 'trim|xss_clean'
		),
		'cat_jendela_panjang' => array(
			'field' => 'cat_jendela_panjang', 
			'label' => 'Panjang Cat Jendela',
			'rules' => 'trim|xss_clean|numeric'
		),
		'cat_jendela_jenis' => array(
			'field' => 'cat_jendela_jenis', 
			'label' => 'Jenis Cat Jendela',
			'rules' => 'trim|xss_clean'
		),
		'cat_jendela_kondisi' => array(
			'field' => 'cat_jendela_kondisi', 
			'label' => 'Kondisi Cat Jendela',
			'rules' => 'trim|xss_clean'
		)
	);

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

	public function save_ruangan($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
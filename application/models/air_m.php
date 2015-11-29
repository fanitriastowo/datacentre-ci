<?php 

class Air_m extends MY_Model {

	protected $_table_name = 'air';
	protected $_order_by = 'id';
	public $rules = array(
		'i_p_a_b_panjang' => array(
			'field' => 'i_p_a_b_panjang', 
			'label' => 'Panjang Instalasi Pipa Air Bersih',
			'rules' => 'trim|xss_clean|numeric'
		),
		'i_p_a_b_bahan' => array(
			'field' => 'i_p_a_b_bahan', 
			'label' => 'Bahan Instalasi Pipa Air Bersih',
			'rules' => 'trim|xss_clean'
		),
		'i_p_a_b_kondisi' => array(
			'field' => 'i_p_a_b_kondisi', 
			'label' => 'Kondisi Instalasi Pipa Air Bersih',
			'rules' => 'trim|xss_clean'
		),
		'tangki_air_volume' => array(
			'field' => 'tangki_air_volume', 
			'label' => 'Volume Tangki Air',
			'rules' => 'trim|xss_clean|numeric'
		),
		'tangki_air_kondisi' => array(
			'field' => 'tangki_air_kondisi', 
			'label' => 'Kondisi Tangki Air',
			'rules' => 'trim|xss_clean'
		),
		'pompa_jumlah' => array(
			'field' => 'pompa_jumlah', 
			'label' => 'Jumlah Pompa Air',
			'rules' => 'trim|xss_clean|integer'
		),
		'pompa_kondisi' => array(
			'field' => 'pompa_kondisi', 
			'label' => 'Kondisi Pompa Air',
			'rules' => 'trim|xss_clean'
		),
		'kran_jumlah' => array(
			'field' => 'kran_jumlah', 
			'label' => 'Jumlah Kran',
			'rules' => 'trim|xss_clean|integer'
		),
		'kran_merek' => array(
			'field' => 'kran_merek', 
			'label' => 'Merek Kran',
			'rules' => 'trim|xss_clean'
		),
		'kran_kondisi' => array(
			'field' => 'kran_kondisi', 
			'label' => 'Kondisi Kran',
			'rules' => 'trim|xss_clean'
		),
		'ground_tank_jumlah' => array(
			'field' => 'ground_tank_jumlah', 
			'label' => 'Jumlah Ground Tank',
			'rules' => 'trim|xss_clean|integer'
		),
		'ground_tank_merek' => array(
			'field' => 'ground_tank_merek', 
			'label' => 'Merek Ground Tank',
			'rules' => 'trim|xss_clean'
		),
		'ground_tank_kondisi' => array(
			'field' => 'ground_tank_kondisi', 
			'label' => 'Kondisi Ground Tank',
			'rules' => 'trim|xss_clean'
		),
		'i_a_k_panjang' => array(
			'field' => 'i_a_k_panjang', 
			'label' => 'Panjang Instalasi Air Kotor',
			'rules' => 'trim|xss_clean|numeric'
		),
		'i_a_k_bahan' => array(
			'field' => 'i_a_k_bahan', 
			'label' => 'Bahan Instalasi Air Kotor',
			'rules' => 'trim|xss_clean'
		),
		'i_a_k_kondisi' => array(
			'field' => 'i_a_k_kondisi', 
			'label' => 'Kondisi Instalasi Air Kotor',
			'rules' => 'trim|xss_clean'
		),
		'drainase_jumlah' => array(
			'field' => 'drainase_jumlah', 
			'label' => 'Jumlah Drainase',
			'rules' => 'trim|xss_clean|integer'
		),
		'drainase_bahan' => array(
			'field' => 'drainase_bahan', 
			'label' => 'Bahan Drainase',
			'rules' => 'trim|xss_clean'
		),
		'drainase_kondisi' => array(
			'field' => 'drainase_kondisi', 
			'label' => 'Kondisi Drainase',
			'rules' => 'trim|xss_clean'
		),
		'water_closed_jumlah' => array(
			'field' => 'water_closed_jumlah', 
			'label' => 'Jumlah Water Closed',
			'rules' => 'trim|xss_clean|integer'
		),
		'water_closed_merek' => array(
			'field' => 'water_closed_merek', 
			'label' => 'Merek Water Closed',
			'rules' => 'trim|xss_clean'
		),
		'water_closed_kondisi' => array(
			'field' => 'water_closed_kondisi', 
			'label' => 'Kondisi Water Closed',
			'rules' => 'trim|xss_clean'
		)
	);

	public $option_kondisi = array(
		'BAIK' => 'Baik',
		'RUSAK_RINGAN' => 'Rusak Ringan',
		'RUSAK_SEDANG' => 'Rusak Sedang',
		'RUSAK_BERAT' => 'Rusak Berat'
	);

	function __construct() {
		parent::__construct();
	}

	public function get_new() {
		$air = new stdClass();
		$air->i_p_a_b_panjang = '';
		$air->i_p_a_b_bahan = '';
		$air->i_p_a_b_kondisi = 'BAIK';
		$air->tangki_air_volume = '';
		$air->tangki_air_kondisi = 'BAIK';
		$air->pompa_jumlah = '';
		$air->pompa_kondisi = 'BAIK';
		$air->kran_jumlah = '';
		$air->kran_merek = '';
		$air->kran_kondisi = 'BAIK';
		$air->ground_tank_jumlah = '';
		$air->ground_tank_merek = '';
		$air->ground_tank_kondisi = 'BAIK';
		$air->i_a_k_panjang = '';
		$air->i_a_k_bahan = '';
		$air->i_a_k_kondisi = 'BAIK';
		$air->drainase_jumlah = '';
		$air->drainase_bahan = '';
		$air->drainase_kondisi = 'BAIK';
		$air->water_closed_jumlah = '';
		$air->water_closed_merek = '';
		$air->water_closed_kondisi = 'BAIK';
		return $air;
	}

	public function save_air($data) {
		$this->db->set($data);
		$this->db->insert($this->_table_name);
		$id = $this->db->insert_id();
		return $id;
	}
}
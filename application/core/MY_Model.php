<?php 

class MY_Model extends CI_Model {

	protected $_table_name = '';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	protected $_timestamps = FALSE;
	public $rules = array();

	function __construct() {
		parent::__construct();
	}

	/*============================================================================*\
	|	method ini akan mengambil record data dari database berdasarkan $id,	|
	|	atau semua record bila $id tidak di inputkan dalam parameter.			|
	|																			|
	|	method ini juga mengembalikan semua record atau hanya satu record.		|
	|	misal :																	|
	|		# mengambil semua data 												|
	|		$this->model_name->get();											|
	|																			|
	|		# mengambil data berdasarkan $id 									|
	|		$this->model_name->get($id);										|
	|																			|
	|		# mengambil data berdasarkan $id LIMIT 1							|
	|		$this->model_name->get($id, TRUE);									|
	|==============================================================================|
	|	@param $id = int, long													|
	|	@param $single = TRUE / FALSE 											|
	\*============================================================================*/
	public function get($id = NULL, $single = FALSE) {
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		} elseif ($single == TRUE) {
			$method = 'row';
		} else {
			$method = 'result';
		}

		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->_order_by);
		}
		return $this->db->get($this->_table_name)->$method();
	}

	/*========================================================================================*\
	|	method ini akan mengambil record data dari database berdasarkan $where statement,	|
	|	method ini juga mengembalikan semua record atau hanya satu record.					|
	|	misal :																				|
	|		# mengambil satu data berdasarkan $email 										|
	|		$this->model_name->get_by($email, TRUE);										|
	|																						|
	|		# mengambil semua data berdasarkan $address 									|
	|		$this->model_name->get($address);												|
	|========================================================================================== |
	|	@param $where = String 																|
	|	@param $single = TRUE / FALSE 														|
	\*==========================================================================================*/
	public function get_by($where, $value, $single = FALSE) {
		$this->db->where($where, $value);
		return $this->get(NULL, $single);
	}	

	/*===================================================================================*\
	|	method ini akan MENYIMPAN data 													|
	|	ATAU 																			|
	|	UPDATE data 																	|
	|																					|
	|	untuk Save data, parameter yang diisi hanya $data 								|
	|	untuk Update data, parameter yang diisi $data dan $id yang akan diupdate 		|
	|																					|
	|	misal:																			|
	|		# Simpan Data 																|
	|		$data = array( 																|
	|			'column_name1' => 'data1', 												|
	|			'column_name2' => 'data2', 												|
	|			'column_name3' => 'data3', 												|
	|		); 																			|
	|		$this->model_name->save($data); 											|
	| 																					|
	|		# Update Date 																|
	|		$data = array( 																|
	|			'column_name1' => 'data1', 												|
	|			'column_name2' => 'data2', 												|
	|			'column_name3' => 'data3', 												|
	|		); 																			|
	|		$this->model_name->save($data, $id); 										|
	|===================================================================================== |
	|	@param $data = array('' => ''); 												|
	|	@param $id = int 																|
	\*=====================================================================================*/
	public function save($data, $id = NULL) {
		// Set Timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d h:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}

		// Condition to Insert OR Update base on $id
		if ($id === NULL) {

			// Insert $data here
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		} else {

			// Update $data here
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}	

	/*====================================================================================*\
	|	Delete data berdasarkan $id.														|
	|	method ini akan melakukan pengecekan apabila										|
	|	1. $id tidak diinputkan maka method ini tidak akan dijalankan 						|
	|	2. $id akan difilter hanya berupa int, long dan memastikan tidak ada string 		|
	|	3. penghapusan data dibatasi 1 (LIMIT 1) sebagai best practice penghapusan data 	|
	|	#misal :																			|
	|		// delete data berdsarkan $id 													|
	|		$this->model_name->delete($id); 												|
	|====================================================================================== |
	|	@param $id = int 																	|
	\*====================================================================================*/
	public function delete($id) {
		$filter = $this->_primary_filter;
		$id = $filter($id);
		if (!$id) {
			return FALSE;
		} else {
			$this->db->where($this->_primary_key, $id);
			$this->db->limit(1);
			$this->db->delete($this->_table_name);
		}
	}
}
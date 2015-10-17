<?php 

class Gedung_m extends MY_Model {

	protected $_table_name = 'gedung';
	protected $_order_by = 'kode';
	public $rules = array(
			''
		);

	function __construct() {
		parent::__construct();
	}
}
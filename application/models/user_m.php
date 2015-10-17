<?php 

class User_m extends MY_Model {

	protected $_table_name = 'users';
	protected $_order_by = 'username';
	protected $_timestamps = FALSE;
	public $rules = array();

	function __oonstruct() {
		parent::__oonstruct();
	}

}
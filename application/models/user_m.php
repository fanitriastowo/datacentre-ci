<?php 

class User_m extends MY_Model {

	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_order_by = 'id';
	public $rules = array(
		'username' => array(
			'field' => 'username', 
			'label' => 'Username', 
			'rules' => 'trim|required|xss_clean|max_length[100]'
			),
		'phone' => array(
			'field' => 'phone',
			'label' => 'Phone',
			'rules' => 'trim|required|integer|xss_clean'
			),
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|xss_clean|callback__unique_email'
			),
		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|matches[confirm_password]|required'
			),
		'confirm_password' => array(
			'field' => 'confirm_password',
			'label' => 'Confirm Password',
			'rules' => 'trim|matches[password]|required'
			)
	);

	function __construct() {
		parent::__construct();
	}
}
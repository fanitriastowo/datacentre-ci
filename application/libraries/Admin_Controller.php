<?php 

class Admin_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();
		$exception = array('login', 'login/do_login', 'login/logout');

		if ($this->ion_auth->is_admin() == FALSE && !in_array(uri_string(), $exception)) {
            redirect('login');
        } else if($this->ion_auth->in_group('user') && !in_array(uri_string(), $exception)) {
        	if ($this->ion_auth->logged_in()) {
        		$this->ion_auth->logout();
	        	show_404();
        	}
        }
	}
}
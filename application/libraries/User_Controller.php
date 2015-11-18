<?php 

class User_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();
		$exception = array(
			'login', 
			'login/do_login', 
			'login/logout'
		);

		if ($this->ion_auth->logged_in() == FALSE && $this->ion_auth->in_group('users') == FALSE && !in_array(uri_string(), $exception)) {
			// Jika belum login, member dan selain URL Exception
            redirect('login');

        } else if ($this->ion_auth->logged_in() == TRUE && $this->ion_auth->is_admin() == TRUE && !in_array(uri_string(), $exception)) {
        	// Jika Sudah Login, admin dan selain URL Exception
        	show_404();
        }
	}
}
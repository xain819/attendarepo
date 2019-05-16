<?php
	class MY_Controller extends CI_Controller
	{
		public $username;
		function __construct()
		{
			parent::__construct();
			if(!$this->session->has_userdata('is_admin_login'))
			{
				redirect('auth/user_login', 'refresh');
			}
			$this->username=$this->session->userdata('username');
		}
	}

	class UR_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->has_userdata('is_user_login'))
			{
				redirect('auth/user_login');
			}
		}
	}
?>

    
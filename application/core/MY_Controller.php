<?php
	class MY_Controller extends CI_Controller
	{
		public $username;
		public $FullName;
		public $SchoolName;

		function __construct()
		{
			parent::__construct();
			if(!$this->session->has_userdata('is_admin_login'))
			{
				redirect('auth/user_login', 'refresh');
			}
			$this->username=$this->session->userdata('username');
			$this->FullName=$this->db->query('SELECT CONCAT(LastName,", ",FirstName) as FullName FROM admin WHERE admin_id=?',array($this->session->userdata('admin_id')))->result_array()[0]['FullName'];
			$this->SchoolName=$this->db->query('SELECT VALUE FROM Setting WHERE Setting =?',array('SchoolName'))->row_array()['VALUE'];
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

    
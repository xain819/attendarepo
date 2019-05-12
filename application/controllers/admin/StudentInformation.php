<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class StudentInformation extends MY_Controller {
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['title'] = 'Student Information';
			$data['view'] = 'admin/studentinformation/index';
			$this->load->view('layout', $data);
		}
		
	}

?>	
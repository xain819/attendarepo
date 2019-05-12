<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class TeacherInformation extends MY_Controller {
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/index';
			$this->load->view('layout', $data);
		}
		
	}

?>	
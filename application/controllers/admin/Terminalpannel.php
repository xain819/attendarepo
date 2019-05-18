<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Terminalpannel extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
		public function index(){
			$data['title'] = 'Terminal Pannel';
			$data['view'] = 'admin/terminalpannel/index';
			$this->load->view('layout', $data);
		}
		
	}

?>	
<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Generalsettings extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
		public function index(){

			//$this->rbac->check_operation_access();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/generalsettings/index';
			$this->load->view('layout', $data);
			
		}
	
	
		
	}

?>	
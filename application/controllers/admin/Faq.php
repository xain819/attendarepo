<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Faq extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
		public function index(){
			$data['title'] = 'Help & FAQ';
			$data['view'] = 'admin/faq/index';
			$this->load->view('layout', $data);
		}
		
	}

?>	
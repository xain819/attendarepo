<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Controlpannel extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
		public function index(){
			$data['title'] = 'Control Pannel';
			$data['view'] = 'admin/controlpannel/index';
			$this->load->view('layoutv2', $data);

		}public function get_emergency_list(){
		
			$data['info']=$this->admin->get_emergency_list();
			echo json_encode($data);
		}
	
		

		
	}

?>	
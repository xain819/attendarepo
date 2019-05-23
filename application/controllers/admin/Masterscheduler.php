<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class MasterScheduler extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/Masterscheduler_model', 'Masterscheduler');
			$this->load->model('admin/Admin_model', 'admin');


		    $this->rbac->check_module_access();
		}
		public function index(){

	

			//$this->rbac->check_operation_access();
			$data['info']=$this->admin->get_data_array();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/masterscheduler/index';
			$this->load->view('layout', $data);
		
		
			
		}

		public function list_data()
		{
		$data['info'] = $this->Masterscheduler->get_all();
		$this->load->view('admin/masterscheduler/list',$data);
		
		}
		public function add()
		{
		$data['info'] = $this->Masterscheduler->get_all();
		$this->load->view('admin/masterscheduler/list',$data);
		
		}
		public function edit()
		{
		$data['info'] = $this->Masterscheduler->get_all();
		$this->load->view('admin/masterscheduler/list',$data);
		
		}
		public function get_all_data()
			{
				
				$data['info']=$this->admin->get_data_array();
				//$out = array_values($data['info']);
				//$out=json_encode($out);
				$this->load->view('admin/masterscheduler/index',$data);
				print_r($out);
				echo gettype($out);
			}	

		

	
	
		
	}

?>	
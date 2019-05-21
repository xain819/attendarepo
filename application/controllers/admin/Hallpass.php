<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Hallpass extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/Hallpass_model', 'hallpass');

		    $this->rbac->check_module_access();
		}

		public function index(){

			$data['PassType']=$this->hallpass->get_pass_type();
			$data['title'] = 'Hall Pass Pannel';
			$data['view'] = 'admin/hallpass/index';
			$this->load->view('layout', $data);

			
		}

		public function list_data()
		{
				$data['PassType']=$this->hallpass->get_pass_type();
		$data['info'] = $this->hallpass->get_all();
		$this->load->view('admin/hallpass/list',$data);
		
		}

		function change_status()
		{   
			//$this->rbac->check_operation_access(); // check opration permission
	
			$this->hallpass->change_status();
		}

		function add()
	   {	
		//$this->rbac->check_operation_access(); // check opration permission

		$data['PassType']=$this->hallpass->get_pass_type();

		if($this->input->post('submit')){
				$this->form_validation->set_rules('HallPass', 'Hall Pass', 'trim|required');
				$this->form_validation->set_rules('PassTypeID', 'Hall Pass Type', 'trim|required');
				$this->form_validation->set_rules('TimeAllocated', 'Time Allocated', 'trim|required');
				

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/hallpass/index';
					$this->load->view('layout', $data);
				}

				else{
					$data = array(
						
						'HallPass' => $this->input->post('HallPass'),
						'PassTypeID' => $this->input->post('PassTypeID'),
						'TimeAllocated' => $this->input->post('TimeAllocated'),
						'is_active' => 1,
					
					);
					$data = $this->security->xss_clean($data);
					$result = $this->hallpass->add($data);
					if($result){
						$this->session->set_flashdata('msg', 'Admin has been added successfully!');
						redirect(base_url('admin/hallpass'));
					}
				}
			}
			else
			{
				$data['view']='admin/hallpass/';
				$this->load->view('layout',$data);	
			}
	}

		
		
	}

?>	
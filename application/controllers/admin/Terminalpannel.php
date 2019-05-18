<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Terminalpannel extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/Terminal_model', 'terminal');

		    $this->rbac->check_module_access();
		}

		public function index(){

			
			
			
			$data['title'] = 'Terminal Pannel';
			$data['view'] = 'admin/terminalpannel/index';
			$this->load->view('layout', $data);

			
		}

		public function list_data()
		{
		$data['info'] = $this->terminal->get_all();
		$this->load->view('admin/terminalpannel/list',$data);
		
		}

		function change_status()
		{   
			//$this->rbac->check_operation_access(); // check opration permission
	
			$this->terminal->change_status();
		}

		function add_terminal()
	   {	
		//$this->rbac->check_operation_access(); // check opration permission

		//$data['admin_roles']=$this->admin->get_admin_roles();

		if($this->input->post('submit')){
				$this->form_validation->set_rules('HallPass', 'Hall Pass', 'trim|required');
				$this->form_validation->set_rules('PassTypeID', 'Hall Pass Type', 'trim|required');
				$this->form_validation->set_rules('TimeAllocated', 'Time Allocated', 'trim|required');
		
	

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/terminalpannel/add';
					$this->load->view('layout', $data);
				}

				else{
					$data = array(
						
						'HallPass' => $this->input->post('HallPass'),
						'PassTypeID' => $this->input->post('PassTypeID'),
						'TimeAllocated' => $this->input->post('TimeAllocated'),
						'IsEnabled' => 1,
					
					);
					$data = $this->security->xss_clean($data);
					$result = $this->admin->add_terminal($data);
					if($result){
						$this->session->set_flashdata('msg', 'Admin has been added successfully!');
						redirect(base_url('admin/terminalpannel'));
					}
				}
			}
			else
			{
				$data['view']='admin/terminalpannel/add';
				$this->load->view('layout',$data);	
			}
	}

		
		
	}

?>	
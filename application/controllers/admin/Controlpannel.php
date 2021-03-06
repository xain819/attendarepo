<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Controlpannel extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');
			$this->load->model('admin/controlpannel_model', 'control');
		    $this->rbac->check_module_access();
		}

		public function get_terminal_status(){
			$data['period']=$this->admin->get_period();
			$q=$this->control->get_terminal_status($data['period']);
			echo json_encode($q);

		}
		public function get_hallpass(){
		
			$q=$this->control->get_hallpass($a=1);
			echo json_encode($q);

		}

		public function edit_hallpass(){
		
			$q=$this->control->get_hallpass($a=2);

			$hallpass=$this->input->post('data');
	
			$q=$this->control->import_hallpass($hallpass);
	
			// $data['import']=$this->admin->get_import_terminal();
			// echo json_encode($data['import']);
	
			// echo json_encode($q);

		}

		public function index(){
			$data['title'] = 'Control Pannel';
			$data['view'] = 'admin/controlpannel/index';
			$data['period']=$this->admin->get_period();
			$data['type']=$this->admin->get_day_type();
		
			$this->control->assign_terminal_username();
			// $this->control->assign_hallpass_username();

			
		
			$this->load->view('layoutv2', $data);
		}

		public function get_master_data(){

			
			$data['period']=$this->admin->get_period();
			$data['type']=$this->admin->get_day_type();
			$data['count']=$this->admin->get_day_count();

			$data['marking']=$this->admin->school_settings($a='Marking Period');
			echo json_encode($data);
		}
		
		public function get_emergency_list(){
		
			$data['info']=$this->admin->get_emergency_list();
			echo json_encode($data);
		}
		public function master(){
		
			$data=$this->admin->get_controlpannel_master();
			echo json_encode($data);
		}
		public function change_status(){
			$data['id']=$this->input->post('id');
			$data['status']=$this->input->post('status');
			$data['name']=$this->input->post('name');
			$result=$this->admin->control_pannel_change_status($data);
	
			
			echo json_encode($result);
		}
	
		public function manage_terminal()
	
		{
			$data['view'] = 'admin/controlpannel/manage_terminal';

			$this->load->view('layoutv2', $data);
		}
		public function check_terminal()
		{
			$data['title'] = 'Courses';
			$data['view'] = 'admin/masterscheduler/students_schedule';
			$terminal=$this->input->post('data');
	

			$this->control->import_terminal($terminal);
			$data['import']=$this->admin->get_import_terminal();
			echo json_encode($data['import']);
	
		}
		public function check_hallpass()
		{
			$data['title'] = 'Courses';
			$data['view'] = 'admin/masterscheduler/students_schedule';
			$hallpass=$this->input->post('data');
			$q=$this->control->import_terminal($hallpass);
	
			// $data['import']=$this->admin->get_import_terminal();
			// echo json_encode($data['import']);
	
		}
		public function get_import_terminal(){
			$data['import']=$this->control->manage_terminal();
			echo json_encode($data['import']);
	
		}

		

		
	}

?>	
<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Generalsettings extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');
			$this->load->model('admin/Hallpass_model', 'hallpass');

		    $this->rbac->check_module_access();
		}
		public function index(){

			//$this->rbac->check_operation_access();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/generalsettings/index';
			$this->load->view('layoutv2', $data);
			
		}
		public function get_all_hallpass()
		{
		$data['PassType']=$this->hallpass->get_pass_type();
		$data['info'] = $this->hallpass->get_all();

		echo json_encode($data);
		
		}
		public function delete_hallpass()
		{
		$id=$this->input->post('data');
		$data=$this->input->post('type');
		$status=$this->admin->delete_hallpass($id);
		echo json_encode($status);

		}
		public function add_hallpass()
		{
		$data['HallPass']=$this->input->post('name');
		$data['TimeAllocated']=$this->input->post('time');
		$data['PassTypeID']=$this->input->post('type');
		$data['is_active']='1';
		$result=$this->admin->add_terminal($data);
	
		echo ($result);

		}
		public function edit_pgt()
		{
		$data['master_period_time']=$this->input->post('gracetime');
		$result=$this->admin->add_gracetime($data);


		}

		public function change_status(){

		$data['id']=$this->input->post('data');
		$this->admin->change_data_status($data['id']);
		$data['info']=$this->admin->get_master();

		echo json_encode($data['info']);
		
	
	}

	
	public function get_master_list(){
		$data['info']=$this->admin->get_master();
		echo json_encode($data);
		
	
	}

	
	
		public function scheduletype(){
			$scheduletypee='';
				$result=$this->Masterscheduler->get_all_scheduletype();
				$scheduletypee.='<div id="external-events">';
				
				foreach($result as $value){
					$scheduletypee.= '<div class="external-event '.$value['backgroundColor'].'">'.$value['ScheduleType'].'</div>';
				}
				$scheduletypee.=' </div>';
				
			echo json_encode($scheduletypee);
		}
	
		
	}

?>	
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
		$type=$this->input->post('type');
		$data['PassType']=$this->hallpass->get_pass_type();
		$data['info'] = $this->hallpass->get_all($type);

		echo json_encode($data);
		
		}

		public function delete_hallpass()
		{
		$id=$this->input->post('data');
		$data=$this->input->post('type');
		$status=$this->admin->delete_hallpass($id);

		$teacher['addtoteacher']=$this->admin->get_all_hallpass();
		$student['addtostudents']=$this->admin->get_all_hallpass();
		$teacher_access='';
		
		$student_access='';
		foreach ($teacher['addtoteacher'] as $value) {
			$teacher_access.=$value['HallPass'].'|';
		}
		foreach ($student['addtostudents'] as $v) {
			$student_access.=$v['HallPass'].'|';
		}

		$this->admin->teacher_hallpass($teacher_access);
		$this->admin->student_hallpass($student_access);
		echo json_encode($status);

		}

		public function add_hallpass()
		{
		$data['HallPass']=$this->input->post('name');
		$data['TimeAllocated']=$this->input->post('time');
		$data['PassTypeID']=$this->input->post('type');
		$data['is_active']='1';

		$result=$this->admin->add_terminal($data);
		$teacher['addtoteacher']=$this->admin->get_all_hallpass();
		$student['addtostudents']=$this->admin->get_all_hallpass();
		$student_access='';

		foreach ($student['addtostudents'] as $v) {
			$student_access.=$v['HallPass'].'|';
		}
	
		$teacher_access='';
		foreach ($teacher['addtoteacher'] as $value) {
			$teacher_access.=$value['HallPass'].'|';

		}
		$this->admin->student_hallpass($student_access);
		$this->admin->teacher_hallpass($teacher_access);

		$this->admin->teacher_access($teacher);
		$this->admin->student_access($teacher);

		

		// $period_remove=$this->input->post('period');
		// 		$exploded=explode($period_remove.'|',$new_data);
		// 		print_r($exploded[0]);
		// 		echo gettype($exploded[0]);
		
	     echo json_encode ($result);

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
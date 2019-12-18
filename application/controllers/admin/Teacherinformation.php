<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class TeacherInformation extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			
			$this->load->model('admin/admin_model');
			$this->load->model('admin/admin_model', 'admin');
			$this->load->model('admin/teacher_model', 'teacher');

		    $this->rbac->check_module_access();
		}
		public function student_roster(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/student_rosters';
			$this->load->view('layoutv2', $data);
		}
		public function help(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/help';
			$this->load->view('layoutv2', $data);
		}
		public function reports(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/reports';
			$this->load->view('layoutv2', $data);
		}
		public function student_rosters(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/student_rosters';
			//$this->load->view('layoutv2', $data);
			$data['username']=$_SESSION['username'];
			
			$data['type']=$this->admin->get_day_type();
			$data['semester']=$this->admin->school_settings($a='semester');
			
		
			$data['teacher_id_number']=$data['username'];
			$result=$this->admin->check_student_rosters_data($data['teacher_id_number'],$data['semester']);
			echo json_encode($result);

		}
		public function edit_hallpass()
		{
		
		$post=$this->input->post('data');
		
			foreach($post as $v){
				
				$result=$this->admin->master_control_status($a='hpso');
			
				if($result['is_active']==1){
					
					$this->admin->edit_hallpass_swipe($v['ID'],$v['date_time_ended']);

				}
				


			}
		

		}
		public function edit_attendance(){
	
		$response=$this->input->post('data');
		$data['period']=$this->admin->get_period();
	
		
		foreach($response as $key => $item) {
			$data['AttendanceID']=$key;
			$data['AttendanceTime']=$item['AttendanceTime'];
			$data['class_id']=$item['class_id'];
			$data['teacher_overide']=0;
			if($item['teacher_overide']=='yes'){
				$data['teacher_overide']=1;
			}
	
		  }

		$q=$this->admin->master_control_status($a='aso');
		if($data['AttendanceID']=='null')
		{
			//if key is not not attendance then insert 1
			$this->admin->edit_attendance($data);
			$response['status']='added';
			
		}
		elseif ($data['AttendanceID']!='null' && $q['is_active']==1) {
			$this->admin->update_attendance($data);
			$response['status']='updated';
			
		}
		elseif($data['AttendanceID']!='null' && $q['is_active']==0){
			$response['status']='not allowed';
		
		}
		
		echo json_encode($response);
		}

		public function attendance_log(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/attendance_log';
			$this->load->view('layoutv2', $data);
		}
		
		public function seat_map(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/seat_map';
			$this->load->view('layoutv2', $data);
		}
		public function attendance_logs(){
			$today = date("Y-m-d");  
			$now= new Datetime('now');
			
			$data['username']=$_SESSION['username'];
			$data['period']=$this->admin->get_period();
			$data['schedule_type']=$this->admin->get_day_type();
			$data['teacher_id_number']=$data['username'];
			$result=$this->admin->check_student_if_enrolled($data['teacher_id_number'],$data['period'],$data['schedule_type'][0]['title']);
			$grace_checked=$this->admin->general_master($id_name='pgt');
			
			if($grace_checked['is_active']==1){
				foreach ($result as $key => $item) {
				
					$item['GracePeriod'] = '00:00:00';
					$result[$key] = $item;
					
				 }
					echo json_encode($result);

			}
			else{
					echo json_encode($result);
			}
		

		}
		
		public function daily_pass_log(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/daily_pass_logs';
			$this->load->view('layoutv2', $data);
		}
		public function quick_edit(){
			$data['period']=$this->admin->get_period();
			$data['class_id']=$this->input->post('id');
			$data['status']=$this->input->post('status');
			$this->admin->quick_attendance($data['class_id'],$data['period']);
			
		}



		public function check_logs(){
			$data['period']=$this->admin->get_period();
	
			//$data['type']=$this->input->post('id');
			$data['teacher_id_number']=$_SESSION['username'];
			//print_r($_SESSION);
		
			$result=$this->admin->check_hallpass_logs($data['teacher_id_number'],$data['period']);
			echo json_encode($result);
		}

		
	

		public function change_access_status(){
		$data['id']=$this->input->post('id');
		$this->admin->change_access_status($data['id']);
	
			
		}


		function update_teacher_hallpass(){

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
		}
		public function index(){

			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/index';
			$this->update_teacher_hallpass();
			$this->teacher->assign_teacher_terminal();
			$this->teacher->assign_techer_course_details();
			$this->load->view('layoutv2', $data);
			$this->teacher->assign_teacher_username();
			$this->teacher->set_session_teacher_id();
		
	
			
			
		}
		public function get_terminal_access(){
	
			$teacherid=$this->input->post('data');
			$data['teacher_id']=$teacherid;

		
			$data['ahp']=$this->admin->get_terminal_access($teacherid,1);
			$data['nhp']=$this->admin->get_terminal_access($teacherid,2);
			
			echo json_encode($data);
			
			
		}
		public function teacher_hallpass(){
	
			$teacherid=$this->input->post('data');
			$data['teacher_id']=$teacherid;
		
			$data['ahp']=$this->admin->get_teacher_hallpass($teacherid,1);
			$data['nhp']=$this->admin->get_teacher_hallpass($teacherid,2);
		
			echo json_encode($data);
			
			
		}
		//teacher start
		public function get_all_teacher(){
			$data=$this->admin_model->get_all_teacher();
			echo json_encode($data);
		}
		public function get_department_option(){
			$data=$this->admin_model->get_department();
			$departmentoption='';
			foreach ($data as  $value) {
				$departmentoption.='<option></option>';
				$departmentoption.='<option value="'.$value->DepartmentID.'">'.$value->Department.'</option>';
			}
			return $departmentoption;
		}
		public function teacher_settings(){
			$response['department']=$this->get_department_option();
			echo json_encode($response);
		}
		public function manage_teacher(){
			$data=$this->input->post('data');
			if($this->input->post('type')=='add-new-teacher'){
				$type='add-new-teacher';
				$status=$this->admin_model->manage_teacher($type,$data);
			}
			if($this->input->post('type')=='delete-teacher'){
				$type='delete-teacher';
				$status=$this->admin_model->manage_teacher($type,$data);
			}
			if($this->input->post('type')=='edit-teacher'){
			
				$type='edit-teacher';
				$status=$this->admin_model->manage_teacher($type,$data);
			}
			echo json_encode($status);
		}
		
		public function get_teacher_byteacherid(){
			$teacherid=$this->input->post('data');
			$department=$this->get_department_option(); 
			$teacher_info=$this->admin_model->get_teacher_byteacherid($teacherid);
			$response['department']=$department;
			$response['teacher_info']=$teacher_info;
			echo json_encode($response);
		}
		//teacher end
		public function settings(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/teacher_settings';
			$this->set_teacher_class();
			$this->load->view('layoutv2', $data);
		}
		function set_teacher_class()
		{
			$this->teacher->class_access();

		}
		public function get_teacher_class(){
	
			$response['teacher_class']=$this->teacher->get_teacher_access();
			echo json_encode($response);
		}
		
		
	}

?>	
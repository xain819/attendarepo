<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Secretary extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			
			$this->load->model('admin/admin_model');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
		public function student_roster(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/student_rosters';
			$this->load->view('layoutv2', $data);
		}
		public function updateattendancenegative(){
			$data = array(
				'negative_seat_time' => $this->input->post('data')
			);
		
			$this->db->where('AttendanceID', $this->input->post('id'));
			$this->db->update('attendance', $data);
			echo json_encode('success');
	
		}
		public function get_period_excused_tardy(){
			
			$sql="SELECT * FROM `class_list` as a LEFT JOIN attendance as b ON a.class_id=b.class_id where student_local_id=? AND (b.appointment =1 OR b.emergency=1 OR b.other=1 )";
			$query=$this->db->query($sql,array($this->input->post('id')));
			$period=[];
			foreach ($query->result() as  $value) {

				$period[]=$value->period_number;

			}
			$myperiod='';
			$count=0;
			foreach (array_unique($period) as  $value) {
				if($count==0){
					$myperiod.=$value;
				}else{
					$myperiod.=', '.$value;
				}
				$count++;
			}
			 echo json_encode($myperiod);
		}
		public function get_period_unexcused_tardy(){
			
			$sql="SELECT * FROM `class_list` as a LEFT JOIN attendance as b ON a.class_id=b.class_id where student_local_id=? AND (b.appointment =0 OR b.emergency=0 OR b.other=0 )";
			$query=$this->db->query($sql,array($this->input->post('id')));
			$period=[];
			foreach ($query->result() as  $value) {
				$period[]=$value->period_number;
			}
			$myperiod='';
			$count=0;
			foreach (array_unique($period) as  $value) {
				if($count==0){
					$myperiod.=$value;
				}else{
					$myperiod.=', '.$value;
				}
				$count++;
			}
			 echo json_encode($myperiod);
		}
		public function student_rosters(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/student_rosters';
			//$this->load->view('layoutv2', $data);
			$data['username']=$_SESSION['username'];
			$data['teacher_id_number']=$data['username'];
			$result=$this->admin->check_student_rosters_data($data['teacher_id_number']);
			echo json_encode($result);

		}
		public function edit_attendance(){
		$r['data']=$this->input->post('data');
		
		$d['period']=$this->admin->get_period();
		$d['start']=date("Y-m-d");
		$d['username']=$_SESSION['username'];
		$d['type']='manual';
		$d['s1']='S1';
		$d['student_local_id']=$r['data']['null']['student_local_id'];
		$d['time']=$r['data']['null']['AttendanceTime'];

		$this->db->distinct();
		$this->db->select('class_id');
		$this->db->where('student_local_id',$d['student_local_id']);
		$this->db->where('term',$d['s1']);
		$this->db->where('teacher_id_number',$d['username']);
		$this->db->where('start',$d['start']);
		$q=$this->db->get('vstudent_roster')->result_array();
		$a=$q[0]['class_id'];

		$this->db->set('class_id',$a);
		$this->db->set('AttendanceDate',$d['start']);
		$this->db->set('AttendanceTime',$d['time']);
		$this->db->set('PeriodID',$d['period']);
		$this->db->set('swipe_type',1);
		$this->db->insert('attendance');


		}

		public function attendance_log(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/attendance_log';
			$this->load->view('layoutv2', $data);
		}
		public function attendance_logs(){
			$today = date("Y-m-d");  
			$now= new Datetime('now');
			
			$data['username']=$_SESSION['username'];
			$q=$this->db->get('period')->result_array();
			foreach($q as $v){
				$start=new Datetime($v['PeriodStartTime']);
				$end=new Datetime($v['PeriodEndTime']);

				if($now >= $start && $now <= $end){
					$data['period']=$v['Period'];
				}
			}	
				
	
			$result=$this->admin->check_student_mot($today);
			
			
		
			echo json_encode($result);

		}
		
		public function daily_pass_log(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/daily_pass_logs';
			$this->load->view('layoutv2', $data);
		}

		function get_period(){
			$today = date("Y-m-d");  
			$now= new Datetime('now');
			
			$data['username']=$_SESSION['username'];
			$q=$this->db->get('period')->result_array();
			foreach($q as $v){
				$start=new Datetime($v['PeriodStartTime']);
				$end=new Datetime($v['PeriodEndTime']);

				if($now >= $start && $now <= $end){
					$data['period']=$v['Period'];
				}
			}
			return $data['period'];
		}

		public function check_logs(){
			$data['period']=$this->get_period();
	
			//$data['type']=$this->input->post('id');
			$data['teacher_id_number']=$_SESSION['username'];
			$result=$this->admin->check_hallpass_logs($data['teacher_id_number'],$data['period']);
			echo json_encode($result);
		}

		
	

		public function change_access_status(){
		$data['id']=$this->input->post('id');
		$this->admin->change_access_status($data['id']);
	
			
		}
		public function change_status(){
			$data['id']=$this->input->post('id');
			$data['type']=$this->input->post('type');
			$data['status']=$this->input->post('status');
	
			$this->admin->change_tardy_status($data['id'],$data['type'],$data['status']);
			//$this->admin->change_access_status($data['id']);
		
				
			}
		public function get_teacher_course(){
			$teacher=$this->admin->get_all_teacher();
			$data="";
			foreach($teacher as $t){
				$id=$t['IDNumber'];
				$data='';
				$period='';
				$course='';
				$location='';
				$query=$this->admin->get_teacher_course($id);
				foreach ($query as $value){
					$data.=$value['course_code'].'<br>';
					$period.=$value['period_number'].'<br>';
					$course.=$value['short_desc'].'<br>';
					$location.=$value['location'].'<br>';
				
				}
				$this->db->set('period_list',$period);
				$this->db->set('course_description_list',$course);
				$this->db->set('teacher_course_list',$data);
				$this->db->set('location_list',$location);
				$this->db->where('IDNumber',$t['IDNumber']);
				$this->db->update('teacher');
			}
			json_encode($data);
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

		public function get_student_schedule(){

			$data['id']=$this->input->post('id');
			$data['period']=$this->get_period();
			print_r($data);
			
			// $result=$this->admin->get_student_class_access($data['id'],$data['period']);
		    
			// if($result==null){
			// 	echo json_encode('not_enrolled');
			// }else{
			// 	$b=$this->admin->record_attendace($result[0]['class_id']);
			// 	echo json_encode($b);
			// }
		}
		public function index(){

			$data['title'] = 'Secretary';
			$data['view'] = 'admin/secretary/index';
			//$this->update_teacher_hallpass();
			//$this->get_teacher_course();
			$this->load->view('layoutv2', $data);
			
			
		}
		// public function get_terminal_access(){
	
		// 	$teacherid=$this->input->post('data');
		// 	$data['teacher_id']=$teacherid;
		
		// 	$data['ahp']=$this->admin->get_terminal_access($teacherid,1);
		// 	$data['nhp']=$this->admin->get_terminal_access($teacherid,2);
			
		// 	echo json_encode($data);
			
			
		// }
		// public function teacher_hallpass(){
	
		// 	$teacherid=$this->input->post('data');
		// 	$data['teacher_id']=$teacherid;
		
		// 	$data['ahp']=$this->admin->get_teacher_hallpass($teacherid,1);
		// 	$data['nhp']=$this->admin->get_teacher_hallpass($teacherid,2);
		
		// 	echo json_encode($data);
			
			
		// }
		// //teacher start
		// public function get_all_teacher(){
		// 	$data=$this->admin_model->get_all_teacher();
		// 	echo json_encode($data);
		// }
		// public function get_department_option(){
		// 	$data=$this->admin_model->get_department();
		// 	$departmentoption='';
		// 	foreach ($data as  $value) {
		// 		$departmentoption.='<option></option>';
		// 		$departmentoption.='<option value="'.$value->DepartmentID.'">'.$value->Department.'</option>';
		// 	}
		// 	return $departmentoption;
		// }
		// public function teacher_settings(){
		// 	$response['department']=$this->get_department_option();
		// 	echo json_encode($response);
		// }
		// public function manage_teacher(){
		// 	$data=$this->input->post('data');
		// 	if($this->input->post('type')=='add-new-teacher'){
		// 		$type='add-new-teacher';
		// 		$status=$this->admin_model->manage_teacher($type,$data);
		// 	}
		// 	if($this->input->post('type')=='delete-teacher'){
		// 		$type='delete-teacher';
		// 		$status=$this->admin_model->manage_teacher($type,$data);
		// 	}
		// 	if($this->input->post('type')=='edit-teacher'){
			
		// 		$type='edit-teacher';
		// 		$status=$this->admin_model->manage_teacher($type,$data);
		// 	}
		// 	echo json_encode($status);
		// }
		
		// public function get_teacher_byteacherid(){
		// 	$teacherid=$this->input->post('data');
		// 	$department=$this->get_department_option(); 
		// 	$teacher_info=$this->admin_model->get_teacher_byteacherid($teacherid);
		// 	$response['department']=$department;
		// 	$response['teacher_info']=$teacher_info;
		// 	echo json_encode($response);
		// }
		//teacher end

		
		
	}

?>	
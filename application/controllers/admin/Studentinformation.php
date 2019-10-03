<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class StudentInformation extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');
			$this->load->model('admin/Dashboard_model', 'dashboard');
			$this->load->model('admin/Student_model', 'student');
		    $this->rbac->check_module_access();
		}

		public function get_student_roster_attendance($a){

			$data['teacher_id_number']='E7817169060';
			$data['class_code']='teacher_id_number';
			$result=$this->admin->check_student_if_enrolled($data['teacher_id_number'],$data['class_code']);
			echo json_encode($result);

		}
		

		function update_student_hallpass(){

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
			$student=$this->admin->get_all_student();
			foreach($student as $t){
				$id=$t['IDNumber'];
				$data='';			
				$query=$this->admin->get_student_class($id);
				
				foreach ($query as $value){
					$data=$value['class_id'];
					$s=$value['student_id_number'];
					$a = str_replace('|', '<br>' ,$data);
					$data_class =explode("|",$data);

					foreach($data_class as $d){
						$data_array=array(
							'class_code'=>$d,
							'student_id'=>$s,
							'is_active'=>'1');
							$this->db->select('class_code,student_id');
							$this->db->where('student_id',$s);
							$this->db->where('class_code',$d);
							$query=$this->db->get('student_class_access');
							$result=$query->result_array();
	
								if ( $query->num_rows() > 0 ) 
								{
									$x ='';
									$this->db->where('student_id',$s);
									$this->db->where('class_code',$d);
									$this->db->update('student_class_access',$data_array);


								}
								else
								{
									$this->db->insert('student_class_access',$data_array);
									
								}
			
					}
				 }
				
			
			
		
				$this->db->set('class_code_list',$a);
				$this->db->where('IDNumber',$t['IDNumber']);
				$this->db->update('student');

			}
		}

		public function check_classes()
		{
			$data['title'] = 'Courses';
			$data['view'] = 'admin/academicsettings/classes';
			$classes=$this->input->post('data');
			$this->admin->import_classes($classes);
			$data['import']=$this->admin->get_import_classes();
			echo json_encode($data['import']);
	
		}
		public function get_import_classes(){
			$data['import']=$this->admin->get_import_classes();
			echo json_encode($data['import']);
	
		}
	
		
		
	

		public function index(){
			$data['title'] = 'Student Information';
			$data['view'] = 'admin/studentinformation/index';
			$this->update_student_hallpass();
			$this->load->view('layoutv2', $data);
		}
		public function get_all_student(){
			$data=$this->admin->get_all_student();
			echo json_encode($data);
		}
		public function manage_student(){
			$data=$this->input->post('data');
			if($this->input->post('type')=='add-new-student'){
				$type='add-new-student';
				$status=$this->admin->manage_student($type,$data);
			}
			if($this->input->post('type')=='delete-student'){
				$type='delete-student';
				$status=$this->admin->manage_student($type,$data);
			}
			if($this->input->post('type')=='edit-student'){
				$type='edit-student';
				$status=$this->admin->manage_student($type,$data);
			}
			echo json_encode($status);
		}
		public function get_race_option(){
			$data=$this->admin->get_race();
			$raceoption='';
			foreach ($data as  $value) {
				$raceoption.='<option></option>';
				$raceoption.='<option value="'.$value->RaceID.'">'.$value->Race.'</option>';
			}
			return $raceoption;
		}
		public function get_distinction(){
			$data=$this->admin->get_distinction();
			$distinctionoption='';
			foreach ($data as  $value) {
				$distinctionoption.='<option></option>';
				$distinctionoption.='<option value="'.$value->DistinctionID.'">'.$value->Distinction.'</option>';
			}
			return $distinctionoption;
		}
		public function get_section(){
			$data=$this->admin->get_section();
			$sectionoption='';
			foreach ($data as  $value) {
				$sectionoption.='<option></option>';
				$sectionoption.='<option value="'.$value->SectionID.'">'.$value->Section.'</option>';
			}
			return $sectionoption;
		}
		public function get_grade_level(){
			$data=$this->admin->get_grade_level();
			$gradeleveloption='';
			foreach ($data as  $value) {
				$gradeleveloption.='<option></option>';
				$gradeleveloption.='<option value="'.$value->GradeLevelID.'">'.$value->GradeLevel.'</option>';
			}
			return $gradeleveloption;
		}
		public function student_setting(){
			$response['race'][]=$this->get_race_option();
			$response['distinction'][]=$this->get_distinction();
			$response['section'][]=$this->get_section();
			$response['gradelevel'][]=$this->get_grade_level();
			echo json_encode($response);
		}
		public function get_student_bystudentid(){
			$studentid=$this->input->post('data');
			$student_info=$this->admin->get_student_bystudentid($studentid);
			$response['race'][]=$this->get_race_option();
			$response['distinction'][]=$this->get_distinction();
			$response['section'][]=$this->get_section();
			$response['gradelevel'][]=$this->get_grade_level();
			$response['student_info']=$student_info;
			echo json_encode($response);
		}

		public function insert_student(){
			$data_student=$this->input->post('data');
			print_r($data_student);
			$this->admin->import_csv_student($data_student);
			$data=$this->admin->get_all_student();
			echo json_encode($data);
		}

		public function import(){
			$data['title'] = 'Import CSV';
			$data['view'] = 'admin/studentinformation/import';
			$data['import']=$this->admin->get_import_csv();
			$this->load->view('layout', $data);
		

		}
		
		public function import_check(){
			$data['title'] = 'Import CSV';
			$data['view'] = 'admin/studentinformation/import_check';
			
			$data_student=$this->input->post('data');
			$this->admin->import_csv($data_student);
			$data['import']=$this->admin->get_import_csv();
			//echo json_encode($status);

			echo json_encode($data['import']);

		}
		public function get_import_csv(){
			$data['import']=$this->admin->get_import_csv();
			echo json_encode($data['import']);

	

		}


		/////////////analytics

		public function get_all_period()
		{
			$result=$this->dashboard->get_all_period();
			$data_array=[];
			foreach ($result as $key => $value) {

				$data_array[]=array(

					'label'=> 'Period'." ".$value['Period'],
                    'data'=> [28, 48, 40, 19, 86, 27, 90],
                    'borderColor'=>  $value['color'],
                    'borderWidth'=>  "0",
                    'backgroundColor'=>  $value['color']


				);


			

			}	
			$response['response']=	$data_array;	
		
			echo json_encode($response);	
		}
		public function get_all_hallpass_analytics()
		{
			$id=$this->input->post('id');
			$result=$this->dashboard->get_all_hallpass_analytics();
			$this->manage_hallpass_status();
			$data=[];
			$data_count=[];
			$response['response']=	$result;	
			foreach ($result as $v){
				$data[]=$v['HallPass'];
				$data_ontime[]=$this->dashboard->get_hallpass_count($v['HallPass'],'On Time');
				$data_tardy[]=$this->dashboard->get_hallpass_count($v['HallPass'],'Tardy');
				$data_expired[]=$this->dashboard->get_hallpass_count($v['HallPass'],'Expired');
			}

	
	
			$string=implode($data,",");
		
			$response['response']=	$data;
			$response['ontime']=$data_ontime;
			$response['Tardy']=$data_tardy;
			$response['Expired']=$data_expired;
	
			echo json_encode($response);	
	
		
		}

		public function manage_hallpass_status(){
			$today = date("Y-m-d"); 
			$now=date("Y-m-d", strtotime($today));

			// $start_1   = date('H:i:s', strtotime($period['PeriodStartTime']));
			// $start_2 = date("H:i:s",strtotime($period['PeriodStartTime'])+(strtotime($period['HPLockStart'])-strtotime("00:00:00")));
			// $end_2 = date("H:i:s",strtotime($period['PeriodEndTime'])-(strtotime($period['HPLockEnd'])-strtotime("00:00:00")));
			// $end_1   = date('H:i:s', strtotime($period['PeriodEndTime']));
			// $now   = date('H:i:s');

			$result=$this->dashboard->manage_hallpass_status();
	
			foreach($result as $v){
			
				$start_1   = date('H:i:s', strtotime($v['DateCreated']));
				$limit = date("H:i:s",strtotime($v['DateCreated'])+(strtotime($v['TimeAllocated'])-strtotime("00:00:00")));
				$swipe   = date('H:i:s', strtotime($v['date_time_ended']));
				$end_1   = date('H:i:s', strtotime($v['PeriodEndTime']));
				$negative_seat=strtotime($limit)-strtotime($swipe);
				

				if($negative_seat >=0){
                  $data='On Time';
				}
				else{
					if($swipe>=$end_1){
						$data='Expired';
					}
					else{
						$data='Tardy';
					}
				
				}
				
				$this->student->update_hallpass_status($negative_seat,$data,$v['ID']);
		

			
			}
		}
		

}
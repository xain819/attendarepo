   <?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Terminal extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');
			$this->rbac->check_module_access();
			
			
		}

		
		public function index(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$data['username']=$_SESSION['username'];
			//$result=$this->admin->get_terminal_hallpass($data['username']);
			
	
			$this->load->view('terminal/index',$data);

		}

		public function get_emergency(){
			
			$q=$this->admin->get_emergency_status();
			$data['status']=true;
			$data['response']=$q;
			if($q==null){
			$data['status']=false;	
			}
			echo json_encode($data);

		}
		public function get_terminal_status(){
			$data['username']=$_SESSION['username'];
			$q=$this->admin->get_terminal_status($data['username']);
			echo json_encode($q);

		}
		public function mot(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$data['username']=$_SESSION['username'];
			//$result=$this->admin->get_terminal_hallpass($data['username']);
		
			$this->load->view('terminal/mot',$data);

		}
		public function get_info()
		{
			$data['teacher_id_number']=$_SESSION['teacher_id_number'];
		
			$result['info']=$this->admin->get_terminal_hallpass($data['teacher_id_number']);
			$result['master']=$this->admin->get_master_hallpass();

		
			echo json_encode($result);
		
		}
		
		public function get_terminal_info()
		{
		
			$data['date']=$this->input->post('data');
		
			$data['period']=$this->admin->get_period();
			$data['username']=$_SESSION['username'];
	
			$result=$this->admin->get_terminal_info($data['username'],$data['date'],$data['period']);

			$this->session->set_userdata('teacher_id_number', $result[0]['teacher_id_number']);
			$this->session->set_userdata('class_code', $result[0]['class_code']);
			$this->session->set_userdata('period_number', $data['period']);
		
			
			echo json_encode($result);
			
		


		
		}

		public function get_student_student_hallpass(){
		$data['student_id_number']=$this->input->post('id');
	
		
		$data['hallpass']=$this->input->post('hallpass');
		$data['pass_type']=$this->admin->check_hallpass_type($data);
		$data['period']=$this->admin->get_period();
		$data['active_2way_hallpass']=$this->admin->active_hallpass($data['period']);
		// get the number of 2 way hall pass
	


		$q=$this->admin->master_control_status($a='nql');
		$q1=explode(',',$q['value']);

		// Check if limit status is active and get check which semester fall or marking period
		$limit=$q1[0];
		$limit_type=$q1[1];
		$limit_status=$q['is_active'];
		$s=$this->admin->school_settings($limit_type);
	
		$date_start=$s['start'];
		$date_end=$s['end'];
		$data['student_2way_count']=$this->admin->get_hallpass_count($data['student_id_number'],$b=2,$date_start,$date_end);


		$q=$this->admin->master_control_status($a='hplt');  
		$period=$this->admin->get_period_id();
		$start_1   = date('H:i:s', strtotime($period['PeriodStartTime']));
		$start_2 = date("H:i:s",strtotime($period['PeriodStartTime'])+(strtotime($period['HPLockStart'])-strtotime("00:00:00")));
		$end_2 = date("H:i:s",strtotime($period['PeriodEndTime'])-(strtotime($period['HPLockEnd'])-strtotime("00:00:00")));
		$end_1   = date('H:i:s', strtotime($period['PeriodEndTime']));
		$now   = date('H:i:s');

			if($now>$start_1 && $now<$start_2 && $data['pass_type']==2 && $q['is_active']==1){
				$result['status']='locked';
				$result['response']=$start_2;
				$result['type']='start';
				echo json_encode($result);	
			}
			elseif($now<$end_1 && $now>$end_2  &&  $data['pass_type']==2  && $q['is_active']==1 ){
				$result['status']='locked';
				$result['response']=$start_2;
				$result['type']='end';
			echo json_encode($result);	
			}
			else

			{
				
				if($data['active_2way_hallpass']<=2 && $data['student_2way_count']<$limit && $limit_status==1 ){
					$result=$this->admin->record_student_hallpass($data);
					//$result['status']='rrr Reached';
					echo json_encode($result);
				}
				elseif($data['active_2way_hallpass']>=3 && $data['pass_type']==2)
				{
					$result['status']='Limit Reached';
					$result['response']=$data['active_2way_hallpass'];   
					echo json_encode($result);	
				}
				elseif($data['student_2way_count']>=$limit)
				{
					$result['status']='Student Reached';
					$result['response']=$data['student_2way_count'];
					$result['info']=$s;
					echo json_encode($result);	
				}


			}


		}
		

	


		 function student_arrival_check_in(){
			$result=$this->admin->student_arrival_check_in();
			//false if not late
			


		}

		public function get_student_schedule(){

			$data['id']=$this->input->post('id');

			$data['period']=$this->admin->get_period();
		
			$data['username']=$_SESSION['username'];
 
			if($data['username']=='R-101' || $data['username']=='R-103')
			{
				$result=$this->admin->get_student_secretary_access($data['id']);
				if($result==null){
					echo json_encode('not_enrolled');
				}
				else
				{
					$attendance=$this->admin->check_if_attendance_exist($result['class_id']);
					if($attendance==null){
						$b=$this->admin->record_attendace_mot($result['class_id'],$data['period']);
						echo json_encode('late');
					}	
					else
					{

						$active_hallpass=$this->admin->check_if_hallpass_exist($attendance[0]['AttendanceID']);
						$b=$this->admin->record_attendace($result['class_id']);
		
						echo json_encode($b);

					}	
					

				}

				
				
			}
			else
			{
			
				$result=$this->admin->get_student_class_access($data['id'],$data['period']);
				if($result==null){
					echo json_encode('not_enrolled');
				}else{
					//validate of the student is late and need to go to admin and first scan
					$is_first=count($this->admin->check_if_attendance_exist($result[0]['class_id']));
					$is_late=$this->admin->student_arrival_check_in();
					$is_student_arrival_checkin=$this->admin->general_master('slac');
				
			
					if($is_late=='true' && $is_first==0 && $is_student_arrival_checkin['is_active']==1) {
						echo json_encode('late');
						
					}
					else{
					$data=$this->admin->record_attendace($result[0]['class_id']);
				
					
					echo json_encode($data);
					}
					
				
				}
			}

		
		}
		//set student as absent by default
	
		
	}

?>	
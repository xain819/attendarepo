   <?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Terminal extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');
			$this->rbac->check_module_access();
			
			
		}
		public function insert_attendance(){
			//print_r($this->input->post('test'));
			$this->db->insert('attendance', $this->input->post('test'));
		}
		public function get_hallpass(){
			echo json_encode($this->db->query('SELECT * FROM hallpass where PassTypeID=1')->result());

		}
		public function manageterminal(){
			$data['hallpass']=($this->db->query('SELECT * FROM hallpass where PassTypeID=1')->result());
			$data['studentinfo']=$this->db->query("SELECT * FROM student_table WHERE student_local_id=? ",array($this->input->post('StudentID')))->result();
			echo json_encode($data);
		}
		public function get_period(){
			$time=date('H:i:s');
			$data=$this->db->query('SELECT * FROM period WHERE ? BETWEEN PeriodStartTime AND PeriodEndTime ',array($time))->result();
			echo json_encode($data);
		}
		public function mot2(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$data['username']=$_SESSION['username'];
			//$result=$this->admin->get_terminal_hallpass($data['username']);
			$this->load->view('terminal/mot2',$data);
		}
		public function index(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$data['username']=$_SESSION['username'];
			//$result=$this->admin->get_terminal_hallpass($data['username']);
			$this->load->view('terminal/index',$data);
		}
	
		public function index_2(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$data['username']=$_SESSION['username'];
			//$result=$this->admin->get_terminal_hallpass($data['username']);

			$this->load->view('terminal/index_2',$data);

		}

		public function get_announcement(){
			$response['school_wide']=$this->admin->get_school_wide();

			echo json_encode ($response);
					
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
		public function index2(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$data['username']=$_SESSION['username'];
			//$result=$this->admin->get_terminal_hallpass($data['username']);
		
			$this->load->view('terminal/index2',$data);

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
	
			$result['response']=$this->admin->get_terminal_info($data['username'],$data['date'],$data['period']);

			$this->session->set_userdata('teacher_id_number', $result['response']['teacher_id_number']);
			$this->session->set_userdata('class_code', $result['response']['class_code']);
			$this->session->set_userdata('period_number', $data['period']);
		    $result['period']=$data['period'];
		    $result['location']=$_SESSION['username'];
			echo json_encode($result);
			
		


		
		}
		public function get_other_hallpass(){
			$sql='SELECT DISTINCT teacher_id_number,b.FirstName,b.LastName,a.location from class_list as a 
			INNER JOIN teacher as b ON a.teacher_id_number=b.IDNumber';
			$query=$this->db->query($sql)->result();
			echo json_encode($query);
		}
		public function get_student_student_hallpass(){
				$data['student_id_number']=$this->input->post('id');
				$teacherlimit=$this->db->query("SELECT value FROM master_control WHERE master_name='Teacher Limit'")->row_array()['value'];
				
				$data['hallpass']=$this->input->post('hallpass');
				$data['pass_type']=$this->admin->check_hallpass_type($data);
				if(empty($data['pass_type'])){
					$data['pass_type']=$this->input->post('type');
				}
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
						elseif($data['active_2way_hallpass']>=$teacherlimit && $data['pass_type']==2)
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
		public function update_attendance(){
			$data = array(
				'lunch' => $this->input->post('IsLunch'),
				
			);
			$this->db->where('AttendanceID', $this->input->post('AttendanceID'));
			$this->db->update('attendance', $data);
			echo json_encode('success');
		}
		public function get_student_schedule(){

			$data['id']=$this->input->post('id');
			

			$data['period']=$this->admin->get_period();
		
			$data['username']=$_SESSION['username'];
 
			if($data['username']=='R-101' || $data['username']=='R-103' )
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
						$response=$this->admin->record_attendace($result['class_id'],$data['id']);
		
						echo json_encode($response);

					}	

				}
				
			}
			else
			{
			
				$result=$this->admin->get_student_class_access($data['id'],$data['period']);
				if($result['status']=='not_enrolled'){
					echo json_encode($result);
				}else{
					//validate of the student is late and need to go to admin and first scan
					$is_first=count($this->admin->check_if_attendance_exist($result['result'][0]['class_id']));
					$is_late=$this->admin->student_arrival_check_in();
					$is_student_arrival_checkin=$this->admin->general_master('slac');
					$is_student_need_lunch=$this->admin->general_master('slc');
				

				
			
					if($is_late=='true' && $is_first==0 && $is_student_arrival_checkin['is_active']==1) {
						echo json_encode('late');
						
					}
					else{
					$data=$this->admin->record_attendace($result['result'][0]['class_id'],$data['id']);

				
						//echo json_encode($data);

					
					
						 $data['is_lunch']=$is_student_need_lunch;
						 $data['is_first']=$is_first;
						//  print_r($data);
						 echo json_encode($data);
						
		
					}
					
				
				}
			}

		
		}
		//set student as absent by default
	
		
	}

?>	
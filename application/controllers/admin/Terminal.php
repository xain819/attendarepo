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
		
			$result=$this->admin->get_terminal_hallpass($data['teacher_id_number']);
			echo json_encode($result);

		}
		
		public function get_terminal_info()
		{
		
			$data['date']=$this->input->post('data');
			$now= new Datetime('now');
		
			$data['period']=$this->admin->get_period();
			$today = date("Y-m-d");  
			$data['username']=$_SESSION['username'];
	
			$result=$this->admin->get_terminal_info($data['username'],$data['date'],$data['period']);
		
	
			//   $this->session->set_userdata('teacher_id_number', $result[0]['teacher_id_number']);
			//   $this->session->set_userdata('class_code', $result[0]['class_code']);
			//   $this->session->set_userdata('period_number', $data['period']);
			print_r($$now );
	

			echo json_encode($result);
		


		
		}
		public function get_student_student_hallpass(){
		$data['student_id_number']=$this->input->post('id');
		$data['hallpass']=$this->input->post('hallpass');
		$data['StudentScheduleID']=$_SESSION['StudentScheduleID'];                                                                                       
		$result=$this->admin->record_student_hallpass($data);
		echo json_encode($result);
		}
		// function get_period(){
			
		
		// 	$now= new Datetime('now');
			
		// 	$data['username']=$_SESSION['username'];
		// 	$q=$this->db->get('period')->result_array();
		// 	foreach($q as $v){
		// 		$start=new Datetime($v['PeriodStartTime']);
		// 		$end=new Datetime($v['PeriodEndTime']);

		// 		if($now >= $start && $now <= $end){
		// 			$data['period']=$v['Period'];
		// 			return $data['period'];
		// 		}
		// 	}
			
		// }


		 function student_arrival_check_in(){
			$result=$this->admin->student_arrival_check_in();
			//false if not late
			


		}

		public function get_student_schedule(){

			$data['id']=$this->input->post('id');
			$data['period']=$this->admin->get_period();
			$data['username']=$_SESSION['username'];
		
		     

			 
			if($data['username']=='R-101'){
				$result=$this->admin->get_student_secretary_access($data['id']);
				if($result==null){
					echo json_encode('not_enrolled');
				}else{
					$b=$this->admin->record_attendace_mot($result[0]['class_id'],$data['period']);
					echo json_encode('late');
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
					$b=$this->admin->record_attendace($result[0]['class_id']);
					echo json_encode($b);
					}
					
				
				}
			}

		
		}
		//set student as absent by default
	
		
	}

?>	
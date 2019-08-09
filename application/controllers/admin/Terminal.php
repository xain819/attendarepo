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
			
			$data['username']=$_SESSION['username'];
			$q=$this->db->get('period')->result_array();
			foreach($q as $v){
				$start=new Datetime($v['PeriodStartTime']);
				$end=new Datetime($v['PeriodEndTime']);

				if($now >= $start && $now <= $end){
					$data['period']=$v['Period'];

				}
			}
	
			$result=$this->admin->get_terminal_info($data['username'],$data['date'],$data['period']);
		
	
			  $this->session->set_userdata('teacher_id_number', $result[0]['teacher_id_number']);
			  $this->session->set_userdata('class_code', $result[0]['class_code']);
			  $this->session->set_userdata('period_number', $result[0]['period_number']);

			echo json_encode($result);
		


		
		}
		public function get_student_student_hallpass(){
		$data['student_id_number']=$this->input->post('id');
		$data['hallpass']=$this->input->post('hallpass');
		$data['StudentScheduleID']=$_SESSION['StudentScheduleID'];                                                                                       
		$result=$this->admin->record_student_hallpass($data);
		echo json_encode($result);
		}
		function get_period(){
			
		
			$now= new Datetime('now');
			
			$data['username']=$_SESSION['username'];
			$q=$this->db->get('period')->result_array();
			foreach($q as $v){
				$start=new Datetime($v['PeriodStartTime']);
				$end=new Datetime($v['PeriodEndTime']);

				if($now >= $start && $now <= $end){
					$data['period']=$v['Period'];
					return $data['period'];
				}
			}
			
		}

		public function get_student_schedule(){

			$data['id']=$this->input->post('id');
			$data['period']=$this->get_period();
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
					$b=$this->admin->record_attendace($result[0]['class_id']);
					echo json_encode($b);
				}
			}

		
		}
		//set student as absent by default
	
		public function test(){
			// $response	=array(
			// 	'csrfName' => $this->security->get_csrf_token_name(),
            //     'csrfHash' => $this->security->get_csrf_hash()
			// );
			if($this->username=='123'){
				$response=array(
					'Teacher'=>'Abdul Jakul',
					'Subject'=>'Physical Education',
					'AvailableUntil'=>'12:00:00',
					'HallPassLock'=>'12:00:00'
				);
			}
			if($this->username=='1234'){
				$response=array(
					'Teacher'=>'Jakul Salsalani',
					'Subject'=>'Science',
					'AvailableUntil'=>'13:00:00',
					'HallPassLock'=>'13:00:00'
				);
			}
			echo json_encode($response);
		}
	}

?>	
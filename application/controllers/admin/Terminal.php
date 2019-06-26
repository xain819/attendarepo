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
			$result=$this->admin->get_terminal_hallpass($data['username']);
		
			$this->load->view('terminal/index',$data);

		}
		public function get_info()
		{
			$data['username']=$_SESSION['username'];
			$result=$this->admin->get_terminal_hallpass($data['username']);
			echo json_encode($result);
		}

		public function get_student_schedule(){
			$data['id']=$this->input->post('data');
			$data['class_code']=$this->input->post('data');
			//$result=$this->admin->get_student_class_access($data['id'],$data['class_code']);
			$result=$this->admin->get_student_class_access('S000000','ABC1234');
			$this->admin->record_attendace($result['id']);
			echo json_encode($result['id']);
			
		}
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
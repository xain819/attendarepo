<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Terminal extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/dashboard_model', 'dashboard_model');
			$this->load->model('dashboard_model');
		}

		public function index(){
			//$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal_modal';
			$data['view1'] = 'terminal/alertmodal';
			$this->load->view('terminal/index',$data);
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
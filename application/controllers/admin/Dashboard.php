<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/dashboard_model', 'dashboard_model');
			$this->load->model('dashboard_model');
			$this->load->model('admin/General_model', 'general');
			
		}
		public function end_of_day(){
			$this->general->end_of_day();

			

		}

		public function index(){
			$data['all_users'] = $this->dashboard_model->get_all_users();
			$data['active_users'] = $this->dashboard_model->get_active_users();
			$data['deactive_users'] = $this->dashboard_model->get_deactive_users();
			$data['title'] = 'Dashboard';
			$data['view'] = 'admin/dashboard/dashboard1';
			$this->load->view('layoutv2', $data);

			
		}
		
		public function masterscheduler(){
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/masterscheduler/index';
			$this->load->view('layout', $data);
		}
		public function info(){
	
			$data['student'] =$this->dashboard_model->get_all_student();
			$data['teacher'] = $this->dashboard_model->get_all_teacher();
			$data['attendance'] = $this->dashboard_model->get_all_attendance();
			$data['hallpass'] = $this->dashboard_model->get_all_hallpass();
			$data['class'] = $this->dashboard_model->get_all_class();
			
			
			

			echo  json_encode($data);
		}
		
	}

?>	
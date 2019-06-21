<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class TeacherInformation extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			
			$this->load->model('admin/admin_model');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
		public function index(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/index';
			$this->load->view('layoutv2', $data);
			
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

		
		
	}

?>	
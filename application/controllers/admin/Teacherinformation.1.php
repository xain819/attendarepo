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
			$this->load->view('layout', $data);
			
		}
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
			$response['department']=$departmentoption;
			echo json_encode($response);
		}
		public function manage_teacher(){
			$data=$this->input->post('data');
			if($this->input->post('type')=='add-new-teacher'){
				$status=$this->admin_model->insert_teacher($data);
			}
			if($this->input->post('type')=='delete-teacher'){
				$status=$this->admin_model->delete_teacher($data);
			}
			
			echo json_encode($status);
		}
		
	}

?>	
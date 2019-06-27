<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class TeacherInformation extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			
			$this->load->model('admin/admin_model');
			$this->load->model('admin/admin_model', 'admin');

		    $this->rbac->check_module_access();
		}
	
		public function change_access_status(){
		$data['id']=$this->input->post('id');
		$this->admin->change_access_status($data['id']);
	
			
		}
		public function get_teacher_course(){
			$teacher=$this->admin->get_all_teacher();
			foreach($teacher as $t){
				$id=$t['IDNumber'];
				$data='';
				$period='';
				$course='';
				$location='';
				$query=$this->admin->get_teacher_course($id);
				foreach ($query as $value){
					$data.=$value['course_code'].'<br>';
					$period.=$value['period_number'].'<br>';
					$course.=$value['course_description'].'<br>';
					$location.=$value['location'].'<br>';
				}
				$this->db->set('period_list',$period);
				$this->db->set('course_description_list',$course);
				$this->db->set('teacher_course_list',$data);
				$this->db->set('location_list',$location);
				$this->db->where('IDNumber',$t['IDNumber']);
				$this->db->update('teacher');
			}
			json_encode($data);
		}
		public function index(){
			$data['title'] = 'Teacher Information';
			$data['view'] = 'admin/teacherinformation/index';
			$this->get_teacher_course();
			$this->load->view('layoutv2', $data);
			
			
		}
		public function get_terminal_access(){
	
			$teacherid=$this->input->post('data');
			$data['teacher_id']=$teacherid;
		
			$data['ahp']=$this->admin->get_terminal_access($teacherid,1);
			$data['nhp']=$this->admin->get_terminal_access($teacherid,2);
			
			echo json_encode($data);
			
			
		}
		public function teacher_hallpass(){
	
			$teacherid=$this->input->post('data');
			$data['teacher_id']=$teacherid;
		
			$data['ahp']=$this->admin->get_teacher_hallpass($teacherid,1);
			$data['nhp']=$this->admin->get_teacher_hallpass($teacherid,2);
			print_r($data);
			echo json_encode($data);
			
			
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
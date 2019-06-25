<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Academicsettings extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('rbac');
		$this->load->model('admin/admin_model', 'admin');

		$this->rbac->check_module_access();
    }

	//-----------------------------------------------------		
	function index()
	{
		
		$data['view'] = 'admin/academicsettings/index';
		$data['page'] = 'admin/academicsettings/courses';
		$this->load->view('layoutv2', $data);
	
	
	}
	function gleek()
	{
		
		$data['view'] = 'gleek/main/template/index-school';
		$data['page'] = 'admin/academicsettings/courses';
		$this->load->view('layoutv2');
	
	
	}
	public function courses()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/index';
	
		$this->load->view('layoutv2', $data);

	}
	public function department()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/department';
		$this->load->view('layoutv2', $data);

	}
	public function section()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/section';
		$this->load->view('layoutv2', $data);

	}

	///////////////////////////////////////race//////////////////	
		public function race()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/race';
		$this->load->view('layoutv2', $data);

	}
	public function check_race()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/race';
		$race=$this->input->post('data');
		$this->admin->import_race($race);
		$data['import']=$this->admin->get_import_race();
		echo json_encode($data['import']);

	}
	public function get_import_race(){
		$data['import']=$this->admin->get_import_race();
		echo json_encode($data['import']);

	}


	

	//////////////////////////
	
		public function subjects()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/subjects';
		$this->load->view('layoutv2', $data);

	}
	public function check_subjects()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/subjects';
		$subjects=$this->input->post('data');
		$this->admin->import_subjects($subjects);
		$data['import']=$this->admin->get_import_subjects();
		echo json_encode($data['import']);

	}
	public function get_import_subjects(){
		$data['import']=$this->admin->get_import_subjects();
		echo json_encode($data['import']);

	}
	public function check_section()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/section';
		$section=$this->input->post('data');
		$this->admin->import_section($section);
		$data['import']=$this->admin->get_import_section();
		echo json_encode($data['import']);

	}
	public function get_import_section(){
		$data['import']=$this->admin->get_import_section();
		echo json_encode($data['import']);

	}
	public function check_department()
	{
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/department';
		$department=$this->input->post('data');
		$this->admin->import_department($department);
		$data['import']=$this->admin->get_import_department();
		echo json_encode($data['import']);

	}
	public function get_import_department(){
		$data['import']=$this->admin->get_import_department();
		echo json_encode($data['import']);

	}

	public function check_courses()
	{
	
		$data['title'] = 'Courses';
		$data['view'] = 'admin/academicsettings/index';
		$data['page'] = 'admin/academicsettings/courses';
		$courses=$this->input->post('data');
		$this->admin->import_courses($courses);
		$data['import']=$this->admin->get_import_courses();
		$this->load->view('layout', $data);
		echo json_encode($data['import']);


	}
	public function get_import_courses(){
		$data['import']=$this->admin->get_import_courses();
		echo json_encode($data['import']);

	}


	

	//---------------------------------------------------------
	
	//--------------------------------------------------		


	//-----------------------------------------------------------

	
	//--------------------------------------------------
	function add()
	{	
		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles']=$this->admin->get_admin_roles();

		if($this->input->post('submit')){
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
				$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('role', 'Role', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/admin/add';
					$this->load->view('layout', $data);
				}
				else{
					$data = array(
						'admin_role_id' => $this->input->post('role'),
						'username' => $this->input->post('username'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_active' => 1,
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->admin->add_admin($data);
					if($result){
						$this->session->set_flashdata('msg', 'Admin has been added successfully!');
						redirect(base_url('admin/admin'));
					}
				}
			}
			else
			{
				$data['view']='admin/admin/add';
				$this->load->view('layout',$data);	
			}
	}

	//--------------------------------------------------
	function edit($id="")
	{
		$this->rbac->check_operation_access(); // check opration permission

		$data['admin_roles'] = $this->admin->get_admin_roles();

		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
			$this->form_validation->set_rules('role', 'Role', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['admin'] = $this->admin->get_admin_by_id($id);
				$data['view'] = 'admin/admin/edit';
				$this->load->view('layout', $data);
			}
			else{
				$data = array(
					'admin_role_id' => $this->input->post('role'),
					'username' => $this->input->post('username'),
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'mobile_no' => $this->input->post('mobile_no'),
					'is_active' => 1,
					'updated_at' => date('Y-m-d : h:m:s'),
				);

				$data = $this->security->xss_clean($data);
				$result = $this->admin->edit_admin($data, $id);

				if($result){
					$this->session->set_flashdata('msg', 'Admin has been updated successfully!');
					redirect(base_url('admin/admin'));
				}
			}
		}
		elseif($id==""){
			redirect('admin/admin');
		}
		else{
			$data['admin'] = $this->admin->get_admin_by_id($id);
			$data['view'] = 'admin/admin/edit';
			$this->load->view('layout',$data);
		}		
	}

	//--------------------------------------------------
	function check_username($id=0)
    {
		$this->db->from('admin');
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('admin_id !='.$id);
		$query=$this->db->get();
		if($query->num_rows() >0)
			echo 'false';
		else 
	    	echo 'true';
    }

    //------------------------------------------------------------
	function delete($id='')
	{   
		$this->rbac->check_operation_access(); // check opration permission

		$this->admin->delete($id);
		$this->session->set_flashdata('success','User has been Deleted Successfully.');	
		redirect('admin/admin');
	}
	
}

?>

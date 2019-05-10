<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/user_model', 'user_model');
			$this->load->library('datatable'); // loaded my custom serverside datatable library

			$this->rbac->check_module_access();
		}

		public function index(){
			$data['view'] = 'teacher/users/user_list';
			$this->load->view('layout_teacher', $data);
		}
		
		public function datatable_json(){				   					   
			$records = $this->user_model->get_all_users();
			$data = array();

			$i=0;
			foreach ($records['data']  as $row) 
			{  
				$status = ($row['is_active'] == 1)? 'checked': '';
				$data[]= array(
					++$i,
					date_time($row['created_at']),	
					date_time($row['created_at']),
					$row['username'],
					$row['email'],
					$row['mobile_no'],

					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',	

					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',	

					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',		
					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',			
					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',		
					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',		
					'<input class="checkbox" 
					data-id="'.$row['id'].'" 
					id="cb_'.$row['id'].'"
					type="checkbox"  
					'.$status.'><label for="cb_'.$row['id'].'"></label>',	
					$row['username'],			

				);
			}
			$records['data']=$data;
			echo json_encode($records);						   
		}

		//-----------------------------------------------------------
		function change_status()
		{   
			$this->user_model->change_status();
		}

		public function add(){
			
			$this->rbac->check_operation_access(); // check opration permission

			if($this->input->post('submit')){
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
				$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'teacher/users/user_add';
					$this->load->view('layout_teacher', $data);
				}
				else{
					$data = array(
						'username' => $this->input->post('username'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'address' => $this->input->post('address'),
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->add_user($data);
					if($result){
						$this->session->set_flashdata('msg', 'User has been added successfully!');
						redirect(base_url('teacher/users'));
					}
				}
			}
			else{
				$data['view'] = 'teacher/users/user_add';
				$this->load->view('layout_teacher', $data);
			}
			
		}

		public function edit($id = 0){

			$this->rbac->check_operation_access(); // check opration permission

			if($this->input->post('submit')){
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('firstname', 'Username', 'trim|required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
				$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
				$this->form_validation->set_rules('status', 'Status', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['user'] = $this->user_model->get_user_by_id($id);
					$data['view'] = 'admin/users/user_edit';
					$this->load->view('layout', $data);
				}
				else{
					$data = array(
						'username' => $this->input->post('username'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_active' => $this->input->post('status'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->user_model->edit_user($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'User has been updated successfully!');
						redirect(base_url('admin/users'));
					}
				}
			}
			else{
				$data['user'] = $this->user_model->get_user_by_id($id);
				$data['view'] = 'teacher/users/user_edit';
				$this->load->view('layout_teacher', $data);
			}
		}

		public function delete($id = 0)
		{
			$this->rbac->check_operation_access(); // check opration permission
			
			$this->db->delete('ci_users', array('id' => $id));
			$this->session->set_flashdata('msg', 'Use has been deleted successfully!');
			redirect(base_url('teacher/users'));
		}

	}


	?>
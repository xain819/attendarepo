<?php
	class Hallpass_model extends CI_Model{

		public function get_all($type){

			//$this->db->where('is_admin', 0);
			//$this->db->order_by('created_at', 'desc');
			$this->db->where('PassTypeID', $type);
			$query = $this->db->get('hallpass');
			return $result = $query->result_array();
		}

		public function check_student_id(){
			$query= $this->db->get('student');
			return $result = $query->result_array();
		}



		public function add($data){
			$this->db->insert('hallpass', $data);
			return true;
		}

		//---------------------------------------------------
		// get all users for server-side datatable processing (ajax based)
		public function get_all_users(){
			$wh =array();
			$SQL ='SELECT * FROM users';
			$wh[] = " is_admin = 0";
			if(count($wh)>0)
			{
				$WHERE = implode(' and ',$wh);
				return $this->datatable->LoadJson($SQL,$WHERE);
			}
			else
			{
				return $this->datatable->LoadJson($SQL);
			}
		}


		//---------------------------------------------------
		// Get user detial by ID
		public function get_user_by_id($id){
			$query = $this->db->get_where('users', array('id' => $id));
			return $result = $query->row_array();
		}

		//---------------------------------------------------
		// Edit user Record
		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('users', $data);
			return true;
		}

		//---------------------------------------------------
		// Change user status
		//-----------------------------------------------------
		function change_status()
			{		
				$this->db->set('is_active',$this->input->post('status'));
				$this->db->where('HallPassID',$this->input->post('id'));
				$this->db->update('hallpass');
			} 

		function get_pass_type()
		{
			$this->db->from('passtype');
			$query=$this->db->get();
			return $query->result_array();
		}


	}

?>
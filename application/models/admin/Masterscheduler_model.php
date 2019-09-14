<?php
	class Masterscheduler_model extends CI_Model{

		public function get_all(){

			//$this->db->where('is_admin', 0);
			//$this->db->order_by('created_at', 'desc');
			$query = $this->db->get('period');
			return $result = $query->result_array();
		}

		public function check_student_id(){
			$query= $this->db->get('student');
			return $result = $query->result_array();
		}

		public function add_scheduledate($data){

			$this->db->insert('scheduledate', $data);
			return ($this->db->affected_rows() != 1) ? false : true;
		}

		
			
		//---------------------------------------------------
		// get all users for server-side datatable processing (ajax based)
		public function get_scheduletype(){
			$sql='SELECT * FROM `scheduletype`';
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function get_all_periods(){
			$sql='SELECT * FROM `period`';
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function slider_periods($a){
			$this->db->where('schedule_type',$a);
			$q=$this->db->get('period')->result_array();
			return $q;
		}
		function get_period_access()
		{
			$this->db->from('scheduletype');
			$query=$this->db->get();
			$data=array();
			foreach($query->result_array() as $v)
			{
				$data[]=$v['ScheduleType'].'/'.$v['PeriodAccess'];
			}
			return $data;
		} 	

		public function get_period_access_by_type($type){
			$query = $this->db->get_where('scheduletype', array('ScheduleType' => $type));
			return $result = $query->row_array();
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

		public function get_data_array()
		{
			$query = $this->db->get('scheduledate');
			return $result = $query->result_array();
			
		}
	
		public function get_all_scheduletype()
		{
			$query = $this->db->get('scheduletype');
			return $result = $query->result_array();
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


			function set_access()
			{
				if($this->input->post('status')==1)
				{
					$this->db->set('admin_role_id',$this->input->post('admin_role_id'));
					$this->db->set('module',$this->input->post('module'));
					$this->db->set('operation',$this->input->post('operation'));
					$this->db->insert('module_access');
				}
				else
				{
					$this->db->where('admin_role_id',$this->input->post('admin_role_id'));
					$this->db->where('module',$this->input->post('module'));
					$this->db->where('operation',$this->input->post('operation'));
					$this->db->delete('module_access');
				}
		


		} 
		public function delete_scheduledate($scheduledateid){
			$this->db->where('ScheduleDateID',$scheduledateid);
			$this->db->delete('ScheduleDate');
			return ($this->db->affected_rows() != 1) ? false : true;
		}
		public function delete_schedule_type($scheduletypeid){
			$this->db->where('ScheduleTypeID',$scheduletypeid);
			$this->db->delete('ScheduleType');
			return ($this->db->affected_rows() != 1) ? false : true;
		}
		public function add_schedule_type($data){
			$values=array(
				'ScheduleType'=>$data[0],
				'backgroundColor'=>$data[1]
			);
			$this->db->insert('ScheduleType',$values);
			return ($this->db->affected_rows() != 1) ? false : true;
		}

		public function manage_period($type,$data){
			if($type=='delete-period'){
				$this->db->where('PeriodID',$data);
				$this->db->delete('period');
				return ($this->db->affected_rows() != 1) ? false : true;

			}else{
				$values=array(
				
					'Period'=>$data[1],
					'PeriodStartTime'=>$data[2],
					'PeriodEndTime'=>$data[3],
				
				);
	
				if($type=='edit-period'){
	
					$this->db->where('PeriodID', $data[4]);
					$this->db->update('period', $values);
					return ($this->db->affected_rows() != 1) ? false : true;
				}else{
					$this->db->insert('period',$values);
					return ($this->db->affected_rows() != 1) ? false : true;
				}
				
			}
			
		}

		public function get_period_by_id($PeriodID){
	
			$sql='SELECT * FROM period where PeriodID=?';
			$query=$this->db->query($sql,array($PeriodID));
			return $query->result();
		}

		public function add_period($a){
			$sql = "select id_name,master_value from master_control where id_name='pgt' or id_name='tt'";
			$result=$this->db->query($sql)->result_array();

			$this->db->where('schedule_type',$a['schedule_type']);
			$this->db->where('Period',$a['period']);
			$q=$this->db->get('period')->row_array();
			if($q==null)
			{
				$this->db->set('schedule_type',$a['schedule_type']);
				$this->db->set('Period',$a['period']);
				$this->db->set('schedule_type',$a['schedule_type']);
				$this->db->set('GracePeriod',$result[0]['master_value']);
				$this->db->set('TransitionTime',$result[1]['master_value']);
				$this->db->insert('period');
			}

			print_r($result);
		}
		public function del_period($a){
			

			$this->db->where('schedule_type',$a['schedule_type']);
			$this->db->where('Period',$a['period']);
			$this->db->delete('Period',$a['period']);
	

			print_r($result);
		}

		
		public function edit_slider_period($a){
		if($a['type']=='move'){

		
			$this->db->set('PeriodStartTime',$a['PeriodStartTime']);
			$this->db->set('PeriodEndTime',$a['PeriodEndTime']);
			$this->db->where('schedule_type',$a['schedule_type']);
			$this->db->where('Period',$a['Period']);
			$this->db->update('Period');
		}
		elseif ($a['type']=='left') {
			$this->db->set('PeriodStartTime',$a['PeriodStartTime']);
	
			$this->db->where('schedule_type',$a['schedule_type']);
			$this->db->where('Period',$a['Period']);
			$this->db->update('Period');
		}elseif($a['type']=='right')
		{

			$this->db->set('PeriodEndTime',$a['PeriodEndTime']);
			$this->db->where('schedule_type',$a['schedule_type']);
			$this->db->where('Period',$a['Period']);
			$this->db->update('Period');
		}
	}
		



	}

?>
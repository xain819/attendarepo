<?php
	class Dashboard_model extends CI_Model{

		public function get_all_users(){
			return $this->db->count_all('users');
		}
		public function get_active_users(){
			$this->db->where('is_active', 1);
			return $this->db->count_all_results('users');
		}
		public function get_deactive_users(){
			$this->db->where('is_active', 0);
			return $this->db->count_all_results('users');
		}
		public function get_all_student (){
			$sql="SELECT count( DISTINCT student_local_id )as `count` FROM `class_list`";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function get_all_teacher (){
			$sql="SELECT count( DISTINCT IDNumber )as `count` FROM `teacher`";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function get_all_period (){
			$this->db->Distinct();
			$this->db->select("Period");
			$this->db->select("color");
			$q=$this->db->get('period')->result_array();
			return $q;
		
		}
		public function get_all_hallpass_analytics (){
			$this->db->Distinct();
			$this->db->select("HallPass");
			
			$q=$this->db->get('hallpass')->result_array();
			return $q;
		
		}
		public function get_all_attendance (){
			$sql="SELECT count( DISTINCT AttendanceID )as `count` FROM `attendance`";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function get_all_hallpass (){
			$sql="SELECT count( DISTINCT ID )as `count` FROM `attendance_hallpass`";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function get_all_class (){
			$sql="SELECT count( DISTINCT class_id )as `count` FROM `class_list`";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function get_hallpass_count ($a,$b){
		$sql="SELECT count( id )as `count` FROM `attendance_hallpass` where hallpass='{$a}' and status_type='{$b}'";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function manage_hallpass_status (){
			$sql="SELECT p.PeriodStartTime,p.PeriodEndTime,s.title,at.AttendanceDate,a.is_active,a.type,a.pass_type,a.ID,a.attendance_id,a.hallpass,at.PeriodID, a.date_time_ended,a.DateCreated,h.TimeAllocated,a.student_local_id FROM attendance_hallpass a join hallpass h on h.HallPass=a.hallpass join attendance at on a.attendance_id=at.AttendanceID join scheduledate s on s.start=at.AttendanceDate join period p on p.Period=at.PeriodID and p.schedule_type=s.title where a.is_active=0";
			$q=$this->db->query($sql)->result_array();
		
			return $q;
		
		}

	
	}

?>

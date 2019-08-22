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
	}

?>

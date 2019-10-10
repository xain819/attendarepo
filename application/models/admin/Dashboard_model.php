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
			$this->db->select("color");
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
	
		public function get_count_hallpass ($a){
			if($_SESSION['v_student_local_data']==''){
				$sql="SELECT count( DISTINCT ID )as `count` FROM `attendance_hallpass` where pass_type='{$a}' 
				and DateCreated>='{$_SESSION['start_d']}' and DateCreated<='{$_SESSION['end_d']}'";
			}else{
				$sql="SELECT count( DISTINCT ID )as `count` FROM `attendance_hallpass` where pass_type='{$a}' and student_local_id={$_SESSION['v_student_local_data']}
				and DateCreated>='{$_SESSION['start_d']}' and DateCreated<='{$_SESSION['end_d']}'";

			}
		
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function limit (){
			$sql="SELECT  value  FROM `master_control` where id_name='nql'";
			$q=$this->db->query($sql)->row_array();
			$a=explode(',',$q['value']);
		
			return $a;
		
		}
		public function get_all_class (){
			$sql="SELECT count( DISTINCT class_id )as `count` FROM `class_list`";
			$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}

		public function get_hallpass_count ($a,$b){
			if($_SESSION['v_student_local_data']==''){
				$sql="SELECT count( id )as `count` FROM `attendance_hallpass` where hallpass='{$a}' and status_type='{$b}' 
				and DateCreated>='{$_SESSION['start_d']}' and DateCreated<='{$_SESSION['end_d']}'";
		
			}else{
				$sql="SELECT count( id )as `count` FROM `attendance_hallpass` where hallpass='{$a}' and status_type='{$b}' and student_local_id='{$_SESSION['v_student_local_data']}'
				and DateCreated>='{$_SESSION['start_d']}' and DateCreated<='{$_SESSION['end_d']}'  ";
		
			}
		$q=$this->db->query($sql)->row_array();
		
			return $q['count'];
		
		}
		public function get_student_name($a){
			$this->db->Distinct();
			$this->db->select('first_name');
			$this->db->select('last_name');
			$this->db->where('student_local_id',$a);
			$q=$this->db->get('student_table')->row_array();

			return $q;

		}

		public function get_period_status_count ($a,$b,$c){
		
			if($_SESSION['v_student_local_data']==''){
			$sql="SELECT count(a.ID) as count, cl.course_code,a.status_type,p.PeriodStartTime,p.PeriodEndTime,s.title,
			at.AttendanceDate,a.is_active,a.type,a.pass_type,a.ID,a.attendance_id,a.hallpass,
			at.PeriodID,a.date_time_ended,a.DateCreated,h.TimeAllocated,a.student_local_id
			 FROM attendance_hallpass a join hallpass h on h.HallPass=a.hallpass join attendance 
			 at on a.attendance_id=at.AttendanceID join scheduledate s on s.start=at.AttendanceDate
			  join period p on p.Period=at.PeriodID and p.schedule_type=s.title join class_list cl 
			  on cl.class_id=at.class_id where  a.is_active=0 and p.Period='{$a}'and  a.hallpass='{$c}' and a.status_type='{$b}' ";}
			  else{
				$sql="SELECT count(a.ID) as count, cl.course_code,a.status_type,p.PeriodStartTime,p.PeriodEndTime,s.title,
				at.AttendanceDate,a.is_active,a.type,a.pass_type,a.ID,a.attendance_id,a.hallpass,
				at.PeriodID,a.date_time_ended,a.DateCreated,h.TimeAllocated,a.student_local_id
				 FROM attendance_hallpass a join hallpass h on h.HallPass=a.hallpass join attendance 
				 at on a.attendance_id=at.AttendanceID join scheduledate s on s.start=at.AttendanceDate
				  join period p on p.Period=at.PeriodID and p.schedule_type=s.title join class_list cl 
				  on cl.class_id=at.class_id where  a.is_active=0 and p.Period='{$a}'and  a.hallpass='{$c}' and a.status_type='{$b}' and a.student_local_id='{$_SESSION['v_student_local_data']}' ";
			  }
				$q=$this->db->query($sql)->row_array();

				return $q['count'];
			
			}
		public function manage_hallpass_status (){
			$sql="SELECT  cl.course_code,a.status_type,p.PeriodStartTime,p.PeriodEndTime,
			s.title,at.AttendanceDate,a.is_active,a.type,a.pass_type,a.ID,a.attendance_id,
			a.hallpass,at.PeriodID,a.date_time_ended,a.DateCreated,h.TimeAllocated,a.student_local_id FROM
			attendance_hallpass a join hallpass h on h.HallPass=a.hallpass join
			attendance at on a.attendance_id=at.AttendanceID join scheduledate s on 
			s.start=at.AttendanceDate join period p on p.Period=at.PeriodID and p.schedule_type=s.title join class_list cl on cl.class_id=at.class_id
			
			where a.is_active=0 ";
			$q=$this->db->query($sql)->result_array();
		
			return $q;
		
		}


		public function neg_seat()
		{
			$sql="SELECT sum(negative_seat_time) as SUM from attendance_hallpass";
			$q=$this->db->query($sql)->row_array();
			return $q['SUM'];

		}

	
	}

?>

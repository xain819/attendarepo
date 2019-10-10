<?php
	class Student_model extends CI_Model{

		public function update_hallpass_status($a,$b,$c)
		{
			$this->db->where('ID',$c);
			 $this->db->set('negative_seat_time',$a);
			 $this->db->set('status_type',$b);
			 $this->db->update('attendance_hallpass');


		}
		public function negative_seat_time($a)
		{
			$this->db->where('student_local_id',$a);
			$q=$this->db->get('attendance_hallpass')->row_array();
			
		}
	}

?>
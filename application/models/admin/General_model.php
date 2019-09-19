<?php
	class General_model extends CI_Model{

		public function validate_swipe($a)
		{	
			$today=date("Y-m-d");
			echo('END SWIPE');
			$this->db->where('PeriodID',$a);
			$q=$this->db->get('period')->row_array();
		
			$swipe_time   =   date($q['DateCreated']);
			$swipe_hour   =   date('H:i:s', strtotime($swipe_time));
			$swipe_date   =   date('Y-m-d', strtotime($swipe_time));
			$result = $today.' '.$q['PeriodEndTime'];

			$this->db->where('is_active',1);
			$this->db->set('is_active',0);
			$this->db->set('type','EOP');
			$this->db->set('date_time_ended',$result);
	  		$this->db->update('attendance_hallpass');
		
		}

	}

?>
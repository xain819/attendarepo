<?php
	class Controlpannel_model extends CI_Model{

		function get_day_type(){
			$today=date("Y-m-d");
			$this->db->where('start',$today);
			$q=$this->db->get('scheduledate')->row_array();
			return $q;
			
		}
		function get_term()
	    {
		$today = date("Y-m-d");  
		$this->db->where('name','Semester');
		$now=date("Y-m-d", strtotime($today));
		$result=$this->db->get('school_settings')->result_array();

		foreach($result as $v){
			$start = date("Y-m-d", strtotime($v['start']));
			$end = date("Y-m-d", strtotime($v['end']));
			if($start<=$now && $now<=$end)
			{
			$data=$v;
			}
		
		}

		return $data;

	}
		public function get_terminal_status($a){
			$type=$this->get_day_type();
			$term=($this->get_term())['name_id'];
			$sql="select DISTINCT t.FirstName,t.LastName,l.Location,l.is_active,l.LocationGroup,
			l.LocationID,l.pin,l.hallpass_is_active,
			l.master_terminal,l.master_hallpass,c.term
			from location l left join class_list c on c.location=l.Location
			left join teacher t on t.IDNumber=c.teacher_id_number where  c.term='{$term}'";
			$q=$this->db->query($sql)->result_array();
		
			 return ($this->db->query($sql)->result_array());

		}
		public function get_hallpass($a){
			$this->db->where('PassTypeID',$a);
			return($this->db->get('hallpass')->result_array());
		

		}
		public function assign_terminal_username()
		{
			$sql="select DISTINCT  c.location,a.username,a.password from class_list c left join admin a on a.username=c.location";
			$result=$this->db->query($sql)->result_array();
		
			foreach($result as $v){
				if($v['username']==null){
					
					$data = array(
						'username' => $v['location'],
					
				
						'admin_role_id' => 9, // By default i putt role is 2 for registraiton
						'password' =>  password_hash($v['location'], PASSWORD_BCRYPT),
						'is_active' => 1,
						'is_verify' => 1,
						'token' => md5(rand(0,1000)),    
						'last_ip' => '',
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
				$this->db->insert('admin',$data);
			
				}

			}
		}

		// initialize and assign admin location if not exisst.
		// public function assign_hallpass_username()
		// {
		// 	$sql="select DISTINCT  h.location,a.username,a.password from hallpass h left join admin a on a.username=h.location where h.PassTypeID=1";
		// 	$result=$this->db->query($sql)->result_array();
		
		// 	foreach($result as $v){
		// 		if($v['username']==null){
					
		// 			$data = array(
		// 				'username' => $v['location'],
					
				
		// 				'admin_role_id' => 9, // By default i putt role is 2 for registraiton
		// 				'password' =>  password_hash($v['location'], PASSWORD_BCRYPT),
		// 				'is_active' => 1,
		// 				'is_verify' => 1,
		// 				'token' => md5(rand(0,1000)),    
		// 				'last_ip' => '',
		// 				'created_at' => date('Y-m-d : h:m:s'),
		// 				'updated_at' => date('Y-m-d : h:m:s'),
		// 			);
		// 		$this->db->insert('admin',$data);
			
		// 		}

		// 	}
		// }
		

		public function manage_terminal(){


			
			$sql="select DISTINCT t.FirstName,t.LastName,t.IDNumber,l.Location,l.is_active,l.LocationGroup,
			l.LocationID,l.pin,l.hallpass_is_active,
			l.master_terminal,l.master_hallpass
			from location l left join class_list c on c.location=l.Location
			left join teacher t on t.IDNumber=c.teacher_id_number";
			$q=$this->db->query($sql)->result_array();
			return $q; 

		}

		public function import_terminal($data){
		
			foreach ($data as $value) {


				if(count($value)>=7)
				{
			
				 $this->db->where('LocationID',$value['LocationID']);
				 $this->db->delete('location');
					
				}
				else{

		
					$this->db->where('LocationID',$value['LocationID']);
					$q=$this->db->get('location')->row_array();
					if($q!=null){
						$this->db->where('LocationID',$value['LocationID']);
						$this->db->set('Location',$value['Location']);
						$this->db->set('LocationGroup',$value['LocationGroup']);
						$this->db->update('location');
					}			
					//add date if not exist
					else{
						
						$this->db->insert('location',$value);
						$data = array(
							'username' => $value['Location'],
						
					
							'admin_role_id' => 9, // By default i putt role is 2 for registraiton
							'password' =>  password_hash($value['Location'], PASSWORD_BCRYPT),
							'is_active' => 1,
							'is_verify' => 1,
							'token' => md5(rand(0,1000)),    
							'last_ip' => '',
							'created_at' => date('Y-m-d : h:m:s'),
							'updated_at' => date('Y-m-d : h:m:s'),
						);
						$this->db->insert('admin',$data);
					}
			

				}
			
					
			}
		
		//	
		}
		public function import_hallpass($data){
		
			foreach ($data as $value) {


				if(count($value)>=7)
				{
			
				 $this->db->where('HallPassID',$value['HallPassID']);
				 $this->db->delete('hallpass');
					
				}
				else{

		
					$this->db->where('HallPassID',$value['HallPassID']);
					$q=$this->db->get('hallpass')->row_array();
					if($q!=null){
						$this->db->where('HallPassID',$value['HallPassID']);
						$this->db->set('location',$value['location']);
						$this->db->set('pin',$value['pin']);
						$this->db->update('hallpass');
					}	
					
					
					// //add date if not exist
					// else{
						
					// 	$this->db->insert('location',$value);
					// 	$data = array(
					// 		'username' => $value['Location'],
						
					
					// 		'admin_role_id' => 9, // By default i putt role is 2 for registraiton
					// 		'password' =>  password_hash($value['Location'], PASSWORD_BCRYPT),
					// 		'is_active' => 1,
					// 		'is_verify' => 1,
					// 		'token' => md5(rand(0,1000)),    
					// 		'last_ip' => '',
					// 		'created_at' => date('Y-m-d : h:m:s'),
					// 		'updated_at' => date('Y-m-d : h:m:s'),
					// 	);
					// 	$this->db->insert('admin',$data);
					// }
			

				}
			
					
			}
		
		//	
		}



	}

?>

<?php
	class Teacher_model extends CI_Model{

		public function assign_techer_course_details(){
	
			$this->db->distinct();
			$this->db->select('IDNumber');
			$q=$this->db->get('teacher')->result_array();
	
			foreach($q as $t){
				$data='';
						$period='';
						$course='';
						$location='';

				$sql="select distinct `cl`.`teacher_id_number` AS `teacher_id_number`,`cl`.`period_number` AS `period_number`,`cl`.`course_code` AS `course_code`,`cl`.`class_type` AS `class_type`,`cl`.`location` AS `location`,`co`.`short_desc` AS `short_desc` from ((`attendatrack`.`class_list` `cl` join `attendatrack`.`teacher` `t` on(`t`.`IDNumber` = `cl`.`teacher_id_number`)) left join `attendatrack`.`courses` `co` on(`co`.`course_code` = `cl`.`course_code` and `co`.`course_type` = `cl`.`class_type`)) where `t`.`IDNumber` = '{$t['IDNumber']}'";
				$result=$this->db->query($sql)->result_array();
				foreach ($result as $value){
								$data.=$value['course_code'].'<br>';
								$period.=$value['period_number'].'<br>';
								$course.=$value['short_desc'].'<br>';
								$location.=$value['location'].'<br>';
							
							}
							$this->db->set('period_list',$period);
							$this->db->set('course_description_list',$course);
							$this->db->set('teacher_course_list',$data);
							$this->db->set('location_list',$location);
							$this->db->where('IDNumber',$t['IDNumber']);
							$this->db->update('teacher');



			}

	
			// public function get_teacher_course(){
			// 	$teacher=$this->admin->get_all_teacher();
			// 	$data="";
			// 	foreach($teacher as $t){
			// 		$id=$t['IDNumber'];
			// 		$data='';
			// 		$period='';
			// 		$course='';
			// 		$location='';
			// 		$query=$this->admin->get_teacher_course($id);
			// 		foreach ($query as $value){
			// 			$data.=$value['course_code'].'<br>';
			// 			$period.=$value['period_number'].'<br>';
			// 			$course.=$value['short_desc'].'<br>';
			// 			$location.=$value['location'].'<br>';
					
			// 		}
			// 		$this->db->set('period_list',$period);
			// 		$this->db->set('course_description_list',$course);
			// 		$this->db->set('teacher_course_list',$data);
			// 		$this->db->set('location_list',$location);
			// 		$this->db->where('IDNumber',$t['IDNumber']);
			// 		$this->db->update('teacher');
			// 	}
			
			}

		public function assign_teacher_terminal(){
		
			$sql='SELECT teacherID,hallpassAccess FROM `teacher`';
			$query=$this->db->query($sql);
			$result=$query->result_array();
			
	
			foreach ($result as $v){
		
				$access=explode('|',$v['hallpassAccess']);
	
			
				foreach($access as $a){
					$data_array=array(
						'access'=>$a,
						'teacherID'=>$v['teacherID'],
						'is_active'=>'1',
						'time_limit'=>'5');
				
				$this->db->select('teacherID,access');
				$this->db->where('teacherID',$v['teacherID']);
				$this->db->where('access',$a);
				$query=$this->db->get('teacher_access');
				$result=$query->result_array();
			
	
				if ( $query->num_rows() > 0 ) 
				{
					$var='';
				}
				else
				{
					$this->db->insert('teacher_access',$data_array);
					
				}
	
	
				}
			
	
			
				
			
	
			}
			
		}
		public function set_session_teacher_id(){
			$this->db->select('TeacherID');
			$this->db->where('IDNumber',$_SESSION['username']);
			$q=$this->db->get('teacher')->row_array();
	
			$this->session->set_userdata('TeacherID',$q['TeacherID']);

		}
		public function assign_teacher_username()
		{
			
			$sql="select DISTINCT  c.teacher_id_number,t.FirstName,t.LastName,c.location,a.username,a.password from class_list c left join admin a on a.username=c.teacher_id_number left join teacher t on t.IDNumber=c.teacher_id_number";
			$result=$this->db->query($sql)->result_array();
		
			foreach($result as $v){
				if($v['username']==null){
					
					$data = array(
						'username' => $v['teacher_id_number'],
				
						'admin_role_id' => 10, // By default i putt role is 2 for registraiton
						'password' =>  password_hash($v['teacher_id_number'], PASSWORD_BCRYPT),
						'is_active' => 1,
						'IDNumber' => $v['IDNumber'],
						'is_verify' => 1,
						'token' => md5(rand(0,1000)),    
						'last_ip' => '',
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
				try {
	
				$this->db->insert('admin',$data);
				} catch (Exception $e) {
				
				}
			
				}

			}
		}


		
		public function class_access()

		{
			$sql="SELECT DISTINCT cl.period_number,t.FirstName,t.LastName,t.IDNumber,co.course_description,cl.class_code_1
			 from class_list cl left join courses co on co.course_code =cl.course_code join teacher t on t.IDNumber = cl.teacher_id_number join period p on p.Period=cl.period_number";
			$q=$this->db->query($sql)->result_array();
		
			foreach($q as $v){
				$this->db->select('class_code');
				$this->db->where('class_code',$v['class_code_1']);
				$qq=$this->db->get('teacher_class')->result_array();
				if($qq==null){
				
					$this->db->set('teacher_id_number',$v['IDNumber']);
					$this->db->set('period_number',$v['period_number']);
					$this->db->set('class_code',$v['class_code_1']);
					$this->db->insert('teacher_class');
				}
			}


		}
		public function get_teacher_access()
		{
			$sql="SELECT DISTINCT tc.class_code,co.course_description,cl.location,t.FirstName,t.LastName,tc.class_code,tc.teacher_id_number,tc.2hp_limit,tc.limit_type,tc.overide_is_active,tc.excess_non_admin_hp,tc.period_number,tc.is_active,tc.id FROM teacher_class tc join class_list cl on cl.class_code_1=tc.class_code join teacher t on t.IDNumber=tc.teacher_id_number join courses co on co.course_code=cl.course_code and co.course_type =cl.class_type where t.IDNumber='{$_SESSION['username']}'";
			$q=$this->db->query($sql)->result_array();
			return $q;
		}
	}

?>

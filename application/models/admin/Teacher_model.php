<?php
	class Teacher_model extends CI_Model{

		public function assign_teacher_username()
		{
			$sql="select DISTINCT  c.teacher_id_number,t.FirstName,t.LastName,c.location,a.username,a.password from class_list c left join admin a on a.username=c.teacher_id_number left join teacher t on t.IDNumber=c.teacher_id_number";
			$result=$this->db->query($sql)->result_array();
		
			foreach($result as $v){
				if($v['username']==null){
					
					$data = array(
						'username' => $v['teacher_id_number'],
						'firstname' => $v['FirstName'],
						'lastname' => $v['LastName'],
						'admin_role_id' => 10, // By default i putt role is 2 for registraiton
						'password' =>  password_hash($v['teacher_id_number'], PASSWORD_BCRYPT),
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
	}

?>

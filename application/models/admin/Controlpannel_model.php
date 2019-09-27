<?php
	class Controlpannel_model extends CI_Model{

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
	}

?>

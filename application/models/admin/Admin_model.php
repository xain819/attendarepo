<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function get_user_detail(){
		$id = $this->session->userdata('admin_id');
		$query = $this->db->get_where('admin', array('admin_id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_user($data){
		$id = $this->session->userdata('admin_id');
		$this->db->where('admin_id', $id);
		$this->db->update('admin', $data);
		return true;
	}
	//--------------------------------------------------------------------
	public function change_pwd($data, $id){
		$this->db->where('admin_id', $id);
		$this->db->update('admin', $data);
		return true;
	}
	//-----------------------------------------------------
	function get_admin_roles()
	{
		$this->db->from('admin_roles');
		$this->db->where('admin_role_status',1);
		$query=$this->db->get();
		return $query->result_array();
	}

	//-----------------------------------------------------
	function get_admin_by_id($id)
	{
		$this->db->from('admin');
		$this->db->join('admin_roles','admin_roles.admin_role_id=admin.admin_role_id');
		$this->db->where('admin_id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	//-----------------------------------------------------
	function get_all()
	{
		$this->db->from('admin');
		$this->db->join('admin_roles','admin_roles.admin_role_id=admin.admin_role_id');
		
		if($this->session->userdata('filter_type')!='')
			$this->db->where('admin.admin_role_id',$this->session->userdata('filter_type'));

		if($this->session->userdata('filter_status')!='')
			$this->db->where('admin.is_active',$this->session->userdata('filter_status'));

		$filterData = $this->session->userdata('filter_keyword');
		$where = "(
		admin_roles.admin_role_title like '%$filterData%' OR
		admin.firstname like '%$filterData%' OR
		admin.lastname like '%$filterData%' OR
		admin.email like '%$filterData%' OR
		admin.mobile_no like '%$filterData%' OR
		admin.username like '%$filterData%'
		)";
		$this->db->where($where);

		$this->db->order_by('admin.admin_id','desc');
			//$this->db->limit($limit, $offset);
		$query = $this->db->get();
		$module = array();
		if ($query->num_rows() > 0) 
		{
			$module = $query->result_array();
		}
		return $module;
	}

		//-----------------------------------------------------
	public function add_admin($data){
		$this->db->insert('admin', $data);
		return true;
	}

		//---------------------------------------------------
		// Edit Admin Record
	public function edit_admin($data, $id){
		$this->db->where('admin_id', $id);
		$this->db->update('admin', $data);
		return true;
	}

		//-----------------------------------------------------
	function change_status()
	{		
		$this->db->set('is_active',$this->input->post('status'));
		$this->db->where('admin_id',$this->input->post('id'));
		$this->db->update('admin');
	} 
	function change_terminal_status()
	{		
		$this->db->set('IsEnabled',$this->input->post('status'));
		$this->db->where('HallPassID',$this->input->post('id'));
		$this->db->update('hallpass');
	} 

	public function get_all_hallpass(){

		//$this->db->where('is_admin', 0);
		//$this->db->order_by('created_at', 'desc');
		
		$query = $this->db->get('hallpass');
		return $result = $query->result_array();
	}
	public function get_import_csv(){
		$sql='SELECT * FROM `import_csv`';
		$query=$this->db->query($sql);
		return $query->result();
	}

	public function add_terminal($data){
		$this->db->insert('hallpass', $data);
		return true;
	}


		//-----------------------------------------------------
	function delete($id)
	{		
		$this->db->where('admin_id',$id);
		$this->db->delete('admin');
	} 
	//Teacher Start
	public function get_all_teacher(){
		$sql='SELECT * FROM `teacher` as t INNER JOIN department as d ON t.DepartmentID=d.DepartmentID ';
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	public function get_teacher_byteacherid($teacherid){
		$sql='SELECT * FROM teacher where TeacherID=?';
		$query=$this->db->query($sql,array($teacherid));
		return $query->result();
	}
	public function get_department(){
		$sql='SELECT * FROM `department`';
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function manage_teacher($type,$data){
	
		if($type=='delete-teacher'){
			$this->db->where('TeacherID',$data);
			$this->db->delete('teacher');
			return ($this->db->affected_rows() != 1) ? false : true;
		}else{
			$values=array(
				'IDNumber'=>$data[1],
				'FirstName'=>$data[2],
				'LastName'=>$data[3],
				'Gender'=>$data[4],
				'BirthDate'=>$data[5],
				'ContactNumber'=>$data[6],
				'DepartmentID'=>$data[7],
				'Password'=>$data[8]
			);
			if($type=='edit-teacher'){
				$this->db->where('teacherid', $data[9]);
				$this->db->update('teacher', $values);
				return ($this->db->affected_rows() != 1) ? false : true;
			}else{
				$this->db->insert('teacher',$values);
				return ($this->db->affected_rows() != 1) ? false : true;
			}
			
		}
		
	}
	//Teacher End
	//Student Start
	public function get_all_student(){
		$sql='SELECT * FROM `student` as s 
				INNER JOIN race as r ON s.RaceID=r.RaceID 
				INNER JOIN Section as sec ON s.SectionID=sec.SectionID
				INNER JOIN gradelevel as gl ON s.GradeLevelID =gl.GradeLevelID
				INNER JOIN Distinction as d on s.DistinctionID=d.DistinctionID ';
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	public function get_student_bystudentid($studentid){
		$sql='SELECT * FROM student where StudentID=?';
		$query=$this->db->query($sql,array($studentid));
		return $query->result();
	}
	public function get_race(){
		$sql='SELECT * FROM `race`';
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_section(){
		$sql='SELECT * FROM `section`';
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_grade_level(){
		$sql='SELECT * FROM `gradelevel`';
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_distinction(){
		$sql='SELECT * FROM `distinction`';
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function manage_student($type,$data){
		
		if($type=='delete-student'){
			$this->db->where('StudentID',$data);
			$this->db->delete('student');
			return ($this->db->affected_rows() != 1) ? false : true;
		}else{
			$values=array(
				'IDNumber'=>$data[1],
				'FirstName'=>$data[2],
				'LastName'=>$data[3],
				'Gender'=>$data[4],
				'BirthDate'=>$data[5],
				'ContactNumber'=>$data[6],
				'RaceID'=>$data[7],
				'SectionID'=>$data[8],
				'GradeLevelID'=>$data[9],
				'DistinctionID'=>$data[10],
				'Password'=>$data[11],
				'IsEnabled'=>1
			);
			if($type=='edit-student'){
				$this->db->where('studentid', $data[13]);
				$this->db->update('student', $values);
				return ($this->db->affected_rows() != 1) ? false : true;
			}else{
				$this->db->insert('student',$values);
				return ($this->db->affected_rows() != 1) ? false : true;
			}
			
		}
		
	}


	public function import_csv($data){
		//print_r($data);
		foreach ($data as $value) {
			//echo($value);
				$this->db->insert('import_csv',$value);
				
		}//ako muna sir. may tetest lang ako
		//haha nakita ko na sir ahha yung ito palaa (return ($this->db->affected_rows() != 1) ? false : true;) kaya nag stop yung loop
	//	
	}
<<<<<<< HEAD


	public function get_import_courses(){
		$sql='SELECT * FROM `courses`';
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	public function import_courses($data){
		//print_r($data);
		foreach ($data as $value) {
			//echo($value);
				$this->db->insert('courses',$value);
=======
	public function import_csv_student($data){
	
		foreach ($data as $value) {
			//echo($value);
				$this->db->insert('student',$value);
>>>>>>> df5603d0576cdaa3411dabcb5e56f5244b55f893
				
		}//ako muna sir. may tetest lang ako
		//haha nakita ko na sir ahha yung ito palaa (return ($this->db->affected_rows() != 1) ? false : true;) kaya nag stop yung loop
	//	
	}
<<<<<<< HEAD

=======
>>>>>>> df5603d0576cdaa3411dabcb5e56f5244b55f893
	//Stuent End
}


?>
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


}

?>
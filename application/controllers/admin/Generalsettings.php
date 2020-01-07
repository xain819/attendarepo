<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Generalsettings extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/admin_model', 'admin');
			$this->load->model('admin/Hallpass_model', 'hallpass');

		    $this->rbac->check_module_access();
		}
		public function index(){

			//$this->rbac->check_operation_access();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/generalsettings/index';
			$this->load->view('layoutv2', $data);
			
		}
		public function settings(){

			//$this->rbac->check_operation_access();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/generalsettings/settings';
			$this->load->view('layoutv2', $data);
			
		}
		public function get_all_hallpass()
		{
		$type=$this->input->post('type');
		$data['PassType']=$this->hallpass->get_pass_type();
		$data['info'] = $this->hallpass->get_all($type);

		echo json_encode($data);
		
		}
		
		public function edit_hallpass()
		{
		$response=$this->input->post('data');
		 $id=array_key_first($response);
		 $time=$response[$id]['TimeAllocated'];
		 $this->admin->edit_hallpass($id,$time);
		 $type=$this->input->post('type');
		$data['PassType']=$this->hallpass->get_pass_type();
		$data['info'] = $this->hallpass->get_all($type);

		echo json_encode($data);
		 
		 

		}
		

		public function delete_hallpass()
		{
		$id=$this->input->post('data');
		$data=$this->input->post('type');
		$status=$this->admin->delete_hallpass($id);

		$teacher['addtoteacher']=$this->admin->get_all_hallpass();
		$student['addtostudents']=$this->admin->get_all_hallpass();
		$teacher_access='';
		
		$student_access='';
		foreach ($teacher['addtoteacher'] as $value) {
			$teacher_access.=$value['HallPass'].'|';
		}
		foreach ($student['addtostudents'] as $v) {
			$student_access.=$v['HallPass'].'|';
		}

		$this->admin->teacher_hallpass($teacher_access);
		$this->admin->student_hallpass($student_access);
		echo json_encode($status);

		}

		public function add_hallpass()
		{
		$data['HallPass']=$this->input->post('name');
		$data['TimeAllocated']=$this->input->post('time');
		$data['PassTypeID']=$this->input->post('type');
		$data['is_active']='1';

		$result=$this->admin->add_terminal($data);
		$teacher['addtoteacher']=$this->admin->get_all_hallpass();
		$student['addtostudents']=$this->admin->get_all_hallpass();
		$student_access='';

		foreach ($student['addtostudents'] as $v) {
			$student_access.=$v['HallPass'].'|';
		}
	
		$teacher_access='';
		foreach ($teacher['addtoteacher'] as $value) {
			$teacher_access.=$value['HallPass'].'|';

		}
		$this->admin->student_hallpass($student_access);
		$this->admin->teacher_hallpass($teacher_access);

		$this->admin->teacher_access($teacher);
		$this->admin->student_access($teacher);

		

		// $period_remove=$this->input->post('period');
		// 		$exploded=explode($period_remove.'|',$new_data);
		// 		print_r($exploded[0]);
		// 		echo gettype($exploded[0]);
		
	     echo json_encode ($result);

		}
	
		public function edit_2whp()
		{
		$data['limit']=$this->input->post('limit');
		$data['type']=$this->input->post('type');
		$this->admin->edit_2whp($data['limit'],$data['type']);
	


		}
		public function edit_pgt()
		{
		$data['master_period_time']=$this->input->post('gracetime');
		$result=$this->admin->add_gracetime($data);


		}
		public function edit_hplt()
		{
		$data['HPLockStart']=$this->input->post('start');
		$data['HPLockEnd']=$this->input->post('end');
		$this->admin->add_hplt($data['HPLockStart'],$data['HPLockEnd']);


		}
		public function pop()
		{
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/generalsettings/pop';
			$this->load->view('layoutv2', $data);

		}

		public function change_status(){

		$data['id']=$this->input->post('data');
		$this->admin->change_data_status($data['id']);
		$data['info']=$this->admin->get_master();

		echo json_encode($data['info']);
		
	
	}

	
	public function get_master_list(){
		$data['info']=$this->admin->get_master();
		$lock_time=$this->admin->get_lock_time();
	
		$data['info'][2]['hp_lock_start']=$lock_time['HPLockStart'];
		$data['info'][2]['hp_lock_end']=$lock_time['HPLockEnd'];
	
		echo json_encode($data);
		
	
	}

	
	
		public function scheduletype(){
			$scheduletypee='';
				$result=$this->Masterscheduler->get_all_scheduletype();
				$scheduletypee.='<div id="external-events">';
				
				foreach($result as $value){
					$scheduletypee.= '<div class="external-event '.$value['backgroundColor'].'">'.$value['ScheduleType'].'</div>';
				}
				$scheduletypee.=' </div>';
				
			echo json_encode($scheduletypee);
		}
	public function insert_schoolsettings(){
		$this->db->insert('school_settings',$this->input->post('data'));
		echo json_encode('success');
	}
	public function update_system_setting(){
	
		$data=($this->input->post('data'));
		$this->update_setting($data['SchoolName'],'SchoolName');
		$this->update_setting($data['Email'],'Email');
		$this->update_setting($data['PhoneNumber'],'PhoneNumber');
		$this->update_setting($data['Address'],'Address');
		
		echo json_encode('success');
		
		
	}
	public function update_setting($data,$setting){
		$sql="Update setting Set Value=? WHERE Setting=?";
		$query=$this->db->query($sql,array($data,$setting));
	
	}
	public function get_setting(){
		$data['SchoolName']=$this->get_systemsetting_by_setting_name('SchoolName')['Value'];
		$data['Email']=$this->get_systemsetting_by_setting_name('Email')['Value'];
		$data['PhoneNumber']=$this->get_systemsetting_by_setting_name('PhoneNumber')['Value'];
		$data['Address']=$this->get_systemsetting_by_setting_name('Address')['Value'];
		echo json_encode($data);
	}
	public function get_systemsetting_by_setting_name($name){
		$sql="SELECT * FROM setting WHERE Setting=? ";
		$query=$this->db->query($sql,array($name));
		return $query->row_array();
	}
	public function get_scheduletype(){
		$sql="SELECT * FROM scheduletype ";
		$query=$this->db->query($sql)->result();
		echo json_encode($query);
	}
		
	}

?>	
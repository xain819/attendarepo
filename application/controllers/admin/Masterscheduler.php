<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Masterscheduler extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/Masterscheduler_model', 'Masterscheduler');
			$this->load->model('admin/Admin_model', 'admin');
		    $this->rbac->check_module_access();
		}

		//  get all the data for schedule dates  can delte this
		public function get_all_data()
		{
			
			$data['info']=$this->Masterscheduler->get_data_array();
			$out = array_values($data['info']);
			$out=json_encode($out);
			$this->load->view('admin/masterscheduler/index',$data);
	
		}	
		public function slider_period()
		{
		
			//$data=$this->Masterscheduler->slider_periods($this->input->post('data'));
			$data=$this->Masterscheduler->get_all_periods();
			echo json_encode($data);
	
		}	
		public function insert_teacherlimit(){
			$data['value']=$this->input->post('data');
			$this->db->where('id',15);
			$this->db->update('master_control',$data);
			echo json_encode('success');
		}
		public function insert_period(){
			


			$data['PeriodStartTime']=$this->input->post('start');
			$data['PeriodEndTime']=$this->input->post('stop');
			$data['schedule_type']=$this->input->post('data');
			$data['Period']=$this->input->post('period');
			$data['GracePeriod']='00:06:00'	;
			$data['TransitionTime']='00:05:00';
			$data['HPLockStart']='00:10:00';
			$data['HPLockEnd']='00:10:00';
			$this->db->insert('period',$data);

			echo json_encode('success');
		}
		public function add_period()
		{
			$data['schedule_type']=$this->input->post('data');
			$p=(explode(' ', $this->input->post('period')));
			
            $results=$this->Masterscheduler->add_period($data);
			echo json_encode($data);
	
		}	
		public function del_period()
		{
			$data['schedule_type']=$this->input->post('data');
			$p=(explode('_', $this->input->post('period')));


			$results=$this->Masterscheduler->del_period($data);
			echo json_encode($data);
	
		}	
		public function edit_slider_period()
		{
			
			$data['id']=$this->input->post('id');
			$data['type']=$this->input->post('type');
			$data['data']=$this->input->post('data');
			
			//bykugan
			if($data['type']=='bykugan') // both start and stop time for period
			{

				$data_array['type']=$data['type'];
				$period_start=explode(',',$data['data']);
				$start=$this->input->post('start');
				$stop=$this->input->post('stop');
			
				$data_array['schedule_type']=(explode('_',$data['id']))[0];
				$data_array['Period']=(explode('_',$data['id']))[1];
				$data_array['PeriodStartTime']=$start;
				$data_array['PeriodEndTime']=$stop;
				
				$this->Masterscheduler->edit_slider_period($data_array);
				echo json_encode('success');
			}
			elseif($data['type']=='move') // both start and stop time for period
			{

				$data_array['type']=$data['type'];
				$period_start=explode(',',$data['data']);
				$start=(explode(' ',$period_start[0]))[1];
				$stop=(explode(' ',$period_start[1]))[1];
			
				$data_array['schedule_type']=(explode('_',$data['id']))[0];
				$data_array['Period']=(explode('_',$data['id']))[1];
				$data_array['PeriodStartTime']=$start;
				$data_array['PeriodEndTime']=$stop;

			
				$this->Masterscheduler->edit_slider_period($data_array);

			}
			elseif ($data['type']=='left')
			{$data_array['type']=$data['type'];
				$period_start=explode(',',$data['data']);
				$start=(explode(' ',$period_start[0]))[1];
				$data_array['schedule_type']=(explode('_',$data['id']))[0];
				$data_array['Period']=(explode('_',$data['id']))[1];
				$data_array['PeriodStartTime']=$start;
				$this->Masterscheduler->edit_slider_period($data_array);
			

			}
			elseif ($data['type']=='right')
			{$data_array['type']=$data['type'];
				$period_stop=explode(',',$data['data']);
				$stop=(explode(' ',$period_stop[0]))[1];
				$data_array['schedule_type']=(explode('_',$data['id']))[0];
				$data_array['Period']=(explode('_',$data['id']))[1];
				$data_array['PeriodEndTime']=$stop;
				$this->Masterscheduler->edit_slider_period($data_array);
		
			}



			
	
		}	

			//roles and permision style for period allocation 
		public function access(){				   					   
		
			$data['scheduletypes']= $this->Masterscheduler->get_scheduletype();
			$data['period_access']= $this->Masterscheduler->get_period_access();
			$data['period_list']= $this->Masterscheduler->get_all_periods();
			$data['view'] = 'admin/masterscheduler/schedule_access';
			$this->load->view('layoutv2', $data);
		}
		function set_access()
		{
			if($this->input->post('status')==1)
			{
				$ScheduleType=$this->input->post('module');
				$data= $this->Masterscheduler->get_period_access_by_type($ScheduleType);
		
				$new_data=$data['PeriodAccess'].'|'.$this->input->post('period');
			
		
				$this->db->set('PeriodAccess',$new_data);
				$this->db->where('ScheduleType',$ScheduleType);
				$this->db->update('scheduletype');
				
			}
			else
			{
				$ScheduleType=$this->input->post('module');
				$data= $this->Masterscheduler->get_period_access_by_type($ScheduleType);
				$new_data=$data['PeriodAccess'];
				$period_remove=$this->input->post('period');
				$exploded=explode($period_remove.'|',$new_data);
		
				$text='';
				foreach($exploded as $ex){
					$text=$text.$ex;
				}
				if ($exploded[0]==$text){
					$this->db->set('PeriodAccess','');
					$this->db->where('ScheduleType',$ScheduleType);
					$this->db->update('scheduletype');
				}
				else{
				$this->db->set('PeriodAccess',$text);
				$this->db->where('ScheduleType',$ScheduleType);
				$this->db->update('scheduletype');

				}
		
			}
		} 
        public function index1(){
			$data['info']=$this->Masterscheduler->get_data_array();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/masterscheduler/index1';
			$this->load->view('layoutv2', $data);
			$now= new Datetime('now');

		}

		public function index(){
			//$this->rbac->check_operation_access();
			$scheduletypee='';
			$result=$this->Masterscheduler->get_all_scheduletype();

			$scheduletypee='
			<div id="external-events">
			';
			foreach($result as $value){
				$scheduletypee.= '<div data-sti="'.$value['ScheduleTypeID'].'" style="background-color: '.$value['backgroundColor'].'"  class="scheduletypeclass external-event">'.$value['ScheduleType'].'</div>';
			}
			$scheduletypee.=' </div>';
			$data['scheduletype']=$scheduletypee;

			$data['info']=$this->Masterscheduler->get_data_array();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/masterscheduler/index';
			
			$this->load->view('layoutv2', $data);
		}

		public function period_access()
		{
			$data['view'] = 'admin/masterscheduler/period_access';
		
			$this->Masterscheduler->initialize_period();
		
			echo json_encode($data);

		}
		public function add_scheduledate()
		{
			

			$start=$this->input->post('start');
			$title=$this->input->post('title');


			$backgroundcolor=$this->input->post('backgroundColor');
			$data=array(
				'start'=>$start,
				'title'=>$title,
				'backgroundColor'=>$backgroundcolor
			);
		
			$status=$this->Masterscheduler->add_scheduledate($data);
				
		}
		public function delete_scheduledate(){
			$scheduledateid=$this->input->post('data');
			$status=$this->Masterscheduler->delete_scheduledate($scheduledateid);
			echo json_encode($status);
		}
		public function get_events(){
			
			$info=$this->Masterscheduler->get_data_array();
			echo json_encode($info);

		}
		public function scheduletype(){
			$scheduletypee='';
				$result=$this->Masterscheduler->get_all_scheduletype();
				$scheduletypee.='
					<div id="external-events">
					
				';
				foreach($result as $value){
					$scheduletypee.= '<div class="external-event '.$value['backgroundColor'].'">'.$value['ScheduleType'].'</div>';
				}
				$scheduletypee.=' </div>';

			
			echo json_encode($scheduletypee);
		}

		public function edit()
		{
		$data['info'] = $this->Masterscheduler->get_all();
		$this->load->view('admin/masterscheduler/list',$data);
		
		
		}

		public function get_all_periods(){

	
			$data=$this->Masterscheduler->get_all_periods();
			echo json_encode($data);
		}
		public function manage_period(){

			$data=$this->input->post('data');
			$period_id=$this->input->post('period-id');

	
			if($this->input->post('type')=='add-new-period'){
				$type='add-new-period';
				$status=$this->Masterscheduler->manage_period($type,$data);
			}
			if($this->input->post('type')=='delete-period'){
				$type='delete-period';
				$status=$this->Masterscheduler->manage_period($type,$data);
			}
			if($this->input->post('type')=='edit-period'){
			
			
				$type='edit-period';
				$status=$this->Masterscheduler->manage_period($type,$data);
			}
			echo json_encode($status);
		}

			
		public function get_period_by_id(){
			$PeriodID=$this->input->post('data');
			$period_info=$this->Masterscheduler->get_period_by_id($PeriodID);
			$response['period_info']=$period_info;
		    echo json_encode($response);
		}
		

		public function managescheduletype(){
			if($this->input->post('type')=='delete'){
				$scheduletypeid=$this->input->post('data');
				$status=$this->Masterscheduler->delete_schedule_type($scheduletypeid);
				echo json_encode($status);
			}
			if($this->input->post('type')=='add'){
				$scheduletype[0]=$this->input->post('data');
				$scheduletype[1]=$this->input->post('color');
				//print_r($scheduletype);
				$status=$this->Masterscheduler->add_schedule_type($scheduletype);
				echo json_encode($status);
			}
		}
		public function students_schedule()
		{
			$data['title'] = 'Courses';
			$data['view'] = 'admin/masterscheduler/student_schedule';
			$this->load->view('layoutv2', $data);
	
		}
		public function check_schedule()
		{
			$data['title'] = 'Courses';
			$data['view'] = 'admin/masterscheduler/students_schedule';
			$schedule=$this->input->post('data');
			$this->admin->import_student_schedule($schedule);
			$data['import']=$this->admin->get_import_student_schedule();
			echo json_encode($data['import']);
	
		}
		public function student_enrollment()
		{
			$data['title'] = 'Courses';
			$data['view'] = 'admin/masterscheduler/student_enrollment';
			$schedule=$this->input->post('data');
			$this->admin->import_student_schedule($schedule);
			$data['import']=$this->admin->get_import_student_schedule();
			echo json_encode($data['import']);
	
		}
		public function get_import_students(){
			$data['import']=$this->admin->get_import_student_schedule();
			echo json_encode($data['import']);
	
		}


		   

		
	
	
		
	}

?>	
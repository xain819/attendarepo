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

			//roles and permision style for period allocation 
		public function access(){				   					   
		
			$data['scheduletypes']= $this->Masterscheduler->get_scheduletype();
			$data['period_access']= $this->Masterscheduler->get_period_access();
			$data['period_list']= $this->Masterscheduler->get_all_periods();
			$data['view'] = 'admin/masterscheduler/schedule_access';
			$this->load->view('layout', $data);
		}
		function set_access()
		{
			if($this->input->post('status')==1)
			{
				$ScheduleType=$this->input->post('module');
				$data= $this->Masterscheduler->get_period_access_by_type($ScheduleType);
				echo $data['PeriodAccess'];
				$new_data=$data['PeriodAccess'].'|'.$this->input->post('period');
				echo $data['PeriodAccess'];
				print_r($new_data);
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
				print_r($exploded[0]);
				echo gettype($exploded[0]);
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

		public function index(){
			//$this->rbac->check_operation_access();
			$data['info']=$this->Masterscheduler->get_data_array();
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/masterscheduler/index';
			$this->load->view('layout', $data);
		}

		public function period_access()
		{
			$data['view'] = 'admin/masterscheduler/period_access';
			$this->load->view('layout', $data);
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
			echo(gettype($backgroundcolor));
			$status=$this->Masterscheduler->add_scheduledate($data);
			print_r($data);				
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
				foreach($result as $value){
					$scheduletypee.= '<div class="external-event '.$value['backgroundColor'].'">'.$value['ScheduleType'].'</div>';
				}
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
			print_r($data);
	
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
		

		   

		
	
	
		
	}

?>	
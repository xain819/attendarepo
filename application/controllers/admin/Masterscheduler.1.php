<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Masterscheduler extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/Masterscheduler_model', 'Masterscheduler');
			$this->load->model('admin/Admin_model', 'admin');


		    $this->rbac->check_module_access();
		}

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

				//$new_period=$exploded[0].$exploded[1];
				foreach($exploded as $ex){
				
					$text=$text.$ex;
					
					
				}

				if ($exploded[0]==$text){
					echo 'hi';
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

		public function list_data()
		{
		$data['info'] = $this->Masterscheduler->get_all();
		$this->load->view('admin/masterscheduler/list',$data);
		
		}
		public function add_period()
		{

		//$data['info'] = $this->Masterscheduler->add_scheduledate($data);
		
		

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
	

	

		public function edit()
		{
		$data['info'] = $this->Masterscheduler->get_all();
		$this->load->view('admin/masterscheduler/list',$data);
		
		}
		public function get_all_data()
			{
				
				$data['info']=$this->Masterscheduler->get_data_array();
				$out = array_values($data['info']);
				$out=json_encode($out);
				$this->load->view('admin/masterscheduler/index',$data);
		
			}	

		   

	
	
		
	}

?>	
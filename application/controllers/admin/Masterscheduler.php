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

				//print_r ($this->input->post('module'));
				//print_r ($this->input->post('period'));
				//print_r ($this->input->post('new'));

				
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
		public function get_events(){
			$data['info']=$this->Masterscheduler->get_data_array();
			echo json_encode($data['info']);
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
			

			//$data['info'] = $this->Masterscheduler->add_scheduledate($data);
			

			$start=$this->input->post('start');
		//	echo date('Y-m-d',$start);
			$title=$this->input->post('title');
			$data=array(
				'start'=>$start,
				'title'=>$title
			);
			$status=$this->Masterscheduler->add_scheduledate($data);
			/** 
			 * var test_2= JSON.parse(test); d2 ung error e2 ung pag kuha ko ng data from database
			 * 
			 * ay baka may nasave na ibang format na date sir
			 * try mo muna eclear yung table sir testing natin
			 * drop ko data?
			 * oo sir delete muna lahat laman nung scheduledate tapos mag insert ulit ng bago
			 *
			 * 


			 *  yan ngay sir okay na?
			 *  kung gumana yan sir baka ayaw nya na may popup haha
			 * ayaw pa din
			 * haha
			 *  yan an yung dati sir eh haha
			 * clearna try mo na mag insert ulit sir kung pwede na
			 * gumana na
			 * ibalik ko lang saglit sir yung ginawa ko kanin kung gagana ulit haha
			 * ge yan sir parfreh ulit ehhe ctrl+f5
			 * tapos try mag isnert kung gaganadapat may pop up na sya
			 * meron gumagna ung pop up kaso 3 agad ang nlagay naevents
			 * pero kapag yung walang popup sir isa lang insert?
			 * oo isa lang tska para magproceed cancel ung press hehe
			 * khit wala na tong modal sa pag add .. ang lagyan natin is ung delete ng modal
			 * kasi pag ggwa ng schedule madaming popup na lalabas mabwisit ung mgggwa ng sched
			 * haha sabagay meju hustle sya sig esir.
			 * 
			 * 
			 * naremove ko na sir ,, oo sa dleete nalang sir kung sakali hehe
			 * oo delete nalang.. ok na muna to.. hehe
			 * 
			 * anotk na ako.. haha
			 * commit ko push ko server
			 * sige sir para mapull ko na din ehhehehe try mo lagyan ng port yung xampp mo sir pra maaccess ko din hehe pag nag share server hehe. yung port na ilalaga eh 9993
			 * pero ung delete and update dag dag natin next time
			 * 
			 *sige.. bukas try ko.  and need lang natin edit ngaun sa master is ung pag update din ng colors based dun sa legend matic na blue laht
			 *  paranag nakuha ko na din style ng callendar kunti haha. oo hehe. maganda nga kung mamaster.. hehe
			 * dpaat expert sa javascript sir haha. kkaiba din kasi mga  pag access ng mga data 
			 * 
			 * oo.. pero ok dn object lang.. tska maaus.hehe. complicated lang 
			 * napush ko na sa github
			 * 
			 * sige nasend ko na sau close ko na to sir
			 * 
			 * 
			 * sige sir pupull muna ako . pasend pala ng full database na gamit mo jan sir. yung laman nung nasend mo kanina sir is yung scheduled date lang
			 */
			
		}
		public function delete_scheduledate(){
			$scheduledateid=$this->input->post('data');
			$status=$this->Masterscheduler->delete_scheduledate($scheduledateid);
			echo json_encode($status);
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
<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Masterscheduler extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('rbac');
			$this->load->model('admin/Masterscheduler_model', 'Masterscheduler');
			$this->load->model('admin/Admin_model', 'admin');


		    $this->rbac->check_module_access();
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
		public function add_schedule4date()
		{

		//$data['info'] = $this->Masterscheduler->add_scheduledate($data);
		
		$data=$this->input->post('data');
		$out=json_encode($data);
		print($data);
		echo $out;
		print_r($out);
		print("hi");
		//$this->masterscheduler->add_scheduledate($data);
		$this->load->view('admin/masterscheduler/index',$data);

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
			 * 
			 */
			
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
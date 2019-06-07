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
		public function get_all_hallpass()
		{
		$data['PassType']=$this->hallpass->get_pass_type();
		$data['info'] = $this->hallpass->get_all();

		echo json_encode($data);
		
		}
		<div class="col-xl-6 col-sm-6">

		<div class="card">
				<div class="card-body">
					<div class="stat-widget-two">
						<div class="media">
							<div class="media-body">
						
								<h5 class="mt-0 mb- text-info"><ion-icon name="apps"></ion-icon>
								Universal E.O.D Clock-Ou<span class="pull-right"> <input id="chk_3" type="checkbox" checked='checked' class="js-switch js-switch-1 js-switch-md" data-size="small" /></span></h5>
								<p>descrition goes here</p>
							</div>
						
						
						</div>
					</div>
				</div>
		</div>
		</div>

	
	
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
	
		
	}

?>	
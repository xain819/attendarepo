<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class MasterScheduler extends MY_Controller {
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['title'] = 'Master Scheduler';
			$data['view'] = 'admin/masterscheduler/index';
			$this->load->view('layout', $data);
		}
		
	}

?>	
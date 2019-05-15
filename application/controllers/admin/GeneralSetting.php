<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class GeneralSetting extends MY_Controller {
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['title'] = 'General Settings';
			$data['view'] = 'admin/generalgettings/index';
			$this->load->view('layout', $data);
		}
		
	}

?>	
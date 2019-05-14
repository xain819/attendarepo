<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Terminal extends MY_Controller {
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$data['title'] = 'General Settings';
			$data['view'] = 'terminal/terminal';
			$this->load->view('terminal', $data);
		}
		
	}

?>	
<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends MY_Controller {
		
		public function profile(){
			$data['view'] = 'teacher/pages/profile';
			$this->load->view('layout_teacher', $data);
		}
		

	}

	?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller {
	public function index() {
		$this->load->helper('form');
		$this->load->view('main_view');
	}

	public function mailSend() {
		$this->load->helper('form');
		$this->load->model('main_model');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class request extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		
		// to protect the controller to be accessed only by registered users
	    if(!$this->session->userdata('logged_in')){
			
			redirect('login', 'refresh');
			 		
		}

	}
		
	public function index() {
		
		$data['content'] = 'add_event_request';
		$this->load->view('base_view', $data);
		
	}
	
	public function add_event_request() {
				
		$data['content'] = 'add_event_request';
		$this->load->view('base_view', $data);
	}
	
	public function add_repair_request() {
		
		$data['content'] = 'add_repair_request';
		$this->load->view('base_view', $data);
	}

}
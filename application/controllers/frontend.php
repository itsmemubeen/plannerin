<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
			// if(!$this->session->userdata('id'))
			// 	redirect('admin/index');
		$this->load->model('AdminModal','am');
		$this->load->model('mainModal','mm');
  	}
	
	public function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function signup()
	{
		if($this->form_validation->run('add_register_rules')){
			$registerUser = $this->input->post();
			if($this->mm->registerUser($registerUser)){
				$this->session->set_flashdata('msg','User Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
				$this->load->view('admin/login');	    
			}
			else{
				$this->session->set_flashdata('msg','User Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			// $this->load->view('signup');
		}

		else{
			// echo form_errors();
			$this->load->view('signup');
		}
		
	}
}

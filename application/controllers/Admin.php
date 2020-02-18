<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends My_controller{

  	public function __construct()
  	{
	parent::__construct();
	
   $this->load->model('AdminModal','am');
   $this->load->model('mainModal','mm');
  	}

	public function index(){
		$this->load->model('AdminModal','am');  
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Password','required');

		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$id = $this->am->isvalidated($email,$pass);
			if($id){
				$this->session->set_userdata('id',$id);
				$this->load->view('admin/dashboard');
			}
			else{
			$this->session->set_flashdata('Login_failed','Invalid Username/Password');
		 	return redirect('admin/index');	    
			}	
		}
		else{
			$this->load->view('admin/login');
		}
		
	}
	public function logout(){
		$this->session->unset_userdata('id');
		return redirect('admin/index');	
	}
	public function dashboard(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$this->load->view('admin/dashboard');
	}
	public function events(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$events = $this->mm->showAllEvents();
		$this->load->view('admin/events',['events'=>$events]);
	}
	public function users(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$users = $this->am->showAllUsers();
		$this->load->view('admin/users',['users'=>$users]);
	}
	public function bookings(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$this->load->view('admin/bookings');
	}
	public function addUser(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		if($this->form_validation->run('add_user_rules')){
			$insertUser = $this->input->post();
			if($this->am->addUsers($insertUser)){
				$this->session->set_flashdata('msg','User Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','User Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			return redirect('admin/users');	
		}

		else{
			echo form_errors();
			$this->load->view('admin/adduser');
		}
	}
	public function addEvent(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		if($this->form_validation->run('add_event_rules')){
			$insertEvent = $this->input->post();
			print_r($insertEvent);
			exit();
			if($this->am->addEvent($insertEvent)){
				$this->session->set_flashdata('msg','Event Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','Event Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			return redirect('admin/addevent');	
		}
		else{
			$this->load->view('admin/addevent');
		}
	}
	public function caterings(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$this->load->model('mainModal','mm');
		$caterings = $this->mm->showAllCaterings();
		$this->load->view('admin/caterings',['caterings'=>$caterings]);
	}
	public function decoration(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$this->load->model('mainModal','mm');
		$decorators = $this->mm->showAllDecorations();
		$this->load->view('admin/decoration',['decorators'=>$decorators]);
	}
	public function packages(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$this->load->model('mainModal','mm');
		$packages = $this->mm->showAllPackages();

		$this->load->view('admin/packages',['packages'=>$packages]);
	}
	public function addCatering(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		if($this->form_validation->run('add_catering_rules')){
			$insertCatering = $this->input->post();

			$this->load->model('AdminModal','am');
			if($this->am->addCatering($insertCatering)){
				$this->session->set_flashdata('msg','Catering Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','Catering Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			return redirect('admin/addCatering');	
		}
		else{
			$this->load->view('admin/addCatering');
		}
	}
	public function addDecorators(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		if($this->form_validation->run('add_decorators_rules')){
			$insertDecorators = $this->input->post();

			$this->load->model('AdminModal','am');
			if($this->am->addCatering($insertDecorators)){
				$this->session->set_flashdata('msg','Catering Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','Catering Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			return redirect('admin/addDecorators');	
		}
		else{
			$this->load->view('admin/addDecorators');
		}
	}
	public function addPackages(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		if($this->form_validation->run('add_decorators_rules')){
			$insertDecorators = $this->input->post();

			$this->load->model('AdminModal','am');
			if($this->am->addCatering($insertDecorators)){
				$this->session->set_flashdata('msg','Catering Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','Catering Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			return redirect('admin/addpackage');	
		}
		else{
			$this->load->model('mainModal','mm');
				$decorators = $this->mm->showAllDecorations();
				$caterings = $this->mm->showAllCaterings();

				$this->load->view('admin/addpackage',['decorators'=>$decorators,'caterings'=>$caterings]);
		}
	}

	public function editEvent($event_id){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		if($this->form_validation->run('add_event_rules')){
			$insertDecorators = $this->input->post();

			$this->load->model('AdminModal','am');
			if($this->am->addCatering($insertDecorators)){
				$this->session->set_flashdata('msg','Catering Added Successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','Catering Not Add Please Try Again!');
				$this->session->set_flashdata('msg_class','alert-danger');		 		    
			}
			return redirect('admin/addpackage');	
		}
		else{
			$this->load->model('mainModal','mm');
				$selectedevents = $this->mm->selectEvent($event_id);

				$this->load->view('admin/editevent',['selectedevents'=>$selectedevents]);
		}
	}
	public function map(){
		if(!$this->session->userdata('id'))
		redirect('admin/index');
		$this->load->view('admin/map');
	}



}
?>
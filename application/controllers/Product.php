<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Product extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('mainModal','m');
	}

	function index(){
		$this->load->view('Layout/header');
		$this->load->view('index');
		$this->load->view('Layout/footer');
	}

	function showAllProducts(){
		$result = $this->m->showAllProduct();
		echo json_encode($result);
	}
	function deleteProduct(){
		$result = $this->m->deleteProduct();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}

?>
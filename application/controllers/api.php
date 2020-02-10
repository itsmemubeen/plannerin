<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Api extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('mainModal','m');
	}

	function showAllUsers(){
		$query = $this->db->get('users')->result();
		echo "<pre>" ;
		echo json_encode($query);
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModal extends CI_Model{
	public function isvalidated($email,$password){
		$query = $this->db->where(['email'=>$email,'password'=>$password])->get('users');
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
	public function addUsers($array){
		return $this->db->insert('users',$array);
	}
	public function addEvent($data){

    return $this->db->insert('events',$data);
	}
	public function addCatering($data){

    return $this->db->insert('decorations',$data);
	}
	public function addPackage($data){

    return $this->db->insert('decorations',$data);
	}
}
?>
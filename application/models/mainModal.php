<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainModal extends CI_Model{
	public function showAllUsers(){
		$query = $this->db->get('users');
			return $query->result();
	}
	public function showAllEvents(){
		$query = $this->db->get('events');
			return $query->result();
	}
	public function showAllCaterings(){
		$query = $this->db->get('catering');
			return $query->result();
	}
	public function showAllDecorations(){
		$query = $this->db->get('decorations');
			return $query->result();
	}
	public function showAllPackages(){
		$query = $this->db->get('packages');
			return $query->result();
	}
	public function selectEvent($id){
		$query = $this->db->where(['id'=>$id])->get('events')->result();
		return $query;
	}
	
}
?>
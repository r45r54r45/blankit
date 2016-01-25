<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function order_list(){
		$user_id_SESSION = $this->session->userdata('user_id');
		
		return $this->db->query("
			select *
			from `ORDER` o
			where o.user_id = '$user_id_SESSION';
		");	
	}
}
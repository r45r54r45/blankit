<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function order_list(){
		$userSession = $this->session->userdata('user_id');
		
		return $this->db->query("
			select *
			from `ORDER` o
			where o.user_id = '$userSession';
		");
	}
	
	public function store_list(){
		return $this->db->query("
			select *
			from `STORE`
		");
	}
	
	public function user_info(){
		$userSession = $this->session->userdata('user_id');
		
		return $this->db->query("
			select * from `USER` where user_id='$userSession';
		");
	}
	
	public function update_userInfo($phone, $intro, $type, $artistType){
		$userSession = $this->session->userdata('user_id');
		
		$this->db->query("
			update `USER`
			set user_phone='$phone', artist_intro='$intro', user_type='$type', artist_type='$artistType'
			where user_id='$userSession'
		");
	}
	
	public function update_userInfo_pw($pw, $phone, $intro, $type, $artistType){
		$userSession = $this->session->userdata('user_id');
	
		$this->db->query("
			update `USER`
			set user_phone='$phone', artist_intro='$intro', user_pw='$pw', user_type='$type', artist_type='$artistType'
			where user_id='$userSession'
		");
	}
	
	public function update_profile($fileName){
		$fileName = "/files/profile/" . $fileName;
		$userSession = $this->session->userdata('user_id');
		$this->db->query("
			update `USER`
			set artist_profile='$fileName'
			where user_id='$userSession'
		");
	}
}
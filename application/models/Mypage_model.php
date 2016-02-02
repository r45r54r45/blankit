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
	
	public function user_info(){
		$userSession = $this->session->userdata('user_id');
		
		return $this->db->query("
			select * from `USER` where user_id='$userSession';
		");
	}
	
	public function update_userInfo($email, $phone, $intro, $type){
		$userSession = $this->session->userdata('user_id');
		
		$this->db->query("
			update `USER`
			set user_email='$email', user_phone='$phone', artist_intro='$intro', user_type='$type'
			where user_id='$userSession'
		");
	}
	
	public function update_userInfo_pw($pw, $email, $phone, $intro, $type){
		$userSession = $this->session->userdata('user_id');
	
		$this->db->query("
			update `USER`
			set user_email='$email', user_phone='$phone', artist_intro='$intro', user_pw='$pw', user_type='$type'
			where user_id='$userSession'
		");
	}
	
	public function update_profile($fileName){
		$userSession = $this->session->userdata('user_id');
		$this->db->query("
			update `USER`
			set artist_profile='$fileName'
			where user_id='$userSession'
		");
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	var $details; // 글로벌 declare
	
	public function check_login($user_id, $user_pw){
		$query =$this->db->query("
			select * from `USER` where user_id='$user_id' and user_pw='$user_pw';
		");
		
		$login = $query->result();
		
		if(count($login) == 1){
			$this->details = $login[0];
			$this->set_session();
			return true;
		}
		else{
			return false;
		}
	
	}
	
	public function set_session(){
		$this->load->library('session');
		$this->session->set_userdata( array(
			'status'=>"1",
			'user_id'=>$this->details->user_id,
			'user_type'=>$this->details->user_type,
			'user_name'=>$this->details->user_name,
			'user_nick'=>$this->details->user_nick
			)
		);
	}
}
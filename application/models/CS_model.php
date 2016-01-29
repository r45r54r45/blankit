<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function artist_list(){
	return $this->db->query("
				select user_name, artist_profile, artist_type
				from USER u
				where user_type='2';
				");
	}
}

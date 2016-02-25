<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StoreChecker_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function contents(){
		return $this->db->query("
		select store_name, store_image, store_day, store_goal, store_goal_now, artist_type, user_name, artist_profile, store_type, store_status, s.store_id, store_explain, artist_intro, store_pref as PREF
		from STORE s, USER u
		where s.user_id = u.user_id and store_status <> '0' order by store_id desc;
		");
	}
}

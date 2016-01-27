<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function upload_artwork($artwork, $explain, $storeType, $storeGoal){
		if ($this->session->userdata('user_id')){
			$user_id_SESSION = $this->session->userdata('user_id');
			
			$seed = $this->db->query("
				select max(store_id) from `STORE`;
			");
			$randomID = $seed + 1;
			
			$date = date('Y-m-d 0:0:0');
			
			$this->db->query("
				insert into `STORE` (user_id, store_name, store_random_id, store_day, store_type, store_goal, store_status)
				values ('$user_id_SESSION', '$artwork', '$randomID', '$date', '$storeType', '$storeGoal', '1')
			");
		}
	}
}

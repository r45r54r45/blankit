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
				select max(store_id) as seed from `STORE`;
			");
			foreach($seed->result() as $row){
				$randomID = $row->seed;
			}
			$curDate = date('Y-m-d H:i:s');
			$curDateNum = strtotime($curDate);
			$seed_date = strtoupper(dechex($curDateNum + $randomID));
						
			$date =  date('Y-m-d 0:0:0', strtotime("+7 days"));
			
			$this->db->query("
				insert into `STORE` (user_id, store_name, store_random_id, store_day, store_type, store_goal, store_status, store_explain)
				values ('$user_id_SESSION', '$artwork', '$seed_date', '$date', '$storeType', '$storeGoal', '1', '$explain')
			");
		}
	}
	
	public function image_num($userSESSION, $artwork){
		return $this->db->query("
			select max(store_id)
			from `STORE`
			where store_name = '$artwork' and user_id = '$userSESSION'
		");
	}
	
	public function upload_image($fileName, $store_id){
		$finalRoot = "/files/funding/" . $fileName;
		
		$this->db->query ("
			update `STORE`
			set store_image = '$fileRoot'
			where store_id = '$store_id'
		");
	}
}

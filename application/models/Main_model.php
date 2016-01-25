<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function mdpick(){
	return $this->db->query("
				select store_image, store_day, store_goal, store_goal_now, artist_type, user_name, artist_profile, s.store_id
				from MDPICK m, STORE s, USER u
				where m.store_id = s.store_id and s.user_id = u.user_id;
				");
	}
	
	/*** 스토어 마감여부 체커 ***/
	public function dateChecker(){
		$fetchDC = $this->db->query("
			select store_goal, store_goal_now, store_id, store_day
			from `STORE`
			where store_status = 1;
			");
				
		foreach ($fetchDC->result() as $row){
			//시간 계산
			$curDate = date('Y-m-d H:i:s');
			$dueDate = $row->store_day;
			$curDateNum = strtotime($curDate);
			$dueDateNum = strtotime($dueDate);
			$remainSecs = $dueDateNum - $curDateNum;
			$remainDays = $remainSecs / 86400;
			
			//마감일 때
			if ($remainDays<=0){
				if($row->store_goal_now/$row->store_goal>=1){
					$storeStatus = 2; // 성공완료
				}
				else{
					$storeStatus = 3; // 실패완료
				}
				$this->db->query("
					update `STORE`
					set store_status = '$storeStatus'
					where store_id='$row->store_id'
					");
			}
		}
	}
}
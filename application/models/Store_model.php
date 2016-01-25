<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function contents(){
		return $this->db->query("
		select store_image, store_day, store_goal, store_goal_now, artist_type, user_name, artist_profile, store_type, store_status, s.store_id
		from MDPICK m, STORE s, USER u
		where m.store_id = s.store_id and s.user_id = u.user_id;
		");
	}
	
	public function details(){
		return $this->db->query("
		select store_image, store_day, store_goal, store_goal_now, user_name, store_type, store_status, s.store_id, store_name, store_price
		from STORE s, USER u
		where s.user_id = u.user_id;
		");
	}
	
	public function toCart($type, $color, $size, $amount, $storeId, $storeType){
		if($storeType == 1){
			if($type == 1){
				$type = "맨투맨";
				$init = 30000;
			}
			else if($type == 2){
				$type = "후드";
				$init = 37000;
			}
			else if($type == 3){
				$type = "맨투맨(고급형)";
				$init = 38000;
			}
			else if($type == 4){
				$type = "후드(고급형)";
				$init = 46000;
			}
			//색상
			if ($color == 2){
				$color = "자주";
			}
			else if ($color == 3){
				$color = "아이보리";
			}
			else if ($color == 4){
				$color = "블랙";
			}
			else if ($color == 5){
				$color = "그레이";
			}
			else if ($color == 6){
				$color = "네이비";
			}
			//사이즈
			if($size == 1){
				$size = "여성";
			}
			else if($size ==2){
				$size = "남성";
			}
		}
		else if($storeType == 2){
			$init = 21000;
			if($type == 1){
				$type = "토트&크로스";
			}
			else if($type == 2){
				$type = "크로스";
			}
			else if($type == 3){
				$type = "토트(아이보리)";
			}
			else if($type == 4){
				$type = "토트(카키)";
			}
			else if($type == 5){
				$type = "토트(네이비)";
			}
			else if($type == 6){
				$type = "토트(블랙)";
			}
		}
		else if($storeType == 3){
			if($type == 1){
				$init = 19000;
				$type = "중형";
			}
			else if($type ==2){
				$init = 20000;
				$type = "대형";
			}	
		}
		$price = $amount * $init; // 개당 가격 * 수량
		$user_id_SESSION = $this->session->userdata('user_id');
		
		$date = date('Y-m-d H:i:s'); // 카드 담은 시간
		
		$this->db->query("
		INSERT INTO CART (user_id, store_id, cart_type, cart_color, cart_size, cart_num, cart_price, cart_price_total, cart_time)
		VALUES ('$user_id_SESSION','$storeId','$type','$color','$size','$amount','$init','$price', '$date');
		");
	}
}
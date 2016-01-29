<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cs_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function upload_cs($title, $contents){
		$userSESSION = $this->session->userdata('user_id');
		$date = date('Y-M-D h:i:s');
		
		$this->db->query("
			insert into `QA` (qa_title, qa_body, user_id, qa_date)
			values ('$title', '$contents', '$userSESSION', '$date')
		");
	}
}

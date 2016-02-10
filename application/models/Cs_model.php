<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cs_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function upload_cs($title, $contents, $email){
		$userSESSION = $this->session->userdata('user_id');
		$date = date('Y-m-d H:i:s');
		
		$this->db->query("
			insert into `QA` (qa_title, qa_body, user_id, qa_date, qa_email)
			values ('$title', '$contents', '$userSESSION', '$date', '$email')
		");
	}
	
	public function id_seed(){
		$userSESSION = $this->session->userdata('user_id');
		
		$seed = $this->db->query("
			select max(qa_id) as seed1 from `QA`
			where user_id='$userSESSION'
		");
		
		foreach($seed->result() as $row){
			$qa_id = $row->seed1;
		}
		
		return $qa_id;
	}
	
	public function update_qa_root($qa_id2, $fileName){
		$fileRoot = "/files/cs/" . $fileName;
		$this->db->query("
			update `QA` set qa_file='$fileRoot' where qa_id='$qa_id2'
		");
	}
}

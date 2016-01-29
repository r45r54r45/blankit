<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cs_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function upload_cs($title, $contents){
		$userSESSION = $this->session->userdata('user_id');
		$date = date('Y-m-d H:i:s');
		
		$this->db->query("
			insert into `QA` (qa_title, qa_body, user_id, qa_date)
			values ('$title', '$contents', '$userSESSION', '$date')
		");
	}
	
	public function id_seed($fileName){
		$seed = $this->db->query("
			select max(qa_id) as seed from `QA`
			where user_id='$userSESSION'
		");
		
		foreach($seed->result() as $row){
			$qa_id = $row->seed;
		}
		
		update_qa_root($qa_id, $fileName);
		
		return $qa_id;
	}
	
	public function update_qa_root($qa_id, $fileName){
		$fileRoot = "/files/cs/" . $fileName;
		$this->db->query("
			update `QA` set qa_file='$fileRoot' where qa_id='$qa_id'
		");
	}
}

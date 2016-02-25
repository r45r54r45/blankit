<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StoreChecker_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function allStore(){
		return $this->db->query("
		select *
		from STORE;
		");
	}
}

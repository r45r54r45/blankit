<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etc extends CI_Controller {

	public function private_info()
	{
		$this->load->view('header');
		$this->load->view('private_info');
		$this->load->view('footer');
	}
	public function usage_info()
	{
		$this->load->view('header');
		$this->load->view('usage_info');
		$this->load->view('footer');
	}
}

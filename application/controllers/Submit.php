<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('submit');
		$this->load->view('footer');
	}

	public function complete()
	{
		$this->load->view('header');
		$this->load->view('submit_complete');
		$this->load->view('footer');
	}
}

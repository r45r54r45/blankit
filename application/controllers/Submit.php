<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('submit');
		$this->load->view('footer');
	}
	
	public function func_checkSubmit(){
		$artwork = $this->input->post('artwork');
		$explain = $this->input->post('explain');
		$storeType = $this->input->post('storeType');
		$storeGoal = $this->input->post('storeGoal');
		
		$this->load->model('submit_model');
		$this->submit_model->upload_artwork($artwork, $explain, $storeType, $storeGoal);
	}

	public function complete()
	{

		
		$this->load->view('header');
		$this->load->view('submit_complete');
		$this->load->view('footer');
	}
}

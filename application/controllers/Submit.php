<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{
		$data['session_id'] = "";
		if ($this->session->userdata('user_id')){
			$data['session_id'] = $this->session->userdata('user_id');
		}
		
		$this->load->view('header');
		$this->load->view('submit', $data);
		$this->load->view('footer');
		
		$this->session->set_flashdata('redirect', 'submit');
	}
	
	public function func_checkSubmit(){
		
		if ($this->session->flashdata('redirect') == "submit" && $this->session->userdata('user_id')){
			$artwork = $this->input->post('artwork');
			$explain = $this->input->post('explain');
			$storeType = $this->input->post('storeType');
			$storeGoal = $this->input->post('storeGoal');
			
			$this->load->model('submit_model');
			$this->submit_model->upload_artwork($artwork, $explain, $storeType, $storeGoal);
			
			//완료 페이지로 redirect
			$completeUrl = "http://blankit.kr/submit/complete";
			$this->load->helper('url');
			redirect($completeUrl);
		}
		
		//submit 페이지로 redirect
		$submitUrl = "http://blankit.kr/submit";
		$this->load->helper('url');
		redirect($submitUrl);
		
	}

	public function complete()
	{
		$this->load->view('header');
		$this->load->view('submit_complete');
		$this->load->view('footer');
	}
}

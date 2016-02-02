<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{
		$data['session_id'] = "";
		
		if ($this->session->userdata('user_id')){
			$data['session_id'] = $this->session->userdata('user_id');
			$data['session_userType'] = $this->session->userdata('user_type');
		}

		$this->load->view('header');
		$this->load->view('submit', $data);
		$this->load->view('footer');

		$this->session->set_flashdata('redirect', 'submit');
	}

	public function func_checkSubmit(){

		if ($this->session->flashdata('redirect') == "submit" && $this->session->userdata('user_id')){
			$userSESSION = $this->session->userdata('user_id');
			
			
			$artwork = $this->input->post('artwork');
			
			$explain = $this->input->post('explain');
			$explain = str_replace(array("\r", "\n"), '<br/>', $explain);
			
			$storeType = $this->input->post('storeType');
			$storeGoal = $this->input->post('storeGoal');
			
			$this->load->model('submit_model');
			$this->submit_model->upload_artwork($artwork, $explain, $storeType, $storeGoal);
			$store_id_seed = $this->submit_model->image_num($userSESSION, $artwork);
			
			foreach ($store_id_seed->result() as $row){
				$store_id = $row->seed;
			}
			
			$ext = end(explode(".",$_FILES['file']['name']));
			$fileName = $store_id . "_" . $userSESSION . "." . $ext;
			move_uploaded_file($_FILES['file']['tmp_name'],SITE_ROOT."/files/funding/". $fileName);
			
			$this->submit_model->upload_image($fileName, $store_id);

			//완료 페이지로 redirect
			$completeUrl = "http://blankit.kr/submit/complete?id=" . $store_id;
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
		$this->load->model('store_model');
		$data['contents'] = $this->store_model->contents();
		
		$this->load->view('header', $data);
		$this->load->view('submit_complete');
		$this->load->view('footer');
	}
}

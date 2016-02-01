<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('user_id')){
			$this->load->model('mypage_model');
			$data['order_list'] = $this->mypage_model->order_list();
			
			$this->load->view('header');
			$this->load->view('mypage_order', $data);
			$this->load->view('footer');
		}
		else {
			$loginUrl = "http://blankit.kr/login";
			$this->load->helper('url');
			redirect($loginUrl);
		}
	}
	public function info()
	{
		if($this->session->userdata('user_id')){
			$this->load->model('mypage_model');
			$data['userInfo'] = $this->mypage_model->user_info();
			$data['userSession'] = $this->session->userdata('user_id');
			
			$this->load->view('header');
			$this->load->view('mypage_info', $data);
			$this->load->view('footer');
		}
		else {
			$loginUrl = "http://blankit.kr/login";
			$this->load->helper('url');
			redirect($loginUrl);
		}
	}
	
	public function func_updateInfo(){
		 $email = $this->input->post('email');
			 $phone1 = $this->input->post('phone1');
			 $phone2 = $this->input->post('phone2');
			 $phone3 = $this->input->post('phone3');
		 $phone = $phone1 . $phone2 . $phone3;
	}
}

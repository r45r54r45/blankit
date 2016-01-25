<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function func_login_check(){
		$user_id = $this->input->post('user_id');
		$user_pw = $this->input->post('user_pw');

		$this->load->model('login_model');

		if ($this->login_model->check_login($user_id, $user_pw)){
			//$data['result'] = "login success!";
			//$data['info'] = $this->login_model->send_info(); 테스트 용도임
			$redirectUrl = "http://blankit.kr/";
			$this->load->helper('url');
			redirect($redirectUrl); // <- 로그인 성공 시 redirect 메인페이지
		}
		else {
			//$data['result'] = "login failure!";
			$redirectUrl = "http://blankit.kr/login?fail";
			$this->load->helper('url');
			redirect($redirectUrl); // <- 로그인 실패 시 redirect 하면서 알람 띄움
		}

		$this->load->view('test_result');
	}

	public function func_logout(){
		$this->session->sess_destroy();

		$redirectUrl = "http://blankit.kr/";
		$this->load->helper('url');
		redirect($redirectUrl);
	}

	public function facebook_callback(){
			$this->load->view('login-callback');
	}
}

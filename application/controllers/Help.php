<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('help_notice');
		$this->load->view('footer');
	}
	public function faq()
	{
		$this->load->view('header');
		$this->load->view('help_faq');
		$this->load->view('footer');
	}
	public function cs()
	{
		$this->load->view('header');
		$this->load->view('help_cs');
		$this->load->view('footer');
	}
	public function func_cs_submit(){
		//로그인 상태 및 post 데이터가 있어야함
		if($this->session->userdata('user_id') && $this->input->post('title') && $this->input->post('contents')){
			$title = $this->input->post('title');
			$contents = $this->input->post('contents');
			
			$this->load->model('cs_model');
			$this->cs_model->upload_cs($title, $contents);
			
			$csUrl = "http://blankit.kr/help/cs?status=success";
			$this->load->helper('url');
			redirect($csUrl);
		}
		
		//비정상 접근
		$csUrl = "http://blankit.kr/help/cs?status=fail";
		$this->load->helper('url');
		redirect($csUrl);
	}
}

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
		$title = $this->input->post['title'];
		$contents = $this->input->post['contents'];
	}
}

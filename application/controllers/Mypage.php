<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

	public function index()
	{
		$this->load->model('mypage_model');
		$data['order_list'] = $this->mypage_model->order_list();
		
		$this->load->view('header');
		$this->load->view('mypage_order', $data);
		$this->load->view('footer');
	}
	public function info()
	{
		$this->load->view('header');
		$this->load->view('mypage_info');
		$this->load->view('footer');
	}
}

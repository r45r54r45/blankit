<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function t1()
	{
		$this->load->view('header');
		$this->load->view('js_test');
		$this->load->view('footer');
	}
	public function t2()
	{
		$this->load->view('header');
		$this->load->view('js_test2');
		$this->load->view('footer');
	}
	public function t3()
	{
		$this->load->view('header');
		$this->load->view('js_test3');
		$this->load->view('footer');
	}
	public function t4()
	{
		$this->load->view('header');
		$this->load->view('js_test4');
		$this->load->view('footer');
	}
	public function share()
	{
		$this->load->view('facebook_share');
	}
}

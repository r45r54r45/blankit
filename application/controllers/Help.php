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
		// post 데이터가 있어야함
		if($this->input->post('title') && $this->input->post('contents') && $this->input->post('email')){
			$title = $this->input->post('title');
			$contents = $this->input->post('contents');
			$email = $this->input->post('email');
			
			$this->load->model('cs_model');
			$this->cs_model->upload_cs($title, $contents, $email);

			$qa_id2 = $this->cs_model->id_seed();
			$userSESSION = $this->session->userdata('user_id');

			$ext = end(explode(".",$_FILES['file']['name']));
			$fileName = $qa_id2 . "_" . $userSESSION . "." . $ext;
			move_uploaded_file($_FILES['file']['tmp_name'],SITE_ROOT."/files/cs/". $fileName);

			$this->cs_model->update_qa_root($qa_id2, $fileName);
			
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

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
		$userSESSION = $this->session->userdata('user_id');
		
		$email = $this->input->post('email');
		
		$phone1 = $this->input->post('phone1');
		$phone2 = $this->input->post('phone2');
		$phone3 = $this->input->post('phone3');
		$phone = $phone1 . $phone2 . $phone3;
		
	 	$tempPW = $this->input->post('pw');
	 	if ($tempPW !== ""){
	 		$pw = $tempPW;
	 	}
	 	else{
	 		$pw = "";
	 	}
	 	
	 	$intro = $this->input->post('introduction');
	 	
	 	$type = $this->input->post('type');
	 	$this->session->set_userdata('user_type', $type);
	 	
	 	$this->load->model('mypage_model');
	 	
	 	//비번 안 바뀔 떄
	 	if ($pw == ""){
	 		$this->mypage_model->update_userInfo($email, $phone, $intro, $type);
	 	}
	 	else {
	 		$this->mypage_model->update_userInfo_pw($pw, $email, $phone, $intro, $type);
	 	}
	 	
	 	if($_FILES['file']['name']){
		 	$ext = end(explode(".",$_FILES['file']['name']));
		 	$fileName = $userSESSION . "_profile." . $ext;
		 	move_uploaded_file($_FILES['file']['tmp_name'],SITE_ROOT."/files/profile/". $fileName);
		 	
		 	$this->mypage_model->update_profile($fileName);
	 	}
	 	
	 	$mypageUrl = "http://blankit.kr/mypage/info?status=success";
	 	$this->load->helper('url');
	 	redirect($mypageUrl);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

	public function index()
	{
		// $this->load->model('join_model');
		// $data['id_list'] = $this->join_model->id_list(); // id 중복확인

		$this->load->view('header');
		$this->load->view('join');
		$this->load->view('footer');
	}
	public function complete()
	{
		$this->load->view('header');
		$this->load->view('join_complete');
		$this->load->view('footer');
	}
	public function func_join_ok()
	{
		if ($this->input->post('id') !== ""){
			$id = $this->input->post('id');
			$pw = $this->input->post('pw');
			$name = $this->input->post('name');
			$phone1 = $this->input->post('phone1');
			$phone2 = $this->input->post('phone2');
			$phone3 = $this->input->post('phone3');
			$email = $this->input->post('email');
			$phone = $phone1 . $phone2 . $phone3;
			$type = $this->input->post('type'); // 1일반 2아티스트
			$job = $this->input->post('job');
			$introduction = $this->input->post('introduction');

			$introduction = str_replace(array("\r\n"), '<br/>', $introduction);

			/*** 이메일 전송 ***/
			$this->load->library('email');

			$this->email->from('do-not-reply@blankit.kr', 'New User');
			$this->email->to('arsischeon@gmail.com');
			$this->email->cc('ryusooyon@gmail.com, yunjiljjh@gmail.com, r54r45r54@gmail.com');

			$emailSubject = ' - 유저 신규 가입 - ';
			$emailMessage = "신규 유저가 가입했어!\n\n----------\n\n 아이디: " . $id . "\n\n이름: " . $name . "\n\n유저 종류: " . $type;

			$this->email->subject($emailSubject);
			$this->email->message($emailMessage);

			$this->email->send();
			/*** 이메일 여기까지 ***/

			$this->load->model('join_model');
			if ($type == 1){
				$this->join_model->func_join_ok1($id, $pw, $name,$email, $phone, $type);
			}
			else {
				$this->join_model->func_join_ok2($id, $pw, $name,$email, $phone, $type, $job, $introduction);
			}
		}

		$mainUrl = "http://blankit.kr/join/complete";
		$this->load->helper('url');
		redirect($mainUrl);
	}
	public function id_check()
	{
		$this->load->model('join_model');
		$result=$this->join_model->id_list();
		if ($result->num_rows()==0) {
			echo "true";
		} else {
			echo "";
		}
	}
	public function phone_check()
	{
		require_once(APPPATH.'libraries/coolsms.php');
		$secret=mt_rand()%9000+1000;
		$SESSION['phone_check']=$secret;
		$phone=$this->input->get("phone");
		$api_key = 'NCS53C2A831865B7';
		$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

		$rest = new coolsms($api_key, $api_secret);

		$options->type = "SMS";
		$options->to = $phone;
		$options->from = "01071097327";
		$options->text = "인증 번호는 ".$secret." 입니다. 올바르게 입력해주세요.";
		$rest->send($options);
		echo "<div id='kkk' >".$secret."</div>";
	}
}

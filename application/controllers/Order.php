<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{	/*** cart->order 순이 아니면 cart로 튕김! ***/
		if ($this->session->flashdata('redirect') == "func_cart_ok"){
			$this->load->model('order_model');
			
			$data['cart']=$this->order_model->cart();
			$data['address']=$this->order_model->address();
			$data['generateOrderRandomId']=$this->order_model->generateOrderRandomId();
			
			$this->load->view('header');
			$this->load->view('order',$data);
			$this->load->view('footer');
		}
		else {
			$cartUrl = "http://blankit.kr/order/cart?order";
			$this->load->helper('url');
			redirect($cartUrl);
		}
	}
	public function cart() // 실제 카트 페이지
	{
		/*** 로그인 세션 없으면 login으로 튕김 ***/
		if ($this->session->userdata('user_id')){
			$this->load->model('order_model');
			$data['realCart'] = $this->order_model->realCart();
			
			$this->load->view('header');
			$this->load->view('cart', $data);
			$this->load->view('footer');
			
			$this->session->set_flashdata('redirect', 'cart');
		}
		else {
			$loginUrl = "http://blankit.kr/login";
			$this->load->helper('url');
			redirect($loginUrl);
		}
	}
	public function func_cart_checker() // 카트-> 판별 담당 
	{
		/*** cart에서 받은 flashdata 없으면 cart으로 튕김 ***/
		if ($this->session->flashdata('redirect') == "cart" && $this->input->post('delete') !== ""){ // delete POST 있으면 func_cart_delete로
			$deleteCart = $this->input->post('delete');
			$this->session->set_flashdata('redirect', 'func_cart_checker');
			
			$this->func_cart_delete($deleteCart); // func_cart_delete로 넘기기
		}
		else if ($this->session->flashdata('redirect') == "cart" && $this->input->post('order') !== ""){
			$orderCart = $this->input->post('order');
			$this->session->set_flashdata('redirect', 'func_cart_checker');
				
			$this->func_cart_ok($orderCart); // func_cart_ok로 넘기기
		}
		else{
			$cartUrl = "http://blankit.kr/order/cart?checker";
			$this->load->helper('url');
			redirect($cartUrl); 
		}
	}
	public function func_cart_delete($deleteCart) // 카트-> 삭제 담당
	{  
		/*** func_cart_checker에서 받은 flashdata 없으면 cart으로 튕김 ***/
		if ($this->session->flashdata('redirect') == "func_cart_checker"){
			$this->load->model('order_model');
			$this->order_model->deleteCart($deleteCart);
		}
		
		$cartUrl = "http://blankit.kr/order/cart?delete";
		$this->load->helper('url');
		redirect($cartUrl);
		
	}
	public function func_cart_ok($orderCart) // 카트-> 선택/전체 결제 담당
	{
		/*** func_cart_checker에서 받은 flashdata 없으면 cart으로 튕김 ***/
		if ($this->session->flashdata('redirect') == "func_cart_checker"){
			$this->load->model('order_model');
			$this->order_model->orderCart($orderCart);
			
			// 카트->오더 아니면 못 넘어가도록 flashdata 설정
			$this->session->set_flashdata('redirect', 'func_cart_ok');
			
			/*** cart_status 3으로 변경되고, order 페이지로 넘어감 ***/
			$orderUrl = "http://blankit.kr/order";
			$this->load->helper('url');
			redirect($orderUrl);
		}
		else {
			$cartUrl = "http://blankit.kr/order/cart?not_ok";
			$this->load->helper('url');
			redirect($cartUrl);
		}
	}
	public function complete()
	{
		/*** func_order_ok에서 바로 직전 페이지에서 ? 주소가 붙어 redirect 되지 않았다면 (flashdata) 무조건 redirect ***/
		if ($this->session->flashdata('redirect') == "func_order_ok"){
			$this->load->view('header');
			$this->load->view('order_complete');
			$this->load->view('footer');
		}
		else {
			$homeUrl = "http://blankit.kr";
			$this->load->helper('url');
			redirect($homeUrl);
		}

	}
	function func_order_ok() // Order 내용을 받아 DB에 저장함 (구매 프로세스 가장 끝)
	{
		/*** POST 값이 없으면 home으로 redirect ***/
		if ($orderRandomId = $this->input->post('orderRandomId')){
			$receiver = $this->input->post('receiver');
			$email = $this->input->post('email');
			$phone1 = $this->input->post('phone1');
			$phone2 = $this->input->post('phone2');
			$phone3 = $this->input->post('phone3');
			$home1 = $this->input->post('home1');
			$home2 = $this->input->post('home2');
			$home3 = $this->input->post('home3');
			$payer = $this->input->post('payer');
			$bank = $this->input->post('bank');
			$account = $this->input->post('account');
			$notice = $this->input->post('notice');
	
			$this->load->model('order_model');
			$this->order_model->order($receiver, $email, $phone1, $phone2, $phone3, $home1, $home2, $home3, $payer, $bank, $account, $notice, $orderRandomId);
			
			//flashdate 세팅
			$this->session->set_flashdata('redirect', 'func_order_ok');
	
			//완료 페이지로 redirect
			$completeUrl = "http://blankit.kr/order/complete" . "?codeNum=" . $orderRandomId . "&bank=" . $bank . "&account=" . $account;
			$this->load->helper('url');
			redirect($completeUrl);
		}
		else {
			$homeUrl = "http://blankit.kr";
			$this->load->helper('url');
			redirect($homeUrl);
		}
	}
}

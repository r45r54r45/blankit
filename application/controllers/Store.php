<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	public function index()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		$this->load->view('header');
		$this->load->view('store');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function cloth()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		$this->load->view('header');
		$this->load->view('store_cloth');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function ecobag()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		$this->load->view('header');
		$this->load->view('store_ecobag');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function pouch()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		$this->load->view('header');
		$this->load->view('store_pouch');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function done()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		$this->load->view('header');
		$this->load->view('store_done');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function product() // 제품 상세보기
	{
		$this->load->model('store_model');
		$data['details']=$this->store_model->details();
		$this->load->view('header');
		$this->load->view('product',$data);
		$this->load->view('product_detail');
		$this->load->view('footer');
	}
	public function product_detail() // 제품 상세보기
	{
		$this->load->view('header');
		$this->load->view('product_detail');
		$this->load->view('footer');
	}
	public function func_toCart() // 상품페이지->장바구니
	{
		if ($this->input->post('storeId')){ // POST값이 존재하면 진행
			$type = $this->input->post('type');
			$color = $this->input->post('color');
			$size= $this->input->post('size');
			$amount = $this->input->post('amount');
			$storeId = $this->input->post('storeId');
			$storeType = $this->input->post('storeType');

			$this->load->model('store_model');
			$this->store_model->toCart($type, $color, $size, $amount, $storeId, $storeType);
		}

		//본래 페이지로 다시 redirect
		/* $storeUrl = "http://blankit.kr/store/product/" . $storeId;
		$this->load->helper('url');
		redirect($storeUrl); */

		//cart로 redirect
		$cartUrl = "http://blankit.kr/order/cart";
		$this->load->helper('url');
		redirect($cartUrl);

	}

}

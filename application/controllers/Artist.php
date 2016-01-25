<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends CI_Controller {

	public function index()
	{
		$this->load->model('artist_model');
		$data['artist_list']=$this->artist_model->artist_list();
		$this->load->view('header');
		$this->load->view('artist',$data);
		$this->load->view('footer');
	}
}

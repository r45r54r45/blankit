<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	public function profile()
	{
		if (!empty($_FILES)) {
		  move_uploaded_file($_FILES['userfile']['tmp_name'],SITE_ROOT."/files/profile/". $_FILES['userfile']['name']);
		}

		// $config['upload_path'] = "/files/profile/";
		//
		// $this->load->library('upload', $config);
		//
		// if ( ! $this->upload->do_upload())
		// {
		// 	$error = array('error' => $this->upload->display_errors());
		// 	echo "Sibal";
		// }
		// else
		// {
		// 	$data = array('upload_data' => $this->upload->data());
		// 	echo "good";
		// }
	}
}

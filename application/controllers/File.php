<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	public function profile()
	{
		$uriPath = $this->uri->segment(3);
		$idName = end(explode("=", $uriPath));

		if (!empty($_FILES)) {
			$ext = end(explode(".", $_FILES['userfile']['name']));
			$fileName = $idName . "_profile." . $ext;
			$fileName = $_GET['file'] . "_profile." . $ext;
			move_uploaded_file($_FILES['userfile']['tmp_name'],SITE_ROOT."/files/profile/". $fileName);
		}
	}
}

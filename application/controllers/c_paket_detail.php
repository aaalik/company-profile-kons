<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_paket_detail extends CI_Controller {
	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('paket_detail.php');
		$this->load->view('footer.php');
	}
	
}

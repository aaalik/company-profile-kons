<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_paket extends CI_Controller {
	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('paket.php');
		$this->load->view('footer.php');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller {
	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('home_view');
		$this->load->view('footer.php');
	}
	
}

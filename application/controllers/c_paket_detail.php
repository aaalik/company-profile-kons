<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_paket_detail extends CI_Controller {

	function __Construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('paket_detail');
		$this->load->view('footer');
	}
	
}

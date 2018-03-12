<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_paket extends CI_Controller {

	function __Construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$query['row'] = $this->m_user->getPaket();

		$this->load->view('header');
		$this->load->view('paket', $query);
		$this->load->view('footer');
	}

	public function detail($urltitle)
	{
		$query['row'] = $this->m_user->detailPaket($urltitle);

		$this->load->view('header');
		$this->load->view('paket_detail', $query);
		$this->load->view('footer');
	}
}

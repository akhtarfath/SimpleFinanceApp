<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('FeeIn');
		$this->load->model('FeeOut');
	}

	public function index()
	{
        $data["page_title"] = 'AsamBang | Dashboard';
		
		$data['feeIn'] 		= $this->FeeIn->getAll();
		$data['feeOut'] 	= $this->FeeOut->getAll();

		$this->load->view('libraries/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer');
		$this->load->view('libraries/footer');
	}
}

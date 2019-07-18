<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
        $data["page_title"] = 'AsamBang | Dashboard';

		$this->load->view('libraries/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
		$this->load->view('libraries/footer');
	}
}

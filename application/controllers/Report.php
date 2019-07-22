<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('Reports');
	}

	public function index()
	{
		$data['page_title'] = "Asambang | Report";

		$data['reports'] = $this->Reports->getAll();

		$this->load->view('libraries/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('report/index', $data);
		$this->load->view('template/footer');
		$this->load->view('libraries/footer');
	}
}

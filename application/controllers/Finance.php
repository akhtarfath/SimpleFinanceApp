<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('FeeIn');
		$this->load->model('FeeOut');

		$this->load->library('form_validation');
		$this->load->library('DayDate');
	}

	public function index()
	{
		$data['page_title'] = "Asambang | Finance";
		
		$data['feeIn'] 		= $this->FeeIn->getAll();
		$data['feeOut'] 	= $this->FeeOut->getAll();

		$data['day']		= $this->daydate->thisDay();
		$data['date']		= $this->daydate->thisDate(date('Y-m-d'));

		$this->load->view('libraries/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('finance/index', $data);
		$this->load->view('finance/feeIn-form', $data);
		$this->load->view('finance/feeOut-form');
		$this->load->view('template/footer');
		$this->load->view('libraries/footer');
	}

	public function add() 
	{
		$feeIn		= $this->FeeIn; 
		$validation = $this->form_validation;
		$validation -> set_rules($feeIn->rules());

		if($validation -> run()) 
		{
			$feeIn -> save();
			$this->session->set_flashdata('success', 'Berhasil Di Simpan');	
		}

		$this->load->view('finance/index');
	}

	public function edit($id = null) 
	{
		if(!isset($id)) redirect('finance/index');
		
		$feeIn		= $this->feeIn;
		$validation	= $this->form_validation;
		$validation->set_rules($feeIn->rules());

			if($validation->run())
			{	
				$feeIn->update();
				$this->session->set_flashdata('success', 'Berhasil Di Simpan');
				
			}
		
		$data['feeIn']	= $feeIn->getById($id);
		if(!$data['feeIn']) show_404();

		$this->load->view('finance/index', $data);
	}

	public function delete($id = null) 
	{
		if(!isset($id)) show_404();
		if($this->feeIn->delete($id))
		{
			redirect(site_url('finance/index'));
		}
	}
}

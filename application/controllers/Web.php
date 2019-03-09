<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model(array('m_auth','m_region','m_person'));
		$this->load->helper('rupiah_helper');
    }

	public function index()
	{
		$data['summary'] = $this->m_region->getSummary();
		$this->load->view('web',$data);
	}

	public function login()
	{
		$this->load->view('login');
	}

}

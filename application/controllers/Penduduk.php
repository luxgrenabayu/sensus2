<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_auth','m_region','m_person'));
        
		if ((!$this->session->is_logged) && ($this->session->userdata('username') != 'users')){
			redirect(base_url(''));
		}
    }
    
	public function index()
	{
        $data['judul'] = 'Penduduk';
        $this->load->view('admin/penduduk/penduduk',$data);
    }

    public function view()
    {
        $data['person'] = $this->m_person->getPerson();
        $this->load->view('admin/penduduk/view',$data);
    }
     
}

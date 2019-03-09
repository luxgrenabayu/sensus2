<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        
		if ((!$this->session->is_logged) && ($this->session->userdata('username') != 'users')){
			redirect(base_url(''));
		}
    }
    
	public function index()
	{
        $data['judul'] = 'Dashboard';
        $this->load->view('admin/dashboard',$data);
    }
    
}

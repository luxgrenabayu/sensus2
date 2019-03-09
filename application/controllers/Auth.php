<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function index()
	{
        $email = $this->input->post('email');
		$password = md5($this->input->post('password'));
        $checking = $this->m_auth->get_by_where($email,$password);

        if ($checking){
            $data = array(
				'email' => $checking->email,
				'username'  => 'Users',
                'is_logged' => TRUE
            );
            $this->session->set_userdata($data);
            redirect('admin');
        }else{
			$this->session->set_flashdata('msg_gagal',
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				<strong>Gagal,</strong> Email atau Password Tidak Valid.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>');
            redirect(base_url('signin'));
        }
    }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}

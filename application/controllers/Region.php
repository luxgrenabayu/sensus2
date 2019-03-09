<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_auth','m_region'));
        
		if ((!$this->session->is_logged) && ($this->session->userdata('username') != 'users')){
			redirect(base_url(''));
		}
    }
    
	public function index()
	{
        $data['judul'] = 'Region';
		$this->load->view('admin/region/region',$data);
    }
    
    public function view()
    {
        $data['region'] = $this->m_region->getRegion();
        $this->load->view('admin/region/view',$data);
    }

    public function create()
    {
        $this->form_validation->set_rules('name','Nama Region','required');
        
        if($this->form_validation->run()==FALSE) {
            $data['judul'] = 'Tambah Data';
            $this->load->view('admin/region/create',$data);
		}else{
            $data = array(
                'name' =>  $this->input->post('name'), 
            );
            $this->m_region->setRegion($data);
            $this->session->set_flashdata('msg_success',
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  				<strong>Sukses,</strong> data berhasil ditambahkan.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>');
			redirect('region',$data);
        }
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name','Nama Region','required');
        if($this->form_validation->run()==FALSE) {
            $data['judul'] = 'Update Data';
            $data['region'] = $this->m_region->getRegionId($id);
            $this->load->view('admin/region/update',$data);
		}else{
            $data = array(
                'name' =>  $this->input->post('name'), 
            );
            $this->m_region->updateRegion($id,$data);
            $this->session->set_flashdata('msg_success',
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  				<strong>Sukses,</strong> data berhasil diubah.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>');
			redirect('region',$data);
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
		$this->m_region->delete($id);
    }

}

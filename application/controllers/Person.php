<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

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
        $data['judul'] = 'Person';
		$this->load->view('admin/person/person',$data);
    }
    
    public function view()
    {
        $data['person'] = $this->m_person->getPerson();
        $this->load->view('admin/person/view',$data);
    }

    public function create()
    {
        $this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('region_id','Nama Region','required');
        $this->form_validation->set_rules('address','Alamat','required');
        $this->form_validation->set_rules('income','Income','required');
       
        if ($this->form_validation->run()==FALSE) {
            $data['judul'] = 'Tambah Data';
            $data['region'] = $this->m_region->getRegion();
            $this->load->view('admin/person/create',$data);
        }else{
            $data = array(
                'name' =>  $this->input->post('name'),
                'region_id' =>  $this->input->post('region_id'), 
                'address' =>  $this->input->post('address'), 
                'income' =>  $this->input->post('income'), 
            );
            $this->m_person->setPerson($data);
            $this->session->set_flashdata('msg_success',
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  				<strong>Sukses,</strong> data berhasil ditambahkan.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>');
			redirect('person',$data);
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
		$this->m_person->delete($id);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('region_id','Nama Region','required');
        $this->form_validation->set_rules('address','Alamat','required');
        $this->form_validation->set_rules('income','Income','required');
       
        if ($this->form_validation->run()==FALSE) {
            $data['judul'] = 'Update Data';
            $data['region'] = $this->m_region->getRegion();
            $data['person'] = $this->m_person->getPersonId($id);
            $this->load->view('admin/person/update',$data);
        }else{
            $data = array(
                'name' =>  $this->input->post('name'),
                'region_id' =>  $this->input->post('region_id'), 
                'address' =>  $this->input->post('address'), 
                'income' =>  $this->input->post('income'), 
            );
            $this->m_person->updatePerson($id,$data);
            $this->session->set_flashdata('msg_success',
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  				<strong>Sukses,</strong> data berhasil diubah.
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
			</div>');
			redirect('person',$data);
        }
    }
}

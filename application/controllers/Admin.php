<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
        is_logged_in();
    }

    public function index()
    {
        $data['kandidat'] = $this->db->get('kandidat')->result_array();

        $this->load->view('template/header');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $this->form_validation->set_rules('nama_ketos', 'ketos', 'required');
        $this->form_validation->set_rules('nama_waketos', 'waketos', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/tambah');
            $this->load->view('template/footer');
        } else {
            $this->admin->tambah();
            redirect('kandidat');
        }
    }

    public function edit($id){
        $this->form_validation->set_rules('nama_ketos', 'ketos', 'required');
        $this->form_validation->set_rules('nama_waketos', 'waketos', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        $data['kandidat'] = $this->admin->getId($id);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->admin->edit($id);
            redirect('kandidat');
        }
    }

    public function hapus($id){
        $this->admin->hapus($id);
        redirect('kandidat');
    }
}

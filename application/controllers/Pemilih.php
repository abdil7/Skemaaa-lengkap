<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilih_model', 'pemilih');
        is_logged_in();
    }

    public function index()
    {
        $data['pemilih'] = $this->db->get('pemilih')->result_array();

        $this->load->view('template/header');
        $this->load->view('pemilih/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){   
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('pemilih/tambah');
            $this->load->view('template/footer');
        } else {
            $this->pemilih->tambah();
            redirect('pemilih');
        }
    }

    public function edit($id){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        $data['pemilih'] = $this->pemilih->getId($id);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('pemilih/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->pemilih->edit($id);
            redirect('pemilih');
        }
    }

    public function hapus($id){
        $this->pemilih->hapus($id);
        redirect('pemilih');
    }
}

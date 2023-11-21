<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model', 'hasil');
        is_logged_in();
    }

    public function index()
    {
        $data['hasil'] = $this->hasil->getData();

        $this->load->view('template/header');
        $this->load->view('hasil/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['hasil'] = $this->hasil->getId($id);

        $this->load->view('template/header');
        $this->load->view('hasil/detail', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id){
        $this->hasil->hapus($id);
        redirect('hasil');
    }

    public function selamat()
    {
        // $this->load->view('template/header');
        // $this->load->view('hasil/selamat');
        // $this->load->view('template/footer');

        redirect('login/logout');
    }

}
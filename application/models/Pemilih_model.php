<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih_model extends CI_Model {

    public function getId($id){
        return $this->db->get_where('pemilih', ['id_pemilih' => $id])->row_array();
    }

    public function tambah(){
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'nisn' => $this->input->post('nisn'),
            'alamat' => $this->input->post('alamat'),
        ];
        
        $this->db->insert('pemilih', $data);
    }

    public function edit($id){
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'nisn' => $this->input->post('nisn'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->where('id_pemilih', $id);
        $this->db->update('pemilih', $data);
    }

    public function hapus($id){
        $this->db->where('id_pemilih', $id);
        $this->db->delete('pemilih');
    }

}
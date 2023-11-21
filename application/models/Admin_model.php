<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getId($id){
        return $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
    }

    public function tambah(){
        $data = [
            'nama_ketos' => $this->input->post('nama_ketos'),
            'nama_waketos' => $this->input->post('nama_waketos'),
            'image' => $this->input->post('image'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
        ];
        
        $this->db->insert('kandidat', $data);
    }

    public function edit($id){
        $data = [
            'nama_ketos' => $this->input->post('nama_ketos'),
            'nama_waketos' => $this->input->post('nama_waketos'),
            'image' => $this->input->post('image'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
        ];
        $this->db->where('id_kandidat', $id);
        $this->db->update('kandidat', $data);
    }

    public function hapus($id){
        $this->db->where('id_kandidat', $id);
        $this->db->delete('kandidat');
    }

}
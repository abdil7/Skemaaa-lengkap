<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat_model extends CI_Model {

    public function getId($id){
        return $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
    }

    public function pilih(){
        $data = [
            'id_kandidat' => $this->input->post('id_kandidat'),
            'id_pemilih' => $this->input->post('id_pemilih'),
        ];
        $this->db->insert('hasil', $data);
    }

}
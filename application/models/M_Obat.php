<?php

class M_Obat extends CI_Model{

    public function get_all_data_obat(){
        return $this->db->get('obat');
    }

    public function tambah_data_obat($data){
        $this->db->insert('obat', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Tambah Data Obat Berhasil</div>');
    }
}

?>
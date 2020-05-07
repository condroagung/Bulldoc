<?php

class M_Konsul extends CI_Model{

    public function get_all_konsul(){
        $this->db->select('*');
        $this->db->from('pemeriksaan');
        $this->db->join('dokter', 'pemeriksaan.id_dokter=dokter.id_dokter');
        return $this->db->get();
    }

    public function tambah_konsul($data){
        $this->db->insert('pemeriksaan', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Konsultasi berhasil masuk</div>');
        redirect('dashboard/index_user');
    }

    public function hapus_konsul($id_konsul){
        $this->db->delete('pemeriksaan', array('id_periksa' => $id_konsul));
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Konsul berhasil Dihapus</div>');
        redirect('konsul/data_konsul');
    }

    public function edit_konsul($id_konsul,$data){
        $this->db->update('pemeriksaan', $data, array('id_periksa' => $id_konsul));
    }

    public function get_konsul_data($id_konsul){
        $query = $this->db->get_where('pemeriksaan', array('id_periksa' => $id_konsul));
        return $query->row();
    }

}

?>
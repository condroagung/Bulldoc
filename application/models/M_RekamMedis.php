<?php

class M_Rekammedis extends CI_Model{

    public function get_all_rm(){
        $this->db->select('*');
        $this->db->from('rekam_medis');
        $this->db->join('hasil_pemeriksaan', 'rekam_medis.id_hasil=hasil_pemeriksaan.id_hasil');
        $this->db->join('pemeriksaan', 'hasil_pemeriksaan.id_periksa=pemeriksaan.id_periksa');
        $this->db->join('dokter', 'pemeriksaan.id_dokter=dokter.id_dokter');
        $this->db->join('user', 'pemeriksaan.username=user.username');
        return $this->db->get();
    }

    public function tambah_rm($data){
        $this->db->insert('rekam_medis', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Hasil Konsultasi berhasil dikirim</div>');
        redirect('konsul/data_konsul');
    }
}

?>
<?php

class M_Hasil extends CI_Model{

    public function get_all_hasil(){
        $this->db->select('*');
        $this->db->from('hasil_pemeriksaan');
        $this->db->join('pemeriksaan', 'hasil_pemeriksaan.id_periksa=pemeriksaan.id_periksa');
        $this->db->join('dokter', 'pemeriksaan.id_dokter=dokter.id_dokter');
        $this->db->join('user', 'pemeriksaan.username=user.username');
        return $this->db->get();
    }

    public function tambah_hasil($data){
        $this->db->insert('hasil_pemeriksaan', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Hasil Konsultasi berhasil dikirim</div>');
        redirect('konsul/data_konsul');
    }

    public function hapus_hasil($id_hasil){
        $this->db->delete('hasil_pemeriksaan', array('id_hasil' => $id_hasil));
    }

    public function edit_hasil($id_hasil,$data){
        $this->db->update('hasil_pemeriksaan', $data, array('id_hasil' => $id_hasil));
    }

    public function get_hasil_username($limit, $start, $keyword = null){
        $this->db->select('*');
        $this->db->from('hasil_pemeriksaan');
        $this->db->join('pemeriksaan', 'hasil_pemeriksaan.id_periksa=pemeriksaan.id_periksa');
        $this->db->join('dokter', 'pemeriksaan.id_dokter=dokter.id_dokter');
        $this->db->join('user', 'pemeriksaan.username=user.username');
        $this->db->where('user.username', $this->session->userdata('username'));

        if($keyword){
            $this->db->like('pemeriksaan.keluhan', $keyword);
            $this->db->or_like('diagnosa', $keyword);
            $this->db->or_like('tindakan', $keyword);
            $this->db->or_like('nama_dokter', $keyword);
        }

        $this->db->limit($limit, $start);
        return $this->db->get();
    }

}

?>
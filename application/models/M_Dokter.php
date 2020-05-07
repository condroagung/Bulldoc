<?php

class M_Dokter extends CI_Model{

    public function get_all_data_dokter(){
        return $this->db->get('dokter');
    }

    public function tambah_data_dokter($data){
        $this->db->insert('dokter', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Tambah Data dokter Berhasil</div>');
        redirect('dokter');
    }

    public function hapus_dokter($id_dokter){
        $this->db->delete('dokter', array('id_dokter' => $id_dokter));
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data dokter Berhasil Dihapus</div>');
        redirect('dokter');
    }

    public function edit_dokter($id_dokter,$data){
        $this->db->where('id_dokter', $id_dokter);
        $this->db->update('dokter', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data dokter Berhasil Diubah</div>');
        redirect('dokter');
        return;
    }

    public function get_dokter_id($id_dokter)
	{
        $query =$this->db->get_where('dokter', array('id_dokter'=>$id_dokter));
        return $query;
    }
    
    public function cari_dokter(){
        $keyword = $this->input->post('keyword1', true);
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->like('nama_dokter', $keyword);
        $this->db->or_like('spesialis', $keyword);
        $query = $this->db->get();
        return $query;
    }

    public function cari_spesialis(){
        $keyword = $this->input->post('keyword2', true);
        $this->db->distinct();
        $this->db->select('spesialis');
        $this->db->from('dokter');
        $this->db->like('spesialis', $keyword);
        $query = $this->db->get();
        return $query;
    }

    public function get_dokter_spesialis(){
        $this->db->distinct();
        $this->db->select('spesialis');
        $this->db->from('dokter');
        $query = $this->db->get();
        return $query;
    }

    public function get_data_dokter_spesialis($spesialis){
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->where('spesialis', $spesialis);
        $query = $this->db->get();
        return $query;
    }
}

?>
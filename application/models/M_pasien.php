<?php

class M_Pasien extends CI_Model{

    public function get_all_data_pasien(){
        return $this->db->get('pasien');
    }

    public function tambah_data_pasien($data){
        $this->db->insert('pasien', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Tambah Data pasien Berhasil</div>');
        redirect('pasien');
    }

    public function daftar_pasien($data){
        $this->db->insert('pasien', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Berhasil Mendaftarkan Pasien</div>');
        redirect('dashboard/index_user');
    }

    public function hapus_pasien($id_pasien){
        $this->db->delete('pasien', array('id_pasien' => $id_pasien));
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data pasien Berhasil Dihapus</div>');
        redirect('pasien');
    }

    public function edit_pasien($id_pasien,$data){
        $this->db->where('id_pasien', $id_pasien);
        $this->db->update('pasien', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data pasien Berhasil Diubah</div>');
        redirect('pasien');
        return;
    }

    public function get_pasien_id($id_pasien)
	{
        $query =$this->db->get_where('pasien', array('id_pasien'=>$id_pasien));
        return $query->row_array();
	}
}

?>
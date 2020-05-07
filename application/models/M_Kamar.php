<?php

class M_Kamar extends CI_Model{

    public function get_all_data_kamar(){
        return $this->db->get('kamar');
    }

    public function tambah_data_kamar($data){
        $this->db->insert('kamar', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Tambah Data Kamar Berhasil</div>');
        redirect('kamar');
    }

    public function hapus_kamar($id_kamar){
        $this->db->delete('kamar', array('id_kamar' => $id_kamar));
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Kamar Berhasil Dihapus</div>');
        redirect('kamar');
    }

    public function edit_kamar($id_kamar,$data){
        $this->db->where('id_kamar', $id_kamar);
        $this->db->update('kamar', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Kamar Berhasil Diubah</div>');
        redirect('kamar');
        return;
    }

    public function get_kamar_id($id_kamar)
	{
        $query =$this->db->get_where('kamar', array('id_kamar'=>$id_kamar));
        return $query->row_array();
	}
}

?>
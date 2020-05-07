<?php

class M_Obat extends CI_Model{

    public function get_all_data_obat(){
        return $this->db->get('obat');
    }

    public function tambah_data_obat($data){
        $this->db->insert('obat', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Tambah Data Obat Berhasil</div>');
        redirect('obat');
    }

    public function hapus_obat($id_obat){
        $this->db->delete('obat', array('id_obat' => $id_obat));
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Obat Berhasil Dihapus</div>');
        redirect('obat');
    }

    public function edit_obat($id_obat,$data){
        $this->db->where('id_obat', $id_obat);
        $this->db->update('obat', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Obat Berhasil Diubah</div>');
        redirect('obat');
        return;
    }

    public function get_obat_id($id_obat)
	{
        $query =$this->db->get_where('obat', array('id_obat'=>$id_obat));
        return $query->row_array();
    }
    
    public function cari_obat($id_obat){

        $result = $this->db->where('id_obat', $id_obat)
                           ->limit(1)
                           ->get('obat');

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function cari_nama_obat(){
        $keyword = $this->input->post('keyword', true);
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->like('nama_obat', $keyword);
        $query = $this->db->get();
        return $query;
    }

}

?>
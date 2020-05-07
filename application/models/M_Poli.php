<?php

class M_Poli extends CI_Model{

        public function get_all_data_poli(){
            return $this->db->get('poli');
        }

        public function tambah_poli($data){
            $this->db->insert('poli',$data);
            $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Tambah Data Poli Berhasil</div>');
            redirect('poli');
        }

        public function hapus_poli($id_poli){
            $this->db->delete('poli', array('id_poli' => $id_poli));
            $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Poli Berhasil Dihapus</div>');
            redirect('poli');
        }

        public function edit_poli($id_poli,$data){
            $this->db->update('poli',$data,array('id_poli'=>$id_poli));
            $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Data Poli Berhasil Diubah</div>');
            redirect('poli');
            return;
        }
}

?>
<?php

class M_Pasien extends CI_Model{

    public function get_all_data_pasien(){
        return $this->db->get('pasien');
    }
}

?>
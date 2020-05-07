<?php

class Caridokter extends CI_Controller{

    public function __construct()
	{
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_obat');
        $this->load->model('M_dokter');
    }

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
            $data['title'] = "Cari Dokter";
            $data['spesialis'] = $this->M_dokter->get_dokter_spesialis();
                if($this->input->post('keyword2')){
                $data['spesialis'] = $this->M_dokter->cari_spesialis();
            }
            $this->load->view('menu/header_user',$data);
            $this->load->view('menu/cari_dokter',$data);
            $this->load->view('menu/footer_user'); 
        } 
    }

    public function data_cari_dokter(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
            $spesialis = $this->input->post('spesialis');
            $data['title'] = "Data Dokter";
            $data['all'] = $this->M_dokter->get_data_dokter_spesialis($spesialis);
            $this->load->view('menu/header_user',$data);
            $this->load->view('menu/data_dokter',$data);
            $this->load->view('menu/footer_user'); 
        }
    }

}

?>
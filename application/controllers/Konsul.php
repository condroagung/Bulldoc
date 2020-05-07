<?php

class Konsul extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_konsul');
        $this->load->model('M_dokter');
        $this->load->model('M_hasil');
        $this->load->model('M_user');
        $this->load->model('M_rekammedis');
		$this->load->library('form_validation');
    }
    
    public function valid_konsul(){
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'trim|required');
    }

    public function valid_hasil_konsul(){
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'trim|required');
        $this->form_validation->set_rules('tindakan', 'Tindakan', 'trim|required');
    }

    public function hapus_konsul($id_periksa){
        $this->M_konsul->hapus_konsul($id_periksa);
    }

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title'] = "dashboard_user";
        $data['all']=$this->M_dokter->get_all_data_dokter();
        if($this->input->post('keyword1')){
            $data['all'] = $this->M_dokter->cari_dokter();
        }
        $this->load->view('menu/header_user',$data);
        $this->load->view('menu/konsultasi_dokter',$data);
        $this->load->view('menu/footer_user');  
        }
    }

    public function konsul_dokter_now($id_dokter){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Form Konsul Dokter';
        $data['all']=$this->M_dokter->get_dokter_id($id_dokter);
        $this->load->view('menu/header_user',$data);
        $this->load->view('menu/form_konsul_dokter',$data);
        $this->load->view('menu/footer_user');
        }
    }

    public function tambah_konsul(){
        
        $this->valid_konsul();
        $id_dokter = $this->input->post('id_dokter');
        $username = $this->session->userdata('username');

        if($this->form_validation->run() == false ){
            echo validation_errors(); 
            $this->index();
        }
        else{
            $data = [
                'id_dokter' => $id_dokter,
                'username' => $username,
                'keluhan' => $this->input->post('keluhan'),
                'tanggal_periksa' => date('ymd')
            ];
            $this->M_konsul->tambah_konsul($data);
        }
    }

    public function data_konsul(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title'] = "Data Konsul";
        $data['all']=$this->M_konsul->get_all_konsul();
        $this->load->view('menu/header_admin',$data);
        $this->load->view('menu/tampil_data_konsul',$data);
        $this->load->view('menu/footer_admin');  
        }
    }

    public function tambah_hasil_konsul(){
        $this->valid_hasil_konsul();
        $id_periksa = $this->input->post('id_periksa');

        if($this->form_validation->run() == false ){
            echo validation_errors(); 
            $this->data_konsul();
        }
        else{
            $data = [
                'id_periksa' => $id_periksa,
                'diagnosa' => $this->input->post('diagnosa'),
                'tindakan' => $this->input->post('tindakan'),
                'tanggal_kirim' => date('ymd')
            ];
            $data1=[
                'id_hasil' => $id_hasil,
                'tanggal_input'=> date('ymd')
            ];
            $this->M_hasil->tambah_hasil($data);
        }
    }
}

?>
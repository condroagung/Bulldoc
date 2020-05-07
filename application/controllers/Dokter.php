<?php

class Dokter extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_dokter');
        $this->load->model('M_poli');
		$this->load->library('form_validation');
	}

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Data Dokter';
        $data['all']=$this->M_dokter->get_all_data_dokter();
        $data['only']=$this->M_poli->get_all_data_poli();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_dokter', $data);
        $this->load->view('menu/footer_admin');
        }
    }

    public function valid_dokter(){
        $this->form_validation->set_rules('id_dokter', 'Id_dokter', 'trim|required');
        $this->form_validation->set_rules('id_poli', 'Id_poli', 'trim|required');
        $this->form_validation->set_rules('nama_dokter', 'Nama_dokter', 'trim|required');
        $this->form_validation->set_rules('spesialis', 'Spesialis', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'trim|required');
        $this->form_validation->set_rules('hari_shift', 'Hari_shift', 'trim|required');
        $this->form_validation->set_rules('jam_shift', 'Jam_shift', 'trim|required');
    }

    public function tambah_data_dokter(){

        $this->valid_dokter();

        if( $this->form_validation->run() == false ){
            echo validation_errors(); 
            $this->index();
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_dokter']['name']!=null){

                if ($this->upload->do_upload('gambar_dokter'))
                {
                    $data = [
                        'id_dokter' => $this->input->post('id_dokter'),
                        'id_poli' => $this->input->post('id_poli'),
                        'nama_dokter' => $this->input->post('nama_dokter'),
                        'spesialis' => $this->input->post('spesialis'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'hari_shift' => $this->input->post('hari_shift'),
                        'jam_shift' => $this->input->post('jam_shift'),
                        'gambar_dokter' => $this->upload->data('file_name')
                    ];
                    $this->M_dokter->tambah_data_dokter($data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                        'id_dokter' => $this->input->post('id_dokter'),
                        'id_poli' => $this->input->post('id_poli'),
                        'nama_dokter' => $this->input->post('nama_dokter'),
                        'spesialis' => $this->input->post('spesialis'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'hari_shift' => $this->input->post('hari_shift'),
                        'jam_shift' => $this->input->post('jam_shift'),
                        'gambar_dokter' => null
                ];
                $this->M_dokter->tambah_data_dokter($data);
            }
        }
    }

    public function hapus_dokter($id_dokter){
        $this->M_dokter->hapus_dokter($id_dokter);
    }

    public function edit_data_dokter(){

        $id_dokter=$this->input->post('id_dokter');
        $this->valid_dokter();


        if( $this->form_validation->run() == false ){
            echo validation_errors(); 
            $this->index();

        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_dokter']['name']!=null){

                if ($this->upload->do_upload('gambar_dokter'))
                {
                    $data = [
                        'nama_dokter' => $this->input->post('nama_dokter'),
                        'spesialis' => $this->input->post('spesialis'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'hari_shift' => $this->input->post('hari_shift'),
                        'jam_shift' => $this->input->post('jam_shift'),
                        'gambar_dokter' => $this->upload->data('file_name')
                    ];
                    $this->M_dokter->edit_dokter($id_dokter,$data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'nama_dokter' => $this->input->post('nama_dokter'),
                    'spesialis' => $this->input->post('spesialis'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'hari_shift' => $this->input->post('hari_shift'),
                    'jam_shift' => $this->input->post('jam_shift')
                ];
                $this->M_dokter->edit_dokter($id_dokter,$data);
            }
        }
        
    }
}
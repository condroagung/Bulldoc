<?php

class Poli extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_poli');
		$this->load->library('form_validation');
    }
    
    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Data Poli';
        $data['all']=$this->M_poli->get_all_data_poli();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_poli', $data);
        $this->load->view('menu/footer_admin');
        }
    }

    public function valid_poli(){
        $this->form_validation->set_rules('nama_poli', 'Nama_poli', 'trim|required');
        $this->form_validation->set_rules('gedung', 'Gedung', 'trim|required');
        $this->form_validation->set_rules('lantai', 'Lantai', 'trim|required');
    }

    public function tambah_data_poli(){
        
        $this->valid_poli();

        if( $this->form_validation->run() == false ){
            $data['title']='Data Poli';
            $data['all']=$this->M_poli->get_all_data_poli();
            $this->load->view('menu/header_admin', $data);
            $this->load->view('menu/tampil_data_poli', $data);
            $this->load->view('menu/footer_admin');
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_poli']['name']!=null){

                if ($this->upload->do_upload('gambar_poli'))
                {
                    $data = [
                        'id_poli' => $this->input->post('id_poli'),
                        'nama_poli' => $this->input->post('nama_poli'),
                        'gedung' => $this->input->post('gedung'),
                        'lantai' => $this->input->post('lantai'),
                        'gambar_poli' => $this->upload->data('file_name')
                    ];
                    $this->M_poli->tambah_poli($data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'id_poli' => $this->input->post('id_poli'),
                    'nama_poli' => $this->input->post('nama_poli'),
                    'gedung' => $this->input->post('gedung'),
                    'lantai' => $this->input->post('lantai'),
                    'gambar_poli' => $this->upload->data('file_name')
                ];
                $this->M_poli->tambah_poli($data);
            }
        }
    }

    public function hapus_data_poli($id_poli){
        $this->M_poli->hapus_poli($id_poli);
    }

    public function edit_data_poli(){

        $id_poli = $this->input->post('id_poli');
        $this->valid_poli();

        if( $this->form_validation->run() == false ){
            echo validation_errors(); 
            $this->index();
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_poli']['name']!=null){

                if ($this->upload->do_upload('gambar_poli'))
                {
                    $data = [
                        'nama_poli' => $this->input->post('nama_poli'),
                        'gedung' => $this->input->post('gedung'),
                        'lantai' => $this->input->post('lantai'),
                        'gambar_poli' => $this->upload->data('file_name')
                    ];
                    $this->M_poli->edit_poli($id_poli,$data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'nama_poli' => $this->input->post('nama_poli'),
                    'gedung' => $this->input->post('gedung'),
                    'lantai' => $this->input->post('lantai')
                ];
                $this->M_poli->edit_poli($id_poli,$data);
            }
        }
    }

}

?>
<?php

class Kamar extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_kamar');
		$this->load->library('form_validation');
	}

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Data Kamar';
        $data['all']=$this->M_kamar->get_all_data_kamar();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_kamar', $data);
        $this->load->view('menu/footer_admin');
        }
    }

    public function tambah_data_kamar(){

        $this->form_validation->set_rules('nama_kamar', 'Nama_kamar', 'trim|required|is_unique[kamar.nama_kamar]');
        $this->form_validation->set_rules('deskripsi_kamar', 'Deskripsi_kamar', 'trim|required');
        $this->form_validation->set_rules('jenis_kamar', 'Jenis_kamar', 'trim|required');
        $this->form_validation->set_rules('harga_kamar', 'Harga_kamar', 'trim|required');
        $this->form_validation->set_rules('status_kamar', 'Status_kamar', 'trim|required');

        if( $this->form_validation->run() == false ){
            $data['title']='Data kamar';
            $data['all']=$this->M_kamar->get_all_data_kamar();
            $this->load->view('menu/header_admin', $data);
            $this->load->view('menu/tampil_data_kamar', $data);
            $this->load->view('menu/footer_admin');
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_kamar']['name']!=null){

                if ($this->upload->do_upload('gambar_kamar'))
                {
                    $data = [
                        'id_kamar' => $this->input->post('id_kamar'),
                        'nama_kamar' => $this->input->post('nama_kamar'),
                        'deskripsi_kamar' => $this->input->post('deskripsi_kamar'),
                        'jenis_kamar' => $this->input->post('jenis_kamar'),
                        'harga_kamar' => $this->input->post('harga_kamar'),
                        'status_kamar' => $this->input->post('status_kamar'),
                        'gambar_kamar' => $this->upload->data('file_name')
                    ];
                    $this->M_kamar->tambah_data_kamar($data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'id_kamar' => $this->input->post('id_kamar'),
                    'nama_kamar' => $this->input->post('nama_kamar'),
                    'deskripsi_kamar' => $this->input->post('deskripsi_kamar'),
                    'jenis_kamar' => $this->input->post('jenis_kamar'),
                    'harga_kamar' => $this->input->post('harga_kamar'),
                    'status_kamar' => $this->input->post('status_kamar'),
                    'gambar_kamar' => $this->upload->data('file_name')
                ];
                $this->M_kamar->tambah_data_kamar($data);
            }
        }
    }

    public function hapus_kamar($id_kamar){
        $this->M_kamar->hapus_kamar($id_kamar);
    }

    public function edit_kamar(){

        $id_kamar=$this->input->post('id_kamar');
        $this->form_validation->set_rules('nama_kamar', 'Nama_kamar', 'trim|required');
        $this->form_validation->set_rules('deskripsi_kamar', 'Deskripsi_kamar', 'trim|required');
        $this->form_validation->set_rules('jenis_kamar', 'Jenis_kamar', 'trim');
        $this->form_validation->set_rules('harga_kamar', 'Harga_kamar', 'trim');
        $this->form_validation->set_rules('status_kamar', 'Status_kamar', 'trim');

        if( $this->form_validation->run() == false ){
            $data['title']='Data kamar';
            $data['all']=$this->M_kamar->get_all_data_kamar();
            $this->load->view('menu/header_admin', $data);
            $this->load->view('menu/tampil_data_kamar', $data);
            $this->load->view('menu/footer_admin');
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            
            $this->load->library('upload', $config);

            if(@$_FILES['gambar_kamar']['name']!=null){

                if ($this->upload->do_upload('gambar_kamar'))
                {
                    $data = [
                        'nama_kamar' => $this->input->post('nama_kamar'),
                        'deskripsi_kamar' => $this->input->post('deskripsi_kamar'),
                        'jenis_kamar' => $this->input->post('jenis_kamar'),
                        'harga_kamar' => $this->input->post('harga_kamar'),
                        'status_kamar' => $this->input->post('status_kamar'),
                        'gambar_kamar' => $this->upload->data('file_name')
                    ];
                    $this->M_kamar->edit_kamar($id_kamar,$data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'nama_kamar' => $this->input->post('nama_kamar'),
                    'deskripsi_kamar' => $this->input->post('deskripsi_kamar'),
                    'jenis_kamar' => $this->input->post('jenis_kamar'),
                    'harga_kamar' => $this->input->post('harga_kamar'),
                    'status_kamar' => $this->input->post('status_kamar')
                ];
                $this->M_kamar->edit_kamar($id_kamar,$data);
            }
        }
    }
}
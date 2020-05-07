<?php

class Obat extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_obat');
		$this->load->library('form_validation');
	}

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Data Obat';
        $data['all']=$this->M_obat->get_all_data_obat();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_obat', $data);
        $this->load->view('menu/footer_admin');
        }
    }

    public function valid_obat(){
        $this->form_validation->set_rules('nama_obat', 'Nama_obat', 'trim|required');
        $this->form_validation->set_rules('kategori_obat', 'Kategori_obat', 'trim|required');
        $this->form_validation->set_rules('bentuk_obat', 'Bentuk_obat', 'trim|required');
        $this->form_validation->set_rules('deskripsi_obat', 'Deskripsi_obat', 'trim|required');
        $this->form_validation->set_rules('dosis_obat', 'Dosis_obat', 'trim|required');
        $this->form_validation->set_rules('aturan_obat', 'Aturan_obat', 'trim|required');
        $this->form_validation->set_rules('stok_obat', 'Stok_obat', 'trim|required');
        $this->form_validation->set_rules('harga_obat', 'Harga_obat', 'trim|required');
    }

    public function tambah_data_obat(){

        $this->valid_obat();

        if( $this->form_validation->run() == false ){
            $this->index();
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_obat']['name']!=null){

                if ($this->upload->do_upload('gambar_obat'))
                {
                    $data = [
                        'id_obat' => $this->input->post('id_obat'),
                        'nama_obat' => $this->input->post('nama_obat'),
                        'kategori_obat' => $this->input->post('kategori_obat'),
                        'bentuk_obat' => $this->input->post('bentuk_obat'),
                        'deskripsi_obat' => $this->input->post('deskripsi_obat'),
                        'dosis_obat' => $this->input->post('dosis_obat'),
                        'aturan_obat' => $this->input->post('aturan_obat'),
                        'stok_obat' => $this->input->post('stok_obat'),
                        'harga_obat' => $this->input->post('harga_obat'),
                        'gambar_obat' => $this->upload->data('file_name')
                    ];
                    $this->M_obat->tambah_data_obat($data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'id_obat' => $this->input->post('id_obat'),
                    'nama_obat' => $this->input->post('nama_obat'),
                    'kategori_obat' => $this->input->post('kategori_obat'),
                    'bentuk_obat' => $this->input->post('bentuk_obat'),
                    'deskripsi_obat' => $this->input->post('deskripsi_obat'),
                    'dosis_obat' => $this->input->post('dosis_obat'),
                    'aturan_obat' => $this->input->post('aturan_obat'),
                    'stok_obat' => $this->input->post('stok_obat'),
                    'harga_obat' => $this->input->post('harga_obat'),
                    'gambar_obat' => null,
                ];
                $this->M_obat->tambah_data_obat($data);
            }
        }
    }

    public function hapus_obat($id_obat){
        $this->M_obat->hapus_obat($id_obat);
    }

    public function edit_data_obat(){

        $this->valid_obat();
        $id_obat=$this->input->post('id_obat');

        if( $this->form_validation->run() == false ){
            echo validation_errors(); 
            $this->index();
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_obat']['name']!=null){

                if ($this->upload->do_upload('gambar_obat'))
                {
                    $data = [
                        'nama_obat' => $this->input->post('nama_obat'),
                        'kategori_obat' => $this->input->post('kategori_obat'),
                        'bentuk_obat' => $this->input->post('bentuk_obat'),
                        'deskripsi_obat' => $this->input->post('deskripsi_obat'),
                        'dosis_obat' => $this->input->post('dosis_obat'),
                        'aturan_obat' => $this->input->post('aturan_obat'),
                        'stok_obat' => $this->input->post('stok_obat'),
                        'harga_obat' => $this->input->post('harga_obat'),
                        'gambar_obat' => $this->upload->data('file_name')
                    ];
                    $this->M_obat->edit_obat($id_obat,$data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                    'nama_obat' => $this->input->post('nama_obat'),
                    'kategori_obat' => $this->input->post('kategori_obat'),
                    'bentuk_obat' => $this->input->post('bentuk_obat'),
                    'deskripsi_obat' => $this->input->post('deskripsi_obat'),
                    'dosis_obat' => $this->input->post('dosis_obat'),
                    'aturan_obat' => $this->input->post('aturan_obat'),
                    'stok_obat' => $this->input->post('stok_obat'),
                    'harga_obat' => $this->input->post('harga_obat')
                ];
                $this->M_obat->edit_obat($id_obat,$data);
            }
        }
        
    }
}
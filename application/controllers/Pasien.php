<?php

class Pasien extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_pasien');
		$this->load->library('form_validation');
    }
    
    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Data Pasien';
        $data['all']=$this->M_pasien->get_all_data_pasien();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_pasien', $data);
        $this->load->view('menu/footer_admin');
        }
    }

    public function valid_pasien(){
        $this->form_validation->set_rules('nama_pasien', 'Nama_pasien', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'trim|required');
    }

    public function tambah_data_pasien(){
       
        $this->valid_pasien();

        if( $this->form_validation->run() == false ){
            $this->index();
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_pasien']['name']!=null){

                if ($this->upload->do_upload('gambar_pasien'))
                {
                    $data = [
                        'id_pasien' => $this->input->post('id_pasien'),
                        'username' => $this->session->userdata('username'),
                        'nama_pasien' => $this->input->post('nama_pasien'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'gambar_pasien' => $this->upload->data('file_name')
                    ];
                    $this->M_pasien->tambah_data_pasien($data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                        'id_pasien' => $this->input->post('id_pasien'),
                        'username' => $this->session->userdata('username'),
                        'nama_pasien' => $this->input->post('nama_pasien'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'gambar_pasien' => null
                ];
                $this->M_pasien->tambah_data_pasien($data);
            }
        }
    }

    public function hapus_pasien($id_pasien){
        $this->M_pasien->hapus_pasien($id_pasien);
    }

    public function edit_data_pasien(){

        $id_pasien=$this->input->post('id_pasien');
        $this->valid_pasien();


        if( $this->form_validation->run() == false ){
            $this->index();

        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['gambar_pasien']['name']!=null){

                if ($this->upload->do_upload('gambar_pasien'))
                {
                    $data = [
                        'nama_pasien' => $this->input->post('nama_pasien'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                        'gambar_pasien' => $this->upload->data('file_name')
                    ];
                    $this->M_pasien->edit_pasien($id_pasien,$data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                }   
            }
            else{
                $data = [
                        'nama_pasien' => $this->input->post('nama_pasien'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp')
                ];
                $this->M_pasien->edit_pasien($id_pasien,$data);
            }
        }
        
    }
}

?>
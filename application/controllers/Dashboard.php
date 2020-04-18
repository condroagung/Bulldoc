<?php

class Dashboard extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_pasien');
        $this->load->model('M_obat');
		$this->load->library('form_validation');
	}

    public function index(){
        
    //$data['user']=$this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //echo 'selamat datang ' . $data['user']['username'];
    $data['title'] = "dashboard";

    $this->load->view('menu/header_admin');
    $this->load->view('menu/dashboard');
    $this->load->view('menu/footer_admin');
    }

    public function index_user(){

        $data['title'] = "dashboard_user";

        $this->load->view('menu/header_user');
        $this->load->view('menu/dashboard_user');
        $this->load->view('menu/footer_user');
    }

    public function data_pasien(){
        $data['title']='Data Pasien';
        $data['all']=$this->M_pasien->get_all_data_pasien();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_pasien', $data);
        $this->load->view('menu/footer_admin');
    }

    public function data_obat(){
        $data['title']='Data Obat';
        $data['all']=$this->M_obat->get_all_data_obat();
        $this->load->view('menu/header_admin', $data);
        $this->load->view('menu/tampil_data_obat', $data);
        $this->load->view('menu/footer_admin');
    }

    public function tambah_data_obat(){
        if( $this->form_validation->run() == false ){
            $data['title']="Add Patient Now";
            $this->load->view('dashboard/data_obat', $data);
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['file_name']            = 'user- '.date('ymd');

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
                        'gambar_obat' => $this->input->data('file_name')
                    ];
                    $hasil = $this->M_obat->tambah_data_obat($data);
                    echo json_decode($hasil);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                    redirect('dashboard/data_obat');
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
                    'harga_obat' => $this->input->post('harga_obat'),
                    'gambar_obat' => null,
                ];
                $hasil = $this->M_obat->tambah_data_obat($data);
                echo json_decode($hasil);
            }
        }
    }
}

?>
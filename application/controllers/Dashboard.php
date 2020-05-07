<?php

class Dashboard extends CI_Controller{

    public function __construct()
	{
        parent::__construct();
        $this->load->model('M_dokter');
        $this->load->model('M_obat');
        $this->load->model('M_konsul');
        $this->load->model('M_hasil');
        $this->load->model('M_invoice');
        $this->load->model('M_kamar');
	}

    public function index(){

    
    if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
    else{
    $data['title'] = "Dashboard";
    $this->load->view('menu/header_admin',$data);
    $this->load->view('menu/dashboard',$data);
    $this->load->view('menu/footer_admin');
        }
    }

    public function index_user(){

    if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
    $data['title'] = "Halaman Utama ";
    $this->load->view('menu/header_user',$data);
    $this->load->view('menu/dashboard_user',$data);
    $this->load->view('menu/footer_user');
        }
    }

    public function data_kamar(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title'] = "Data Kamar";
        $data['all']=$this->M_kamar->get_all_data_kamar();
        $this->load->view('menu/header_user',$data);
        $this->load->view('menu/data_kamar',$data);
        $this->load->view('menu/footer_user');  
        }
    }

    public function daftar_pasien(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title'] = "Daftar Pasien";
        $this->load->view('menu/header_user',$data);
        $this->load->view('menu/daftar_pasien',$data);
        $this->load->view('menu/footer_user');  
        }
    }

    public function hasil_konsul(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title']='Hasil Konsul';

        $this->load->library('pagination');

        if($this->input->post('submit')){
            $data['keyword1'] = $this->input->post('keyword1');
            $this->session->set_userdata('keyword1', $data['keyword1']);
        }
        else{
            $data['keyword1'] = $this->session->userdata('keyword1');
        }
            
        $config['base_url'] = 'http://localhost/Bulldoc/dashboard/hasil_konsul';
        
        $this->db->like('keluhan', $data['keyword1']);
        $this->db->or_like('diagnosa', $data['keyword1']);
        $this->db->or_like('tindakan', $data['keyword1']);
        $this->db->or_like('nama_dokter', $data['keyword1']);
        $this->db->from('hasil_pemeriksaan');
        $this->db->join('pemeriksaan', 'hasil_pemeriksaan.id_periksa=pemeriksaan.id_periksa');
        $this->db->join('dokter', 'pemeriksaan.id_dokter=dokter.id_dokter');
        $this->db->join('user', 'pemeriksaan.username=user.username');
        
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['total_rows'] = $config['total_rows'];
        $data['all']= $this->M_hasil->get_hasil_username($config['per_page'], $data['start'], $data['keyword1']);

        $this->load->view('menu/header_user', $data);
        $this->load->view('menu/hasil_konsul', $data);
        $this->load->view('menu/footer_user');
        }
    }

    
}

?>
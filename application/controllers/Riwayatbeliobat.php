<?php

class Riwayatbeliobat extends CI_Controller{

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

        $data['title']='Riwayat Beli Obat';
        $this->load->library('pagination');

        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }
        else{
            $data['keyword'] = $this->session->userdata('keyword');
        }
            
        $config['base_url'] = 'http://localhost/Bulldoc/riwayatbeliobat/index';
        $this->db->like('nama_obat', $data['keyword']);
        $this->db->or_like('harga', $data['keyword']);
        $this->db->or_like('jumlah', $data['keyword']);
        $this->db->from('beli');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['total_rows'] = $config['total_rows'];
        $data['beli']= $this->M_invoice->get_all_beli_user($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('menu/header_user', $data);
        $this->load->view('menu/riwayat_beli_obat', $data);
        $this->load->view('menu/footer_user');
        }
    }

}

?>
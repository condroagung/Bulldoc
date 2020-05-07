<?php

class Rekammedis extends CI_Controller{

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

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
        $data['title'] = "Data Rekam Medis";
        $this->load->view('menu/header_admin',$data);
        $this->load->view('menu/tampil_data_rekammedis',$data);
        $this->load->view('menu/footer_admin');  
        }
    }

    public function ambil_rm(){
        $datarm = $this->M_hasil->get_all_hasil()->result();
        echo json_encode($datarm);
    }

    public function pdf_rm(){

        $this->load->library('dompdf_gen');

        $data['rm'] = $this->M_hasil->get_all_hasil();

        $this->load->view('menu/laporan_rekammedis', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Rekam Medis Bulldoc.pdf", array('Attachment' => 0));

    }

    public function print_rm(){

        $data['print_rm'] = $this->M_hasil->get_all_hasil();

        $this->load->view('menu/print_rekammedis', $data);
    }

}

?>
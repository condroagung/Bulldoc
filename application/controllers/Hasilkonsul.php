<?php

class Daftarpasien extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_pasien');
        $this->load->model('M_dokter');
        $this->load->model('M_konsul');
        $this->load->model('M_hasil');
		
    }
    
    public function index(){
    }
}

?>
<?php

class Cart extends CI_Controller{

    public function __construct()
	{
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_obat');
        $this->load->model('M_invoice');
    }

    public function index(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
            $data['title'] = "Beli Obat";
            $this->load->view('menu/header_admin',$data);
            $this->load->view('menu/tampil_data_cart',$data);
            $this->load->view('menu/footer_admin'); 
        }
    }

    public function tampil_cart(){
            $datacart = $this->M_invoice->get_all()->result();
            echo json_encode($datacart);
    }

    public function detail_beli($id){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{
            $this->session->set_userdata('id_pembelian', $id);
            $data['title'] = "Detail Pembelian Obat";
            $this->load->view('menu/header_admin',$data);
            $this->load->view('menu/tampil_detail_pembelian',$data);
            $this->load->view('menu/footer_admin'); 
        }
    }

    public function tampil_detail(){
        $databeli = $this->M_invoice->get_beli($this->session->userdata('id_pembelian'))->result();
        echo json_encode($databeli);
        $this->session->unset_userdata('id_pembelian');
    }
}

?>
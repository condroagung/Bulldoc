<?php

class Beli extends CI_Controller{

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
        $data['all'] = $this->M_obat->get_all_data_obat();
        if($this->input->post('keyword')){
            $data['all'] = $this->M_obat->cari_nama_obat();
        }
        $this->load->view('menu/header_user',$data);
        $this->load->view('menu/beli_obat',$data);
        $this->load->view('menu/footer_user'); 
        }
    }
    
    public function add_cart($id_obat){

        $obat = $this->M_obat->cari_obat($id_obat);

        $data = [
            'id' => $obat->id_obat,
            'qty' => 1,
            'price' => $obat->harga_obat,
            'name' => $obat->nama_obat
        ];

        $this->cart->insert($data);
        redirect('beli');
    }

    public function detail_cart(){
        $data['title'] = "Beli Obat";
        $this->load->view('menu/header_user',$data);
        $this->load->view('menu/tampil_cart',$data);
        $this->load->view('menu/footer_user'); 
    }

    public function delete_cart(){
        $this->cart->destroy();
        redirect('beli');
    }

    public function data_buy(){

        if(!$this->cart->contents()) {
            $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Empty Cart</div>');
            redirect('beli');
        }
        else{
            $data['title'] = "beli obat";
            $this->load->view('menu/header_user',$data);
            $this->load->view('menu/bayar_obat',$data);
            $this->load->view('menu/footer_user'); 
        }
    }

    public function buy(){
        if(!$this->session->userdata('username')){
            redirect('auth/login');
        }    
        else{

                $proses = $this->M_invoice->index();
                if($proses){
                    $this->cart->destroy();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Pembelian Berhasil</div>');
                    redirect('dashboard/index_user');
                }
                else{
                    $this->cart->destroy();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Pembelian Gagal</div>');
                    redirect('dashboard/index_user');
            } 
            
        }
    
    }

}

?>
<?php 
class Main extends CI_Controller{

    public function index(){
       $this->load->view('template/Header');
       $this->load->view('template/Index');
       $this->load->view('template/Footer');
    }

    public function career(){
        $this->load->view('template/Header');
        $this->load->view('template/career');
        $this->load->view('template/Footer');
     }

     public function contact(){
        $this->load->view('template/Header');
        $this->load->view('template/contact');
        $this->load->view('template/Footer');
     }

     public function faq(){
        $this->load->view('template/Header');
        $this->load->view('template/faq');
        $this->load->view('template/Footer');
     }

     public function about(){
        $this->load->view('template/Header');
        $this->load->view('template/about');
        $this->load->view('template/Footer');
     }
}
?>
<?php

class M_User extends CI_Model{

    public function get_user(){
        $this->db->get('user');
    }

    public function get_cek(){
        $user= $this->input->post('username');
        $pass= $this->input->post('password');

        $cekuser = $this->db->get_where('user', ['username' => $user])->row_array();

        if($cekuser){
            
            if($pass==$cekuser['password']){

                if($cekuser['status_user']=="admin"){
                    $data = [
                        'username' => $cekuser['username'],
                        'email' => $cekuser['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } 
                else{
                    $data = [
                        'username' => $cekuser['username'],
                        'email' => $cekuser['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard/index_user');
                }
            }
            else{
                $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Wrong password</div>');
                redirect('auth/login');
            }
        }
        else{
            $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Username is not Registered!</div>');
            redirect('auth/login');
        }
    }

    public function add_data($data){
        $this->db->insert('user', $data);
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">Your account has been created! please Login</div>');
        redirect('auth/login');
    }
}
?>
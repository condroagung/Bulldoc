<?php

class Auth extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}

    public function login(){
       
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if( $this->form_validation->run() == false ){
            $data['title']="Login Page";
            $this->load->view('auth/login', $data);
        }
        else{
            $this->M_user->get_cek();
        }
    }

    public function change_password(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[5]|matches[pass2]', [
            'matches' => 'password dont match!'
        ]);
        $this->form_validation->set_rules('pass2', 'Password', 'trim|required|min_length[5]|matches[pass1]');

        $username=$this->input->post('username');

        if( $this->form_validation->run() == false ){
            $data['title']="Register Now";
            $this->load->view('auth/change_password', $data);
        }
        else{
            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('pass1')
            ];
            $this->M_user->change_password($username,$data);
        }
    }

    public function register(){

        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]',[
            'is_unique' => 'This username has already been used!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]',[
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[5]|matches[pass2]', [
            'matches' => 'password dont match!'
        ]);
        $this->form_validation->set_rules('pass2', 'Password', 'trim|required|min_length[5]|matches[pass1]');


        if( $this->form_validation->run() == false ){
            $data['title']="Register Now";
            $this->load->view('auth/register', $data);
        }
        else{

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if(@$_FILES['image']['name']!=null){

                if ($this->upload->do_upload('image'))
                {
                    $data = [
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('pass1'),
                        'status_user' => 'user',
                        'gambar_user' => $this->upload->data('file_name')
                    ];
                    $this->M_user->add_data($data);
                }
                else
                {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('flash', '<div class= "alert alert-danger" role="alert">Image cant be uploaded </div>');
                    redirect('auth/register');
                }   
            }
            else{
                $data = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('pass1'),
                    'status_user' => 'user',
                    'gambar_user' => null
                ];
                $this->M_user->add_data($data);
            }
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('flash', '<div class= "alert alert-success" role="alert">You have been logged out</div>');
        redirect('auth/login');
    }
}

?>
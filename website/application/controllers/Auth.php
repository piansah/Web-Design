<?php

defined('BASEPATH') or exit('Not Allowed Doirect Access');

class Auth extends CI_Controller {
    public function __construct() {
        parent:: __construct();
    }
    public function index() {
        $data['title'] = "Cheesy | Login";
        $this->load->view('Auth/login', $data);
    }

    public function login_validation() {        
        // $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|callback_email_check');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()==false) {
            $this->data['title'] = "GANDL Login";
            $this->load->view('Auth/login', $this->data);
        }else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
        
            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            
            if($user) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];

                    if($user['role_id'] == 0) {
                        $this->session->set_userdata($data);
                        redirect('Admin');
                    }else {
                        $this->session->set_userdata($data);
                        redirect('Home');
                    }
                }else {
                    $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Warning! Password wrong
                    </div>');
                    redirect('Auth');
                }
            }else {
                $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger" role="alert">
                    Warning! Username not found
                </div>');
                redirect('Auth');
            }
    }
}


public function email_check($str) {
    if(strpos($str, '@ittelkom-pwt.ac.id')) {
        return true;
    }else {
        $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        harus menggunakan email ITTP!
                    </div>');
                    return false;
    }
}

public function register() {
    $this->data['title'] = 'Cheesy | Register';
    $this->load->view('Auth/register', $this->data);
}

public function register_validation() {
    $this->form_validation->set_rules('firstname', 'FirstName', 'required|trim');
    $this->form_validation->set_rules('lastname', 'LastName', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|is_unique[user.username]',[
    'is_unique' => 'this username has already exist!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]|callback_email_check',[
    'is_unique' => 'this email has been registered!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

    if($this->form_validation->run()==false) {
        $this->data['title'] = "GANDL Register";
        $this->load->view('Auth/register', $this->data);
    }else {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $data = [
            'name' => htmlspecialchars($firstname . $lastname),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];

        echo($data);
        $this->db->insert('user',$data);
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created
        </div>');
        redirect('Auth');
    }
}

public function logout() {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('is_role');

    $this->session->set_flashdata('pesan',
        '<div class="alert alert-success" role="alert">
           You has been logged out!
        </div>');
        redirect('Auth');
}

}
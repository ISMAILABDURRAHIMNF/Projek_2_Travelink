<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','user');
    }

    public function index(){
        $this->load->view('register/index');
    }

    public function create(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'created_at' => date('Y-m-d H:i:s'),
            'role' => 'public',
        );
        $this->user->register($data);
        redirect('login');
    }

}
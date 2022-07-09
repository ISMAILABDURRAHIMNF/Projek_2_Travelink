<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','login');
    }

    public function index(){
        $this->load->view('login/index');
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $akun = $this->login->cek_login($username,$password);
        if($akun){
            
            foreach ($akun as $row) {
				$this->session->set_userdata('id_user',$row->id);
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('role',$row->role);
                
			}
            
            if($this->session->userdata('role') == "administrator"){
                echo '<script>
                    alert("Login Berhasil");
                    window.location.href = "'.base_url('admin').'";
                </script>';
            }else if($this->session->userdata('role') == "public"){
                echo '<script>
                    alert("Login Berhasil");
                    window.location.href = "'.base_url('landingPage').'";
                </script>';
            }
        }else{
            echo '<script>
                    alert("Username atau Password Salah");
                    window.location.href = "'.base_url('login').'";
                </script>';
        }
    }

    function logoutAdmin(){
        $this->session->sess_destroy();
        echo '<script>
                    alert("Kamu telah Logout");
                    window.location.href = "'.base_url('login').'";
                </script>';
    }

    function logoutPublic(){
        $this->session->sess_destroy();
        echo '<script>
                    alert("Kamu telah Logout");
                    window.location.href = "'.base_url('landingPage').'";
                </script>';
    }

    // public function index(){
	// 	$data['judul'] = 'login';
    //     $this->load->view('view_login',$data);
	// }

    // public function otentikasi(){
    //     $this->load->model('user_model','user');

    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     $row = $this->user->login($username,$password);
    //     if(isset($row)){
    //         $this->session->set_userdata('USERNAME', $row->username);
    //         $this->session->set_userdata('ROLE', $row->role);

    //         redirect(base_url() . 'mahasiswa');
    //     } else {
    //         redirect(base_url() . 'login?status=f');
    //     }
    // }

    // public function logout(){
    //     $this->session->unset_userdata('USERNAME');
    //     $this->session->sess_destroy;

    //     redirect(base_url() . 'login');
    // }
}
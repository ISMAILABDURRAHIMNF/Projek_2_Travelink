<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Komentar_model','komentar');

        
    }

    public function index(){
        if($this->session->userdata('role') != "administrator"){
            echo '<script>
                    alert("Anda tidak memiliki akses");
                    window.location.href = "'.base_url('login').'";
                </script>';
        }

        $data['list_komentar'] = $this->komentar->getAll();

        $this->load->view('komentar/index',$data);
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->komentar->delete($id);
        redirect('komentar','refresh');
    }

    public function tambahKomentar(){
        $this->load->model('landingPage_model','landingPage');
        
        if($this->session->userdata('id_user') == ""){
            echo '<script>
                    alert("Login terlebih dahulu");
                    window.location.href = "'.base_url('login').'";
                </script>';
        } else{
            $id = $this->input->get('id');
            $data['list_wisata'] = $this->landingPage->getDetail($id);
            $this->load->view('landingPage/komentar',$data);
        }


    }

    public function saveKomentar(){
        $datainsert = [
            'tanggal' => date("Y-m/-"),
            'users_id' => $this->session->userdata('id_user'),
            'isi' => $this->input->post('komentar'),
            'wisata_id' => $this->input->post('wisata_id'),
            'nilai_rating_id' => $this->input->post('rating'),
        ];
        $id = $this->input->post('wisata_id');
        $this->komentar->save($datainsert);
        redirect('landingPage/findById?id='.$id);
    }

}
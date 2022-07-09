<?php
class User_model extends CI_Model {

    public function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->db->get_where('users',['username' => $username, 'password' => $password]);
        if($cek->num_rows() > 0){
            return $cek->result();
        }else{
            return false;
        }
    }

    public function register($data){
        $this->db->insert('users',$data);
    }


}

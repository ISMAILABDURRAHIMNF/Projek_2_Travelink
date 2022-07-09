<?php
class Wisata_model extends CI_Model {

    private $table = 'tempat_wisata';

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }

        public function findById($id){
            $this->db->where('kode',$id);
            $query = $this->db->get($this->table);
            return $query->row();
        }

    // public $id;
    // public $nama;
    // public $nidn;
    // public $gender;
    // public $tmp_lahir;
    // public $tgl_lahir;
    // public $pendidikan;

}

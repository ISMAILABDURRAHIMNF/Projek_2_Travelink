<?php
class Admin_model extends CI_Model {

    // public $id;
    // public $nama;
    // public $gender;
    // public $tmp_lahir;
    // public $tgl_lahir;
    // public $ipk;

    private $table = 'tempat_wisata';

        public function getAll(){
            $this->db->select('tempat_wisata.*, jenis_wisata.nama as nama_jenis');
            $this->db->from('tempat_wisata');
            $this->db->join('jenis_wisata', 'tempat_wisata.jenis_id=jenis_wisata.id');
            $query = $this->db->get();
            return $query->result();
        }

        public function getDetail($id){
            $this->db->where('id',$id);
            $query = $this->db->get($this->table);
            return $query->row();
        }

        public function save($datainsert){
            $this->db->insert($this->table,$datainsert);
        }

        public function update($dataedit,$id){
            $this->db->where('id',$id);
            $this->db->update($this->table,$dataedit);
        }

        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete($this->table);
        }

        public function upload1($foto1,$id){
            $this->db->where('id',$id);
            $this->db->update($this->table,$foto1);
        }

        public function upload2($foto2,$id){
            $this->db->where('id',$id);
            $this->db->update($this->table,$foto2);
        }

        public function upload3($foto3,$id){
            $this->db->where('id',$id);
            $this->db->update($this->table,$foto3);
        }

        public function getAllJenis(){
            $this->db->select('*');
            $this->db->from('jenis_wisata');
            $query = $this->db->get();
            return $query->result();
        }

        public function findByJenis($jenis_id){
            $this->db->select('tempat_wisata.*, jenis_wisata.nama as nama_jenis');
            $this->db->from('tempat_wisata');
            $this->db->join('jenis_wisata', 'tempat_wisata.jenis_id=jenis_wisata.id');
            $this->db->where('jenis_id',$jenis_id);
            $query = $this->db->get();
            return $query->result();
        }

        public function getAllKecamatan(){
            $this->db->select('*');
            $this->db->from('kecamatan');
            $query = $this->db->get();
            return $query->result();
        }

        public function findByKecamatan($kecamatan_id){
            $this->db->select('tempat_wisata.*, jenis_wisata.nama as nama_jenis');
            $this->db->from('tempat_wisata');
            $this->db->join('jenis_wisata', 'tempat_wisata.jenis_id=jenis_wisata.id');
            $this->db->where('kecamatan_id',$kecamatan_id);
            $query = $this->db->get();
            return $query->result();
        }

        public function getRandomWisata(){
            $this->db->limit(6);
            $this->db->order_by('rand()');
            $query = $this->db->get($this->table);
            return $query->result();
        }

        public function getRandomKomentar(){
            $this->db->select('*, users.username as username, tempat_wisata.nama as nama_wisata, tempat_wisata.foto1 as foto, nilai_rating.nama as rating');
            $this->db->from('komentar');
            $this->db->join('users', 'komentar.users_id=users.id');
            $this->db->join('tempat_wisata', 'komentar.wisata_id=tempat_wisata.id');
            $this->db->join('nilai_rating', 'komentar.nilai_rating_id=nilai_rating.id');
            $this->db->limit(3);
            $this->db->order_by('rand()');
            $query = $this->db->get();
            return $query->result();
        }
        

}
?>
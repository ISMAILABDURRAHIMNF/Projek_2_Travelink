<?php
class LandingPage_model extends CI_Model {

    private $table = 'tempat_wisata'; 
 
    public function getAll(){
        $this->db->select('tempat_wisata.*, jenis_wisata.nama as nama_jenis');
        $this->db->from('tempat_wisata');
        $this->db->join('jenis_wisata', 'tempat_wisata.jenis_id=jenis_wisata.id');
        $query = $this->db->get();
        return $query->result();
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

        public function getDetail($id){
            $this->db->select('tempat_wisata.*, jenis_wisata.nama as nama_jenis, kecamatan.nama as nama_kecamatan');
            $this->db->from('tempat_wisata');
            $this->db->join('jenis_wisata', 'tempat_wisata.jenis_id=jenis_wisata.id');
            $this->db->join('kecamatan', 'tempat_wisata.kecamatan_id=kecamatan.id');
            $this->db->where('tempat_wisata.id',$id);
            $query = $this->db->get();
            return $query->row();
        }

        public function komentar_save($datainsert){
            $this->db->insert('komentar',$datainsert);
        }

        public function getKomentarById($id){
            $this->db->select('komentar.*, users.username as username, tempat_wisata.nama as nama_wisata,, nilai_rating.nama as rating');
            $this->db->from('komentar');
            $this->db->join('users', 'komentar.users_id=users.id');
            $this->db->join('tempat_wisata', 'komentar.wisata_id=tempat_wisata.id');
            $this->db->join('nilai_rating', 'komentar.nilai_rating_id=nilai_rating.id');
            $this->db->where('wisata_id',$id);
            $query = $this->db->get();
            return $query->result();
        }

    }
?>
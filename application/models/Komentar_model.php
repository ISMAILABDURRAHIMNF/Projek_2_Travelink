<?php
class Komentar_model extends CI_Model {

    private $table = 'komentar';

    public function getAll(){
        $this->db->select('komentar.*, users.username as username, tempat_wisata.nama as nama_wisata,, nilai_rating.nama as rating');
        $this->db->from('komentar');
        $this->db->join('users', 'komentar.users_id=users.id');
        $this->db->join('tempat_wisata', 'komentar.wisata_id=tempat_wisata.id');
        $this->db->join('nilai_rating', 'komentar.nilai_rating_id=nilai_rating.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }

    public function save($datainsert){
        $this->db->insert($this->table,$datainsert);
    }

}
?>
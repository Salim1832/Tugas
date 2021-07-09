<?php
class Penilaian_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM seminar_ta;
        $query = $this->db->get('penilaian');
        return $query;
    }

    public function getAlldetail_penilaian() {
        // SELECT * FROM dosen;
        $query = $this->db->get_where('detail_penilaian');
        return $query;
    }

    
}
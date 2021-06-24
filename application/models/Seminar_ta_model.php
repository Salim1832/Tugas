<?php
class Seminar_ta_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM seminar_ta;
        $query = $this->db->get('seminar_ta');
        return $query;
    }

    public function getAlldosen() {
        // SELECT * FROM dosen;
        $query = $this->db->get('dosen');
        return $query;
    }

    public function getAllkategori() {
        // SELECT * FROM kategori_seminar;
        $query = $this->db->get('kategori_seminar');
        return $query;
    }
}
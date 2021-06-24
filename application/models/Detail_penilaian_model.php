<?php
class Detail_penilaian_model extends CI_Model {

    public function getAll() {
        // SELECT * FROM seminar_ta;
        $query = $this->db->get('detail_penilaian');
        return $query;
    }

    
}
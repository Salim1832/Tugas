<?php
class Detail_penilaian_model extends CI_Model {

    public function tampil_data() 
    {
        return $this->db->get('detail_penilaian');
    }
}
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

    public function join_table(){
        $this->db->select('seminar_ta.*, dosen.nama');
        $this->db->from('seminar_ta');
        $this->db->join('dosen', 'dosen.id = seminar_ta.pembimbing_id', 'left');
        $query = $this->db->get();
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('seminar_ta', array('id' => $id));
        return $query->row();
    }

    public function simpan($data){
        $sql = "INSERT INTO seminar_ta (semester,tanggal,jam,kategori_seminar_id,nim,nama_mahasiswa,judul,pembimbing_id,penguji1_id,penguji2_id,lokasi,nilai_akhir) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE seminar_ta SET semester=?,tanggal=?,jam=?,kategori_seminar_id=?,nim=?,nama_mahasiswa=?,judul=?,pembimbing_id=?,penguji1_id=?,penguji2_id=?,lokasi=?,nilai_akhir=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM seminar_ta WHERE id=?";
        $this->db->query($sql, $data);
    }
}
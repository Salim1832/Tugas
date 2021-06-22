<?php
class Dosen_model extends CI_MODEL {
    public function getAll(){
        $query = $this->db->get('dosen');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('dosen', array('id' => $id));
        return $query->row();
    }

    public function simpan($data){
        $sql = "INSERT INTO dosen (nidn,nama) VALUES (?,?)";
        //$this->db->query($sql, array('111','budi'));
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE dosen SET nidn=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>
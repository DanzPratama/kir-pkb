<?php
class Arsip_model extends CI_Model {

public function getAll() {
    $this->db->order_by('tgl_uji_kir', 'DESC');
    return $this->db->get('arsip_pkb')->result();
}
    public function insert($data) {
        return $this->db->insert('arsip_pkb', $data);
    }

    public function getById($id) {
        return $this->db->get_where('arsip_pkb', ['id' => $id])->row();
    }

    public function update($id, $data) {
        return $this->db->update('arsip_pkb', $data, ['id' => $id]);
    }

    public function delete($id) {
        return $this->db->delete('arsip_pkb', ['id' => $id]);
    }
}
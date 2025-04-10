<?php

class ClientesPj_model extends Crud_model {

    function __construct() {
        $this->table = 'clientes_pj';
        parent::__construct($this->table);
    }

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function save($data, $id = null) {
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->update($this->table, $data);
        } else {
            return $this->db->insert($this->table, $data);
        }
    }

    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}

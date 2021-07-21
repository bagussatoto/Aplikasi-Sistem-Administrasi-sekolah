<?php

class Mod_pelanggaran extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function insert($data)
    {
            $query = $this->db->insert('pelanggaran', $data);
            return $query;
    }

    function get()
    {
        $this->db->join('siswa', 'pelanggaran.nisn = siswa.nisn', 'left');
        return $this->db->get('pelanggaran')->result();
    }

    function delete($id)
    {
            $this->db->where('id_jenis_pelanggaran', $id);
            $query = $this->db->delete('pelanggaran');
            return $query;
    }
}
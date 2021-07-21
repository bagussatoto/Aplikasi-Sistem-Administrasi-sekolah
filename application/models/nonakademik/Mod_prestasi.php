<?php

class Mod_prestasi extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function insert($data)
    {
            $query = $this->db->insert('prestasi', $data);
            return $query;
    }

    function get()
    {
        $this->db->select('*, prestasi.foto AS fotoprestasi');
        $this->db->join('siswa', 'prestasi.nisn = siswa.nisn', 'left');
        return $this->db->get('prestasi')->result();
    }
}
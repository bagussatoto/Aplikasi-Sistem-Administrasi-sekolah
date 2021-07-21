<?php

class Mod_nilaiekskul extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function insert($data)
    {
            $query = $this->db->insert('nilaiekskul', $data);
            return $query;
    }

    function update($data, $id)
    {
            $this->db->where('id_nilaiekskul', $id);
            $query = $this->db->update('nilaiekskul', $data);
            return $query;
    }

    function cek($nisn, $id_jenis_kls_tambahan) {
        $this->db->where("nisn", $nisn);
        $this->db->where("id_jenis_kls_tambahan", $id_jenis_kls_tambahan);
        return $this->db->get('nilaiekskul')->row();
    }

    // function get()
    // {
    //     $this->db->join('siswa', 'pelanggaran.nisn = siswa.nisn', 'left');
    //     return $this->db->get('pelanggaran')->result();
    // }

    // function delete($id)
    // {
    //         $this->db->where('id_jenis_pelanggaran', $id);
    //         $query = $this->db->delete('pelanggaran');
    //         return $query;
    // }
}
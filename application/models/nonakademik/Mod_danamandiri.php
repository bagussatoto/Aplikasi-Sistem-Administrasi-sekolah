<?php

class Mod_danamandiri extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function insert($data)
    {
            $query = $this->db->insert('danamandiri', $data);
            return $query;
    }

    function get($where = array())
    {
        $this->db->join('siswa', 'danamandiri.nisn = siswa.nisn', 'left');
        $this->db->where($where);
        return $this->db->get('danamandiri')->result();
    }

    function delete($id)
    {
            $this->db->where('id_danamandiri', $id);
            $query = $this->db->delete('danamandiri');
            return $query;
    }

    // function getjumlah() 
    // {
    // 	return $this->db->query("SELECT COUNT(nisn) AS orang, jml FROM (SELECT nisn, COUNT(id_keterlambatan) AS jml FROM `keterlambatan` GROUP BY nisn) T GROUP BY jml ORDER BY jml")->result();
    // }

}

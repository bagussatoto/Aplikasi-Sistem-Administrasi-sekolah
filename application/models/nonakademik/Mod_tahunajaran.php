<?php

class Mod_tahunajaran extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function insert($data)
    {
            $query = $this->db->insert('tahunajaran', $data);
            return $query;
    }

    function get($where = array())
    {
        $this->db->where($where);
        $this->db->order_by('tanggal_mulai asc');
        return $this->db->get('tahunajaran')->result();
    }

    function getsetting() {
        $this->db->join('tahunajaran', 'setting.id_tahun_ajaran=tahunajaran.id_tahun_ajaran');
        return $this->db->get('setting')->row();
    }
    
     public function getaktif()
        {
        $this->db->limit(1);
        return $this->db->get('setting')->row();
        }

}
<?php

class Mod_mengelola extends CI_Model {
	public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function simpan_pembimbing($data)
    {
        $query = $this->db->insert('pembimbing', $data);
        return $query;
    }

    function simpan_ekskul($data)
    {
        $query = $this->db->insert('jenis_kls_tambahan', $data);
        return $query;
    }

    function simpan_kpn_pelanggaran($data)
    {
        $query = $this->db->insert('poin_pelanggaran', $data);
        return $query;
    }
}
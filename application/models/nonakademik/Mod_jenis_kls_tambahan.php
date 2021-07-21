<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jenis_kls_tambahan extends CI_Model {

	function get()
    {
        //$this->db->join('siswa', 'pelanggaran.nisn = siswa.nisn', 'left');
        return $this->db->get('jenis_kls_tambahan')->result();
    }


}
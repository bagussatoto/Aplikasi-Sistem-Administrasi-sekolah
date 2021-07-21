<?php

class Mod_keterlambatan extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            $this->load->database();
            // Your own constructor code
    }

    function insert($data)
    {
            $query = $this->db->insert('keterlambatan', $data);
            return $query;
    }

    function select($id)
    {
            $this->db->join('siswa', 'siswa.nisn=keterlambatan.nisn', 'left');
            $this->db->join('siswa_kelas_reguler_berjalan AS sk', 'siswa.nisn=sk.nisn');
            $this->db->join('kelas_reguler_berjalan AS kr', 'sk.id_kelas_reguler_berjalan=kr.id_kelas_reguler_berjalan');
            $this->db->join('kelas_reguler AS k', 'k.id_kelas_reguler=kr.id_kelas_reguler');
            $this->db->where('id_keterlambatan', $id);
            $query = $this->db->get('keterlambatan');
            return $query->row();
    }

    function getjumlah($tglmulai, $tglselesai) 
    {
    	// return $this->db->query("SELECT COUNT(nisn) AS orang, jml FROM (SELECT nisn, COUNT(id_keterlambatan) AS jml FROM `keterlambatan` GROUP BY nisn) T GROUP BY jml ORDER BY jml")->result();
        return $this->db->query("SELECT COUNT(nisn) AS orang, jml FROM (SELECT nisn, COUNT(id_keterlambatan) AS jml FROM `keterlambatan` WHERE tgl_terlambat >= '$tglmulai' AND tgl_terlambat <= '$tglselesai' GROUP BY nisn) T GROUP BY jml ORDER BY jml")->result();
    }

    function getdatabyjumlah($tglmulai, $tglselesai, $jumlah) 
    {
        // return $this->db->query("SELECT COUNT(nisn) AS orang, jml FROM (SELECT nisn, COUNT(id_keterlambatan) AS jml FROM `keterlambatan` GROUP BY nisn) T GROUP BY jml ORDER BY jml")->result();
        return $this->db->query("SELECT keterlambatan.*, siswa.nama FROM `keterlambatan` LEFT JOIN siswa ON keterlambatan.nisn = siswa.nisn WHERE tgl_terlambat >= '$tglmulai' AND tgl_terlambat <= '$tglselesai' AND keterlambatan.nisn IN (SELECT nisn FROM (SELECT nisn, COUNT(id_keterlambatan) AS jml FROM `keterlambatan` WHERE tgl_terlambat >= '$tglmulai' AND tgl_terlambat <= '$tglselesai' GROUP BY nisn) T WHERE jml = '$jumlah') ORDER BY nisn")->result();
    }

    function getjumlahbulan($bulan, $tahun) 
    {
        return $this->db->query("SELECT COUNT(id_keterlambatan) AS jml FROM `keterlambatan` WHERE MONTH(tgl_terlambat) = '$bulan' AND YEAR(tgl_terlambat) = '$tahun'")->row();
    }

    function getjumlahtahun() 
    {
        return $this->db->query("SELECT YEAR(tgl_terlambat) AS tahun, COUNT(id_keterlambatan) AS jml FROM `keterlambatan` GROUP BY YEAR(tgl_terlambat)")->result();
    }

}

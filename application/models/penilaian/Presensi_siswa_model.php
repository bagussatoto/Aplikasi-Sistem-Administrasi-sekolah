<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_siswa_model extends CI_Model {

	public function getpresensi($tanggal, $nisn) {
		$this->db->where('nisn', $nisn);
		$this->db->where('Tanggal_presensisiswa', $tanggal);
		return $this->db->get('presensisiswa')->row();
	}

	public function insertpresensi($data) {
		$this->db->insert('presensisiswa', $data);
	}

	public function updatepresensi($data, $tanggal, $nisn) {
		$this->db->where('nisn', $nisn);
		$this->db->where('Tanggal_presensisiswa', $tanggal);
		$this->db->update('presensisiswa', $data);
	}

	public function getpresensibulan($bulan, $tahun, $nisn, $status) {
		$this->db->select('COUNT(Id_presensisiswa) AS jml');
		$this->db->where('Rangkuman_presensisiswa', $status);
		$this->db->where('nisn', $nisn);
		$this->db->where('MONTH(Tanggal_presensisiswa)', $bulan);
		$this->db->where('YEAR(Tanggal_presensisiswa)', $tahun);
		return $this->db->get('presensisiswa')->row();
	}

	public function getpresensisemester($tanggal_mulai, $tanggal_selesai, $nisn, $status) {
		$this->db->select('COUNT(Id_presensisiswa) AS jml');
		$this->db->where('Rangkuman_presensisiswa', $status);
		$this->db->where('nisn', $nisn);
		$this->db->where("Tanggal_presensisiswa >= '$tanggal_mulai'");
		$this->db->where("Tanggal_presensisiswa <= '$tanggal_selesai'");
		return $this->db->get('presensisiswa')->row();
	}

	public function getpresensitotalbulan($bulan, $tahun, $status) {
		$this->db->select('COUNT(Id_presensisiswa) AS jml');
		$this->db->where('Rangkuman_presensisiswa', $status);
		$this->db->where('MONTH(Tanggal_presensisiswa)', $bulan);
		$this->db->where('YEAR(Tanggal_presensisiswa)', $tahun);
		return $this->db->get('presensisiswa')->row();
	}
}
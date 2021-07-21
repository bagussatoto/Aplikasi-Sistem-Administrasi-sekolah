<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_pegawai_model extends CI_Model {

	public function getpresensi($tanggal, $nip) {
		$this->db->where('NIP', $nip);
		$this->db->where('Tanggal_presensi', $tanggal);
		return $this->db->get('presensi_pegawai')->row();
	}

	public function getresumepresensi($nip, $thn, $bln) {
		$this->db->select('presensi_pegawai.*, pegawai.Nama');
		$this->db->join('pegawai', 'presensi_pegawai.NIP = pegawai.NIP', 'left');
		$this->db->where('presensi_pegawai.NIP', $nip);
		$this->db->where('YEAR(Tanggal_presensi)', $thn);
		$this->db->where('MONTH(Tanggal_presensi)', $bln);
		$this->db->order_by('Tanggal_presensi ASC');
		return $this->db->get('presensi_pegawai')->result();

	}

	public function getresumepresensitahun($nip, $thn) {
		$this->db->select('presensi_pegawai.*, pegawai.Nama');
		$this->db->join('pegawai', 'presensi_pegawai.NIP = pegawai.NIP', 'left');
		$this->db->where('presensi_pegawai.NIP', $nip);
		$this->db->where('YEAR(Tanggal_presensi)', $thn);
		//$this->db->where('MONTH(Tanggal_presensi)', $bln);
		$this->db->order_by('Tanggal_presensi ASC');
		return $this->db->get('presensi_pegawai')->result();

	}

	public function getresumepresensitahunajaran($nip, $tglmulai, $tglselesai) {
		$this->db->select('presensi_pegawai.*, pegawai.Nama');
		$this->db->join('pegawai', 'presensi_pegawai.NIP = pegawai.NIP', 'left');
		$this->db->where('presensi_pegawai.NIP', $nip);
		$this->db->where('Tanggal_presensi>=', $tglmulai);
		$this->db->where('Tanggal_presensi<=', $tglselesai);
		//$this->db->where('MONTH(Tanggal_presensi)', $bln);
		$this->db->order_by('Tanggal_presensi ASC');
		return $this->db->get('presensi_pegawai')->result();

	}

	

	public function getresumepresensisemester($tanggal_mulai, $tanggal_selesai, $nip) {
		$this->db->select('presensi_pegawai.*, pegawai.Nama');
		$this->db->join('pegawai', 'presensi_pegawai.NIP = pegawai.NIP', 'left');
		$this->db->where('presensi_pegawai.NIP', $nip);
		$this->db->where("Tanggal_presensi >= '$tanggal_mulai'");
		$this->db->where("Tanggal_presensi <= '$tanggal_selesai'");	
		// $this->db->where("Tanggal_presensi = '$semester'");		
		$this->db->order_by('Tanggal_presensi ASC');
		return $this->db->get('presensi_pegawai')->result();

	}


	public function insertpresensi($data) {
		$this->db->insert('presensi_pegawai', $data);
	}

	public function updatepresensi($data, $tanggal, $nip) {
		$this->db->where('NIP', $nip);
		$this->db->where('Tanggal_presensi', $tanggal);
		$this->db->update('presensi_pegawai', $data);
	}

	public function getpresensibulan($bulan, $tahun, $nip, $status) {
		$this->db->select('COUNT(Id_presensi) AS jml');
		$this->db->where('Rangkuman_presensi', $status);
		$this->db->where('NIP', $nip);
		$this->db->where('MONTH(Tanggal_presensi)', $bulan);
		$this->db->where('YEAR(Tanggal_presensi)', $tahun);
		return $this->db->get('presensi_pegawai')->row();
	}

	public function getpresensisemester($tanggal_mulai, $tanggal_selesai, $nip, $status) {
		$this->db->select('COUNT(Id_presensi) AS jml');
		$this->db->where('Rangkuman_presensi', $status);
		$this->db->where('NIP', $nip);
		$this->db->where("Tanggal_presensi >= '$tanggal_mulai'");
		$this->db->where("Tanggal_presensi <= '$tanggal_selesai'");
		return $this->db->get('presensi_pegawai')->row();
	}

	public function getpresensitotalbulan($bulan, $tahun, $status) {
		$this->db->select('COUNT(Id_presensi) AS jml');
		$this->db->where('Rangkuman_presensi', $status);
		$this->db->where('MONTH(Tanggal_presensi)', $bulan);
		$this->db->where('YEAR(Tanggal_presensi)', $tahun);
		return $this->db->get('presensi_pegawai')->row();
	}

	public function getpresensitotal($bulan, $tahun) {
		$this->db->select('COUNT(Id_presensi) AS jml');
		$this->db->where('MONTH(Tanggal_presensi)', $bulan);
		$this->db->where('YEAR(Tanggal_presensi)', $tahun);
		return $this->db->get('presensi_pegawai')->row();
	}

	public function getpresensitanggal($nip, $tglmulai, $tglselesai, $status) {
		$this->db->select('COUNT(Id_presensi) AS jml');
		$this->db->where('Rangkuman_presensi', $status);
		$this->db->where('NIP', $nip);
		$this->db->where('Tanggal_presensi>=', $tglmulai);
		$this->db->where('Tanggal_presensi<=', $tglselesai);
		return $this->db->get('presensi_pegawai')->row();
	}

	public function getpresensitotaltanggal($nip, $tglmulai, $tglselesai) {
		$this->db->select('COUNT(Id_presensi) AS jml');
		$this->db->where('NIP', $nip);
		$this->db->where('Tanggal_presensi>=', $tglmulai);
		$this->db->where('Tanggal_presensi<=', $tglselesai);
		return $this->db->get('presensi_pegawai')->row();
	}

	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanggal_libur_nasional_model extends CI_Model {

	public function getalllibur() {
		$this->db->order_by('bulan_libur_nasional asc, tanggal_libur_nasional asc');
		return $this->db->get('tanggal_libur_nasional')->result();
	}

	public function getlibur($tanggal, $bulan) {
		$this->db->where('tanggal_libur_nasional', $tanggal);
		$this->db->where('bulan_libur_nasional', $bulan);
		return $this->db->get('tanggal_libur_nasional')->row();
	}

	public function insertlibur($data) {
		$this->db->insert('tanggal_libur_nasional', $data);
	}

	public function deletelibur($id) {
		$this->db->where('id_tanggal_libur_nasional', $id);
		$this->db->delete('tanggal_libur_nasional');
	}

	// public function updatelibur($data, $tanggal, $nip) {
	// 	$this->db->where('NIP', $nip);
	// 	$this->db->where('Tanggal_presensi', $tanggal);
	// 	$this->db->update('presensi_pegawai', $data);
	// }

	
}

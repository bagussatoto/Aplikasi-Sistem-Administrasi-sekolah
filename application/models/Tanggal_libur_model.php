<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanggal_libur_model extends CI_Model {

	public function getalllibur() {
		$this->db->order_by('tanggal_awal desc');
		return $this->db->get('tanggal_libur')->result();
	}

	public function getlibur($tanggal) {
		$this->db->where('tanggal_awal<=', $tanggal);
		$this->db->where('tanggal_akhir>=', $tanggal);
		return $this->db->get('tanggal_libur')->row();
	}

	public function insertlibur($data) {
		$this->db->insert('tanggal_libur', $data);
	}

	public function deletelibur($id) {
		$this->db->where('id_tanggal_libur', $id);
		$this->db->delete('tanggal_libur');
	}

	// public function updatelibur($data, $tanggal, $nip) {
	// 	$this->db->where('NIP', $nip);
	// 	$this->db->where('Tanggal_presensi', $tanggal);
	// 	$this->db->update('presensi_pegawai', $data);
	// }

	
}

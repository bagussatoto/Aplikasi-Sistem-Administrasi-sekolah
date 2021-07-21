<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa extends CI_Model {

	public function get(){
		return $this->db->get('siswa')->result();
	}

	public function insert($data){
		$this->db->insert('siswa', $data);
	}

	public function delete($id) {
		$this->db->where('nisn',$id);
		$this->db->delete('siswa');
	}

	public function select($id) {
		$this->db->where('nisn',$id); 
		return $this->db->get('siswa')->row();
	}

	public function update($data, $id) {
		$this->db->where('nisn',$id); 
		$this->db->update('siswa', $data);		
	}

	public function getinfosiswa($nisn) {
		$this->db->select('siswa.*, kelas_reguler.nama_kelas, kelas_reguler.jenjang, kelas_reguler.id_kelas_reguler');
		$this->db->join('siswa_kelas_reguler_berjalan', 'siswa_kelas_reguler_berjalan.nisn = siswa.nisn', 'left');
		$this->db->join('kelas_reguler_berjalan', 'kelas_reguler_berjalan.id_kelas_reguler_berjalan = siswa_kelas_reguler_berjalan.id_kelas_reguler_berjalan', 'left');
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler', 'left');
		$this->db->where('siswa.nisn', $nisn);
		return $this->db->get('siswa')->row();
	}

	// public function getinfosiswatam($nisn) {
	// 	$this->db->select('siswa.*, kelas_tambahan.kelas_tambahan, kelas_tambahan.jenjang, kelas_tambahan.id_kelas_tambahan');
	// 	$this->db->join('siswa_kelas_tambahan_berjalan', 'siswa_kelas_tambahan_berjalan.nisn = siswa.nisn', 'left');
	// 	$this->db->join('kelas_tambahan_berjalan', 'kelas_tambahan_berjalan.id_kelas_tambahan_berjalan = siswa_kelas_tambahan_berjalan.id_kelas_tambahan_berjalan', 'left');
	// 	$this->db->join('kelas_tambahan', 'kelas_tambahan.id_kelas_tambahan = kelas_tambahan_berjalan.id_kelas_tambahan', 'left');
	// 	$this->db->where('siswa.nisn', $nisn);
	// 	return $this->db->get('siswa')->row();
	// }

	public function getinfosiswatam($nisn) {
		$this->db->select('siswa.*, kelas_tambahan.nama_kelas_tambahan, kelas_tambahan.id_kelas_tambahan');
		// $this->db->join('siswa_kelas_tambahan_berjalan', 'siswa_kelas_tambahan_berjalan.nisn = siswa.nisn', 'left');
		$this->db->join('kelas_tambahan_berjalan', 'kelas_tambahan_berjalan.nisn = siswa.nisn', 'left');
		$this->db->join('kelas_tambahan', 'kelas_tambahan.id_kelas_tambahan = kelas_tambahan_berjalan.id_kelas_tambahan', 'left');
		$this->db->where('siswa.nisn', $nisn);
		return $this->db->get('siswa')->row();
	}




}
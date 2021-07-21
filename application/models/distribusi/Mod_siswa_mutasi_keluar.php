<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa_mutasi_keluar extends CI_Model {

	public function get() {
		return $this->db->get('siswa_mutasi_keluar')->result();

		}

	public function get_nama($nisn) {
		$this->db->select('nama');
		$this->db->where('nisn', $nisn);
		return $this->db->get('siswa')->row();		
	}

	public function insert($data) {
		$this->db->insert('siswa_mutasi_keluar', $data);
	}

	public function delete($id) {
		$this->db->where('id_siswa_mutasi_keluar', $id);
		$this->db->delete('siswa_mutasi_keluar');
	}

	public function select($id) {
		$this->db->where('id_siswa_mutasi_keluar', $id);
		return $this->db->get('siswa_mutasi_keluar')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_siswa_mutasi_keluar', $id);
		$this->db->update('siswa_mutasi_keluar', $data);
	}

	public function get_pencatatan_keluar(){
		return $this->db->select('nisn, nama, sekolah_tujuan')
						->where ('status_siswa','Diterima')
						->get ('siswa_mutasi_keluar')
						->result();
	}

	public function hapus_siswa_mutasi($nisn)
	{
		$this->db->where('nisn', $nisn);
		$this->db->delete('siswa_kelas');

		$this->db->where('nisn', $nisn);
		$this->db->delete('akun');
	}

	public function get_data_cetak($nisn)
	{
		return	$this->db->select('nisn, nama, sekolah_tujuan')
						->where('nisn', $nisn)
						->get('siswa_mutasi_keluar')->row();

	}

	// public function get_data_cetak1($nisn)
	// {
	// 	return	$this->db->select('siswa_mutasi_keluar.nisn, siswa_mutasi_keluar.nama, siswa_mutasi_keluar.sekolah_tujuan, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.jenis_kelamin')
						
	// 					->join('siswa' , 'siswa_mutasi_keluar.nisn = siswa.nisn')
	// 					->get()->result();

	// }


	public function get_nama_sekolah()
	{
		return $this->db->get('setting')->row();

	}


}
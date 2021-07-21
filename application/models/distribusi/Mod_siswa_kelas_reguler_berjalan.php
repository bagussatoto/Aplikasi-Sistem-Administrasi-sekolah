<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa_kelas_reguler_berjalan extends CI_Model {

	private $table = 'siswa_kelas_reguler_berjalan';

	public function get() {
		return $this->db->get($this->table)->result();
	}

	public function insert($data) {
		$this->db->insert('siswa_kelas_reguler_berjalan', $data);
	}

	public function delete($id) {
		$this->db->where('id_siswa_kelas_reguler_berjalan', $id);
		$this->db->delete('siswa_kelas_reguler_berjalan');
	}

	public function select($id) {
		$this->db->where('id_siswa_kelas_reguler_berjalan', $id);
		return $this->db->get('siswa_kelas_reguler_berjalan')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_siswa_kelas_reguler_berjalan', $id);
		$this->db->update('siswa_kelas_reguler_berjalan', $data);
	}

	public function get_siswa_kelas_reguler_berjalan()
	{
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, s.agama, kr.nama_kelas')
						->from($this->table.' tb1')
						->join('siswa s', 's.nisn=tb1.nisn')
						->join('kelas_reguler_berjalan krb', 'tb1.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
						->join('kelas_reguler kr', 'krb.id_kelas_reguler=kr.id_kelas_reguler')
						->get()
						->result();
	}
	
}



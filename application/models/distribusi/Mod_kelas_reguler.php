<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kelas_reguler extends CI_Model {

	public function get() {
		return $this->db->get('kelas_reguler')->result();
	}

	public function getjoin() {
		$this->load->model('distribusi/mod_tahunajaran');
		$setting = $this->mod_tahunajaran->getaktif();

		$this->db->select('kelas_reguler.*, kelas_reguler_berjalan.id_kelas_reguler_berjalan, kelas_reguler_berjalan.wali_kelas');
		$this->db->join('kelas_reguler_berjalan', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler', 'left');
		$this->db->where('kelas_reguler_berjalan.id_tahun_ajaran', 1);//$setting->id_tahun_ajaran);
		return $this->db->get('kelas_reguler')->result();
	}

	public function getkelasreguler($where = array()) {
		$this->db->where($where);
		return $this->db->get('kelas_reguler')->result();
	}

	public function insert($data) {
		$this->db->insert('kelas_reguler', $data);
	}

	public function delete($id) {
		$this->db->where('id_kelas_reguler', $id);
		$this->db->delete('kelas_reguler');
	}

	public function select($id) {
		$this->db->where('id_kelas_reguler', $id);
		return $this->db->get('siswa')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_kelas_reguler', $id);
		$this->db->update('kelas_reguler', $data);
	}


	public function updatebyjenjang($data, $jenjang) {
		$this->db->where('jenjang', $jenjang);
		$this->db->update('kelas_reguler', $data);
	}
	
	
}



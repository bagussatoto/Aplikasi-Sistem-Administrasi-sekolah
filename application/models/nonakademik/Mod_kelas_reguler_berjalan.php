<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kelas_reguler_berjalan extends CI_Model {

	public function get($where = array()) {
		$this->db->where($where);
		return $this->db->get('kelas_reguler_berjalan')->result();
		}

	public function insert($data) {
		$this->db->insert('kelas_reguler_berjalan', $data);
	}

	public function delete($id) {
		$this->db->where('id_kelas_reguler_berjalan', $id);
		$this->db->delete('kelas_reguler_berjalan');
	}

	public function select($id) {
		$this->db->where('id_kelas_reguler_berjalan', $id);
		return $this->db->get('kelas_reguler_berjalan')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_kelas_reguler_berjalan', $id);
		$this->db->update('kelas_reguler_berjalan', $data);
	}
	
}



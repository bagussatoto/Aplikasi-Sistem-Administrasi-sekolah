<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_klinik_un extends CI_Model {

	public function get($nisn = null) {
		if (!empty($nisn)) {
			$this->db->where('nisn', $nisn);
		}
		return $this->db->get('klinik_un')->result();

		}

	public function insert($data) {
		$this->db->insert('klinik_un', $data);
	}

	public function delete($id) {
		$this->db->where('id_klinik_un', $id);
		$this->db->delete('klinik_un');
	}

	public function select($id) {
		$this->db->where('id_klinik_un', $id);
		return $this->db->get('klinik_un')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_klinik_un', $id);
		$this->db->update('klinik_un', $data);
	}
	
}



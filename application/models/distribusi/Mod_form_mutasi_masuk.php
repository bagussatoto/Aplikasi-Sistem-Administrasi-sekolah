<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_form_mutasi_masuk extends CI_Model {

	public function get() {
		return $this->db->get('form_pendaftaran_mutasi_masuk')->result();

		}

	public function insert($data) {
		$this->db->insert('siswa_mutasi_masuk', $data);
	}

	public function delete($id) {
		$this->db->where('id_form_pendaftaran_mutasi_masuk', $id);
		$this->db->delete('form_pendaftaran_mutasi_masuk');
	}

	public function select($id) {
		$this->db->where('id_form_pendaftaran_mutasi_masuk', $id);
		return $this->db->get('form_pendaftaran_mutasi_masuk')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_form_pendaftaran_mutasi_masuk', $id);
		$this->db->update('form_pendaftaran_mutasi_masuk', $data);
	}
	
}



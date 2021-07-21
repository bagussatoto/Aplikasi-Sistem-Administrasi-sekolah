<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_orangtua_wali extends CI_Model {

	public function get() {
		return $this->db->get('orangtua_wali')->result();
		}

	public function insert($data) {
		$this->db->insert('orangtua_wali', $data);
	}

	public function delete($id) {
		$this->db->where('id_orangtua', $id);
		$this->db->delete('orangtua_wali');
	}

	public function select($id) {
		$this->db->where('id_orangtua', $id);
		return $this->db->get('orangtua_wali')->row();		
	}

	public function getorangtua($id)
	{	
		return $this->db->select('*')
						->from('orangtua_wali')
						->join('siswa', 'siswa.id_orangtua=orangtua_wali.id_orangtua')
						->where('siswa.nisn', $id)
						->get()->row();
	}

	public function update($data, $id) {
		$this->db->where('id_orangtua', $id);
		$this->db->update('orangtua_wali', $data);
	}
	
}



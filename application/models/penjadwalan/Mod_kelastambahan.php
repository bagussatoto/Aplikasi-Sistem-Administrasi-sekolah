<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kelastambahan extends CI_Model {

	public function get(){
		return $this->db->get('kelas_tambahan')->result();
	}

	public function insert($data){
		$this->db->insert('kelas_tambahan', $data);
	}

	public function delete($id) {
		$this->db->where('id_kelas_tambahan',$id);
		$this->db->delete('kelas_tambahan');
	}

	public function select($id) {
		$this->db->where('id_kelas_tambahan',$id); 
		return $this->db->get('kelas_tambahan')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_kelas_tambahan',$id); 
		$this->db->update('kelas_tambahan', $data);		
	}
}
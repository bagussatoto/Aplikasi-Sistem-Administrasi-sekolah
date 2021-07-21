<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jenisklstambahan extends CI_Model {

	public function get(){
		return $this->db->get('jenis_kls_tambahan')->result();
	}

	public function insert($data){
		$this->db->insert('jenis_kls_tambahan', $data);
	}

	public function delete($id) {
		$this->db->where('id_jenis_kls_tambahan',$id);
		$this->db->delete('jenis_kls_tambahan');
	}

	public function select($id) {
		$this->db->where('id_jenis_kls_tambahan',$id); 
		return $this->db->get('jenis_kls_tambahan')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_jenis_kls_tambahan',$id); 
		$this->db->update('jenis_kls_tambahan', $data);		
	}

}
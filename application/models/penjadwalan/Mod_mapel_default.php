<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_mapel_default extends CI_Model {

	public function get(){
		return $this->db->get('mapel_default')->result();
	}

	public function insert($data){
		$this->db->insert('mapel_default', $data);
	}

	public function delete($id) {
		$this->db->where('id_mapel',$id);
		$this->db->delete('mapel_default');
	}

	public function select($id) {
		$this->db->where('id_mapel',$id); 
		return $this->db->get('mapel_default')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_mapel',$id); 
		$this->db->update('mapel_default', $data);		
	}
}
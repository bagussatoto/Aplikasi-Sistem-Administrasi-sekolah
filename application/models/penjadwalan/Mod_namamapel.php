<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_namamapel extends CI_Model {

	public function get(){
		return $this->db->get('namamapel')->result();
	}

	public function insert($data){
		$this->db->insert('namamapel', $data);
	}

	public function delete($id) {
		$this->db->where('id_namamapel',$id);
		$this->db->delete('namamapel');
	}

	public function select($id) {
		$this->db->where('id_namamapel',$id); 
		return $this->db->get('namamapel')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_namamapel',$id); 
		$this->db->update('namamapel', $data);		
	}
}
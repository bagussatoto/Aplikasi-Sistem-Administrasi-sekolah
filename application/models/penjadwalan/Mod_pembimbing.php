<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_pembimbing extends CI_Model {

	public function get(){
		return $this->db->get('pembimbing')->result();
	}

	public function insert($data){
		$this->db->insert('pembimbing', $data);
	}

	public function delete($id) {
		$this->db->where('id_pembimbing',$id);
		$this->db->delete('pembimbing');
	}

	public function select($id) {
		$this->db->where('id_pembimbing',$id); 
		return $this->db->get('pembimbing')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_pembimbing',$id); 
		$this->db->update('pembimbing', $data);		
	}
}
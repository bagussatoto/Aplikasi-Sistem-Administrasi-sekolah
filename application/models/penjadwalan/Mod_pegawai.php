<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_pegawai extends CI_Model {

	public function get($where = array(), $order = "Nama asc"){
		$this->db->where($where);
		$this->db->order_by($order);
		return $this->db->get('pegawai')->result();
	}

	public function get_array($where = array(), $order = "Nama asc"){
		$this->db->where($where);
		$this->db->order_by($order);
		return $this->db->get('pegawai')->result_array();
	}

	public function insert($data){
		$this->db->insert('pegawai', $data);
	}

	public function delete($id) {
		$this->db->where('NIP',$id);
		$this->db->delete('pegawai');
	}

	public function select($id) {
		$this->db->where('NIP',$id); 
		return $this->db->get('pegawai')->row();
	}

	public function select_array($id) {
		$this->db->where('NIP',$id); 
		return $this->db->get('pegawai')->row_array();
	}

	public function update($data, $id) {
		$this->db->where('NIP',$id); 
		$this->db->update('pegawai', $data);		
	}

}
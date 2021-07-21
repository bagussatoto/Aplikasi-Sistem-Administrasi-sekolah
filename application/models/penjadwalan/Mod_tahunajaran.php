<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_tahunajaran extends CI_Model {

	public function get(){
		return $this->db->get('tahunajaran')->result();
	}

	public function insert($data){
		$this->db->insert('tahunajaran', $data);
	}

	public function delete($id) {
		$this->db->where('id_tahun_ajaran',$id);
		$this->db->delete('tahunajaran');
	}

	public function select($id) {
		$this->db->where('id_tahun_ajaran',$id); 
		return $this->db->get('tahunajaran')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_tahun_ajaran',$id); 
		$this->db->update('tahunajaran', $data);		
	}

		public function getaktif(){
		$this->db->order_by('id_tahun_ajaran','desc');
		$this->db->limit(1);
		return $this->db->get('tahunajaran')->row();
	}

}
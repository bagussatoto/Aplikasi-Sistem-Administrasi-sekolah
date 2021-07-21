<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jadwalpiketguru extends CI_Model {

	public function get($where = array()){
		$this->db->join('pegawai', 'jadwal_piket_guru.NIP = pegawai.NIP', 'left');
		$this->db->where($where);
		$this->db->order_by('id_jdwl_piket_guru ASC');
		return $this->db->get('jadwal_piket_guru')->result();
	}

	public function insert($data){
		$this->db->insert('jadwal_piket_guru', $data);
	}

	public function delete($id) {
		$this->db->where('id_jdwl_piket_guru',$id);
		$this->db->delete('jadwal_piket_guru');
	}

	public function deletebytahunajaran($id_tahun_ajaran) {
		$this->db->where('id_tahun_ajaran',$id_tahun_ajaran);
		$this->db->delete('jadwal_piket_guru');
	}

	public function select($id) {
		$this->db->where('id_jdwl_piket_guru',$id); 
		return $this->db->get('jadwal_piket_guru')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_jdwl_piket_guru',$id); 
		$this->db->update('jadwal_piket_guru', $data);		
	}
}
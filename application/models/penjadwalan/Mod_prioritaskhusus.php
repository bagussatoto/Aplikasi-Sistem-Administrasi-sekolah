<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_prioritaskhusus extends CI_Model {

	public function get($where = array()){
		$this->db->join('namamapel', 'prioritas_khusus.id_namamapel = namamapel.id_namamapel', 'left');
		$this->db->join('pegawai', 'prioritas_khusus.NIP = pegawai.NIP', 'left');
		$this->db->where($where);
		return $this->db->get('prioritas_khusus')->result();
	}

	public function getguruprioritas($where = array()){
		$this->db->join('namamapel', 'prioritas_khusus.id_namamapel = namamapel.id_namamapel', 'left');
		$this->db->join('jam_mengajar', 'prioritas_khusus.id_namamapel = jam_mengajar.id_namamapel and prioritas_khusus.id_tahun_ajaran = jam_mengajar.id_tahun_ajaran', 'left');
		$this->db->join('pegawai', 'jam_mengajar.NIP = pegawai.NIP', 'left');
		$this->db->where($where);
		return $this->db->get('prioritas_khusus')->result();
	}

	public function getgurukhusus($where = array()){
		$this->db->where($where);
		return $this->db->get('prioritas_khusus')->result();
	}

	public function insert($data){
		$this->db->insert('prioritas_khusus', $data);
	}

	public function delete($id) {
		$this->db->where('id_prkh',$id);
		$this->db->delete('prioritas_khusus');
	}

	public function select($id) {
		$this->db->where('id_prkh',$id); 
		return $this->db->get('prioritas_khusus')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_prkh',$id); 
		$this->db->update('prioritas_khusus', $data);		
	}
}
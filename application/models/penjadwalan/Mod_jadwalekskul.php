<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jadwalekskul extends CI_Model {

	public function get(){
		$this->db->select('jadwal_ekskul.*, pembimbing.nama_pembimbing, jenis_kls_tambahan.jenis_kls_tambahan');
		$this->db->join('pembimbing', 'pembimbing.id_pembimbing=jadwal_ekskul.id_pembimbing', 'left');
		$this->db->join('jenis_kls_tambahan', 'jenis_kls_tambahan.id_jenis_kls_tambahan=jadwal_ekskul.id_jenis_kls_tambahan', 'left');
		return $this->db->get('jadwal_ekskul')->result();
	}

	public function insert($data){
		$this->db->insert('jadwal_ekskul', $data);
	}

	public function delete($id) {
		$this->db->where('id_jadwal_ekskul',$id);
		$this->db->delete('jadwal_ekskul');
	}

	public function select($id) {
		$this->db->where('id_jadwal_ekskul',$id); 
		return $this->db->get('jadwal_ekskul')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_jadwal_ekskul',$id); 
		$this->db->update('jadwal_ekskul', $data);		
	}


}
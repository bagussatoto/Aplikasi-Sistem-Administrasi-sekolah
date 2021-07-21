<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jadwaltambahan extends CI_Model {

	public function get($where = array()){
		$this->db->select('jadwal_tambahan.*, pegawai.Nama, kelas_tambahan.nama_kelas_tambahan, namamapel.nama_mapel');
		$this->db->join('pegawai', 'pegawai.NIP=jadwal_tambahan.NIP', 'left');
		$this->db->join('namamapel', 'namamapel.id_namamapel=jadwal_tambahan.id_namamapel', 'left');
		$this->db->join('kelas_tambahan', 'kelas_tambahan.id_kelas_tambahan=jadwal_tambahan.id_kelas_tambahan', 'left');
		$this->db->where($where);
		return $this->db->get('jadwal_tambahan')->result();
	}

	public function insert($data){
		$this->db->insert('jadwal_tambahan', $data);
	}

	public function delete($id) {
		$this->db->where('id_jadwal_tambahan',$id);
		$this->db->delete('jadwal_tambahan');
	}

	public function select($id) {
		$this->db->where('id_jadwal_tambahan',$id); 
		return $this->db->get('jadwal_tambahan')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_jadwal_tambahan',$id); 
		$this->db->update('jadwal_tambahan', $data);		
	}

}
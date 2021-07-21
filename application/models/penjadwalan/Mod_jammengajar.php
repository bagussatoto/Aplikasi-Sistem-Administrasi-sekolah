<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jammengajar extends CI_Model {

	public function get($where = array()){
		$this->db->select('jam_mengajar.*, pegawai.Nama, namamapel.nama_mapel, namamapel.warna, pegawai.kode_guru, pegawai.Golongan, pegawai.pangkat, pegawai.Pendidikan, pegawai.nama_panggilan ');
		$this->db->join('pegawai','pegawai.NIP=jam_mengajar.NIP', 'left');
		$this->db->join('namamapel','namamapel.id_namamapel=jam_mengajar.id_namamapel', 'left');
		$this->db->where($where);
		return $this->db->get('jam_mengajar')->result();
	}

	public function insert($data){
		$this->db->insert('jam_mengajar', $data);
	}

	public function delete($id) {
		$this->db->where('id_jam_mgjr',$id);
		$this->db->delete('jam_mengajar');
	}

	public function select($id) {
		$this->db->where('id_jam_mgjr',$id); 
		return $this->db->get('jam_mengajar')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_jam_mgjr',$id); 
		$this->db->update('jam_mengajar', $data);		
	}

	}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function proseslogin($username,$password){
		$this->db->where('password',$password);
		$this->db->where('NIP', $username);
		$this->db->or_where('nisn', $username);	
		return $this->db->get('akun')->row();	
	}

	public function getJabatanById($user){
		$this->db->select('j.nama_jabatan, j.url, p.Nama, p.foto, p.Status_pensiun, j.menuakses');
		$this->db->from('jabatan as j');
		$this->db->join('akun as a', 'j.id_jabatan = a.id_jabatan');
		$this->db->join('pegawai as p', 'p.NIP = a.NIP');
		$this->db->where('a.id_jabatan', $user->id_jabatan);
		$this->db->where('a.NIP', $user->NIP);
		return $this->db->get('akun')->row();
	}

	public function getJabatanSiswa($user){
		$this->db->select('j.nama_jabatan, j.url, s.nama AS Nama, s.foto');
		$this->db->from('jabatan as j');
		$this->db->join('akun as a', 'j.id_jabatan = a.id_jabatan');
		$this->db->join('siswa as s', 's.nisn = a.nisn');
		$this->db->where('a.id_jabatan', $user->id_jabatan);
		$this->db->where('a.nisn', $user->nisn);
		return $this->db->get('akun')->row();
	}
}

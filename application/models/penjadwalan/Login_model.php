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
		$this->db->select('j.nama_jabatan, j.url');
		$this->db->from('jabatan as j');
		$this->db->join('akun as a', 'j.id_jabatan = a.id_jabatan');
		$this->db->where('a.id_jabatan', $user->id_jabatan);
		return $this->db->get('akun')->row();
	}
}

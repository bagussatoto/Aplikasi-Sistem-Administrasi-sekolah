<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa extends CI_Model {

	public function get($jenjang) {
		return $this->db->where('jenjang', $jenjang)
						->get('siswa')->result();
	}

	public function getsiswa() {
		return $this->db->get('siswa')->result();

		}

	
	public function insert($data) {
		$this->db->insert('siswa', $data);
	}

	public function delete($id) {
		$this->db->where('nisn', $id);
		$this->db->delete('siswa');
	}

	public function select($id) {
		$this->db->where('nisn', $id);
		return $this->db->get('siswa')->row();		
	}

	public function update($data, $id) {
		$this->db->where('nisn', $id);
		$this->db->update('siswa', $data);
	}

	public function get_kelas($nisn) {
		return $this->db->select('kr.nama_kelas')
						->from('kelas_reguler kr')
						->join('kelas_reguler_berjalan krb', 'kr.id_kelas_reguler=krb.id_kelas_reguler')
						->join('siswa_kelas_reguler_berjalan skrb', 'skrb.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
						->where('skrb.nisn', $nisn)
						->get()->row();
	}

	public function selectbynisn($nisn)
	{
		$this->db->where('nisn', $nisn);
		return $this->db->get('akun')->row(); 
	}

	public function rowsiswa($id){
		return $this->db->get_where('siswa', array('nisn' => $id))->row();
	}

	public function get_siswa_mutasi($nisn) {
		return $this->db->select('*')
						->from('siswa')
						->join('siswa_mutasi_masuk', 'siswa_mutasi_masuk.nisn=siswa.nisn')
						->where('siswa.nisn', $nisn)
						->get()->row();
	}


	public function getsiswaortu($id_orangtua)
	{
		$this->db->where('id_orangtua', $id_orangtua);
		return $this->db->get('orangtua_wali')->row(); 
	}

	// public function getsiswaortu($id_orangtua)
	// {
	// 	$this->db->where('id_orangtua', $id_orangtua);
	// 	return $this->db->get('orangtua_wali')->row(); 
	// }
	
	
}




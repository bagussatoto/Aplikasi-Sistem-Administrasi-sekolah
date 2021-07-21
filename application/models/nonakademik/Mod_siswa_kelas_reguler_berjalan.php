<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa_kelas_reguler_berjalan extends CI_Model {

	private $table = 'siswa_kelas_reguler_berjalan';

	public function get() {
		return $this->db->get($this->table)->result();
	}

	public function insert($data) {
		$this->db->insert('siswa_kelas_reguler_berjalan', $data);
	}

	public function delete($id) {
		$this->db->where('id_siswa_kelas_reguler_berjalan', $id);
		$this->db->delete('siswa_kelas_reguler_berjalan');
	}

	public function select($id) {
		$this->db->where('id_siswa_kelas_reguler_berjalan', $id);
		return $this->db->get('siswa_kelas_reguler_berjalan')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_siswa_kelas_reguler_berjalan', $id);
		$this->db->update('siswa_kelas_reguler_berjalan', $data);
	}


	// public function getsetting(){
	// 	return $this->db->get('setting')->row();
	// }

	// public function get_siswa_kelas_reguler_berjalan($id_kelas_reguler_berjalan,$id_tahun_ajaran)
	// {
	// 	$this->db->join('siswa_kelas_reguler_berjalan','siswa_kelas_reguler_berjalan.nisn=siswa.nisn');
	// 	$this->db->join('kelas_reguler_berjalan','siswa_kelas_reguler_berjalan.id_kelas_reguler_berjalan=kelas_reguler_berjalan.id_kelas_reguler_berjalan');
	// 	$this->db->join('kelas_reguler','kelas_reguler.id_kelas_reguler=kelas_reguler_berjalan.id_kelas_reguler');
	// 	$this->db->where('kelas_reguler_berjalan.id_kelas_reguler_berjalan',$id_kelas_reguler_berjalan);
	// 	$this->db->where('kelas_reguler_berjalan.id_tahun_ajaran',$id_tahun_ajaran);
	// 	return $this->db->get('siswa')->result();
	// }
	
	public function get_siswa_kelas_reguler_berjalan($id_kelas_reguler)
	{
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, s.agama, kr.nama_kelas, jkl.jenis_kls_tambahan,eks.id_jenis_kls_tambahan, nks.nilai_ekskul')
		->from($this->table.' tb1')
		->join('siswa s', 's.nisn=tb1.nisn')
		->join('kelas_reguler_berjalan krb', 'tb1.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
		->join('kelas_reguler kr', 'krb.id_kelas_reguler=kr.id_kelas_reguler')
		->join('ekstrakurikuler eks', 'tb1.nisn=eks.nisn', 'left')
		->join('jenis_kls_tambahan jkl', 'eks.id_jenis_kls_tambahan=jkl.id_jenis_kls_tambahan', 'left')
		->join('nilaiekskul nks', 'eks.nisn=nks.nisn AND eks.id_jenis_kls_tambahan = nks.id_jenis_kls_tambahan', 'left')
		->where('kr.id_kelas_reguler = '.$id_kelas_reguler)
		->order_by('eks.nisn asc')
		->get()
		->result();
	}

	public function get_siswa_kelas_reguler_berjalan2($id_kelas_reguler, $id_tahun_ajaran)
	{
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, s.agama, kr.nama_kelas, jkl.jenis_kls_tambahan,eks.id_jenis_kls_tambahan, nks.nilai_ekskul')
		->from($this->table.' tb1')
		->join('siswa s', 's.nisn=tb1.nisn')
		->join('kelas_reguler_berjalan krb', 'tb1.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
		->join('kelas_reguler kr', 'krb.id_kelas_reguler=kr.id_kelas_reguler')
		->join('ekstrakurikuler eks', 'tb1.nisn=eks.nisn', 'left')
		->join('jenis_kls_tambahan jkl', 'eks.id_jenis_kls_tambahan=jkl.id_jenis_kls_tambahan', 'left')
		->join('nilaiekskul nks', 'eks.nisn=nks.nisn AND eks.id_jenis_kls_tambahan = nks.id_jenis_kls_tambahan', 'left')
		->where('kr.id_kelas_reguler = '.$id_kelas_reguler)
		->where('kr.id_tahun_ajaran = '.$id_tahun_ajaran)
		->order_by('eks.nisn asc')
		->get()
		->result();
	}

	public function get_siswa_kelas_reguler_berjalan3($id_kelas_reguler, $id_tahun_ajaran)
	{
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, s.agama, kr.nama_kelas')
		->from($this->table.' tb1')
		->join('siswa s', 's.nisn=tb1.nisn')
		->join('kelas_reguler_berjalan krb', 'tb1.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
		->join('kelas_reguler kr', 'krb.id_kelas_reguler=kr.id_kelas_reguler')
		->where('kr.id_kelas_reguler = '.$id_kelas_reguler)
		->where('kr.id_tahun_ajaran = '.$id_tahun_ajaran)
		->order_by('s.nisn asc')
		->get()
		->result();
	}

	public function get_siswa_ekskul($id_kelas_reguler){
		$this->db->join('siswa_kelas_reguler_berjalan','siswa_kelas_reguler_berjalan.nisn=siswa.nisn');
		$this->db->join('ekstrakurikuler','ekstrakurikuler.nisn=siswa_kelas_reguler_berjalan.nisn');
		$this->db->join('jenis_kls_tambahan','jenis_kls_tambahan.id_jenis_kls_tambahan=ekstrakurikuler.id_jenis_kls_tambahan');
		return $this->db->get('siswa')->result();
	}

	// public function get_ekskul_by_mahasiswa($nisn){
	// 	$this->db->select('jk.jenis_kls_tambahan')
	// 	$this->db->from('ekstrakurikuler as eks');
	// 	$this->db->where('eks.nisn', $nisn);
	// 	$this->db->join('jenis_kls_tambahan as jk', 'jk.id_jenis_kls_tambahan=eks.id_jenis_kls_tambahan');
	// }
	// public function get_all_kelas(){
 //            $q = $this->db
 //                        ->get('nilaiekskul')
 //                        ->result();
 //            return $q;
 //        }
}



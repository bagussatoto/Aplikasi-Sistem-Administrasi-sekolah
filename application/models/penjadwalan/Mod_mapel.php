<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_mapel extends CI_Model {

	public function get(){
		return $this->db->get('mapel')->result();
	}

	public function getgroupbyjenjang(){
		$this->db->select('mapel.id_namamapel, namamapel.nama_mapel as nama_mapel,mapel.kkm,mapel.jam_belajar,mapel.id_tahun_ajaran, kelas_reguler.jenjang, kelas_reguler.id_kelas_reguler');
		$this->db->join('namamapel', 'namamapel.id_namamapel=mapel.id_namamapel', 'left');
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler=mapel.id_kelas_reguler', 'left');
		$this->db->group_by('mapel.id_namamapel, namamapel.nama_mapel,mapel.kkm,mapel.jam_belajar,mapel.id_tahun_ajaran, kelas_reguler.jenjang, kelas_reguler.id_kelas_reguler');
		$this->db->order_by('mapel.id_namamapel, namamapel.nama_mapel,mapel.kkm,mapel.jam_belajar,mapel.id_tahun_ajaran, kelas_reguler.jenjang');
		return $this->db->get('mapel')->result();
	}

	public function getgroupbyjenjang2(){
		$this->db->select('mapel.id_namamapel, namamapel.nama_mapel as nama_mapel,mapel.kkm,mapel.jam_belajar,mapel.id_tahun_ajaran, kelas_reguler.jenjang, kelas_reguler.id_kelas_reguler, (SELECT COUNT(jenjang) FROM kelas_reguler kr WHERE kr.jenjang = kelas_reguler.jenjang) AS totalkelas');
		$this->db->join('namamapel', 'namamapel.id_namamapel=mapel.id_namamapel', 'left');
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler=mapel.id_kelas_reguler', 'left');
		$this->db->group_by('mapel.id_namamapel, namamapel.nama_mapel,mapel.kkm,mapel.jam_belajar,mapel.id_tahun_ajaran, kelas_reguler.jenjang, kelas_reguler.id_kelas_reguler');
		$this->db->order_by('mapel.id_namamapel, namamapel.nama_mapel,mapel.kkm,mapel.jam_belajar,mapel.id_tahun_ajaran, kelas_reguler.jenjang');
		return $this->db->get('mapel')->result();
	}

	public function getmapelbyjenjang($jenjang) {
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler = mapel.id_kelas_reguler');
		$this->db->where('kelas_reguler.jenjang', $jenjang);
		return $this->db->get('mapel')->result_array();
	}

	public function insert($data){
		$this->db->insert('mapel', $data);
	}

	public function delete($id) {
		$this->db->where('id_mapel',$id);
		$this->db->delete('mapel');
	}

	public function deletebyidkelasregulermapel($id_kelas_reguler, $id_namamapel) {
		$this->db->where('id_kelas_reguler',$id_kelas_reguler);
		//$this->db->where("REPLACE(nama_mapel, ' ', '_') = '".$nama_mapel."'");
		$this->db->where("id_namamapel", $id_namamapel);
		$this->db->delete('mapel');
	}
	public function select($id) {
		$this->db->where('id_mapel',$id); 
		return $this->db->get('mapel')->row();
	}

	public function selectbynamajenjang($nama_mapel, $jenjang) {
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler=mapel.id_kelas_reguler', 'left');
		$this->db->where('nama_mapel',$nama_mapel); 
		$this->db->where('jenjang',$jenjang); 
		return $this->db->get('mapel')->row();
	}

	public function selectbyidnamajenjang($id_namamapel, $jenjang) {
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler=mapel.id_kelas_reguler', 'left');
		$this->db->where('id_namamapel',$id_namamapel); 
		$this->db->where('jenjang',$jenjang); 
		return $this->db->get('mapel')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_mapel',$id); 
		$this->db->update('mapel', $data);		
	}

	public function updatebynamaidkelasreguler($data, $id_kelas_reguler, $nama_mapel) {
		$this->db->where('nama_mapel',$nama_mapel); 
		$this->db->where('id_kelas_reguler',$id_kelas_reguler); 
		$this->db->update('mapel', $data);		
	}

	public function updatebyidnamaidkelasreguler($data, $id_kelas_reguler, $id_namamapel) {
		$this->db->where('id_namamapel',$id_namamapel); 
		$this->db->where('id_kelas_reguler',$id_kelas_reguler); 
		$this->db->update('mapel', $data);		
	}

	public function updatebynamajenjang($data, $id) {
		$this->db->where('id_mapel',$id); 
		$this->db->update('mapel', $data);		
	}

	public function cekmapel($nama_mapel, $grade){
		$this->db->where('nama_mapel',$nama_mapel); 
		$this->db->where('grade',$grade); 
		return $this->db->get('mapel')->num_rows();
	}

	public function cekdatamapel($id_namamapel, $id_kelas_reguler){
		$this->db->where('id_namamapel',$id_namamapel); 
		$this->db->where('id_kelas_reguler',$id_kelas_reguler); 
		return $this->db->get('mapel')->num_rows();
	}

	// public function get(){
	// 	return $this->db->get('jadwal_ekskul')->result();
	// }

	// public function insert($data){
	// 	$this->db->insert('jadwal_ekskul', $data);
	// }

	// public function delete($id) {
	// 	$this->db->where('id_jadwal_ekskul',$id);
	// 	$this->db->delete('jadwal_ekskul');
	// }

	// public function select($id) {
	// 	$this->db->where('id_jadwal_ekskul',$id); 
	// 	return $this->db->get('jadwal_ekskul')->row();
	// }

	// public function update($data, $id) {
	// 	$this->db->where('id_jadwal_ekskul',$id); 
	// 	$this->db->update('jadwal_ekskul', $data);		
	// }
}
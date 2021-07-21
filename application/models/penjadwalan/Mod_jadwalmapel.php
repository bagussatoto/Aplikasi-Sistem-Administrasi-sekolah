<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jadwalmapel extends CI_Model {

	public function get($where = array()){
		$this->db->where($where);
		return $this->db->get('jadwal_mapel')->result();
	}

	public function getjadwal($where = array()){
		$this->db->select('jadwal_mapel.*, namamapel.nama_mapel, pegawai.Nama, kelas_reguler.nama_kelas, hari_rentang.jam_mulai, hari_rentang.jam_selesai');
		$this->db->join('namamapel', 'namamapel.id_namamapel = jadwal_mapel.id_namamapel', 'left');
		$this->db->join('pegawai', 'pegawai.NIP = jadwal_mapel.NIP', 'left');
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler = jadwal_mapel.id_kelas_reguler', 'left');
		$this->db->join('hari_rentang', 'hari_rentang.jam_ke = jadwal_mapel.jam_ke AND hari_rentang.hari = jadwal_mapel.hari', 'left');
		$this->db->where($where);
		return $this->db->get('jadwal_mapel')->result();
	}

	public function getjadwalmapel($where = array()){


		$this->db->select('SEC_TO_TIME(SUM(TIME_TO_SEC(TIMEDIFF(hari_rentang.jam_selesai, hari_rentang.jam_mulai)))) AS total_durasi');
		$this->db->join('hari_rentang','jadwal_mapel.jam_ke = hari_rentang.jam_ke AND jadwal_mapel.hari = hari_rentang.hari AND jadwal_mapel.id_tahun_ajaran = hari_rentang.id_tahun_ajaran', 'left');
		$this->db->where($where);
		return $this->db->get('jadwal_mapel')->result();	
	}

	

	public function insert($data){
		$this->db->insert('jadwal_mapel', $data);
	}

	public function delete($id) {
		$this->db->where('id_jadwal_mapel',$id);
		$this->db->delete('jadwal_mapel');
	}

	public function select($id) {
		$this->db->where('id_jadwal_mapel',$id); 
		return $this->db->get('jadwal_mapel')->row();
	}

	public function update($data, $id) {
		$this->db->where('id_jadwal_mapel',$id); 
		$this->db->update('jadwal_mapel', $data);		
	}

	public function deletejadwal($data) {
		$this->db->where($data);
		$this->db->delete('jadwal_mapel');
	}
}
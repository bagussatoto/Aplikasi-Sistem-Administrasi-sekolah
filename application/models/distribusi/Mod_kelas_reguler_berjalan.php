<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kelas_reguler_berjalan extends CI_Model {

	public function get() {

		return $this->db->get('kelas_reguler_berjalan')->result();
		}

	public function getjenjang($jenjang) {
		$this->load->model('distribusi/mod_tahunajaran');
		$setting = $this->mod_tahunajaran->getaktif();

		$this->db->select('kelas_reguler_berjalan.*, kelas_reguler.nama_kelas');
		$this->db->join('kelas_reguler_berjalan', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler', 'left');
		$this->db->where('kelas_reguler_berjalan.id_tahun_ajaran', $setting->id_tahun_ajaran);
		$this->db->where('jenjang', $jenjang);
		return $this->db->get('kelas_reguler')->result();
	}

	public function getjoin() {
		$this->load->model('distribusi/mod_tahunajaran');
		$setting = $this->mod_tahunajaran->getaktif();

		$this->db->select('kelas_reguler_berjalan.*, kelas_reguler.nama_kelas');
		$this->db->join('kelas_reguler_berjalan', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler', 'left');
		$this->db->where('kelas_reguler_berjalan.id_tahun_ajaran', 1);//$setting->id_tahun_ajaran);
		return $this->db->get('kelas_reguler')->result();
	}

	public function insert($data) {
		$this->db->insert('kelas_reguler_berjalan', $data);
	}

	public function delete($id) {
		$this->db->where('id_kelas_reguler_berjalan', $id);
		$this->db->delete('kelas_reguler_berjalan');
	}

	public function select($id) {
		$this->db->where('id_kelas_reguler_berjalan', $id);
		return $this->db->get('kelas_reguler_berjalan')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_kelas_reguler_berjalan', $id);
		$this->db->update('kelas_reguler_berjalan', $data);
	}

	public function get_siswa($id_kelas_reguler) {
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, s.agama')
						->from('siswa s')
						->join('siswa_kelas_reguler_berjalan skrb', 's.nisn=skrb.nisn')
						->join('kelas_reguler_berjalan krb', 'skrb.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
						->where('krb.id_kelas_reguler', $id_kelas_reguler)
						->get()->result();
	}

	

	

	
}



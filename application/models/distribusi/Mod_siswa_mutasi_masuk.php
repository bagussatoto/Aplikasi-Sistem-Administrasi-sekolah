<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa_mutasi_masuk extends CI_Model {

	public function get() {
		return $this->db->get('siswa_mutasi_masuk')->result();

		}

	public function insert($data) {
		$this->db->insert('siswa_mutasi_masuk', $data);
	}

	public function delete($id) {
		$this->db->where('id_pendaftar_mutasi', $id);
		$this->db->delete('siswa_mutasi_masuk');
	}

	public function select($id) {
		$this->db->where('id_pendaftar_mutasi', $id);
		return $this->db->get('siswa_mutasi_masuk')->row();		
	}

	public function selectsiswa($nisn) {
		$this->db->where('nisn_pendaftar_mutasi', $nisn);
		return $this->db->get('siswa_mutasi_masuk')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_pendaftar_mutasi', $id);
		$this->db->update('siswa_mutasi_masuk', $data);
	}

	public function updatemutasi($data, $id) {
		$this->db->where('nisn_pendaftar_mutasi', $id);
		$this->db->update('siswa_mutasi_masuk', $data);
	}

	public function hapusmutasi($id) {
		$this->db->where('nisn_pendaftar_mutasi', $id);
		$this->db->delete('siswa_mutasi_masuk');
	}

	public function get_pencatatan(){
		return $this->db->select('smm.nisn_pendaftar_mutasi, smm.nama_pendaftar_mutasi, smm.sekolah_asal, kr.nama_kelas')
						->from('siswa_mutasi_masuk smm')
						->join('siswa_kelas_reguler_berjalan skrb', 'smm.nisn_pendaftar_mutasi=skrb.nisn', 'left')
						->join('kelas_reguler_berjalan krb', 'skrb.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan', 'left')
						->join('kelas_reguler kr', 'kr.id_kelas_reguler=krb.id_kelas_reguler', 'left')
						->where ('smm.status_siswa','Diterima')
						->get ()
						->result();
	} //pelajarin ay :)))

	public function getlolos($tahun_ajaran = NULL)	//nyari nisn yang statusnya lolos mutasi
	{
		$this->db->join('tahunajaran', 'siswa_mutasi_masuk.id_tahun_ajaran = tahunajaran.id_tahun_ajaran', 'left');
		if ($tahun_ajaran != NULL) {
			$this->db->where('tahunajaran.tahun_ajaran', $tahun_ajaran);
		}
		$this->db->where('status_siswa', 'Diterima')->order_by('siswa_mutasi_masuk.id_tahun_ajaran desc')
													->order_by('siswa_mutasi_masuk.nama_pendaftar_mutasi asc');
		return $this->db->get('siswa_mutasi_masuk')->result(); 
	}


	public function get_kelas_aktif(){
		
		$this->db->select('jadwal_tambahan.*, pegawai.Nama, kelas_tambahan.kelas_tambahan, namamapel.nama');
		$this->db->join('pegawai', 'pegawai.NIP=jadwal_tambahan.NIP', 'left');
		$this->db->join('namamapel', 'namamapel.id_namamapel=jadwal_tambahan.id_namamapel', 'left');
		$this->db->join('kelas_tambahan', 'kelas_tambahan.id_kelas_tambahan=jadwal_tambahan.id_kelas_tambahan', 'left');
		return $this->db->get('jadwal_tambahan')->result();
	}

	public function get_tahun_ajaran_aktif()
	{
		return $this->db->select('tahun_ajaran')
						->from('tahunajaran ta')
						->join('setting s', 'ta.id_tahun_ajaran=s.id_tahun_ajaran')
						->get()->row();
	}

	}

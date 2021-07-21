<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa_kelas extends CI_Model {

	public function get($jenjang) {
		return $this->db->where('jenjang', $jenjang)
						->get('siswa_kelas')->result();
	}

	

	public function getprestasi($jenjang) {
		$this->load->model('distribusi/mod_tahunajaran');
		$setting = $this->mod_tahunajaran->getaktif();

		$this->db->select('siswa_kelas.nisn, siswa_kelas.nama, siswa_kelas.agama, siswa_kelas.jenis_kelamin');
		//$this->db->join('pendaftar_ppdb', 'pendaftar_ppdb.nisn_pendaftar = siswa_kelas.nisn');
		$this->db->where('jenjang', $jenjang);
		$this->db->where('id_tahun_ajaran', $setting->id_tahun_ajaran);
		$this->db->order_by('nilai_un_nun desc, total_nilai desc');
		return $this->db->get('siswa_kelas')->result();
		}

	public function getkuartil($jenjang, $jk) {
		$this->load->model('distribusi/mod_tahunajaran');
		$setting = $this->mod_tahunajaran->getaktif();

		$this->db->select('siswa_kelas.nisn, siswa_kelas.nama, siswa_kelas.agama, siswa_kelas.jenis_kelamin, siswa_kelas.total_nilai, siswa_kelas.total_nilai_kenaikan, siswa_kelas.nilai_un_nun, siswa_kelas.prestasi_or, siswa_kelas.prestasi_tahfidz, kelas_reguler.nama_kelas');
		//$this->db->join('pendaftar_ppdb', 'pendaftar_ppdb.nisn_pendaftar = siswa_kelas.nisn');

		$this->db->join('siswa_kelas_reguler_berjalan', 'siswa_kelas_reguler_berjalan.nisn=siswa_kelas.nisn', 'left');
		$this->db->join('kelas_reguler_berjalan', 'kelas_reguler_berjalan.id_kelas_reguler_berjalan=siswa_kelas_reguler_berjalan.id_kelas_reguler_berjalan', 'left');
		$this->db->join('kelas_reguler', 'kelas_reguler_berjalan.id_kelas_reguler=kelas_reguler.id_kelas_reguler', 'left');
		$this->db->where("(kelas_reguler_berjalan.id_tahun_ajaran = '$setting->id_tahun_ajaran' OR kelas_reguler_berjalan.id_tahun_ajaran IS NULL) AND siswa_kelas.jenjang = '$jenjang' AND siswa_kelas.jenis_kelamin = '$jk' AND siswa_kelas.id_tahun_ajaran = '$setting->id_tahun_ajaran'");
		
		//$this->db->where('siswa_kelas.jenjang', $jenjang);
		//$this->db->where('siswa_kelas.jenis_kelamin', $jk);
		//$this->db->where('siswa_kelas.id_tahun_ajaran', $setting->id_tahun_ajaran);
		if ($jenjang == 7) {
			$this->db->order_by('(CASE WHEN total_nilai > 0 THEN total_nilai ELSE nilai_un_nun END) desc');
		} else {
			$this->db->order_by('total_nilai_kenaikan desc');
		}
		
		return $this->db->get('siswa_kelas')->result();
		echo $this->db->last_query();
		}

	public function insert($data) {
		$this->db->insert('siswa_kelas', $data);
	}

	public function insert_from_siswa() {
		$sql  = "INSERT INTO siswa_kelas (nisn, nama, jenis_kelamin, agama, id_tahun_ajaran) ";
		$sql .= "SELECT nisn, nama, jenis_kelamin, agama, id_tahun_ajaran FROM siswa ";
		$sql .= "WHERE siswa.id_tahun_ajaran = (SELECT id_tahun_ajaran FROM setting LIMIT 1)";
		$sql .= "AND siswa.nisn NOT IN (SELECT nisn FROM siswa_kelas WHERE id_tahun_ajaran = (SELECT id_tahun_ajaran FROM setting LIMIT 1))";

		return $this->db->query($sql);
	}

	// public function insert_from_pendaftar_ppdb() { //bikin ini dulu, buat copy data siswa yang berdasarkan prestasi, copy dr ppdb ke siswa kelasss
	// 	$sql  = "INSERT INTO siswa_kelas (nisn, nama, jenjang, agama, jenis_kelamin, total_nilai, nilai_un_nun, id_tahun_ajaran) ";
	// 	$sql .= "SELECT nisn_pendaftar, nama, '7', agama, jenis_kelamin, total_nilai, nilai_un_nun, id_tahun_ajaran FROM pendaftar_ppdb ";
	// 	$sql .= "WHERE pendaftar_ppdb.id_tahun_ajaran = (SELECT id_tahun_ajaran FROM setting LIMIT 1)";

	// 	return $this->db->query($sql);
	// }

	public function update_siswa_kelas_nilai()
	{
		
		$sql = "UPDATE siswa_kelas";
		$sql .=" INNER JOIN pendaftar_ppdb ON siswa_kelas.nisn = pendaftar_ppdb.nisn_pendaftar";
		$sql .= " SET siswa_kelas.nilai_un_nun = pendaftar_ppdb.nilai_un_nun, siswa_kelas.total_nilai=pendaftar_ppdb.total_nilai";
		$sql .= " WHERE siswa_kelas.jenjang ='7'";


		return $this->db->query($sql);
		
	}

	public function update_siswa_kelas_prestasi()
	{
		$sql = "UPDATE siswa_kelas";
		$sql .=" INNER JOIN tabel_sementara_simpan_prestasi ON siswa_kelas.nisn = tabel_sementara_simpan_prestasi.nisn";
		
		$sql .= " SET siswa_kelas.prestasi_or = tabel_sementara_simpan_prestasi.prestasi_or , siswa_kelas.prestasi_tahfidz = tabel_sementara_simpan_prestasi.prestasi_tahfidz";
		$sql .= " WHERE siswa_kelas.jenjang ='7'";


		return $this->db->query($sql);
		
	}

	public function delete($id) {
		$this->db->where('id_siswa_kelas', $id);
		$this->db->delete('siswa_kelas');
	}

	public function select($id) {
		$this->db->where('id_siswa_kelas', $id);
		return $this->db->get('siswa_kelas')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_siswa_kelas', $id);
		$this->db->update('siswa_kelas', $data);

	}


	public function hitungjumlahjk($jenjang){
		$this->db->select("COUNT(jenis_kelamin) as jumlah, jenis_kelamin");
		$this->db->where('jenjang', $jenjang);
		$this->db->group_by('jenis_kelamin');
		return $this->db->get('siswa_kelas')->result();
	}

	public function getnilai($jenis_kelamin, $jenjang)
	{
		$this->db->select('nisn, total_nilai');
		$this->db->where('jenjang', $jenjang);
		$this->db->where('jenis_kelamin', $jenis_kelamin);
		$this->db->order_by('total_nilai asc');
		return $this->db->get('siswa_kelas')->result();

	}

}



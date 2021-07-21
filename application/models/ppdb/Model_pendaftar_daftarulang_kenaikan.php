 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pendaftar_daftarulang_kenaikan extends CI_Model {

	public function get()
	{
		return $this->db->get('pendaftar_daftarulang_kenaikan')->result(); 
	}

	public function insert($data) {
		$this->db->insert('pendaftar_daftarulang_kenaikan', $data);
	}

	public function select($id)
	{
		$this->db->where('nisn', $id);
		return $this->db->get('pendaftar_daftarulang_kenaikan')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('nisn', $id);
		$this->db->update('pendaftar_daftarulang_kenaikan', $data);
	}	

	public function delete($id) {
		$this->db->where('nisn', $id);
		$this->db->delete('pendaftar_daftarulang_kenaikan');
	}	

	public function getsiswa()   // nama dan tahun ajaran
	{
		$this->db->join('siswa', 'pendaftar_daftarulang_kenaikan.nisn = siswa.nisn', 'left'); //nama
		$this->db->join('tahunajaran', 'pendaftar_daftarulang_kenaikan.id_tahun_ajaran = tahunajaran.id_tahun_ajaran', 'left'); //tahun angkatan
		return $this->db->get('pendaftar_daftarulang_kenaikan')->result(); 
	}

	// public function cekpendaftarkenaikan($id) //nyari udah daftar ulang kelas atau belum
	// {
	// 	$this->db->where(('nisn', $nisn) && ('id_tahun_ajaran', $id_tahun_ajaran));
	// 	return $this->db->get('pendaftar_daftarulang_kenaikan')->result(); 	
	// }
}

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

	public function get()
	{
		return $this->db->get('siswa')->result(); 
	}

	public function insert($data) {
		$this->db->insert('siswa', $data);
	}

	public function select($id)
	{
		$this->db->where('nisn', $id);
		return $this->db->get('siswa')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('nisn', $id);
		$this->db->update('siswa', $data);
	}	

	public function delete($id) {
		$this->db->where('nisn', $id);
		$this->db->delete('siswa');
	}	

	public function getsiswaangkatan()
	{
		// $this->db->join('tahunajaran', 'siswa.id_tahunajaran = tahunajaran.id_tahun_ajaran', 'left');
		// $this->db->order_by('id_tahunajaran desc');
		return $this->db->get('siswa')->result(); 
		// return $this->db->get_where('siswa', array('nisn' => $id))->row();
	}

	public function getsiswaortu($id_orangtua)
	{
		$this->db->where('id_orangtua', $id_orangtua);
		return $this->db->get('orangtua_wali')->row(); 
	}

	public function getsiswakenaikan($nisn)
	{
		$this->db->where('nisn', $nisn);
		return $this->db->get('pendaftar_daftarulang_kenaikan')->row(); 
	}
}

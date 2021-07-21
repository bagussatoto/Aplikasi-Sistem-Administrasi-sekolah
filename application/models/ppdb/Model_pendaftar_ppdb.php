 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pendaftar_ppdb extends CI_Model {

	public function get()
	{
		$this->db->order_by('nomor_pendaftaran');
		return $this->db->get('pendaftar_ppdb')->result(); 
	}

	public function insert($data) 
	{
		$this->db->insert('pendaftar_ppdb', $data);
	}

	public function select($id)
	{
		$this->db->where('nisn_pendaftar', $id);
		return $this->db->get('pendaftar_ppdb')->row(); 
	}

	public function update($data, $id) 
	{
		$this->db->where('nisn_pendaftar', $id);
		$this->db->update('pendaftar_ppdb', $data);
	}	

	public function delete($id) 
	{
		$this->db->where('nisn_pendaftar', $id);
		$this->db->delete('pendaftar_ppdb');
	}	

	// public function getlolos()	//nyari nisn yang statusnya lolos ppdb
	// {
	// 	$this->db->where('status_siswa', 'Diterima')->order_by('nama');
	// 	return $this->db->get('pendaftar_ppdb')->result(); 
	// }

	public function getlolos($tahun_ajaran = NULL)	//nyari nisn yang statusnya lolos ppdb
	{
		$this->db->join('tahunajaran', 'pendaftar_ppdb.id_tahun_ajaran = tahunajaran.id_tahun_ajaran', 'left');
		if ($tahun_ajaran != NULL) {
			$this->db->where('tahunajaran.tahun_ajaran', $tahun_ajaran);
		}
		$this->db->where('status_siswa', 'Diterima')->order_by('pendaftar_ppdb.id_tahun_ajaran desc')
													->order_by('pendaftar_ppdb.nama asc');
		return $this->db->get('pendaftar_ppdb')->result(); 
	}

	public function getpendaftar() //pendaftar aktif
	{
		$this->load->model('kesiswaan/Model_tahunajaran');
		$aktif=$this->Model_tahunajaran->getaktif()->id_tahun_ajaran;
		$this->db->where('pendaftar_ppdb.id_tahun_ajaran', $aktif);
		
		$this->db->join('tahunajaran', 'pendaftar_ppdb.id_tahun_ajaran = tahunajaran.id_tahun_ajaran', 'left');

		$this->db->order_by('pendaftar_ppdb.id_tahun_ajaran desc');
		return $this->db->get('pendaftar_ppdb')->result(); 
	}


	public function getsiswaangkatan($tahun_ajaran = NULL)
	{
		$this->db->join('tahunajaran', 'pendaftar_ppdb.id_tahun_ajaran = tahunajaran.id_tahun_ajaran', 'left');
		if ($tahun_ajaran != NULL) {
			$this->db->where('tahunajaran.tahun_ajaran', $tahun_ajaran);
		}
		$this->db->order_by('pendaftar_ppdb.id_tahun_ajaran desc')
				 ->order_by('pendaftar_ppdb.nomor_pendaftaran asc');
		return $this->db->get('pendaftar_ppdb')->result(); 
	}

	public function get_tahun_ajaran_aktif()
	{
		return $this->db->select('tahun_ajaran')
						->from('tahunajaran ta')
						->join('setting s', 'ta.id_tahun_ajaran=s.id_tahun_ajaran')
						->get()->row();
	}
}


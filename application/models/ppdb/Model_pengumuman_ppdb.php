 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengumuman_ppdb extends CI_Model {

	public function get()
	{
		$this->db->order_by('id_pengumuman_ppdb desc');
		return $this->db->get('pengumuman_ppdb')->result(); 
	}

	public function insert($data) {
		$this->db->insert('pengumuman_ppdb', $data);
	}

	public function select($id)
	{
		$this->db->where('id_pengumuman_ppdb', $id);
		return $this->db->get('pengumuman_ppdb')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_pengumuman_ppdb', $id);
		$this->db->update('pengumuman_ppdb', $data);
	}	

	public function delete($id) {
		$this->db->where('id_pengumuman_ppdb', $id);
		$this->db->delete('pengumuman_ppdb');
	}	
}

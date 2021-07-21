 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ketentuan_ppdb extends CI_Model {

	public function get()
	{
		$this->db->order_by('id_ketentuan desc');
		return $this->db->get('ketentuan_ppdb')->result(); 
	}

	public function insert($data) {
		$this->db->insert('ketentuan_ppdb', $data);
	}

	public function select($id)
	{
		$this->db->where('id_ketentuan', $id);
		return $this->db->get('ketentuan_ppdb')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_ketentuan', $id);
		$this->db->update('ketentuan_ppdb', $data);
	}	

	public function delete($id) {
		$this->db->where('id_ketentuan', $id);
		$this->db->delete('ketentuan_ppdb');
	}	
}

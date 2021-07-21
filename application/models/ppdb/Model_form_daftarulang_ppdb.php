 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form_daftarulang_ppdb extends CI_Model {

	public function get()
	{
		return $this->db->get('form_daftarulang_ppdb')->result(); 
	}

	public function insert($data) {
		$this->db->insert('form_daftarulang_ppdb', $data);
	}

	public function select($id)
	{
		$this->db->where('id_form_daftarulang_ppdb', $id);
		return $this->db->get('form_daftarulang_ppdb')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_form_daftarulang_ppdb', $id);
		$this->db->update('form_daftarulang_ppdb', $data);
	}	

	public function delete($id) {
		$this->db->where('id_form_daftarulang_ppdb', $id);
		$this->db->delete('form_daftarulang_ppdb');
	}	

	public function cekaktif()
	{
		$this->db->where('nilai', '1');
		return $this->db->get('form_daftarulang_ppdb')->result(); 
	}	
}

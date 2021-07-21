 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form_daftarulang_kenaikan extends CI_Model {

	public function get()
	{
		return $this->db->get('form_daftarulang_kenaikan')->result(); 
	}

	public function insert($data) {
		$this->db->insert('form_daftarulang_kenaikan', $data);
	}

	public function select($id)
	{
		$this->db->where('id_form_daftarulang_kenaikan', $id);
		return $this->db->get('form_daftarulang_kenaikan')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_form_daftarulang_kenaikan', $id);
		$this->db->update('form_daftarulang_kenaikan', $data);
	}	

	public function delete($id) {
		$this->db->where('id_form_daftarulang_kenaikan', $id);
		$this->db->delete('form_daftarulang_kenaikan');
	}

	public function cekaktif()
	{
		$this->db->where('nilai', '1');
		return $this->db->get('form_daftarulang_kenaikan')->result(); 
	}	
}

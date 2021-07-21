 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form_ujian extends CI_Model {

	public function get()
	{
		return $this->db->get('form_ujian')->result(); 
	}

	public function insert($data) {
		$this->db->insert('form_ujian', $data);
	}

	public function select($id)
	{
		$this->db->where('id_form_ujian', $id);
		return $this->db->get('form_ujian')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_form_ujian', $id);
		$this->db->update('form_ujian', $data);
	}	

	public function delete($id) {
		$this->db->where('id_form_ujian', $id);
		$this->db->delete('form_ujian');
	}	
}

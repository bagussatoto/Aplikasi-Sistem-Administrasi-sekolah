 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_akun extends CI_Model {

	public function get()
	{
		return $this->db->get('akun')->result(); 
	}

	public function insert($data) 
	{
		$this->db->insert('akun', $data);
	}

	public function select($id)
	{
		$this->db->where('id_akun', $id);
		return $this->db->get('akun')->row(); 
	}

	public function update($data, $id) 
	{
		$this->db->where('id_akun', $id);
		$this->db->update('akun', $data);
	}	

	public function delete($id) 
	{
		$this->db->where('id_akun', $id);
		$this->db->delete('akun');
	}	

	public function selectbynisn($nisn)
	{
		$this->db->where('nisn', $nisn);
		return $this->db->get('akun')->row(); 
	}

}

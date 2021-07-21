<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_pengumuman_mutasi extends CI_Model {

	public function get() {
		return $this->db->get('pengumuman_mutasi')->result();

	}

	public function insert($data) {
		return $this->db->insert('pengumuman_mutasi', $data);
	}

	public function forcefile() {
		$requsted_file = $this->uri->segment(4);
		$this->load->helper('download');
		$this->db->select('*');
		$this->db->where('id_pengumuman',$requsted_file);
		$query = $this->db->get('pengumuman_mutasi');
		$data = $query->first_row('array');
		
		$path = base_url().$data['file_pengumuman'];
		$file_data = file_get_contents($path);
		$file_name = $data['id_pengumuman'];
		force_download(basename($path), $file_data);

	}


	public function delete($id) {
		$this->db->where('id_pengumuman', $id);
		$this->db->delete('pengumuman_mutasi');
	}

	public function select($id) {
		$this->db->where('id_pengumuman', $id);
		return $this->db->get('pengumuman_mutasi')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_pengumuman_mutasi', $id);
		$this->db->update('pengumuman_mutasi', $data);
	}


	
}



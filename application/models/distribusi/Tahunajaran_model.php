<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahunajaran_model extends CI_Model {

	public function Gettahunajaran($where = array()){
		$this->db->where($where);
		$data= $this->db->get('tahunajaran');
		return $data;
	}

	public function rowTahunajaran($id){
		return $this->db->get_where('tahunajaran', array('id_tahun_ajaran' => $id))->row();
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	public function Getdatsetting($where = array()){
		$this->db->where($where);
		$data= $this->db->get('setting');
		return $data;
	}

	public function rowSetting($id){
		$this->db->join('tahunajaran', 'tahunajaran.id_tahun_ajaran = setting.id_tahun_ajaran');
		$this->db->where(array('id_setting' => $id));
		return $this->db->get('setting')->row();
	}

	public function getsetting(){
		$this->db->join('tahunajaran', 'tahunajaran.id_tahun_ajaran = setting.id_tahun_ajaran');
		$this->db->order_by('id_setting asc');
		return $this->db->get('setting')->row();
	}
}

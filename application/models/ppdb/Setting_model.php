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

	public function get_setting(){
		$this->db->join('tahunajaran', 'tahunajaran.id_tahun_ajaran = setting.id_tahun_ajaran');
		return $this->db->get('setting')->row();
	}

	public function aktifkantahunajaran($id_tahun_ajaran){
		$data = array(
			'id_tahun_ajaran'=>$id_tahun_ajaran,	
			);
		$this->db->update('setting',$data); 
	}

	// public function getaktif() {
	// 	$this->db->order_by('id_tahun_ajaran', 'desc');
	// 	$this->db->limit(1);
	// 	return $this->db->get('setting');	
	// }

}
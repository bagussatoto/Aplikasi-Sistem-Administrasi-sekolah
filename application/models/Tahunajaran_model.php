<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahunajaran_model extends CI_Model {

	
	public function get()
	{
		return $this->db->get('tahunajaran')->result(); 
	}

	public function insert($data) {
		$this->db->insert('tahunajaran', $data);
	}

	public function select($id)
	{
		$this->db->where('id_tahun_ajaran', $id);
		return $this->db->get('tahunajaran')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_tahun_ajaran', $id);
		$this->db->update('tahunajaran', $data);
	}	

	public function delete($id) {
		$this->db->where('id_tahun_ajaran', $id);
		$this->db->delete('tahunajaran');
	}	

	public function getaktif() {
		$this->db->select('id_tahun_ajaran');
		$this->db->limit(1);
		return $this->db->get('setting')->row(); 	
	}

	public function gettahunajaranaktif(){
		$this->db->select('tahunajaran.*, setting.id_setting');
		$this->db->join('tahunajaran', 'tahunajaran.id_tahun_ajaran = setting.id_tahun_ajaran');
		$data= $this->db->get('setting')->row();
		return $data;
	}


	public function Gettahunajaran($where = array()){
		$this->db->select('tahunajaran.*, setting.id_setting');
		$this->db->join('setting', 'tahunajaran.id_tahun_ajaran = setting.id_tahun_ajaran', 'left');
		$this->db->where($where);
		$data= $this->db->get('tahunajaran');
		return $data;
	}

	public function rowTahunajaran($id){
		return $this->db->get_where('tahunajaran', array('id_tahun_ajaran' => $id))->row();
	}

	public function tambahtahunajaran(){
		$data = array(
			'tahun_ajaran'=>$this->input->post('tahun_ajaran'),
			'semester'=>$this->input->post('semester'),
			'tanggal_mulai'=>$this->input->post('tanggal_mulai'),
			'tanggal_selesai'=>$this->input->post('tanggal_selesai'),
		);
		$this->db->insert('tahunajaran',$data);
	}

	public function Getsemester(){
		$this->db->select('tahunajaran.*, setting.id_setting');
		$this->db->join('setting', 'tahunajaran.id_tahun_ajaran = setting.id_tahun_ajaran', 'left');
		$this->db->where('NOT setting.id_tahun_ajaran IS NULL', NULL, FALSE);
		$thnajaran= $this->db->get('tahunajaran')->row();

		$this->db->select('tahunajaran.*');
		$this->db->where('tahun_ajaran', $thnajaran->tahun_ajaran);
		$this->db->order_by('tanggal_mulai ASC');
		$data= $this->db->get('tahunajaran')->result();

		return $data;
	}
	
}

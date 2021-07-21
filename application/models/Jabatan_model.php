<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model {

	
	public function get()
	{
		return $this->db->get('jabatan')->result(); 
	}

	public function insert($data) {
		$this->db->insert('jabatan', $data);
	}

	public function select($id)
	{
		$this->db->where('id_jabatan', $id);
		return $this->db->get('jabatan')->row(); 
	}

	public function update($data, $id) {
		$this->db->where('id_jabatan', $id);
		$this->db->update('jabatan', $data);
	}	

	public function delete($id) {
		$this->db->where('id_jabatan', $id);
		$this->db->delete('jabatan');
	}	

	// public function getaktif() {
	// 	$this->db->select('id_jabatan');
	// 	$this->db->limit(1);
	// 	return $this->db->get('setting')->row(); 	
	// }








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
			'nama_file_kaldik'=>$this->input->post('nama_file_kaldik'),
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

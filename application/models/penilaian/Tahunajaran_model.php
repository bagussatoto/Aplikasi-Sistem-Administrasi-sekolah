<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahunajaran_model extends CI_Model {
	
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
	
	public function getaktif(){
		$this->db->limit(1);
		return $this->db->get('setting')->row();
	}
	
}

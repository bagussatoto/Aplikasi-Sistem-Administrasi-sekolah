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
	// public function tambahdatpeg(){
	// 	$NIP = $this->input->post('NIP');
	// 	$Nama = $this->input->post('Nama');
	// 	$Jenis_kelamin = $this->input->post('Jenis_kelamin');
	// 	$Golongan = $this->input->post('Golongan');
	// 	$kompetensi = $this->input->post('kompetensi');
	// 	$No_SK = $this->input->post('No_SK');
	// 	$TTL = $this->input->post('TTL');
	// 	$TMT_capeg = $this->input->post('TMT_capeg');
	// 	$Pendidikan = $this->input->post('Pendidikan');
	// 	$Agama = $this->input->post('Agama');
	// 	$kontak = $this->input->post('kontak');
	// 	$alamat = $this->input->post('alamat');
	// 	$Status = $this->input->post('Status');
	// 	$data = array(
	// 		'NIP'=>$NIP,
	// 		'Nama'=>$Nama,
	// 		'Jenis_kelamin'=>$Jenis_kelamin,
	// 		'Golongan'=>$Golongan,
	// 		'kompetensi'=>$kompetensi,
	// 		'TTL'=>$TTL,
	// 		'No_SK'=>$No_SK,
	// 		'TMT_capeg'=>$TMT_capeg,
	// 		'Pendidikan'=>$Pendidikan,
	// 		'Agama'=>$Agama,
	// 		'kontak'=>$kontak,
	// 		'alamat'=>$alamat,
	// 		'Status'=>$Status

	// 		);

	// 	// $data = array(
	// 	// 	'NIP'=>$this->input->post('NIP'),
	// 	// 	'Nama'=>$this->input->post('Nama'),
	// 	// 	'No_SK'=>$this->input->post('No_SK'),
	// 	// 	'Jenis_kelamin'=>$this->input->post('Kelamin'),
	// 	// 	'Golongan'=>$this->input->post('Golongan'),
	// 	// 	'kompetensi'=>$this->input->post('Kompetensi'),
	// 	// 	'TTL'=>$this->input->post('TTL'),
	// 	// 	'TMT_capeg'=>$this->input->post('TMT_Capeg'),
	// 	// 	'Pendidikan'=>$this->input->post('Pendidikan'),
	// 	// 	'Agama'=>$this->input->post('Agama'),
	// 	// 	'kontak'=>$this->input->post('Kontak'),
	// 	// 	'alamat'=>$this->input->post('Alamat'),
	// 	// 	'Status'=>$this->input->post('Status')
	// 	// 	);
	// 	$this->db->insert('pegawai',$data);
	// }

	// public function updatedatpeg(){
	// 	//$NIP = $this->input->post('NIP');
	// 	$Nama = $this->input->post('Nama');
	// 	$Jenis_kelamin = $this->input->post('Jenis_kelamin');
	// 	$Golongan = $this->input->post('Golongan');
	// 	$kompetensi = $this->input->post('kompetensi');
	// 	$No_SK = $this->input->post('No_SK');
	// 	$TTL = $this->input->post('TTL');
	// 	$TMT_capeg = $this->input->post('TMT_capeg');
	// 	$Pendidikan = $this->input->post('Pendidikan');
	// 	$Agama = $this->input->post('Agama');
	// 	$kontak = $this->input->post('kontak');
	// 	$alamat = $this->input->post('alamat');
	// 	$Status = $this->input->post('Status');
	// 	$data = array(
	// 	//	'NIP'=>$NIP,
	// 		'Nama'=>$Nama,
	// 		'Jenis_kelamin'=>$Jenis_kelamin,
	// 		'Golongan'=>$Golongan,
	// 		'kompetensi'=>$kompetensi,
	// 		'TTL'=>$TTL,
	// 		'No_SK'=>$No_SK,
	// 		'TMT_capeg'=>$TMT_capeg,
	// 		'Pendidikan'=>$Pendidikan,
	// 		'Agama'=>$Agama,
	// 		'kontak'=>$kontak,
	// 		'alamat'=>$alamat,
	// 		'Status'=>$Status

	// 		);

	// 	// $data = array(
	// 	// 	'NIP'=>$this->input->post('NIP'),
	// 	// 	'Nama'=>$this->input->post('Nama'),
	// 	// 	'No_SK'=>$this->input->post('No_SK'),
	// 	// 	'Jenis_kelamin'=>$this->input->post('Kelamin'),
	// 	// 	'Golongan'=>$this->input->post('Golongan'),
	// 	// 	'kompetensi'=>$this->input->post('Kompetensi'),
	// 	// 	'TTL'=>$this->input->post('TTL'),
	// 	// 	'TMT_capeg'=>$this->input->post('TMT_Capeg'),
	// 	// 	'Pendidikan'=>$this->input->post('Pendidikan'),
	// 	// 	'Agama'=>$this->input->post('Agama'),
	// 	// 	'kontak'=>$this->input->post('Kontak'),
	// 	// 	'alamat'=>$this->input->post('Alamat'),
	// 	// 	'Status'=>$this->input->post('Status')
	// 	// 	);
	// 	$this->db->where('NIP', $this->uri->segment(3));
	// 	$this->db->update('pegawai',$data); 
	// }
}

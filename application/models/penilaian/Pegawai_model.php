<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function gettotaluser(){
		$this->db->select("count(*) as no, 
			count(case when Jenis_kelamin = 'Laki-Laki' then 1 else null end) as lk, 
			count(case when Jenis_kelamin = 'Perempuan' then 1 else null end) as pr, 
			count(case when Status_pensiun = 'pensiun' then 1 else null end) as ps,
	

			");                        
		$query = $this->db->get('pegawai');          
		return $query->row();            

	}    


	


	public function Getdatpeg($where = array()){
		$this->db->where($where);
		$data= $this->db->get('pegawai');
		return $data;
	}

	public function getjab($where = array()){
		$this->db->where($where);
		$data= $this->db->get('jabatan')->result();
		return $data;
	}

	public function rowPegawai($id){
		return $this->db->get_where('pegawai', array('NIP' => $id))->row();
	}
	public function tambahdatpeg(){
		$config['upload_path']          = './assets/Superadmin/Fotoguru/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto'))
		{
			$foto = "";
                //print_r($this->upload->display_errors());
		}
		else
		{
			$foto = $this->upload->data('file_name');

		}

		$data = array(
			'NIP'=>$this->input->post('NIP'),
			'Nama'=>$this->input->post('Nama'),
			'nama_panggilan'=>$this->input->post('nama_panggilan'),
			'No_SK'=>$this->input->post('No_SK'),
			'kode_guru'=>$this->input->post('kode_guru'),
			'matapelajaran'=>$this->input->post('matapelajaran'),
			'Jenis_kelamin'=>$this->input->post('Jenis_kelamin'),
			'Golongan'=>$this->input->post('Golongan'),
			'pangkat'=>$this->input->post('pangkat'),
			'pangkat'=>$this->input->post('pangkat'),
			// 'kompetensi'=>$this->input->post('kompetensi'),
			'TTL'=>$this->input->post('TTL'),
			'TMT_capeg'=>$this->input->post('TMT_capeg'),
			'Pendidikan'=>$this->input->post('Pendidikan'),
			'Agama'=>$this->input->post('Agama'),
			'kontak'=>$this->input->post('kontak'),
			'alamat'=>$this->input->post('alamat'),
			'Status'=>$this->input->post('Status'),
			'Status_pensiun'=>$this->input->post('Status_pensiun'),
			'foto'=>$foto
		);
		$this->db->insert('pegawai',$data);
	}

	public function updatedatpeg(){
		$data = array(
			// 'NIP'=>$this->input->post('NIP'),
			'Nama'=>$this->input->post('Nama'),
			'nama_panggilan'=>$this->input->post('nama_panggilan'),
			'No_SK'=>$this->input->post('No_SK'),
			'kode_guru'=>$this->input->post('kode_guru'),
			'matapelajaran'=>$this->input->post('matapelajaran'),
			'Jenis_kelamin'=>$this->input->post('Jenis_kelamin'),
			'Golongan'=>$this->input->post('Golongan'),
			'pangkat'=>$this->input->post('pangkat'),
			// 'kompetensi'=>$this->input->post('kompetensi'),
			'TTL'=>$this->input->post('TTL'),
			'TMT_capeg'=>$this->input->post('TMT_capeg'),
			'Pendidikan'=>$this->input->post('Pendidikan'),
			'Agama'=>$this->input->post('Agama'),
			'kontak'=>$this->input->post('kontak'),
			'alamat'=>$this->input->post('alamat'),
			'Status'=>$this->input->post('Status'),
			'Status_pensiun'=>$this->input->post('Status_pensiun')
		);

		$config['upload_path']          = './assets/Superadmin/Fotoguru/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto'))
		{
                //$foto = "";
                //print_r($this->upload->display_errors());
		}
		else
		{
			$data['foto'] = $this->upload->data('file_name');

		}

		$this->db->where('NIP', $this->uri->segment(3));
		$this->db->update('pegawai',$data); 
	}

	// public function deletedatpeg($data, $table){
	// 	$this->db->where($data);
	// 	$this->db->delete($table);

	// }


	function deletedatpeg($id) {
		$this->db->where('NIP',$id);
		return $this->db->delete('pegawai');
	}

	public function gantipassword($username,$data,$table)
	{
         //id apa yang mau di update, lalu DATA apa yang mau dikirim ke tabel di database
		$this->db->where('username',$username);
		$this->db->update($table,$data);
	}

	public function Getjabatan(){
		$this->db->from('jabatan as j');
		$this->db->join('akun as a', 'j.id_jabatan = a.id_jabatan');
		$this->db->join('pegawai as p', 'a.NIP = p.NIP');
		$data= $this->db->get();
		return $data;
	}

	public function GetTanpaJabatan(){
		$this->db->select('p.*');
		$this->db->from('pegawai as p');
		$this->db->join('akun as a', 'p.NIP = a.NIP', 'left');
		$this->db->join('jabatan as j', 'j.id_jabatan = a.id_jabatan', 'left');
		$this->db->where('a.id_jabatan IS NULL');
		$data= $this->db->get();
		return $data;
	}

	public function rowPegawaiJabatan($id){
		$this->db->select('p.*, a.id_jabatan, a.password');
		$this->db->from('pegawai as p');
		$this->db->join('akun as a', 'p.NIP = a.NIP', 'left');
		$this->db->join('jabatan as j', 'j.id_jabatan = a.id_jabatan', 'left');
		$this->db->where('p.NIP', $id);
		$data= $this->db->get()->row();
		return $data;
		//return $this->db->get_where('pegawai', array('NIP' => $id))->row();
	}

	public function rowJabatansiswa($id){
		$this->db->select('s.*, a.id_jabatan, a.password');
		$this->db->from('siswa as s');
		$this->db->join('akun as a', 's.nisn = a.nisn', 'left');
		$this->db->join('jabatan as j', 'j.id_jabatan = a.id_jabatan', 'left');
		$this->db->where('s.nisn', $id);
		$data= $this->db->get()->row();
		return $data;
		//return $this->db->get_where('pegawai', array('NIP' => $id))->row();
	}

	public function Getjabatansiswa(){
		$this->db->from('jabatan as j');
		$this->db->join('akun as a', 'j.id_jabatan = a.id_jabatan');
		$this->db->join('siswa as s', 'a.nisn = s.nisn');
		$data= $this->db->get();
		return $data;
	}

	public function insert($data) {
		return $this->db->insert('pegawai', $data);
	}
}

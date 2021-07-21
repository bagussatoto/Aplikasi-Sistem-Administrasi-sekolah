<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarulang_kenaikan_siswa extends CI_Controller {

 	public function index()
 	{
 		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('ppdb/model_siswa');
		$row_siswa = $this->model_siswa->select($this->session->userdata('nisn'));
		$data['row_siswa'] = $row_siswa;

		$this->load->model('ppdb/model_siswa');
		$data['row_siswa_berkas'] = $this->model_siswa->getsiswakenaikan($row_siswa->nisn);


		foreach ($this->db->get('form_daftarulang_kenaikan')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         }
         $data['settingform'] = $settingform;

		$this->load->model('ppdb/model_form_daftarulang_kenaikan');
		$data['tabel_form_daftarulang_kenaikan'] = $this->model_form_daftarulang_kenaikan->cekaktif();

		// $this->load->model('ppdb/model_pendaftar_daftarulang_kenaikan');
		// $data['cek_pendaftar_daftarulang_kenaikan'] = $this->model_pendaftar_daftarulang_kenaikan->cekpendaftarkenaikan($id);

		$this->template->load('siswa/dashboard', 'siswa/view_daftarulang_kenaikan_siswa', $data);
 	}

 	public function savependaftarkelas()
	{	
		$this->load->model('ppdb/model_siswa');
		$arrdata = array(
				'alamat' => $this->input->post('alamat'),
				'anak_ke' => $this->input->post('anak_ke'),
				'jumlah_saudara_kandung' => $this->input->post('jumlah_saudara_kandung'),
				'jumlah_saudara_tiri' => $this->input->post('jumlah_saudara_tiri'),
				'tinggi_badan' => $this->input->post('tinggi_badan'),
				'berat_badan' => $this->input->post('berat_badan')
			);

		$this->load->model('ppdb/model_siswa');
		$this->model_siswa->update($arrdata, $this->uri->segment(5));

		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'nisn' => $this->session->userdata('nisn'), //ambil dari login & SISWA
				'surat_pernyataan' => $this->input->post('surat_pernyataan'), 
				'formulir_pendataan' => $this->input->post('formulir_pendataan'),
				'rapor' => $this->input->post('rapor'),
				'tanda_pembayaran' => $this->input->post('tanda_pembayaran'),
				'berkas_1' => $this->input->post('berkas_1'),
				'berkas_2' => $this->input->post('berkas_2'),
				'berkas_3' => $this->input->post('berkas_3'),
				'berkas_4' => $this->input->post('berkas_4'),
				'berkas_5' => $this->input->post('berkas_5'),
				'terverifikasi' => 'Belum'
			);
		$this->load->model('ppdb/model_pendaftar_daftarulang_kenaikan');
		$this->model_pendaftar_daftarulang_kenaikan->insert($arrdata);
		$this->session->set_flashdata('daftarkelas', "<script>alert('Anda berhasil mendaftar!');</script>");
		redirect('ppdb/siswa/daftarulang_kenaikan_siswa');
	}


}

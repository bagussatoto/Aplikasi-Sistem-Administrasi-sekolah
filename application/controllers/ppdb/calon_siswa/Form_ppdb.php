<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_ppdb extends CI_Controller {


	public function index()
	{
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->get();

		foreach ($this->db->get('form_ppdb')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         	$settingformberkas[$form->nama_kolom] = $form->atribut;
         }
         $data['settingform'] = $settingform;
         $data['settingformberkas'] = $settingformberkas;
         
		// $this->template->load('kesiswaan/calon_siswa/view_template_calon_siswa', 'kesiswaan/calon_siswa/view_form_ppdb', $data);
         $this->template->load('kesiswaan/ppdb/calon_siswa/view_template_calon_siswa', 'kesiswaan/ppdb/calon_siswa/view_form_ppdb', $data);
	}

	public function savependaftar() {
		$this->load->model('ppdb/model_tahunajaran');
		$this->load->model('ppdb/model_pendaftar_ppdb');
		// if ((nisn_pendaftar==nisn_pendaftar) && (nisn_pendaftar==nisn))
		// {
		// 	$this->session->set_flashdata('pesanlain', "<script>alert('Selamat! Anda berhasil mendaftar.');</script>");
		// 	redirect('kesiswaan/calon_siswa/form_ppdb');
		// }
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran'), 
				'no_usbn' => $this->input->post('no_usbn'), 
				'nisn_pendaftar' => $this->input->post('nisn_pendaftar'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'domisili' => $this->input->post('domisili'),
				'nilai_un_ind' => $this->input->post('nilai_un_ind'),
				'nilai_un_mat' => $this->input->post('nilai_un_mat'),
				'nilai_un_ipa' => $this->input->post('nilai_un_ipa'),
				'nilai_prestasi' => $this->input->post('nilai_prestasi'),
				'nilai_un_nun' => $this->input->post('nilai_un_nun'),
				'pilihan_sekolah_1' => $this->input->post('pilihan_sekolah_1'),
				'pilihan_sekolah_2' => $this->input->post('pilihan_sekolah_2'),
				'pilihan_sekolah_3' => $this->input->post('pilihan_sekolah_3'),
				'bukti_pengajuan_daftar' => $this->input->post('bukti_pengajuan_daftar'),
				'fc_ijazah' => $this->input->post('fc_ijazah'),
				'skhun' => $this->input->post('skhun'),
				'fc_skhun' => $this->input->post('fc_skhun'),
				'fc_rapor' => $this->input->post('fc_rapor'),
				'skck_kepsek' => $this->input->post('skck_kepsek'),
				'surat_ket_nisn' => $this->input->post('surat_ket_nisn'),
				'surat_keterangan_penambah_nilai' => $this->input->post('surat_keterangan_penambah_nilai'),
				'fc_kk' => $this->input->post('fc_kk'),
				'fc_akta_lahir' => $this->input->post('fc_akta_lahir'),
				'surat_ket_rt' => $this->input->post('surat_ket_rt'),
				'surat_keterangan_napza' => $this->input->post('surat_keterangan_napza'),
				'berkas_1' => $this->input->post('berkas_1'),
				'berkas_2' => $this->input->post('berkas_2'),
				'berkas_3' => $this->input->post('berkas_3'),
				'berkas_4' => $this->input->post('berkas_4'),
				'berkas_5' => $this->input->post('berkas_5'),
				'terverifikasi' => 'Belum'
			);
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$this->model_pendaftar_ppdb->insert($arrdata);
		$this->session->set_flashdata('pesan', "<script>alert('Selamat! Anda berhasil mendaftar.');</script>");
		// redirect('kesiswaan/calon_siswa/form_ppdb');
		redirect('ppdb/calon_siswa/form_ppdb');
	}


}

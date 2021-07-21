<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {


	public function index(){
	
		$this->template->load('kesiswaan/distribusi/sekolah/dashboard_sekolah','kesiswaan/distribusi/sekolah/home');
	}

	public function mutasi(){

		$this->template->load('kesiswaan/distribusi/sekolah/dashboard_sekolah','kesiswaan/distribusi/sekolah/mutasi');

	}

	public function form_mutasimasuk(){

		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$data = $this->Mod_form_mutasi_masuk->get();
		foreach ($data as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         	$settingformberkas[$form->nama_kolom] = $form->atribut;
         }
         $data['settingform'] = $settingform;
         $data['settingformberkas'] = $settingformberkas;
		

		$this->template->load('kesiswaan/distribusi/sekolah/dashboard_sekolah','kesiswaan/distribusi/sekolah/form_mutasimasuk', $data);
	}


	public function savependaftar_mutasi() {
		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$arrdata = array(
				'id_tahun_ajaran' => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran, 
				 
				 
				'nisn_pendaftar_mutasi' => $this->input->post('nisn_pendaftar_mutasi'),
				'nama_pendaftar_mutasi' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'alamat' => $this->input->post('alamat'),
				'no_telepon' => $this->input->post('no_telepon'),
				'sekolah_asal' => $this->input->post('sekolah_asal'),
				'tahun_kelulusan' => $this->input->post('tahun_kelulusan'),
				'nilai_un_bahasaindonesia' => $this->input->post('nilai_un_bahasaindonesia'),
				'nilai_un_matematika' => $this->input->post('nilai_un_matematika'),
				'nilai_un_ipa' => $this->input->post('nilai_un_ipa'),
				'jumlah_nilai_un' => $this->input->post('jumlah_nilai_un'),
				'surat_ket_nisn' => $this->input->post('surat_ket_nisn'),
				'fc_buku_rapor' => $this->input->post('fc_buku_rapor'),
				'fc_skhun' => $this->input->post('fc_skhun'),
				'surat_ket_bangku' => $this->input->post('surat_ket_bangku'),
				'surat_ket_pindah' => $this->input->post('surat_ket_pindah'),
				'skck_kepsek' => $this->input->post('skck_kepsek'),
				'berkas_1' => $this->input->post('berkas_1'),
				'berkas_2' => $this->input->post('berkas_2'),
				'berkas_3' => $this->input->post('berkas_3'),
				'berkas_4' => $this->input->post('berkas_4'),
				'berkas_5' => $this->input->post('berkas_5'),
				'status_siswa' => $this->input->post('status_siswa')
			);
		$this->load->model('kesiswaan/Mod_siswa_mutasi_masuk');
		$this->Mod_siswa_mutasi_masuk->insert($arrdata);
		$this->session->set_flashdata('pesan', "<script>alert('Selamat! Anda berhasil mendaftar.');</script>");
		redirect('distribusi/sekolah/form_mutasimasuk');

	}

	public function pendaftar_mutasimasuk(){
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$data = $this->Mod_siswa_mutasi_masuk->get();	
		$data['siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->get();	

		$this->template->load('kesiswaan/distribusi/sekolah/dashboard_sekolah','kesiswaan/distribusi/sekolah/pendaftar_mutasimasuk', $data);
	
	}


	public function pengumuman_mutasimasuk(){
		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$data = $this->Mod_pengumuman_mutasi->get();	
		$data['pengumuman_mutasi'] = $this->Mod_pengumuman_mutasi->get();	

		$this->template->load('kesiswaan/distribusi/sekolah/dashboard_sekolah','kesiswaan/distribusi/sekolah/pengumuman_mutasimasuk', $data);
	}

	public function download ($id) {

		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$data = array('id_pengumuman' => $id);
		$this->Mod_pengumuman_mutasi->forcefile($id);
		$this->session->set_flashdata('sukses','data berhasil didownload');
		redirect('distribusi/sekolah/pengumuman_mutasimasuk');
	}

	

}

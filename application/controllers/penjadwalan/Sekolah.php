<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {


	public function index(){
		// $this->load->model('kesiswaan/Mod_mutasi_masuk');
		// $data['siswa_mutasi_masuk'] = $this->Mod_mutasi_masuk->get();
		// foreach ($this->db->get('form_mutasimasuk')->result() as $form) 
  //        { 
  //        	$settingform[$form->nama_kolom] = $form->nilai;
  //        }
  //        $data['settingform'] = $settingform;
		$this->template->load('penjadwalan/sekolah/dashboard_sekolah','penjadwalan/sekolah/home');
	}

	public function mutasi(){

		$this->template->load('penjadwalan/sekolah/dashboard_sekolah','penjadwalan/sekolah/mutasi');
	}

	public function form_mutasimasuk(){

		$this->load->model('penjadwalan/Mod_form_mutasi_masuk');
		$data = $this->Mod_form_mutasi_masuk->get();
		foreach ($data as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         }
         $data['settingform'] = $settingform;
		

		$this->template->load('penjadwalan/sekolah/dashboard_sekolah','penjadwalan/sekolah/form_mutasimasuk', $data);


	}


	public function savependaftar_mutasi() {
		$this->load->model('penjadwalan/Mod_tahunajaran');
		$this->load->model('penjadwalan/Mod_siswa_mutasi_masuk');
		$arrdata = array(
				'id_tahun_ajaran' => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran, 
				 
				 
				'nisn' => $this->input->post('nisn'),
				'nama_pendaftar_mutasi' => $this->input->post('nama'),
				'tahun_kelulusan' => $this->input->post('tahun_kelulusan'),
				'usia' => $this->input->post('usia'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'no_telepon' => $this->input->post('no_telepon'),
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
				'sekolah_asal' => $this->input->post('sekolah_asal'),
				

				'status_siswa' => $this->input->post('status_siswa')
			);
		$this->load->model('kesiswaan/Mod_siswa_mutasi_masuk');
		$this->Mod_siswa_mutasi_masuk->insert($arrdata);
		$this->session->set_flashdata('pesan', "<script>alert('Selamat! Anda berhasil mendaftar.');</script>");
		redirect('penjadwalan/sekolah/form_mutasimasuk');

	}


	public function pengumuman(){

		$this->template->load('penjadwalan/sekolah/dashboard_sekolah','penjadwalan/sekolah/pengumuman');
	}
	

}

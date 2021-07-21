<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_jalur_ujian extends CI_Controller {

	public function index()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;
		
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->get();

		$this->load->model('ppdb/model_form_ppdb');
		$data['tabel_form_ppdb'] = $this->model_form_ppdb->get();

		$this->load->model('ppdb/model_ketentuan_ppdb');
		$data['tabel_ketentuan_ppdb'] = $this->model_ketentuan_ppdb->get();

		$this->load->model('ppdb/model_form_ujian');
		$data['tabel_form_ujian'] = $this->model_form_ujian->get();

		$this->load->model('ppdb/model_pengumuman_ppdb');
		$data['tabel_pengumuman_ppdb'] = $this->model_pengumuman_ppdb->get();

		
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos();

		$this->load->model('pegawai_model');
		
		$this->template->load('superadmin/dashboard', 'superadmin/ppdb/admin/view_pendaftar_jalur_ujian', $data);
	}

	// public function gantipassword()
	// {
	// 	$data['nama'] = $this->session->Nama;
	// 	$data['foto'] = $this->session->foto;
	// 	$data['username'] = $this->session->username;  
	// 	$this->template->load('superadmin/dashboard','kesiswaan/gantipassword', $data);
	// }

	// public function updatepassword() {
	// 	$username = $this->input->post('username',true);
	// 	$password = $this->input->post('password',true);
	// 	$passwordbaru = $this->input->post('passwordbaru',true);
	// 	$confirmpassword = $this->input->post('confirmpassword',true);
	// 	if ($passwordbaru == $confirmpassword) {
	// 		$cek =$this->login_model->proseslogin($username,$password);
	// 		$hasil = count($cek); 
	// 		if ($hasil > 0){
	// 			// $this->login_model->cekPegawai($cek);
				
	// 			$this->load->model('akun_model');
	// 			$this->akun_model->update(array("password"=>$passwordbaru), $cek->id_akun);

	// 			// redirect($result->url.'/');
	// 			redirect('kesiswaan/gantipassword');
	// 		}else{
	// 			// $this->session->set_flashdata("warning","<b>Kombinasi Username dan Password Anda tidak ditemukan, Pastikan Anda memasukkan Username dan Password yang benar</b>");

	// 			$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Lama Salah !" ,  "error" )</script>');
	// 			redirect('kesiswaan/gantipassword');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Baru Harus Ganti !" ,  "error" )</script>');

	// 		redirect('kesiswaan/gantipassword');
	// 	}
		
	// }

	// public function profile()
	// {
	// 	$data['nama'] = $this->session->Nama;
	// 	$data['foto'] = $this->session->foto;
	// 	$data['username'] = $this->session->username;  
	// 	$data['datpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
	// 	$this->template->load('kesiswaan/dashboard','pegawai/profile', $data);
	// }

	// public function editprofil(){
	// 	$data['nama'] = $this->session->Nama;
	// 	$data['foto'] = $this->session->foto;
	// 	$data['username'] = $this->session->username;
	// 	$data['rowpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
	// 	$this->template->load('kesiswaan/dashboard','kesiswaan/editprofil', $data);
	// 	if($this->input->post('submit')){
	// 		$this->load->model('pegawai_model');
	// 		$this->pegawai_model->updatedatpeg();	
	// 		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
	// 		redirect('kesiswaan/editprofil');
	// 	} 
	// }

	public function saveformswasta(){
		$this->load->model('ppdb/model_form_ppdb');
		$i=1;
        foreach ($this->db->get('form_ppdb')->result() as $form) 
         { 
         	if (($i>=29) && ($i<34))
         	{ //input text dari admin
	         	if ($this->input->post('nilai'.$form->id_form_ppdb) == "1") 
	         	{
	         		$nilai = 1;
	         		$atribut = $this->input->post('atribut'.$form->id_form_ppdb);
	         	} 
	         	else 
	         	{ 
	         		$nilai = 0; 
	         		$atribut = "";
	         	}

	         	$arrdata = array
	         	(
					'nilai' => $nilai,
					'atribut' => $atribut

				);
			} else {
				if ($this->input->post('nilai'.$form->id_form_ppdb) == "1") 
	         	{
	         		$nilai = 1;
	         	} 
	         	else 
	         	{ 
	         		$nilai = 0; 
	         	}

	         	$arrdata = array
	         	(
					'nilai' => $nilai
				);
				if ($this->input->post('atribut'.$form->id_form_ppdb) != "") 
				{
					$arrdata['atribut'] = $this->input->post('atribut'.$form->id_form_ppdb); 
				}			
			}
			$this->load->model('ppdb/model_form_ppdb');
			$this->model_form_ppdb->update($arrdata, $form->id_form_ppdb);
            $i=$i+1;
         }         
		$this->session->set_flashdata('aktif', "<script>alert('Formulir berhasil diaktifkan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function nonaktifform(){
		$this->load->model('ppdb/model_form_ppdb');
		$i=1;
        foreach ($this->db->get('form_ppdb')->result() as $form) 
         { 
         	if ($form->nilai == "1") 
	         {
         		$nilai = 0;
         		$atribut = "";
	         	$arrdata = array
	         	(
					'nilai' => $nilai

				);
				if (($form->id_form_ppdb >= 29) && ($form->id_form_ppdb <= 33)) {
					$arrdata['atribut'] = '';
				}
				$this->model_form_ppdb->update($arrdata, $form->id_form_ppdb);
         	} 
         	
			$i=$i+1;
         }
		$this->load->model('ppdb/model_form_ppdb');     
		$this->session->set_flashdata('nonaktif', "<script>alert('Formulir berhasil dinon-aktifkan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function saveformujian() {
		$this->load->model('ppdb/model_form_ujian');
		$i=1;
        foreach ($this->db->get('form_ujian')->result() as $form) 
         { 
         	if ($this->input->post('nilai'.$form->id_form_ujian) == "1") 
         	{
         		$nilai = 1;
         		$atribut = $this->input->post('atribut'.$form->id_form_ujian);
         	} 
         	else 
         	{ 
         		$nilai = 0;
         		$atribut = ""; 
         	}

         	$arrdata = array
         	(
				'nilai' => $nilai,
				'atribut' => $atribut
			);
			$this->load->model('ppdb/model_form_ujian');
			$this->model_form_ujian->update($arrdata, $form->id_form_ujian);
            $i=$i+1;
         }
		$this->session->set_flashdata('formujian', "<script>alert('Pengaturan Ujian berhasil disimpan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function saveketentuan() {
		$config['upload_path']          = './assets/kesiswaan/ketentuan/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi_ketentuan'))
        {
			$isi_ketentuan = "";                
        }
        else
        {
            $isi_ketentuan = $this->upload->data('file_name');
        }

		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'nama_ketentuan' => $this->input->post('nama_ketentuan'), 
				'isi_ketentuan' => $isi_ketentuan, 
				'tgl_berlaku' => $this->input->post('tgl_berlaku')
			);
		$this->load->model('ppdb/model_ketentuan_ppdb');
		$this->model_ketentuan_ppdb->insert($arrdata);
		$this->session->set_flashdata('pesan', "<script>alert('Ketentuan PPDB berhasil disimpan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function editketentuan(){
		$this->load->model('ppdb/model_ketentuan_ppdb');
		$data['row_ketentuan_ppdb'] = $this->model_ketentuan_ppdb->select($this->uri->segment(5));
	
		$this->load->view('superadmin/ppdb/admin/view_edit_ketentuan', $data);
	}

	public function updateketentuan() {
		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'nama_ketentuan' => $this->input->post('nama_ketentuan'), 
				'tgl_berlaku' => $this->input->post('tgl_berlaku')
			);
		
		$config['upload_path']          = './assets/kesiswaan/ketentuan/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi_ketentuan'))
        {
			
        }
        else
        {
            $arrdata['isi_ketentuan'] = $this->upload->data('file_name');
        }

		$this->load->model('ppdb/model_ketentuan_ppdb');
		$this->model_ketentuan_ppdb->update($arrdata, $this->uri->segment(5));
		$this->session->set_flashdata('baru', "<script>alert('Ketentuan PPDB berhasil diperbarui!');</script>");
		// redirect('kesiswaan/admin/pendaftar_jalur_ujian');
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function deleteketentuan(){
		$this->load->model('ppdb/model_ketentuan_ppdb');
		$this->model_ketentuan_ppdb->delete($this->uri->segment(5));
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function editpendaftar(){
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['row_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->select($this->uri->segment(5));

		foreach ($this->db->get('form_ppdb')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         	$settingformberkas[$form->nama_kolom] = $form->atribut;
         }
         $data['settingform'] = $settingform;
         $data['settingformberkas'] = $settingformberkas;

         foreach ($this->db->get('form_ujian')->result() as $form) 
         { 
         	$settingformswasta[$form->nama_kolom] = $form->nilai;
         	$settingatribut[$form->nama_kolom] = $form->atribut;
         }
         $data['settingformswasta'] = $settingformswasta;
         $data['settingatribut'] = $settingatribut;

		$this->load->view('superadmin/ppdb/admin/view_edit_pendaftar_ppdb_swasta', $data);
	}
	
	public function editpendaftarlolos(){
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['row_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->select($this->uri->segment(5));

		foreach ($this->db->get('form_ppdb')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         }
         $data['settingform'] = $settingform;

         foreach ($this->db->get('form_ujian')->result() as $form) 
         { 
         	$settingformswasta[$form->nama_kolom] = $form->nilai;
         	$settingatribut[$form->nama_kolom] = $form->atribut;
         }
         $data['settingformswasta'] = $settingformswasta;
         $data['settingatribut'] = $settingatribut;

		$this->load->view('superadmin/ppdb/admin/view_edit_pendaftar_ppdb_swasta_lolos', $data);
	}

	public function updatependaftar() {
		$this->load->model('ppdb/model_tahunajaran');

		$arrdata = array(
				'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran'),
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'no_usbn' => $this->input->post('no_usbn'),
				'nisn_pendaftar' => $this->input->post('nisn_pendaftar'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'ujian_1' => $this->input->post('ujian_1'),
				'ujian_2' => $this->input->post('ujian_2'),
				'ujian_3' => $this->input->post('ujian_3'),
				'ujian_4' => $this->input->post('ujian_4'),
				'ujian_5' => $this->input->post('ujian_5'),
				'ujian_6' => $this->input->post('ujian_6'),
				'ujian_7' => $this->input->post('ujian_7'),
				'ujian_8' => $this->input->post('ujian_8'),
				'ujian_9' => $this->input->post('ujian_9'),
				'ujian_10' => $this->input->post('ujian_10'),
				'total_nilai' => $this->input->post('total_nilai'),
				'status_siswa' => $this->input->post('status_siswa'),
				'fc_rapor' => $this->input->post('fc_rapor'),
				'fc_ijazah' => $this->input->post('fc_ijazah'),
				'skhun' => $this->input->post('skhun'),
				'bukti_pengajuan_daftar' => $this->input->post('bukti_pengajuan_daftar'),
				'fc_skhun' => $this->input->post('fc_skhun'),
				'surat_keterangan_penambah_nilai' => $this->input->post('surat_keterangan_penambah_nilai'),
				'surat_ket_nisn' => $this->input->post('surat_ket_nisn'),
				'skck_kepsek' => $this->input->post('skck_kepsek'),
				'fc_akta_lahir' => $this->input->post('fc_akta_lahir'),
				'fc_kk' => $this->input->post('fc_kk'),
				'surat_ket_rt' => $this->input->post('surat_ket_rt'),
				'surat_keterangan_napza' => $this->input->post('surat_keterangan_napza'),
				'berkas_1' => $this->input->post('berkas_1'),
				'berkas_2' => $this->input->post('berkas_2'),
				'berkas_3' => $this->input->post('berkas_3'),
				'berkas_4' => $this->input->post('berkas_4'),
				'berkas_5' => $this->input->post('berkas_5'),
				'terverifikasi' => $this->input->post('terverifikasi')
			);

		$this->load->model('ppdb/model_pendaftar_ppdb');
		$this->model_pendaftar_ppdb->update($arrdata, $this->uri->segment(5));
		$this->session->set_flashdata('pendaftar', "<script>alert('Perubahan data pendaftar PPDB berhasil disimpan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

 	public function editnilai(){
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['row_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->select($this->uri->segment(5));

		foreach ($this->db->get('form_ujian')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         	$settingatribut[$form->nama_kolom] = $form->atribut;
         }
         $data['settingform'] = $settingform;
         $data['settingatribut'] = $settingatribut;
	
		$this->load->view('superadmin/ppdb/admin/view_lihat_nilai_ppdb_ujian', $data);
	}

	public function updatependaftarlolos() {
		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'nomor_pendaftaran' => $this->input->post('nomor_pendaftaran'),
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'no_usbn' => $this->input->post('no_usbn'),
				'nisn_pendaftar' => $this->input->post('nisn_pendaftar'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'domisili' => $this->input->post('domisili'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'nilai_un_ind' => $this->input->post('nilai_un_ind'),
				'nilai_un_mat' => $this->input->post('nilai_un_mat'),
				'nilai_un_ipa' => $this->input->post('nilai_un_ipa'),
				'nilai_prestasi' => $this->input->post('nilai_prestasi'),
				'nilai_un_nun' => $this->input->post('nilai_un_nun'),
				'ujian_1' => $this->input->post('ujian_1'),
				'ujian_2' => $this->input->post('ujian_2'),
				'ujian_3' => $this->input->post('ujian_3'),
				'ujian_4' => $this->input->post('ujian_4'),
				'ujian_5' => $this->input->post('ujian_5'),
				'ujian_6' => $this->input->post('ujian_6'),
				'ujian_7' => $this->input->post('ujian_7'),
				'ujian_8' => $this->input->post('ujian_8'),
				'ujian_9' => $this->input->post('ujian_9'),
				'ujian_10' => $this->input->post('ujian_10'),
				'total_nilai' => $this->input->post('total_nilai')
			);

		$this->load->model('ppdb/model_pendaftar_ppdb');
		$this->model_pendaftar_ppdb->update($arrdata, $this->uri->segment(5));
		$this->session->set_flashdata('pendaftarlolos', "<script>alert('Perubahan data pendaftar PPDB yang lolos berhasil disimpan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function savepengumuman() {
		$config['upload_path']          = './assets/kesiswaan/pengumuman/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi'))
        {
			$isi = "";                
        }
        else
        {
            $isi= $this->upload->data('file_name');
        }

		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'judul' => $this->input->post('judul'), 
				'isi' => $isi, 
				'tanggal_berlaku' => $this->input->post('tanggal_berlaku')
			);
		$this->load->model('ppdb/model_pengumuman_ppdb');
		$this->model_pengumuman_ppdb->insert($arrdata);
		$this->session->set_flashdata('pengumuman', "<script>alert('Pengumuman PPDB berhasil disimpan!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function editpengumuman(){
		$this->load->model('ppdb/model_pengumuman_ppdb');
		$data['row_pengumuman_ppdb'] = $this->model_pengumuman_ppdb->select($this->uri->segment(5));
	
		$this->load->view('superadmin/ppdb/admin/view_edit_pengumuman', $data);
	}

	public function updatepengumuman() {
		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'judul' => $this->input->post('judul'), 
				'tanggal_berlaku' => $this->input->post('tanggal_berlaku')
			);
		
		$config['upload_path']          = './assets/kesiswaan/pengumuman/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        // $config['max_width']            = 10240;
        // $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi'))
        {
			
        }
        else
        {
            $arrdata['isi'] = $this->upload->data('file_name');
        }

		$this->load->model('ppdb/model_pengumuman_ppdb');
		$this->model_pengumuman_ppdb->update($arrdata, $this->uri->segment(5));
		$this->session->set_flashdata('pengumumanupdate', "<script>alert('Pengumuman PPDB berhasil diperbarui!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function deletepengumuman(){
		$this->load->model('ppdb/model_pengumuman_ppdb');
		$this->model_pengumuman_ppdb->delete($this->uri->segment(5));
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function buatakun(){
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$this->load->model('ppdb/model_akun');
		$this->load->model('ppdb/model_siswa');
		$this->load->model('ppdb/model_orangtua_wali');
		$this->load->model('ppdb/model_tahunajaran');

		$tabel_pendaftar_ppdb_lolos = $this->model_pendaftar_ppdb->getlolos();

		foreach ($tabel_pendaftar_ppdb_lolos as $row_pendaftar_ppdb_lolos) {
			if (!$this->model_akun->selectbynisn($row_pendaftar_ppdb_lolos->nisn_pendaftar)) {
				$arrdata = array(
					'password' => $row_pendaftar_ppdb_lolos->nisn_pendaftar, 
					'id_jabatan' => '8', 
					'nisn' => $row_pendaftar_ppdb_lolos->nisn_pendaftar
				);
			
				$this->model_akun->insert($arrdata);

				$arrdata = array(
					'nama_ayah' => 'Orang Tua Siswa Baru'
				);
			
				$this->model_orangtua_wali->insert($arrdata);

				$id_orangtua = $this->db->insert_id();

				$arrdata = array(
					'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
					'nisn' => $row_pendaftar_ppdb_lolos->nisn_pendaftar,
					'nama' => $row_pendaftar_ppdb_lolos->nama,
					'tempat_lahir' => $row_pendaftar_ppdb_lolos->tempat_lahir,
					'tanggal_lahir' => $row_pendaftar_ppdb_lolos->tanggal_lahir,
					'jenis_kelamin' => $row_pendaftar_ppdb_lolos->jenis_kelamin,
					'status_siswa' => 'Aktif',
					'id_orangtua' => $id_orangtua
				);
			
				$this->model_siswa->insert($arrdata);
			}
		}

		$this->session->set_flashdata('lolos', "<script>alert('Pembuatan akun untuk siswa baru telah berhasil!!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function ubahstatus(){
		$this->load->model('ppdb/model_pendaftar_ppdb');
		foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$arrdata=array("status_siswa" => $this->input->post('button'));
			$this->model_pendaftar_ppdb->update($arrdata, $nisn_siswa);	
		}
		$this->session->set_flashdata('status', "<script>alert('Status siswa berhasil diubah!');</script>");
		redirect('suppdb/admin/pendaftar_jalur_ujian');
	}

	public function eksportujian(){
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos();
		
		$this->load->view('superadmin/ppdb/admin/view_excel_ppdb_ujian', $data);
	}
}

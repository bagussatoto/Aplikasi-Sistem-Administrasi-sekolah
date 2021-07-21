<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarulang_ppdb_siswa extends CI_Controller {

  public function index()
  {
  	$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
    $this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
    $data['tabel_pendaftar_daftarulang_ppdb'] = $this->model_pendaftar_daftarulang_ppdb->get();

	$this->load->model('ppdb/model_siswa');
	$row_siswa = $this->model_siswa->select($this->session->userdata('nisn'));
	$data['row_siswa'] = $row_siswa;

	$this->load->model('ppdb/model_orangtua_wali');
	// $row_ortu = $this->model_orangtua_wali->select($this->session->userdata('id_orangtua'));
	// $data['row_ortu'] = $row_ortu;
	$data['row_ortu'] = $this->model_orangtua_wali->getorangtua($this->session->userdata('nisn'));

	foreach ($this->db->get('form_daftarulang_ppdb')->result() as $form) 
        { 
         	$settingformberkas[$form->nama_kolom] = $form->nilai;
        }
    $data['settingformberkas'] = $settingformberkas;

    $this->load->model('ppdb/model_form_daftarulang_ppdb');
    $data['tabel_form_daftarulang_ppdb'] = $this->model_form_daftarulang_ppdb->cekaktif();

    $this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
    $data['cek_pendaftar_daftarulang_ppdb'] = $this->model_pendaftar_daftarulang_ppdb->cekterdaftar('nisn');

    $this->template->load('siswa/dashboard', 'siswa/view_daftarulang_ppdb_siswa', $data);
  }

  public function updatesiswa(){	

		$config['upload_path']          = './assets/kesiswaan/foto_siswa/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
			$foto = "";                
        }
        else
        {
            $foto = $this->upload->data('file_name');
        }

        $this->load->model('ppdb/model_siswa');
		$arrdata = array(
				'nisn' => $this->session->userdata('nisn'),
				'foto' => $foto, 
				'agama' => $this->input->post('agama'),
				'berkebutuhan_khusus' => $this->input->post('berkebutuhan_khusus'),
				'alamat' => $this->input->post('alamat'),
				'rt' => $this->input->post('rt'),
				'rw' => $this->input->post('rw'),
				'nama_dusun' => $this->input->post('nama_dusun'),
				'desa_kelurahan' => $this->input->post('desa_kelurahan'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kode_pos' => $this->input->post('kode_pos'),
				'tempat_tinggal' => $this->input->post('tempat_tinggal'),
				'kategori_penduduk' => $this->input->post('kategori_penduduk'),
				'transportasi' => $this->input->post('transportasi'),
				'no_telepon' => $this->input->post('no_telepon'),
				'email' => $this->input->post('email'),
				'nama_sd_mi' => $this->input->post('nama_sd_mi'),
				'asal_mutasi' => $this->input->post('asal_mutasi'),
				'lama_belajar_disd_mi' => $this->input->post('lama_belajar_disd_mi'),
				'pernah_paud' => $this->input->post('pernah_paud'),
				'pernah_tk' => $this->input->post('pernah_tk'),
				'no_skhun_mi' => $this->input->post('no_skhun_mi'),
				'no_seri_skhun_s' => $this->input->post('no_seri_skhun_s'),
				'no_seri_ijazah_sd_mi' => $this->input->post('no_seri_ijazah_sd_mi'),
				'penerima_kps_kks_pkh_kip' => $this->input->post('penerima_kps_kks_pkh_kip'),
				'no_penerima' => $this->input->post('no_penerima'),
				'anak_ke' => $this->input->post('anak_ke'),
				'jumlah_saudara_kandung' => $this->input->post('jumlah_saudara_kandung'),
				'jumlah_saudara_tiri' => $this->input->post('jumlah_saudara_tiri'),
				'jumlah_saudara_angkat' => $this->input->post('jumlah_saudara_angkat'),
				'status_dalam_keluarga' => $this->input->post('status_dalam_keluarga'),
				'pernah_menderita_sakit' => $this->input->post('pernah_menderita_sakit'),
				'pernah_mengaji' => $this->input->post('pernah_mengaji'),
				'keterangan_mengaji' => $this->input->post('keterangan_mengaji'),
				'anak_yatim_piatu' => $this->input->post('anak_yatim_piatu'),
				'bahasa_sehari_hari_dirumah' => $this->input->post('bahasa_sehari_hari_dirumah'),
				'status_siswa' => $this->input->post('status_siswa'),
				'tinggi_badan' => $this->input->post('tinggi_badan'),
				'berat_badan' => $this->input->post('berat_badan'),
				'hobi' => $this->input->post('hobi')
			);

		$this->load->model('ppdb/model_siswa');
		// $this->model_siswa->update($arrdata, $this->uri->segment(4));
		$this->model_siswa->update($arrdata, $this->session->userdata('nisn'));
        $this->session->set_flashdata('dusiswa', "<script>alert('Data siswa berhasil disimpan!!');</script>");


		redirect('ppdb/siswa/daftarulang_ppdb_siswa');
	}

	public function updateortusiswa() {
		$this->load->model('ppdb/model_orangtua_wali');
		$arrdata = array(
				'nama_ayah' => $this->input->post('nama_ayah'),
				'gelar_depan_ayah' => $this->input->post('gelar_depan_ayah'),
				'gelar_belakang_ayah' => $this->input->post('gelar_depan_ayah'),
				'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
				'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
				'kewarganegaraan_ayah' => $this->input->post('kewarganegaraan_ayah'),
				'agama_ayah' => $this->input->post('agama_ayah'),
				'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
				'ayah_berkebutuhan_khusus' => $this->input->post('ayah_berkebutuhan_khusus'),
				'no_telepon_hp_ayah' => $this->input->post('no_telepon_hp_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'gelar_depan_ibu' => $this->input->post('gelar_depan_ibu'),
				'gelar_belakang_ayah' => $this->input->post('gelar_depan_ayah'),
				'nomor_telepon_ibu' => $this->input->post('nomor_telepon_ibu'),
				'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
				'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
				'kewarganegaraan_ibu' => $this->input->post('kewarganegaraan_ibu'),
				'agama_ibu' => $this->input->post('agama_ibu'),
				'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
				'ibu_berkebutuhan_khusus' => $this->input->post('ibu_berkebutuhan_khusus')
			);

		//ini kode lama dari modul ppdb
		// $this->load->model('ppdb/model_orangtua_wali');
		// $this->model_orangtua_wali->update($arrdata, $this->uri->segment(5));
  //       $this->session->set_flashdata('duortu', "<script>alert('Data Orang Tua Siswa berhasil disimpan!!');</script>");
		// redirect('ppdb/siswa/daftarulang_ppdb_siswa');

		//ini kode baru dari modul distribusi
		$this->load->model('ppdb/model_siswa');
		$this->load->model('ppdb/model_orangtua_wali');
		$this->model_orangtua_wali->insert($arrdata,  $this->uri->segment(4));
		$id_orangtua = $this->db->insert_id();

		$data = array(
			'id_orangtua' => $id_orangtua,
		);
		$this->model_siswa->update($data, $this->session->userdata('nisn'));
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		redirect('ppdb/siswa/daftarulang_ppdb_siswa');

	}

	public function updatewalisiswa() {
		$this->load->model('ppdb/model_orangtua_wali');
		$arrdata = array(
				'nama_wali' => $this->input->post('nama_wali'),
				'tempat_lahir_wali' => $this->input->post('tempat_lahir_wali'),
				'tanggal_lahir_wali' => $this->input->post('tanggal_lahirwali'),
				'kewarganegaraan_wali' => $this->input->post('kewarganegaraan_wali'),
				'agama_wali' => $this->input->post('agama_wali'),
				'pendidikan_wali' => $this->input->post('pendidikan_wali'),
				'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
				'penghasilan_wali' => $this->input->post('penghasilan_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'no_telepon_hp_wali' => $this->input->post('no_telepon_hp_wali'),
			);

		// $this->load->model('ppdb/model_orangtua_wali');
		// $this->model_orangtua_wali->update($arrdata, $this->uri->segment(5));
  //       $this->session->set_flashdata('duwali', "<script>alert('Data Wali Siswa berhasil disimpan!!');</script>");
		// redirect('ppdb/siswa/daftarulang_ppdb_siswa');

		$this->load->model('ppdb/model_siswa');
		$this->load->model('ppdb/model_orangtua_wali');
		$this->model_orangtua_wali->insert($arrdata,  $this->uri->segment(4));
		$id_orangtua = $this->db->insert_id();

		$data = array(
			'id_orangtua' => $id_orangtua,
		);
		$this->model_siswa->update($data, $this->session->userdata('nisn'));
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		redirect('ppdb/siswa/daftarulang_ppdb_siswa');
	}

	public function saveberkas() {
		$this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
		$arrdata = array(
				'nisn' => $this->session->userdata('nisn'),
				'nomor_pendaftar' => $this->input->post('nomor_pendaftar'),
				'surat_pernyataan' => $this->input->post('surat_pernyataan'),
				'form_pendataan' => $this->input->post('form_pendataan'),
				'tanda_pembayaran' => $this->input->post('tanda_pembayaran'),
				'berkas_1' => $this->input->post('berkas_1'),
				'berkas_2' => $this->input->post('berkas_2'),
				'berkas_3' => $this->input->post('berkas_3'),
				'berkas_4' => $this->input->post('berkas_4'),
				'berkas_5' => $this->input->post('berkas_5'),
				'terverifikasi' => 'Belum'
			);
		$this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
		$this->model_pendaftar_daftarulang_ppdb->insert($arrdata);
        $this->session->set_flashdata('duwali', "<script>alert('Daftar Ulang Siswa Baru berhasil disimpan!!');</script>");
		redirect('ppdb/siswa/daftarulang_ppdb_siswa');
	}

}
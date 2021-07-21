<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_induk extends CI_Controller {

  public function index()
  {
  	$data['nama'] = $this->session->Nama;
	$data['foto'] = $this->session->foto;
	$data['username'] = $this->session->username;

    $this->load->model('ppdb/model_siswa');
    $data['tabel_siswa'] = $this->model_siswa->getsiswaangkatan();

    $this->template->load('kesiswaan/dashboard', 'kesiswaan/ppdb/admin/view_buku_induk', $data);
  }

  	public function editsiswa()
	{
		$this->load->model('ppdb/model_siswa');
		$data['row_siswa'] = $this->model_siswa->select($this->uri->segment(5));
	
		$this->load->view('kesiswaan/ppdb/admin/view_edit_siswa', $data);
	}

	public function updatesiswa() 
	{
		$config['upload_path']          = './assets/kesiswaan/foto_siswa/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 100000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto'))
        { $foto = ""; }
        else
        { $foto = $this->upload->data('file_name'); }
		$this->load->model('ppdb/model_siswa');
		$arrdata = array(
				'nisn' => $this->input->post('nisn'),
				'no_induk_siswa' => $this->input->post('no_induk_siswa'),
				'foto' => $foto, 
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
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
		$this->model_siswa->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('siswa', "<script>alert('Data siswa berhasil diperbarui!');</script>");
		redirect('ppdb/admin/buku_induk');
	}

	public function editsiswaortu()
	{	
		$this->load->model('ppdb/model_siswa');
		$row_siswa = $this->model_siswa->select($this->uri->segment(5));
		$data['row_siswa'] = $row_siswa;

	    $this->load->model('ppdb/model_siswa');
	    $data['row_siswa_ortu'] = $this->model_siswa->getsiswaortu($row_siswa->id_orangtua);
	
		$this->load->view('kesiswaan/ppdb/admin/view_edit_siswa_ortu', $data);
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
				'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
				'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
				'kewarganegaraan_ibu' => $this->input->post('kewarganegaraan_ibu'),
				'agama_ibu' => $this->input->post('agama_ibu'),
				'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
				'ibu_berkebutuhan_khusus' => $this->input->post('ibu_berkebutuhan_khusus'),
				'nomor_telepon_ibu' => $this->input->post('nomor_telepon_ibu')
			);

		$this->load->model('ppdb/model_orangtua_wali');
		$this->model_orangtua_wali->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('orangtua', "<script>alert('Data orang tua berhasil diperbarui!');</script>");
		redirect('ppdb/admin/buku_induk');
	}

	public function editsiswawali()
	{	
		$this->load->model('ppdb/model_siswa');
		$row_siswa = $this->model_siswa->select($this->uri->segment(5));
		$data['row_siswa'] = $row_siswa;

	    $this->load->model('ppdb/model_siswa');
	    $data['row_siswa_wali'] = $this->model_siswa->getsiswaortu($row_siswa->id_orangtua);
	
		$this->load->view('kesiswaan/ppdb/admin/view_edit_siswa_wali', $data);
	}

	public function updatewalisiswa() {
		$this->load->model('ppdb/model_orangtua_wali');
		$arrdata = array(
				'nama_wali' => $this->input->post('nama_wali'),
				'tempat_lahir_wali' => $this->input->post('tempat_lahir_wali'),
				'tanggal_lahir_wali' => $this->input->post('tanggal_lahir_wali'),
				'kewarganegaraan_wali' => $this->input->post('kewarganegaraan_wali'),
				'agama_wali' => $this->input->post('agama_wali'),
				'pendidikan_wali' => $this->input->post('pendidikan_wali'),
				'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
				'penghasilan_wali' => $this->input->post('penghasilan_wali'),
				'alamat_wali' => $this->input->post('alamat_wali'),
				'no_telepon_hp_wali' => $this->input->post('no_telepon_hp_wali'),
			);

		$this->load->model('ppdb/model_orangtua_wali');
		$this->model_orangtua_wali->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('wali', "<script>alert('Data wali berhasil diperbarui!');</script>");
		redirect('ppdb/admin/buku_induk');
	}

	public function ubahstatus() 
	{
		$this->load->model('ppdb/model_siswa');
		foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$arrdata=array("status_siswa" => $this->input->post('button'));
			$this->model_siswa->update($arrdata, $nisn_siswa);	
		}
		$this->session->set_flashdata('status', "<script>alert('Status siswa berhasil diubah!');</script>");
		redirect('ppdb/admin/buku_induk');

	}

}
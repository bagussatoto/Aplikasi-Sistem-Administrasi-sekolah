<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
// function __construct(){
// 		parent::__construct();
		
// 		if ($this->session->userdata('isLogin') != TRUE) {
// 			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
// 			redirect('login');
// 			exit;
// 		}
// 		if ($this->session->userdata('jabatan') != 'Siswa') {
// 			$this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
// 			//$this->load->view('login');
// 			redirect('login');
// 			exit;
// 		}
// 	}

	public function index(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->template->load('siswa/dashboard','siswa/home', $data);
	}


	public function klinik_un_siswa(){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$this->load->model('distribusi/mod_klinik_un');
		// Mengambil data siswa yang login saja
		$nisn = $this->session->userdata('nisn');
		$data['klinik_un'] = $this->mod_klinik_un->get($nisn);
		
		$this->template->load('siswa/dashboard','siswa/klinik_un_siswa',$data);
	}

	public function save_klinik_un_siswa(){
		$this->load->model('distribusi/mod_siswa');
		$this->load->model('distribusi/mod_tahunajaran');
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$data = array(
				'nisn'			=> $this->session->nisn,
				'nama_siswa'	=> $this->session->Nama,
				'kelas'			=> $this->mod_siswa->get_kelas($this->session->nisn)->nama_kelas,
				'req_materi'	=> $this->input->post('req_materi'),
				'jumlah_peserta'=> $this->input->post('jumlah_peserta'),
				'id_tahun_ajaran' => $this->mod_tahunajaran->getaktif()->id_tahun_ajaran
			);
		$this->load->model('distribusi/mod_klinik_un');
		$this->mod_klinik_un->insert($data);

		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
	
			// $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
   //          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
   //          <h4><i class="icon fa fa-warning"></i> Alert!</h4> Data berhasil disimpan.
   //          </div>');
		
		
		redirect('distribusi/siswa/klinik_un_siswa');
	}

	public function siswa_mutasi(){
		$this->load->model('distribusi/mod_siswa');
		$this->load->model('distribusi/mod_orangtua_wali');

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['row_siswa'] = $this->mod_siswa->select($this->session->userdata('nisn'));
		$data['row_ortu'] = $this->mod_orangtua_wali->getorangtua($this->session->userdata('nisn'));
		// $data['row_wali'] = $this->mod_orangtua_wali->select($this->session->userdata('id_orangtua'));
		
		
		// $this->template->load('kesiswaan/siswa/view_template_siswa','distribusi/siswa/siswa_mutasi',$data);
		$this->template->load('siswa/dashboard', 'siswa/siswa_mutasi', $data);
	}

	public function save_siswa_mutasi_data_siswa(){
		
		$config['upload_path']          = './assets/distribusi/foto_siswa/';
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

		$this->load->model('distribusi/mod_siswa');

		// var_dump($foto); exit;

		$data = array(

		'nisn'=>$this->input->post('nisn'),
		'no_induk_siswa'=>$this->input->post('no_induk_siswa'),
		'foto'=>$foto,
		'nik'=>$this->input->post('nik'),
		'nama'=>$this->input->post('nama'),
		'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
		'tempat_lahir'=>$this->input->post('tempat_lahir'),
		'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
		'agama'=>$this->input->post('agama'),
		'berkebutuhan_khusus'=>$this->input->post('berkebutuhan_khusus'),
		'alamat'=>$this->input->post('alamat'),
		'rt'=>$this->input->post('rt'),
		'rw'=>$this->input->post('rw'),
		'nama_dusun'=>$this->input->post('nama_dusun'),
		'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
		'kecamatan'=>$this->input->post('kecamatan'),
		'kode_pos'=>$this->input->post('kode_pos'),
		'tempat_tinggal'=>$this->input->post('tempat_tinggal'),
		'kategori_penduduk'=>$this->input->post('kategori_penduduk'),
		'transportasi'=>$this->input->post('transportasi'),
		'no_telepon'=>$this->input->post('no_telepon'),
		'email'=>$this->input->post('email'),
		'nama_sd_mi'=>$this->input->post('nama_sd_mi'),
		'pernah_paud'=>$this->input->post('pernah_paud'),
		'no_skhun_mi'=>$this->input->post('no_skhun_mi'),
		'no_seri_skhun_s'=>$this->input->post('no_seri_skhun_s'),
		'no_seri_ijazah_sd_mi'=>$this->input->post('no_seri_ijazah_sd_mi'),
		'penerima_kps_kks_pkh_kip'=>$this->input->post('penerima_kps_kks_pkh_kip'),
		'no_penerima'=>$this->input->post('no_penerima'),
		'anak_ke'=>$this->input->post('anak_ke'),
		'jumlah_saudara_kandung'=>$this->input->post('jumlah_saudara_kandung'),
		'jumlah_saudara_tiri'=>$this->input->post('jumlah_saudara_tiri'),
		'jumlah_saudara_angkat'=>$this->input->post('jumlah_saudara_angkat'),
		'status_dalam_keluarga'=>$this->input->post('status_dalam_keluarga'),
		'pernah_menderita_sakit'=>$this->input->post('pernah_menderita_sakit'),
		'pernah_mengaji'=>$this->input->post('pernah_mengaji'),
		'keterangan_mengaji'=>$this->input->post('keterangan_mengaji'),
		'anak_yatim_piatu'=>$this->input->post('anak_yatim_piatu'),
		'bahasa_sehari_hari_dirumah'=>$this->input->post('bahasa_sehari_hari_dirumah'),
		'prestasi_disekolah'=>$this->input->post('prestasi_disekolah'),
		'tinggi_badan'=>$this->input->post('tinggi_badan'),
		'berat_badan'=>$this->input->post('berat_badan'),
		'hobi'=>$this->input->post('hobi'),
		'asal_mutasi'=>$this->input->post('asal_mutasi'),
		'lama_belajar_disd_mi'=>$this->input->post('lama_belajar_disd_mi'),
		// 'id_orangtua'=>$this->session->userdata('id_orangtua')

			);
		$this->load->model('distribusi/mod_siswa');
		$this->mod_siswa->update($data, $this->uri->segment(4));
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		// $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
  //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  //               <h4><i class="icon fa fa-warning"></i> Alert!</h4>
  //               Data berhasil disimpan.
  //             </div>');
		redirect('distribusi/siswa/siswa_mutasi');
	}


	public function insert_siswa_mutasi_data_orangtua(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('distribusi/mod_orangtua_wali');

		$data = array(

		'id_orangtua'=>$this->input->post('id_orangtua'),
		'nama_ayah'=>$this->input->post('nama_ayah'),
		'gelar_depan_ayah'=>$this->input->post('gelar_depan_ayah'),
		'gelar_belakang_ayah'=>$this->input->post('gelar_belakang_ayah'),
		'tempat_lahir_ayah'=>$this->input->post('tempat_lahir_ayah'),
		'tanggal_lahir_ayah'=>$this->input->post('tanggal_lahir_ayah'),
		'kewarganegaraan_ayah'=>$this->input->post('kewarganegaraan_ayah'),
		'agama_ayah'=>$this->input->post('agama_ayah'),
		'pendidikan_ayah'=>$this->input->post('pendidikan_ayah'),
		'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
		'penghasilan_ayah'=>$this->input->post('penghasilan_ayah'),
		'ayah_berkebutuhan_khusus'=>$this->input->post('ayah_berkebutuhan_khusus'),
		'no_telepon_hp_ayah'=>$this->input->post('no_telepon_hp_ayah'),
		'nama_ibu'=>$this->input->post('nama_ibu'),
		'gelar_depan_ibu'=>$this->input->post('gelar_depan_ibu'),
		'gelar_belakang_ibu'=>$this->input->post('gelar_belakang_ibu'),
		'tempat_lahir_ibu'=>$this->input->post('tempat_lahir_ibu'),
		'tanggal_lahir_ibu'=>$this->input->post('tanggal_lahir_ibu'),
		'kewarganegaraan_ibu'=>$this->input->post('kewarganegaraan_ibu'),
		'agama_ibu'=>$this->input->post('agama_ibu'),
		'pendidikan_ibu'=>$this->input->post('pendidikan_ibu'),
		'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
		'penghasilan_ibu'=>$this->input->post('penghasilan_ibu'),
		'ibu_berkebutuhan_khusus'=>$this->input->post('ibu_berkebutuhan_khusus'),
		'nomor_telepon_ibu'=>$this->input->post('nomor_telepon_ibu'),

		'nama_wali'=>$this->input->post('nama_wali'),
		'tempat_lahir_wali'=>$this->input->post('tempat_lahir_wali'),
		'tanggal_lahir_wali'=>$this->input->post('tanggal_lahir_wali'),
		'pendidikan_wali'=>$this->input->post('pendidikan_wali'),
		'kewarganegaraan_wali'=>$this->input->post('kewarganegaraan_wali'),
		'agama_wali'=>$this->input->post('agama_wali'),
		'pekerjaan_wali'=>$this->input->post('pekerjaan_wali'),
		'penghasilan_wali'=>$this->input->post('penghasilan_wali'),
		'alamat_wali'=>$this->input->post('alamat_wali'),
		'no_telepon_hp_wali'=>$this->input->post('no_telepon_hp_wali'),



		);

		$this->load->model('distribusi/mod_siswa');
		$this->load->model('distribusi/mod_orangtua_wali');
		$this->mod_orangtua_wali->insert($data,  $this->uri->segment(4));
		$id_orangtua = $this->db->insert_id();

		$data = array(
			'id_orangtua' => $id_orangtua,
		);
		$this->mod_siswa->update($data, $this->session->userdata('nisn'));
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		// $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
  //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  //               <h4><i class="icon fa fa-warning"></i> Alert!</h4>
  //               Data berhasil disimpan.
  //             </div>');
		redirect('distribusi/siswa/siswa_mutasi');
	}

	public function update_siswa_mutasi_data_orangtua(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('distribusi/mod_orangtua_wali');

		$data = array(

		'id_orangtua'=>$this->input->post('id_orangtua'),
		'nama_ayah'=>$this->input->post('nama_ayah'),
		'gelar_depan_ayah'=>$this->input->post('gelar_depan_ayah'),
		'gelar_belakang_ayah'=>$this->input->post('gelar_belakang_ayah'),
		'tempat_lahir_ayah'=>$this->input->post('tempat_lahir_ayah'),
		'tanggal_lahir_ayah'=>$this->input->post('tanggal_lahir_ayah'),
		'kewarganegaraan_ayah'=>$this->input->post('kewarganegaraan_ayah'),
		'agama_ayah'=>$this->input->post('agama_ayah'),
		'pendidikan_ayah'=>$this->input->post('pendidikan_ayah'),
		'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
		'penghasilan_ayah'=>$this->input->post('penghasilan_ayah'),
		'ayah_berkebutuhan_khusus'=>$this->input->post('ayah_berkebutuhan_khusus'),
		'no_telepon_hp_ayah'=>$this->input->post('no_telepon_hp_ayah'),
		'nama_ibu'=>$this->input->post('nama_ibu'),
		'gelar_depan_ibu'=>$this->input->post('gelar_depan_ibu'),
		'gelar_belakang_ibu'=>$this->input->post('gelar_belakang_ibu'),
		'tempat_lahir_ibu'=>$this->input->post('tempat_lahir_ibu'),
		'tanggal_lahir_ibu'=>$this->input->post('tanggal_lahir_ibu'),
		'kewarganegaraan_ibu'=>$this->input->post('kewarganegaraan_ibu'),
		'agama_ibu'=>$this->input->post('agama_ibu'),
		'pendidikan_ibu'=>$this->input->post('pendidikan_ibu'),
		'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
		'penghasilan_ibu'=>$this->input->post('penghasilan_ibu'),
		'ibu_berkebutuhan_khusus'=>$this->input->post('ibu_berkebutuhan_khusus'),
		'nomor_telepon_ibu'=>$this->input->post('nomor_telepon_ibu'),

		'nama_wali'=>$this->input->post('nama_wali'),
		'tempat_lahir_wali'=>$this->input->post('tempat_lahir_wali'),
		'tanggal_lahir_wali'=>$this->input->post('tanggal_lahir_wali'),
		'pendidikan_wali'=>$this->input->post('pendidikan_wali'),
		'kewarganegaraan_wali'=>$this->input->post('kewarganegaraan_wali'),
		'agama_wali'=>$this->input->post('agama_wali'),
		'pekerjaan_wali'=>$this->input->post('pekerjaan_wali'),
		'penghasilan_wali'=>$this->input->post('penghasilan_wali'),
		'alamat_wali'=>$this->input->post('alamat_wali'),
		'no_telepon_hp_wali'=>$this->input->post('no_telepon_hp_wali'),



		);

		$this->load->model('distribusi/mod_siswa');
		$this->load->model('distribusi/mod_orangtua_wali');
		$this->mod_orangtua_wali->update($data,  $this->uri->segment(4));


		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		redirect('distribusi/siswa/siswa_mutasi');
	}
}



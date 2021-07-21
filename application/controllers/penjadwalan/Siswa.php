<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
			redirect('login');
			exit;
		}
		if ($this->session->userdata('jabatan') != 'Siswa') {
			$this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
			//$this->load->view('login');
			redirect('login');
			exit;
		}
	}

	public function index(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->template->load('siswa/dashboard_siswa','siswa/home', $data);
	}


	public function klinik_un_siswa(){
		
$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->template->load('siswa/dashboard_siswa','siswa/klinik_un_siswa',$data);
	}

	public function save_klinik_un_siswa(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$data = array(
				'nisn'=>$this->input->post('nisn'),
				'nama_siswa'=>$this->input->post('nama_siswa'),
				'kelas'=>$this->input->post('kelas'),
				'req_materi'=>$this->input->post('req_materi'),
				'jumlah_peserta'=>$this->input->post('jumlah_peserta'),
				'NIP'=>$this->session->userdata('NIP')
			);
		$this->load->model('penjadwalan/mod_klinik_un');
		$this->mod_klinik_un->insert($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Data berhasil disimpan.
              </div>');
		redirect('penjadwalan/siswa/klinik_un_siswa');
	}

	public function siswa_mutasi(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$this->template->load('siswa/dashboard_siswa','siswa/siswa_mutasi',$data);
	}

	public function save_siswa_mutasi_data_siswa(){
		
		$data = array(

		'nisn'=>$this->input->post('nisn'),
		'no_induk_siswa'=>$this->input->post('no_induk_siswa'),
		'foto'=>$this->input->post('foto'),
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
		'asal_sekolah'=>$this->input->post('asal_sekolah'),
		'lama_belajar_disd_mi'=>$this->input->post('lama_belajar_disd_mi'),
		'id_orangtua'=>$this->session->userdata('id_orangtua')

			);
		$this->load->model('penjadwalan/mod_siswa');
		$this->mod_siswa->insert($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Data berhasil disimpan.
              </div>');
		redirect('penjadwalan/siswa/siswa_mutasi');
	}


	public function save_siswa_mutasi_data_orangtua(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$data = array(

		
		'nama_ayah'=>$this->input->post('nama_ayah'),
		'gelar_depan_ayah'=>$this->input->post('gelar_depan_ayah'),
		'gelar_belakang_ayah'=>$this->input->post('gelar_belakang_ayah'),
		'tempat_lahir_ayah'=>$this->input->post('tempat_lahir_ayah'),
		'tangggal_lahir_ayah'=>$this->input->post('tangggal_lahir_ayah'),
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


		);
		$this->load->model('penjadwalan/mod_orangtua_wali');
		$this->mod_siswa->insert($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Data berhasil disimpan.
              </div>');
		redirect('penjadwalan/siswa/siswa_mutasi');
	}

	public function save_siswa_mutasi_data_wali(){

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$data = array(

		
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
		$this->load->model('penjadwalan/mod_orangtua_wali');
		$this->mod_siswa->insert($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Data berhasil disimpan.
              </div>');
		redirect('penjadwalan/siswa/siswa_mutasi');
	}

	public function jadwalmapel_siswa(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$this->load->model('penjadwalan/mod_siswa');
		$row_siswa = $this->mod_siswa->getinfosiswa($this->session->nisn);
		$data['row_siswa'] = $row_siswa;
		
		//if (@$this->uri->segment(4) == '') { $jenjang = 7; } else { $jenjang = @$this->uri->segment(4); }
		$jenjang = $row_siswa->jenjang;
		$data['jenjang'] = $jenjang;

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_namamapel');
		$data['tabel_namamapel'] = $this->mod_namamapel->get();
		$this->load->model('penjadwalan/mod_mapel');
		$data['tabel_mapel'] = $this->mod_mapel->get();
		$this->load->model('penjadwalan/mod_prioritaskhusus');
		$data['tabel_prioritaskhusus'] = $this->mod_prioritaskhusus->get();
		$this->load->model('penjadwalan/mod_kelasreguler');
		$tabel_kelasreguler = $this->mod_kelasreguler->get(array("jenjang"=>$jenjang));
		$data['tabel_kelasreguler'] = $tabel_kelasreguler;
		$this->load->model('penjadwalan/mod_pegawai');
		$data['tabel_pegawai'] = $this->mod_pegawai->get(array("Status"=>"Guru"));
		$this->load->model('penjadwalan/mod_jammengajar');
		$this->load->model('penjadwalan/mod_jadwalmapel');
		$this->load->model('penjadwalan/mod_harirentang');
		


		for ($i=0; $i<=11; $i++) {
			$data['hari_rentang']['Senin'][$i] = $this->mod_harirentang->selectdata('Senin', $i);
			$data['hari_rentang']['Selasa'][$i] = $this->mod_harirentang->selectdata('Selasa', $i);
			$data['hari_rentang']['Rabu'][$i] = $this->mod_harirentang->selectdata('Rabu', $i);
			$data['hari_rentang']['Kamis'][$i] = $this->mod_harirentang->selectdata('Kamis', $i);
			$data['hari_rentang']['Jumat'][$i] = $this->mod_harirentang->selectdata('Jumat', $i);
			$data['hari_rentang']['Sabtu'][$i] = $this->mod_harirentang->selectdata('Sabtu', $i);
			$data['hari_rentang']['Minggu'][$i] = $this->mod_harirentang->selectdata('Minggu', $i);


			$data['tabel_prioritaskhusus_senin'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Senin", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_prioritaskhusus_selasa'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Selasa", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_prioritaskhusus_rabu'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Rabu", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_prioritaskhusus_kamis'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Kamis", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_prioritaskhusus_jumat'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Jumat", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_prioritaskhusus_sabtu'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Sabtu", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_prioritaskhusus_minggu'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Minggu", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));

			$data['tabel_khusus_senin'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Senin", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_khusus_selasa'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Selasa", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_khusus_rabu'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Rabu", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_khusus_kamis'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Kamis", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_khusus_jumat'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Jumat", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_khusus_sabtu'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Sabtu", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_khusus_minggu'][$i] = $this->mod_prioritaskhusus->get(array("hari"=>"Minggu", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
		}

		for ($i=0; $i<=11; $i++) {
			$data['tabel_jadwalprioritas_senin'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Senin", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_jadwalprioritas_selasa'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Selasa", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_jadwalprioritas_rabu'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Rabu", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_jadwalprioritas_kamis'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Kamis", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_jadwalprioritas_jumat'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Jumat", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_jadwalprioritas_sabtu'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Sabtu", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));
			$data['tabel_jadwalprioritas_minggu'][$i] = $this->mod_prioritaskhusus->getguruprioritas(array("hari"=>"Minggu", "jam_ke"=>$i, "jenis_prkh"=>"prioritas"));

			$data['tabel_jadwalkhusus_senin'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Senin", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_jadwalkhusus_selasa'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Selasa", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_jadwalkhusus_rabu'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Rabu", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_jadwalkhusus_kamis'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Kamis", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_jadwalkhusus_jumat'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Jumat", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_jadwalkhusus_sabtu'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Sabtu", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));
			$data['tabel_jadwalkhusus_minggu'][$i] = $this->mod_prioritaskhusus->getgurukhusus(array("hari"=>"Minggu", "jam_ke"=>$i, "jenis_prkh"=>"khusus"));

			foreach ($tabel_kelasreguler as $row_kelasreguler) {
				$data['tabel_jadwalmapel_senin'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Senin", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
				$data['tabel_jadwalmapel_selasa'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Selasa", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
				$data['tabel_jadwalmapel_rabu'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Rabu", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
				$data['tabel_jadwalmapel_kamis'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Kamis", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
				$data['tabel_jadwalmapel_jumat'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Jumat", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
				$data['tabel_jadwalmapel_sabtu'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Sabtu", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
				$data['tabel_jadwalmapel_minggu'][$row_kelasreguler->id_kelas_reguler][$i] = $this->mod_jadwalmapel->get(array("hari"=>"Minggu", "jam_ke"=>$i, "id_kelas_reguler"=>$row_kelasreguler->id_kelas_reguler));
							
			}

		}

		$data['tabel_jammengajar'] = $this->mod_jammengajar->get();	

		$this->template->load('siswa/dashboard','siswa/jadwalmapel_siswa',$data);
	}

	public function jadwaltambahan_siswa(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$this->load->model('penjadwalan/mod_siswa');
		$row_siswatam = $this->mod_siswa->getinfosiswatam($this->session->nisn);
		$data['row_siswatam'] = $row_siswatam;
		
		//if (@$this->uri->segment(4) == '') { $jenjang = 7; } else { $jenjang = @$this->uri->segment(4); }
		$nama_kelas_tambahan = $row_siswatam->nama_kelas_tambahan;
		$data['nama_kelas_tambahan'] = $nama_kelas_tambahan;

		$this->load->model('penjadwalan/mod_kelastambahan');
		$data['tabel_kelastambahan'] = $this->mod_kelastambahan->get();
		$this->load->model('penjadwalan/mod_namamapel');
		$data['tabel_namamapel'] = $this->mod_namamapel->get();
		$this->load->model('penjadwalan/mod_pegawai');
		$data['tabel_pegawai'] = $this->mod_pegawai->get();
		$this->load->model('penjadwalan/mod_jadwaltambahan');
		// $data['tabel_jadwaltambahan'] = $this->mod_jadwaltambahan->get();
		$data['tabel_jadwaltambahan'] = $this->mod_jadwaltambahan->get(array('kelas_tambahan.nama_kelas_tambahan' => $nama_kelas_tambahan));

	
		
		
		$this->template->load('siswa/dashboard','siswa/jadwaltambahan_siswa',$data);
	}

	
}



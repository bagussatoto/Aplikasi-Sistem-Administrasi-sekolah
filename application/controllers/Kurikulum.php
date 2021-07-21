<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('pegawai_model');
		$this->load->model('presensi_pegawai_model');
		$this->load->model('penilaian/presensi_siswa_model');
		$this->load->model('tahunajaran_model');
		$this->load->model('tanggal_libur_model');
		$this->load->model('tanggal_libur_nasional_model');
		$this->load->model('jabatan_model');
		$this->load->model('penilaian/M_data');
		// $this->load->model('ppdb/model_pendaftar_ppdb');
		// $this->load->model('ppdb/model_form_ppdb');
		// $this->load->model('ppdb/model_ketentuan_ppdb');
		// $this->load->model('ppdb/model_form_ujian');
		// $this->load->model('ppdb/model_pengumuman_ppdb');
		// $this->load->model('ppdb/model_tahunajaran');
		// $this->load->model('ppdb/Model_siswa');
		$this->load->model('pegawai_model');
		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
			redirect('login');
			exit;
		}
		if (($this->session->userdata('jabatan') != 'Kurikulum')&&($this->session->userdata('jabatan') != 'Superadmin')&&($this->session->userdata('jabatan') != 'Kesiswaan')&&($this->session->userdata('jabatan') != 'Guru')&&($this->session->userdata('jabatan') != 'Pegawai')&&($this->session->userdata('jabatan') != 'Kepsek')) {
			$this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
			//$this->load->view('login');
			redirect('login');
			exit;
		}
	}

	public function index()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('kurikulum/dashboard','kurikulum/home' , $data);
	}

	public function profile()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username; 
		$data['datpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
		$this->template->load('kurikulum/dashboard','pegawai/profile', $data);
	}

	public function editprofil(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;
		$data['rowpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
		$this->template->load('kurikulum/dashboard','kurikulum/editprofil', $data);
		if($this->input->post('submit')){
			$this->load->model('pegawai_model');
			$this->pegawai_model->updatedatpeg();	
			$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
			redirect('kurikulum/editprofil');
		} 
	}

	public function gantipassword()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;  
		$this->template->load('kurikulum/dashboard','kurikulum/gantipassword', $data);
	}

public function updatepassword() {
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$passwordbaru = $this->input->post('passwordbaru',true);
		$confirmpassword = $this->input->post('confirmpassword',true);
		if ($passwordbaru == $confirmpassword) {
			$cek =$this->login_model->proseslogin($username,$password);
			$hasil = count($cek); 
			if ($hasil > 0){
				// $this->login_model->cekPegawai($cek);
				
				$this->load->model('akun_model');
				$this->akun_model->update(array("password"=>$passwordbaru), $cek->id_akun);
				$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');
				redirect('kurikulum/gantipassword');
			}else{
				// $this->session->set_flashdata("warning","<b>Kombinasi Username dan Password Anda tidak ditemukan, Pastikan Anda memasukkan Username dan Password yang benar</b>");

				$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Lama Salah !" ,  "error" )</script>');



				redirect('kurikulum/gantipassword');
			}
		} else {
			$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Baru Salah !" ,  "error" )</script>');

			redirect('kurikulum/gantipassword');
		}
		
	}

	// Distribusi Kelas NADya
	public function distribusi_reg(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;  
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan//distribusi_reg' ,$data);
	}

	public function pembagian() {
		$tipe = $this->input->post('btntipe');
		if ($tipe == "Berdasarkan Agama dan Jenis Kelamin") {
			if ($this->input->post('penamaan') == "angka") {
				$urutan = array('-1','-2','-3','-4','-5','-6','-7','-8','-9','-10','-11','-12','-13','-14','-15','-16','-17','-18','-19','-20');
			} else if ($this->input->post('penamaan') == "huruf") {
				$urutan = array('-A','-B','-C','-D','-E','-F','-G','-H','-I','-J','-K','-L','-M','-N','-O','-P','-Q','-R','-S','-T');
			} else if ($this->input->post('penamaan') == "romawi") {
				$urutan = array('-I','-II','-III','-IV','-V','-VI','-VII','-VIII','-IX','-X','-XI','-XII','-XII','-XIV','-XV','-XVI','-XVII','-XVIII','-XIV','-XX');
			}
			$jumlah_kelas = $this->input->post('jumlah_kelas');
			$jenjang = $this->input->post('jenjang');
			$nama_kelas = array();
			for ($i=0;$i<$jumlah_kelas;$i++) {
				$nama_kelas[$i] = $jenjang.$urutan[$i];
			}

			$data['jumlah_kelas'] = $jumlah_kelas;			
			$data['jenjang'] = $jenjang;			
			$data['nama_kelas'] = $nama_kelas;	
			$data['nama'] = $this->session->Nama;
			$data['foto'] = $this->session->foto;
			$data['username'] = $this->session->username;  		
			$this->template->load('kurikulum/dashboard','superadmin/kesiswaan//pembagian_agama', $data);
		} else {
			$data['nama'] = $this->session->Nama;
			$data['foto'] = $this->session->foto;
			$data['username'] = $this->session->username;  
			$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/pembagian_prestasi', $data);
		}
	}

	public function hasil_pembagian_agama(){
		//$jml_siswa = 32;
		$jml_kelas = $this->input->post('jumlah_kelas'); //3;
		//$jml_sisa = $jml_siswa % $jml_kelas;
		$jml_perkelas = array(); 
		$total_siswa = 0;
		for ($i=0;$i<$jml_kelas;$i++){
			$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$total_siswa = $total_siswa + $jml_perkelas[$i];
		//	$jml_perkelas[$i] = ($jml_siswa - $jml_sisa) / $jml_kelas;
		//	if ($i < $jml_sisa) { $jml_perkelas[$i]++; }
		}

		print_r($jml_perkelas);

		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
		
		//$arridkelasreguler = array('1', '2', '3');
		//$arridkelasreguler = array('1', '2', '3');
		$arridkelasreguler = array();
		$arridkelasregulerberjalan = array();

		$arrpersenlaki2 = array();
		$arrpersenperempuan = array();
		
		$arrpersenislam =    array();
		$arrpersenkristen =  array();
		$arrpersenkatholik = array();
		$arrpersenhindu =    array();
		$arrpersenbudha =    array();
		$arrpersenlainnya =  array();

		for ($i=0;$i<$jml_kelas;$i++){
			//$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$arrdata = array(
				"nama_kelas"=>$this->input->post('nama_kelas'.$i),
				"jenjang"=>$this->input->post('jenjang'),
				"kuota_kelas_reguler"=>$jml_perkelas[$i],
				"jumlah_kelas_reguler"=>$jml_kelas,
				"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
			);
			//INSERT INTO `kelas_reguler`(`id_kelas_reguler`, `nama_kelas`, `jenjang`, `kuota_kelas_reguler`, `jumlah_kelas_reguler`, `id_tahun_ajaran`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
			$this->mod_kelas_reguler->insert($arrdata);
			$arridkelasreguler[$i] = $this->db->insert_id();

			$arrdata = array(
				"wali_kelas"=>"",
				"id_kelas_reguler"=>$arridkelasreguler[$i],
				"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
			);
			//INSERT INTO `kelas_reguler_berjalan`(`id_kelas_reguler_berjalan`, `wali_kelas`, `id_kelas_reguler`, `id_tahun_ajaran`) VALUES ([value-1],[value-2],[value-3],[value-4])
			$this->mod_kelas_reguler_berjalan->insert($arrdata);
			$arridkelasregulerberjalan[$i] = $this->db->insert_id();

		//	$jml_perkelas[$i] = ($jml_siswa - $jml_sisa) / $jml_kelas;
		//	if ($i < $jml_sisa) { $jml_perkelas[$i]++; }

			$arrpersenlaki2[$i] = $this->input->post('persentaselakilaki'.$i);
			$arrpersenperempuan[$i] = $this->input->post('persentaseperempuan'.$i);
			
			$arrpersenislam[$i] =    $this->input->post('persentaseislam'.$i);
			$arrpersenkristen[$i] =  $this->input->post('persentasekristen'.$i);
			$arrpersenkatholik[$i] = $this->input->post('persentasekatholik'.$i);
			$arrpersenhindu[$i] =    $this->input->post('persentasehindu'.$i);
			$arrpersenbudha[$i] =    $this->input->post('persentasebudha'.$i);
			$arrpersenlainnya[$i] =  $this->input->post('persentaselainnya'.$i);

		}

		$arralokasi = array(array());
		for ($i=0;$i<$jml_kelas;$i++) {
			
			$progress = 0;
			$progressjklainnya = 0;
			$progressjkbudha = 0;
			$progressjkhindu = 0;
			$progressjkkatholik = 0;
			$progressjkkristen = 0;
			$progressjkislam = 0;
			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				$progress = $progress + (100 / $jml_perkelas[$i]);

				if ($progress <= ($arrpersenlainnya[$i])) {
					$arralokasi[$i][$j][0] = 'Lainnya'; 

					$progressjklainnya = $progressjklainnya + (100 / ($jml_perkelas[$i] * ($arrpersenlainnya[$i] / 100)));	
					if ($progressjklainnya <= ($arrpersenlaki2[$i])) {
						$arralokasi[$i][$j][1] = 'Laki-Laki'; 
					} else {
						$arralokasi[$i][$j][1] = 'Perempuan';
					}
				} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i])) {
					$progressjkbudha = $progressjkbudha + (100 / ($jml_perkelas[$i] * ($arrpersenbudha[$i] / 100)));	
					if ($progressjkbudha <= ($arrpersenlaki2[$i])) {
						$arralokasi[$i][$j][1] = 'Laki-Laki'; 
					} else {
						$arralokasi[$i][$j][1] = 'Perempuan';
					}

					$arralokasi[$i][$j][0] = 'Budha';
				} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i])) {
					$progressjkhindu = $progressjkhindu + (100 / ($jml_perkelas[$i] * ($arrpersenhindu[$i] / 100)));	
					if ($progressjkhindu <= ($arrpersenlaki2[$i])) {
						$arralokasi[$i][$j][1] = 'Laki-Laki'; 
					} else {
						$arralokasi[$i][$j][1] = 'Perempuan';
					}

					$arralokasi[$i][$j][0] = 'Hindu';
				} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i] + $arrpersenkatholik[$i])) {
					$progressjkkatholik = $progressjkkatholik + (100 / ($jml_perkelas[$i] * ($arrpersenkatholik[$i] / 100)));	
					if ($progressjkkatholik <= ($arrpersenlaki2[$i])) {
						$arralokasi[$i][$j][1] = 'Laki-Laki'; 
					} else {
						$arralokasi[$i][$j][1] = 'Perempuan';
					}

					$arralokasi[$i][$j][0] = 'Katholik';
				} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i] + $arrpersenkatholik[$i] + $arrpersenkristen[$i])) {
					$progressjkkristen = $progressjkkristen + (100 / ($jml_perkelas[$i] * ($arrpersenkristen[$i] / 100)));	
					if ($progressjkkristen <= ($arrpersenlaki2[$i])) {
						$arralokasi[$i][$j][1] = 'Laki-Laki'; 
					} else {
						$arralokasi[$i][$j][1] = 'Perempuan';
					}

					$arralokasi[$i][$j][0] = 'Kristen';
		 		} else { //if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i] + $arrpersenkatholik[$i]) + $arrpersenkristen[$i] + $arrpersenislam[$i])) {
		 			$progressjkislam = $progressjkislam + (100 / ($jml_perkelas[$i] * ($arrpersenislam[$i] / 100)));	
		 			if ($progressjkislam <= ($arrpersenlaki2[$i])) {
		 				$arralokasi[$i][$j][1] = 'Laki-Laki'; 
		 			} else {
		 				$arralokasi[$i][$j][1] = 'Perempuan';
		 			}

		 			$arralokasi[$i][$j][0] = 'Islam';
		 		}
		 	}
		 }
		 
		//echo "Alokasi : <br/>";
		 for ($i=0;$i<$jml_kelas;$i++) {
			//echo "Kelas : ".$i."<br/>";
		 	for ($j=0;$j<$jml_perkelas[$i];$j++) {
		 		 //echo "Alokasi : ".@$arralokasi[$i][$j][0]." ".@$arralokasi[$i][$j][1]."<br/>";
		 	}
		 }

		 $arrdatasiswa = array(array());
		 $this->load->model('distribusi/mod_siswa');
		 $tabelsiswa = $this->mod_siswa->get();
		 foreach ($tabelsiswa as $rowsiswa) {
		 	$arrdatasiswa[] = array($rowsiswa->nisn, $rowsiswa->nama, $rowsiswa->agama, $rowsiswa->jenis_kelamin, '');
		 }

		 for ($i=0;$i<count($arrdatasiswa);$i++) {
			//echo @$arrdatasiswa[$i][0]." ".@$arrdatasiswa[$i][1]." ".@$arrdatasiswa[$i][2]." ".@$arrdatasiswa[$i][3]." ".@$arrdatasiswa[$i][4]."<br/>";
		 }		



		 for ($i=0;$i<$jml_kelas;$i++) {	
			//echo "Kelas $i =======<br/>";
		 	for ($j=0;$j<$jml_perkelas[$i];$j++) {
				//echo "Murid No $j =======<br/>";
		 		if (@$arralokasi[$i][$j][2] == '') {
		 			$ketemu = false;
		 			for ($k=0;$k<count($arrdatasiswa);$k++) {
		 				if (@$arrdatasiswa[$k][4] == '') {
		 					if ((@$arrdatasiswa[$k][2] == $arralokasi[$i][$j][0]) && (@$arrdatasiswa[$k][3] == $arralokasi[$i][$j][1])) {
								$arrdatasiswa[$k][4] = $i+1; //kelas harus mulai dari 1 karena kalau mulai 0 dianggap kosong ''
								$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
								$ketemu = true;
								//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]." dua2nya<br/>";
								break;
							}
						}
					}	
					if ($ketemu == false) {
						for ($k=0;$k<count($arrdatasiswa);$k++) {
							if (@$arrdatasiswa[$k][4] == '') {
								if ((@$arrdatasiswa[$k][2] == $arralokasi[$i][$j][0])) {
									$arrdatasiswa[$k][4] = $i+1;
									$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
									$ketemu = true;
									//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]."  agama sj<br/>";
									break;
								}
							}
						}	
					}	 		
					if ($ketemu == false) {
						for ($k=0;$k<count($arrdatasiswa);$k++) {
							if (@$arrdatasiswa[$k][4] == '') {
								if ((@$arrdatasiswa[$k][3] == $arralokasi[$i][$j][1])) {
									$arrdatasiswa[$k][4] = $i+1;
									$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
									$ketemu = true;
									//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]."  jk sj<br/>";
									break;
								}
							}
						}	
					}
					if ($ketemu == false) {
						for ($k=0;$k<count($arrdatasiswa);$k++) {
							if (@$arrdatasiswa[$k][4] == '') {
								if ((@$arrdatasiswa[$k][2] == "Islam")) {
									$arrdatasiswa[$k][4] = $i+1;
									$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
									$ketemu = true;
									//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]."  asal<br/>";
									break;
								}
							}
						}	
					}
				}
			}
		}

		for ($i=0;$i<count($arrdatasiswa);$i++) {
			//echo @$arrdatasiswa[$i][0]." ".@$arrdatasiswa[$i][1]." ".@$arrdatasiswa[$i][2]." ".@$arrdatasiswa[$i][3]." ".@$arrdatasiswa[$i][4]."<br/>";
		}		


		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
		//echo "Alokasizz : <br/>";
		for ($i=0;$i<$jml_kelas;$i++) {
			//echo "Kelas : ".$i."<br/>";
			for ($j=0;$j<$jml_perkelas[$i];$j++) {
		 		 //echo "Alokasi : ".@$arralokasi[$i][$j][0]." ".@$arralokasi[$i][$j][1]." ".@$arralokasi[$i][$j][2]."<br/>";
		 		 //karena index array dari nol, sedangkan kelas dari 1.
		 		 //$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$arridkelasreguler[$i], 'nisn' => @$arralokasi[$i][$j][2]));
				if (@$arralokasi[$i][$j][2] != "") {
					$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$arridkelasregulerberjalan[$i], 'nisn' => @$arralokasi[$i][$j][2]));
				}
			}
		}

		$data['siswa'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan();
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username; 

		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/hasil_pembagian_agama', $data);	
	}


	public function pembagian_prestasi(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username; 
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/pembagian_prestasi',$data);
	}

	public function hasil_pembagian_prestasi(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username; 
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/hasil_pembagian_prestasi',$data);	
	}

	public function distribusi_tam(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/distribusi_tam', $data);
	}

	public function hasil_pembagian_tambahan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/hasil_pembagian_tambahan', $data);	
	}


	public function klinik_un(){
		$this->load->model('distribusi/mod_klinik_un');
		$data['klinik_un'] = $this->mod_klinik_un->get();
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/klinik_un', $data);
	}

	public function hasil_klinik_un() {
		$key = $this->input->post('id_klinik_un');
		$data['nisn'] = $this->input->post('nisn');
		$data['nama_siswa'] = $this->input->post('nama_siswa');
		$data['kelas'] = $this->input->post('kelas');
		$data['req_materi'] = $this->input->post('req_materi');
		$data['jumlah_peserta'] = $this->input->post('jumlah_peserta');
		$data['status_req'] = $this->input->post('status_req');
		$data['respon'] = $this->input->post('respon');
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;


		$this->load->model('distribusi/mod_klinik_un');
		
		$this->mod_klinik_un->insert($data);
		$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data berhasil disimpan!", "success")</script>');
		redirect('kurikulum/distribusi/klinik_un');

	}

	public function simpan_respon(){
		$key = $this->uri->segment(4);
		if ($this->input->post('tanggal') != "") {
			$data['tanggal'] = $this->input->post('tanggal');	
		}
		
		$data['respon'] = $this->input->post('respon');
		$data['status_req'] = 'Sudah Direspon';
		
		$this->load->model('distribusi/mod_klinik_un');
		
		$this->mod_klinik_un->update($data, $key);
		$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data berhasil disimpan!", "success")</script>');
		redirect('kurikulum/distribusi/klinik_un');		
	}

	public function hapus_klinik_un($id){
		$this->load->model('distribusi/mod_klinik_un');
		$this->mod_klinik_un->delete($id);
		$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data Berhasil Dihapus", "success")</script>');
		redirect('kurikulum/klinik_un');
	}


	

	public function mutasi_masuk(){

		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$data['data_pencatatan'] = $this->Mod_siswa_mutasi_masuk->get_pencatatan();

		$data['form_pendaftaran_mutasi_masuk'] = $this->Mod_form_mutasi_masuk->get();
		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->get();
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/mutasi_masuk', $data);


	}

	public function simpan_form_mutasi() 
	{
		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$i=1;
		foreach ($this->db->get('form_pendaftaran_mutasi_masuk')->result() as $form) 
		{ 
			if ($this->input->post('nilai'.$form->id_form_pendaftaran_mutasi_masuk) == "1") 
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
			if ($this->input->post('atribut'.$form->id_form_pendaftaran_mutasi_masuk) != "") 
			{
				$arrdata['atribut'] = $this->input->post('atribut'.$form->id_form_pendaftaran_mutasi_masuk); 
			}
			$this->load->model('distribusi/Mod_form_mutasi_masuk');
			$this->Mod_form_mutasi_masuk->update($arrdata, $form->id_form_pendaftaran_mutasi_masuk);

			$i=$i+1;
		}
		redirect('kurikulum/distribusi/mutasi_masuk');
	}


	public function simpan_respon_mutasi(){
		$key = $this->uri->segment(4);
		
		$data['status_siswa'] = 'Diterima';
		
		$this->load->model('distribusi/mod_klinik_un');
		
		$this->mod_klinik_un->update($data, $key);
		$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data berhasil disimpan!", "success")</script>');
		redirect('kurikulum/distribusi/klinik_un');		
	}


	public function ubah_status_siswa_mutasi($id, $status){
		$data['status_siswa'] = $status;
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');

		$this->Mod_siswa_mutasi_masuk->update($data, $id);
		redirect('kurikulum/distribusi/mutasi_masuk');
	}



	public function editnilai(){

	}

	public function editberkas(){

	}


	public function mutasi_keluar(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/mutasi_keluar',$data);
	}


	public function upload_file()
	{
		$config['upload_path'] = './assets/files';
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);

		$upload = $this->upload->do_upload('pengumuman');

		if ($upload) {
			echo 'Upload berhasil';
			// Masukkan namanya ke DB
			
		} else {
			echo 'Upload gagal!';
			printf($this->upload->display_errors());
		}
	}
	// tutup kesiswaan NADYA

// tutup anggrek
	public function ppdbujian(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->model_pendaftar_ppdb->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->getsiswaangkatan($tahun_aktif);
		$data['tahun_ajaran_selected'] = $tahun_aktif;

		$this->load->model('kesiswaan/model_tahunajaran');
		$data['tahun_ajaran'] = $this->model_tahunajaran->get();

		$this->load->model('kesiswaan/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos($tahun_aktif);
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/ppdbujian', $data);
	}

	

	public function ubahstatus() 
	{
		$this->load->model('ppdb/model_pendaftar_ppdb');
		foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$arrdata=array("status_siswa" => $this->input->post('button'));
			$this->model_pendaftar_ppdb->update($arrdata, $nisn_siswa);	
		}
		$this->session->set_flashdata('status', "<script>alert('Status siswa berhasil diubah!');</script>");
		redirect('kurikulum/ppdbujian');

	}




	public function ppdbneg(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->model_pendaftar_ppdb->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->getsiswaangkatan($tahun_aktif);
		$data['tahun_ajaran_selected'] = $tahun_aktif;

		$this->load->model('kesiswaan/model_tahunajaran');
		$data['tahun_ajaran'] = $this->model_tahunajaran->get();

		$this->load->model('kesiswaan/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos($tahun_aktif);
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/ppdbneg', $data);
	}

	public function daftarulang(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->model_pendaftar_ppdb->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->getsiswaangkatan($tahun_aktif);
		$data['tahun_ajaran_selected'] = $tahun_aktif;

		$this->load->model('kesiswaan/model_tahunajaran');
		$data['tahun_ajaran'] = $this->model_tahunajaran->get();

		$this->load->model('kesiswaan/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos($tahun_aktif);
		$this->template->load('kurikulum/dashboard','superadmin/rancang/daftarulang', $data);

	}

	public function daftarkenaikan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->model_pendaftar_ppdb->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->getsiswaangkatan($tahun_aktif);
		$data['tahun_ajaran_selected'] = $tahun_aktif;

		$this->load->model('kesiswaan/model_tahunajaran');
		$data['tahun_ajaran'] = $this->model_tahunajaran->get();

		$this->load->model('kesiswaan/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos($tahun_aktif);
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/daftarkenaikan', $data);

	}
	public function bukuinduk(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->model_pendaftar_ppdb->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->getsiswaangkatan($tahun_aktif);
		$data['tahun_ajaran_selected'] = $tahun_aktif;

		$this->load->model('kesiswaan/model_tahunajaran');
		$data['tahun_ajaran'] = $this->model_tahunajaran->get();

		$this->load->model('kesiswaan/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb_lolos'] = $this->model_pendaftar_ppdb->getlolos($tahun_aktif);
		$this->template->load('kurikulum/dashboard','superadmin/kesiswaan/bukuinduk', $data);
	}
	 // TUTP KESISWAAN ANGGREK

	
	//Kurikulum 
	// MIa Penilaian

	// Kurikulum MIA

	public function mapel($id_kelas_reguler = "", $jenjang = "", $id_namamapel = "")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		
		if ($id_kelas_reguler == "" ) {
			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();
			$this->load->model('penjadwalan/mod_mapel');
			$data['tabel_mapel'] = $this->mod_mapel->getgroupbyjenjang2();
			$this->load->model('penjadwalan/mod_kelasreguler');
			$data['tabel_kelasreguler'] = $this->mod_kelasreguler->getgroupby();
			$data['edit_mapel'] = null;
			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/mapel', $data);	
		} else {
			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();
			$this->load->model('penjadwalan/mod_mapel');
			$data['tabel_mapel'] = $this->mod_mapel->getgroupbyjenjang2();
			$this->load->model('penjadwalan/mod_kelasreguler');
			$data['tabel_kelasreguler'] = $this->mod_kelasreguler->getgroupby();
			
			//$data['edit_mapel'] = $this->mod_mapel->selectbynamajenjang(str_replace("_", " ", $nama_mapel), $jenjang);
			$data['edit_mapel'] = $this->mod_mapel->selectbyidnamajenjang(str_replace("_", " ", $id_namamapel), $jenjang);

			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/mapel', $data);
		}
		
	}

	public function simpanmapel() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_mapel');
		$this->load->model('penjadwalan/mod_kelasreguler');
		// $this->load->model('penjadwalan/mod_tahunajaran');

		$tabel_kelasreguler = $this->mod_kelasreguler->getbyjenjang($this->input->post('grade'));

		// $tahun_ajaran       = $this->mod_tahunajaran->getaktif()->id_tahun_ajaran;

		//print_r($tabel_kelasreguler);

		foreach ($tabel_kelasreguler as $row_kelasreguler) {

			$data = array(
				'id_namamapel' => $this->input->post('id_namamapel'),
				'kkm' => $this->input->post('kkm'),
				'jam_belajar' => $this->input->post('jam_belajar'),
				'id_kelas_reguler' => $row_kelasreguler->id_kelas_reguler
			);

			//print_r($data);
			//echo "1";

			if ($this->input->post('id_namamapel_old') == "") {
				//echo "2";
				if ($this->mod_mapel->cekdatamapel($this->input->post('id_namamapel'), $row_kelasreguler->id_kelas_reguler) == 0) {
					//echo "3";
					$this->mod_mapel->insert($data);	
				} 

			} else {
				//echo "4";
				$this->mod_mapel->updatebyidnamaidkelasreguler($data, $row_kelasreguler->id_kelas_reguler, $this->input->post('id_namamapel_old'));
			}	
		}

		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
		redirect('kurikulum/mapel');
	}

	public function hapusmapel() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_mapel');
		$this->mod_mapel->delete($this->uri->segment(4));
		redirect('kurikulum/mapel');
	}

	public function hapusmapelbyidjenjang() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_kelasreguler');
		$id_kelas_reguler = $this->uri->segment(4);
		$id_namamapel = $this->uri->segment(6);
		$row_kelasreguler = $this->mod_kelasreguler->select($id_kelas_reguler);

		$this->load->model('penjadwalan/mod_mapel');
		$tabel_kelasreguler = $this->mod_kelasreguler->getbyjenjang($row_kelasreguler->jenjang);

		//print_r($tabel_kelasreguler);

		foreach ($tabel_kelasreguler as $row_kelasreguler) {
			$this->mod_mapel->deletebyidkelasregulermapel($row_kelasreguler->id_kelas_reguler, $id_namamapel);
		}

		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('kurikulum/mapel');
	}

	public function harirentang(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;

		$this->load->model('penjadwalan/mod_harirentang');
		$data['tabel_hari_rentang'] = $this->mod_harirentang->get(array("id_tahun_ajaran"=>$id_tahun_ajaran));

		$result = $this->mod_harirentang->get(array("hari"=>"Senin","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['senin'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Selasa","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['selasa'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Rabu","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['rabu'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Kamis","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['kamis'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Jumat","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['jumat'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Sabtu","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['sabtu'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Minggu","id_tahun_ajaran"=>$id_tahun_ajaran));
		for ($i=1; $i<=12; $i++) {
			if (@$result[$i-1]) { $hari_rentang['minggu'][$i] = $result[$i-1]; }
		}



		$data['hari_rentang'] = @$hari_rentang;

		$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/harirentang', $data);
	}

	public function simpanharirentang(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_harirentang');

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;

		// $this->load->model('distribusi/Mod_tahunajaran');
		// $tahun_ajaran       = $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran;

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_senin_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_senin_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_senin_'.$i),
				'hari' => 'senin',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_senin_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Senin", "jam_ke"=>$this->input->post('jam_ke_senin_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_selasa_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_selasa_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_selasa_'.$i),
				'hari' => 'selasa',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_selasa_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Selasa", "jam_ke"=>$this->input->post('jam_ke_selasa_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_rabu_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_rabu_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_rabu_'.$i),
				'hari' => 'rabu',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_rabu_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Rabu", "jam_ke"=>$this->input->post('jam_ke_rabu_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_kamis_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_kamis_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_kamis_'.$i),
				'hari' => 'kamis',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_kamis_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Kamis", "jam_ke"=>$this->input->post('jam_ke_kamis_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_jumat_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_jumat_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_jumat_'.$i),
				'hari' => 'jumat',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_jumat_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Jumat", "jam_ke"=>$this->input->post('jam_ke_jumat_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_sabtu_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_sabtu_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_sabtu_'.$i),
				'hari' => 'sabtu',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_sabtu_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Sabtu", "jam_ke"=>$this->input->post('jam_ke_sabtu_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=12; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_minggu_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_minggu_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_minggu_'.$i),
				'hari' => 'minggu',
				'id_tahun_ajaran'=>$id_tahun_ajaran,
			);
			if ($this->input->post('jam_ke_minggu_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Minggu", "jam_ke"=>$this->input->post('jam_ke_minggu_'.$i), "id_tahun_ajaran"=>$id_tahun_ajaran));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}


		redirect('kurikulum/harirentang');
	}

	public function jammengajar()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		
		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;

		$this->load->model('penjadwalan/mod_jammengajar');
		$tabel_jammengajar = $this->mod_jammengajar->get(array("id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jammengajar'] = $tabel_jammengajar;

		
		$this->load->model('penjadwalan/mod_pegawai');
		$tabel_pegawai = $this->mod_pegawai->get(array("Status"=>"Guru"));
		$data['tabel_pegawai'] = $tabel_pegawai;

		$this->load->model('penjadwalan/mod_jadwalmapel');
		foreach ($tabel_jammengajar as $row_jammengajar) {
			$total_durasi[$row_jammengajar->id_jam_mgjr] = $this->mod_jadwalmapel->getjadwalmapel(array("jadwal_mapel.NIP"=>$row_jammengajar->NIP, "jadwal_mapel.id_namamapel"=>$row_jammengajar->id_namamapel, "jadwal_mapel.id_tahun_ajaran"=>$row_jammengajar->id_tahun_ajaran))[0]->total_durasi;
			//echo $this->db->last_query();
		}
		$data['total_durasi'] = $total_durasi;

		$this->load->model('penjadwalan/mod_namamapel');
		$data['tabel_namamapel'] = $this->mod_namamapel->get();
		$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/jammengajar', $data);
		}

	public function getinfoguru($NIP)
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_pegawai');
		//$tabel_pegawai = $this->mod_pegawai->get(array("Status"=>"Guru"));
		$row_pegawai = $this->mod_pegawai->get(array("Status"=>"Guru", "NIP"=>$NIP));
		$rows = array();
		//foreach ($tabel_pegawai as $row_pegawai) {
		    //$rows[] = $row_pegawai;
		//}
		$rows = $row_pegawai;
		$data = "{\"data\":".json_encode($rows)."}";
		echo $data;
	}

	public function simpanjammengajar() 
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jammengajar');

		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;

		for ($i=1; $i<=10; $i++) {
			if (($this->input->post('NIP'.$i) != "") && ($this->input->post('id_namamapel'.$i) != "")) {
				$data = array(
					'NIP' => $this->input->post('NIP'.$i),
					'id_namamapel' => $this->input->post('id_namamapel'.$i),
					'jatah_minim_mgjr' => $this->input->post('jatah_minim_mgjr'.$i),
					'id_tahun_ajaran' => $id_tahun_ajaran
				);
				$this->mod_jammengajar->insert($data);
			}
		}	
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');	
		redirect('kurikulum/jammengajar');
	}

	public function hapusjammengajar() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jammengajar');
		$this->mod_jammengajar->delete($this->uri->segment(3));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('kurikulum/jammengajar');
	}

	public function jadwalmapel(){
		$jenjang = @$this->uri->segment(3);
		if ($jenjang == "") { $jenjang = '7'; }
		$data['jenjang'] = $jenjang;

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		
		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;

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
		


		for ($i=0; $i<=12; $i++) {
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

		for ($i=0; $i<=12; $i++) {
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

		$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/jadwalmapel', $data);
	}

	public function exportjadwalmapel()
	{
		//if (@$this->uri->segment(4) == '') { $jenjang = 7; } else { $jenjang = @$this->uri->segment(4); }
		$jenjang = @$this->uri->segment(4);
		if ($jenjang == "") { $jenjang = '7'; }
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
		
		for ($i=0; $i<=12; $i++) {
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

		for ($i=0; $i<=12; $i++) {
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

		$this->load->view('kurikulum/penjadwalan/kurikulum/exportjadwalmapel', $data);
	}

	public function simpanprioritas() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_prioritaskhusus');
		$this->load->model('penjadwalan/mod_harirentang');

		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;


		//echo "OKK";
		//print_r($this->input->post('id_namamapel_senin_0'));
		for ($i=0; $i<=5; $i++) {

			$id_namamapel_senin = $this->input->post('id_namamapel_senin_'.$i);
			//print_r($id_namamapel_senin);
			if ($id_namamapel_senin) {
				foreach ($id_namamapel_senin as $nilai) {
					if ($nilai != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Senin', "$i");
						
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Senin',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam
						);	
						$this->mod_prioritaskhusus->insert($data);	
					}
				}

			}
			
		}

		for ($i=0; $i<=5; $i++) {

			$id_namamapel_selasa = $this->input->post('id_namamapel_selasa_'.$i);
			if ($id_namamapel_selasa) {
				foreach ($id_namamapel_selasa as $nilai) {
					if ($nilai != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Selasa', "$i");
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Selasa',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}

		for ($i=0; $i<=5; $i++) {

			$id_namamapel_rabu = $this->input->post('id_namamapel_rabu_'.$i);
			//print_r($id_namamapel_senin);
			if ($id_namamapel_rabu) {
				foreach ($id_namamapel_rabu as $nilai) {
					if ($nilai != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Rabu', "$i");
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Rabu',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}

		for ($i=0; $i<=5; $i++) {

			$id_namamapel_kamis = $this->input->post('id_namamapel_kamis_'.$i);
			//print_r($id_namamapel_senin);
			if ($id_namamapel_kamis) {
				foreach ($id_namamapel_kamis as $nilai) {
					$row_harirentang = $this->mod_harirentang->selectdata('Kamis', "$i");
					if ($nilai != "") {
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Kamis',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}

		for ($i=0; $i<=5; $i++) {

			$id_namamapel_jumat = $this->input->post('id_namamapel_jumat_'.$i);
			//print_r($id_namamapel_senin);
			if ($id_namamapel_jumat) {
				foreach ($id_namamapel_jumat as $nilai) {
					if ($nilai != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Jumat', "$i");
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Jumat',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}

		for ($i=0; $i<=5; $i++) {

			$id_namamapel_sabtu = $this->input->post('id_namamapel_sabtu_'.$i);
			//print_r($id_namamapel_senin);
			if ($id_namamapel_sabtu) {
				foreach ($id_namamapel_sabtu as $nilai) {
					if ($nilai != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Sabtu', "$i");
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Sabtu',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);
						$this->mod_prioritaskhusus->insert($data);	
					}
					
				}
			}
			
		}

		for ($i=0; $i<=5; $i++) {

			$id_namamapel_minggu = $this->input->post('id_namamapel_minggu_'.$i);
			//print_r($id_namamapel_senin);
			if ($id_namamapel_minggu) {
				foreach ($id_namamapel_minggu as $nilai) {
					if ($nilai != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Minggu', "$i");
						$data = array(
							'jenis_prkh' => 'prioritas',
							'id_namamapel' => $nilai,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Minggu',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}
		redirect('kurikulum/jadwalmapel');
	}

	public function hapusprioritas() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_prioritaskhusus');
		$this->mod_prioritaskhusus->delete($this->uri->segment(4));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('kurikulum/jadwalmapel');
	}

	public function simpankhusus(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_prioritaskhusus');
		$this->load->model('penjadwalan/mod_harirentang');

		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;

		for ($i=0; $i<=12; $i++) {

			$NIP_senin = $this->input->post('NIP_senin_'.$i);
			if ($NIP_senin) {
				foreach ($NIP_senin as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Senin', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Senin',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);
						$this->mod_prioritaskhusus->insert($data);	
					}
					
				}
			}
			
		}

		for ($i=0; $i<=12; $i++) {

			$NIP_selasa = $this->input->post('NIP_selasa_'.$i);
			if ($NIP_selasa) {
				foreach ($NIP_selasa as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Selasa', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Selasa',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);
						$this->mod_prioritaskhusus->insert($data);	
					}
					
				}
			}
			
		}

		for ($i=0; $i<=12; $i++) {

			$NIP_rabu = $this->input->post('NIP_rabu_'.$i);
			if ($NIP_rabu) {
				foreach ($NIP_rabu as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Rabu', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Rabu',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}

		for ($i=0; $i<=12; $i++) {

			$NIP_kamis = $this->input->post('NIP_kamis_'.$i);
			if ($NIP_kamis) {
				foreach ($NIP_kamis as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Kamis', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Kamis',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);
						$this->mod_prioritaskhusus->insert($data);	
					}
					
				}
			}
			
		}

		for ($i=0; $i<=12; $i++) {

			$NIP_jumat = $this->input->post('NIP_jumat_'.$i);
			if ($NIP_jumat) {
				foreach ($NIP_jumat as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Jumat', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Jumat',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);
						$this->mod_prioritaskhusus->insert($data);	
					}
					
				}
			}
			
		}

		for ($i=0; $i<=12; $i++) {

			$NIP_sabtu = $this->input->post('NIP_sabtu_'.$i);
			if ($NIP_sabtu) {
				foreach ($NIP_sabtu as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Sabtu', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Sabtu',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);	
						$this->mod_prioritaskhusus->insert($data);
					}
					
				}
			}
			
		}

		for ($i=0; $i<=12; $i++) {

			$NIP_minggu = $this->input->post('NIP_minggu_'.$i);
			if ($NIP_minggu) {
				foreach ($NIP_minggu as $hasil) {
					if ($hasil != "") {
						$row_harirentang = $this->mod_harirentang->selectdata('Minggu', "$i");
						$data = array(
							'jenis_prkh' => 'khusus',
							'NIP' => $hasil,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => 'Minggu',
							"id_rentang_jam"=>@$row_harirentang->id_rentang_jam

						);
						$this->mod_prioritaskhusus->insert($data);	
					}
					
				}
			}
			
		}

		redirect('kurikulum/jadwalmapel');

	}

	public function simpanjadwalguru($hari, $jenjang){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwalmapel');
		$this->load->model('penjadwalan/mod_kelasreguler');
		$this->load->model('penjadwalan/mod_harirentang');

		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;

		$tabel_kelasreguler = $this->mod_kelasreguler->get(array("jenjang"=>$jenjang));
		$data['tabel_kelasreguler'] = $tabel_kelasreguler;

		for ($i=0; $i<=12; $i++) {
			foreach ($tabel_kelasreguler as $row_kelasreguler) {
				$inputpost = $this->input->post('jadwal_'.$hari.'_'.$row_kelasreguler->id_kelas_reguler.'_'.$i);
				if ($inputpost != '') {
					$arrinput = explode("_", $inputpost);
					$NIP = $arrinput[0];
					$id_namamapel = $arrinput[1];
					$cek = array(
							'id_kelas_reguler'=>$row_kelasreguler->id_kelas_reguler,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => ucfirst($hari)

						);
					$data = array(
							'id_namamapel' => $id_namamapel,
							'id_kelas_reguler'=>$row_kelasreguler->id_kelas_reguler,
							'NIP' => $NIP,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => ucfirst($hari)

						);
					$tabel_jadwalmapel = $this->mod_jadwalmapel->get($cek);
					if ($tabel_jadwalmapel) {
						$this->mod_jadwalmapel->update($data, $tabel_jadwalmapel[0]->id_jadwal_mapel);
						
						$row_harirentang = $this->mod_harirentang->selectdata(ucfirst($hari), "$i");
						$this->mod_jadwalmapel->update(array("id_rentang_jam"=>@$row_harirentang->id_rentang_jam), $tabel_jadwalmapel[0]->id_jadwal_mapel);
						
					} else {
						$this->mod_jadwalmapel->insert($data);	
						$id_jadwal_mapel = $this->db->insert_id();
						
						$row_harirentang = $this->mod_harirentang->selectdata(ucfirst($hari), "$i");
						$this->mod_jadwalmapel->update(array("id_rentang_jam"=>@$row_harirentang->id_rentang_jam), $id_jadwal_mapel);
					}
				} else {
					$data = array(
							'id_kelas_reguler'=>$row_kelasreguler->id_kelas_reguler,
							'id_tahun_ajaran' => $id_tahun_ajaran,
							'jam_ke' => "$i",
							'hari' => ucfirst($hari)

						);
					$this->mod_jadwalmapel->deletejadwal($data);
				}
			}

		}

		redirect('kurikulum/jadwalmapel');

	}

	public function jadwalpiketguru()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;
		
		if (@$this->uri->segment(3) != "") { $id_tahun_ajaran = @$this->uri->segment(3); }

		$data['id_tahun_ajaran'] = $id_tahun_ajaran;

		$this->load->model('penjadwalan/mod_pegawai');
		$data['tabel_pegawai'] = $this->mod_pegawai->get();
		
		$this->load->model('penjadwalan/mod_jadwalpiketguru');
		$data['tabel_jadwalpiketguru'] = $this->mod_jadwalpiketguru->get();

		$this->load->model('penjadwalan/mod_tahunajaran');
		$data['tabel_tahunajaran'] = $this->mod_tahunajaran->get();

		$data['tabel_jadwalpiketguru_senin'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Senin","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_selasa'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Selasa","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_rabu'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Rabu","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_kamis'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Kamis","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_jumat'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Jumat","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_sabtu'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Sabtu","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_minggu'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Minggu","id_tahun_ajaran"=>$id_tahun_ajaran));

		$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/jadwalpiketguru', $data);
	}

	public function printjadwalpiketguru() //$id_tahun_ajaran="")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;
		
		if (@$this->uri->segment(2) != "") { $id_tahun_ajaran = @$this->uri->segment(3); }

		$data['id_tahun_ajaran'] = $id_tahun_ajaran;

		$this->load->model('penjadwalan/mod_pegawai');
		$data['tabel_pegawai'] = $this->mod_pegawai->get();
		
		$this->load->model('penjadwalan/mod_jadwalpiketguru');
		$data['tabel_jadwalpiketguru'] = $this->mod_jadwalpiketguru->get();

		$this->load->model('penjadwalan/mod_tahunajaran');
		$data['tabel_tahunajaran'] = $this->mod_tahunajaran->get();

		$data['tabel_jadwalpiketguru_senin'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Senin","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_selasa'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Selasa","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_rabu'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Rabu","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_kamis'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Kamis","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_jumat'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Jumat","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_sabtu'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Sabtu","id_tahun_ajaran"=>$id_tahun_ajaran));
		$data['tabel_jadwalpiketguru_minggu'] = $this->mod_jadwalpiketguru->get(array("hari"=>"Minggu","id_tahun_ajaran"=>$id_tahun_ajaran));

		//$this->load->view('penjadwalan/kurikulum/printjadwalpiketguru', $data);
		$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/printjadwalpiketguru', $data);
	}


	public function simpanjadwalpiketguru() 
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwalpiketguru');

		$this->mod_jadwalpiketguru->deletebytahunajaran($this->input->post('id_tahun_ajaran'));

		for ($i=1; $i<=7; $i++) {
			if (($this->input->post('NIP_senin'.$i) != "")) { // && ($this->input->post('tgl_piketguru_senin') != "")) {
				$data = array(
					'NIP' => $this->input->post('NIP_senin'.$i),
					'hari' => 'Senin',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran'),
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
			if (($this->input->post('NIP_selasa'.$i) != "")) { // && ($this->input->post('tgl_piketguru_selasa') != "")) {

				$data = array(
					'NIP' => $this->input->post('NIP_selasa'.$i),
					'hari' => 'Selasa',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran')
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
			if (($this->input->post('NIP_rabu'.$i) != "")) { // && ($this->input->post('tgl_piketguru_rabu') != "")) {

				$data = array(
					'NIP' => $this->input->post('NIP_rabu'.$i),
					'hari' => 'Rabu',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran')
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
			if (($this->input->post('NIP_kamis'.$i) != "")) { // && ($this->input->post('tgl_piketguru_kamis') != "")) {

				$data = array(
					'NIP' => $this->input->post('NIP_kamis'.$i),
					'hari' => 'Kamis',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran')
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
			if (($this->input->post('NIP_jumat'.$i) != "")) { // && ($this->input->post('tgl_piketguru_jumat') != "")) {

				$data = array(
					'NIP' => $this->input->post('NIP_jumat'.$i),
					'hari' => 'Jumat',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran')
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
			if (($this->input->post('NIP_sabtu'.$i) != "")) { // && ($this->input->post('tgl_piketguru_sabtu') != "")) {

				$data = array(
					'NIP' => $this->input->post('NIP_sabtu'.$i),
					'hari' => 'Sabtu',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran')
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
			if (($this->input->post('NIP_minggu'.$i) != "")) { // && ($this->input->post('tgl_piketguru_minggu') != "")) {

				$data = array(
					'NIP' => $this->input->post('NIP_minggu'.$i),
					'hari' => 'Minggu',
					'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran')
				);
				$this->mod_jadwalpiketguru->insert($data);
			}
		}
				
		redirect('kurikulum/jadwalpiketguru');
	}


	public function jadwaltambahan($id_jadwal_tambahan = "")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		if ($id_jadwal_tambahan == "" ) {
			$this->load->model('penjadwalan/mod_kelastambahan');
			$data['tabel_kelastambahan'] = $this->mod_kelastambahan->get();
			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();
			$this->load->model('penjadwalan/mod_pegawai');
			$data['tabel_pegawai'] = $this->mod_pegawai->get();
			$this->load->model('penjadwalan/mod_jadwaltambahan');
			$data['tabel_jadwaltambahan'] = $this->mod_jadwaltambahan->get();
			$data['edit_jadwaltambahan'] = null;
			
			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/jadwaltambahan', $data);
		} else {
			$this->load->model('penjadwalan/mod_kelastambahan');
			$data['tabel_kelastambahan'] = $this->mod_kelastambahan->get();
			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();
			$this->load->model('penjadwalan/mod_pegawai');
			$data['tabel_pegawai'] = $this->mod_pegawai->get();
			$this->load->model('penjadwalan/mod_jadwaltambahan');
			$data['tabel_jadwaltambahan'] = $this->mod_jadwaltambahan->get();
			$data['edit_jadwaltambahan'] = $this->mod_jadwaltambahan->select($id_jadwal_tambahan);

			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/jadwaltambahan', $data);
		}

		
	}

	public function hapusjadwaltambahan() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwaltambahan');
		$this->mod_jadwaltambahan->delete($this->uri->segment(3));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('kurikulum/jadwaltambahan');
	}

	public function getmapelkelastambahan()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$id = $this->input->post('id');
		$this->load->model('penjadwalan/mod_mapel');
		$data['tabel_pegawai'] = $this->mod_mapel->get();
		$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/jadwaltambahan', $data);
	}

	public function simpanjadwaltambahan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwaltambahan');

		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;
		
		$data = array(
			'NIP' => $this->input->post('NIP'),
			'id_kelas_tambahan' => $this->input->post('id_kelas_tambahan'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'tgl_tambahan' => $this->input->post('tgl_tambahan'),
				'id_tahun_ajaran' => $id_tahun_ajaran, //$this->input->post('id_tahun_ajaran'),
				'id_namamapel' => $this->input->post('id_namamapel')
			);

			//print_r($data);
			//echo "1";

		if ($this->input->post('id_jadwal_tambahan') == "") {
				//echo "2";
				//if ($this->mod_mapel->cekdatamapel($this->input->post('nama_mapel'), $row_kelasreguler->id_kelas_reguler) == 0) {
					//echo "3";
			$this->mod_jadwaltambahan->insert($data);	
				//} 

		} else {
				//echo "4";
			$this->mod_jadwaltambahan->update($data, $this->input->post('id_jadwal_tambahan'));
		}	
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
		redirect('kurikulum/jadwaltambahan');
	}

	public function delharirentang(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$id = $this->uri->segment(3);
		$this->load->model('penjadwalan/mod_harirentang');
		$this->mod_harirentang->delete($id);
		redirect('kurikulum/harirentang');
	}

	public function ekstrakurikuler($id_jadwal_ekskul = "")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		if ($id_jadwal_ekskul == "" ) {
			$this->load->model('penjadwalan/mod_jadwalekskul');
			$data['tabel_jadwalekskul'] = $this->mod_jadwalekskul->get();

			$this->load->model('penjadwalan/mod_jenisklstambahan');
			$data['tabel_jenisklstambahan'] = $this->mod_jenisklstambahan->get();

			$this->load->model('penjadwalan/mod_pembimbing');
			$data['tabel_pembimbing'] = $this->mod_pembimbing->get();
			$data['edit_jadwalekskul'] = null;
			
			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/ekstrakurikuler', $data);
		} else {
			$this->load->model('penjadwalan/mod_jadwalekskul');
			$data['tabel_jadwalekskul'] = $this->mod_jadwalekskul->get();

			$this->load->model('penjadwalan/mod_jenisklstambahan');
			$data['tabel_jenisklstambahan'] = $this->mod_jenisklstambahan->get();

			$this->load->model('penjadwalan/mod_pembimbing');
			$data['tabel_pembimbing'] = $this->mod_pembimbing->get();
			$data['tabel_jadwalekskul'] = $this->mod_jadwalekskul->get();
			$data['edit_jadwalekskul'] = $this->mod_jadwalekskul->select($id_jadwal_ekskul);

			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/ekstrakurikuler', $data);
		}
		

		// redirect('penjadwalan/kurikulum/ekstrakurikuler');
	}

	public function hapusjadwalekskul() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwalekskul');
		$this->mod_jadwalekskul->delete($this->uri->segment(3));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('kurikulum/ekstrakurikuler');
	}

	public function simpanjadwalekskul()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwalekskul');
		
		$this->load->model('penjadwalan/setting_model');
		$setting = $this->setting_model->getsetting();
		$id_tahun_ajaran = $setting->id_tahun_ajaran;

		$data = array(
			'hari' => $this->input->post('hari'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'tempat' => $this->input->post('tempat'),
			'id_jenis_kls_tambahan' => $this->input->post('id_jenis_kls_tambahan'),
			'id_pembimbing' => $this->input->post('id_pembimbing'),
				// 'id_tahun_ajaran' => $id_tahun_ajaran, //$this->input->post('id_tahun_ajaran'),
				
			);

			//print_r($data);
			//echo "1";

		if ($this->input->post('id_jadwal_ekskul') == "") {
				//echo "2";
				//if ($this->mod_mapel->cekdatamapel($this->input->post('nama_mapel'), $row_kelasreguler->id_kelas_reguler) == 0) {
					//echo "3";
			$this->mod_jadwalekskul->insert($data);	
				//} 

		} else {
				//echo "4";
			$this->mod_jadwalekskul->update($data, $this->input->post('id_jadwal_ekskul'));
		}	
		
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
		redirect('kurikulum/ekstrakurikuler');
	}

		public function namamapel($id_namamapel = "")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		if ($id_namamapel == "" ) {
			$data['edit_mapel'] = null;

			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();

			$this->load->model('penjadwalan/mod_mapel_default');
			$data['tabel_mapel_default'] = $this->mod_mapel_default->get();
			
			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/namamapel', $data);
		} else {
			$this->load->model('penjadwalan/mod_namamapel');
			$data['edit_mapel'] = $this->mod_namamapel->select($id_namamapel);
			$data['tabel_namamapel'] = $this->mod_namamapel->get();

			$this->load->model('penjadwalan/mod_mapel_default');
			$data['tabel_mapel_default'] = $this->mod_mapel_default->get();

			$this->template->load('kurikulum/dashboard','kurikulum/penjadwalan/kurikulum/namamapel', $data);
		}	
	}

	public function simpannamamapel()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_namamapel');
		
		
		$data = array(
			'nama_mapel' => $this->input->post('nama'),
			'warna' => $this->input->post('warna')
		);

		if ($this->input->post('id_namamapel') == "") {
			$this->mod_namamapel->insert($data);	

		} else {
			$this->mod_namamapel->update($data, $this->input->post('id_namamapel'));
		}	

		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
		redirect('kurikulum/namamapel');
	}

	public function hapusnamamapel() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_namamapel');
		$this->mod_namamapel->delete($this->uri->segment(3));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('kurikulum/namamapel');
	}

	public function printjadwalmapeldiv(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$this->template->load('kurikulum/dashboard','penjadwalan/kurikulum/printjadwalmapeldiv',$data);
	}
	// Tutup Mia 

// Penilaian Hafiz


	function kaldik(){
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
     $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;

     $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
     $tanggal_mulai_ajaran = $this->M_data->getsetting()->tanggal_mulai;
     $tanggal_selesai_ajaran = $this->M_data->getsetting()->tanggal_selesai;
     $data['tanggal_mulai_ajaran'] = $tanggal_mulai_ajaran;
     $data['tanggal_selesai_ajaran'] = $tanggal_selesai_ajaran;

    $tahunajaran = $this->M_data->getTahunajaran();
    $data['tahunajaran']= $tahunajaran;
 
    $kaldik = $this->M_data->getkaldik($tanggal_mulai_ajaran, $tanggal_selesai_ajaran); 
    $tanggallibur = $this->M_data->gettanggallibur($tanggal_mulai_ajaran, $tanggal_selesai_ajaran);

    $libur=array();
    $simbol=array();
    foreach ($kaldik as $rowkaldik) {
      $awal = strtotime($rowkaldik->tgl_awal);
      $akhir = strtotime($rowkaldik->tgl_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->nama_kaldik;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->simbol_kaldik;
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }

    foreach ($tanggallibur as $rowtanggallibur) {
      $awal = strtotime($rowtanggallibur->tanggal_awal);
      $akhir = strtotime($rowtanggallibur->tanggal_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowtanggallibur->nama_libur;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = 'libur_nasional.png';
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }
        //print_r($libur);
        //print_r($simbol);
    $data['libur'] = $libur;
    $data['simbol'] = $simbol;
    $data['kaldik'] = $kaldik;
    // $this->load->view('kurikulum/penilaian/KBM/kaldik', $data);
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/kbm/kaldik',$data);
  }

  public function tambah_kaldik(){
    $arrdata = array(
      'nama_kaldik'=>$this->input->post("nama_kaldik"),
      //'simbol_kaldik'=>$this->input->post("simbol_kaldik"),
      'tgl_awal'=>$this->input->post("tgl_awal"),
      'tgl_akhir'=>$this->input->post("tgl_akhir")
    );

    $config['upload_path']          = './assets/simbol/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('simbol_kaldik'))
    {
      $arrdata['simbol_kaldik'] = "";  
    }
    else
    {
      $arrdata['simbol_kaldik'] = $this->upload->data('file_name'); 
    }
    
    $this->M_data->tambahdata($arrdata, 'kaldik');
    redirect('kurikulum/kaldik');
	}


  function printkaldik(){
    $kaldik = $this->M_data->getkaldik('2017-01-01', '2017-12-31');
    $tanggallibur = $this->M_data->gettanggallibur('2017-01-01', '2017-12-31');
        //echo $this->db->last_query();
        //print_r($kaldik);
    foreach ($kaldik as $rowkaldik) {
      $awal = strtotime($rowkaldik->tgl_awal);
      $akhir = strtotime($rowkaldik->tgl_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->nama_kaldik;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->simbol_kaldik;
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }

    foreach ($tanggallibur as $rowtanggallibur) {
      $awal = strtotime($rowtanggallibur->tanggal_awal);
      $akhir = strtotime($rowtanggallibur->tanggal_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowtanggallibur->nama_libur;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = 'libur_nasional.png';
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }
        //print_r($libur);
        //print_r($simbol);
    $data['libur'] = $libur;
    $data['simbol'] = $simbol;
    $data['kaldik'] = $kaldik;
    $this->load->view('kurikulum/penilaian/KBM/printkaldik', $data);
  }

  function hapus_kaldik($id){
    $this->load->model('M_data');
    $where= array('id_kaldik'=>$id);
    $table= 'kaldik';
    $this->M_data->hapusdata($where,$table);
    redirect('kurikulum/kaldik');
  }

  public function form_edit_kaldik(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectKaldik($this->uri->segment(3));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_kaldik',$data);
  }

  public function ubah_kaldik(){

    $this->load->model('M_data');
    //$id_kaldik=$this->input->post('id');
    $nama_kaldik=$this->input->post('nama_kaldik');
    //$simbol_kaldik=$this->input->post('simbol_kaldik');
    $tgl_awal=$this->input->post('tgl_awal');
    $tgl_akhir=$this->input->post('tgl_akhir');

    $data= array(
      'nama_kaldik'=>$nama_kaldik,
        //'simbol_kaldik'=>$simbol_kaldik,
      'tgl_awal'=>$tgl_awal,
      'tgl_akhir'=>$tgl_akhir
    );

    $config['upload_path']          = './assets/penilaian/simbol/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('simbol_kaldik'))
    {
        //$data['simbol_kaldik'] = "";  
    }
    else
    {
      $data['simbol_kaldik'] = $this->upload->data('file_name'); 
    }

    $this->M_data->editkaldik($data,$this->uri->segment(3));
    //$this->load->view('penilaian/kategorinilai');     
    //echo $this->db->last_query();
    redirect('kurikulum/kaldik');
  }

  function kurikulum(){
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $tahunajaran = $this->M_data->getTahunajaran()->tahun_ajaran;
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['kurikulum'] = $this->M_data->getKurikulum();
    //$data['nama_kurikulum'] = $this->M_data->getKurikulum(); 
    //$data['nama_filekur'] = $this->M_data->getKurikulum();   
    $data['id_tahun_ajaran'] = $id_tahun_ajaran;
    $data['tahun_ajaran'] = $tahunajaran;
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
    // $this->load->view('kurikulum/penilaian/KBM/kurikulum',$data);
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/kbm/kurikulum',$data);
  }

  function tambah_kurikulum(){
   $arrdata = array(
    'nama_kurikulum'=>$this->input->post("nama_kurikulum"),
      //'simbol_kaldik'=>$this->input->post("simbol_kaldik"),
      //'nama_filekur'=>$this->input->post("nama_filekur"),
    'tahunajaran_id'=>$this->input->post("tahunajaran_id")
  );

   $config['upload_path'] = './assets/penilaian/dokumen_kurikulum/'; 
    //$config['file_name'] = $fileName;
   $config['allowed_types'] = 'doc|docx|pdf|PDF';
   $config['max_size'] = 10000;

   $this->load->library('upload', $config);
   if ( ! $this->upload->do_upload('nama_filekur'))
   {
    $arrdata['nama_filekur'] = "";  
  }
  else
  {
    $arrdata['nama_filekur'] = $this->upload->data('file_name'); 
  }
  $this->M_data->tambahdata($arrdata, 'kurikulum');
  redirect("kurikulum/kurikulum");
}

 function hapus_kurikulum($id){
    $this->load->model('M_data');
    $where= array('id_kurikulum'=>$id);
    $table= 'kurikulum';
    $this->M_data->hapusdata($where,$table);
    redirect('kurikulum/kurikulum');
  }

  public function form_edit_kurikulum(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectkurikulum($this->uri->segment(3));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_kurikulum',$data);
  }

  public function ubah_kurikulum(){

    $this->load->model('M_data');
    //$id_kaldik=$this->input->post('id');
    $nama_kurikulum=$this->input->post('nama_kurikulum');
    //$simbol_kaldik=$this->input->post('simbol_kaldik');
    $tahunajaran_id=$this->input->post('tahunajaran_id');
    

    $data= array(
      'nama_kurikulum'=>$nama_kurikulum,
        //'simbol_kaldik'=>$simbol_kaldik,
      'tahunajaran_id'=>$tahunajaran_id
    );

    $config['upload_path']          = './assets/penilaian/dokumen_kurikulum/';
    $config['allowed_types']        = 'doc|docx|pdf|PDF';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('nama_filekur'))
    {
        //$data['simbol_kaldik'] = "";  
    }
    else
    {
      $data['nama_filekur'] = $this->upload->data('nama_filekur'); 
    }

    $this->M_data->editkurikulum($data,$this->uri->segment(3));
    //$this->load->view('penilaian/kategorinilai');     
    //echo $this->db->last_query();
    redirect('kurikulum/kurikulum');
  }

  function presensi(){
  $data['nama'] = $this->session->Nama;
  $data['foto'] = $this->session->foto;
  $data['username'] = $this->session->username;
  
  $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(3);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  $tanggallibur = $this->M_data->gettanggallibur("$thn-$bln-01", "$thn-$bln-".date('t', strtotime("$thn-$bln-01")));

  $tanggalliburnasional = $this->M_data->gettanggalliburnasional($bln);

  $liburnasional = array();

  foreach ($tanggalliburnasional as $rowtanggalliburnasional) {
    $liburnasional[$bln][$rowtanggalliburnasional->tanggal_libur_nasional] = $rowtanggalliburnasional->nama_libur_nasional;
  }

  //print_r($liburnasional);

  $data['liburnasional'] = $liburnasional;

  $libur = array();

  foreach ($tanggallibur as $rowtanggallibur) {
      $awal = strtotime($rowtanggallibur->tanggal_awal);
      $akhir = strtotime($rowtanggallibur->tanggal_akhir);
      //echo $awal." ".$akhir;
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowtanggallibur->nama_libur;
        //echo date('Y', $tgl)." ".ltrim(date('m', $tgl), "0")." ".ltrim(date('d', $tgl), "0")."=".$rowtanggallibur->nama_libur;
        //$simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = 'libur_nasional.png';
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }

    //print_r($libur);

    $data['libur'] = $libur;

  foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
      }
    }

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  	}
  // $this->load->view('kurikulum/penilaian/KBM/presensisiswa',$data);
  $this->template->load('kurikulum/dashboard','kurikulum/penilaian/kbm/presensisiswa',$data);
	}

	function cetak_presensi(){
  $data['nama'] = $this->session->Nama;
  $data['foto'] = $this->session->foto;
  $data['username'] = $this->session->username;
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(3);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
      }
    }

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }
  $this->load->view('kurikulum/penilaian/KBM/view_cetak_presensi_bulan',$data);
  //$this->template->load('kurikulum/dashboard','kurikulum/penilaian/kbm/presensisiswa',$data);
}

function cetak_presensisem(){
  $data['nama'] = $this->session->Nama;
  $data['foto'] = $this->session->foto;
  $data['username'] = $this->session->username;
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(3);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
      }
    }

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }
  $this->load->view('kurikulum/penilaian/KBM/view_cetak_presensi_semester',$data);
  //  $this->load->view('kurikulum/penilaian/KBM/view_cetak_presensi_bulan',$data);

}

public function exportpresensi() {
  include_once("xlsxwriter.class.php");


  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(4);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  $dt[0][0] = 'No';
  $dt[0][1] = 'Bulan';
  $dt[0][2] = 'Tahun';
  $dt[0][3] = 'NISN';
  $dt[0][4] = 'Nama Siswa';
  $z=0;
  foreach ($siswaperkelas as $rowsiswa) {
    $z++;
      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
      $dt[0][$i+4] = $i; 
      $dt[$z][0] = $z;
      $dt[$z][1] = $bln;
      $dt[$z][2] = $thn;
      $dt[$z][3] = $rowsiswa->nisn;
      $dt[$z][4] = $rowsiswa->nama;
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      $dt[$z][$i+4] = '';

      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
        $dt[$z][$i+4] = $datpresensi->status_kehadiran;
        
      }
    }
      //$dt[0] = $arr;

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }

  $writer = new XLSXWriter();
  $writer->writeSheet($dt);
  $writer->writeToFile('output.xlsx');

  header('Content-Description: File Transfer');
  header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment; filename=\"".basename('presensi-'.'$d->nama_kelas'.'-'.$thn.'-'.$bln.'.xlsx')."\"");
  header("Content-Transfer-Encoding: binary");
  header("Expires: 0");
  header("Pragma: public");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Length: ' . filesize('output.xlsx')); //Remove

ob_clean();
flush();

readfile('output.xlsx');
unlink('output.xlsx');
exit(0);

}

public function simpanpresensi(){
  $this->load->model('M_data');
  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
  $id_kelas_reguler_berjalan=$this->input->post('id_kelas_reguler_berjalan');
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;

  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $siswaperkelas = $siswaperkelas;
  foreach ($siswaperkelas as $rowsiswa) {
      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
      if($this->input->post("presensi_".$rowsiswa->nisn."_".$i) != "") {

       $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
       if ($datpresensi) {
        $arrdata = array(
          'tanggal'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
          'status_kehadiran'=>$this->input->post("presensi_".$rowsiswa->nisn."_".$i),
          'NISN'=>$rowsiswa->nisn,
          'kelas_berjalan_id'=>$id_kelas_reguler_berjalan
        );

        $this->M_data->editpresensi($arrdata, $datpresensi->id_presensi);
      } else {
        $arrdata = array(
          'tanggal'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
          'status_kehadiran'=>$this->input->post("presensi_".$rowsiswa->nisn."_".$i),
          'NISN'=>$rowsiswa->nisn,
          'kelas_berjalan_id'=>$id_kelas_reguler_berjalan
        );
        $this->M_data->tambahdata($arrdata, 'presensi_siswa');
      }
    }
  }
}

redirect('kurikulum/presensi');

}

public function importpresensi(){
  require('php-excel-reader/excel_reader2.php');
  require('SpreadsheetReader.php');

  $config['upload_path']          = './assets/';
  $config['allowed_types']        = 'xlsx';
  $config['max_size']             = 10000;
    //$config['max_width']            = 10240;
    //$config['max_height']           = 7680;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('filepresensi'))
  {
        //redirect('akademik/presensi'); 
    echo $this->upload->display_errors();
    exit; 
  }
    //else
    //{
    //    $arrdata['simbol_kaldik'] = $this->upload->data('file_name'); 
    //}
  $this->load->model('M_data');

    $Reader = new SpreadsheetReader("assets/".$this->upload->data('file_name')); //'example.xlsx');
    $Sheets = $Reader -> Sheets();

    foreach ($Sheets as $Index => $Name)
    {
      //echo 'Sheet #'.$Index.': '.$Name;

      $Reader -> ChangeSheet($Index);

      foreach ($Reader as $Row)
      {
        //print_r($Row);
        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $Row[1], $Row[2]);$i++) {
          if (($Row[1] != "") && ($Row[2] != "") && ($Row[3] != "") && ($Row[$i+4] !="")) {
            $datpresensi = $this->M_data->getpresensihari($Row[2].'-'.$Row[1].'-'.substr($i+100, 1, 2), $Row[3], $this->input->post('kelasimportpresensi'));
            if ($datpresensi) {
              $arrdata = array(
                'tanggal'=>($Row[2].'-'.$Row[1].'-'.substr($i+100, 1, 2)),
                'status_kehadiran'=>$Row[$i+4],
                'NISN'=>$Row[3],
                'kelas_berjalan_id'=>$this->input->post('kelasimportpresensi')
              );

              $this->M_data->editpresensi($arrdata, $datpresensi->id_presensi);
            } else {
              $arrdata = array(
                'tanggal'=>($Row[2].'-'.$Row[1].'-'.substr($i+100, 1, 2)),
                'status_kehadiran'=>$Row[$i+4],
                'NISN'=>$Row[3],
                'kelas_berjalan_id'=>$this->input->post('kelasimportpresensi')
              );
              $this->M_data->tambahdata($arrdata, 'presensi_siswa');
            }
          }
        }
      }

      break; // supaya yg dibaca hanya sheet 1
    }
    redirect('kurikulum/presensi');

  }

}

  // $this->load->view('kurikulum/penilaian/KBM/view_cetak_presensi_bulan',$data);

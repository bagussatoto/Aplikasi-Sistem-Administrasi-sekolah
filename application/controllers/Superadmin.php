<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . '/third_party/PHPExcel/IOFactory.php';
class Superadmin extends CI_Controller {

	var $setting = array();

	function __construct(){
		parent::__construct();

		$this->load->model('pegawai_model');
		$this->load->model('presensi_pegawai_model');
		$this->load->model('penilaian/presensi_siswa_model');
		$this->load->model('tahunajaran_model');
		$this->load->model('tanggal_libur_model');
		$this->load->model('tanggal_libur_nasional_model');
		$this->load->model('jabatan_model');
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$this->load->model('ppdb/model_form_ppdb');
		$this->load->model('ppdb/model_ketentuan_ppdb');
		$this->load->model('ppdb/model_form_ujian');
		$this->load->model('ppdb/model_pengumuman_ppdb');
		$this->load->model('ppdb/model_tahunajaran');
		
		$this->load->model('ppdb/Model_siswa');
		$this->load->model('setting_model');
		// $this->load->model('penjadwalan/mod_jammengajar');
		// $this->load->model('penjadwalan/mod_mapel');
		// $this->load->model('penjadwalan/mod_namamapel');
		// $this->load->model('penjadwalan/mod_kelasreguler');
		// $this->load->model('penjadwalan/setting_model');
		$this->load->model('penilaian/M_data');

		$this->load->model('pegawai_model');
		$this->load->model('presensi_pegawai_model');
		$this->load->model('penilaian/presensi_siswa_model');
		$this->load->model('tahunajaran_model');
		$this->load->model('tanggal_libur_model');
		$this->load->model('tanggal_libur_nasional_model');
		$this->load->model('jabatan_model');


		$this->load->helper('url');
		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
			redirect('login');
			exit;
		}
		if (($this->session->userdata('jabatan') != 'Superadmin')&&($this->session->userdata('jabatan') != 'Kepala Sekolah')&&($this->session->userdata('jabatan') != 'Pegawai')) {
			$this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
			//$this->load->view('login');
			redirect('login');
			exit;
		}

		$this->load->helper('setting_helper');
		$this->setting = get_setting();
	}


	public	function uploadPegawai(){
		$this->load->library('upload', [
			'allowed_types' => 'xls|xlsx',
			'upload_path' => './assets/Superadmin/importdatpeg'
		]);

		if ($this->upload->do_upload('file')) {
			$data = $this->upload->data();

			$inputFileName = $data['full_path'];
			$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

			$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

			$duplicates  = [];
			$errorFormat = false;
			foreach (array_slice($sheetData, 1) as $key => $item) {
				$NIP = $item['A'];

			    // Cek format dokumen
				if (empty($item['A'])) {
					$errorFormat = true;
					break;
				}

				if (is_null($NIP)) continue;

				$exist = $this->pegawai_model->rowPegawai($NIP);

				if (! is_null($exist)) {
					$duplicates[] = $NIP;
				} else {


					$data = [
						'NIP' => $item['A'],
						"nuptk" => $item['B'],
						'Nama' => $item['C'],
						'nama_panggilan	' => $item['D'],
						'No_SK' => $item['E'],
						'kode_guru	' => $item['F'],
						// 'matapelajaran	' => $item['G'],
						'Jenis_kelamin' => $item['H'],
						'Golongan' => $item['I'],
						'pangkat' => $item['J'],
						'tempatlahir' => $item['K'],
						'TTL' => $item['L'],
						'TMT_capeg	' => $item['M'],
						'pendidikan' => $item['N'],
						'Agama' => $item['O'],
						'kontak' => $item['P'],
						'Status' => $item['Q'],
						'alamat' => $item['R'],
						'foto' => null,
						'namaayah'=> $item['S'],
						'tempatlahirayah'=>$item['T'],
						'tanggallahirayah'=>$item['U'],
						'agamaayah'=>$item['V'],
						'nomorayah'=>$item['W'],
						'pekerjaanayah'=>$item['X'],
						'alamatayah'=>$item['Y'],

						'namaibu'=>$item['Z'],
						'tempatlahiribu'=>$item['AA'],
						'tanggallahiribu'=>$item['AB'],
						'agamaibu'=>$item['AC'],
						'nomoribu'=>$item['AD'],
						'pekerjaanibu'=>$item['AE'],
						'alamatibu'=>$item['AF']	
					];

					$this->pegawai_model->insert($data);
					echo $this->db->last_query();
					echo "<br/>";
				}
			}

			if (count($duplicates) > 0) 
			{
				$NIP = json_encode($duplicates);
				// Hapus file yang sudah diupload
				
				$this->session->set_flashdata("status", "<script> swal( 'Maaf!' ,  'NIP Yang Anda Masukkan Sudah Ada :$NIP' ,  'error' )</script>");
			} elseif ($errorFormat) {
				$this->session->set_flashdata("status", "<script> swal( 'Maaf Format Tidak Sesuai!' ,  'Periksa Kembali Data Yang Anda Import' ,  'error' )</script>");
			} else {
				$this->session->set_flashdata("status", "<script>swal('Berhasil!', 'Import Data Telah Berhasil ', 'success')</script>");
			}
		} else {
			$this->session->set_flashdata("status","<script> swal( 'Maaf!' ,  'Data Gagal Di Upload' ,  'error' )</script>");
		}
		@unlink('./assets/Superadmin/importdatpeg/'.$data['file_name']);
		// var_dump($this->session->flashdata('status')); exit;
		redirect('superadmin/pegawaibaru');
	}

	public function importdatpeg(){
		

		$this->load->view('superadmin/importdatpeg');
	}

	public function index(){

		
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		
		$datsemester = $this->tahunajaran_model->Getsemester();
		//print_r($datsemester);
		//print_r($datpeg->result());

		$tablepeg = $datpeg->result();
		foreach ($tablepeg as $rowpeg) {
			$datpresensi = $this->presensi_pegawai_model->getpresensi($tgl, $rowpeg->NIP);
			//echo $this->db->last_query()."<br/>";
			if ($datpresensi) {
				//echo $rowpeg->NIP."===<br/>";
				$data['presensipeg'][$rowpeg->NIP] = $datpresensi->Rangkuman_presensi;
				$data['waktupeg'][$rowpeg->NIP] = $datpresensi->Waktu_presensi;
				$data['keteranganpeg'][$rowpeg->NIP] = $datpresensi->keterangan_presensi;
			}

			//for($i=1;$i<=date('t');$i++) {
			for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
				//echo $rowpeg->NIP."<br/>";
				//$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
				$datpresensi = $this->presensi_pegawai_model->getpresensi($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
				//echo $this->db->last_query()."<br/>";
				if ($datpresensi) {
					//echo $rowpeg->NIP."===<br/>";
					$data['datpresensi'][$rowpeg->NIP][$i] = $datpresensi->Rangkuman_presensi;
					$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
				}
			}
			for ($i=1;$i<=12;$i++) {
				
				$data['datpresensibulan'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'H')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'S')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'I')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'A')->jml;
			}

			for ($i=1;$i<=2;$i++) {
				
				$data['datpresensisemester'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'H')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'S')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'I')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'A')->jml;
			}

		}

		for ($i=1;$i<=12;$i++) {
			
			$data['datpresensitotalbulan'][$i]['H'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'H')->jml;
			$data['datpresensitotalbulan'][$i]['S'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'S')->jml;
			$data['datpresensitotalbulan'][$i]['I'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'I')->jml;
			$data['datpresensitotalbulan'][$i]['A'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'A')->jml;

			$data['datpresensitotal'][$i] = @$this->presensi_pegawai_model->getpresensitotal($i, $thn)->jml;
			
		}

		for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
			$datlibur = $this->tanggal_libur_model->getlibur($thn.'-'.substr($bln+100, 1, 2).'-'.substr($i+100, 1, 2));
			if ($datlibur) {
				$data['datlibur'][$i] = $datlibur->nama_libur;
			} else {
				$data['datlibur'][$i] = "";
			}

			$datliburnasional = $this->tanggal_libur_nasional_model->getlibur($i, $bln);
			if ($datliburnasional) {
				$data['datlibur'][$i] = $data['datlibur'][$i]." ".$datliburnasional->nama_libur_nasional;
			} 
			//echo $data['datlibur'][$i]."<br/>";
			//echo $this->db->last_query()."<br/>";
		}
		$this->load->model('pegawai_model');      
		$usersNo =  $this->pegawai_model->gettotaluser();   
		$data['totaluser'] = $usersNo->no - $usersNo->ps;
		$data['totaluserlk'] = $usersNo->lk;
		$data['totaluserpr'] = $usersNo->pr;
		$data['totaluserps'] = $usersNo->ps;

		$usersJabatan= $this->pegawai_model->gettotaljabatan();
		$data['totaljabatan'] = $usersJabatan->no - $usersNo->ps ;

		$userstanpaJabatan= $this->pegawai_model->gettotaltanpajabatan();
		$data['totaltanpajabatan'] = $userstanpaJabatan->no;

		$total_sma= $this->pegawai_model->getjumlahpendidikan('SMA')->jml;
		$total_d3= $this->pegawai_model->getjumlahpendidikan('D3')->jml;
		$total_s1= $this->pegawai_model->getjumlahpendidikan('S1')->jml;
		$total_s2= $this->pegawai_model->getjumlahpendidikan('S2')->jml;
		$total_s3= $this->pegawai_model->getjumlahpendidikan('S3')->jml;
		$data['total_sma'] = $total_sma;
		$data['total_d3'] = $total_d3;
		$data['total_s1'] = $total_s1;
		$data['total_s2'] = $total_s2;
		$data['total_s3'] = $total_s3;
		
		$belumakanpensiun= $this->pegawai_model->getjumlahbelumakanpensiun();
		$sudahakanpensiun= $this->pegawai_model->getjumlahsudahakanpensiun();
		$data['belumakanpensiun'] = $belumakanpensiun;
		$data['sudahakanpensiun'] = $sudahakanpensiun;
 

		$pegawai_20_30= $this->pegawai_model->getjmlpegawaiumur(20, 30);
		$pegawai_31_40= $this->pegawai_model->getjmlpegawaiumur(31, 40);
		$pegawai_41_50= $this->pegawai_model->getjmlpegawaiumur(41, 50);
		$pegawai_51_60= $this->pegawai_model->getjmlpegawaiumur(51, 60);
		$data['pegawai_20_30'] = $pegawai_20_30;
		$data['pegawai_31_40'] = $pegawai_31_40;
		$data['pegawai_41_50'] = $pegawai_41_50;
		$data['pegawai_51_60'] = $pegawai_51_60;

		$data['grafikpresensipegawai'] = TRUE;
		$data['persentase'] = TRUE;
		$data['grafikusia'] = TRUE;
		$data['grafikpendidikan'] = TRUE;
		$data['grafikpensiun'] = TRUE;
		$data['rekap'] = TRUE;
		// $data['persentase'] = TRUE;


		$this->pegawai_model->otomatispensiun();

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$data['datpeg'] = $this->pegawai_model->Getdatpeg();
		$this->template->load('superadmin/dashboard','superadmin/home', $data);
	}

	public function grafikusia(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username; 
		
		$data['umur20ke30'] = $this->pegawai_model->getpegawaiumur(20,30);
		$data['umur31ke40'] = $this->pegawai_model->getpegawaiumur(31,40);
		$data['umur41ke50'] = $this->pegawai_model->getpegawaiumur(41,50);
		$data['umur51ke60'] = $this->pegawai_model->getpegawaiumur(51,60);
		$this->template->load('superadmin/dashboard','superadmin/grafikusia', $data);
	}

	public function grafikpendidikan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username; 
		
		$data['sma'] = $this->pegawai_model->getbypendidikan("SMA");
		$data['d3'] = $this->pegawai_model->getbypendidikan("D3");
		$data['s1'] = $this->pegawai_model->getbypendidikan("S1");
		$data['s2'] = $this->pegawai_model->getbypendidikan("S2");
		$data['s3'] = $this->pegawai_model->getbypendidikan("S3");
		$this->template->load('superadmin/dashboard','superadmin/grafikpendidikan', $data);
	}

	public function grafikpensiun(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username; 
		
		$data['belum'] = $this->pegawai_model->getbybelumakanpensiun();
		$data['sudah'] = $this->pegawai_model->getbysudahakanpensiun();
		
		$this->template->load('superadmin/dashboard','superadmin/grafikpensiun', $data);
	}

	public function profile(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username; 
		$data['datpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
		$this->template->load('superadmin/dashboard','pegawai/profile', $data);
	}

	public function editprofil(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;
		$data['rowpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
		$this->template->load('superadmin/dashboard','superadmin/editprofil', $data);
		if($this->input->post('submit')){
			$this->load->model('pegawai_model');
			$this->pegawai_model->updatedatpeg();	
			$this->session->set_flashdata('warning',"<script>swal('Berhasil!', 'Data Berhasil Disimpan','success')</script>");	
			redirect("superadmin/profile");
		} 
	}

// KEPEGAWAIAN RIDHO

// home
	public function homelihatjabatan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['datajabatan'] = $this->pegawai_model->Getjabatan();
		$this->template->load('superadmin/dashboard','superadmin/home_lihatjabatan', $data);
	}

	public function hometanpajabatan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['datatanpajabatan'] = $this->pegawai_model->GetTanpaJabatan();
		$this->template->load('superadmin/dashboard','superadmin/home_lihattanpajabatan', $data);
	}

	public function homedatapegawai(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpegtot'] = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$this->template->load('superadmin/dashboard','superadmin/home_lihatdatapegawai', $data);
	}

	public function homedataguru(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpeguru'] = $this->pegawai_model->Getdatpeg("Status = 'Guru' OR (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$this->template->load('superadmin/dashboard','superadmin/home_lihatdataguru', $data);
	}

	public function homedatapensiun(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpegpensiun'] = $this->pegawai_model->Getdatpeg("Status_pensiun = 'Pensiun' OR Status_pensiun = 'Keluar' ");
		$this->template->load('superadmin/dashboard','superadmin/home_lihatdatapensiun', $data);
	}

	public function homedatakaryawan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpegkaryawan'] = $this->pegawai_model->Getdatpeg("Status = 'Karyawan' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$this->template->load('superadmin/dashboard','superadmin/home_lihatdatakaryawan', $data);
	}
// tutup home

	public function pegawaibaru(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpeg'] = $this->pegawai_model->Getdatpeg("Status = 'Karyawan' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$data['datguru'] = $this->pegawai_model->Getdatpeg("Status = 'Guru' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$data['datpensiun'] = $this->pegawai_model->Getdatpeg("Status_pensiun = 'Pensiun' OR Status_pensiun = 'Keluar' ");
		$this->template->load('superadmin/dashboard','superadmin/pegawaibaru', $data);
	}

	public function printpegawaibaru(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpeg'] = $this->pegawai_model->Getdatpeg("Status = 'Karyawan' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$data['datguru'] = $this->pegawai_model->Getdatpeg("Status = 'Guru' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$data['datpensiun'] = $this->pegawai_model->Getdatpeg("Status_pensiun = 'Pensiun' OR Status_pensiun = 'Keluar' ");
		$this->template->load('superadmin/dashboard','superadmin/printpegawaibaru', $data);
	}

	public function detailspegawai($id){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datpeg'] = $this->pegawai_model->rowPegawai($id);
		$this->template->load('superadmin/dashboard','superadmin/detailspegawai', $data);
	}

	public function jabatan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['datajabatan'] = $this->pegawai_model->Getjabatan();
		$data['datatanpajabatan'] = $this->pegawai_model->GetTanpaJabatan();
		$data['jenisjabatan'] = $this->jabatan_model->get();

		$this->template->load('superadmin/dashboard','superadmin/jabatan', $data);
	}

	public function editjabatan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['datjab'] = $this->pegawai_model->getjab();
		$data['rowpeg'] = $this->pegawai_model->rowPegawaiJabatan($this->uri->segment(3));
		$this->template->load('superadmin/dashboard','superadmin/editjabatan', $data);
	}

	public function editjenisjabatan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['rowjab'] = $this->jabatan_model->select($this->uri->segment(3));
		$this->template->load('superadmin/dashboard','superadmin/editjenisjabatan', $data);
	}

	public function updatejab() {
		$this->load->model('akun_model');
		$cek = $this->akun_model->selectakun($this->input->post('NIP'));
		print_r($cek);
		if ($cek) {
			$data = array(
				"id_jabatan" => $this->input->post('id_jabatan'),
				"password" => $this->input->post('password')
			);
			$this->akun_model->update($data, $cek->id_akun);
		} else {
			$data = array(
				"id_jabatan" => $this->input->post('id_jabatan'),
				"NIP" => $this->input->post('NIP'),
				"password" => $this->input->post('password')
			);
			$this->akun_model->insert($data);
		}
		//$this->pegawai_model->updatedatpeg();		
		redirect("superadmin/jabatan");
		//jika sdh ada akun maka update
		//jika belum ada akun maka insert 
	}

	public function setjabatan() {

		$this->load->model('akun_model');
		$this->load->model('pegawai_model');
		$peg = $this->pegawai_model->getsetjab();
		//print_r($peg);

		foreach ($peg as $rowpeg) {			
			//$cek = $this->akun_model->selectakun($rowpeg->NIP);
			//print_r($cek);
			//if ($cek) {
				// $data = array(
				// 	"id_jabatan" => $this->input->post('id_jabatan'),
				// 	"password" => $this->input->post('password')
				// );
				// $this->akun_model->update($data, $cek->id_akun);
			//} else {
			if ($rowpeg->id_jabatan == "") {
				$data = array(
					"id_jabatan" => 4,
					"NIP" => $rowpeg->NIP,
					"password" => $rowpeg->NIP
				);
				//print_r($data);
				$this->akun_model->insert($data);
			}
			//}
		}
		//$this->pegawai_model->updatedatpeg();		
		redirect("superadmin/jabatan");
		//jika sdh ada akun maka update
		//jika belum ada akun maka insert 
	}

	public function updatejenisjab() {
		$this->load->model('jabatan_model');
		$menuakses = implode(",", $this->input->post("menuakses"));
		$data = array(
			"nama_jabatan" => $this->input->post('nama_jabatan'),
			// "url" => $this->input->post('url'),
				"menuakses" => $menuakses //$this->input->post('menuakses')
			);
		$this->jabatan_model->update($data, $this->input->post('id_jabatan'));
		
		//$this->pegawai_model->updatedatpeg();		
		redirect("superadmin/jabatan");
		//jika sdh ada akun maka update
		//jika belum ada akun maka insert 
	}

	public function presensipegawai(){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		
		$datsemester = $this->tahunajaran_model->Getsemester();
		//print_r($datsemester);
		//print_r($datpeg->result());

		$tablepeg = $datpeg->result();
		foreach ($tablepeg as $rowpeg) {
			$datpresensi = $this->presensi_pegawai_model->getpresensi($tgl, $rowpeg->NIP);
			//echo $this->db->last_query()."<br/>";
			if ($datpresensi) {
				//echo $rowpeg->NIP."===<br/>";
				$data['presensipeg'][$rowpeg->NIP] = $datpresensi->Rangkuman_presensi;
				$data['waktupeg'][$rowpeg->NIP] = $datpresensi->Waktu_presensi;
				$data['keteranganpeg'][$rowpeg->NIP] = $datpresensi->keterangan_presensi;
			}

			//for($i=1;$i<=date('t');$i++) {
			for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
				//echo $rowpeg->NIP."<br/>";
				//$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
				$datpresensi = $this->presensi_pegawai_model->getpresensi($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
				//echo $this->db->last_query()."<br/>";
				if ($datpresensi) {
					//echo $rowpeg->NIP."===<br/>";
					$data['datpresensi'][$rowpeg->NIP][$i] = $datpresensi->Rangkuman_presensi;
					$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
				}
			}
			for ($i=1;$i<=12;$i++) {
				
				$data['datpresensibulan'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'H')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'S')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'I')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'A')->jml;
			}

			for ($i=1;$i<=2;$i++) {
				
				$data['datpresensisemester'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'H')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'S')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'I')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'A')->jml;
			}

		}

		for ($i=1;$i<=12;$i++) {
			
			$data['datpresensitotalbulan'][$i]['H'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'H')->jml;
			$data['datpresensitotalbulan'][$i]['S'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'S')->jml;
			$data['datpresensitotalbulan'][$i]['I'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'I')->jml;
			$data['datpresensitotalbulan'][$i]['A'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'A')->jml;

			$data['datpresensitotal'][$i] = @$this->presensi_pegawai_model->getpresensitotal($i, $thn)->jml;
			
		}

		for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
			$datlibur = $this->tanggal_libur_model->getlibur($thn.'-'.substr($bln+100, 1, 2).'-'.substr($i+100, 1, 2));
			if ($datlibur) {
				$data['datlibur'][$i] = $datlibur->nama_libur;
			} else {
				$data['datlibur'][$i] = "";
			}

			$datliburnasional = $this->tanggal_libur_nasional_model->getlibur($i, $bln);
			if ($datliburnasional) {
				$data['datlibur'][$i] = $data['datlibur'][$i]." ".$datliburnasional->nama_libur_nasional;
			} 
			//echo $data['datlibur'][$i]."<br/>";
			//echo $this->db->last_query()."<br/>";
		}

		$data['grafikpresensipegawai'] = TRUE;
		
		$this->template->load('superadmin/dashboard','superadmin/presensipegawai', $data);
	}

	public function printlihatpresensipegawai(){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		
		$datsemester = $this->tahunajaran_model->Getsemester();
		//print_r($datsemester);
		//print_r($datpeg->result());

		$tablepeg = $datpeg->result();
		foreach ($tablepeg as $rowpeg) {
			$datpresensi = $this->presensi_pegawai_model->getpresensi($tgl, $rowpeg->NIP);
			//echo $this->db->last_query()."<br/>";
			if ($datpresensi) {
				//echo $rowpeg->NIP."===<br/>";
				$data['presensipeg'][$rowpeg->NIP] = $datpresensi->Rangkuman_presensi;
				$data['waktupeg'][$rowpeg->NIP] = $datpresensi->Waktu_presensi;
				$data['keteranganpeg'][$rowpeg->NIP] = $datpresensi->keterangan_presensi;
			}

			//for($i=1;$i<=date('t');$i++) {
			for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
				//echo $rowpeg->NIP."<br/>";
				//$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
				$datpresensi = $this->presensi_pegawai_model->getpresensi($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
				//echo $this->db->last_query()."<br/>";
				if ($datpresensi) {
					//echo $rowpeg->NIP."===<br/>";
					$data['datpresensi'][$rowpeg->NIP][$i] = $datpresensi->Rangkuman_presensi;
					$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
				}
			}
			for ($i=1;$i<=12;$i++) {
				
				$data['datpresensibulan'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'H')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'S')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'I')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'A')->jml;
			}

			for ($i=1;$i<=2;$i++) {
				
				$data['datpresensisemester'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'H')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'S')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'I')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'A')->jml;
			}

		}

		for ($i=1;$i<=12;$i++) {
			
			$data['datpresensitotalbulan'][$i]['H'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'H')->jml;
			$data['datpresensitotalbulan'][$i]['S'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'S')->jml;
			$data['datpresensitotalbulan'][$i]['I'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'I')->jml;
			$data['datpresensitotalbulan'][$i]['A'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'A')->jml;
		}

		for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
			$datlibur = $this->tanggal_libur_model->getlibur($thn.'-'.substr($bln+100, 1, 2).'-'.substr($i+100, 1, 2));
			if ($datlibur) {
				$data['datlibur'][$i] = $datlibur->nama_libur;
			} else {
				$data['datlibur'][$i] = "";
			}

			$datliburnasional = $this->tanggal_libur_nasional_model->getlibur($i, $bln);
			if ($datliburnasional) {
				$data['datlibur'][$i] = $data['datlibur'][$i]." ".$datliburnasional->nama_libur_nasional;
			} 
			//echo $data['datlibur'][$i]."<br/>";
			//echo $this->db->last_query()."<br/>";
		}

		$data['grafikpresensipegawai'] = TRUE;
		
		$this->template->load('superadmin/dashboard','superadmin/printlihatpresensipegawai', $data);
	}

	public function printpresensipegawaibulan(){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		
		$datsemester = $this->tahunajaran_model->Getsemester();
		//print_r($datsemester);
		//print_r($datpeg->result());

		$tablepeg = $datpeg->result();
		foreach ($tablepeg as $rowpeg) {
			$datpresensi = $this->presensi_pegawai_model->getpresensi($tgl, $rowpeg->NIP);
			//echo $this->db->last_query()."<br/>";
			if ($datpresensi) {
				//echo $rowpeg->NIP."===<br/>";
				$data['presensipeg'][$rowpeg->NIP] = $datpresensi->Rangkuman_presensi;
				$data['waktupeg'][$rowpeg->NIP] = $datpresensi->Waktu_presensi;
				$data['keteranganpeg'][$rowpeg->NIP] = $datpresensi->keterangan_presensi;
			}

			//for($i=1;$i<=date('t');$i++) {
			for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
				//echo $rowpeg->NIP."<br/>";
				//$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
				$datpresensi = $this->presensi_pegawai_model->getpresensi($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
				//echo $this->db->last_query()."<br/>";
				if ($datpresensi) {
					//echo $rowpeg->NIP."===<br/>";
					$data['datpresensi'][$rowpeg->NIP][$i] = $datpresensi->Rangkuman_presensi;
					$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
				}
			}
			for ($i=1;$i<=12;$i++) {
				
				$data['datpresensibulan'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'H')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'S')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'I')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'A')->jml;
			}

			for ($i=1;$i<=2;$i++) {
				
				$data['datpresensisemester'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'H')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'S')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'I')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'A')->jml;
			}

		}

		for ($i=1;$i<=12;$i++) {
			
			$data['datpresensitotalbulan'][$i]['H'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'H')->jml;
			$data['datpresensitotalbulan'][$i]['S'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'S')->jml;
			$data['datpresensitotalbulan'][$i]['I'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'I')->jml;
			$data['datpresensitotalbulan'][$i]['A'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'A')->jml;
		}

		for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
			$datlibur = $this->tanggal_libur_model->getlibur($thn.'-'.substr($bln+100, 1, 2).'-'.substr($i+100, 1, 2));
			if ($datlibur) {
				$data['datlibur'][$i] = $datlibur->nama_libur;
			} else {
				$data['datlibur'][$i] = "";
			}

			$datliburnasional = $this->tanggal_libur_nasional_model->getlibur($i, $bln);
			if ($datliburnasional) {
				$data['datlibur'][$i] = $data['datlibur'][$i]." ".$datliburnasional->nama_libur_nasional;
			} 
			//echo $data['datlibur'][$i]."<br/>";
			//echo $this->db->last_query()."<br/>";
		}

		$data['grafikpresensipegawai'] = TRUE;
		
		$this->template->load('superadmin/dashboard','superadmin/printpresensipegawaibulan', $data);
	}

	public function homeresumepresensi(){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		
		$datsemester = $this->tahunajaran_model->Getsemester();
		//print_r($datsemester);
		//print_r($datpeg->result());

		$tablepeg = $datpeg->result();
		foreach ($tablepeg as $rowpeg) {
			$datpresensi = $this->presensi_pegawai_model->getpresensi($tgl, $rowpeg->NIP);
			//echo $this->db->last_query()."<br/>";
			if ($datpresensi) {
				//echo $rowpeg->NIP."===<br/>";
				$data['presensipeg'][$rowpeg->NIP] = $datpresensi->Rangkuman_presensi;
				$data['waktupeg'][$rowpeg->NIP] = $datpresensi->Waktu_presensi;
				$data['keteranganpeg'][$rowpeg->NIP] = $datpresensi->keterangan_presensi;
			}

			//for($i=1;$i<=date('t');$i++) {
			for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
				//echo $rowpeg->NIP."<br/>";
				//$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
				$datpresensi = $this->presensi_pegawai_model->getpresensi($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
				//echo $this->db->last_query()."<br/>";
				if ($datpresensi) {
					//echo $rowpeg->NIP."===<br/>";
					$data['datpresensi'][$rowpeg->NIP][$i] = $datpresensi->Rangkuman_presensi;
					$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
				}
			}
			for ($i=1;$i<=12;$i++) {
				
				$data['datpresensibulan'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'H')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'S')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'I')->jml;
				$data['datpresensibulan'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensibulan($i, $thn, $rowpeg->NIP, 'A')->jml;
			}

			for ($i=1;$i<=2;$i++) {
				
				$data['datpresensisemester'][$rowpeg->NIP][$i]['H'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'H')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['S'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'S')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['I'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'I')->jml;
				$data['datpresensisemester'][$rowpeg->NIP][$i]['A'] = @$this->presensi_pegawai_model->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowpeg->NIP, 'A')->jml;
			}

		}

		for ($i=1;$i<=12;$i++) {
			
			$data['datpresensitotalbulan'][$i]['H'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'H')->jml;
			$data['datpresensitotalbulan'][$i]['S'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'S')->jml;
			$data['datpresensitotalbulan'][$i]['I'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'I')->jml;
			$data['datpresensitotalbulan'][$i]['A'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'A')->jml;
		}

		for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
			$datlibur = $this->tanggal_libur_model->getlibur($thn.'-'.substr($bln+100, 1, 2).'-'.substr($i+100, 1, 2));
			if ($datlibur) {
				$data['datlibur'][$i] = $datlibur->nama_libur;
			} else {
				$data['datlibur'][$i] = "";
			}

			$datliburnasional = $this->tanggal_libur_nasional_model->getlibur($i, $bln);
			if ($datliburnasional) {
				$data['datlibur'][$i] = $data['datlibur'][$i]." ".$datliburnasional->nama_libur_nasional;
			} 
			//echo $data['datlibur'][$i]."<br/>";
			//echo $this->db->last_query()."<br/>";
		}

		//$data['grafikpresensipegawai'] = TRUE;
		
		$this->template->load('superadmin/dashboard','superadmin/homeresumepresensi', $data);
	}

	public function resumepresensipegawai($nip, $thn, $bln){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
	
		
		$data['datpresensi'] = $this->presensi_pegawai_model->getresumepresensi($nip, $thn, $bln);
	
		$this->template->load('superadmin/dashboard','superadmin/resumepresensipegawai', $data);
	}

	public function rekapkehadiran(){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$tahun_ajaran = $this->tahunajaran_model->Gettahunajaran(array())->result();
		$data['tahun_ajaran'] = $tahun_ajaran;
		
		$row_aktif = $this->tahunajaran_model->gettahunajaranaktif();
	
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');

		if ($id_tahun_ajaran == "") { $id_tahun_ajaran = $row_aktif->id_tahun_ajaran; }

		$data['id_tahun_ajaran'] = $id_tahun_ajaran;

		$row_tahun_ajaran = $this->tahunajaran_model->Gettahunajaran(array('tahunajaran.id_tahun_ajaran'=>$id_tahun_ajaran))->row();
		$data['nama_tahun_ajaran'] = "Semester ".$row_tahun_ajaran->semester." ".$row_tahun_ajaran->tahun_ajaran;
		

		$nip = $this->session->userdata('NIP');
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		
		
		$data['datpresensitotaltanggal']['H'] = @$this->presensi_pegawai_model->getpresensitanggal($nip, $row_tahun_ajaran->tanggal_mulai, $row_tahun_ajaran->tanggal_selesai, 'H')->jml;
		$data['datpresensitotaltanggal']['S'] = @$this->presensi_pegawai_model->getpresensitanggal($nip, $row_tahun_ajaran->tanggal_mulai, $row_tahun_ajaran->tanggal_selesai, 'S')->jml;
		$data['datpresensitotaltanggal']['I'] = @$this->presensi_pegawai_model->getpresensitanggal($nip, $row_tahun_ajaran->tanggal_mulai, $row_tahun_ajaran->tanggal_selesai, 'I')->jml;
		$data['datpresensitotaltanggal']['A'] = @$this->presensi_pegawai_model->getpresensitanggal($nip, $row_tahun_ajaran->tanggal_mulai, $row_tahun_ajaran->tanggal_selesai, 'A')->jml;

		$data['datpresensitotal'] = @$this->presensi_pegawai_model->getpresensitotaltanggal($nip, $row_tahun_ajaran->tanggal_mulai, $row_tahun_ajaran->tanggal_selesai)->jml;

		// for ($i=1;$i<=12;$i++) {
			
		// 	$data['datpresensitotalbulan'][$i]['H'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'H')->jml;
		// 	$data['datpresensitotalbulan'][$i]['S'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'S')->jml;
		// 	$data['datpresensitotalbulan'][$i]['I'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'I')->jml;
		// 	$data['datpresensitotalbulan'][$i]['A'] = @$this->presensi_pegawai_model->getpresensitotalbulan($i, $thn, 'A')->jml;
		// }



		$data['grafikpresensipegawai'] = TRUE;
		//$data['datpresensi'] = $this->presensi_pegawai_model->getresumepresensitahun($nip, $thn);
		$data['datpresensi'] = $this->presensi_pegawai_model->getresumepresensitahunajaran($nip, $row_tahun_ajaran->tanggal_mulai, $row_tahun_ajaran->tanggal_selesai);
		$this->template->load('superadmin/dashboard','superadmin/rekapkehadiran', $data);
	}

	public function resumepresensipegawaisemester($tanggal_mulai, $tanggal_selesai, $nip){
		

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
	
		
		$data['datpresensisemester'] = $this->presensi_pegawai_model->getresumepresensisemester($tanggal_mulai, $tanggal_selesai, $nip);
	
		$this->template->load('superadmin/dashboard','superadmin/resumepresensipegawaisemester', $data);
	}

	
	public function submitpresensipegawai(){
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
		$tgl = date('Y-m-d');
		if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		

		$datpeg = $this->pegawai_model->Getdatpeg();
		foreach ($datpeg->result() as $rowpeg) {
			
			if($this->input->post("presensi_".$rowpeg->NIP) != "") {
					
				$datpresensi = $this->presensi_pegawai_model->getpresensi($tgl, $rowpeg->NIP);
					
				if ($datpresensi) {
					$arrdata = array(
						'keterangan_presensi'=>$this->input->post("presensiket_".$rowpeg->NIP),
						'Rangkuman_presensi'=>$this->input->post("presensi_".$rowpeg->NIP)
					);
						//$this->presensi_pegawai_model->updatepresensi($arrdata, date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
						//print_r($arrdata)."<br/>";
					$this->presensi_pegawai_model->updatepresensi($arrdata, $tgl, $rowpeg->NIP);
						//echo $this->db->last_query()."<br/>";
				} else {
					$arrdata = array(
						//'Tanggal_presensi'=>date('Y-m-').substr($i+100, 1, 2),
						'Tanggal_presensi'=>($tgl),
						'keterangan_presensi'=>$this->input->post("presensiket_".$rowpeg->NIP),
						'Rangkuman_presensi'=>$this->input->post("presensi_".$rowpeg->NIP),
						'NIP'=>$rowpeg->NIP,
					);
						//print_r($arrdata)."<br/>";
					$this->presensi_pegawai_model->insertpresensi($arrdata);
						//echo $this->db->last_query()."<br/>";
				}
			}
			//}
		}
		redirect('superadmin/presensipegawai');

	}

	public function gantipassword(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$this->template->load('superadmin/dashboard','superadmin/gantipassword', $data);
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
				redirect('superadmin/gantipassword');
			}else{
				

				$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Lama Salah !" ,  "error" )</script>');



				redirect('superadmin/gantipassword');
			}
		} else {
			$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Baru Salah !" ,  "error" )</script>');

			redirect('superadmin/gantipassword');
		}	
	}

	public function tahunajaran(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;;
		$data['dat'] = $this->tahunajaran_model->Gettahunajaran();
		$this->template->load('superadmin/dashboard','superadmin/tahunajaran', $data);
	}

	public function tambahtahunajaran(){
			//if($this->input->post('submit')){
		$this->load->model('tahunajaran_model');
		$this->tahunajaran_model->tambahtahunajaran();
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
		redirect("superadmin/tahunajaran");
			//}
	}

	public function aktifkantahunajaran() {
		$this->load->model('setting_model');
		$this->setting_model->aktifkantahunajaran($this->uri->segment(3));

		redirect('superadmin/tahunajaran');
	}

	public function tambahdatpegValidate(){
		$this->load->library('form_validation');
		$array = array(
			array(
				'field' => 'NIP',
				'label' => 'NIP',
				'rules' => 'is_unique[pegawai.NIP]',
				'error' => array(
					'is_unique' => 'NIP sudah ada',
				)
			),

			array(
				'field' => 'nuptk',
				'label' => 'nuptk',
				'rules' => 'is_unique[pegawai.nuptk]',
				'error' => array(
					'is_unique' => 'nuptk sudah ada',
				)
			)
			
		);

		
		$this->form_validation->set_rules($array);
		return $this->form_validation->run();
	}

	public function tambahdatpeg(){
		

		if($this->input->post('submit')){
			if(!$this->tambahdatpegValidate()){
				$this->session->set_flashdata('warning',"<script>swal('Error','Cek Lagi  ', 'error')</script>");
				redirect("superadmin/pegawaibaru");
			}
			$this->load->model('pegawai_model');
			$this->pegawai_model->tambahdatpeg();
			$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
			redirect("superadmin/pegawaibaru");
		}
	}

	public function updatedatpeg(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['rowpeg'] = $this->pegawai_model->rowPegawai($this->uri->segment(3));
		$this->template->load('superadmin/dashboard','superadmin/updatedatpeg', $data);
		if($this->input->post('submit')){
			$this->load->model('pegawai_model');
			$this->pegawai_model->updatedatpeg();
			$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');		
			redirect("superadmin/pegawaibaru");
		} 
	}


	public function gantipasswordsiswa()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datajabatansiswa'] = $this->pegawai_model->Getjabatansiswa();		
		$this->template->load('superadmin/dashboard','superadmin/gantipasswordsiswa', $data);
	}

	public function editpasswordsiswa()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datjab'] = $this->pegawai_model->getjab();
		$data['rowpeg'] = $this->pegawai_model->rowJabatansiswa($this->uri->segment(3));
		$this->template->load('superadmin/dashboard','superadmin/editpasswordsiswa', $data);
	}

	public function updatepasswordsiswa() {
		$this->load->model('akun_model');
		$cek = $this->akun_model->selectakunsiswa($this->input->post('nisn'));
		// print_r($cek);
		if ($cek) {
			$data = array(
				"password" => $this->input->post('password')
			);
			$this->akun_model->update($data, $cek->id_akun);
		} else {
			$data = array(
				"nisn" => $this->input->post('nisn'),
				"password" => $this->input->post('password')
			);
			$this->akun_model->insert($data);
		}
		redirect('superadmin/gantipasswordsiswa');
		
	}


	public function deletedatpeg($id) {
		$this->load->model('pegawai_model');
		$this->pegawai_model->deletedatpeg($id);
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Dihapus", "success")</script>');
		redirect('superadmin/pegawaibaru#editdatpeg');
	}

	public function harilibur()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['datlibur'] = $this->tanggal_libur_model->getalllibur();
		$data['datliburnasional'] = $this->tanggal_libur_nasional_model->getalllibur();
		$this->template->load('superadmin/dashboard','superadmin/harilibur', $data);
	}

	public function simpanharilibur(){
			//if($this->input->post('submit')){
		$this->load->model('tanggal_libur_model');
		$data = array(
			"tanggal_awal" => $this->input->post('tanggal_awal'),
			"tanggal_akhir" => $this->input->post('tanggal_akhir'),
			"nama_libur" => $this->input->post('nama_libur')
		);
		$this->tanggal_libur_model->insertlibur($data);
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
		redirect("superadmin/harilibur");
			//}
	}

	public function simpanhariliburnasional(){
			//if($this->input->post('submit')){
		$this->load->model('tanggal_libur_nasional_model');
		$data = array(
			"tanggal_libur_nasional" => $this->input->post('tanggal_libur_nasional'),
			"bulan_libur_nasional" => $this->input->post('bulan_libur_nasional'),
			"nama_libur_nasional" => $this->input->post('nama_libur_nasional')
		);
		$this->tanggal_libur_nasional_model->insertlibur($data);
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
		redirect("superadmin/harilibur");
			//}
	}

	public function deleteharilibur(){
			//if($this->input->post('submit')){
		$this->load->model('tanggal_libur_model');
		$this->tanggal_libur_model->deletelibur($this->uri->segment(3));
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Dihapus", "success")</script>');			
		redirect("superadmin/harilibur");
			//}
	}

	public function deletehariliburnasional(){
			//if($this->input->post('submit')){
		$this->load->model('tanggal_libur_nasional_model');
		$this->tanggal_libur_nasional_model->deletelibur($this->uri->segment(3));
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Dihapus", "success")</script>');			
		redirect("superadmin/harilibur");
			//}
	}


// tutup Kepegawaian

//DISTRIBUSI DAN MUTASI

	public function distribusi_reg(){

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		// $data['username'] = $this->session->username;

		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_pegawai');
		
		$data['tabel_pegawai'] = $this->mod_pegawai->get();

		$data_kelas_reguler = $this->mod_kelas_reguler->getjoin();
		// Mengambil data siswa sesuai kelasnya
		foreach ($data_kelas_reguler as $kelas) {
			$kelas->siswa = $this->mod_kelas_reguler_berjalan->get_siswa($kelas->id_kelas_reguler);
		}
		$data['kelas_reguler'] = $data_kelas_reguler;
		$data['kelas_reguler_master'] = $this->mod_kelas_reguler->get();
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/distribusi_reg', $data);
	}

	public function isi_siswa_kelas(){
		

		$this->load->model('distribusi/mod_siswa_kelas');
		$copied = $this->mod_siswa_kelas->insert_from_siswa();
		$update = $this->mod_siswa_kelas->update_siswa_kelas_nilai();
		

		if ($copied && $update) {
			$this->session->set_flashdata('success', 'Insert Siswa Kelas Berhasil !');
		} else {
			$this->session->set_flashdata('errors', 'Data Gagal Disimpan !');
		}
		redirect('superadmin/distribusi_reg');
	}

	
	public function pilih_pembagian() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$tipe = $this->input->post('btntipe');
		if ($tipe == "Berdasarkan Agama dan Jenis Kelamin") {
			
			$jenjang = $this->input->post('jenjang');
			
			$this->load->model('distribusi/mod_kelas_reguler');
			$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));
			$data['kelas_reguler'] = $kelas_reguler;

			//$data['jumlah_kelas'] = $jumlah_kelas;			
			$data['jenjang'] = $jenjang;			
			//$data['nama_kelas'] = $nama_kelas;			
			$this->template->load('superadmin/dashboard','distribusi/kesiswaan/pilih_pembagian_agama', $data);
		} else if ($tipe == "Berdasarkan Prestasi") {
			$jenjang = $this->input->post('jenjang');
			
			$this->load->model('distribusi/mod_kelas_reguler');
			$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));
			$data['kelas_reguler'] = $kelas_reguler;
			
			$data['jenjang'] = $jenjang;			
			$this->template->load('superadmin/dashboard','kesiswaan/distribusi/kesiswaan/pilih_pembagian_prestasi', $data);
		} else {
			$jenjang = $this->input->post('jenjang');
			
			redirect('superadmin/proses_pembagian_kuartil/'.$jenjang);
		}
	}

	public function hapus_kelas_reguler($id){
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->mod_kelas_reguler->delete($id);
		// $this->session->set_flashdata('warning','<script>swal("Berhasil", "Data Berhasil Dihapus", "success")</script>');
		$this->session->set_flashdata('success', 'Kelas Berhasil Dihapus!');
		redirect('superadmin/distribusi_reg');
	}

	public function tambahkelas() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
			$this->form_validation->set_rules('jumlah_kelas', 'Jumlah Kelas', 'required');
			$this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
			$this->form_validation->set_rules('penamaan', 'Penamaan Kelas', 'required');

			if ($this->form_validation->run() === FALSE) {
			$errors = array_values($this->form_validation->error_array());
			$this->session->set_flashdata('error', $errors);
			} else {
			$this->load->model('distribusi/mod_kelas_reguler');

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
				
				$arrdata = array(
					"nama_kelas"=>$nama_kelas[$i],
					"jenjang"=>$this->input->post('jenjang'),
					"kuota_kelas_reguler"=>0,
					"jumlah_kelas_reguler"=>$jumlah_kelas,
					);
				
				$this->mod_kelas_reguler->insert($arrdata);
				
			}

			$data['jumlah_kelas'] = $jumlah_kelas;			
			$data['jenjang'] = $jenjang;			
			$data['nama_kelas'] = $nama_kelas;			
			
			$this->session->set_flashdata('success', 'Kelas Berhasil Dibuat!');
			}
			redirect('superadmin/distribusi_reg');		
	}

	public function update_kelas_reg(){
		$this->load->model('distribusi/mod_kelas_reguler');
		$jenjang = $this->input->post('jenjang');
		$jumlah = $this->input->post('jumlah_kelas'); //ambil nama jumlah_kelas dari form

		

		$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));
		$jumlah_kelas = $kelas_reguler[0]->jumlah_kelas_reguler; 

		$nama_kelas = $kelas_reguler[0]->nama_kelas;
		$jenis 		= explode("-", $nama_kelas)[1];

		if ($jenis == "1") {
				$urutan = array('-1','-2','-3','-4','-5','-6','-7','-8','-9','-10','-11','-12','-13','-14','-15','-16','-17','-18','-19','-20');
			} else if ($jenis == "A") {
				$urutan = array('-A','-B','-C','-D','-E','-F','-G','-H','-I','-J','-K','-L','-M','-N','-O','-P','-Q','-R','-S','-T');
			} else {
				$urutan = array('-I','-II','-III','-IV','-V','-VI','-VII','-VIII','-IX','-X','-XI','-XII','-XII','-XIV','-XV','-XVI','-XVII','-XVIII','-XIV','-XX');
			}

		for ($i=$jumlah_kelas;$i<$jumlah_kelas+$jumlah;$i++) {
				$nama_kelas = $jenjang.$urutan[$i];
				
				$arrdata = array(
					"nama_kelas"=>$nama_kelas,
					"jenjang"=>$jenjang,
					"kuota_kelas_reguler"=>0,
					"jumlah_kelas_reguler"=>$jumlah_kelas+$jumlah,
					// "id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
					);
				$this->mod_kelas_reguler->insert($arrdata);
				//$arridkelasreguler[$i] = $this->db->insert_id();
			}

			//update jumlah kelas berdasar jenjang
			$update = [
				'jumlah_kelas_reguler' => $jumlah_kelas + $jumlah
			];
			$kelas_reguler = $this->mod_kelas_reguler->updatebyjenjang($update, $jenjang);

			$this->session->set_flashdata('success', 'Kelas Berhasil Ditambahkan!');
			redirect('superadmin/distribusi_reg');
	}

	public function pembagian_agama2(){
		$this->template->load('superadmin/dashboard','kesiswaan/distribusi/kesiswaan/pembagian_agama');
	}

	public function hsl_pembagian_agama(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$jenjang = $this->input->post('jenjang'); //3;

		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');

		$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));

		$jml_kelas = count($kelas_reguler); // $this->input->post('jumlah_kelas'); //3;
		//$jml_sisa = $jml_siswa % $jml_kelas;
		$jml_perkelas = array(); 
		$total_siswa = 0;
		for ($i=0;$i<$jml_kelas;$i++){
			$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$total_siswa = $total_siswa + $jml_perkelas[$i];

		}


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
				//"nama_kelas"=>$this->input->post('nama_kelas'.$i),
				//"jenjang"=>$this->input->post('jenjang'),
				"kuota_kelas_reguler"=>$jml_perkelas[$i],
				"jumlah_kelas_reguler"=>$jml_kelas
				//"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);
			//INSERT INTO `kelas_reguler`(`id_kelas_reguler`, `nama_kelas`, `jenjang`, `kuota_kelas_reguler`, `jumlah_kelas_reguler`, `id_tahun_ajaran`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
			$this->mod_kelas_reguler->update($arrdata, $this->input->post('id_kelas_reguler'.$i)); //insert($arrdata);
			$arridkelasreguler[$i] = $this->input->post('id_kelas_reguler'.$i); //$this->db->insert_id();

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

		unset($arralokasi);
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
		unset($arrdatasiswa);
		$this->load->model('distribusi/mod_siswa_kelas');
		$tabelsiswakelas = $this->mod_siswa_kelas->get($jenjang);
		foreach ($tabelsiswakelas as $rowsiswa) {
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

		 		if (@$arralokasi[$i][$j][2] != "") {
		 		 	$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$arridkelasregulerberjalan[$i], 'nisn' => @$arralokasi[$i][$j][2]));
		 		}
		 	}
		}

		$data['siswa'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan();

		$this->template->load('superadmin/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_agama', $data);	
	}

	public function hsl_pembagian_prestasi(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$jenjang = $this->input->post('jenjang'); //3;

		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');

		$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));

		$jml_kelas = count($kelas_reguler); // $this->input->post('jumlah_kelas'); //3;
		//$jml_sisa = $jml_siswa % $jml_kelas;
		$jml_perkelas = array(); 
		$jk_perkelas = array(); 
		$total_siswa = 0;
		for ($i=0;$i<$jml_kelas;$i++){
			$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$jk_perkelas[$i] = $this->input->post('jenis_kelamin'.$i); 
			$total_siswa = $total_siswa + $jml_perkelas[$i];

		}

		$arridkelasreguler = array();
		$arridkelasregulerberjalan = array();

		
		for ($i=0;$i<$jml_kelas;$i++){
			//$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$arrdata = array(
				//"nama_kelas"=>$this->input->post('nama_kelas'.$i),
				//"jenjang"=>$this->input->post('jenjang'),
				"kuota_kelas_reguler"=>$jml_perkelas[$i],
				"jumlah_kelas_reguler"=>$jml_kelas
				//"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);
			
			$this->mod_kelas_reguler->update($arrdata, $this->input->post('id_kelas_reguler'.$i)); //insert($arrdata);
			$arridkelasreguler[$i] = $this->input->post('id_kelas_reguler'.$i); //$this->db->insert_id();

			$arrdata = array(
				"wali_kelas"=>"",
				"id_kelas_reguler"=>$arridkelasreguler[$i],
				"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);

			$this->mod_kelas_reguler_berjalan->insert($arrdata);
			$arridkelasregulerberjalan[$i] = $this->db->insert_id();

		}

		unset($arralokasi);// = array(array());

		for ($i=0;$i<$jml_kelas;$i++) {
			
		  	$progress = 0;

			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				$progress = $progress + (100 / $jml_perkelas[$i]);
		 		$arralokasi[$i][$j][0] = ''; 
		 		$arralokasi[$i][$j][1] = '';
		 		$arralokasi[$i][$j][2] = '';  
		
		 	}
		}
		 
		unset($arrdatasiswa);// = array(array()); tidak bisa karena akan menimbulkan array pertama kosong
		$this->load->model('distribusi/mod_siswa_kelas');
		$tabelsiswa = $this->mod_siswa_kelas->getprestasi($jenjang);
		foreach ($tabelsiswa as $rowsiswa) {
			$arrdatasiswa[] = array($rowsiswa->nisn, $rowsiswa->nama, $rowsiswa->agama, $rowsiswa->jenis_kelamin, '');
		}

		for ($i=0;$i<$jml_kelas;$i++) {	
			//echo "Kelas $i ====$jk_perkelas[$i]===<br/>";
			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				//echo "Murid No $j =======<br/>";
				if (@$arralokasi[$i][$j][2] == '') {
					//echo "Ok 1<br/>";
					$ketemu = false;
					for ($k=0;$k<count($arrdatasiswa);$k++) {
						//echo "Ok 2 $k<br/>";
						if (@$arrdatasiswa[$k][4] == '') {
							//echo $jk_perkelas[$i]." == ".@$arrdatasiswa[$k][3]." ZZZZZZZZZZZ<br/>";
							if ($jk_perkelas[$i] == @$arrdatasiswa[$k][3]) {
								$arrdatasiswa[$k][4] = $i+1; //kelas harus mulai dari 1 karena kalau mulai 0 dianggap kosong ''
								$arralokasi[$i][$j][2] = @$arrdatasiswa[$k][0];
								$ketemu = true;
								// echo @$arrdatasiswa[$k][0]." ".@$arrdatasiswa[$k][4]." ".$jk_perkelas[$i]." == ".@$arrdatasiswa[$k][3]."<br/>";
								break;
							} else if ($jk_perkelas[$i] == "") {
								$arrdatasiswa[$k][4] = $i+1; //kelas harus mulai dari 1 karena kalau mulai 0 dianggap kosong ''
								$arralokasi[$i][$j][2] = @$arrdatasiswa[$k][0];
								$ketemu = true;
								// echo @$arrdatasiswa[$k][0]." ".@$arrdatasiswa[$k][4]." ".$jk_perkelas[$i]." == ".@$arrdatasiswa[$k][3]."<br/>";
								break;
							}
						}
					}	
					
				}
		 	}
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

		$this->template->load('superadmin/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_agama', $data);	
	}

	public function hsl_pembagian_kuartil($value=''){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$jenjang = $this->input->post('jenjang');

		$this->form_validation->set_rules('id_kelas_reguler_berjalan', 'Kelas', 'required');
		$this->form_validation->set_rules('pilih[]', 'Siswa', 'required');

		if ($this->form_validation->run() === FALSE) {
			$errors = array_values($this->form_validation->error_array());
			$this->session->set_flashdata('error', $errors);
		} else {
			$id_kelas_reguler_berjalan = $this->input->post('id_kelas_reguler_berjalan'); //3;

			$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
			
			foreach ($_POST['pilih'] as $nisn) {
			 	$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$id_kelas_reguler_berjalan, 'nisn' => @$nisn));
			}
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}

		redirect('superadmin/proses_pembagian_kuartil/'.$jenjang);
	}

	public function buat_kelas_reguler_berjalan(){
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');

		$data_kelas_reguler = $this->mod_kelas_reguler->get();
		$tahun_ajaran       = $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran;

		
		foreach ($data_kelas_reguler as $kelas) {
			$datanya = [
				'id_kelas_reguler' => $kelas->id_kelas_reguler,
				'id_tahun_ajaran'  => $tahun_ajaran
 			];
 			$this->mod_kelas_reguler_berjalan->insert($datanya);
		}
		$this->session->set_flashdata('success', 'Kelas Berhasil Diaktifkan!');

		// Kembali ke mana?
		redirect('superadmin/distribusi_reg');
	}

	public function proses_pembagian_kuartil($jenjang)
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['jenjang'] = $jenjang;
		
		$this->load->model('distribusi/mod_siswa_kelas');
		$data['siswaL'] = $this->mod_siswa_kelas->getkuartil($jenjang, 'Laki-Laki');
		$data['siswaP'] = $this->mod_siswa_kelas->getkuartil($jenjang, 'Perempuan');

		$this->load->model('distribusi/mod_kelas_reguler_berjalan');

		$data['kelas_reguler_berjalan'] = $this->mod_kelas_reguler_berjalan->getjenjang($jenjang);
		//echo $this->db->last_query();

		$this->template->load('superadmin/dashboard','Kesiswaan/distribusi/kesiswaan/proses_pembagian_kuartil', $data);	
	}

	public function pembagian_prestasi(){
		$this->template->load('superadmin/dashboard','kesiswaan/distribusi/kesiswaan/pembagian_prestasi',$data);
	}

	public function hasil_pembagian_prestasi(){
		$this->template->load('superadmin/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_prestasi',$data);	
	}

	public function simpan_walikelas(){
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');

		$id_kelas_reguler_berjalan = $this->input->post('id_kelas_reguler_berjalan');
		$wali_kelas = $this->input->post('wali_kelas');

		if (!empty($wali_kelas)) {
			// Update datanya 
			$data['wali_kelas'] = $wali_kelas;
			$this->mod_kelas_reguler_berjalan->update($data, $id_kelas_reguler_berjalan);
		}

		$this->session->set_flashdata('success', 'Data Wali Kelas Berhasil Disimpan!');
		redirect('superadmin/distribusi_reg');		
	}

	public function eksportdatakelas($id_kelas_reguler)
	{
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		// $this->load->model('distribusi/mod_kelas_reguler');
		
		$data['tabel_siswa'] = $this->mod_kelas_reguler_berjalan->get_siswa($id_kelas_reguler);
		// $data['tabel_kelas_reguler'] = $this->mod_kelas_reguler;
		// $data['tabel_siswa_kelas_reguler_berjalan'] = $this->mod_siswa_kelas_reguler_berjalan;
		
		$this->load->view('kesiswaan/distribusi/kesiswaan/view_excel_data_kelas', $data);
	}

	public function print_bukti_mutasi_diterima($nisn = "")
	{
		$this->load->model('distribusi/mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/mod_setting');
		
		$data['rowsiswa'] = $this->mod_siswa_mutasi_masuk->selectsiswa($nisn);
		$data['rowsetting'] = $this->mod_setting->get()[0];
		$data['nomor'] = "";
		if (date('m') == '01') {
			$bln = "Januari";
		} else if (date('m') == '02') {
			$bln = "Februari";
		} else if (date('m') == '03') {
			$bln = "Maret";
		} else if (date('m') == '04') {
			$bln = "April";
		} else if (date('m') == '04') {
			$bln = "Mei";
		} else if (date('m') == '06') {
			$bln = "Juni";
		} else if (date('m') == '07') {
			$bln = "Juli";
		} else if (date('m') == '08') {
			$bln = "Agustus";
		} else if (date('m') == '09') {
			$bln = "September";
		} else if (date('m') == '10') {
			$bln = "Oktober";
		} else if (date('m') == '11') {
			$bln = "November";
		} else if (date('m') == '12') {
			$bln = "Desember";
		} 
		$data['tanggal'] = date('d').'-'.$bln.'-'.date('Y');
		$data['nama_kepsek'] = "Kepala Sekolah";
		// $data['tabel_siswa'] = $this->mod_kelas_reguler_berjalan->get_siswa($id_kelas_reguler);
		// // $data['tabel_kelas_reguler'] = $this->mod_kelas_reguler;
		// // $data['tabel_siswa_kelas_reguler_berjalan'] = $this->mod_siswa_kelas_reguler_berjalan;
		
		$this->load->view('kesiswaan/distribusi/kesiswaan/print_bukti_mutasi_diterima', $data);
	}

	public function distribusi_tam(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('distribusi/mod_kelas_tambahan');

		$data_kelas_tambahan = $this->mod_kelas_tambahan->get();

		

		foreach ($data_kelas_tambahan as $kelas) {
			$kelas->siswa = $this->mod_kelas_tambahan->get_siswa($kelas->id_kelas_tambahan);
		}

		// echo "<pre>";
		// var_dump($data_kelas_tambahan); exit;

		$data['nama_kelas_tambahan'] = $data_kelas_tambahan;


		// $data['jenis_kls_tambahan'] = $this->db->get('jenis_kls_tambahan')->result(); // Dummy
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/distribusi_tam', $data);
	}

	public function tambahkelas_tambahan() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

			$this->form_validation->set_rules('jenjang', 'Pilih Jenjang', 'required');
			// $this->form_validation->set_rules('jenis', 'Jenis Kelas Tambahan', 'required');

			if ($this->form_validation->run() === FALSE) {
			$errors = array_values($this->form_validation->error_array());
			$this->session->set_flashdata('error', $errors);
			} else{

		$this->load->model('distribusi/mod_kelas_tambahan');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/Mod_tahunajaran');
		// $this->load->model('distribusi/mod_jenis_kls_tambahan');
		
		$jenjang = $this->input->post('jenjang');
		// $jenis   = $this->input->post('jenis');

		// Mengambil data kelas regular berdasarkan jenjang
		$data_kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(['jenjang' => $jenjang]);

		$data_tambahan = array();
		foreach ($data_kelas_reguler as $reguler) {
			$data_tambahan[] = array(
				'nama_kelas_tambahan' 	 => $reguler->nama_kelas,
				'jenjang_kls_tambahan'   => $reguler->jenjang,
				'kuota_kelas'			 => $reguler->kuota_kelas_reguler,
				// 'id_jenis_kls_tambahan'	 => $jenis,
			);
		}

		$insert = $this->mod_kelas_tambahan->insert($data_tambahan);

		if ($insert) {
			$this->session->set_flashdata('success', 'Kelas Berhasil Dibuat!');

		} else {
			$this->session->set_flashdata('errors', 'Kelas Gagal Dibuat!');

		}
		}

		redirect('superadmin/distribusi_tam');
	}

		public function hapus_kelas_tambahan($id){
		$this->load->model('distribusi/mod_kelas_tambahan');
		$this->mod_kelas_tambahan->delete($id);
		// $this->session->set_flashdata('warning','<script>swal("Berhasil", "Data Berhasil Dihapus", "success")</script>');
		$this->session->set_flashdata('success', 'Kelas Berhasil Dihapus!');
		redirect('superadmin/distribusi_tam');
	}

	public function pengacakan_tambahan(){
		

		$this->load->model('distribusi/mod_kelas_tambahan');			

			$jenjang = $this->input->post('jenjang');
		
		
			// Pengacakan khusus untuk kelas 9
			$config['upload_path']   = './assets/distribusi/uploads/';
	        $config['allowed_types'] = 'xlsx|xls';
	        
	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file')){
	            $insert = false;
	            $this->dump($this->upload->display_errors());
	        } else {
	        	$this->load->library("PHPExcel");

	            $upload_data = $this->upload->data();
	            $filename    = $upload_data['file_name'];

	            $inputFileName = './assets/distribusi/uploads/'.$filename;
		        try {
		        	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		        } catch(Exception $e) {
		        	die('Error loading file :' . $e->getMessage());
		        }
		 
		        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		        $numRows   = count($worksheet);
		 
		        for ($i=2; $i < ($numRows+1); $i++) { 
		            if (!empty($worksheet[$i]['A']) && !empty($worksheet[$i]['B']) && !empty($worksheet[$i]['C'])
		         		&& !empty($worksheet[$i]['D']) && !empty($worksheet[$i]['E'])) {
		            	$ins[] = array(
		                    "nisn"          => $worksheet[$i]["A"],
		                    "nama"          => $worksheet[$i]["B"],
		                    // "kelas"         => $worksheet[$i]["C"],
		                    "agama"         => $worksheet[$i]["C"],
		                    "jenis_kelamin" => $worksheet[$i]["D"],
		                    "tpm" 			=> $worksheet[$i]["E"],
			            );
		            }
		        }

		        $kelas_tambahan = $this->mod_kelas_tambahan->get_kelas($jenjang);
		        $groups = array_chunk($ins, ceil(count($ins) / count($kelas_tambahan)));

		        $data_to_insert = array();
		        
		        foreach ($kelas_tambahan as $key => $kelas) {
		        	foreach ($groups[$key] as $siswa) {
		        		$data_to_insert[] = array(
		        			'id_kelas_tambahan' => $kelas->id_kelas_tambahan,
							'nisn'				=> $siswa['nisn']
		        		);
		        	}
		        }

		        // Insert into kelas_tambahan_berjalan
				$insert = $this->mod_kelas_tambahan->insert_berjalan($data_to_insert);
	        }
		

		if ($insert) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		} else {
			$this->session->set_flashdata('errors', 'Data Gagal Disimpan!');

		}

		redirect('superadmin/hasil_pembagian_tambahan');
	}

	public function hasil_pembagian_tambahan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('distribusi/mod_kelas_tambahan');
		$data['kelas_tambahan_berjalan'] = $this->mod_kelas_tambahan->get_kelas_berjalan();

		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/hasil_pembagian_tambahan', $data);
	}

	public function klinik_un(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$this->load->model('distribusi/mod_klinik_un');
		$data['klinik_un'] = $this->mod_klinik_un->get();
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/klinik_un', $data);
	}

	public function hasil_klinik_un() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$key = $this->input->post('id_klinik_un');
		$data['nisn'] = $this->input->post('nisn');
		$data['nama_siswa'] = $this->input->post('nama_siswa');
		$data['kelas'] = $this->input->post('kelas');
		$data['req_materi'] = $this->input->post('req_materi');
		$data['jumlah_peserta'] = $this->input->post('jumlah_peserta');
		$data['status_req'] = $this->input->post('status_req');
		$data['respon'] = $this->input->post('respon');


		$this->load->model('distribusi/mod_klinik_un' );
		
		$this->mod_klinik_un->insert($data);
		$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data berhasil disimpan!", "success")</script>');
		redirect('superadmin/klinik_un' );
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
		redirect('superadmin/klinik_un');		
	}

	public function hapus_klinik_un($id){
		$this->load->model('distribusi/mod_klinik_un');
		$this->mod_klinik_un->delete($id);
		$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data Berhasil Dihapus", "success")</script>');
		redirect('superadmin/klinik_un');
	}


	public function mutasi_masuk(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		
		$data['data_pencatatan'] = $this->Mod_siswa_mutasi_masuk->get_pencatatan();
		$data['form_pendaftaran_mutasi_masuk'] = $this->Mod_form_mutasi_masuk->get();
		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->get();
		$data['pengumuman_mutasi'] = $this->Mod_pengumuman_mutasi->get();
		$data['kelas_reguler_berjalan'] = $this->mod_kelas_reguler_berjalan->getjoin();
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/mutasi_masuk', $data);
	}

	public function hapus_pendaftar_mutasi($id){
		$this->load->model('distribusi/mod_siswa_mutasi_masuk');
		$this->mod_siswa_mutasi_masuk->hapusmutasi($id);
		$this->session->set_flashdata('success', 'Siswa Berhasil Dihapus!');
		redirect('superadmin/mutasi_masuk');
	}

	public function simpan_form_mutasi(){
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
        $this->session->set_flashdata('success', 'Formulir Berhasil Di Aktifkan!');

		redirect('superadmin/mutasi_masuk');
	}

	public function ubah_siswa_akun() {
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/Mod_siswa');
		$this->load->model('distribusi/Mod_akun');
			// $data['status_siswa'] = $status;
		foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$rowsiswamutasi = $this->Mod_siswa_mutasi_masuk->selectsiswa($nisn_siswa);

			$data=array(
				"nisn" => $nisn_siswa,
				"nama" => $rowsiswamutasi->nama_pendaftar_mutasi,
				"jenis_kelamin" => $rowsiswamutasi->jenis_kelamin,
			);
			$this->Mod_siswa->insert($data);	
			//echo $this->db->last_query();

			$arrdata = array(
				'password' => $nisn_siswa, 
				'id_jabatan' => '8', 
				'nisn' => $nisn_siswa
			);
		
			$this->Mod_akun->insert($arrdata);
		}
			$this->session->set_flashdata('success', 'Akun Siswa Berhasil Dibuat!');

			redirect('superadmin/mutasi_masuk');		
	}


	public function masukkan_siswa_kelas($nisn, $id_kelas_reguler_berjalan)
		{
			$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
			$arrdata = array('nisn'=>$nisn, 'id_kelas_reguler_berjalan'=>$id_kelas_reguler_berjalan);
			$this->mod_siswa_kelas_reguler_berjalan->insert($arrdata);	

			// $this->session->set_flashdata('status', "<script>alert(' siswa berhasil diinput!');</script>");
			$this->session->set_flashdata('success', 'Data Siswa Berhasil Masuk ke Kelas!');

			redirect('superadmin/mutasi_masuk');
	}

	public function editpendaftar_mutasi(){
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		// $this->load->model('kesiswaan/Mod_siswa_mutasi_masuk');
		// $data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->get();
		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->selectsiswa($this->uri->segment(4));

		// var_dump($data['tabel_siswa_mutasi_masuk']); exit;
		//echo $this->db->last_query();
		foreach ($this->db->get('form_pendaftaran_mutasi_masuk')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         	$settingformberkas[$form->nama_kolom] = $form->atribut;
         }
         $data['settingform'] = $settingform;
         $data['settingformberkas'] = $settingformberkas;

		// $this->load->view('kesiswaan/admin/view_edit_pendaftar_ppdb_swasta', $data);
		$this->load->view('superadmin/Kesiswaan/distribusi/kesiswaan/edit_pendaftar_mutasi', $data);
	}
	

	public function updatependaftar_mutasi() {
		$this->load->model('distribusi/Mod_tahunajaran');

		$arrdata = array(

				'nisn_pendaftar_mutasi' => $this->input->post('nisn_pendaftar_mutasi'),
				'nama_pendaftar_mutasi' => $this->input->post('nama_pendaftar_mutasi'),
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

		// var_dump($arrdata); exit;

		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->Mod_siswa_mutasi_masuk->updatemutasi($arrdata,  $this->uri->segment(4));
		// echo $this->db->last_query();
		$this->session->set_flashdata('pesan', "<script>alert('Perubahan data pendaftar Mutasi Masuk berhasil disimpan!');</script>");
		echo "<script>window.history.back();</script>";	
	}

	public function ubah_status_siswa_mutasi(){

			$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
			// $data['status_siswa'] = $status;
			foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$data=array("status_siswa" => $this->input->post('button'));
			$this->Mod_siswa_mutasi_masuk->updatemutasi($data, $nisn_siswa);	
			//echo $this->db->last_query();
		}
			$this->session->set_flashdata('status', "<script>alert('Status siswa berhasil diubah!');</script>");
			redirect('superadmin/mutasi_masuk');		

	}

	public function upload_file(){
		$config['upload_path'] = './assets/distribusi/files';
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

	public function buatakun(){
		
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/Mod_akun');
		$this->load->model('distribusi/Mod_siswa');
		$this->load->model('distribusi/Mod_orangtua_wali');
		$this->load->model('distribusi/Mod_tahunajaran');

		// VALUES: empty, semua, e.g. 2016/2017, dst...
		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->Mod_siswa_mutasi_masuk->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->getlolos($tahun_aktif);
		// $data['tahun_ajaran_selected'] = $tahun_aktif;
		$tabel_pendaftar_mutasi_lolos = $this->Mod_siswa_mutasi_masuk->getlolos($tahun_aktif);
		// var_dump($tabel_pendaftar_ppdb_lolos);
		// exit();

		foreach ($tabel_pendaftar_mutasi_lolos as $row_pendaftar_mutasi_lolos) {
			$row_akun = $this->Mod_akun->selectbynisn($row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi);
			if (!$row_akun) {
				$arrdata = array(
					'password' => $row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi, 
					'id_jabatan' => '8', 
					'nisn' => $row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi
				);
			
				$this->Mod_akun->insert($arrdata);

				$arrdata = array(
					'nama_ayah' => 'Nama Ayah'
				);
			
				$this->Mod_orangtua_wali->insert($arrdata);

				$id_orangtua = $this->db->insert_id();

				$arrdata = array(
					'id_tahunajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
					'nisn_pendaftar_mutasi' => $row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi,
					'nama_pendaftar_mutasi' => $row_pendaftar_mutasi_lolos->nama_pendaftar_mutasi,
					// 'tempat_lahir' => $row_pendaftar_mutasi_lolos->tempat_lahir,
					// 'tanggal_lahir' => $row_pendaftar_mutasi_lolos->tanggal_lahir,
					'jenis_kelamin' => $row_pendaftar_mutasi_lolos->jenis_kelamin,
					'status_siswa' => 'Aktif',
					'id_orangtua' => $id_orangtua
				);
			
				$this->Mod_siswa->insert($arrdata);
			}

			$this->session->set_flashdata('lolos', "<script>alert('Pembuatan akun untuk siswa baru telah berhasil!!');</script>");			
		}
		redirect('superadmin/mutasi_masuk');
	}

	public function nonaktifform() {
		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$i=1;
        foreach ($this->db->get('form_pendaftaran_mutasi_masuk')->result() as $form) 
         { 
         	if ($form->nilai == "1") 
	         {
         		$nilai = 0;
         		$atribut = "";
	         	$arrdata = array
	         	( 'nilai' => $nilai );
				if (($form->id_form_pendaftaran_mutasi_masuk >= 21) && ($form->id_form_pendaftaran_mutasi_masuk <= 27)) 
				{ $arrdata['atribut'] = ''; }
				$this->Mod_form_mutasi_masuk->update($arrdata, $form->id_form_pendaftaran_mutasi_masuk);
         	}  	
			$i=$i+1;
         }
		$this->load->model('distribusi/Mod_form_mutasi_masuk');   
		$this->session->set_flashdata('success', 'Formulir Berhasil Di Non-aktifkan!');
		// $this->session->set_flashdata('nonaktif', "<script>alert('Formulir berhasil dinon-aktifkan!');</script>");
		redirect('superadmin/mutasi_masuk');
	}

	public function mutasi_keluar(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$data['data_pencatatan_keluar'] = $this->Mod_siswa_mutasi_keluar->get_pencatatan_keluar();

		$data['tabel_siswa_mutasi_keluar'] = $this->Mod_siswa_mutasi_keluar->get();
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/mutasi_keluar', $data);
	}

	public function get_nama()
	{
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$nisn = $this->input->post('nisn');
		$data['siswa'] = $this->Mod_siswa_mutasi_keluar->get_nama($nisn);
		echo json_encode($data); //buat manggil json 
	}

	public function nonaktifkan_akun($nisn)
	{
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$this->Mod_siswa_mutasi_keluar->hapus_siswa_mutasi($nisn);
		$this->session->set_flashdata('success', 'Akun Siswa Berhasil Di Non-aktifkan!');
		redirect('superadmin/mutasi_keluar');

	}

	public function cetak_bukti_mutasi_keluar($nisn){
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$data['siswa_mutasi'] = $this->Mod_siswa_mutasi_keluar->get_data_cetak($nisn);
		$data['setting'] = $this->Mod_siswa_mutasi_keluar->get_nama_sekolah();
		

		$filename = $nisn."-Print.doc";
		$path ="./assets/distribusi/cetak/";
		$data['nomor'] = "";
		if (date('m') == '01') {
			$bln = "Januari";
		} else if (date('m') == '02') {
			$bln = "Februari";
		} else if (date('m') == '03') {
			$bln = "Maret";
		} else if (date('m') == '04') {
			$bln = "April";
		} else if (date('m') == '04') {
			$bln = "Mei";
		} else if (date('m') == '06') {
			$bln = "Juni";
		} else if (date('m') == '07') {
			$bln = "Juli";
		} else if (date('m') == '08') {
			$bln = "Agustus";
		} else if (date('m') == '09') {
			$bln = "September";
		} else if (date('m') == '10') {
			$bln = "Oktober";
		} else if (date('m') == '11') {
			$bln = "November";
		} else if (date('m') == '12') {
			$bln = "Desember";
		} 
		$data['tanggal'] = date('d').'-'.$bln.'-'.date('Y');
		
		
		if (!file_exists($path)) mkdir($path);

		$print = $this->load->view('superadmin/kesiswaan/distribusi/kesiswaan/print_bukti_siswa_mutasi_keluar', $data, TRUE);
		write_file($path.'/'.$filename, $print);
		redirect($path.'/'.$filename);	
	}

	public function hapus_siswa_mutasi_keluar(){
		$this->load->model('distribusi/mod_siswa_mutasi_keluar');
		$this->mod_siswa_mutasi_keluar->hapus_siswa_mutasi($nisn);
	}

	public function save_siswa_mutasi_keluar(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$data = array(
				
				'nama'=>$this->input->post('nama'),
				'nisn'=>$this->input->post('nisn'),
				'surat_ket_pindah'=>$this->input->post('surat_ket_pindah'),
				'sekolah_tujuan' => $this->input->post('sekolah_tujuan'),
				'status_siswa' => $this->input->post('status_siswa'),
				'surat_bebas_administrasi'=>$this->input->post('surat_bebas_administrasi'),
				'berkas_1'=>$this->input->post('berkas_1'),
				'berkas_2'=>$this->input->post('berkas_2'),
				'berkas_3'=>$this->input->post('berkas_3'),

				
			);
		$this->load->model('distribusi/mod_siswa_mutasi_keluar');
		$this->mod_siswa_mutasi_keluar->insert($data);
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		redirect('superadmin/mutasi_keluar');
	}
	
	public function ubah_status_siswa_mutasi_keluar($id, $status){
		$data['status_siswa'] = $status;
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');

		$this->Mod_siswa_mutasi_keluar->update($data, $id);
		$this->session->set_flashdata('success', 'Status Siswa Berhasil Diubah!');
		redirect('superadmin/mutasi_keluar');
	}

	public function dump($data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}

	public function import($success=""){
        $data['judul_besar'] = 'PHPExcel';
        $data['judul_kecil'] = 'Import';
        $data['output'] = "<h4>Sebelum mengupload, pastikan file anda berformat <strong>.xls/.xlsx</strong></h4>";
        $data['output'] .= form_open_multipart('php_excel/do_upload');
        $form = array(
                    'name'        => 'userfile',
                    'style'       => 'position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;background-color:transparent;color:transparent;',
                    'onchange'  => "$('#upload-file-info').html($(this).val());"
                );
        $data['output'] .= "<div style='position:relative;'>";
        $data['output'] .= "<a class='btn btn-primary' href='javascript:;'>";
        $data['output'] .= "Browse… ".form_upload($form);
        $data['output'] .= "</a>";
        $data['output'] .= "&nbsp;";
        $data['output'] .= "<span class='label label-info' id='upload-file-info'></span>";
        $data['output'] .= "</div>";
        $data['output'] .= "<br>";
        $data['output'] .= form_submit('name', 'Go !', 'class = "btn btn-default"');
        $data['output'] .= form_close();
        if ($success) {
            $data['pesan'] = '<div class="alert alert-success alert-dismissible">';
            $data['pesan'] .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            $data['pesan'] .= '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
            $data['pesan'] .= 'Success alert preview. This alert is dismissable.';
            $data['pesan'] .= '</div>';
        }
 
        var_dump($data); exit;
    }

     public function do_upload(){
        $config['upload_path']   = './assets/distribusi/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->phpexcel_model->upload_data($filename);
            unlink('./assets/distribusi/uploads/'.$filename);
            redirect('superadmin/import/success','refresh');
        }
    }

    public function tambah_pengumuman(){
    	
		$this->load->model('distribusi/Mod_pengumuman_mutasi');


		$key = $this->input->post('id_pengumuman');
		$data['tgl_pengumuman'] = $this->input->post('tgl_pengumuman');
		$data['judul_pengumuman'] = $this->input->post('judul_pengumuman');
		$data['file_pengumuman'] = $this->input->post('file_pengumuman');


		$imagename = $_FILES['file_pengumuman']['name'];
		if (empty($imagename)) {
			$imagename = $file_memo;
		}
		$source = $_FILES['file_pengumuman']['tmp_name'];
		$target= "assets/distribusi/pengumuman/".$imagename; //lokasi upload
		$config['max_size'] = '10000000';
		$data['file_pengumuman'] =$target;
		move_uploaded_file($source,$target);
		$this->Mod_pengumuman_mutasi->insert($data);
		$this->session->set_flashdata('success', 'Pengumuman Berhasil Ditambahkan!');
		redirect('superadmin/mutasi_masuk');
	}

	public function download ($id) {

		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$data = array('id_pengumuman' => $id);
		$this->Mod_pengumuman_mutasi->forcefile($id);
		$this->session->set_flashdata('sukses','data berhasil didownload');
		redirect('superadmin/mutasi_masuk');
	}

	public function delete($id) {

		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$data = array('id_pengumuman' => $id);
		$this->Mod_pengumuman_mutasi->delete($id);
		$this->session->set_flashdata('sukses','data berhasil dihapus');
		redirect('superadmin/mutasi_masuk');
	}


	public function cobaliatjumlah()
	{	
		$this->load->model('distribusi/mod_siswa_kelas');
		$data_jumlah= $this->mod_siswa_kelas->hitungjumlahjk('7');

		$jumlah_laki2 = $data_jumlah[0]->jumlah;
		$jumlah_perempuan = $data_jumlah[1]->jumlah;

		$jumlah_kelas=5;
		$arr_laki2 = array();
		$arr_perempuan = array();

		$bagi_laki2 = floor($jumlah_laki2 / $jumlah_kelas); //floor itu buat bulatin ke bawah, ceil buat bulatin keatas
		$bagi_perempuan = floor($jumlah_perempuan / $jumlah_kelas);

		for ($i = 0; $i < $jumlah_kelas; $i++){

			$arr_laki2[$i] = $bagi_laki2;
			$arr_perempuan[$i] = $bagi_perempuan;

		}
		
		$sisa_laki2 = $jumlah_laki2 % $jumlah_kelas; //mod 
		$sisa_perempuan = $jumlah_perempuan % $jumlah_kelas;

		//untuk membagi sisa dari jumlah siswa 
		$arr_laki2     = $this->tambah_dari_sisa($sisa_laki2, $bagi_laki2, $arr_laki2);
		$arr_perempuan = $this->tambah_dari_sisa($sisa_perempuan, $bagi_perempuan, $arr_perempuan);

		//untuk membagi kuartil low med hi laki2 perempuan
		$data_kuartil_laki2     = $this->mod_siswa_kelas->getnilai('laki-laki','7');
		$data_kuartil_perempuan = $this->mod_siswa_kelas->getnilai('perempuan','7');

		$kuartil_laki2     = $this->get_kuartil($jumlah_laki2, $data_kuartil_laki2);
		$kuartil_perempuan = $this->get_kuartil($jumlah_perempuan, $data_kuartil_perempuan);

		//untuk melihat posisi siswa
		$low_laki2 = array();
		$med_laki2 = array();
		$hi_laki2  = array();

		foreach ($data_kuartil_laki2 as $siswa) {
			if($siswa->total_nilai <= $kuartil_laki2['q1']){
				array_push($low_laki2, $siswa->nisn);
			} else if ($siswa->total_nilai > $kuartil_laki2['q1'] && $siswa->total_nilai < $kuartil_laki2['q3']) {
				array_push($med_laki2, $siswa->nisn);
			} else {
				array_push($hi_laki2, $siswa->nisn);
			}
		}
		

		$low_pr = array();
		$med_pr = array();
		$hi_pr  = array();

		foreach ($data_kuartil_perempuan as $siswa) {
			if($siswa->total_nilai <= $kuartil_perempuan['q1']){
				array_push($low_pr, $siswa->nisn);
			} else if ($siswa->total_nilai > $kuartil_perempuan['q1'] && $siswa->total_nilai < $kuartil_perempuan['q3']) {
				array_push($med_pr, $siswa->nisn);
			} else {
				array_push($hi_pr, $siswa->nisn);
			}
		}		
		echo "<pre>";
		var_dump($med_laki2);

		exit;
	}


	private function tambah_dari_sisa($sisa, $bagi, $arr) {
		if ($sisa > 0) {
			if ($bagi % 2 == 1) { //ganjil
				$plus = 1;
			} else { //genap
				$plus = 2;
			}

			$i = 0;
			while ($sisa > 0) {
				if ($sisa < $plus) {
					$plus = $sisa;
				}				
				
				$arr[$i] = $arr[$i] + $plus;
				$sisa    = $sisa - $plus;
				$i++;
			}
		}
		return $arr;
	}

	private function get_kuartil($jumlah, $data_kuartil){
		if ($jumlah % 2 == 1) {
			// Qi = i(n+1)/4
			$indexQ1 = floor(1 * ($jumlah + 1) / 4);
			$indexQ2 = floor(2 * ($jumlah + 1) / 4);
			$indexQ3 = floor(3 * ($jumlah + 1) / 4);

			$Q1 = $data_kuartil[$indexQ1 - 1]->total_nilai;
			$Q2 = $data_kuartil[$indexQ2 - 1]->total_nilai;
			$Q3 = $data_kuartil[$indexQ3 - 1]->total_nilai;
		} else {
			// Q1 = X(n + 2)/4
			// Q2 = 1/2 (Xn/2 + Xn/2+1)
			// Q3 = X(3n + 2)/4

			$indexQ1   = floor(($jumlah + 2) / 4); 
			$indexQ2_1 = floor($jumlah / 2);
			$indexQ2_2 = floor(floor($jumlah / 2) + 1);
			$indexQ3   = floor((3 * $jumlah + 2) / 4);

			$Q1 = $data_kuartil[$indexQ1 - 1]->total_nilai;
			$Q2 = 0.5 * ($data_kuartil[$indexQ2_1 - 1]->total_nilai + $data_kuartil[$indexQ2_2 - 1]->total_nilai);
			$Q3 = $data_kuartil[$indexQ3 - 1]->total_nilai;
		}

		$data['q1'] = $Q1;
		$data['q2'] = $Q2;
		$data['q3'] = $Q3;

		return $data;

	}


		public function data_import_prestasi($value='')
		{
			$config['upload_path']   = './assets/distribusi/uploads/';
	        $config['allowed_types'] = 'xlsx|xls';
	        
	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file')){
	            $insert = false;
	            $this->dump($this->upload->display_errors());
	        } else {
	        	$this->load->library("PHPExcel");

	            $upload_data = $this->upload->data();
	            $filename    = $upload_data['file_name'];

	            $inputFileName = './assets/distribusi/uploads/'.$filename;
		        try {
		        	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		        } catch(Exception $e) {
		        	die('Error loading file :' . $e->getMessage());
		        }
		 
		        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		        $numRows   = count($worksheet);
		 
		        for ($i=2; $i < ($numRows+1); $i++) { 
		            $ins[] = array(
	                    "nisn"          		=> $worksheet[$i]["A"],
	                    "prestasi_or"          => $worksheet[$i]["D"],
	                    "prestasi_tahfidz"  => $worksheet[$i]["E"],
	                    
		            );
		        }

		        // echo "<pre>";
		        // var_dump($ins);

		     	$insert = $this->db->insert_batch('tabel_sementara_simpan_prestasi', $ins);

		     	$this->load->model('distribusi/mod_siswa_kelas');

		     	if ($insert){
		     		// copy ke siswa_kelas
		     		$update = $this->mod_siswa_kelas->update_siswa_kelas_prestasi();
					if ($update) {
						// Clear data sementara
						$this->db->empty_table('tabel_sementara_simpan_prestasi');

						$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data berhasil disalin.", "success")</script>');
					} else {
						$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data gagal disalin!", "error")</script>');
					}
					redirect('distribusi/kesiswaan/distribusi_reg');
		     		
		     	} else {
		     		$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data gagal disalin!", "error")</script>');
		     	}
	        }
		}

		public function buku_induk()
		{
		
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;


		$this->load->model('distribusi/mod_siswa');
		$data['tabel_siswa'] = $this->mod_siswa->getsiswa();
		
		
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi/kesiswaan/buku_induk',$data);	
	   }


	   public function edit_buku_induk_siswa()
	   {
	   	$this->load->model('distribusi/mod_siswa');
		$data['row_siswa'] = $this->mod_siswa->select($this->uri->segment(4));
	
		$this->load->view('kesiswaan/distribusi/kesiswaan/edit_buku_induk_siswa', $data);
	   }

	   public function update_buku_induk_siswa(){
	   	$config['upload_path']          = './assets/distribusi/foto_siswa/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('foto')) { 
        	$foto = ""; 
        } else { 
        	$foto = $this->upload->data('file_name'); 
        }

		$this->load->model('distribusi/mod_siswa');

		// var_dump($foto); exit;

		$data = array(

		'nisn'				=>$this->input->post('nisn'),
		'no_induk_siswa'	=>$this->input->post('no_induk_siswa'),
		'foto'				=>$foto,
		'nik'				=>$this->input->post('nik'),
		'nama'				=>$this->input->post('nama'),
		'jenis_kelamin'		=>$this->input->post('jenis_kelamin'),
		'tempat_lahir'		=>$this->input->post('tempat_lahir'),
		'tanggal_lahir'		=>$this->input->post('tanggal_lahir'),
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
		'asal_sekolah'=>$this->input->post('asal_sekolah'),
		'lama_belajar_disd_mi'=>$this->input->post('lama_belajar_disd_mi'),
		// 'id_orangtua'=>$this->session->userdata('id_orangtua')

			);

		$this->load->model('distribusi/mod_siswa');
		$this->mod_siswa->update($data, $this->uri->segment(4));
        $this->session->set_flashdata('siswa', "<script>alert('Data siswa berhasil diperbarui!');</script>");
		redirect('superadmin/buku_induk');
		     		
	   }

	   public function edit_buku_induk_ortu(){


		$this->load->model('distribusi/mod_siswa');
		$row_siswa = $this->mod_siswa->select($this->uri->segment(4));
		$data['row_siswa'] = $row_siswa;

	    $this->load->model('distribusi/mod_siswa');
	    $data['row_siswa_ortu'] = $this->mod_siswa->getsiswaortu($row_siswa->id_orangtua);

	   	// var_dump($data['row_siswa_ortu']); exit;

		$this->load->view('superadmin/kesiswaan/distribusi/kesiswaan/edit_buku_induk_ortu', $data);
	   }

	   public function update_buku_induk_ortu()
	   {

	   	$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

	   	$this->load->model('distribusi/mod_orangtua_wali');

		$data = array(

		// 'id_orangtua'=>$this->input->post('id_orangtua'),
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


		$this->load->model('distribusi/mod_orangtua_wali');
		$this->mod_orangtua_wali->update($data, $this->uri->segment(4));
        $this->session->set_flashdata('orangtua', "<script>alert('Data siswa berhasil diperbarui!');</script>");
		redirect('superadmin/buku_induk');     		
	   }

	   //tutup distribusi dan mutasi 

	   //Non Akademik
	   //ekskul
	   function pendaftaran($action = null)
	{
		$this->load->model('nonakademik/Mod_ekskul','me');
		if ($action == null)
		{
			$data["data_ekskul"] = $this->me->data_ekskul();
			$data["jdwal_ekskul"] = $this->me->jdwal_ekskul("jadwal2");

			$data["statistik_ekskul"] = $this->me->statistik_ekskul("Ganjil");
			// echo $this->db->last_query();
			$data['nama'] = $this->session->Nama;
			$data['foto'] = $this->session->foto; 
			$data['username'] = $this->session->username;
			
			$this->template->load('superadmin/dashboard','superadmin/pembimbing/nonakademik/pendaftaran', $data);
			
			// redirect('nonakademik/pendaftaran');
		}
		else if ($action == "get_siswa")
		{
			$data_siswa = $this->me->get_siswa($_POST["nik"]);
			if (!empty($data_siswa))
				echo json_encode($data_siswa);
			else
				echo "";
		}
		else if ($action == "simpan")
		{
			$dtdaftar = $this->input->post();
			$hasil = $this->me->simpan($dtdaftar);
			if ($hasil)
			{
				
				$this->session->set_flashdata('pesan', '<script>swal("Berhasil","Data Berhasil Disimpan", "success")</script>');
				redirect("superadmin/pendaftaran");
			}
		}
	}

	function datapeserta($id_jenis_kls_tambahan){
		$this->load->model('nonakademik/mod_ekskul');

		$data["ekskul"] = $this->mod_ekskul->get_peserta($id_jenis_kls_tambahan, $this->setting['id_tahun_ajaran']);
		//echo $this->db->last_query();
		$this->load->view('superadmin/pembimbing/nonakademik/datapeserta', $data);
	}

	function jadwal(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_ekskul','me');
		$data["jadwal_ekskul"] = $this->me->jdwal_ekskul();
		$this->template->load('superadmin/dashboard','superadmin/pembimbing/nonakademik/jadwal', $data);
	}

	function presensi($action = null){
		$this->load->model('nonakademik/Mod_ekskul','me');

		if ($action == null)
		{
			$data['nama'] = $this->session->Nama;
			$data['foto'] = $this->session->foto; 
			$data['username'] = $this->session->username;
			$data["jadwal_ekskul"] = $this->me->jdwal_ekskul();
			$data["data_pembimbing"] = $this->me->data_pembimbing();
			$data["tahun_presensi"] = $this->me->get_presensi_tahun();
			$data["data_ekskul"] = $this->me->data_ekskul();
			$this->template->load('superadmin/dashboard','superadmin/pembimbing/nonakademik/presensi', $data);

		}
		else if ($action == "save")
		{
			$dt_save["pembimbing"] = $_POST["pp_pembimbing"];
			$pp_tanggal = explode("-", $_POST["pp_tanggal"]);
			$dt_save["tanggal"] = $pp_tanggal[2]."-".$pp_tanggal[1]."-".$pp_tanggal[0];
			$dt_save["status"] = $_POST["pp_status"];
			$dt_save["jadwal_id"] = $_POST["pp_jadwal_id"];

			$this->me->simpan_presensi_pembimbing($dt_save);
		}
		else if ($action == "pp_report")
		{
			$tahun = $_POST["tahun"];
			$bulan = $_POST["bulan"];
			$hasil = $this->me->get_presensi_pembimbing_report($tahun, $bulan);

			$result = "";
			$i = 0;
			foreach ($hasil as $prensesi)
			{
				$i++;
				$tgl = date_create($prensesi->tgl_kegiatan);
				$result .= "<tr>
			                    <td>".$i.".</td>
			                    <td>".$tgl->format("d-m-Y")."</td>
			                    <td>".$prensesi->nama_pembimbing."</td> 
			                    <td>".$prensesi->jabatan."</td>  
			                  </tr>";
			}

			echo $result;
		}
		else if ($action == "siswa")
		{
			$thnajaran = $_POST["thnajaran"];
			$semester = $_POST["semester"];
			$idjadwal = $_POST["idjadwal"];
			$tanggal = $_POST["tanggal"];

			$pp_tanggal = explode("-", $tanggal);
			$stanggal = $pp_tanggal[2]."-".$pp_tanggal[1]."-".$pp_tanggal[0];
			//print_r($_POST);

			$arr_hasil = $this->me->get_presensi_siswa($thnajaran, $semester, $idjadwal, $stanggal);
			$result = "";
			foreach ($arr_hasil as $siswa)
			{
				$result .= '<tr>
                              <td>'.$siswa->nama.'</td>
                              <td>
                                <label style="margin-right: 10px;"><input type="radio" name="siswa['.$siswa->nisn.']" value="h" '.($siswa->status_kehadiran == "h" ? "checked" : "").' > H</label>
                                <label style="margin-right: 10px;"><input type="radio" name="siswa['.$siswa->nisn.']" value="i" '.($siswa->status_kehadiran == "i" ? "checked" : "").'> I</label>
                                <label style="margin-right: 10px;"><input type="radio" name="siswa['.$siswa->nisn.']" value="s" '.($siswa->status_kehadiran == "s" ? "checked" : "").'> S</label>
                                <label style="margin-right: 10px;"><input type="radio" name="siswa['.$siswa->nisn.']" value="a" '.($siswa->status_kehadiran == "a" ? "checked" : "").'> A</label>
                              </td>
                            </tr>';
			}
			echo $result;
		}
		else if ($action == "siswa_save")
		{
			//print_r($_POST["siswa"]);
			if (!empty($_POST["siswa"]))
			{
				foreach ($_POST["siswa"] as $nisn => $status)
				{
					$pp_tanggal = explode("-", $_POST["tanggal"]);
					$tanggal = $pp_tanggal[2]."-".$pp_tanggal[1]."-".$pp_tanggal[0];
					$arr_hasil = $this->me->simpan_presensi_siswa(array("nisn" => $nisn, "jadwal_id" => $_POST["pp_jadwal_id"], "tanggal" => $tanggal, "status" => $status));
				}
			}
		}
		else if ($action == "siswa_report")
		{
			$tanggal = $_POST["tanggal"];
			$tgl = explode("-", $tanggal);
			$stgl = $tgl[2]."-".$tgl[1]."-".$tgl[0];
			$ekskul = $_POST["ekskul"];
			$arr_hasil = $this->me->presensi_siswa($stgl,$ekskul);

			$content = "";
			$i = 0;
			foreach ($arr_hasil as $hasil)
			{
				$i++;
				$content .= "<tr>
		                        <td>".$i."</td>
		                        <td>".$hasil->nisn."</td>
		                        <td>".$hasil->nama."</td>
		                        <td>".strtoupper($hasil->status_kehadiran)."</td>
		                      </tr>";
			}

			echo $content;
		}
		else if ($action == "siswa_report_pertemuan")
		{
			$dt = array();
			$dt["thn_ajaran"] = $_POST["thn_ajaran"];
			$dt["semester"] = $_POST["semester"];
			$dt["jenis_kls_tambahan"] = $_POST["ekskul"];

			if ($_POST["subaction"] == "jum_pertemuan")
			{
				$arr_jum_prtemuan = $this->me->report_presensi("siswa_jum_pertemuan", $dt);
				echo json_encode($arr_jum_prtemuan);
			}
			else if ($_POST["subaction"] == "siswa_pertemuan")
			{
				$arr_siswa_pertemuan = $this->me->report_presensi("siswa_pertemuan", $dt);
				echo json_encode($arr_siswa_pertemuan);
			}
			else if ($_POST["subaction"] == "siswa_status_presensi")
			{
				$dt["nisn"] = $_POST["nisn"];
				$arr_siswa_status = $this->me->report_presensi("siswa_status_presensi", $dt);
				echo json_encode($arr_siswa_status);
			}
			
			
			// print_r($arr_jum_prtemuan);
			
		}
		else if ($action == "pembimbing_report")
		{
			$subaction = isset($_POST["subaction"]) ? $_POST["subaction"] : "";
			$dt = array();
			if ($subaction == "get_tanggal")
			{
				$dt["tahun"] = $_POST["tahun"];
				$dt["bulan"] = $_POST["bulan"];

				$arr_hasil["tanggal"] = $this->me->report_presensi_pembimbing("get_tanggal", $dt);
				$arr_hasil["pembimbing"] = $this->me->report_presensi_pembimbing("get_pembimbing", $dt);
				echo json_encode($arr_hasil);
			}
		}		
	}

	function nilai($id_kelas_reguler = "", $idthn = ""){
		$this->load->model('nonakademik/mod_ekskul','me');
		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');
		$this->load->model('nonakademik/mod_jenis_kls_tambahan');
		$this->load->model('nonakademik/Mod_tahunajaran');
		$data['tahunajaran'] = $this->Mod_tahunajaran->get();
		//$id_tahun_ajaran = "";// klo tdk dipilih kosong 
		
		$id_tahun_ajaran = $this->setting->id_tahun_ajaran; //$data['tahunajaran'][0]->id_tahun_ajaran; //kalo dipilih kosong
		if ($idthn != "") { $id_tahun_ajaran = $idthn; }
		$data['id_tahun_ajaran'] = $id_tahun_ajaran;
		

		$data['id_kelas_reguler'] = $id_kelas_reguler;
		$data['kelas_reguler'] = $this->mod_kelas_reguler->get(array('id_tahun_ajaran'=>$this->setting->id_tahun_ajaran));
		$data['jenis_kls_tambahan'] = $this->mod_jenis_kls_tambahan->get();
		//echo $this->db->last_query();

		$data['siswa_kelas_reguler_berjalan'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan2($id_kelas_reguler, $id_tahun_ajaran);
		//echo $this->db->last_query();
		 $data['siswa_ekskul'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_ekskul($id_kelas_reguler);
		// $data['record'] = $this->mod_siswa_kelas_reguler_berjalan->get_all_kelas();


		 $data['nama'] = $this->session->Nama;
		 $data['foto'] = $this->session->foto; 
		 $data['username'] = $this->session->username;
		// $this->template->load('pembimbing/dashboard','nonakademik/nilai', $data);
		$this->template->load('superadmin/dashboard','superadmin/pembimbing/nonakademik/nilai', $data);
	}

	function simpan_nilai($id_kelas_reguler = ""){
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');
		$this->load->model('nonakademik/mod_nilaiekskul');

		$data['id_kelas_reguler'] = $id_kelas_reguler;
		
		$siswa_kelas_reguler_berjalan = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan($id_kelas_reguler);

		foreach ($siswa_kelas_reguler_berjalan as $row) {
			$nilai = @$this->input->post("nilai_".$row->nisn."_".$row->id_jenis_kls_tambahan);
			if ($nilai != "") {
				$arrdata = array(
					"nisn" =>$row->nisn,
					"id_jenis_kls_tambahan"=>$row->id_jenis_kls_tambahan,
					"nilai_ekskul"=>$nilai
				);
				$cek = $this->mod_nilaiekskul->cek($row->nisn, $row->id_jenis_kls_tambahan);

				if ($cek) {
					$this->mod_nilaiekskul->update($arrdata, $cek->id_nilaiekskul);
				} else {
					$this->mod_nilaiekskul->insert($arrdata);
				}
			}
		}

		redirect('superadmin/nilai/'.$id_kelas_reguler);
	}

	function pembayaran(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_danamandiri');
		$tgl = date('Y-m-d');
        if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		$data['danamandiri']=$this->Mod_danamandiri->get(); //"tgl_pembayaran <= '$tgl' AND batas_akhir_pembayaran >= '$tgl'");
		//echo $this->db->last_query();
		// $this->template->load('nonakademik/dashboard','nonakademik/danamandiri', $data);
		$this->template->load('superadmin/dashboard','superadmin/pembimbing/nonakademik/danamandiri', $data);
	}

	function simpanpembayaran(){
		$this->load->model('nonakademik/Mod_danamandiri');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nominal' => $this->input->post('nominal'),
			'jenis_tagihan' => $this->input->post('jenis_tagihan'),
			'tgl_pembayaran' => $this->input->post('tgl_pembayaran'),
			'batas_akhir_pembayaran' => $this->input->post('batas_akhir_pembayaran')
			);
		$this->Mod_danamandiri->insert($data);
		redirect('superadmin/pembayaran');
	}

	function deletepembayaran($id){
		$this->load->model('nonakademik/Mod_danamandiri');
		$this->Mod_danamandiri->delete($id);
		$this->session->set_flashdata('pesan', "<script>alert('Data Berhasil Dihapus')</script>");
		redirect('superadmin/pembayaran');
	}

	//konseling
	function suratperingatan($id_keterlambatan){
		$this->load->model('nonakademik/mod_keterlambatan');
		$data["row_keterlambatan"] = $this->mod_keterlambatan->select($id_keterlambatan);
		$this->load->view('superadmin/konseling/nonakademik/printsp', $data);
	}

	function dataketerlambatan($id, $jumlah){
		$this->load->model('nonakademik/Mod_keterlambatan');
		$this->load->model('nonakademik/Mod_tahunajaran');
		$data['tahunajaran'] = $this->Mod_tahunajaran->get();
		//$id_tahun_ajaran = "";// klo tdk dipilih kosong 
		$data['tahunajaran'][0]->id_tahun_ajaran; //kalo dipilih kosong
		$id_tahun_ajaran = "";
		if ($id != "") { $id_tahun_ajaran = $id; }
		$data['id_tahun_ajaran'] = $id_tahun_ajaran;
		$data['jumlah'] = $jumlah;
		$data['tahunajaranpilih'] = $this->Mod_tahunajaran->get("id_tahun_ajaran = '$id_tahun_ajaran'");
 		$data['keterlambatan'] = $this->Mod_keterlambatan->getdatabyjumlah(@$data['tahunajaranpilih'][0]->tanggal_mulai, @$data['tahunajaranpilih'][0]->tanggal_selesai, $jumlah);
		$this->load->view('superadmin/konseling/nonakademik/dataketerlambatan', $data);
	}

	function keterlambatan($id = ""){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_keterlambatan');
		$this->load->model('nonakademik/Mod_tahunajaran');
		$data['tahunajaran'] = $this->Mod_tahunajaran->get();
		//$id_tahun_ajaran = "";// klo tdk dipilih kosong 
		//$data['tahunajaran'][0]->id_tahun_ajaran; //kalo dipilih kosong
		$id_tahun_ajaran = $data['tahunajaran'][0]->id_tahun_ajaran; //kalo dipilih kosong
		if ($id != "") { $id_tahun_ajaran = $id; }
		$data['id_tahun_ajaran'] = $id_tahun_ajaran;


		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');

		
		$data['kelas_reguler'] = $this->mod_kelas_reguler->get(array('id_tahun_ajaran'=>$this->setting->id_tahun_ajaran));

		//nadine coba
		//$data['kelas_reguler'] = $this->mod_kelas_reguler->get(array('id_tahun_ajaran'=>$id_tahun_ajaran));

		$data['tahunajaranpilih'] = $this->Mod_tahunajaran->get("id_tahun_ajaran = '$id_tahun_ajaran'");
 		$data['keterlambatan'] = $this->Mod_keterlambatan->getjumlah(@$data['tahunajaranpilih'][0]->tanggal_mulai, @$data['tahunajaranpilih'][0]->tanggal_selesai);
 		//echo $this->db->last_query();
		// $this->template->load('nonakademik/dashboard','nonakademik/keterlambatan', $data);
		$this->template->load('superadmin/dashboard','superadmin/konseling/nonakademik/keterlambatan', $data);
	}

	function simpanketerlambatan(){
		$this->load->model('nonakademik/Mod_keterlambatan');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'tgl_terlambat' => $this->input->post('tgl_terlambat'),
			'keterangan' => $this->input->post('keterangan')
			);
		$this->Mod_keterlambatan->insert($data);
		redirect('superadmin/keterlambatan');
	}

	function grafik($thn = ""){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_keterlambatan');
		@$data['keterlambatan']=$this->Mod_keterlambatan->getjumlah();
		$tahun = date('Y');
		//if ($this->input->post('tahun') != "") { $tahun = $this->input->post('tahun'); }
		if ($thn != "") { $tahun = $thn; }
		$data['tahun'] = $tahun;
		for ($i=1;$i<=12;$i++) {
			$data['keterlambatanbulan'][$i]=$this->Mod_keterlambatan->getjumlahbulan($i, $tahun);
		}
		$data['keterlambatantahun']=$this->Mod_keterlambatan->getjumlahtahun();
		$this->template->load('superadmin/dashboard','superadmin/konseling/nonakademik/grafik', $data);
	}

	function getsiswa($id_kelas_reguler=0) {

		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');
		$this->load->model('nonakademik/Mod_tahunajaran');
		$data['tahunajaran'] = $this->Mod_tahunajaran->get();
		
		$id_tahun_ajaran = $this->setting->id_tahun_ajaran; 
		$data['id_tahun_ajaran'] = $id_tahun_ajaran;
		

		$data['id_kelas_reguler'] = $id_kelas_reguler;

		$siswa_kelas_reguler_berjalan = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan3($id_kelas_reguler, $id_tahun_ajaran);
		
		echo '<option value="">Pilih Siswa</option>';
		foreach ($siswa_kelas_reguler_berjalan as $row) {
			echo '<option value="'.$row->nisn.'">'.$row->nisn.' '.$row->nama.'</option>';
		}
	}

	function perizinan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_absensi_harian');
		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');

		
		$data['kelas_reguler'] = $this->mod_kelas_reguler->get(array('id_tahun_ajaran'=>$this->setting->id_tahun_ajaran));
		$tgl = date('Y-m-d');
        if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		$data['absenharian']=$this->Mod_absensi_harian->get("tgl_mulai <= '$tgl' AND tgl_selesai >= '$tgl'");
		// $this->template->load('nonakademik/dashboard','nonakademik/absensi_harian', $data);
		$this->template->load('superadmin/dashboard','superadmin/konseling/nonakademik/absensi_harian', $data);
	}

	function simpanperizinan(){
		$this->load->model('nonakademik/Mod_absensi_harian');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
			'keterangan' => $this->input->post('keterangan')
			);
		$this->Mod_absensi_harian->insert($data);
		redirect('superadmin/perizinan');
	}

	function deleteperizinan($id){
		$this->load->model('nonakademik/Mod_absensi_harian');
		$this->Mod_absensi_harian->delete($id);
		$this->session->set_flashdata('pesan', "<script>alert('Data Berhasil Dihapus')</script>");
		redirect('superadmin/perizinan');
	}

	function pelanggaran(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');
		$this->load->model('nonakademik/Mod_pelanggaran');
		$data['pelanggaran']=$this->Mod_pelanggaran->get();
		$data['kelas_reguler']=$this->mod_kelas_reguler->getall();
		//print_r($data['pelanggaran']);
		// $this->template->load('nonakademik/dashboard','nonakademik/pelanggaran', $data);
		$this->template->load('superadmin/dashboard','superadmin/konseling/nonakademik/pelanggaran', $data);
	}

	function simpanpelanggaran(){
		$this->load->model('nonakademik/Mod_pelanggaran');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'tgl_kejadian' => $this->input->post('tgl_kejadian'),
			'poin' => $this->input->post('poin'),
			'kategori' => $this->input->post('kategori'),
			'no_pasal' => $this->input->post('no_pasal'),
			'sanksi' => $this->input->post('sanksi'),
			'bentuk_pelanggaran' => $this->input->post('bentuk_pelanggaran'),
			);
		$this->Mod_pelanggaran->insert($data);
		redirect('superadmin/pelanggaran');
	}

	function deletepelanggaran($id){
		$this->load->model('nonakademik/Mod_pelanggaran');
		$this->Mod_pelanggaran->delete($id);
		$this->session->set_flashdata('pesan', "<script>alert('Data Berhasil Dihapus')</script>");
		redirect('superadmin/pelanggaran');
		// $this->template->load('superadmin/dashboard','superadmin/konseling/nonakademik/pelanggaran', $data);
	}

	function prestasi()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');
		$this->load->model('nonakademik/Mod_prestasi');
		$data['kelas_reguler']=$this->mod_kelas_reguler->getall();
		$data['prestasi']=$this->Mod_prestasi->get();
		$this->template->load('superadmin/dashboard','superadmin/konseling/nonakademik/prestasi', $data);
	}

	function simpanprestasi()
	{

		$this->load->model('nonakademik/Mod_prestasi');

		$config['upload_path']          = './assets/nonakademik/image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
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

		$data = array(
			'nisn' => $this->input->post('nisn'),
			'jenis_prestasi' => $this->input->post('jenis_prestasi'),
			'tingkat_pend' => $this->input->post('tingkat_pend'),
			'tahun' => $this->input->post('tahun'),
			'peringkat' => $this->input->post('peringkat'),
			'foto' => $foto,
			);
		$this->Mod_prestasi->insert($data);
		redirect('superadmin/prestasi');
	}



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('setting_helper');
		$this->setting = get_setting();

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
	public function index()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;

		$this->load->model('ppdb/model_siswa');
		$row_siswa = $this->model_siswa->select($this->session->userdata('nisn'));
		$data['row_siswa'] = $row_siswa;

		$this->load->model('ppdb/model_siswa');
		$data['row_siswa_ortu'] = $this->model_siswa->getsiswaortu($row_siswa->id_orangtua);
		$this->template->load('siswa/dashboard','siswa/home', $data);
	}

	public function klinik_un_siswa(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;

		$this->template->load('siswa/dashboard','siswa/klinik_un_siswa', $data);
	}

	public function save_klinik_un_siswa(){
		$this->load->model('distribusi/mod_siswa');
		$this->load->model('distribusi/mod_tahunajaran');
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
		$this->load->model('distribusi/mod_klinik_un');
		$this->mod_klinik_un->insert($data);
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		// $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
  //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  //               <h4><i class="icon fa fa-warning"></i> Alert!</h4>
  //               Data berhasil disimpan.
  //             </div>');
		redirect('siswa/klinik_un_siswa');
	}

	public function siswa_mutasi(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('siswa/dashboard','siswa/siswa_mutasi', $data);
	}

	public function save_siswa_mutasi_1(){
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
		$this->load->model('distribusi/mod_siswa');
		$this->mod_siswa->insert($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                Data berhasil disimpan.
              </div>');
		redirect('siswa/siswa_mutasi');
	}

	function pendaftaran($action = null)
	{
		$this->load->model('nonakademik/Mod_ekskul','me');
		if ($action == null)
		{
			$data["data_ekskul"] = $this->me->data_ekskul();
			$data["jdwal_ekskul"] = $this->me->jdwal_ekskul("jadwal2");

			$data["statistik_ekskul"] = $this->me->statistik_ekskul("2016 - 2017", "Ganjil");
			$data['nama'] = $this->session->Nama;
			$data['foto'] = $this->session->foto; 
			$data['username'] = $this->session->username;
			$this->template->load('siswa/dashboard','siswa/pendaftaran', $data);
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
				redirect("siswa/pendaftaran");
			}
		}
	}

	function datapeserta($id_jenis_kls_tambahan){
		$this->load->model('nonakademik/mod_ekskul');
		$data["ekskul"] = $this->mod_ekskul->get_peserta2($id_jenis_kls_tambahan, $this->setting->id_tahun_ajaran);
		$this->load->view('siswa/datapeserta', $data);
	}

	function suratperingatan($id_keterlambatan){
		$this->load->model('nonakademik/mod_keterlambatan');
		$data["row_keterlambatan"] = $this->mod_keterlambatan->select($id_keterlambatan);
		$this->load->view('siswa/printsp', $data);
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
		$this->load->view('siswa/dataketerlambatan', $data);
	}

	function jadwal()
	{
		$this->load->model('nonakademik/Mod_ekskul','me');
		$data["jadwal_ekskul"] = $this->me->jdwal_ekskul();
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('siswa/dashboard','siswa/jadwal', $data);
	}

	function presensi($action = null)
	{
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
			$this->template->load('siswa/dashboard','siswa/presensi', $data);
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

	function nilai($id_kelas_reguler = "", $idthn = "")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		
		$this->load->model('nonakademik/mod_ekskul','me');
		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');
		$this->load->model('nonakademik/mod_jenis_kls_tambahan');
		$this->load->model('nonakademik/Mod_tahunajaran');
		$data['tahunajaran'] = $this->Mod_tahunajaran->get();
		//$id_tahun_ajaran = "";// klo tdk dipilih kosong 
		
		$id_tahun_ajaran = $data['tahunajaran'][0]->id_tahun_ajaran; //kalo dipilih kosong
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


		$this->template->load('siswa/dashboard','siswa/nilai', $data);
	}

	function pembayaran()
	{
		$this->load->model('nonakademik/Mod_ekskul','me');
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->template->load('siswa/dashboard','siswa/danamandiri', $data);
	}

	function keterlambatan($id = "")
	{
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
		$data['tahunajaranpilih'] = $this->Mod_tahunajaran->get("id_tahun_ajaran = '$id_tahun_ajaran'");
 		$data['keterlambatan'] = $this->Mod_keterlambatan->getjumlah(@$data['tahunajaranpilih'][0]->tanggal_mulai, @$data['tahunajaranpilih'][0]->tanggal_selesai);
		$this->template->load('siswa/dashboard','siswa/keterlambatan', $data);
	}

	function grafik()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_keterlambatan');
		@$data['keterlambatan']=$this->Mod_keterlambatan->getjumlah();
		$tahun = date('Y');
		if ($this->input->post('tahun') != "") { $tahun = $this->input->post('tahun'); }
		for ($i=1;$i<=12;$i++) {
			$data['keterlambatanbulan'][$i]=$this->Mod_keterlambatan->getjumlahbulan($i, $tahun);
		}
		$data['keterlambatantahun']=$this->Mod_keterlambatan->getjumlahtahun();
		$this->template->load('siswa/dashboard','siswa/grafik', $data);
	}

	function perizinan()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_absensi_harian');
		$tgl = date('Y-m-d');
        if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
		$data['absenharian']=$this->Mod_absensi_harian->get("tgl_mulai <= '$tgl' AND tgl_selesai >= '$tgl'");
		$this->template->load('siswa/dashboard','siswa/absensi_harian', $data);
	}

	function pelanggaran()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_pelanggaran');
		$data['pelanggaran']=$this->Mod_pelanggaran->get();
		//print_r($data['pelanggaran']);
		$this->template->load('siswa/dashboard','siswa/pelanggaran', $data);
	}

	function prestasi()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_prestasi');
		$data['prestasi']=$this->Mod_prestasi->get();
		$this->template->load('siswa/dashboard','siswa/prestasi', $data);
	}
	
}

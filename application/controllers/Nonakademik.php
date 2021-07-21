<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonakademik extends CI_Controller {

	var $setting = array();

	function __construct()
	{
		parent::__construct();
		$this->load->helper('setting_helper');
		$this->setting = get_setting();

		$this->load->model('pegawai_model');
		$this->load->model('presensi_pegawai_model');
		$this->load->model('penilaian/presensi_siswa_model');
		$this->load->model('tahunajaran_model');
		$this->load->model('tanggal_libur_model');
		$this->load->model('tanggal_libur_nasional_model');
		$this->load->model('jabatan_model');

		$this->load->model('pegawai_model');
		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
			redirect('login');
			exit;
		}
		if ($this->session->userdata('jabatan') != 'Pembimbing') {
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
		$this->template->load('pembimbing/dashboard','pembimbing/home', $data);
	}

	public function profile()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username; 
		$data['datpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
		$this->template->load('pembimbing/dashboard','pegawai/profile', $data);
	}

	public function editprofil(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;
		$data['rowpeg'] = $this->pegawai_model->rowPegawai($this->session->userdata('NIP'));
		$this->template->load('pembimbing/dashboard','pembimbing/editprofil', $data);
		if($this->input->post('submit')){
			$this->load->model('pegawai_model');
			$this->pegawai_model->updatedatpeg();	
			$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
			redirect('pembimbing/editprofil');
		} 
	}

	public function gantipassword(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username; 
		$this->template->load('pembimbing/dashboard','pembimbing/gantipassword', $data);
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
				redirect('pembimbing/gantipassword');
			}else{
				// $this->session->set_flashdata("warning","<b>Kombinasi Username dan Password Anda tidak ditemukan, Pastikan Anda memasukkan Username dan Password yang benar</b>");

				$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Password Lama Salah !" ,  "error" )</script>');



				redirect('pembimbing/gantipassword');
			}
		} else {
			$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "password Baru Harus Ganti !" ,  "error" )</script>');

			redirect('pembimbing/gantipassword');
		}	
	}

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
			
			$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/pendaftaran', $data);
			
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
				redirect("nonakademik/pendaftaran");
			}
		}
	}

	function datapeserta($id_jenis_kls_tambahan){
		$this->load->model('nonakademik/mod_ekskul');

		$data["ekskul"] = $this->mod_ekskul->get_peserta($id_jenis_kls_tambahan, $this->setting['id_tahun_ajaran']);
		//echo $this->db->last_query();
		$this->load->view('pembimbing/nonakademik/datapeserta', $data);
	}

	function suratperingatan($id_keterlambatan){
		$this->load->model('nonakademik/mod_keterlambatan');
		$data["row_keterlambatan"] = $this->mod_keterlambatan->select($id_keterlambatan);
		$this->load->view('nonakademik/printsp', $data);
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
		$this->load->view('nonakademik/dataketerlambatan', $data);
	}

	function jadwal()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$data['username'] = $this->session->username;
		$this->load->model('nonakademik/Mod_ekskul','me');
		$data["jadwal_ekskul"] = $this->me->jdwal_ekskul();
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/jadwal', $data);
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
			$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/presensi', $data);

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
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/nilai', $data);
	}

	function simpan_nilai($id_kelas_reguler = "")
	{
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

		redirect('nonakademik/nilai/'.$id_kelas_reguler);
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
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/danamandiri', $data);
	}

	function simpanpembayaran()
	{
		$this->load->model('nonakademik/Mod_danamandiri');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nominal' => $this->input->post('nominal'),
			'jenis_tagihan' => $this->input->post('jenis_tagihan'),
			'tgl_pembayaran' => $this->input->post('tgl_pembayaran'),
			'batas_akhir_pembayaran' => $this->input->post('batas_akhir_pembayaran')
			);
		$this->Mod_danamandiri->insert($data);
		redirect('nonakademik/pembayaran');
	}

	function deletepembayaran($id)
	{
		$this->load->model('nonakademik/Mod_danamandiri');
		$this->Mod_danamandiri->delete($id);
		$this->session->set_flashdata('pesan', "<script>alert('Data Berhasil Dihapus')</script>");
		redirect('nonakademik/pembayaran');
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


		$this->load->model('nonakademik/mod_kelas_reguler');
		$this->load->model('nonakademik/mod_siswa_kelas_reguler_berjalan');

		
		$data['kelas_reguler'] = $this->mod_kelas_reguler->get(array('id_tahun_ajaran'=>$this->setting->id_tahun_ajaran));

		$data['tahunajaranpilih'] = $this->Mod_tahunajaran->get("id_tahun_ajaran = '$id_tahun_ajaran'");
 		$data['keterlambatan'] = $this->Mod_keterlambatan->getjumlah(@$data['tahunajaranpilih'][0]->tanggal_mulai, @$data['tahunajaranpilih'][0]->tanggal_selesai);
 		//echo $this->db->last_query();
		// $this->template->load('nonakademik/dashboard','nonakademik/keterlambatan', $data);
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/keterlambatan', $data);
	}

	function simpanketerlambatan()
	{
		$this->load->model('nonakademik/Mod_keterlambatan');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'tgl_terlambat' => $this->input->post('tgl_terlambat'),
			'keterangan' => $this->input->post('keterangan')
			);
		$this->Mod_keterlambatan->insert($data);
		redirect('nonakademik/keterlambatan');
	}

	function grafik($thn = "")
	{
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
		// $this->template->load('nonakademik/dashboard','nonakademik/grafik', $data);
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/grafik', $data);
	}

	function perizinan()
	{
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
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/absensi_harian', $data);
	}

	function simpanperizinan()
	{
		$this->load->model('nonakademik/Mod_absensi_harian');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
			'keterangan' => $this->input->post('keterangan')
			);
		$this->Mod_absensi_harian->insert($data);
		redirect('nonakademik/perizinan');
	}

	function deleteperizinan($id)
	{
		$this->load->model('nonakademik/Mod_absensi_harian');
		$this->Mod_absensi_harian->delete($id);
		$this->session->set_flashdata('pesan', "<script>alert('Data Berhasil Dihapus')</script>");
		redirect('nonakademik/perizinan');
	}

	function pelanggaran()
	{
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
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/pelanggaran', $data);
	}

	function simpanpelanggaran()
	{
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
		redirect('nonakademik/pelanggaran');
	}

	function deletepelanggaran($id)
	{
		$this->load->model('nonakademik/Mod_pelanggaran');
		$this->Mod_pelanggaran->delete($id);
		$this->session->set_flashdata('pesan', "<script>alert('Data Berhasil Dihapus')</script>");
		redirect('nonakademik/pelanggaran');
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
		$this->template->load('pembimbing/dashboard','pembimbing/nonakademik/prestasi', $data);
	}

	function simpanprestasi()
	{

		$this->load->model('nonakademik/Mod_prestasi');

		$config['upload_path']          = './image/';
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
		redirect('nonakademik/prestasi');
	}

	function tmbh_pembimbing()
	{
		$this->load->model('nonakademik/Mod_mengelola','me');
		$this->load->myview('nonakademik/tmbh_pembimbing');
	}

	function simpan_tmbh_pembimbing()
	{
		$this->load->model('Mod_mengelola');
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama_pembimbing' => $this->input->post('nama_pembimbing'),
			'jabatan' => $this->input->post('jabatan')
			);
		$this->Mod_mengelola->simpan_pembimbing($data);
		redirect('nonakademik/tmbh_pembimbing');
	}

	function tmbh_ekskul()
	{
		$this->load->model('Mod_mengelola','me');
		$this->load->myview('nonakademik/tmbh_ekstrakurikuler');
	}

	function simpan_tmbh_ekskul()
	{
		$this->load->model('Mod_mengelola');
		$data = array(
			'jenis_kls_tambahan' => $this->input->post('jenis_kls_tambahan')
			);
		$this->Mod_mengelola->simpan_ekskul($data);
		redirect('nonakademik/tmbh_ekskul');
	}

	function tmbh_pelanggaran()
	{
		$this->load->model('Mod_mengelola','me');
		$this->load->myview('nonakademik/tmbh_pelanggaran');
	}

	function simpan_tmbh_pelanggaran()
	{
		$this->load->model('Mod_mengelola');
		$data = array(
			'kategori' => $this->input->post('kategori'),
			'no_pasal' => $this->input->post('no_pasal'),
			'poin' => $this->input->post('poin')
			);
		$this->Mod_mengelola->simpan_kpn_pelanggaran($data);
		redirect('nonakademik/tmbh_pelanggaran');
	}


	function getsiswa($id_kelas_reguler=0) {

		// echo '<option value="">Pilih Siswa</option>';
		// echo '<option value="23423">AAAAA</option>';
		// echo '<option value="23423223">BBBBB</option>';

		$this->load->model('mod_kelas_reguler');
		$this->load->model('mod_siswa_kelas_reguler_berjalan');
		$this->load->model('Mod_tahunajaran');
		$data['tahunajaran'] = $this->Mod_tahunajaran->get();
		//$id_tahun_ajaran = "";// klo tdk dipilih kosong 
		
		$id_tahun_ajaran = $this->setting->id_tahun_ajaran; //$data['tahunajaran'][0]->id_tahun_ajaran; //kalo dipilih kosong
		//if ($idthn != "") { $id_tahun_ajaran = $idthn; }
		$data['id_tahun_ajaran'] = $id_tahun_ajaran;
		

		$data['id_kelas_reguler'] = $id_kelas_reguler;
		//$data['kelas_reguler'] = $this->mod_kelas_reguler->get(array('id_tahun_ajaran'=>$this->setting->id_tahun_ajaran));
		//$data['jenis_kls_tambahan'] = $this->mod_jenis_kls_tambahan->get();
		//echo $this->db->last_query();

		$siswa_kelas_reguler_berjalan = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan3($id_kelas_reguler, $id_tahun_ajaran);
		//echo $this->db->last_query();
		// $data['siswa_ekskul'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_ekskul($id_kelas_reguler);
		// $data['record'] = $this->mod_siswa_kelas_reguler_berjalan->get_all_kelas();
		
		echo '<option value="">Pilih Siswa</option>';
		foreach ($siswa_kelas_reguler_berjalan as $row) {
			echo '<option value="'.$row->nisn.'">'.$row->nisn.' '.$row->nama.'</option>';
		}
		
	}
}

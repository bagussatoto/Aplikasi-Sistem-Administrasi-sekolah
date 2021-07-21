<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Superadmin extends CI_Controller {

	var $setting = array();

	function __construct(){
		parent::__construct();
		$this->load->model('pegawai_model');
		$this->load->model('presensi_pegawai_model');
		$this->load->model('tahunajaran_model');
		$this->load->model('tanggal_libur_model');
		$this->load->helper('url');
		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning","<b>Kombinasi Username dan Password Anda tidak ditemukan, Pastikan Anda memasukkan Username dan Password yang benar</b>");
			redirect('login');
			exit;
		}
		
		$this->load->helper('setting_helper');
		$this->setting = get_setting();
	}

	public function index()
	{
		$data['nama'] = $this->session->jabatan; 
		$data['datpeg'] = $this->pegawai_model->Getdatpeg();
		$this->template->load('superadmin/dashboard','superadmin/home', $data);
	}

// KEPEGAWAIAN RIDHO


	public function pegawaibaru()
	{
		$data['nama'] = $this->session->jabatan;
		$data['datpeg'] = $this->pegawai_model->Getdatpeg("Status = 'Karyawan' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$data['datguru'] = $this->pegawai_model->Getdatpeg("Status = 'Guru' AND (Status_pensiun = '' OR Status_pensiun IS NULL)");
		$data['datpensiun'] = $this->pegawai_model->Getdatpeg("Status_pensiun = 'Pensiun' OR Status_pensiun = 'Keluar' ");
		$this->template->load('superadmin/dashboard','superadmin/pegawaibaru', $data);
	}


	public function detailspegawai($id)
	{
		$data['nama'] = $this->session->jabatan; 
		$data['datpeg'] = $this->pegawai_model->rowPegawai($id);
		$this->template->load('superadmin/dashboard','superadmin/detailspegawai', $data);
	}

	public function tambahdatpeg(){
		if($this->input->post('submit')){
			$this->load->model('pegawai_model');
			$this->pegawai_model->tambahdatpeg();
			$this->session->set_flashdata("warning","<b>Data disimpanr</b>");		
			redirect("superadmin/pegawaibaru");
		}
	}

	public function updatedatpeg(){
		$data['nama'] = $this->session->jabatan; 
		$data['rowpeg'] = $this->pegawai_model->rowPegawai($this->uri->segment(3));
		$this->template->load('superadmin/dashboard','superadmin/updatedatpeg', $data);
		if($this->input->post('submit')){
			$this->load->model('pegawai_model');
			$this->pegawai_model->updatedatpeg();
			$this->session->set_flashdata("warning","<b>Data disimpan</b>");
		} 
	}

	public function jabatan()
	{
		$data['nama'] = $this->session->jabatan; 
		$data['datajabatan'] = $this->pegawai_model->Getjabatan();
		$data['datatanpajabatan'] = $this->pegawai_model->GetTanpaJabatan();
		$this->template->load('superadmin/dashboard','superadmin/jabatan', $data);
	}

	public function editjabatan()
	{
		$data['nama'] = $this->session->jabatan; 
		$data['datjab'] = $this->pegawai_model->getjab();
		$data['rowpeg'] = $this->pegawai_model->rowPegawaiJabatan($this->uri->segment(3));
		$this->template->load('superadmin/dashboard','superadmin/editjabatan', $data);
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

	public function presensipegawai()
	{
		$day_libur = 0;
		if ($this->setting->hari_libur == "Senin") {
			$day_libur = 1;
		}
		else if ($this->setting->hari_libur == "Selasa") {
			$day_libur = 2;
		}
		else if ($this->setting->hari_libur == "Rabu") {
			$day_libur = 3;
		}
		else if ($this->setting->hari_libur == "Kamis") {
			$day_libur = 4;
		}
		else if ($this->setting->hari_libur == "Jumat") {
			$day_libur = 5;
		}
		else if ($this->setting->hari_libur == "Sabtu") {
			$day_libur = 6;
		}
		else { // ($this->setting->hari_libur == "Minggu") {
			$day_libur = 0;
		}
		$data['day_libur'] = $day_libur;
		$data['hari_libur'] = $this->setting->hari_libur;

		//echo date('w');

		$data['nama'] = $this->session->jabatan; 
		$datpeg = $this->pegawai_model->Getdatpeg("Status_pensiun = '' OR Status_pensiun IS NULL");
		$data['datpeg'] = $datpeg;
		//$thn = date('Y');
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }

		$datsemester = $this->tahunajaran_model->Getsemester();
		//print_r($datsemester);
		//print_r($datpeg->result());

		$tablepeg = $datpeg->result();
		foreach ($tablepeg as $rowpeg) {

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
			//echo $data['datlibur'][$i]."<br/>";
			//echo $this->db->last_query()."<br/>";
		}

		$data['grafikpresensipegawai'] = TRUE;
		
		$this->template->load('superadmin/dashboard','superadmin/presensipegawai', $data);
	}

	public function submitpresensipegawai(){
		$bln = date('m');
		$thn = date('Y');
		if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
		if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }

		$datpeg = $this->pegawai_model->Getdatpeg();
		foreach ($datpeg->result() as $rowpeg) {
			//for($i=1;$i<=date('t');$i++) {
			for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
				if($this->input->post("presensi_".$rowpeg->NIP."_".$i) != "") {
					
					//$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
					$datpresensi = $this->presensi_pegawai_model->getpresensi($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
					if ($datpresensi) {
						$arrdata = array(
							'Waktu_presensi'=>$this->input->post("waktu_".$rowpeg->NIP."_".$i),
							'Rangkuman_presensi'=>$this->input->post("presensi_".$rowpeg->NIP."_".$i)
						);
						//$this->presensi_pegawai_model->updatepresensi($arrdata, date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
						$this->presensi_pegawai_model->updatepresensi($arrdata, $thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowpeg->NIP);
					} else {
						$arrdata = array(
						//'Tanggal_presensi'=>date('Y-m-').substr($i+100, 1, 2),
							'Tanggal_presensi'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
							'Waktu_presensi'=>$this->input->post("waktu_".$rowpeg->NIP."_".$i),
							'Rangkuman_presensi'=>$this->input->post("presensi_".$rowpeg->NIP."_".$i),
							'NIP'=>$rowpeg->NIP,
						);
						$this->presensi_pegawai_model->insertpresensi($arrdata);
					}
				}
			}
		}
		redirect('superadmin/presensipegawai');

	}

	public function jadwalmengajar()
	{
		$data['nama'] = 'Kepala Sekolah';
		$this->template->load('superadmin/dashboard','superadmin/jadwalmengajar', $data);
	}

	public function gantipassword()
	{
		$data['nama'] = $this->session->jabatan; 
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

				// redirect($result->url.'/');
				redirect('superadmin/gantipassword');
			}else{
				// $this->session->set_flashdata("warning","<b>Kombinasi Username dan Password Anda tidak ditemukan, Pastikan Anda memasukkan Username dan Password yang benar</b>");

				

				 $this->session->set_flashdata("warning","<b>Password salah</b>");



				redirect('superadmin/gantipassword');
			}
		} else {
			 $this->session->set_flashdata("warning","<b>password ganti</b>");

			redirect('superadmin/gantipassword');
		}
		
	}

	public function tahunajaran()
	{
		$data['nama'] = 'Super Admin';
		$data['dat'] = $this->tahunajaran_model->Gettahunajaran();
		$this->template->load('superadmin/dashboard','superadmin/tahunajaran', $data);
	}

	public function tambahtahunajaran(){
			//if($this->input->post('submit')){
		$this->load->model('tahunajaran_model');
		$this->tahunajaran_model->tambahtahunajaran();
		 $this->session->set_flashdata("warning","<b>data harus disimpan</b>");	
		redirect("superadmin/tahunajaran");
			//}
	}

	public function aktifkantahunajaran() {
		$this->load->model('setting_model');
		$this->setting_model->aktifkantahunajaran($this->uri->segment(3));

		redirect('superadmin/tahunajaran');
	}

	public function deletedatpeg($id) {
		$this->load->model('pegawai_model');
		$this->pegawai_model->deletedatpeg($id);
		 $this->session->set_flashdata("warning","<b>data dihapus</b>");
		redirect('superadmin/pegawaibaru');
	}

	public function harilibur()
	{
		$data['nama'] = 'Super Admin';
		$data['datlibur'] = $this->tanggal_libur_model->getalllibur();
		$this->template->load('superadmin/dashboard','superadmin/harilibur', $data);
	}

	public function simpanharilibur(){
			//if($this->input->post('submit')){
		$this->load->model('tanggal_libur_model');
		$data = array(
				"tanggal_libur" => $this->input->post('tanggal_libur'),
				"nama_libur" => $this->input->post('nama_libur')
			);
		$this->tanggal_libur_model->insertlibur($data);
		 $this->session->set_flashdata("warning","<b>data disimpan</b>");		
		redirect("superadmin/harilibur");
			//}
	}

	public function deleteharilibur(){
			//if($this->input->post('submit')){
		$this->load->model('tanggal_libur_model');
		$this->tanggal_libur_model->deletelibur($this->uri->segment(3));
		 $this->session->set_flashdata("warning","<b>data dihapus</b>");		
		redirect("superadmin/harilibur");
			//}
	}


// tutup Kepegawaian



	// Kurikulum MIA


	public function mapel($id_mapel = "")
	{
		$data['nama'] = $this->session->jabatan; 
		if ($id_mapel == "" ) {
			$this->load->model('penjadwalan/mod_mapel');
			$data['tabel_mapel'] = $this->mod_mapel->get();
			$data['edit_mapel'] = null;
			$this->template->load('superadmin/dashboard','superadmin/kurikulum/mapel', $data);	
		} else {
			$this->load->model('penjadwalan/mod_mapel');
			$data['tabel_mapel'] = $this->mod_mapel->get();
			$data['edit_mapel'] = $this->mod_mapel->select($id_mapel);
			$this->template->load('superadmin/dashboard','superadmin/kurikulum/mapel', $data);
		}

	}



	public function simpanmapel() {
		$this->load->model('penjadwalan/mod_mapel');
		$data = array(
			'nama_mapel' => $this->input->post('nama_mapel'),
			'kkm' => $this->input->post('kkm'),
			'jam_belajar' => $this->input->post('jam_belajar'),
			'grade' => $this->input->post('grade')
		);
		if ($this->input->post('id_mapel') == "") {
			$this->mod_mapel->insert($data);
		} else {
			$this->mod_mapel->update($data, $this->input->post('id_mapel'));
		}

		redirect('superadmin/mapel');
	}

	public function hapusmapel() {
		$this->load->model('penjadwalan/mod_mapel');
		$this->mod_mapel->delete($this->uri->segment(3));
		redirect('superadmin/mapel');
	}

	// public function simpanekskul() {
	// 	$this->load->model('mod_mapel');
	// 	$data = array(
	// 			'hari' => $this->input->post('hari'),
	// 			'jumlah_peserta' => $this->input->post('jumlah_peserta'),
	// 			'tempat' => $this->input->post('tempat'),
	// 			'waktu' => $this->input->post('waktu'),
	// 			'keterangan' => $this->input->post('keterangan')
	// 		);
	// 	$this->mod_mapel->insert($data);
	// 	redirect('kurikulum/mapel');
	// }

	public function harirentang()
	{
		$this->load->model('penjadwalan/mod_harirentang');
		$data['tabel_hari_rentang'] = $this->mod_harirentang->get();

		$result = $this->mod_harirentang->get(array("hari"=>"Senin"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['senin'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Selasa"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['selasa'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Rabu"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['rabu'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Kamis"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['kamis'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Jumat"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['jumat'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Sabtu"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['sabtu'][$i] = $result[$i-1]; }
		}

		$result = $this->mod_harirentang->get(array("hari"=>"Minggu"));
		for ($i=1; $i<=8; $i++) {
			if (@$result[$i-1]) { $hari_rentang['minggu'][$i] = $result[$i-1]; }
		}



		$data['hari_rentang'] = @$hari_rentang;
		$data['nama'] = $this->session->jabatan; 

		$this->template->load('superadmin/dashboard','superadmin/kurikulum/harirentang', $data);
	}

	public function simpanharirentang() {
		$this->load->model('penjadwalan/mod_harirentang');

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_senin_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_senin_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_senin_'.$i),
				'hari' => 'senin'
			);
			if ($this->input->post('jam_ke_senin_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Senin", "jam_ke"=>$this->input->post('jam_ke_senin_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_selasa_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_selasa_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_selasa_'.$i),
				'hari' => 'selasa'
			);
			if ($this->input->post('jam_ke_selasa_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Selasa", "jam_ke"=>$this->input->post('jam_ke_selasa_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_rabu_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_rabu_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_rabu_'.$i),
				'hari' => 'rabu'
			);
			if ($this->input->post('jam_ke_rabu_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Rabu", "jam_ke"=>$this->input->post('jam_ke_rabu_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_kamis_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_kamis_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_kamis_'.$i),
				'hari' => 'kamis'
			);
			if ($this->input->post('jam_ke_kamis_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Kamis", "jam_ke"=>$this->input->post('jam_ke_kamis_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_jumat_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_jumat_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_jumat_'.$i),
				'hari' => 'jumat'
			);
			if ($this->input->post('jam_ke_jumat_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Jumat", "jam_ke"=>$this->input->post('jam_ke_jumat_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_sabtu_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_sabtu_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_sabtu_'.$i),
				'hari' => 'sabtu'
			);
			if ($this->input->post('jam_ke_sabtu_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Sabtu", "jam_ke"=>$this->input->post('jam_ke_sabtu_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}

		for ($i=1; $i<=8; $i++) {
			$data = array(
				'jam_ke' => $this->input->post('jam_ke_minggu_'.$i),
				'jam_mulai' => $this->input->post('jam_mulai_minggu_'.$i),
				'jam_selesai' => $this->input->post('jam_selesai_minggu_'.$i),
				'hari' => 'minggu'
			);
			if ($this->input->post('jam_ke_minggu_'.$i) != "") {
				$tabel_hari_rentang = $this->mod_harirentang->get(array("hari"=>"Minggu", "jam_ke"=>$this->input->post('jam_ke_minggu_'.$i)));
				//print_r($tabel_hari_rentang);
				if ($tabel_hari_rentang) {
					$this->mod_harirentang->update($data, $tabel_hari_rentang[0]->id_rentang_jam);
				} else {
					$this->mod_harirentang->insert($data);
				}
			}
		}


		redirect('superadmin/kurikulum/harirentang');
	}

	public function jadwalmapel()
	{
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kurikulum/jadwalmapel' ,$data);
	}

	public function jadwalpiketguru()
	{
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kurikulum/jadwalpiketguru' ,$data);
	}

	public function jadwaltambahan()
	{
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kurikulum/jadwaltambahan' ,$data);
	}
	// tutup kurikulum



	//kesiswaan NADYA 


	public function distribusi_reg(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi_reg' ,$data);
	}

	public function distribusi_tam(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/distribusi_tam' ,$data);
	}

	public function klinik_un(){
		$data['nama'] = $this->session->jabatan; 
		$this->load->model('distribusi/mod_klinik_un');
		$data['klinik_un'] = $this->mod_klinik_un->get();
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/klinik_un', $data);
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


		$this->load->model('distribusi/mod_klinik_un');

		$this->mod_klinik_un->insert($data);
		$this->session->set_flashdata("warning","<b>Data disimpanr</b>");
		redirect('superadmin/kesiswaan/klinik_un');

	}

	public function simpan_respon(){
		$key = $this->uri->segment(3);
		$data['respon'] = $this->input->post('respon');
		$data['status_req'] = 'Sudah Direspon';

		$this->load->model('distribusi/mod_klinik_un');

		$this->mod_klinik_un->update($data, $key);
		$this->session->set_flashdata("warning","<b>Data disimpan</b>");
		redirect('superadmin/kesiswaan/klinik_un');		
	}


	public function pembagian_agama(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/pembagian_agama' ,$data);
	}

	public function mutasi_masuk(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/mutasi_masuk' ,$data);
	}

	public function mutasi_keluar(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/mutasi_keluar', $data);
	}

	// tutup kesiswaan NADYA

	// KEESISWAAN ANGGREK

	public function ppdbujian(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/ppdbujian', $data);
	}

	public function ppdbneg(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/ppdbneg', $data);
	}

	public function daftarulang(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/daftarulang', $data);
	}

	public function daftarkenaikan(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/daftarkenaikan', $data);
	}

	public function bukuinduk(){
		$data['nama'] = $this->session->jabatan; 
		$this->template->load('superadmin/dashboard','superadmin/kesiswaan/bukuinduk', $data);
	}




	 // TUTP KESISWAAN ANGGREK

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
			redirect('/');
			exit;
		}
		if (($this->session->userdata('jabatan') != 'Kurikulum')) {
			$this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
			//$this->load->view('login');
			redirect('/');
			exit;
	}

	public function index()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/home',$data);
	}

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
			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/mapel', $data);	
		} else {
			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();
			$this->load->model('penjadwalan/mod_mapel');
			$data['tabel_mapel'] = $this->mod_mapel->getgroupbyjenjang2();
			$this->load->model('penjadwalan/mod_kelasreguler');
			$data['tabel_kelasreguler'] = $this->mod_kelasreguler->getgroupby();
			
			//$data['edit_mapel'] = $this->mod_mapel->selectbynamajenjang(str_replace("_", " ", $nama_mapel), $jenjang);
			$data['edit_mapel'] = $this->mod_mapel->selectbyidnamajenjang(str_replace("_", " ", $id_namamapel), $jenjang);


			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/mapel', $data);
		}
		
	}


	public function simpanmapel() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_mapel');
		$this->load->model('penjadwalan/mod_kelasreguler');

		$tabel_kelasreguler = $this->mod_kelasreguler->getbyjenjang($this->input->post('grade'));

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
		redirect('penjadwalan/kurikulum/mapel');
	}

	public function hapusmapel() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_mapel');
		$this->mod_mapel->delete($this->uri->segment(4));
		redirect('penjadwalan/kurikulum/mapel');
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
		redirect('penjadwalan/kurikulum/mapel');
	}


	public function harirentang()
	{
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

		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/harirentang', $data);
	}

	public function simpanharirentang() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_harirentang');

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;

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


		redirect('penjadwalan/kurikulum/harirentang');
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
		 // (untuk jaga2 misalkan tabel kosong)
		$total_durasi = array();

		foreach ($tabel_jammengajar as $row_jammengajar) {
			$total_durasi[$row_jammengajar->id_jam_mgjr] = $this->mod_jadwalmapel->getjadwalmapel(array("jadwal_mapel.NIP"=>$row_jammengajar->NIP, "jadwal_mapel.id_namamapel"=>$row_jammengajar->id_namamapel, "jadwal_mapel.id_tahun_ajaran"=>$row_jammengajar->id_tahun_ajaran))[0]->total_durasi;
			//echo $this->db->last_query();
		}
		$data['total_durasi'] = $total_durasi;

		$this->load->model('penjadwalan/mod_namamapel');
		$data['tabel_namamapel'] = $this->mod_namamapel->get();
		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/jammengajar', $data);
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
		redirect('penjadwalan/kurikulum/jammengajar');
	}

	public function hapusjammengajar() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jammengajar');
		$this->mod_jammengajar->delete($this->uri->segment(4));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('penjadwalan/kurikulum/jammengajar');
	}

	public function jadwalmapel(){
		
		//if (@$this->uri->segment(4) == '') { $jenjang = 7; } else { $jenjang = @$this->uri->segment(4); }
		$jenjang = @$this->uri->segment(4);
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

		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/jadwalmapel', $data);
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

		$this->load->view('penjadwalan/kurikulum/exportjadwalmapel', $data);
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

				// $tabel_prioritaskhusus = $this->mod_prioritaskhusus->get($data);
				// 	if ($tabel_prioritaskhusus) {
				// 		$this->mod_prioritaskhusus->update($data, $tabel_prioritaskhusus[0]->id_prkh);
						
				// 		$row_harirentang = $this->mod_harirentang->selectdata('Senin', "$i");
				// 		$this->mod_prioritaskhusus->update(array("id_rentang_jam"=>@$row_harirentang->id_rentang_jam), $tabel_prioritaskhusus[0]->id_prkh);
						
				// 	} else {
				// 		$this->mod_prioritaskhusus->insert($data);	
				// 		$id_prkh = $this->db->insert_id();
						
				// 		$row_harirentang = $this->mod_harirentang->selectdata('Senin', "$i");
				// 		$this->mod_prioritaskhusus->update(array("id_rentang_jam"=>@$row_harirentang->id_rentang_jam), $id_prkh);
				// 	}
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
		redirect('penjadwalan/kurikulum/jadwalmapel');
	}

	public function hapusprioritas() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_prioritaskhusus');
		$this->mod_prioritaskhusus->delete($this->uri->segment(4));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('penjadwalan/kurikulum/jadwalmapel');
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

		redirect('penjadwalan/kurikulum/jadwalmapel');

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

		redirect('penjadwalan/kurikulum/jadwalmapel');

	}
	
	public function jadwalpiketguru()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;
		
		if (@$this->uri->segment(4) != "") { $id_tahun_ajaran = @$this->uri->segment(4); }

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

		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/jadwalpiketguru', $data);
	}

	public function printjadwalpiketguru() //$id_tahun_ajaran="")
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 

		$this->load->model('penjadwalan/setting_model');
		$id_tahun_ajaran = $this->setting_model->getsetting()->id_tahun_ajaran;
		
		if (@$this->uri->segment(4) != "") { $id_tahun_ajaran = @$this->uri->segment(4); }

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
		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/printjadwalpiketguru', $data);
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
				
		redirect('penjadwalan/kurikulum/jadwalpiketguru');
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
			
			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/jadwaltambahan', $data);
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

			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/jadwaltambahan', $data);
		}

		
	}

	public function hapusjadwaltambahan() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwaltambahan');
		$this->mod_jadwaltambahan->delete($this->uri->segment(4));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('penjadwalan/kurikulum/jadwaltambahan');
	}

	public function getmapelkelastambahan()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$id = $this->input->post('id');
		$this->load->model('penjadwalan/mod_mapel');
		$data['tabel_pegawai'] = $this->mod_mapel->get();
		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/jadwaltambahan', $data);
	}

	public function simpanjadwaltambahan()
	{
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
		redirect('penjadwalan/kurikulum/jadwaltambahan');
	}

	public function delharirentang() 
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$id = $this->uri->segment(4);
		$this->load->model('penjadwalan/mod_harirentang');
		$this->mod_harirentang->delete($id);
		redirect('penjadwalan/kurikulum/harirentang');
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
			
			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/ekstrakurikuler', $data);
		} else {
			$this->load->model('penjadwalan/mod_jadwalekskul');
			$data['tabel_jadwalekskul'] = $this->mod_jadwalekskul->get();

			$this->load->model('penjadwalan/mod_jenisklstambahan');
			$data['tabel_jenisklstambahan'] = $this->mod_jenisklstambahan->get();

			$this->load->model('penjadwalan/mod_pembimbing');
			$data['tabel_pembimbing'] = $this->mod_pembimbing->get();
			$data['tabel_jadwalekskul'] = $this->mod_jadwalekskul->get();
			$data['edit_jadwalekskul'] = $this->mod_jadwalekskul->select($id_jadwal_ekskul);

			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/ekstrakurikuler', $data);
		}
		

		// redirect('penjadwalan/kurikulum/ekstrakurikuler');
	}

	public function hapusjadwalekskul() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_jadwalekskul');
		$this->mod_jadwalekskul->delete($this->uri->segment(4));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');
		redirect('penjadwalan/kurikulum/ekstrakurikuler');
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
				'id_tahun_ajaran' => $id_tahun_ajaran, //$this->input->post('id_tahun_ajaran'),
				
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
		redirect('penjadwalan/kurikulum/ekstrakurikuler');
	}

	public function namamapel($id_namamapel = ""){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		if ($id_namamapel == "" ) {
			$data['edit_mapel'] = null;

			$this->load->model('penjadwalan/mod_namamapel');
			$data['tabel_namamapel'] = $this->mod_namamapel->get();

			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/namamapel', $data);
		} else {
			$this->load->model('penjadwalan/mod_namamapel');
			$data['edit_mapel'] = $this->mod_namamapel->select($id_namamapel);
			$data['tabel_namamapel'] = $this->mod_namamapel->get();

			$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/namamapel', $data);
		}	
	}

	public function simpannamamapel(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_namamapel');
		
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'warna' => $this->input->post('warna')
		);

			//print_r($data);
			//echo "1";

		if ($this->input->post('id_namamapel') == "") {
				//echo "2";
				//if ($this->mod_mapel->cekdatamapel($this->input->post('nama_mapel'), $row_kelasreguler->id_kelas_reguler) == 0) {
					//echo "3";
			$this->mod_namamapel->insert($data);	
				//} 

		} else {
				//echo "4";
			$this->mod_namamapel->update($data, $this->input->post('id_namamapel'));
		}	

		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
		redirect('penjadwalan/kurikulum/namamapel');
	}

	public function hapusnamamapel() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto; 
		$this->load->model('penjadwalan/mod_namamapel');
		$this->mod_namamapel->delete($this->uri->segment(4));
		$this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data terhapus !" ,  "success" )</script>');

		redirect('penjadwalan/kurikulum/namamapel');
	}

	public function printjadwalmapeldiv(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$this->template->load('penjadwalan/kurikulum/dashboard_kurikulum','penjadwalan/kurikulum/printjadwalmapeldiv',$data);
	}

	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('mod_pegawai');
		if ($this->session->userdata('isLogin') != TRUE) {
			$this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
			redirect('login');
			exit;
		}
		if ($this->session->userdata('jabatan') != 'Guru') {
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
		$this->template->load('guru/dashboard','guru/home', $data);
	}

	public function jadwalmapel_guru()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$this->load->model('penjadwalan/mod_jadwalmapel');
		$data['tabel_jadwalmapel'] = $this->mod_jadwalmapel->getjadwal(array('jadwal_mapel.NIP' => $this->session->NIP));
		
		$this->template->load('guru/dashboard','guru/jadwalmapel_guru' ,$data);
	}

	public function jadwalpiketguru_guru()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

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

		

		$this->template->load('guru/dashboard','guru/jadwalpiketguru_guru' ,$data);
	}

	public function jadwaltambahan_guru()
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['username'] = $this->session->username;

		$this->load->model('penjadwalan/mod_jadwaltambahan');
		$data['tabel_jadwaltambahan'] = $this->mod_jadwaltambahan->get(array('jadwal_tambahan.NIP' => $this->session->NIP));
		
		//if (@$this->uri->segment(4) == '') { $jenjang = 7; } else { $jenjang = @$this->uri->segment(4); }
		// $jenjang = $row_pegawai->jenjang;
		// $data['jenjang'] = $jenjang;

		$this->load->model('penjadwalan/mod_kelastambahan');
		$data['tabel_kelastambahan'] = $this->mod_kelastambahan->get();
		$this->load->model('penjadwalan/mod_namamapel');
		$data['tabel_namamapel'] = $this->mod_namamapel->get();
		$this->load->model('penjadwalan/mod_pegawai');
		$data['tabel_pegawai'] = $this->mod_pegawai->get();
		$this->load->model('penjadwalan/mod_jadwaltambahan');
		// $data['tabel_jadwaltambahan'] = $this->mod_jadwaltambahan->get(array('kelas_tambahan.jenjang' => $jenjang));
		
		$this->template->load('guru/dashboard','guru/jadwaltambahan_guru' ,$data);
	}
	
	
}

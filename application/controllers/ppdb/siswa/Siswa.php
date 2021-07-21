<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->model('kesiswaan/model_siswa');
		$row_siswa = $this->model_siswa->select($this->session->userdata('nisn'));
		$data['row_siswa'] = $row_siswa;

		$this->load->model('kesiswaan/model_siswa');
		$data['row_siswa_ortu'] = $this->model_siswa->getsiswaortu($row_siswa->id_orangtua);

		$this->template->load('kesiswaan/siswa/view_template_siswa', 'kesiswaan/siswa/view_profil_siswa', $data);
	}
}

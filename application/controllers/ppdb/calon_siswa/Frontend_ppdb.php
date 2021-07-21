<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_ppdb extends CI_Controller {


	public function index()
	{
		$this->load->model('ppdb/model_pendaftar_ppdb');
		//$data['tabel_pendaftar_jalur_un'] = $this->model_pendaftar_jalur_un->get();
		//$this->load->view('kesiswaan/admin/view_pendaftar_jalur_un', $data);
		
		$this->template->load('kesiswaan/ppdb/calon_siswa/view_template_calon_siswa', 'kesiswaan/ppdb/calon_siswa/view_frontend_ppdb');
	}

}

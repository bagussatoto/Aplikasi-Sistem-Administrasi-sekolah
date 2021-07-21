<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_ppdb extends CI_Controller {

	public function index()
	{
		$this->load->model('ppdb/model_pengumuman_ppdb');
		$data['tabel_pengumuman_ppdb'] = $this->model_pengumuman_ppdb->get();
		$this->template->load('kesiswaan/ppdb/calon_siswa/view_template_calon_siswa', 'kesiswaan/ppdb/calon_siswa/view_pengumuman_ppdb', $data);
	}


}

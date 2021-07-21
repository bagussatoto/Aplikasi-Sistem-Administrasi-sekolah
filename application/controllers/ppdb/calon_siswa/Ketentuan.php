<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketentuan extends CI_Controller {

	public function index()
	{
		$this->load->model('ppdb/model_ketentuan_ppdb');
		$data['tabel_ketentuan_ppdb'] = $this->model_ketentuan_ppdb->get();


		$this->load->model('ppdb/model_passing_grade');
		$data['tabel_passing_grade'] = $this->model_passing_grade->get();

		$this->template->load('kesiswaan/ppdb/calon_siswa/view_template_calon_siswa', 'kesiswaan/ppdb/calon_siswa/view_ketentuan', $data);
	}


}

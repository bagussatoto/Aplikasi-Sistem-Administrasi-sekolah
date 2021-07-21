<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

	public function index()
	{
		$this->load->model('ppdb/model_pendaftar_ppdb');
		$data['tabel_pendaftar_ppdb'] = $this->model_pendaftar_ppdb->get();

		foreach ($this->db->get('form_ujian')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         }
         $data['settingform'] = $settingform;

		$this->template->load('kesiswaan/ppdb/calon_siswa/view_template_calon_siswa', 'kesiswaan/ppdb/calon_siswa/view_pendaftar', $data);
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {


	public function index()
	{
		$this->load->model('ppdb/model_pendaftar_ppdb');
		//$data['tabel_pendaftar_jalur_un'] = $this->model_pendaftar_jalur_un->get();
		//$this->load->view('kesiswaan/admin/view_pendaftar_jalur_un', $data);
		
		$this->template->load('kesiswaan/admin/view_template_admin', 'kesiswaan/admin/view_dashboard_admin');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Siswa extends CI_Controller {


	public function index()
	{	
		$this->load->model('kesiswaan/model_siswa');
		$row_siswa = $this->model_siswa->select($this->session->userdata('nisn'));
		$data['row_siswa'] = $row_siswa;
		
		$this->template->load('kesiswaan/siswa/view_template_siswa', 'kesiswaan/siswa/view_dashboard_siswa', $data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensipegawai extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/dashboard','admin/presensipegawai');
	}
}

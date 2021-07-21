<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapegawai extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/dashboard','admin/datapegawai');
	}
}

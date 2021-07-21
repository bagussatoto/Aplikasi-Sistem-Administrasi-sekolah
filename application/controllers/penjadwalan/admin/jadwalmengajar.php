<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalmengajar extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/dashboard','admin/jadwalmengajar');
	}
}

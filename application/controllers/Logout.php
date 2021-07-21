<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


public function __construct(){
	parent::__construct();

}
	public function index()
	{
			
		$this->session->sess_destroy();
		$this->session->set_flashdata('warning','<script>swal("Berhasil!", "Data Berhasil Disimpan", "success")</script>');			
		redirect('login','refresh');

	}

	
}

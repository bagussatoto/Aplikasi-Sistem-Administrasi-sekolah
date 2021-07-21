<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('mymenu');
	}

	public function index()
	{
		$this->load->myview('test');
	}
}

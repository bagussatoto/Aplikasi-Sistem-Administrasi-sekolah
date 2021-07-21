<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_setting extends CI_Model {

	public function get($where = array()){
		$this->db->where($where);
		return $this->db->get('setting')->result();
	}

}
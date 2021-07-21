<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function ceklogin()
	{
		$this->load->model('login_model');
		if (isset($_POST['login'])){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$cek =$this->login_model->proseslogin($username,$password);
			$hasil = count($cek); 
			if ($hasil > 0){
				if($cek->id_jabatan == 2){
					$result = $this->login_model->getJabatanSiswa($cek);	
				}
				else{
					$result = $this->login_model->getJabatanById($cek);
				}
				// $this->login_model->cekPegawai($cek);
				//$result = $this->login_model->getJabatanById($cek);
				$this->session->set_userdata(array(
					'isLogin' => TRUE,
					'jabatan' => $result->nama_jabatan, 
					'username' => $username, 
					'Nama' => $result->Nama,
					'NIP' => $cek->NIP, 
					'nisn' => $cek->nisn,
					'foto' => $result->foto,					 
				));
				
				redirect($result->url.'/');
			}else{
				// $this->session->set_flashdata("warning","<b>Kombinasi Username dan Password Anda tidak ditemukan, Pastikan Anda memasukkan Username dan Password yang benar</b>");

				$this->session->set_flashdata("warning",'<script> swal( "Oops" ,  "Kombinasi Username dan Password Salah !" ,  "warning" )</script>');

				// $this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
				// redirect(base_url('login'));



				$this->load->view('login');
			}
			
		}
	}

	
}

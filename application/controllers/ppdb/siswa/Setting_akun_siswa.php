<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_akun_siswa extends CI_Controller {


	public function index()
	{	
		$this->load->model('kesiswaan/model_siswa');
		$row_siswa = $this->model_siswa->select($this->session->userdata('nisn'));
		$data['row_siswa'] = $row_siswa;

		$this->load->model('kesiswaan/model_akun');
    	$data['tabel_akun'] = $this->model_akun->get();
		
		$this->template->load('kesiswaan/siswa/view_template_siswa', 'kesiswaan/siswa/view_setting_akun_siswa', $data);
	}

	public function editakun() 
	{
		if ($this->input->post('password_baru')==$this->input->post('password_lagi')){
			$username = $this->session->userdata('nisn');
			$password = $this->input->post('password_lama');
			$this->load->model('login_model');
			$cek =$this->login_model->proseslogin($username,$password);
			$hasil = count($cek); 
			if ($hasil > 0){
				// $this->login_model->cekPegawai($cek);
				$arrdata = array(
					'password' => $this->input->post('password_baru')
				);

				$this->load->model('kesiswaan/model_akun');
				$this->model_akun->update($arrdata, $cek->id_akun);

				$this->session->set_flashdata("berhasil","<script>alert('Password berhasil diubah!');</script>");
				//$this->load->view('index.php/kesiswaan/login');
				redirect('kesiswaan/siswa/setting_akun_siswa');
				
			}else{
				$this->session->set_flashdata("beda","<script>alert('Kombinasi Username dan Password Anda tidak ditemukan. Pastikan Anda memasukkan password yang benar!');</script>");
				//$this->load->view('index.php/kesiswaan/login');
				redirect('kesiswaan/siswa/setting_akun_siswa');
			}
		} else {
			$this->session->set_flashdata("verifikasi","<script>alert('Kombinasi password baru yang dimasukkan tidak sama. Pastikan Anda memasukkan kombinasi password dengan benar');</script>");
			//$this->load->view('index.php/kesiswaan/login');
			redirect('kesiswaan/siswa/setting_akun_siswa');
		}
	}

}

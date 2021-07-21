<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function ceklogin()
	{
		if (isset($_POST['login'])){
			$NIP = $this->input->post('NIP',true);
			$password = $this->input->post('password',true);
			$cek =$this->login_model->proseslogin($NIP,$password);
			$hasil = count($cek); 
			if ($hasil > 0){
				$daftarlogin = $this->db->get_where('akun',array('NIP' => $NIP, 'password' => $password))->row();
				if ($daftarlogin -> id_jabatan == '1'){
					redirect('index.php/admin/dashboard');
				}elseif ($daftarlogin -> id_jabatan == '2') {
					redirect('index.php/superadmin/dashboard');
					# code...
				}

				

				// redirect('index.php/admin/dashboard');

			}else{
				redirect ('index.php/admin/login');	
			}
			
		}
	}

	
}

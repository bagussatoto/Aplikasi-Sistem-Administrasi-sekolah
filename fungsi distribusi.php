public function distribusi_reg(){

		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		// $data['username'] = $this->session->username;

		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_pegawai');
		
		$data['tabel_pegawai'] = $this->mod_pegawai->get();

		$data_kelas_reguler = $this->mod_kelas_reguler->getjoin();
		// Mengambil data siswa sesuai kelasnya
		foreach ($data_kelas_reguler as $kelas) {
			$kelas->siswa = $this->mod_kelas_reguler_berjalan->get_siswa($kelas->id_kelas_reguler);
		}
		$data['kelas_reguler'] = $data_kelas_reguler;
		$data['kelas_reguler_master'] = $this->mod_kelas_reguler->get();
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/distribusi_reg', $data);
	}

	public function isi_siswa_kelas(){
		

		$this->load->model('distribusi/mod_siswa_kelas');
		$copied = $this->mod_siswa_kelas->insert_from_siswa();
		$update = $this->mod_siswa_kelas->update_siswa_kelas_nilai();
		

		if ($copied && $update) {
			$this->session->set_flashdata('success', 'Insert Siswa Kelas Berhasil !');
		} else {
			$this->session->set_flashdata('errors', 'Data Gagal Disimpan !');
		}
		redirect('kesiswaan/distribusi_reg');
	}

	
	public function pilih_pembagian() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$tipe = $this->input->post('btntipe');
		if ($tipe == "Berdasarkan Agama dan Jenis Kelamin") {
			
			$jenjang = $this->input->post('jenjang');
			
			$this->load->model('distribusi/mod_kelas_reguler');
			$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));
			$data['kelas_reguler'] = $kelas_reguler;

			//$data['jumlah_kelas'] = $jumlah_kelas;			
			$data['jenjang'] = $jenjang;			
			//$data['nama_kelas'] = $nama_kelas;			
			$this->template->load('kesiswaan/admin/view_template_admin','distribusi/kesiswaan/pilih_pembagian_agama', $data);
		} else if ($tipe == "Berdasarkan Prestasi") {
			$jenjang = $this->input->post('jenjang');
			
			$this->load->model('distribusi/mod_kelas_reguler');
			$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));
			$data['kelas_reguler'] = $kelas_reguler;
			
			$data['jenjang'] = $jenjang;			
			$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/pilih_pembagian_prestasi', $data);
		} else {
			$jenjang = $this->input->post('jenjang');
			
			redirect('kesiswaan/proses_pembagian_kuartil/'.$jenjang);
		}
	}

	public function hapus_kelas_reguler($id){
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->mod_kelas_reguler->delete($id);
		// $this->session->set_flashdata('warning','<script>swal("Berhasil", "Data Berhasil Dihapus", "success")</script>');
		$this->session->set_flashdata('success', 'Kelas Berhasil Dihapus!');
		redirect('kesiswaan/distribusi_reg');
	}

	public function tambahkelas() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
			$this->form_validation->set_rules('jumlah_kelas', 'Jumlah Kelas', 'required');
			$this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
			$this->form_validation->set_rules('penamaan', 'Penamaan Kelas', 'required');

			if ($this->form_validation->run() === FALSE) {
			$errors = array_values($this->form_validation->error_array());
			$this->session->set_flashdata('error', $errors);
			} else {
			$this->load->model('distribusi/mod_kelas_reguler');

			if ($this->input->post('penamaan') == "angka") {
				$urutan = array('-1','-2','-3','-4','-5','-6','-7','-8','-9','-10','-11','-12','-13','-14','-15','-16','-17','-18','-19','-20');
			} else if ($this->input->post('penamaan') == "huruf") {
				$urutan = array('-A','-B','-C','-D','-E','-F','-G','-H','-I','-J','-K','-L','-M','-N','-O','-P','-Q','-R','-S','-T');
			} else if ($this->input->post('penamaan') == "romawi") {
				$urutan = array('-I','-II','-III','-IV','-V','-VI','-VII','-VIII','-IX','-X','-XI','-XII','-XII','-XIV','-XV','-XVI','-XVII','-XVIII','-XIV','-XX');
			}
			$jumlah_kelas = $this->input->post('jumlah_kelas');
			$jenjang = $this->input->post('jenjang');
			$nama_kelas = array();
			for ($i=0;$i<$jumlah_kelas;$i++) {
				$nama_kelas[$i] = $jenjang.$urutan[$i];
				
				$arrdata = array(
					"nama_kelas"=>$nama_kelas[$i],
					"jenjang"=>$this->input->post('jenjang'),
					"kuota_kelas_reguler"=>0,
					"jumlah_kelas_reguler"=>$jumlah_kelas,
					);
				
				$this->mod_kelas_reguler->insert($arrdata);
				
			}

			$data['jumlah_kelas'] = $jumlah_kelas;			
			$data['jenjang'] = $jenjang;			
			$data['nama_kelas'] = $nama_kelas;			
			
			$this->session->set_flashdata('success', 'Kelas Berhasil Dibuat!');
			}
			redirect('kesiswaan/distribusi_reg');		
	}

	public function update_kelas_reg(){
		$this->load->model('distribusi/mod_kelas_reguler');
		$jenjang = $this->input->post('jenjang');
		$jumlah = $this->input->post('jumlah_kelas'); //ambil nama jumlah_kelas dari form

		

		$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));
		$jumlah_kelas = $kelas_reguler[0]->jumlah_kelas_reguler; 

		$nama_kelas = $kelas_reguler[0]->nama_kelas;
		$jenis 		= explode("-", $nama_kelas)[1];

		if ($jenis == "1") {
				$urutan = array('-1','-2','-3','-4','-5','-6','-7','-8','-9','-10','-11','-12','-13','-14','-15','-16','-17','-18','-19','-20');
			} else if ($jenis == "A") {
				$urutan = array('-A','-B','-C','-D','-E','-F','-G','-H','-I','-J','-K','-L','-M','-N','-O','-P','-Q','-R','-S','-T');
			} else {
				$urutan = array('-I','-II','-III','-IV','-V','-VI','-VII','-VIII','-IX','-X','-XI','-XII','-XII','-XIV','-XV','-XVI','-XVII','-XVIII','-XIV','-XX');
			}

		for ($i=$jumlah_kelas;$i<$jumlah_kelas+$jumlah;$i++) {
				$nama_kelas = $jenjang.$urutan[$i];
				
				$arrdata = array(
					"nama_kelas"=>$nama_kelas,
					"jenjang"=>$jenjang,
					"kuota_kelas_reguler"=>0,
					"jumlah_kelas_reguler"=>$jumlah_kelas+$jumlah,
					// "id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
					);
				$this->mod_kelas_reguler->insert($arrdata);
				//$arridkelasreguler[$i] = $this->db->insert_id();
			}

			//update jumlah kelas berdasar jenjang
			$update = [
				'jumlah_kelas_reguler' => $jumlah_kelas + $jumlah
			];
			$kelas_reguler = $this->mod_kelas_reguler->updatebyjenjang($update, $jenjang);

			$this->session->set_flashdata('success', 'Kelas Berhasil Ditambahkan!');
			redirect('kesiswaan/distribusi_reg');
	}

	public function pembagian_agama2(){
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/pembagian_agama');
	}

	public function hsl_pembagian_agama(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$jenjang = $this->input->post('jenjang'); //3;

		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');

		$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));

		$jml_kelas = count($kelas_reguler); // $this->input->post('jumlah_kelas'); //3;
		//$jml_sisa = $jml_siswa % $jml_kelas;
		$jml_perkelas = array(); 
		$total_siswa = 0;
		for ($i=0;$i<$jml_kelas;$i++){
			$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$total_siswa = $total_siswa + $jml_perkelas[$i];

		}


		$arridkelasreguler = array();
		$arridkelasregulerberjalan = array();

		$arrpersenlaki2 = array();
		$arrpersenperempuan = array();
		
		$arrpersenislam =    array();
		$arrpersenkristen =  array();
		$arrpersenkatholik = array();
		$arrpersenhindu =    array();
		$arrpersenbudha =    array();
		$arrpersenlainnya =  array();

		for ($i=0;$i<$jml_kelas;$i++){
			//$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$arrdata = array(
				//"nama_kelas"=>$this->input->post('nama_kelas'.$i),
				//"jenjang"=>$this->input->post('jenjang'),
				"kuota_kelas_reguler"=>$jml_perkelas[$i],
				"jumlah_kelas_reguler"=>$jml_kelas
				//"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);
			//INSERT INTO `kelas_reguler`(`id_kelas_reguler`, `nama_kelas`, `jenjang`, `kuota_kelas_reguler`, `jumlah_kelas_reguler`, `id_tahun_ajaran`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
			$this->mod_kelas_reguler->update($arrdata, $this->input->post('id_kelas_reguler'.$i)); //insert($arrdata);
			$arridkelasreguler[$i] = $this->input->post('id_kelas_reguler'.$i); //$this->db->insert_id();

			$arrdata = array(
				"wali_kelas"=>"",
				"id_kelas_reguler"=>$arridkelasreguler[$i],
				"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);
			//INSERT INTO `kelas_reguler_berjalan`(`id_kelas_reguler_berjalan`, `wali_kelas`, `id_kelas_reguler`, `id_tahun_ajaran`) VALUES ([value-1],[value-2],[value-3],[value-4])
			$this->mod_kelas_reguler_berjalan->insert($arrdata);
			$arridkelasregulerberjalan[$i] = $this->db->insert_id();

		//	$jml_perkelas[$i] = ($jml_siswa - $jml_sisa) / $jml_kelas;
		//	if ($i < $jml_sisa) { $jml_perkelas[$i]++; }

			$arrpersenlaki2[$i] = $this->input->post('persentaselakilaki'.$i);
			$arrpersenperempuan[$i] = $this->input->post('persentaseperempuan'.$i);
			
			$arrpersenislam[$i] =    $this->input->post('persentaseislam'.$i);
			$arrpersenkristen[$i] =  $this->input->post('persentasekristen'.$i);
			$arrpersenkatholik[$i] = $this->input->post('persentasekatholik'.$i);
			$arrpersenhindu[$i] =    $this->input->post('persentasehindu'.$i);
			$arrpersenbudha[$i] =    $this->input->post('persentasebudha'.$i);
			$arrpersenlainnya[$i] =  $this->input->post('persentaselainnya'.$i);

		}

		unset($arralokasi);
		for ($i=0;$i<$jml_kelas;$i++) {
			
		 	$progress = 0;
		 	$progressjklainnya = 0;
		 	$progressjkbudha = 0;
		 	$progressjkhindu = 0;
		 	$progressjkkatholik = 0;
		 	$progressjkkristen = 0;
		 	$progressjkislam = 0;
			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				$progress = $progress + (100 / $jml_perkelas[$i]);
		 		
		 		if ($progress <= ($arrpersenlainnya[$i])) {
		 			$arralokasi[$i][$j][0] = 'Lainnya'; 
		 			
		 			$progressjklainnya = $progressjklainnya + (100 / ($jml_perkelas[$i] * ($arrpersenlainnya[$i] / 100)));	
		 			if ($progressjklainnya <= ($arrpersenlaki2[$i])) {
			 			$arralokasi[$i][$j][1] = 'Laki-Laki'; 
			 		} else {
			 			$arralokasi[$i][$j][1] = 'Perempuan';
			 		}
		 		} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i])) {
		 			$progressjkbudha = $progressjkbudha + (100 / ($jml_perkelas[$i] * ($arrpersenbudha[$i] / 100)));	
		 			if ($progressjkbudha <= ($arrpersenlaki2[$i])) {
			 			$arralokasi[$i][$j][1] = 'Laki-Laki'; 
			 		} else {
			 			$arralokasi[$i][$j][1] = 'Perempuan';
			 		}

		 			$arralokasi[$i][$j][0] = 'Budha';
		 		} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i])) {
		 			$progressjkhindu = $progressjkhindu + (100 / ($jml_perkelas[$i] * ($arrpersenhindu[$i] / 100)));	
		 			if ($progressjkhindu <= ($arrpersenlaki2[$i])) {
			 			$arralokasi[$i][$j][1] = 'Laki-Laki'; 
			 		} else {
			 			$arralokasi[$i][$j][1] = 'Perempuan';
			 		}

		 			$arralokasi[$i][$j][0] = 'Hindu';
		 		} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i] + $arrpersenkatholik[$i])) {
		 			$progressjkkatholik = $progressjkkatholik + (100 / ($jml_perkelas[$i] * ($arrpersenkatholik[$i] / 100)));	
		 			if ($progressjkkatholik <= ($arrpersenlaki2[$i])) {
			 			$arralokasi[$i][$j][1] = 'Laki-Laki'; 
			 		} else {
			 			$arralokasi[$i][$j][1] = 'Perempuan';
			 		}

		 			$arralokasi[$i][$j][0] = 'Katholik';
		 		} else if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i] + $arrpersenkatholik[$i] + $arrpersenkristen[$i])) {
		 			$progressjkkristen = $progressjkkristen + (100 / ($jml_perkelas[$i] * ($arrpersenkristen[$i] / 100)));	
		 			if ($progressjkkristen <= ($arrpersenlaki2[$i])) {
			 			$arralokasi[$i][$j][1] = 'Laki-Laki'; 
			 		} else {
			 			$arralokasi[$i][$j][1] = 'Perempuan';
			 		}

		 			$arralokasi[$i][$j][0] = 'Kristen';
		 		} else { //if ($progress <= ($arrpersenlainnya[$i] + $arrpersenbudha[$i] + $arrpersenhindu[$i] + $arrpersenkatholik[$i]) + $arrpersenkristen[$i] + $arrpersenislam[$i])) {
		 			$progressjkislam = $progressjkislam + (100 / ($jml_perkelas[$i] * ($arrpersenislam[$i] / 100)));	
		 			if ($progressjkislam <= ($arrpersenlaki2[$i])) {
			 			$arralokasi[$i][$j][1] = 'Laki-Laki'; 
			 		} else {
			 			$arralokasi[$i][$j][1] = 'Perempuan';
			 		}

		 			$arralokasi[$i][$j][0] = 'Islam';
		 		}
		 	}
		}
		 
		//echo "Alokasi : <br/>";
		for ($i=0;$i<$jml_kelas;$i++) {
			//echo "Kelas : ".$i."<br/>";
		 	for ($j=0;$j<$jml_perkelas[$i];$j++) {
		 		 //echo "Alokasi : ".@$arralokasi[$i][$j][0]." ".@$arralokasi[$i][$j][1]."<br/>";
		 	}
		}

		$arrdatasiswa = array(array());
		unset($arrdatasiswa);
		$this->load->model('distribusi/mod_siswa_kelas');
		$tabelsiswakelas = $this->mod_siswa_kelas->get($jenjang);
		foreach ($tabelsiswakelas as $rowsiswa) {
			$arrdatasiswa[] = array($rowsiswa->nisn, $rowsiswa->nama, $rowsiswa->agama, $rowsiswa->jenis_kelamin, '');
		}

		for ($i=0;$i<count($arrdatasiswa);$i++) {
			//echo @$arrdatasiswa[$i][0]." ".@$arrdatasiswa[$i][1]." ".@$arrdatasiswa[$i][2]." ".@$arrdatasiswa[$i][3]." ".@$arrdatasiswa[$i][4]."<br/>";
		}		



		for ($i=0;$i<$jml_kelas;$i++) {	
			//echo "Kelas $i =======<br/>";
			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				//echo "Murid No $j =======<br/>";
				if (@$arralokasi[$i][$j][2] == '') {
					$ketemu = false;
					for ($k=0;$k<count($arrdatasiswa);$k++) {
						if (@$arrdatasiswa[$k][4] == '') {
							if ((@$arrdatasiswa[$k][2] == $arralokasi[$i][$j][0]) && (@$arrdatasiswa[$k][3] == $arralokasi[$i][$j][1])) {
								$arrdatasiswa[$k][4] = $i+1; //kelas harus mulai dari 1 karena kalau mulai 0 dianggap kosong ''
								$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
								$ketemu = true;
								//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]." dua2nya<br/>";
								break;
							}
						}
					}	
					if ($ketemu == false) {
						for ($k=0;$k<count($arrdatasiswa);$k++) {
							if (@$arrdatasiswa[$k][4] == '') {
								if ((@$arrdatasiswa[$k][2] == $arralokasi[$i][$j][0])) {
									$arrdatasiswa[$k][4] = $i+1;
									$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
									$ketemu = true;
									//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]."  agama sj<br/>";
									break;
								}
							}
						}	
					}	 		
					if ($ketemu == false) {
						for ($k=0;$k<count($arrdatasiswa);$k++) {
							if (@$arrdatasiswa[$k][4] == '') {
								if ((@$arrdatasiswa[$k][3] == $arralokasi[$i][$j][1])) {
									$arrdatasiswa[$k][4] = $i+1;
									$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
									$ketemu = true;
									//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]."  jk sj<br/>";
									break;
								}
							}
						}	
					}
					if ($ketemu == false) {
						for ($k=0;$k<count($arrdatasiswa);$k++) {
							if (@$arrdatasiswa[$k][4] == '') {
								if ((@$arrdatasiswa[$k][2] == "Islam")) {
									$arrdatasiswa[$k][4] = $i+1;
									$arralokasi[$i][$j][2] = $arrdatasiswa[$k][0];
									$ketemu = true;
									//echo $arrdatasiswa[$k][0]." ".$arrdatasiswa[$k][4]."  asal<br/>";
									break;
								}
							}
						}	
					}
				}
		 	}
		}

		for ($i=0;$i<count($arrdatasiswa);$i++) {
			//echo @$arrdatasiswa[$i][0]." ".@$arrdatasiswa[$i][1]." ".@$arrdatasiswa[$i][2]." ".@$arrdatasiswa[$i][3]." ".@$arrdatasiswa[$i][4]."<br/>";
		}		


		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
		//echo "Alokasizz : <br/>";
		for ($i=0;$i<$jml_kelas;$i++) {
			//echo "Kelas : ".$i."<br/>";
		 	for ($j=0;$j<$jml_perkelas[$i];$j++) {

		 		if (@$arralokasi[$i][$j][2] != "") {
		 		 	$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$arridkelasregulerberjalan[$i], 'nisn' => @$arralokasi[$i][$j][2]));
		 		}
		 	}
		}

		$data['siswa'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan();

		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_agama', $data);	
	}

	public function hsl_pembagian_prestasi(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$jenjang = $this->input->post('jenjang'); //3;

		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');

		$kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(array('jenjang'=>$jenjang));

		$jml_kelas = count($kelas_reguler); // $this->input->post('jumlah_kelas'); //3;
		//$jml_sisa = $jml_siswa % $jml_kelas;
		$jml_perkelas = array(); 
		$jk_perkelas = array(); 
		$total_siswa = 0;
		for ($i=0;$i<$jml_kelas;$i++){
			$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$jk_perkelas[$i] = $this->input->post('jenis_kelamin'.$i); 
			$total_siswa = $total_siswa + $jml_perkelas[$i];

		}

		$arridkelasreguler = array();
		$arridkelasregulerberjalan = array();

		
		for ($i=0;$i<$jml_kelas;$i++){
			//$jml_perkelas[$i] = $this->input->post('jumlah_siswa'.$i); 
			$arrdata = array(
				//"nama_kelas"=>$this->input->post('nama_kelas'.$i),
				//"jenjang"=>$this->input->post('jenjang'),
				"kuota_kelas_reguler"=>$jml_perkelas[$i],
				"jumlah_kelas_reguler"=>$jml_kelas
				//"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);
			
			$this->mod_kelas_reguler->update($arrdata, $this->input->post('id_kelas_reguler'.$i)); //insert($arrdata);
			$arridkelasreguler[$i] = $this->input->post('id_kelas_reguler'.$i); //$this->db->insert_id();

			$arrdata = array(
				"wali_kelas"=>"",
				"id_kelas_reguler"=>$arridkelasreguler[$i],
				"id_tahun_ajaran" => $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran
				);

			$this->mod_kelas_reguler_berjalan->insert($arrdata);
			$arridkelasregulerberjalan[$i] = $this->db->insert_id();

		}

		unset($arralokasi);// = array(array());

		for ($i=0;$i<$jml_kelas;$i++) {
			
		  	$progress = 0;

			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				$progress = $progress + (100 / $jml_perkelas[$i]);
		 		$arralokasi[$i][$j][0] = ''; 
		 		$arralokasi[$i][$j][1] = '';
		 		$arralokasi[$i][$j][2] = '';  
		
		 	}
		}
		 
		unset($arrdatasiswa);// = array(array()); tidak bisa karena akan menimbulkan array pertama kosong
		$this->load->model('distribusi/mod_siswa_kelas');
		$tabelsiswa = $this->mod_siswa_kelas->getprestasi($jenjang);
		foreach ($tabelsiswa as $rowsiswa) {
			$arrdatasiswa[] = array($rowsiswa->nisn, $rowsiswa->nama, $rowsiswa->agama, $rowsiswa->jenis_kelamin, '');
		}

		for ($i=0;$i<$jml_kelas;$i++) {	
			//echo "Kelas $i ====$jk_perkelas[$i]===<br/>";
			for ($j=0;$j<$jml_perkelas[$i];$j++) {
				//echo "Murid No $j =======<br/>";
				if (@$arralokasi[$i][$j][2] == '') {
					//echo "Ok 1<br/>";
					$ketemu = false;
					for ($k=0;$k<count($arrdatasiswa);$k++) {
						//echo "Ok 2 $k<br/>";
						if (@$arrdatasiswa[$k][4] == '') {
							//echo $jk_perkelas[$i]." == ".@$arrdatasiswa[$k][3]." ZZZZZZZZZZZ<br/>";
							if ($jk_perkelas[$i] == @$arrdatasiswa[$k][3]) {
								$arrdatasiswa[$k][4] = $i+1; //kelas harus mulai dari 1 karena kalau mulai 0 dianggap kosong ''
								$arralokasi[$i][$j][2] = @$arrdatasiswa[$k][0];
								$ketemu = true;
								// echo @$arrdatasiswa[$k][0]." ".@$arrdatasiswa[$k][4]." ".$jk_perkelas[$i]." == ".@$arrdatasiswa[$k][3]."<br/>";
								break;
							} else if ($jk_perkelas[$i] == "") {
								$arrdatasiswa[$k][4] = $i+1; //kelas harus mulai dari 1 karena kalau mulai 0 dianggap kosong ''
								$arralokasi[$i][$j][2] = @$arrdatasiswa[$k][0];
								$ketemu = true;
								// echo @$arrdatasiswa[$k][0]." ".@$arrdatasiswa[$k][4]." ".$jk_perkelas[$i]." == ".@$arrdatasiswa[$k][3]."<br/>";
								break;
							}
						}
					}	
					
				}
		 	}
		}


		$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
		//echo "Alokasizz : <br/>";
		for ($i=0;$i<$jml_kelas;$i++) {
			//echo "Kelas : ".$i."<br/>";
		 	for ($j=0;$j<$jml_perkelas[$i];$j++) {
		 		 //echo "Alokasi : ".@$arralokasi[$i][$j][0]." ".@$arralokasi[$i][$j][1]." ".@$arralokasi[$i][$j][2]."<br/>";
		 		 //karena index array dari nol, sedangkan kelas dari 1.
		 		 //$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$arridkelasreguler[$i], 'nisn' => @$arralokasi[$i][$j][2]));
		 		if (@$arralokasi[$i][$j][2] != "") {
		 		 	$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$arridkelasregulerberjalan[$i], 'nisn' => @$arralokasi[$i][$j][2]));
		 		}
		 	}
		}

		$data['siswa'] = $this->mod_siswa_kelas_reguler_berjalan->get_siswa_kelas_reguler_berjalan();

		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_agama', $data);	
	}

	public function hsl_pembagian_kuartil($value=''){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$jenjang = $this->input->post('jenjang');

		$this->form_validation->set_rules('id_kelas_reguler_berjalan', 'Kelas', 'required');
		$this->form_validation->set_rules('pilih[]', 'Siswa', 'required');

		if ($this->form_validation->run() === FALSE) {
			$errors = array_values($this->form_validation->error_array());
			$this->session->set_flashdata('error', $errors);
		} else {
			$id_kelas_reguler_berjalan = $this->input->post('id_kelas_reguler_berjalan'); //3;

			$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
			
			foreach ($_POST['pilih'] as $nisn) {
			 	$this->mod_siswa_kelas_reguler_berjalan->insert(array('id_kelas_reguler_berjalan'=>$id_kelas_reguler_berjalan, 'nisn' => @$nisn));
			}
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		}

		redirect('kesiswaan/proses_pembagian_kuartil/'.$jenjang);
	}

	public function buat_kelas_reguler_berjalan(){
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/Mod_tahunajaran');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');

		$data_kelas_reguler = $this->mod_kelas_reguler->get();
		$tahun_ajaran       = $this->Mod_tahunajaran->getaktif()->id_tahun_ajaran;

		
		foreach ($data_kelas_reguler as $kelas) {
			$datanya = [
				'id_kelas_reguler' => $kelas->id_kelas_reguler,
				'id_tahun_ajaran'  => $tahun_ajaran
 			];
 			$this->mod_kelas_reguler_berjalan->insert($datanya);
		}
		$this->session->set_flashdata('success', 'Kelas Berhasil Diaktifkan!');

		// Kembali ke mana?
		redirect('kesiswaan/distribusi_reg');
	}

	public function proses_pembagian_kuartil($jenjang)
	{
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		$data['jenjang'] = $jenjang;
		
		$this->load->model('distribusi/mod_siswa_kelas');
		$data['siswaL'] = $this->mod_siswa_kelas->getkuartil($jenjang, 'Laki-Laki');
		$data['siswaP'] = $this->mod_siswa_kelas->getkuartil($jenjang, 'Perempuan');

		$this->load->model('distribusi/mod_kelas_reguler_berjalan');

		$data['kelas_reguler_berjalan'] = $this->mod_kelas_reguler_berjalan->getjenjang($jenjang);
		//echo $this->db->last_query();

		$this->template->load('kesiswaan/dashboard','Kesiswaan/distribusi/kesiswaan/proses_pembagian_kuartil', $data);	
	}

	public function pembagian_prestasi(){
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/pembagian_prestasi',$data);
	}

	public function hasil_pembagian_prestasi(){
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_prestasi',$data);	
	}

	public function simpan_walikelas(){
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');

		$id_kelas_reguler_berjalan = $this->input->post('id_kelas_reguler_berjalan');
		$wali_kelas = $this->input->post('wali_kelas');

		if (!empty($wali_kelas)) {
			// Update datanya 
			$data['wali_kelas'] = $wali_kelas;
			$this->mod_kelas_reguler_berjalan->update($data, $id_kelas_reguler_berjalan);
		}

		$this->session->set_flashdata('success', 'Data Wali Kelas Berhasil Disimpan!');
		redirect('kesiswaan/distribusi_reg');		
	}

	public function eksportdatakelas($id_kelas_reguler)
	{
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		// $this->load->model('distribusi/mod_kelas_reguler');
		
		$data['tabel_siswa'] = $this->mod_kelas_reguler_berjalan->get_siswa($id_kelas_reguler);
		// $data['tabel_kelas_reguler'] = $this->mod_kelas_reguler;
		// $data['tabel_siswa_kelas_reguler_berjalan'] = $this->mod_siswa_kelas_reguler_berjalan;
		
		$this->load->view('kesiswaan/distribusi/kesiswaan/view_excel_data_kelas', $data);
	}

	public function print_bukti_mutasi_diterima($nisn = "")
	{
		$this->load->model('distribusi/mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/mod_setting');
		
		$data['rowsiswa'] = $this->mod_siswa_mutasi_masuk->selectsiswa($nisn);
		$data['rowsetting'] = $this->mod_setting->get()[0];
		$data['nomor'] = "";
		if (date('m') == '01') {
			$bln = "Januari";
		} else if (date('m') == '02') {
			$bln = "Februari";
		} else if (date('m') == '03') {
			$bln = "Maret";
		} else if (date('m') == '04') {
			$bln = "April";
		} else if (date('m') == '04') {
			$bln = "Mei";
		} else if (date('m') == '06') {
			$bln = "Juni";
		} else if (date('m') == '07') {
			$bln = "Juli";
		} else if (date('m') == '08') {
			$bln = "Agustus";
		} else if (date('m') == '09') {
			$bln = "September";
		} else if (date('m') == '10') {
			$bln = "Oktober";
		} else if (date('m') == '11') {
			$bln = "November";
		} else if (date('m') == '12') {
			$bln = "Desember";
		} 
		$data['tanggal'] = date('d').'-'.$bln.'-'.date('Y');
		$data['nama_kepsek'] = "Kepala Sekolah";
		// $data['tabel_siswa'] = $this->mod_kelas_reguler_berjalan->get_siswa($id_kelas_reguler);
		// // $data['tabel_kelas_reguler'] = $this->mod_kelas_reguler;
		// // $data['tabel_siswa_kelas_reguler_berjalan'] = $this->mod_siswa_kelas_reguler_berjalan;
		
		$this->load->view('kesiswaan/distribusi/kesiswaan/print_bukti_mutasi_diterima', $data);
	}

	public function distribusi_tam(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('distribusi/mod_kelas_tambahan');

		$data_kelas_tambahan = $this->mod_kelas_tambahan->get();

		

		foreach ($data_kelas_tambahan as $kelas) {
			$kelas->siswa = $this->mod_kelas_tambahan->get_siswa($kelas->id_kelas_tambahan);
		}

		// echo "<pre>";
		// var_dump($data_kelas_tambahan); exit;

		$data['nama_kelas_tambahan'] = $data_kelas_tambahan;


		// $data['jenis_kls_tambahan'] = $this->db->get('jenis_kls_tambahan')->result(); // Dummy
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/distribusi_tam', $data);
	}

	public function tambahkelas_tambahan() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

			$this->form_validation->set_rules('jenjang', 'Pilih Jenjang', 'required');
			// $this->form_validation->set_rules('jenis', 'Jenis Kelas Tambahan', 'required');

			if ($this->form_validation->run() === FALSE) {
			$errors = array_values($this->form_validation->error_array());
			$this->session->set_flashdata('error', $errors);
			} else{

		$this->load->model('distribusi/mod_kelas_tambahan');
		$this->load->model('distribusi/mod_kelas_reguler');
		$this->load->model('distribusi/Mod_tahunajaran');
		// $this->load->model('distribusi/mod_jenis_kls_tambahan');
		
		$jenjang = $this->input->post('jenjang');
		// $jenis   = $this->input->post('jenis');

		// Mengambil data kelas regular berdasarkan jenjang
		$data_kelas_reguler = $this->mod_kelas_reguler->getkelasreguler(['jenjang' => $jenjang]);

		$data_tambahan = array();
		foreach ($data_kelas_reguler as $reguler) {
			$data_tambahan[] = array(
				'nama_kelas_tambahan' 	 => $reguler->nama_kelas,
				'jenjang_kls_tambahan'   => $reguler->jenjang,
				'kuota_kelas'			 => $reguler->kuota_kelas_reguler,
				// 'id_jenis_kls_tambahan'	 => $jenis,
			);
		}

		$insert = $this->mod_kelas_tambahan->insert($data_tambahan);

		if ($insert) {
			$this->session->set_flashdata('success', 'Kelas Berhasil Dibuat!');

		} else {
			$this->session->set_flashdata('errors', 'Kelas Gagal Dibuat!');

		}
		}

		redirect('kesiswaan/distribusi_tam');
	}

	public function pengacakan_tambahan(){
		

		$this->load->model('distribusi/mod_kelas_tambahan');			

			$jenjang = $this->input->post('jenjang');
		
		
			// Pengacakan khusus untuk kelas 9
			$config['upload_path']   = './assets/distribusi/uploads/';
	        $config['allowed_types'] = 'xlsx|xls';
	        
	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file')){
	            $insert = false;
	            $this->dump($this->upload->display_errors());
	        } else {
	        	$this->load->library("PHPExcel");

	            $upload_data = $this->upload->data();
	            $filename    = $upload_data['file_name'];

	            $inputFileName = './assets/distribusi/uploads/'.$filename;
		        try {
		        	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		        } catch(Exception $e) {
		        	die('Error loading file :' . $e->getMessage());
		        }
		 
		        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		        $numRows   = count($worksheet);
		 
		        for ($i=2; $i < ($numRows+1); $i++) { 
		            if (!empty($worksheet[$i]['A']) && !empty($worksheet[$i]['B']) && !empty($worksheet[$i]['C'])
		         		&& !empty($worksheet[$i]['D']) && !empty($worksheet[$i]['E'])) {
		            	$ins[] = array(
		                    "nisn"          => $worksheet[$i]["A"],
		                    "nama"          => $worksheet[$i]["B"],
		                    // "kelas"         => $worksheet[$i]["C"],
		                    "agama"         => $worksheet[$i]["C"],
		                    "jenis_kelamin" => $worksheet[$i]["D"],
		                    "tpm" 			=> $worksheet[$i]["E"],
			            );
		            }
		        }

		        $kelas_tambahan = $this->mod_kelas_tambahan->get_kelas($jenjang);
		        $groups = array_chunk($ins, ceil(count($ins) / count($kelas_tambahan)));

		        $data_to_insert = array();
		        
		        foreach ($kelas_tambahan as $key => $kelas) {
		        	foreach ($groups[$key] as $siswa) {
		        		$data_to_insert[] = array(
		        			'id_kelas_tambahan' => $kelas->id_kelas_tambahan,
							'nisn'				=> $siswa['nisn']
		        		);
		        	}
		        }

		        // Insert into kelas_tambahan_berjalan
				$insert = $this->mod_kelas_tambahan->insert_berjalan($data_to_insert);
	        }
		

		if ($insert) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');

		} else {
			$this->session->set_flashdata('errors', 'Data Gagal Disimpan!');

		}

		redirect('kesiswaan/hasil_pembagian_tambahan');
	}

	public function hasil_pembagian_tambahan(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$this->load->model('distribusi/mod_kelas_tambahan');
		$data['kelas_tambahan_berjalan'] = $this->mod_kelas_tambahan->get_kelas_berjalan();

		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/hasil_pembagian_tambahan', $data);
	}

	public function klinik_un(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$this->load->model('distribusi/mod_klinik_un');
		$data['klinik_un'] = $this->mod_klinik_un->get();
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/klinik_un', $data);
	}

	public function hasil_klinik_un() {
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$key = $this->input->post('id_klinik_un');
		$data['nisn'] = $this->input->post('nisn');
		$data['nama_siswa'] = $this->input->post('nama_siswa');
		$data['kelas'] = $this->input->post('kelas');
		$data['req_materi'] = $this->input->post('req_materi');
		$data['jumlah_peserta'] = $this->input->post('jumlah_peserta');
		$data['status_req'] = $this->input->post('status_req');
		$data['respon'] = $this->input->post('respon');


		$this->load->model('distribusi/mod_klinik_un' );
		
		$this->mod_klinik_un->insert($data);
		$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data berhasil disimpan!", "success")</script>');
		redirect('kesiswaan/klinik_un' );
	}

	public function simpan_respon(){
		$key = $this->uri->segment(4);
		if ($this->input->post('tanggal') != "") {
			$data['tanggal'] = $this->input->post('tanggal');	
		}
		
		$data['respon'] = $this->input->post('respon');
		$data['status_req'] = 'Sudah Direspon';
		
		$this->load->model('distribusi/mod_klinik_un');
		
		$this->mod_klinik_un->update($data, $key);
		$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data berhasil disimpan!", "success")</script>');
		redirect('kesiswaan/klinik_un');		
	}

	public function hapus_klinik_un($id){
		$this->load->model('distribusi/mod_klinik_un');
		$this->mod_klinik_un->delete($id);
		$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data Berhasil Dihapus", "success")</script>');
		redirect('kesiswaan/klinik_un');
	}


	public function mutasi_masuk(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		
		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$this->load->model('distribusi/mod_kelas_reguler_berjalan');
		
		$data['data_pencatatan'] = $this->Mod_siswa_mutasi_masuk->get_pencatatan();
		$data['form_pendaftaran_mutasi_masuk'] = $this->Mod_form_mutasi_masuk->get();
		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->get();
		$data['pengumuman_mutasi'] = $this->Mod_pengumuman_mutasi->get();
		$data['kelas_reguler_berjalan'] = $this->mod_kelas_reguler_berjalan->getjoin();
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/mutasi_masuk', $data);
	}

	public function hapus_pendaftar_mutasi($id){
		$this->load->model('distribusi/mod_siswa_mutasi_masuk');
		$this->mod_siswa_mutasi_masuk->hapusmutasi($id);
		$this->session->set_flashdata('success', 'Siswa Berhasil Dihapus!');
		redirect('kesiswaan/mutasi_masuk');
	}

	public function simpan_form_mutasi(){
		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$i=1;
        foreach ($this->db->get('form_pendaftaran_mutasi_masuk')->result() as $form) 
         { 
         	if ($this->input->post('nilai'.$form->id_form_pendaftaran_mutasi_masuk) == "1") 
         	{
         		$nilai = 1;
         	} 
         	else 
         	{ 
         		$nilai = 0; 
         	}

         	$arrdata = array
         	(
				'nilai' => $nilai
			);
			if ($this->input->post('atribut'.$form->id_form_pendaftaran_mutasi_masuk) != "") 
			{
				$arrdata['atribut'] = $this->input->post('atribut'.$form->id_form_pendaftaran_mutasi_masuk); 
			}
			$this->load->model('distribusi/Mod_form_mutasi_masuk');
			$this->Mod_form_mutasi_masuk->update($arrdata, $form->id_form_pendaftaran_mutasi_masuk);

            $i=$i+1;
         }
        $this->session->set_flashdata('success', 'Formulir Berhasil Di Aktifkan!');

		redirect('kesiswaan/mutasi_masuk');
	}

	public function ubah_siswa_akun() {
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/Mod_siswa');
		$this->load->model('distribusi/Mod_akun');
			// $data['status_siswa'] = $status;
		foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$rowsiswamutasi = $this->Mod_siswa_mutasi_masuk->selectsiswa($nisn_siswa);

			$data=array(
				"nisn" => $nisn_siswa,
				"nama" => $rowsiswamutasi->nama_pendaftar_mutasi,
				"jenis_kelamin" => $rowsiswamutasi->jenis_kelamin,
			);
			$this->Mod_siswa->insert($data);	
			//echo $this->db->last_query();

			$arrdata = array(
				'password' => $nisn_siswa, 
				'id_jabatan' => '8', 
				'nisn' => $nisn_siswa
			);
		
			$this->Mod_akun->insert($arrdata);
		}
			$this->session->set_flashdata('success', 'Akun Siswa Berhasil Dibuat!');

			redirect('kesiswaan/mutasi_masuk');		
	}


	public function masukkan_siswa_kelas($nisn, $id_kelas_reguler_berjalan)
		{
			$this->load->model('distribusi/mod_siswa_kelas_reguler_berjalan');
			$arrdata = array('nisn'=>$nisn, 'id_kelas_reguler_berjalan'=>$id_kelas_reguler_berjalan);
			$this->mod_siswa_kelas_reguler_berjalan->insert($arrdata);	

			// $this->session->set_flashdata('status', "<script>alert(' siswa berhasil diinput!');</script>");
			$this->session->set_flashdata('success', 'Data Siswa Berhasil Masuk ke Kelas!');

			redirect('kesiswaan/mutasi_masuk');
	}

	public function editpendaftar_mutasi(){
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		// $this->load->model('kesiswaan/Mod_siswa_mutasi_masuk');
		// $data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->get();
		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->selectsiswa($this->uri->segment(4));

		// var_dump($data['tabel_siswa_mutasi_masuk']); exit;
		//echo $this->db->last_query();
		foreach ($this->db->get('form_pendaftaran_mutasi_masuk')->result() as $form) 
         { 
         	$settingform[$form->nama_kolom] = $form->nilai;
         	$settingformberkas[$form->nama_kolom] = $form->atribut;
         }
         $data['settingform'] = $settingform;
         $data['settingformberkas'] = $settingformberkas;

		// $this->load->view('kesiswaan/admin/view_edit_pendaftar_ppdb_swasta', $data);
		$this->load->view('Kesiswaan/distribusi/kesiswaan/edit_pendaftar_mutasi', $data);
	}
	

	public function updatependaftar_mutasi() {
		$this->load->model('distribusi/Mod_tahunajaran');

		$arrdata = array(

				'nisn_pendaftar_mutasi' => $this->input->post('nisn_pendaftar_mutasi'),
				'nama_pendaftar_mutasi' => $this->input->post('nama_pendaftar_mutasi'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'alamat' => $this->input->post('alamat'),
				'no_telepon' => $this->input->post('no_telepon'),
				'sekolah_asal' => $this->input->post('sekolah_asal'),
				'tahun_kelulusan' => $this->input->post('tahun_kelulusan'),
				'nilai_un_bahasaindonesia' => $this->input->post('nilai_un_bahasaindonesia'),
				'nilai_un_matematika' => $this->input->post('nilai_un_matematika'),
				'nilai_un_ipa' => $this->input->post('nilai_un_ipa'),
				'jumlah_nilai_un' => $this->input->post('jumlah_nilai_un'),
				'surat_ket_nisn' => $this->input->post('surat_ket_nisn'),
				'fc_buku_rapor' => $this->input->post('fc_buku_rapor'),
				'fc_skhun' => $this->input->post('fc_skhun'),
				'surat_ket_bangku' => $this->input->post('surat_ket_bangku'),
				'surat_ket_pindah' => $this->input->post('surat_ket_pindah'),
				'skck_kepsek' => $this->input->post('skck_kepsek'),
				'berkas_1' => $this->input->post('berkas_1'),
				'berkas_2' => $this->input->post('berkas_2'),
				'berkas_3' => $this->input->post('berkas_3'),
				'berkas_4' => $this->input->post('berkas_4'),
				'berkas_5' => $this->input->post('berkas_5'),
				'status_siswa' => $this->input->post('status_siswa')

				
				
			);

		// var_dump($arrdata); exit;

		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->Mod_siswa_mutasi_masuk->updatemutasi($arrdata,  $this->uri->segment(4));
		// echo $this->db->last_query();
		$this->session->set_flashdata('pesan', "<script>alert('Perubahan data pendaftar Mutasi Masuk berhasil disimpan!');</script>");
		echo "<script>window.history.back();</script>";	
	}

	public function ubah_status_siswa_mutasi(){
		// $data['status_siswa'] = $status;
		// $this->load->model('distribusi/Mod_siswa_mutasi_masuk');

		// $this->Mod_siswa_mutasi_masuk->update($data, $id);
		// redirect('distribusi/kesiswaan/mutasi_masuk');

			$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
			// $data['status_siswa'] = $status;
			foreach ($this->input->post('nisn_ubah') as $nisn_siswa) {
			$data=array("status_siswa" => $this->input->post('button'));
			$this->Mod_siswa_mutasi_masuk->updatemutasi($data, $nisn_siswa);	
			//echo $this->db->last_query();


		}
			$this->session->set_flashdata('status', "<script>alert('Status siswa berhasil diubah!');</script>");
			redirect('kesiswaan/mutasi_masuk');		

	}

	public function upload_file(){
		$config['upload_path'] = './assets/files';
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);

		$upload = $this->upload->do_upload('pengumuman');

		if ($upload) {
			echo 'Upload berhasil';
			// Masukkan namanya ke DB
			
		} else {
			echo 'Upload gagal!';
			printf($this->upload->display_errors());
		}
	}

	public function buatakun(){
		
		$this->load->model('distribusi/Mod_siswa_mutasi_masuk');
		$this->load->model('distribusi/Mod_akun');
		$this->load->model('distribusi/Mod_siswa');
		$this->load->model('distribusi/Mod_orangtua_wali');
		$this->load->model('distribusi/Mod_tahunajaran');

		// VALUES: empty, semua, e.g. 2016/2017, dst...
		$tahun_ajaran = $this->input->get('tahun_ajaran');

		$tahun_aktif = NULL;
		// Defaultnya ambil tahun yg aktif
		if (empty($tahun_ajaran)) {
			$tahun_aktif  = $this->Mod_siswa_mutasi_masuk->get_tahun_ajaran_aktif()->tahun_ajaran;
		} else if ($tahun_ajaran != 'semua') {
			$tahun_aktif = $tahun_ajaran;
		}

		$data['tabel_siswa_mutasi_masuk'] = $this->Mod_siswa_mutasi_masuk->getlolos($tahun_aktif);
		// $data['tahun_ajaran_selected'] = $tahun_aktif;
		$tabel_pendaftar_mutasi_lolos = $this->Mod_siswa_mutasi_masuk->getlolos($tahun_aktif);
		// var_dump($tabel_pendaftar_ppdb_lolos);
		// exit();

		foreach ($tabel_pendaftar_mutasi_lolos as $row_pendaftar_mutasi_lolos) {
			$row_akun = $this->Mod_akun->selectbynisn($row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi);
			if (!$row_akun) {
				$arrdata = array(
					'password' => $row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi, 
					'id_jabatan' => '8', 
					'nisn' => $row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi
				);
			
				$this->Mod_akun->insert($arrdata);

				$arrdata = array(
					'nama_ayah' => 'Nama Ayah'
				);
			
				$this->Mod_orangtua_wali->insert($arrdata);

				$id_orangtua = $this->db->insert_id();

				$arrdata = array(
					'id_tahunajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
					'nisn_pendaftar_mutasi' => $row_pendaftar_mutasi_lolos->nisn_pendaftar_mutasi,
					'nama_pendaftar_mutasi' => $row_pendaftar_mutasi_lolos->nama_pendaftar_mutasi,
					// 'tempat_lahir' => $row_pendaftar_mutasi_lolos->tempat_lahir,
					// 'tanggal_lahir' => $row_pendaftar_mutasi_lolos->tanggal_lahir,
					'jenis_kelamin' => $row_pendaftar_mutasi_lolos->jenis_kelamin,
					'status_siswa' => 'Aktif',
					'id_orangtua' => $id_orangtua
				);
			
				$this->Mod_siswa->insert($arrdata);
			}

			$this->session->set_flashdata('lolos', "<script>alert('Pembuatan akun untuk siswa baru telah berhasil!!');</script>");			
		}
		redirect('kesiswaan/mutasi_masuk');
	}

	public function nonaktifform() {
		$this->load->model('distribusi/Mod_form_mutasi_masuk');
		$i=1;
        foreach ($this->db->get('form_pendaftaran_mutasi_masuk')->result() as $form) 
         { 
         	if ($form->nilai == "1") 
	         {
         		$nilai = 0;
         		$atribut = "";
	         	$arrdata = array
	         	( 'nilai' => $nilai );
				if (($form->id_form_pendaftaran_mutasi_masuk >= 21) && ($form->id_form_pendaftaran_mutasi_masuk <= 27)) 
				{ $arrdata['atribut'] = ''; }
				$this->Mod_form_mutasi_masuk->update($arrdata, $form->id_form_pendaftaran_mutasi_masuk);
         	}  	
			$i=$i+1;
         }
		$this->load->model('distribusi/Mod_form_mutasi_masuk');   
		$this->session->set_flashdata('success', 'Formulir Berhasil Di Non-aktifkan!');
		// $this->session->set_flashdata('nonaktif', "<script>alert('Formulir berhasil dinon-aktifkan!');</script>");
		redirect('kesiswaan/mutasi_masuk');
	}

	public function mutasi_keluar(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$data['data_pencatatan_keluar'] = $this->Mod_siswa_mutasi_keluar->get_pencatatan_keluar();

		$data['tabel_siswa_mutasi_keluar'] = $this->Mod_siswa_mutasi_keluar->get();
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/mutasi_keluar', $data);
	}

	public function get_nama()
	{
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$nisn = $this->input->post('nisn');
		$data['siswa'] = $this->Mod_siswa_mutasi_keluar->get_nama($nisn);
		echo json_encode($data); //buat manggil json 
	}

	public function nonaktifkan_akun($nisn)
	{
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$this->Mod_siswa_mutasi_keluar->hapus_siswa_mutasi($nisn);
		$this->session->set_flashdata('success', 'Akun Siswa Berhasil Di Non-aktifkan!');
		redirect('kesiswaan/mutasi_keluar');

	}

	public function cetak_bukti_mutasi_keluar($nisn){
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');
		$data['siswa_mutasi'] = $this->Mod_siswa_mutasi_keluar->get_data_cetak($nisn);
		$data['setting'] = $this->Mod_siswa_mutasi_keluar->get_nama_sekolah();
		

		$filename = $nisn."-Print.doc";
		$path ="./assets/distribusi/cetak/";
		$data['nomor'] = "";
		if (date('m') == '01') {
			$bln = "Januari";
		} else if (date('m') == '02') {
			$bln = "Februari";
		} else if (date('m') == '03') {
			$bln = "Maret";
		} else if (date('m') == '04') {
			$bln = "April";
		} else if (date('m') == '04') {
			$bln = "Mei";
		} else if (date('m') == '06') {
			$bln = "Juni";
		} else if (date('m') == '07') {
			$bln = "Juli";
		} else if (date('m') == '08') {
			$bln = "Agustus";
		} else if (date('m') == '09') {
			$bln = "September";
		} else if (date('m') == '10') {
			$bln = "Oktober";
		} else if (date('m') == '11') {
			$bln = "November";
		} else if (date('m') == '12') {
			$bln = "Desember";
		} 
		$data['tanggal'] = date('d').'-'.$bln.'-'.date('Y');
		
		
		if (!file_exists($path)) mkdir($path);

		$print = $this->load->view('kesiswaan/distribusi/kesiswaan/print_bukti_siswa_mutasi_keluar', $data, TRUE);
		write_file($path.'/'.$filename, $print);
		redirect($path.'/'.$filename);	
	}

	public function hapus_siswa_mutasi_keluar(){
		$this->load->model('distribusi/mod_siswa_mutasi_keluar');
		$this->mod_siswa_mutasi_keluar->hapus_siswa_mutasi($nisn);
	}

	public function save_siswa_mutasi_keluar(){
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;
		
		$data = array(
				
				'nama'=>$this->input->post('nama'),
				'nisn'=>$this->input->post('nisn'),
				'surat_ket_pindah'=>$this->input->post('surat_ket_pindah'),
				'sekolah_tujuan' => $this->input->post('sekolah_tujuan'),
				'status_siswa' => $this->input->post('status_siswa'),
				'surat_bebas_administrasi'=>$this->input->post('surat_bebas_administrasi'),
				'berkas_1'=>$this->input->post('berkas_1'),
				'berkas_2'=>$this->input->post('berkas_2'),
				'berkas_3'=>$this->input->post('berkas_3'),

				
			);
		$this->load->model('distribusi/mod_siswa_mutasi_keluar');
		$this->mod_siswa_mutasi_keluar->insert($data);
		$this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
		redirect('kesiswaan/mutasi_keluar');
	}
	
	public function ubah_status_siswa_mutasi_keluar($id, $status){
		$data['status_siswa'] = $status;
		$this->load->model('distribusi/Mod_siswa_mutasi_keluar');

		$this->Mod_siswa_mutasi_keluar->update($data, $id);
		$this->session->set_flashdata('success', 'Status Siswa Berhasil Diubah!');
		redirect('kesiswaan/mutasi_keluar');
	}

	public function dump($data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}

	public function import($success=""){
        $data['judul_besar'] = 'PHPExcel';
        $data['judul_kecil'] = 'Import';
        $data['output'] = "<h4>Sebelum mengupload, pastikan file anda berformat <strong>.xls/.xlsx</strong></h4>";
        $data['output'] .= form_open_multipart('php_excel/do_upload');
        $form = array(
                    'name'        => 'userfile',
                    'style'       => 'position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;background-color:transparent;color:transparent;',
                    'onchange'  => "$('#upload-file-info').html($(this).val());"
                );
        $data['output'] .= "<div style='position:relative;'>";
        $data['output'] .= "<a class='btn btn-primary' href='javascript:;'>";
        $data['output'] .= "Browse… ".form_upload($form);
        $data['output'] .= "</a>";
        $data['output'] .= "&nbsp;";
        $data['output'] .= "<span class='label label-info' id='upload-file-info'></span>";
        $data['output'] .= "</div>";
        $data['output'] .= "<br>";
        $data['output'] .= form_submit('name', 'Go !', 'class = "btn btn-default"');
        $data['output'] .= form_close();
        if ($success) {
            $data['pesan'] = '<div class="alert alert-success alert-dismissible">';
            $data['pesan'] .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            $data['pesan'] .= '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
            $data['pesan'] .= 'Success alert preview. This alert is dismissable.';
            $data['pesan'] .= '</div>';
        }
 
        var_dump($data); exit;
    }

     public function do_upload(){
        $config['upload_path']   = './assets/distribusi/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->phpexcel_model->upload_data($filename);
            unlink('./assets/distribusi/uploads/'.$filename);
            redirect('kesiswaan/import/success','refresh');
        }
    }

    public function tambah_pengumuman(){
    	
		$this->load->model('distribusi/Mod_pengumuman_mutasi');


		$key = $this->input->post('id_pengumuman');
		$data['tgl_pengumuman'] = $this->input->post('tgl_pengumuman');
		$data['judul_pengumuman'] = $this->input->post('judul_pengumuman');
		$data['file_pengumuman'] = $this->input->post('file_pengumuman');


		$imagename = $_FILES['file_pengumuman']['name'];
		if (empty($imagename)) {
			$imagename = $file_memo;
		}
		$source = $_FILES['file_pengumuman']['tmp_name'];
		$target= "assets/distribusi/pengumuman/".$imagename; //lokasi upload
		$config['max_size'] = '10000000';
		$data['file_pengumuman'] =$target;
		move_uploaded_file($source,$target);
		$this->Mod_pengumuman_mutasi->insert($data);
		$this->session->set_flashdata('success', 'Pengumuman Berhasil Ditambahkan!');
		redirect('kesiswaan/mutasi_masuk');
	}

	public function download ($id) {

		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$data = array('id_pengumuman' => $id);
		$this->Mod_pengumuman_mutasi->forcefile($id);
		$this->session->set_flashdata('sukses','data berhasil didownload');
		redirect('kesiswaan/mutasi_masuk');
	}

	public function delete($id) {

		$this->load->model('distribusi/Mod_pengumuman_mutasi');
		$data = array('id_pengumuman' => $id);
		$this->Mod_pengumuman_mutasi->delete($id);
		$this->session->set_flashdata('sukses','data berhasil dihapus');
		redirect('kesiswaan/mutasi_masuk');
	}


	public function cobaliatjumlah()
	{	
		$this->load->model('distribusi/mod_siswa_kelas');
		$data_jumlah= $this->mod_siswa_kelas->hitungjumlahjk('7');

		$jumlah_laki2 = $data_jumlah[0]->jumlah;
		$jumlah_perempuan = $data_jumlah[1]->jumlah;

		$jumlah_kelas=5;
		$arr_laki2 = array();
		$arr_perempuan = array();

		$bagi_laki2 = floor($jumlah_laki2 / $jumlah_kelas); //floor itu buat bulatin ke bawah, ceil buat bulatin keatas
		$bagi_perempuan = floor($jumlah_perempuan / $jumlah_kelas);

		for ($i = 0; $i < $jumlah_kelas; $i++){

			$arr_laki2[$i] = $bagi_laki2;
			$arr_perempuan[$i] = $bagi_perempuan;

		}
		
		$sisa_laki2 = $jumlah_laki2 % $jumlah_kelas; //mod 
		$sisa_perempuan = $jumlah_perempuan % $jumlah_kelas;

		//untuk membagi sisa dari jumlah siswa 
		$arr_laki2     = $this->tambah_dari_sisa($sisa_laki2, $bagi_laki2, $arr_laki2);
		$arr_perempuan = $this->tambah_dari_sisa($sisa_perempuan, $bagi_perempuan, $arr_perempuan);

		//untuk membagi kuartil low med hi laki2 perempuan
		$data_kuartil_laki2     = $this->mod_siswa_kelas->getnilai('laki-laki','7');
		$data_kuartil_perempuan = $this->mod_siswa_kelas->getnilai('perempuan','7');

		$kuartil_laki2     = $this->get_kuartil($jumlah_laki2, $data_kuartil_laki2);
		$kuartil_perempuan = $this->get_kuartil($jumlah_perempuan, $data_kuartil_perempuan);

		//untuk melihat posisi siswa
		$low_laki2 = array();
		$med_laki2 = array();
		$hi_laki2  = array();

		foreach ($data_kuartil_laki2 as $siswa) {
			if($siswa->total_nilai <= $kuartil_laki2['q1']){
				array_push($low_laki2, $siswa->nisn);
			} else if ($siswa->total_nilai > $kuartil_laki2['q1'] && $siswa->total_nilai < $kuartil_laki2['q3']) {
				array_push($med_laki2, $siswa->nisn);
			} else {
				array_push($hi_laki2, $siswa->nisn);
			}
		}
		

		$low_pr = array();
		$med_pr = array();
		$hi_pr  = array();

		foreach ($data_kuartil_perempuan as $siswa) {
			if($siswa->total_nilai <= $kuartil_perempuan['q1']){
				array_push($low_pr, $siswa->nisn);
			} else if ($siswa->total_nilai > $kuartil_perempuan['q1'] && $siswa->total_nilai < $kuartil_perempuan['q3']) {
				array_push($med_pr, $siswa->nisn);
			} else {
				array_push($hi_pr, $siswa->nisn);
			}
		}		

		
			

		

		echo "<pre>";
		var_dump($med_laki2);

		exit;

		



		// echo "<pre>";
		// var_dump($arr_laki2);
		// echo "</pre>";
	}


	private function tambah_dari_sisa($sisa, $bagi, $arr) {
		if ($sisa > 0) {
			if ($bagi % 2 == 1) { //ganjil
				$plus = 1;
			} else { //genap
				$plus = 2;
			}

			$i = 0;
			while ($sisa > 0) {
				if ($sisa < $plus) {
					$plus = $sisa;
				}				
				
				$arr[$i] = $arr[$i] + $plus;
				$sisa    = $sisa - $plus;
				$i++;
			}
		}
		return $arr;
	}

	private function get_kuartil($jumlah, $data_kuartil){
		if ($jumlah % 2 == 1) {
			// Qi = i(n+1)/4
			$indexQ1 = floor(1 * ($jumlah + 1) / 4);
			$indexQ2 = floor(2 * ($jumlah + 1) / 4);
			$indexQ3 = floor(3 * ($jumlah + 1) / 4);

			$Q1 = $data_kuartil[$indexQ1 - 1]->total_nilai;
			$Q2 = $data_kuartil[$indexQ2 - 1]->total_nilai;
			$Q3 = $data_kuartil[$indexQ3 - 1]->total_nilai;
		} else {
			// Q1 = X(n + 2)/4
			// Q2 = 1/2 (Xn/2 + Xn/2+1)
			// Q3 = X(3n + 2)/4

			$indexQ1   = floor(($jumlah + 2) / 4); 
			$indexQ2_1 = floor($jumlah / 2);
			$indexQ2_2 = floor(floor($jumlah / 2) + 1);
			$indexQ3   = floor((3 * $jumlah + 2) / 4);

			$Q1 = $data_kuartil[$indexQ1 - 1]->total_nilai;
			$Q2 = 0.5 * ($data_kuartil[$indexQ2_1 - 1]->total_nilai + $data_kuartil[$indexQ2_2 - 1]->total_nilai);
			$Q3 = $data_kuartil[$indexQ3 - 1]->total_nilai;
		}

		$data['q1'] = $Q1;
		$data['q2'] = $Q2;
		$data['q3'] = $Q3;

		return $data;

	}


	// public function kuartil()
	// {
	// 	$this->load->model('distribusi/mod_siswa_kelas');
	// 	$data_kuartil_laki2= $this->mod_siswa_kelas->getnilai('laki-laki','7');
	// 	$data_kuartil_perempuan= $this->mod_siswa_kelas->getnilai('perempuan','7');

	// 	if($jumlah_laki2 % 2 == 1){//

	// 	} else


	// 	echo "<pre>";
	// 	var_dump($data_kuartil_perempuan);
	// 	echo "</pre>";

	// }

		public function data_import_prestasi($value='')
		{
			$config['upload_path']   = './assets/distribusi/uploads/';
	        $config['allowed_types'] = 'xlsx|xls';
	        
	        $this->load->library('upload', $config);
	        
	        if ( ! $this->upload->do_upload('file')){
	            $insert = false;
	            $this->dump($this->upload->display_errors());
	        } else {
	        	$this->load->library("PHPExcel");

	            $upload_data = $this->upload->data();
	            $filename    = $upload_data['file_name'];

	            $inputFileName = './assets/distribusi/uploads/'.$filename;
		        try {
		        	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		        } catch(Exception $e) {
		        	die('Error loading file :' . $e->getMessage());
		        }
		 
		        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		        $numRows   = count($worksheet);
		 
		        for ($i=2; $i < ($numRows+1); $i++) { 
		            $ins[] = array(
	                    "nisn"          		=> $worksheet[$i]["A"],
	                    "prestasi_or"          => $worksheet[$i]["D"],
	                    "prestasi_tahfidz"  => $worksheet[$i]["E"],
	                    
		            );
		        }

		        // echo "<pre>";
		        // var_dump($ins);

		     	$insert = $this->db->insert_batch('tabel_sementara_simpan_prestasi', $ins);

		     	$this->load->model('distribusi/mod_siswa_kelas');

		     	if ($insert){
		     		// copy ke siswa_kelas
		     		$update = $this->mod_siswa_kelas->update_siswa_kelas_prestasi();
					if ($update) {
						// Clear data sementara
						$this->db->empty_table('tabel_sementara_simpan_prestasi');

						$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data berhasil disalin.", "success")</script>');
					} else {
						$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data gagal disalin!", "error")</script>');
					}
					redirect('distribusi/kesiswaan/distribusi_reg');
		     		
		     	} else {
		     		$this->session->set_flashdata('warning','<script>swal("Berhasil", "Data gagal disalin!", "error")</script>');
		     	}
	        }
		}

		public function buku_induk()
		{
		
		$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;


		$this->load->model('distribusi/mod_siswa');
		$data['tabel_siswa'] = $this->mod_siswa->getsiswa();
		
		
		$this->template->load('kesiswaan/dashboard','kesiswaan/distribusi/kesiswaan/buku_induk',$data);	
	   }


	   public function edit_buku_induk_siswa()
	   {
	   	$this->load->model('distribusi/mod_siswa');
		$data['row_siswa'] = $this->mod_siswa->select($this->uri->segment(4));
	
		$this->load->view('kesiswaan/distribusi/kesiswaan/edit_buku_induk_siswa', $data);
	   }

	   public function update_buku_induk_siswa(){
	   	$config['upload_path']          = './assets/distribusi/foto_siswa/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('foto')) { 
        	$foto = ""; 
        } else { 
        	$foto = $this->upload->data('file_name'); 
        }

		$this->load->model('distribusi/mod_siswa');

		// var_dump($foto); exit;

		$data = array(

		'nisn'				=>$this->input->post('nisn'),
		'no_induk_siswa'	=>$this->input->post('no_induk_siswa'),
		'foto'				=>$foto,
		'nik'				=>$this->input->post('nik'),
		'nama'				=>$this->input->post('nama'),
		'jenis_kelamin'		=>$this->input->post('jenis_kelamin'),
		'tempat_lahir'		=>$this->input->post('tempat_lahir'),
		'tanggal_lahir'		=>$this->input->post('tanggal_lahir'),
		'agama'=>$this->input->post('agama'),
		'berkebutuhan_khusus'=>$this->input->post('berkebutuhan_khusus'),
		'alamat'=>$this->input->post('alamat'),
		'rt'=>$this->input->post('rt'),
		'rw'=>$this->input->post('rw'),
		'nama_dusun'=>$this->input->post('nama_dusun'),
		'desa_kelurahan'=>$this->input->post('desa_kelurahan'),
		'kecamatan'=>$this->input->post('kecamatan'),
		'kode_pos'=>$this->input->post('kode_pos'),
		'tempat_tinggal'=>$this->input->post('tempat_tinggal'),
		'kategori_penduduk'=>$this->input->post('kategori_penduduk'),
		'transportasi'=>$this->input->post('transportasi'),
		'no_telepon'=>$this->input->post('no_telepon'),
		'email'=>$this->input->post('email'),
		'nama_sd_mi'=>$this->input->post('nama_sd_mi'),
		'pernah_paud'=>$this->input->post('pernah_paud'),
		'no_skhun_mi'=>$this->input->post('no_skhun_mi'),
		'no_seri_skhun_s'=>$this->input->post('no_seri_skhun_s'),
		'no_seri_ijazah_sd_mi'=>$this->input->post('no_seri_ijazah_sd_mi'),
		'penerima_kps_kks_pkh_kip'=>$this->input->post('penerima_kps_kks_pkh_kip'),
		'no_penerima'=>$this->input->post('no_penerima'),
		'anak_ke'=>$this->input->post('anak_ke'),
		'jumlah_saudara_kandung'=>$this->input->post('jumlah_saudara_kandung'),
		'jumlah_saudara_tiri'=>$this->input->post('jumlah_saudara_tiri'),
		'jumlah_saudara_angkat'=>$this->input->post('jumlah_saudara_angkat'),
		'status_dalam_keluarga'=>$this->input->post('status_dalam_keluarga'),
		'pernah_menderita_sakit'=>$this->input->post('pernah_menderita_sakit'),
		'pernah_mengaji'=>$this->input->post('pernah_mengaji'),
		'keterangan_mengaji'=>$this->input->post('keterangan_mengaji'),
		'anak_yatim_piatu'=>$this->input->post('anak_yatim_piatu'),
		'bahasa_sehari_hari_dirumah'=>$this->input->post('bahasa_sehari_hari_dirumah'),
		'prestasi_disekolah'=>$this->input->post('prestasi_disekolah'),
		'tinggi_badan'=>$this->input->post('tinggi_badan'),
		'berat_badan'=>$this->input->post('berat_badan'),
		'hobi'=>$this->input->post('hobi'),
		'asal_sekolah'=>$this->input->post('asal_sekolah'),
		'lama_belajar_disd_mi'=>$this->input->post('lama_belajar_disd_mi'),
		// 'id_orangtua'=>$this->session->userdata('id_orangtua')

			);

		$this->load->model('distribusi/mod_siswa');
		$this->mod_siswa->update($data, $this->uri->segment(4));
        $this->session->set_flashdata('siswa', "<script>alert('Data siswa berhasil diperbarui!');</script>");
		redirect('kesiswaan/buku_induk');
		     		
	   }

	   public function edit_buku_induk_ortu(){


		$this->load->model('distribusi/mod_siswa');
		$row_siswa = $this->mod_siswa->select($this->uri->segment(4));
		$data['row_siswa'] = $row_siswa;

	    $this->load->model('distribusi/mod_siswa');
	    $data['row_siswa_ortu'] = $this->mod_siswa->getsiswaortu($row_siswa->id_orangtua);

	   	// var_dump($data['row_siswa_ortu']); exit;

		$this->load->view('kesiswaan/distribusi/kesiswaan/edit_buku_induk_ortu', $data);
	   }

	   public function update_buku_induk_ortu()
	   {

	   	$data['nama'] = $this->session->Nama;
		$data['foto'] = $this->session->foto;

	   	$this->load->model('distribusi/mod_orangtua_wali');

		$data = array(

		// 'id_orangtua'=>$this->input->post('id_orangtua'),
		'nama_ayah'=>$this->input->post('nama_ayah'),
		'gelar_depan_ayah'=>$this->input->post('gelar_depan_ayah'),
		'gelar_belakang_ayah'=>$this->input->post('gelar_belakang_ayah'),
		'tempat_lahir_ayah'=>$this->input->post('tempat_lahir_ayah'),
		'tanggal_lahir_ayah'=>$this->input->post('tanggal_lahir_ayah'),
		'kewarganegaraan_ayah'=>$this->input->post('kewarganegaraan_ayah'),
		'agama_ayah'=>$this->input->post('agama_ayah'),
		'pendidikan_ayah'=>$this->input->post('pendidikan_ayah'),
		'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
		'penghasilan_ayah'=>$this->input->post('penghasilan_ayah'),
		'ayah_berkebutuhan_khusus'=>$this->input->post('ayah_berkebutuhan_khusus'),
		'no_telepon_hp_ayah'=>$this->input->post('no_telepon_hp_ayah'),
		'nama_ibu'=>$this->input->post('nama_ibu'),
		'gelar_depan_ibu'=>$this->input->post('gelar_depan_ibu'),
		'gelar_belakang_ibu'=>$this->input->post('gelar_belakang_ibu'),
		'tempat_lahir_ibu'=>$this->input->post('tempat_lahir_ibu'),
		'tanggal_lahir_ibu'=>$this->input->post('tanggal_lahir_ibu'),
		'kewarganegaraan_ibu'=>$this->input->post('kewarganegaraan_ibu'),
		'agama_ibu'=>$this->input->post('agama_ibu'),
		'pendidikan_ibu'=>$this->input->post('pendidikan_ibu'),
		'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
		'penghasilan_ibu'=>$this->input->post('penghasilan_ibu'),
		'ibu_berkebutuhan_khusus'=>$this->input->post('ibu_berkebutuhan_khusus'),
		'nomor_telepon_ibu'=>$this->input->post('nomor_telepon_ibu'),

		'nama_wali'=>$this->input->post('nama_wali'),
		'tempat_lahir_wali'=>$this->input->post('tempat_lahir_wali'),
		'tanggal_lahir_wali'=>$this->input->post('tanggal_lahir_wali'),
		'pendidikan_wali'=>$this->input->post('pendidikan_wali'),
		'kewarganegaraan_wali'=>$this->input->post('kewarganegaraan_wali'),
		'agama_wali'=>$this->input->post('agama_wali'),
		'pekerjaan_wali'=>$this->input->post('pekerjaan_wali'),
		'penghasilan_wali'=>$this->input->post('penghasilan_wali'),
		'alamat_wali'=>$this->input->post('alamat_wali'),
		'no_telepon_hp_wali'=>$this->input->post('no_telepon_hp_wali'),
		);	


		$this->load->model('distribusi/mod_orangtua_wali');
		$this->mod_orangtua_wali->update($data, $this->uri->segment(4));
        $this->session->set_flashdata('orangtua', "<script>alert('Data siswa berhasil diperbarui!');</script>");
		redirect('kesiswaan/buku_induk');     		
	   }
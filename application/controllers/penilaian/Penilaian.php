<?php
class Penilaian extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('pegawai_model');
        $this->load->model('presensi_pegawai_model');
        $this->load->model('penilaian/presensi_siswa_model');
        $this->load->model('tahunajaran_model');
        $this->load->model('tanggal_libur_model');
        $this->load->model('tanggal_libur_nasional_model');
        $this->load->model('jabatan_model');
        $this->load->model('penilaian/M_data');
        // $this->load->model('ppdb/model_pendaftar_ppdb');
        // $this->load->model('ppdb/model_form_ppdb');
        // $this->load->model('ppdb/model_ketentuan_ppdb');
        // $this->load->model('ppdb/model_form_ujian');
        // $this->load->model('ppdb/model_pengumuman_ppdb');
        // $this->load->model('ppdb/model_tahunajaran');
        // $this->load->model('ppdb/Model_siswa');
        $this->load->model('pegawai_model');
        if ($this->session->userdata('isLogin') != TRUE) {
            $this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
            redirect('login');
            exit;
        }
        if (($this->session->userdata('jabatan') != 'Kurikulum')&&($this->session->userdata('jabatan') != 'Superadmin')&&($this->session->userdata('jabatan') != 'Pegawai')&&($this->session->userdata('jabatan') != 'Guru')&&($this->session->userdata('jabatan') != 'Guru')) {
            $this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
            //$this->load->view('login');
            redirect('login');
            exit;
        }
    }

    public function index()
    {
        $data['nama'] = $this->session->Nama;
        $data['foto'] = $this->session->foto; 
        $data['username'] = $this->session->username;
        $this->template->load('kurikulum/dashboard','kurikulum/home' , $data);
    }

    public function nilaisiswa(){
        $data['nama'] = $this->session->Nama;
        $data['foto'] = $this->session->foto;
        $data['username'] = $this->session->username; 

        $this->load->model('M_data');
        $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
        $id_kelas_reguler_berjalan = @$this->uri->segment(4);
        $id_mapel = @$this->uri->segment(5);
        
        
        $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
        $id_kelas_reguler = $this->M_data->getKelas()->id_kelas_reguler;
        $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));

        $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();

        if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
        $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
        $data['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
        $data['siswa'] = $this->M_data->getNamasiswa()->result();
        $data['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();


        $mapel = $this->M_data->getMatapelajaran(array('kelas_reguler.id_kelas_reguler'=>$id_kelas_reguler_berjalan, 'kelas_reguler.id_tahun_ajaran'=>$id_tahun_ajaran));

        if ($id_mapel == "") { $id_mapel = @$data['mapel'][0]->id_mapel; }
        $data['mapel'] = $mapel;
        $data['id_mapel'] = $id_mapel;
        $kategorinilai = $this->M_data->getKatNilai();
        $jenis_na = $this->M_data->getJenisnilai();
        $data['jenis_na'] = $jenis_na;
        $data['kategorinilai'] = $kategorinilai;
        $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
        //echo $this->db->last_query();
        $data['siswaperkelas'] = $siswaperkelas;
        //$data['nilai_siswa'] = $this->M_data->getNilai()->result();
        $data['nilai_siswa'] = $this->M_data->getNilaiKelasMapel($id_kelas_reguler_berjalan, $id_mapel);

        foreach ($siswaperkelas as $rowsiswa) {
            foreach ($mapel as $rowmapel) {
                $np = 0;
                $nk = 0;


                foreach ($kategorinilai as $rowkategorinilai) {
                    
                    
                    $np = $np + @$this->M_data->getNilaiSiswa(array('nilai_siswa.nisn'=>$rowsiswa->nisn, 'nilai_siswa.mapel_id'=>$rowmapel->id_mapel, 'jenis_nilai_akhir.kode_na'=>'3', 'id_kategorinilai' => $rowkategorinilai->id_kategorinilai))->nilai;
                    $nk = $nk + @$this->M_data->getNilaiSiswa(array('nilai_siswa.nisn'=>$rowsiswa->nisn, 'nilai_siswa.mapel_id'=>$rowmapel->id_mapel, 'jenis_nilai_akhir.kode_na'=>'4', 'id_kategorinilai' => $rowkategorinilai->id_kategorinilai))->nilai;
                    }    
                
                $nilaisiswa_p[$rowsiswa->nisn][$rowmapel->id_mapel] = $np;
                $nilaisiswa_k[$rowsiswa->nisn][$rowmapel->id_mapel] = $nk;

            }
        }
        $data['nilaisiswa_p'] = @$nilaisiswa_p;
        $data['nilaisiswa_k'] = @$nilaisiswa_k;

          // $this->load->view('kurikulum/penilaian/penilaian/nilaisiswa',$data);
        $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/nilaisiswa',$data);
    }


public function tambah_nilai(){
    $nisn=$this->input->post('nisn');
    $katnilai=$this->input->post('katnilai');
    $jenis_na=$this->input->post('jenis_na');
    $mapel=$this->input->post('mapel');
    $nilai=$this->input->post('nilai');
    // if ($nilai>"100") {
    //     $nilai="100";
    // }else{

    // }
    $data=array();
    $temp= count($this->input->post('nisn'));
    for ($i=0; $i <$temp ; $i++) { 
        if ($nilai[$i] == "") { 
        }else{
            $data[]= array(
                'NISN'=>$nisn[$i],
                'kategori_nilai_id'=>$katnilai,
                'jenis_na_id'=>$jenis_na,
                'mapel_id'=>$mapel,
                'Nilai_siswa'=>$nilai[$i]
            );
        }
        
    }
    
    $this->M_data->tambahdatabatch($data,'nilai_siswa');
    // $this->load->view('penilaian/nilaisiswa');
    // $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/nilaisiswa',$data);     
    redirect('penilaian/penilaian/nilaisiswa');

}

public function ubah_nilai(){


    $nisn=$this->input->post('nisn');
    $katnilai=$this->input->post('katnilai');
    $jenis_na=$this->input->post('jenis_na');
    $mapel=$this->input->post('mapel');
    $nilai=$this->input->post('nilai');

    $data=array();
    $temp= count($this->input->post('nisn'));
    for ($i=0; $i <$temp ; $i++) { 
        if ($nilai[$i] == "") { //(is_null($nilai)) {

        }else{
            $data[]= array(
                'NISN'=>$nisn[$i],
                'kategori_nilai_id'=>$katnilai,
                'jenis_na_id'=>$jenis_na,
                'mapel_id'=>$mapel,
                'Nilai_siswa'=>$nilai[$i]
            );
        }
        
    }
    
    $this->M_data->editnilai($data,$this->uri->segment(4));
    $this->load->view('kurikulum/penilaian/penilaian/nilaisiswa');   
    // $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/nilaisiswa',$data); 
    redirect('penilaian/penilaian/nilaisiswa');
}

public function form_edit_nilai(){
    $this->load->model('penilaian/M_data');
    $data['f']=$this->M_data->selectNilai($this->uri->segment(3));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_nilai',$data);
}

public function hapus_nilai($id){
    $this->load->model('M_data');
    $where= array('id_nilai_siswa'=>$id);
    $table= 'nilai_siswa';
    $this->M_data->hapusdata($where,$table);

    redirect('penilaian/penilaian/nilaisiswa');
}

public function exportnilai() {


  $this->load->model('M_data');

    $id_kelas_reguler_berjalan = @$this->uri->segment(4);
    $id_mapel = @$this->uri->segment(5);
    $data['id_mapel'] = $id_mapel;
    $id_kategorinilai = @$this->uri->segment(6);
    $data['id_kategorinilai'] = $id_kategorinilai;
    $id_jenis_na = @$this->uri->segment(7);
    $data['id_jenis_na'] = $id_jenis_na;
    $this->load->model('M_data');
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $nama_kelas = @$this->M_data->selectKelasRegulerBerjalan2($id_kelas_reguler_berjalan)->nama_kelas;
    //echo $this->db->last_query();
    //print_r($nama_kelas);
    $data['nama_kelas'] = $nama_kelas;
    $mapel = @$this->M_data->getMatapelajaran(array('kelas_reguler_berjalan.id_kelas_reguler'=>$id_kelas_reguler_berjalan, 'kelas_reguler_berjalan.id_tahun_ajaran'=>$id_tahun_ajaran,'mapel.id_mapel'=>$id_mapel));
    // echo $this->db->last_query();
    // print_r($mapel);
    $nama_mapel = @$mapel[0]->nama_mapel; 
    $data['nama_mapel'] = $nama_mapel;
    if($id_jenis_na==4){
        $jenis_na = 'Keterampilan';
    }else {
        $jenis_na = 'Pengetahuan';
    }
    $data['jenis_na'] = $jenis_na;
    $kategori_nilai = @$this->M_data->getKatNilai(array("id_kategorinilai"=>$id_kategorinilai))[0]->kategori_nilai;
    $data['kategori_nilai'] = $kategori_nilai;
    
    $id_kelas_reguler = $this->M_data->getKelas()->id_kelas_reguler;
    $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    
    if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
    $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
    
    $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
    //echo $this->db->last_query();
    $data['siswaperkelas'] = $siswaperkelas;
    //$data['nilai_siswa'] = $this->M_data->getNilai()->result();
    $data['nilai_siswa'] = $this->M_data->getNilaiKelasMapel($id_kelas_reguler_berjalan, $id_mapel);
   
    foreach ($siswaperkelas as $rowsiswa) {
        //foreach ($mapel as $rowmapel) {
            $n = 0;
            //$nk = 0;


            //foreach ($kategorinilai as $rowkategorinilai) {
                
                
                $n = $n + @$this->M_data->getNilaiSiswa(array('nilai_siswa.nisn'=>$rowsiswa->nisn, 'nilai_siswa.mapel_id'=>$id_mapel, 'jenis_nilai_akhir.kode_na'=>$id_jenis_na, 'id_kategorinilai' => $id_kategorinilai))->nilai;
                //}    
            
            $nilaisiswa[$rowsiswa->nisn] = $n;
            //$nilaisiswa_k[$rowsiswa->nisn][$rowmapel->id_mapel] = $nk;

        //}
    }
    $data['nilaisiswa'] = @$nilaisiswa;
    //$data['nilaisiswa_k'] = @$nilaisiswa_k;

    $this->load->view('kurikulum/penilaian/penilaian/view_template_nilai',$data);

}


public function deskripsinilai(){
 $this->load->model('M_data');
 $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
 $id_kelas_reguler_berjalan = @$this->uri->segment(5);
    $id_mapel = @$this->uri->segment(6);
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $id_kelas_reguler = $this->M_data->getKelas()->id_kelas_reguler;
    $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['id_kelas_reguler']= $this->M_data->getkelasreguler(array('id_kelas_reguler'=>$id_kelas_reguler));
    //$data['id_kelas_reguler'] = $id_kelas_reguler;
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
    $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
    if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
    $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
    $data['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
    $data['siswa'] = $this->M_data->getNamasiswa()->result();
    $data['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();
    //$data['mapel'] = $this->M_data->getMapel()->result();

    $mapel = $this->M_data->getMatapelajaran(array('kelas_reguler_berjalan.id_kelas_reguler'=>$id_kelas_reguler_berjalan, 'kelas_reguler_berjalan.id_tahun_ajaran'=>$id_tahun_ajaran));
    if ($id_mapel == "") { $id_mapel = @$data['mapel'][0]->id_mapel; }
    $data['mapel'] = $mapel;
    $data['id_mapel'] = $id_mapel;
 $data['deskripsi_nilai'] = $this->M_data->getDeskripsinilai()->result();
 // $dataAll= $data1+$data;
 // $dataAll=array_merge($data,$data1);    
 // $this->load->view('penilaian/deskripsinilai',$data);
 $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/deskripsinilai',$data);
}

public function tambah_desknilai(){
    $this->load->model('M_data');
    $bts_a=$this->input->post('bts_a');
    $bts_b=$this->input->post('bts_b');
    $predikat=$this->input->post('predikat');
    $deskripsi=nl2br($this->input->post('deskripsi'));

    $data= array(
        'Nilai_atas'=>$bts_a,
        'Nilai_bawah'=>$bts_b,
        'predikat'=>$predikat,
        'deskripsi'=>$deskripsi
    );
    $this->M_data->tambahdata($data,'deskripsi_nilai');
    // $this->load->view('penilaian/deskripsinilai'); 
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/deskripsinilai',$data);    
    redirect('penilaian/penilaian/deskripsinilai');

}

public function ubah_desknilai(){

    $this->load->model('M_data');
    $id_desk=$this->input->post('id');
    $bts_a=$this->input->post('bts_a');
    $bts_b=$this->input->post('bts_b');
    $predikat=$this->input->post('predikat');
    $deskripsi=nl2br($this->input->post('deskripsi'));
    $data= array(
        'Nilai_atas'=>$bts_a,
        'Nilai_bawah'=>$bts_b,
        'predikat'=>$predikat,
        'deskripsi'=>$deskripsi
    );
    $this->M_data->editdesknilai($data,$this->uri->segment(4));
    // $this->load->view('penilaian/deskripsinilai');     
    redirect('penilaian/penilaian/deskripsinilai');
}

public function form_edit_deskripsi(){
    $this->load->model('M_data');
    $data['s']=$this->M_data->selectDesknilai($this->uri->segment(4));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_desknilai',$data);
}


public function hapus_desknilai($id){
    $this->load->model('M_data');
    $where= array('id_deskripsi'=>$id);
    $table= 'deskripsi_nilai';
    $this->M_data->hapusdata($where,$table);
    redirect('kurikulum/penilaian/
        penilaian/deskripsinilai');
}

public function kategorinilai(){
    $this->load->model('M_data');
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
    // $this->load->view('penilaian/kategorinilai',$data);
    $this->template->load('kurikulum/dashboard', 'kurikulum/penilaian/penilaian/kategorinilai',$data);
    
    
}
public function tambah_katnilai(){
    $this->load->model('M_data');
    $katnilai=$this->input->post('katnilai');
    $bobot=$this->input->post('bobot');
    $data= array(
        'kategori_nilai'=>$katnilai,
        'bobot'=>$bobot
    );
    $this->M_data->tambahdata($data,'kategori_nilai');
    $this->load->view('kurikulum/penilaian/penilaian/kategorinilai');     
    redirect('penilaian/penilaian/kategorinilai');
}

public function ubah_katnilai(){

    $this->load->model('M_data');
    $id_kat=$this->input->post('id');
    $katnilai=$this->input->post('katnilai');
    $bobot=$this->input->post('bobot');

    $data= array(
        'kategori_nilai'=>$katnilai,
        'bobot'=>$bobot
    );

    $this->M_data->editkategorinilai($data,$this->uri->segment(4));
    $this->load->view('kurikulum/penilaian/penilaian/kategorinilai');     
    redirect('penilaian/penilaian/kategorinilai');
}

public function form_edit_kategori(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectKatnilai($this->uri->segment(4));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_katnilai',$data);
}

public function hapus_katnilai($id){
    $this->load->model('M_data');
    $where= array('id_kategorinilai'=>$id);
    $table= 'kategori_nilai';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/penilaian/kategorinilai');

}

public function jenisNA(){
    $this->load->model('M_data');
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
    $data['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/jenisnilaiakhir',$data);
}

public function tambah_jenisnilai(){
    $this->load->model('M_data');
    $kode=$this->input->post('kode');
    $nama=$this->input->post('nama');
    $data= array(
        'kode_na'=>$kode,
        'jenis_na'=>$nama
    );
    $this->M_data->tambahdata($data,'jenis_nilai_akhir');
    $this->load->view('kurikulum/penilaian/penilaian/jenisnilaiakhir');     
    redirect('penilaian/penilaian/jenisNA');
}


public function ubah_JenisNilai(){

    $this->load->model('M_data');
    $id_kat=$this->input->post('id');
    $jenisNA=$this->input->post('jenisnilai');
    $kode=$this->input->post('kode');
    $data= array(
        'kode_na'=>$kode,
        'jenis_na'=>$jenisNA,
    );

    $this->M_data->editjenisnilai($data,$this->uri->segment(4));
    $this->load->view('kurikulum/penilaian/penilaian/jenisnilaiakhir');     
    redirect('penilaian/penilaian/jenisNA');
}

public function form_edit_jenisNilai(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectJenisnilai($this->uri->segment(4));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_jenisNilai',$data);
}

public function hapus_JenisNilai($id){
    $this->load->model('M_data');
    $where= array('id_jenis_na'=>$id);
    $table= 'jenis_nilai_akhir';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/penilaian/JenisNA');

}


public function rapor(){

    $this->load->model('M_data');
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $this->load->model('setting_model');
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['username'] = $this->session->username;
    $id_kelas_reguler_berjalan = @$this->uri->segment(4);
    $id_mapel = @$this->uri->segment(5);
    $setting = $this->setting_model->rowSetting(1);
    $data['setting'] = $setting;
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
    $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
    if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
    $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
    $data['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
    $data['siswa'] = $this->M_data->getNamasiswa()->result();
    $data['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();
    //$data['mapel'] = $this->M_data->getMapel()->result();

    $mapel = $this->M_data->getMatapelajaran(array('kelas_reguler.id_kelas_reguler'=>'1', 'kelas_reguler.id_tahun_ajaran'=>$id_tahun_ajaran));
    if ($id_mapel == "") { $id_mapel = @$data['mapel'][0]->id_mapel; }
    $data['mapel'] = $mapel;
    $data['id_mapel'] = $id_mapel;
    $kategorinilai = $this->M_data->getKatNilai();
    $data['kategorinilai'] = $kategorinilai;
    $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
    //echo $this->db->last_query();
    $data['siswaperkelas'] = $siswaperkelas;


    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/rapor',$data);
}

public function cetak_rapor() {
    $this->load->model('M_data');
    $this->load->model('setting_model');
    $nisn = @$this->uri->segment(4);
    $data['nisn'] = $nisn;
    $id_kelas_reguler_berjalan = @$this->uri->segment(5);
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $mapel = $this->M_data->getMatapelajaran(array('kelas_reguler.id_kelas_reguler'=>'1', 'kelas_reguler.id_tahun_ajaran'=>$id_tahun_ajaran));
    $setting = $this->setting_model->rowSetting(1);
    $predikat = $this->M_data->getPredikat();
    $data['predikat']= $predikat;
    $data['setting'] = $setting;
    $tahun = substr($setting->tanggal_selesai, 0, 4);
    $semester = $setting->semester;
    $semester = 1; 
    if ($setting->semester == 'ganjil') {
        $nosemester = 1; 
    } else {
        $nosemester = 2; 
    }
    $data['semester'] = $semester;

    $data['mapel'] = $mapel;
    $kategorinilai = $this->M_data->getKatNilai();
    $data['kategorinilai'] = $kategorinilai;
    foreach ($mapel as $rowmapel) {
        $np = 0;
        $nk = 0;
        foreach ($kategorinilai as $rowkategorinilai) {
            $np = $np + @$this->M_data->getNilaiSiswa(array('nilai_siswa.nisn'=>$nisn, 'nilai_siswa.mapel_id'=>$rowmapel->id_mapel, 'jenis_nilai_akhir.kode_na'=>'3', 'id_kategorinilai' => $rowkategorinilai->id_kategorinilai))->nilai;
            $nk = $nk + @$this->M_data->getNilaiSiswa(array('nilai_siswa.nisn'=>$nisn, 'nilai_siswa.mapel_id'=>$rowmapel->id_mapel, 'jenis_nilai_akhir.kode_na'=>'4', 'id_kategorinilai' => $rowkategorinilai->id_kategorinilai))->nilai;    
            // $nilaip = @$this->M_data->getNilaiSiswa2($nisn, $rowmapel->id_mapel, '1', $rowkategorinilai->id_kategorinilai);
            // $np = $np + @$nilaip->nilai;
            // $nilaik = @$this->M_data->getNilaiSiswa2($nisn, $rowmapel->id_mapel, '3', $rowkategorinilai->id_kategorinilai);
            // $nk = $nk + @$nilaik->nilai;    
        }
        //echo $this->db->last_query();
        $nilaisiswa_p[$rowmapel->id_mapel] = $np;
        $nilaisiswa_k[$rowmapel->id_mapel] = $nk;

        $predikatsiswa_p[$rowmapel->id_mapel] = @$this->M_data->getPredikat("mapel_id = '".$rowmapel->id_mapel."' AND (Nilai_atas >= '$np') AND (Nilai_bawah <= '$np')")->predikat;
        $predikatsiswa_k[$rowmapel->id_mapel] = @$this->M_data->getPredikat("mapel_id = '".$rowmapel->id_mapel."' AND (Nilai_atas >= '$nk') AND (Nilai_bawah <= '$nk')")->predikat;
        //echo $this->db->last_query();
        
        $kompetensi_p[$rowmapel->id_mapel] = @$this->M_data->getKompetensi2($rowmapel->id_mapel, '3');
        $kompetensi_k[$rowmapel->id_mapel] = @$this->M_data->getKompetensi2($rowmapel->id_mapel, '4');
    }
    $data['nilaisiswa_p'] = @$nilaisiswa_p;
     $data['nilaisiswa_k'] = @$nilaisiswa_k;
     $data['predikatsiswa_p'] = @$predikatsiswa_p;
     $data['predikatsiswa_k'] = @$predikatsiswa_k;
     $data['kompetensi_p'] = @$kompetensi_p;
     $data['kompetensi_k'] = @$kompetensi_k;
     //print_r($mapel);

     $this->load->model('tahunajaran_model');
    $datsemester = $this->tahunajaran_model->Getsemester();

    //foreach ($siswaperkelas as $rowsiswa) {

        //for ($i=1;$i<=2;$i++) {

          $data['datpresensisemester'][$nisn]['H'] = @$this->M_data->getpresensisemester($datsemester[$nosemester-1]->tanggal_mulai, $datsemester[$nosemester-1]->tanggal_selesai, $nisn, 'H', $id_kelas_reguler_berjalan)->jml;
            //echo $this->db->last_query();
          $data['datpresensisemester'][$nisn]['S'] = @$this->M_data->getpresensisemester($datsemester[$nosemester-1]->tanggal_mulai, $datsemester[$nosemester-1]->tanggal_selesai, $nisn, 'S', $id_kelas_reguler_berjalan)->jml;
          $data['datpresensisemester'][$nisn]['I'] = @$this->M_data->getpresensisemester($datsemester[$nosemester-1]->tanggal_mulai, $datsemester[$nosemester-1]->tanggal_selesai, $nisn, 'I', $id_kelas_reguler_berjalan)->jml;
          $data['datpresensisemester'][$nisn]['A'] = @$this->M_data->getpresensisemester($datsemester[$nosemester-1]->tanggal_mulai, $datsemester[$nosemester-1]->tanggal_selesai, $nisn, 'A', $id_kelas_reguler_berjalan)->jml;
        //}

    //  }

    $siswa = $this->M_data->getSiswa($nisn, $id_tahun_ajaran);
    $data['siswa'] = $siswa;

    $kepsek = $this->M_data->getPegawai(array("pegawai.id_jabatan"=>"1"));
    //echo $this->db->last_query();
    $data['kepsek'] = $kepsek;

    $kelasreg = $this->M_data->selectKelasRegulerBerjalan($id_kelas_reguler_berjalan);
    //echo $this->db->last_query();
    $nipwali = $kelasreg->wali_kelas;

    //echo $nipwali;
    $wali = $this->M_data->getPegawai(array("pegawai.nip"=>$nipwali));
    //echo $this->db->last_query();
    $data['wali'] = $wali;

    $prestasi = $this->M_data->getPrestasi(array("nisn"=>$nisn, "tahun"=>$tahun));
    $data['prestasi'] = $prestasi;

    $nilai_ekstrakurikuler = $this->M_data->getNilaiEsktrakurikuler(array("nisn"=>$nisn));
    $data['nilai_ekstrakurikuler'] = $nilai_ekstrakurikuler;  
    
    $this->load->view('kurikulum/penilaian/KBM/view_rapor_excel', $data);
}

public function Kompetensi(){
    $this->load->model('M_data');
    $id_kelas_reguler_berjalan = @$this->uri->segment(4);
    $id_mapel = @$this->uri->segment(5);
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;

    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['id_kelas_reguler']= $this->M_data->getkelasreguler(array('id_kelas_reguler'=>$id_kelas_reguler));
    //$data['id_kelas_reguler'] = $id_kelas_reguler;
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
    $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
    if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
    $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
    $data['kategori_nilai'] = $this->M_data->getKategorinilai()->result();
    $data['siswa'] = $this->M_data->getNamasiswa()->result();
    $data['jenis_nilai_akhir'] = $this->M_data->getJenisnilai()->result();
    //$data['mapel'] = $this->M_data->getMapel()->result();

    $mapel = $this->M_data->getMatapelajaran(array('kelas_reguler.id_kelas_reguler'=>$id_kelas_reguler_berjalan, 'kelas_reguler.id_tahun_ajaran'=>$id_tahun_ajaran));
    if ($id_mapel == "") { $id_mapel = @$data['mapel'][0]->id_mapel; }
    $data['mapel'] = $mapel;
    $data['id_mapel'] = $id_mapel;
    //$data['k_dasar'] = $this->M_data->getKompetensi()->result();
    $data['k_dasar'] = $this->M_data->getKompetensi($id_mapel);
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/Kompetensi',$data);
}

    

public function tambah_kompetensi(){
    $this->load->model('M_data');
    
    $id_mapel=$this->input->post('id_mapel');
    $id_jenis_na=$this->input->post('id_jenis_na');
    $kode_kd=$this->input->post('kode_kd');
    $deskripsi_kd=nl2br($this->input->post('deskripsi_kd'));
    $data= array(
        'id_mapel'=>$id_mapel,
        'id_jenis_na'=>$id_jenis_na,
        'kode_kd'=>$kode_kd,
        'deskripsi_kd'=>$deskripsi_kd
    );
    $this->M_data->tambahdata($data,'k_dasar');
    
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/Kompetensi',$data);    
    redirect('penilaian/penilaian/Kompetensi');
}

public function ubah_kompetensi(){

    $this->load->model('M_data');
    $id_kat=$this->input->post('id_kd');
    $kompetensi=$this->input->post('kompetensi');
    $bobot=$this->input->post('bobot');

    $data= array(
        'kategori_nilai'=>$kompetensi,
        'bobot'=>$bobot
    );

    $this->M_data->editKompetensi($data,$this->uri->segment(5));
    // $this->load->view('penilaian/Kompetensi');     
    // redirect('penilaian/Kompetensi');
    $this->template->load('kurikulum/dashboard','kurikulum/penilaian/penilaian/Kompetensi',$data);    
    redirect('penilaian/penilaian/Kompetensi');
}

public function form_edit_kompetensi(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectKompetensi($this->uri->segment(6));
    $this->load->view('kurikulum/penilaian/penilaian/edit/edit_kompetensi',$data);
}

public function hapus_kompetensi($id){
    $this->load->model('M_data');
    $where= array('id_kd'=>$id);
    $table= 'k_dasar';
    $this->M_data->hapusdata($where,$table);
    redirect('penilaian/penilaian/Kompetensi');

}

// public function importnilai(){
//     $id_kategorinilai=$this->input->post('katnilai2');
//     $id_jenis_na=$this->input->post('jenis_na2');
//     $id_mapel=$this->input->post('id_mapel2');
//     $id_kelas_reguler_berjalan=$this->input->post('id_kelas_reguler_berjalan2');

//   require('php-excel-reader/excel_reader2.php');
//   require('SpreadsheetReader.php');

//   $config['upload_path']          = './assets/';
//   $config['allowed_types']        = 'xlsx';
//   $config['max_size']             = 10000;

//   $this->load->library('upload', $config);

//   if ( ! $this->upload->do_upload('filenilai'))
//   {
//     echo $this->upload->display_errors();
//     exit; 
//   }

//   $this->load->model('M_data');

//     $Reader = new SpreadsheetReader("assets/".$this->upload->data('file_name')); 
//     $Sheets = $Reader -> Sheets();

//     foreach ($Sheets as $Index => $Name)
//     {
//       $Reader -> ChangeSheet($Index);

//       $zz=0;
//       foreach ($Reader as $Row)
//       {
//         $zz++;
//         if ($zz>=7){
            
//               if (($Row[1] != "") && ($Row[3] != "")) {
               
//                 $datnilai = $this->M_data->cekNilai($Row[1], $id_mapel, $id_kategorinilai, $id_jenis_na);
//                 if ($datnilai) {
//                   $arrdata = array(
//                     'nisn'=>$Row[1],
//                     'kategori_nilai_id'=>$id_kategorinilai,
//                     'jenis_na_id'=>$id_jenis_na,
//                     'mapel_id'=>$id_mapel,
//                     'Nilai_siswa'=>$Row[3]
//                   );
//                   $this->M_data->editnilai($arrdata, $datnilai->id_nilai_siswa);
                  
//                 } else {
//                   $arrdata = array(
//                     'nisn'=>$Row[1],
//                     'kategori_nilai_id'=>$id_kategorinilai,
//                     'jenis_na_id'=>$id_jenis_na,
//                     'mapel_id'=>$id_mapel,
//                     'Nilai_siswa'=>$Row[3]
//                   );
//                   $this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
//                   $this->M_data->tambahdata($arrdata, 'nilai_siswa');
                 
//                 }
//               }
//           }
//         }
//       break;
//     }
//     redirect('penilaian/penilaian/nilaisiswa');

//   }
// }

public function importnilai(){
    $id_kategorinilai=$this->input->post('katnilai2');
    $id_jenis_na=$this->input->post('jenis_na2');
    $id_mapel=$this->input->post('id_mapel2');
    $id_kelas_reguler_berjalan=$this->input->post('id_kelas_reguler_berjalan2');
  require('php-excel-reader/excel_reader2.php');
  require('SpreadsheetReader.php');

  $config['upload_path']          = './assets/';
  $config['allowed_types']        = 'xlsx';
  $config['max_size']             = 10000;
    //$config['max_width']            = 10240;
    //$config['max_height']           = 7680;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('filenilai'))
  {
        //redirect('akademik/presensi'); 
    echo $this->upload->display_errors();
    exit; 
  }
    //else
    //{
    //    $arrdata['simbol_kaldik'] = $this->upload->data('file_name'); 
    //}
  $this->load->model('M_data');

    $Reader = new SpreadsheetReader("assets/".$this->upload->data('file_name')); //'example.xlsx');
    $Sheets = $Reader -> Sheets();

    foreach ($Sheets as $Index => $Name)
    {
      //echo 'Sheet #'.$Index.': '.$Name;

      $Reader -> ChangeSheet($Index);

      $zz=0;
      foreach ($Reader as $Row)
      {
        $zz++;
        if ($zz>=7){
            //print_r($Row);
            //for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $Row[1], $Row[2]);$i++) {
              if (($Row[1] != "") && ($Row[3] != "")) {
                //echo $Row[1]." ".$Row[3]."<br/>";
                $datnilai = $this->M_data->cekNilai($Row[1], $id_mapel, $id_kategorinilai, $id_jenis_na);
                if ($datnilai) {
                  $arrdata = array(
                    'nisn'=>$Row[1],
                    'kategori_nilai_id'=>$id_kategorinilai,
                    'jenis_na_id'=>$id_jenis_na,
                    'mapel_id'=>$id_mapel,
                    'Nilai_siswa'=>$Row[3]
                  );
                  $this->M_data->editnilai($arrdata, $datnilai->id_nilai_siswa);
                  // echo $this->db->last_query()."<br/>";
                } else {
                  $arrdata = array(
                    'nisn'=>$Row[1],
                    'kategori_nilai_id'=>$id_kategorinilai,
                    'jenis_na_id'=>$id_jenis_na,
                    'mapel_id'=>$id_mapel,
                    'Nilai_siswa'=>$Row[3]
                  );
                  $this->session->set_flashdata("warning",'<script> swal( "Berhasil" ,  "Data tersimpan !" ,  "success" )</script>');
                  $this->M_data->tambahdata($arrdata, 'nilai_siswa');
                  // echo $this->db->last_query()."<br/>";
                }
              }
            //}
          }
        }
      break; // supaya yg dibaca hanya sheet 1
    }

    redirect('penilaian/penilaian/nilaisiswa');

  }
}


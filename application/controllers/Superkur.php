<?php
class Superkur extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('penilaian/M_data');
    $this->load->model('penilaian/pegawai_model');


    $this->load->view('siswa/penilaian_header');
    if ($this->session->userdata('isLogin') != TRUE) {
      $this->session->set_flashdata("warning",'<script> swal( "Maaf Anda Belum Login!" ,  "Silahkan Login Terlebih Dahulu" ,  "error" )</script>');
      redirect('login');
      exit;
    }
    if (($this->session->userdata('jabatan') != 'Kurikulum') && ($this->session->userdata('jabatan') != 'Guru')&& ($this->session->userdata('jabatan') != 'Karyawan') && ($this->session->userdata("jabatan") != "Superadmin")) 
    {
      $this->session->set_flashdata("warning",'<script> swal( "Anda Tidak Berhak!" ,  "Silahkan Login dengan Akun Anda" ,  "error" )</script>');
            //$this->load->view('login');
      redirect('login');
      exit;
    }

  }
  function index(){
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['jabatan']= $this->session->jabatan;
    $data['username'] = $this->session->username; 
    $this->load->view('superadmin/dashboard','superadmin/home',$data);
  }

  public function nilaisiswa(){
    $this->load->model('penilaian/M_data');
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $id_kelas_reguler_berjalan = @$this->uri->segment(4);
    $id_mapel = @$this->uri->segment(5);
    $data['nama'] = $this->session->Nama;
        $data['foto'] = $this->session->foto;
        $data['username'] = $this->session->username; 
    
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
   
    $data['siswaperkelas'] = $siswaperkelas;
   
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

    $this->template->load('superadmin/dashboard','siswa/nilaisiswa',$data);
}


//MENU KALDIK
  function kaldik(){
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
     $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;

     $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
     $tanggal_mulai_ajaran = $this->M_data->getsetting()->tanggal_mulai;
     $tanggal_selesai_ajaran = $this->M_data->getsetting()->tanggal_selesai;
     $data['tanggal_mulai_ajaran'] = $tanggal_mulai_ajaran;
     $data['tanggal_selesai_ajaran'] = $tanggal_selesai_ajaran;

    $tahunajaran = $this->M_data->getTahunajaran();
    $data['tahunajaran']= $tahunajaran;
    // echo "<pre>";
    // print_r($tahunajaran);
    // echo "</pre>";
    $kaldik = $this->M_data->getkaldik($tanggal_mulai_ajaran, $tanggal_selesai_ajaran); //'2017-01-01', '2017-12-31');
//    $kaldik = $this->M_data->getkaldik($tahunajaran->tanggal_mulai, $tahunajaran->tanggal_selesai);
    $tanggallibur = $this->M_data->gettanggallibur($tanggal_mulai_ajaran, $tanggal_selesai_ajaran); //'2017-01-01', '2017-12-31');
        //echo $this->db->last_query();
        //print_r($kaldik);
    $libur=array();
    $simbol=array();
    foreach ($kaldik as $rowkaldik) {
      $awal = strtotime($rowkaldik->tgl_awal);
      $akhir = strtotime($rowkaldik->tgl_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->nama_kaldik;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->simbol_kaldik;
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }

    foreach ($tanggallibur as $rowtanggallibur) {
      $awal = strtotime($rowtanggallibur->tanggal_awal);
      $akhir = strtotime($rowtanggallibur->tanggal_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowtanggallibur->nama_libur;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = 'libur_nasional.png';
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }
        //print_r($libur);
        //print_r($simbol);
    $data['libur'] = $libur;
    $data['simbol'] = $simbol;
    $data['kaldik'] = $kaldik;
    // $this->load->view('siswa/kaldik', $data);
    $this->template->load('superadmin/dashboard','superadmin/kurikulum/penilaian/kbm/kaldik', $data);
  }

  function printkaldik(){
    $kaldik = $this->M_data->getkaldik('2017-01-01', '2017-12-31');
    $tanggallibur = $this->M_data->gettanggallibur('2017-01-01', '2017-12-31');
        //echo $this->db->last_query();
        //print_r($kaldik);
    foreach ($kaldik as $rowkaldik) {
      $awal = strtotime($rowkaldik->tgl_awal);
      $akhir = strtotime($rowkaldik->tgl_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->nama_kaldik;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->simbol_kaldik;
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }

    foreach ($tanggallibur as $rowtanggallibur) {
      $awal = strtotime($rowtanggallibur->tanggal_awal);
      $akhir = strtotime($rowtanggallibur->tanggal_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowtanggallibur->nama_libur;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = 'libur_nasional.png';
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }
        //print_r($libur);
        //print_r($simbol);
    $data['libur'] = $libur;
    $data['simbol'] = $simbol;
    $data['kaldik'] = $kaldik;
    
    $this->template->load('superadmin/dashboard','superadmin/kurikulum/penilaian/kbm/kaldik', $data);
  }

  function tambah_kaldik(){
    $arrdata = array(
      'nama_kaldik'=>$this->input->post("nama_kaldik"),
      //'simbol_kaldik'=>$this->input->post("simbol_kaldik"),
      'tgl_awal'=>$this->input->post("tgl_awal"),
      'tgl_akhir'=>$this->input->post("tgl_akhir")
    );

    $config['upload_path']          = './assets/simbol/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('simbol_kaldik'))
    {
      $arrdata['simbol_kaldik'] = "";  
    }
    else
    {
      $arrdata['simbol_kaldik'] = $this->upload->data('file_name'); 
    }
    
    $this->M_data->tambahdata($arrdata, 'kaldik');
    redirect('superkur/kaldik');
  }

  function hapus_kaldik($id){
    $this->load->model('M_data');
    $where= array('id_kaldik'=>$id);
    $table= 'kaldik';
    $this->M_data->hapusdata($where,$table);
    redirect('superkur/kaldik');
  }

  public function form_edit_kaldik(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectKaldik($this->uri->segment(3));
    $this->load->view('superadmin/kurikulum/penilaian/edit/edit_kaldik',$data);
  }
  public function ubah_kaldik(){

    $this->load->model('M_data');
    //$id_kaldik=$this->input->post('id');
    $nama_kaldik=$this->input->post('nama_kaldik');
    //$simbol_kaldik=$this->input->post('simbol_kaldik');
    $tgl_awal=$this->input->post('tgl_awal');
    $tgl_akhir=$this->input->post('tgl_akhir');

    $data= array(
      'nama_kaldik'=>$nama_kaldik,
        //'simbol_kaldik'=>$simbol_kaldik,
      'tgl_awal'=>$tgl_awal,
      'tgl_akhir'=>$tgl_akhir
    );

    $config['upload_path']          = './assets/simbol/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('simbol_kaldik'))
    {
        //$data['simbol_kaldik'] = "";  
    }
    else
    {
      $data['simbol_kaldik'] = $this->upload->data('file_name'); 
    }

    $this->M_data->editkaldik($data,$this->uri->segment(3));
    //$this->load->view('penilaian/kategorinilai');     
    //echo $this->db->last_query();
    redirect('superkur/kaldik');
  }

  //MENU KURIKULUM
  function kurikulum(){
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $tahunajaran = $this->M_data->getTahunajaran()->tahun_ajaran;
    $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
    $data['kurikulum'] = $this->M_data->getKurikulum();
    //$data['nama_kurikulum'] = $this->M_data->getKurikulum(); 
    //$data['nama_filekur'] = $this->M_data->getKurikulum();   
    $data['id_tahun_ajaran'] = $id_tahun_ajaran;
    $data['tahun_ajaran'] = $tahunajaran;
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username;
    // $this->load->view('siswa/kurikulum',$data);
    $this->template->load('superadmin/dashboard','superadmin/kurikulum/penilaian/kbm/kurikulum',$data);
  }

  function tambah_kurikulum(){
   $arrdata = array(
    'nama_kurikulum'=>$this->input->post("nama_kurikulum"),
      //'simbol_kaldik'=>$this->input->post("simbol_kaldik"),
      //'nama_filekur'=>$this->input->post("nama_filekur"),
    'tahunajaran_id'=>$this->input->post("tahunajaran_id")
  );

   $config['upload_path'] = './assets/penilaian/dokumen_kurikulum/'; 
    //$config['file_name'] = $fileName;
   $config['allowed_types'] = 'doc|docx|pdf|PDF';
   $config['max_size'] = 10000;

   $this->load->library('upload', $config);
   if ( ! $this->upload->do_upload('nama_filekur'))
   {
    $arrdata['nama_filekur'] = "";  
  }
  else
  {
    $arrdata['nama_filekur'] = $this->upload->data('file_name'); 
  }
  $this->M_data->tambahdata($arrdata, 'kurikulum');
  redirect("superkur/kurikulum");
}

  function hapus_kurikulum($id){
    $this->load->model('M_data');
    $where= array('id_kurikulum'=>$id);
    $table= 'kurikulum';
    $this->M_data->hapusdata($where,$table);
    redirect('superkur/kurikulum');
  }

  public function form_edit_kurikulum(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectkurikulum($this->uri->segment(4));
    $this->load->view('superadmin/kurikulum/penilaian/edit/edit_kurikulum',$data);
  }

  public function ubah_kurikulum(){

    $this->load->model('M_data');
    //$id_kaldik=$this->input->post('id');
    $nama_kurikulum=$this->input->post('nama_kurikulum');
    //$simbol_kaldik=$this->input->post('simbol_kaldik');
    $tahunajaran_id=$this->input->post('tahunajaran_id');
    

    $data= array(
      'nama_kurikulum'=>$nama_kurikulum,
        //'simbol_kaldik'=>$simbol_kaldik,
      'tahunajaran_id'=>$tahunajaran_id
    );

    $config['upload_path']          = './assets/penilaian/dokumen_kurikulum/';
    $config['allowed_types']        = 'doc|docx|pdf|PDF';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('nama_filekur'))
    {
        //$data['simbol_kaldik'] = "";  
    }
    else
    {
      $data['nama_filekur'] = $this->upload->data('nama_filekur'); 
    }

    $this->M_data->editkurikulum($data,$this->uri->segment(3));
    //$this->load->view('penilaian/kategorinilai');     
    //echo $this->db->last_query();
    redirect('superkur/kurikulum');
  }

//MENU PRESENSI
function presensi() {
  $data['nama'] = $this->session->Nama;
  $data['foto'] = $this->session->foto;
  $data['username'] = $this->session->username;

  $data['judul_tahun_ajaran'] = $this->M_data->getsetting()->tahun_ajaran;
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(4);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(6) != "") { $bln = $this->uri->segment(6); }
  if (@$this->uri->segment(5) != "") { $thn = $this->uri->segment(5); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  $tanggallibur = $this->M_data->gettanggallibur("$thn-$bln-01", "$thn-$bln-".date('t', strtotime("$thn-$bln-01")));

  $tanggalliburnasional = $this->M_data->gettanggalliburnasional($bln);

  $liburnasional = array();

  foreach ($tanggalliburnasional as $rowtanggalliburnasional) {
    $liburnasional[$bln][$rowtanggalliburnasional->tanggal_libur_nasional] = $rowtanggalliburnasional->nama_libur_nasional;
  }

  //print_r($liburnasional);

  $data['liburnasional'] = $liburnasional;

  $libur = array();

  foreach ($tanggallibur as $rowtanggallibur) {
      $awal = strtotime($rowtanggallibur->tanggal_awal);
      $akhir = strtotime($rowtanggallibur->tanggal_akhir);
      //echo $awal." ".$akhir;
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowtanggallibur->nama_libur;
        //echo date('Y', $tgl)." ".ltrim(date('m', $tgl), "0")." ".ltrim(date('d', $tgl), "0")."=".$rowtanggallibur->nama_libur;
        //$simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = 'libur_nasional.png';
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }

    //print_r($libur);

    $data['libur'] = $libur;

  foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
      }
    }

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }
  $this->template->load('superadmin/dashboard','superadmin/kurikulum/penilaian/kbm/presensisiswa',$data);
}

function cetak_presensi(){
  $data['nama'] = $this->session->Nama;
  $data['foto'] = $this->session->foto;
  $data['username'] = $this->session->username;
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(4);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
      }
    }

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }
  $this->load->view('siswa/view_cetak_presensi_bulan',$data);

}

function cetak_presensisem(){
  $data['nama'] = $this->session->Nama;
  $data['foto'] = $this->session->foto;
  $data['username'] = $this->session->username;
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(4);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
      }
    }

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }
  $this->load->view('siswa/view_cetak_presensi_semester',$data);

}

public function exportpresensi() {
  include_once("xlsxwriter.class.php");


  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
  $id_kelas_reguler_berjalan = @$this->uri->segment(4);
  $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
  $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
  if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $data['siswaperkelas'] = $siswaperkelas;

  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
  $data['bln'] = $bln;
  $data['thn'] = $thn;
  $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

  $this->load->model('tahunajaran_model');
  $datsemester = $this->tahunajaran_model->Getsemester();

  $dt[0][0] = 'No';
  $dt[0][1] = 'Bulan';
  $dt[0][2] = 'Tahun';
  $dt[0][3] = 'NISN';
  $dt[0][4] = 'Nama Siswa';
  $z=0;
  foreach ($siswaperkelas as $rowsiswa) {
    $z++;
      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
      $dt[0][$i+4] = $i; 
      $dt[$z][0] = $z;
      $dt[$z][1] = $bln;
      $dt[$z][2] = $thn;
      $dt[$z][3] = $rowsiswa->nisn;
      $dt[$z][4] = $rowsiswa->nama;
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
      $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
      $dt[$z][$i+4] = '';

      if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
        $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
        $dt[$z][$i+4] = $datpresensi->status_kehadiran;
        
      }
    }
      //$dt[0] = $arr;

    for ($i=1;$i<=12;$i++) {

      $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

    for ($i=1;$i<=2;$i++) {

      $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
      $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
    }

  }

  $writer = new XLSXWriter();
  $writer->writeSheet($dt);
  $writer->writeToFile('output.xlsx');

  header('Content-Description: File Transfer');
  header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment; filename=\"".basename('presensi-'.'$d->nama_kelas'.'-'.$thn.'-'.$bln.'.xlsx')."\"");
  header("Content-Transfer-Encoding: binary");
  header("Expires: 0");
  header("Pragma: public");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Length: ' . filesize('output.xlsx')); //Remove

ob_clean();
flush();

readfile('output.xlsx');
unlink('output.xlsx');
exit(0);

}

public function simpanpresensi(){
  $this->load->model('penilaian/M_data');
  $bln = date('m');
  $thn = date('Y');
  if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
  if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
  $id_kelas_reguler_berjalan=$this->input->post('id_kelas_reguler_berjalan');
  $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;

  $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
  $siswaperkelas = $siswaperkelas;
  foreach ($siswaperkelas as $rowsiswa) {
      //for($i=1;$i<=date('t');$i++) {
    for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
      if($this->input->post("presensi_".$rowsiswa->nisn."_".$i) != "") {

       $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
       if ($datpresensi) {
        $arrdata = array(
          'tanggal'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
          'status_kehadiran'=>$this->input->post("presensi_".$rowsiswa->nisn."_".$i),
          'NISN'=>$rowsiswa->nisn,
          'kelas_berjalan_id'=>$id_kelas_reguler_berjalan
        );

        $this->M_data->editpresensi($arrdata, $datpresensi->id_presensi);
      } else {
        $arrdata = array(
          'tanggal'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
          'status_kehadiran'=>$this->input->post("presensi_".$rowsiswa->nisn."_".$i),
          'NISN'=>$rowsiswa->nisn,
          'kelas_berjalan_id'=>$id_kelas_reguler_berjalan
        );
        $this->M_data->tambahdata($arrdata, 'presensi_siswa');
      }
    }
  }
}

redirect('superkur/presensi');

}

public function importpresensi(){
  require('php-excel-reader/excel_reader2.php');
  require('SpreadsheetReader.php');

  $config['upload_path']          = './assets/';
  $config['allowed_types']        = 'xlsx';
  $config['max_size']             = 10000;
    //$config['max_width']            = 10240;
    //$config['max_height']           = 7680;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('filepresensi'))
  {
        //redirect('akademik/presensi'); 
    echo $this->upload->display_errors();
    exit; 
  }
    //else
    //{
    //    $arrdata['simbol_kaldik'] = $this->upload->data('file_name'); 
    //}
  $this->load->model('penilaian/M_data');

    $Reader = new SpreadsheetReader("assets/".$this->upload->data('file_name')); //'example.xlsx');
    $Sheets = $Reader -> Sheets();

    foreach ($Sheets as $Index => $Name)
    {
      //echo 'Sheet #'.$Index.': '.$Name;

      $Reader -> ChangeSheet($Index);

      foreach ($Reader as $Row)
      {
        //print_r($Row);
        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $Row[1], $Row[2]);$i++) {
          if (($Row[1] != "") && ($Row[2] != "") && ($Row[3] != "") && ($Row[$i+4] !="")) {
            $datpresensi = $this->M_data->getpresensihari($Row[2].'-'.$Row[1].'-'.substr($i+100, 1, 2), $Row[3], $this->input->post('kelasimportpresensi'));
            if ($datpresensi) {
              $arrdata = array(
                'tanggal'=>($Row[2].'-'.$Row[1].'-'.substr($i+100, 1, 2)),
                'status_kehadiran'=>$Row[$i+4],
                'NISN'=>$Row[3],
                'kelas_berjalan_id'=>$this->input->post('kelasimportpresensi')
              );

              $this->M_data->editpresensi($arrdata, $datpresensi->id_presensi);
            } else {
              $arrdata = array(
                'tanggal'=>($Row[2].'-'.$Row[1].'-'.substr($i+100, 1, 2)),
                'status_kehadiran'=>$Row[$i+4],
                'NISN'=>$Row[3],
                'kelas_berjalan_id'=>$this->input->post('kelasimportpresensi')
              );
              $this->M_data->tambahdata($arrdata, 'presensi_siswa');
            }
          }
        }
      }

      break; // supaya yg dibaca hanya sheet 1
    }

    redirect('superkur/presensi');

  }
  
}


?>
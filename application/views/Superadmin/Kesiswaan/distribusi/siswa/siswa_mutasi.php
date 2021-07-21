<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Pengisian Data Diri Siswa Mutasi<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/siswa/home">Dashboard</a></li>
      </ol>
    </section>

<section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- include message for error and success -->
      <?php $this->load->view('common/messages') ?>
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" >Petunjuk Pengisian </a></li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Siswa </a></li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" >Data Orang Tua dan Wali </a></li>
              </ul>

                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <center><p>Petunjuk Pengisian Formulir Daftar Ulang Siswa Mutasi Masuk</p></center>
                        <p>Formulir Daftar Ulang Siswa Mutasi Masuk memiliki 3 tab, yaitu :
                        <p> 1. Tab Petunjuk</p>
                        <p>Berisi pengisian Petunjuk pengisian formulir daftar ulang siswa mutasi masuk. Harap membaca petunjuk sebelum melakukan pengisian formulir ini. Disarankan untuk mengisi formulir secara urut, Kemudian "simpan" isian formulir di setiap tab nya. Setelah semua pengisian selesai, segera lakukan "logout" (panel "logout" ada di sebelah kanan atas) dan segera serahkan berkas kepada pihak sekolah.</p>
                        <p> 2. Tab Data Siswa</p>
                        <p>Tab ini merupakan formulir data siswa. Berisi data pokok dan data tambahan. Harap diisi secara lengkap dan benar. Tab ini wajib diisi</p>
                        <p> 3. Tab Data Orang Tua dan Wali Siswa </p>
                        <p>Tab ini merupakan formulir data orang tua kandung siswa dan wali. Harap diisi secara lengkap dan benar. Tab ini wajib diisi </p>
                        </p>
                        </div>



                        <div class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <!-- <?php echo $this->session->flashdata('pesan'); ?> -->
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/save_siswa_mutasi_data_siswa/'.$row_siswa->nisn);?>" enctype="multipart/form-data">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                    <center><h3>Data Pokok Siswa</h3></center>
                    <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" id="nama_pendaftar_mutasi" namefor="first-name">Nama Lengkap* </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" id="nama" name="nama" readonly value="<?php echo $row_siswa->nama;?>">
                  </div>
                  </div>
                     <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">NISN* </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" id="nisn" name="nisn" readonly value="<?php echo $row_siswa->nisn;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="tempat_lahir" value="<?php echo $row_siswa->tempat_lahir;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row_siswa->tanggal_lahir;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Induk Siswa* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="no_induk_siswa" value="<?php echo $row_siswa->no_induk_siswa;?>">
                  </div>
                  </div>
                  <center><h3>Data Tambahan Siswa</h3></center>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Foto* </label>
                    <div class="col-sm-4 form-group">
                      <img src="<?php echo base_url();?>assets/distribusi/foto_siswa/<?php echo $row_siswa->foto;?>" class="col-sm-5">
                      <!-- <img class="profile-user-img" src="<?php echo base_url();?>/assets/distribusi/foto_siswa/<?php echo $row_siswa->foto; ?>" alt="Belum Ada Foto Siswa"> -->
                      <input required="required" type="file" class="form-control" name="foto" accept="image/*">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">NIK* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nik" value="<?php echo $row_siswa->nik;?>">
                  </div>
                  </div>


                   <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Jenis Kelamin* </label>
                    <div class="col-sm-4 form-group">
                  <select class="form-control" name="jenis_kelamin" required="required">
                  <option selected disabled value ="">Pilih Gender</option>
                  <option value="Laki-Laki" <?php if($row_siswa->jenis_kelamin=="Laki-Laki") {echo "selected";} ?>> Laki-Laki </option>
                  <option value="Perempuan" <?php if($row_siswa->jenis_kelamin=="Perempuan") {echo "selected";} ?>> Perempuan </option>
                  </select>
                  </div>
                </div>

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama* </label>
                    <div class="col-sm-4 form-group">
                    <select required="required" name="agama" value="<?php echo $row_siswa->agama; ?>">
                              <option value="Islam" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Islam") echo "selected";?>> Islam </option>
                              <option value="Kristen" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Kristen") echo "selected";?>> Kristen </option>
                              <option value="Katholik" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Katholik") echo "selected";?>> Katholik </option>
                              <option value="Hindu" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Hindu") echo "selected";?>> Hindu </option>
                              <option value="Budha" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Budha") echo "selected";?>> Budha </option>
                              <option value="Lainnya" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Lainnya") echo "selected";?>> Lainnya </option>
                            </select>
                  </div>
                </div>
                    

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Berkebutuhan khusus* </label>
                    <div class="col-sm-4 form-group">
                 <select required="required" name="berkebutuhan_khusus" value="<?php echo $row_siswa->berkebutuhan_khusus; ?>">
                            <option value="Tidak" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Tidak") echo "selected";?>> Tidak </option>
                              <option value="Netra" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Netra") echo "selected";?>> Netra </option>
                              <option value="Rungu" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Rungu") echo "selected";?>> Rungu </option>
                              <option value="Grahita Ringan" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Grahita Ringan") echo "selected";?>> Grahita Ringan </option>
                              <option value="Grahita Sedang" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Grahita Sedang") echo "selected";?>> Grahita Sedang </option>
                              <option value="Daksa Ringan" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Daksa Ringan") echo "selected";?>> Daksa Ringan </option>
                              <option value="Daksa Sedang" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Daksa Sedang") echo "selected";?>> Daksa Sedang </option>
                              <option value="Laras" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Laras") echo "selected";?>> Laras </option>
                              <option value="Wicara" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Wicara") echo "selected";?>> Wicara </option>
                              <option value="Tuna Ganda" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Tuna Ganda") echo "selected";?>> Tuna Ganda </option>
                              <option value="Hiperaktif" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Hiperaktif") echo "selected";?>> Hiperaktif </option>
                              <option value="Cerdas Istimewa" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Cerdas Istimewa") echo "selected";?>> Cerdas Istimewa </option>
                              <option value="Bakat Istimewa" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Bakat Istimewa") echo "selected";?>> Bakat Istimewa </option>
                              <option value="Kesulitan Belajar" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Kesulitan Belajar") echo "selected";?>> Kesulitan Belajar </option>
                              <option value="Narkoba" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Narkoba") echo "selected";?>> Narkoba </option>
                              <option value="Indigo" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Indigo") echo "selected";?>> Indigo </option>
                              <option value="Down Syndrome" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Down Syndrome") echo "selected";?>> Down Syndrome </option>
                              <option value="Autis" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Autis") echo "selected";?>> Autis </option>
                              <option value="Terbelakang" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Terbelakang") echo "selected";?>> Terbelakang </option>
                              <option value="Bencana Alam/ Sosial" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Bencana Alam/ Sosial") echo "selected";?>> Bencana Alam/ Sosial </option>
                              <option value="Tidak Mampu Ekonomi" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Tidak Mampu Ekonomi") echo "selected";?>> Tidak Mampu Ekonomi </option>
                              <option value="Lainnya" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Lainnya") echo "selected";?>> Lainnya </option>
                            </select> 
                  </div>
                </div>
                  
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Alamat* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="alamat" value="<?php echo $row_siswa->alamat;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">RT* </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input required="required" type="text" class="form-control" name="rt" value="<?php echo $row_siswa->rt;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">RW* </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input required="required" type="text" class="form-control" name="rw" value="<?php echo $row_siswa->rw;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Dusun* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nama_dusun" value="<?php echo $row_siswa->nama_dusun;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Desa / Kelurahan* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="desa_kelurahan" value="<?php echo $row_siswa->desa_kelurahan;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kecamatan* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="kecamatan" value="<?php echo $row_siswa->kecamatan;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kode Pos </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kode_pos" value="<?php echo $row_siswa->kode_pos;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Tinggal </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tempat_tinggal" value="<?php echo $row_siswa->tempat_tinggal;?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Kategori Penduduk </label>
                    <div class="col-sm-4 form-group">
                    <input type="radio" name="kategori_penduduk"
                            <?php if (isset($row_siswa->kategori_penduduk) && $row_siswa->kategori_penduduk=="Dalam Daerah") echo "checked";?>  value="Dalam Daerah"> Dalam Daerah <br>
                           <input type="radio" name="kategori_penduduk"
                              <?php if (isset($row_siswa->kategori_penduduk) && $row_siswa->kategori_penduduk=="Luar Daerah") echo "checked";?>  value="Luar Daerah"> Luar Daerah
                  </div>
                  </div>

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Transportasi </label>
                    <div class="col-sm-4 form-group">
                   <select name="transportasi" value="<?php echo $row_siswa->transportasi; ?>">
                            <option value="Jalan Kaki" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Jalan Kaki") echo "selected";?>> Jalan Kaki </option>
                             <option value="Angkutan Umum" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Angkutan Umum") echo "selected";?>> Angkutan Umum </option>
                             <option value="Mobil/ Bus Antar Jemput" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Mobil/ Bus Antar Jemput") echo "selected";?>> Mobil/ Bus Antar Jemput </option>
                             <option value="Sepeda" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Sepeda") echo "selected";?>> Sepeda </option>
                             <option value="Sepeda Motor" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Sepeda Motor") echo "selected";?>> Sepeda Motor </option>
                             <option value="Mobil Pribadi" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Mobil Pribadi") echo "selected";?>> Mobil Pribadi </option>
                             <option value="Lainnya" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Lainnya") echo "selected";?>> Lainnya </option>
                          </select>
                  </div>
                </div>

                  
                 
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_telepon" value="<?php echo $row_siswa->no_telepon;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Email </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="email" value="<?php echo $row_siswa->email;?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pernah PAUD </label>
                    <div class="col-sm-4 form-group">
                   <input type="radio" name="pernah_paud"
                            <?php if (isset($row_siswa->pernah_paud) && $row_siswa->pernah_paud=="Ya") echo "checked";?> value="Ya"> Ya <br>
                          <input type="radio" name="pernah_paud"
                            <?php if (isset($row_siswa->pernah_paud) && $row_siswa->pernah_paud=="Tidak") echo "checked";?> value="Tidak"> Tidak
                  </div>
                  </div>

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pernah TK </label>
                    <div class="col-sm-4 form-group">
                    <input type="radio" name="pernah_tk"
                            <?php if (isset($row_siswa->pernah_tk) && $row_siswa->pernah_tk=="Ya") echo "checked";?> value="Ya"> Ya <br>
                          <input type="radio" name="pernah_tk"
                            <?php if (isset($row_siswa->pernah_tk) && $row_siswa->pernah_tk=="Tidak") echo "checked";?> value="Tidak"> Tidak
                  </div>
                  </div>
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No SKHUN* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="no_skhun_mi">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No SKHUN Sementara* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="no_seri_skhun_s" value="<?php echo $row_siswa->no_seri_skhun_s;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Seri Ijazah* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="no_seri_ijazah_sd_mi" value="<?php echo $row_siswa->no_seri_ijazah_sd_mi;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Penerima Kartu Perlidungan Sosial/ Kartu Keluarga Sejahtera/ Program Keluarga Harapan/ Kartu Indonesia Pintar </label>
                    <div class="col-sm-4 form-group">
                   <input type="radio" name="penerima_kps_kks_pkh_kip"
                              <?php if (isset($row_siswa->penerima_kps_kks_pkh_kip) && $row_siswa->penerima_kps_kks_pkh_kip=="Ya") echo "checked";?> value="Ya"> Ya <br>
                            <input type="radio" name="penerima_kps_kks_pkh_kip"
                              <?php if (isset($row_siswa->penerima_kps_kks_pkh_kip) && $row_siswa->penerima_kps_kks_pkh_kip=="Tidak") echo "checked";?> value="Tidak"> Tidak
                  </div>
                  </div>

                   
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Penerima </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_penerima" value="<?php echo $row_siswa->no_penerima;?>">
                  </div>
                  </div>
                  

                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Sakit yang diderita </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="pernah_menderita_sakit" value="<?php echo $row_siswa->pernah_menderita_sakit;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Pernah Mengaji </label>
                    <div class="col-sm-4 form-group">
                      <input type="radio" name="pernah_mengaji"
                            <?php if (isset($row_siswa->pernah_mengaji) && $row_siswa->pernah_mengaji=="Ya") echo "checked";?> value="Ya"> Ya <br>
                          <input type="radio" name="pernah_mengaji"
                            <?php if (isset($row_siswa->pernah_mengaji) && $row_siswa->pernah_mengaji=="Tidak") echo "checked";?> value="Tidak"> Tidak
                  </div>
                  </div>


                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Keterangan Mengaji </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="keterangan_mengaji" value="<?php echo $row_siswa->keterangan_mengaji;?>">
                  </div>
                  </div>
                  
                    
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Bahasa Sehari-Hari di Rumah </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="bahasa_sehari_hari_dirumah" value="<?php echo $row_siswa->bahasa_sehari_hari_dirumah;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Prestasi di Sekolah </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="prestasi_disekolah" value="<?php echo $row_siswa->prestasi_disekolah;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Hobi </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="hobi" value="<?php echo $row_siswa->hobi;?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Sekolah Dasar / Madrasah Ibtidaiyah* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nama_sd_mi" value="<?php echo $row_siswa->nama_sd_mi;?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Lama Belajar di SD / MI* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="lama_belajar_disd_mi" value="<?php echo $row_siswa->lama_belajar_disd_mi;?>">
                  </div>
                  </div>



                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Asal Sekolah* </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" placeholder=" apabila siswa pindahan" class="form-control" name="asal_mutasi" value="<?php echo $row_siswa->asal_mutasi;?>">
                  </div>
                  </div>

                  



                  <center><h3>Data Periodik Siswa</h3></center>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tinggi Badan* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="tinggi_badan" value="<?php echo $row_siswa->tinggi_badan;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Berat Badan* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="berat_badan" value="<?php echo $row_siswa->berat_badan;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Status dalam Keluarga* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="radio" name="status_dalam_keluarga"
                              <?php if (isset($row_siswa->status_dalam_keluarga) && $row_siswa->status_dalam_keluarga=="Kandung") echo "checked";?> value="Kandung"> Kandung <br>
                            <input type="radio" name="status_dalam_keluarga"
                              <?php if (isset($row_siswa->status_dalam_keluarga) && $row_siswa->status_dalam_keluarga=="Angkat") echo "checked";?> value="Angkat"> Angkat
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Anak Ke- </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="anak_ke" value="<?php echo $row_siswa->anak_ke;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Saudara Kandung </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="jumlah_saudara_kandung" value="<?php echo $row_siswa->jumlah_saudara_kandung;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Saudara Tiri </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="jumlah_saudara_tiri" value="<?php echo $row_siswa->jumlah_saudara_tiri;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Saudara Angkat </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="jumlah_saudara_angkat" value="<?php echo $row_siswa->jumlah_saudara_angkat;?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Anak Yatim Piatu </label>
                    <div class="col-sm-4 form-group">
                    <select name="anak_yatim_piatu" value="<?php echo $row_siswa->anak_yatim_piatu; ?>">
                                <option value="Tidak" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Tidak") echo "selected";?>> Tidak </option>
                                <option value="Yatim" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Yatim") echo "selected";?>> Yatim </option>
                                 <option value="Piatu" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Piatu") echo "selected";?>> Piatu</option>
                                 <option value="Yatim Piatu" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Yatim Piatu") echo "selected";?>> Yatim Piatu</option>
                              </select>
                  </div>
                </div>
                  
                  
                  
                  <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">

                  <button type="submit" name="submit"  class="btn btn-round btn-primary">Simpan </button></a>

                  <!-- <button type="submit" class="btn btn-primary">Kirim</button> -->
                  <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                  </div>

                  </div>
                  </div>
                  </form>
                  </div>

                  <?php 
                  if (empty($row_ortu)) {
                    $action = 'insert_siswa_mutasi_data_orangtua';
                  } else {
                    $action = 'update_siswa_mutasi_data_orangtua';
                  }
                  ?>
                  <div class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/'.$action);?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">

                    <center><h3>Data Ayah Siswa</h3></center>

                    
                    <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Ayah* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nama_ayah" value="<?php echo set_value('nama_ayah', @$row_ortu->nama_ayah); ?>">
                    <!-- <input type="text" class="form-control" name="nama_ayah" value="<?php echo set_value('nama_ayah'); ?>"> -->
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Depan Ayah </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_depan_ayah" value="<?php echo set_value('gelar_depan_ayah',  @$row_ortu->gelar_depan_ayah); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Belakang Ayah </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_belakang_ayah" value="<?php echo set_value('gelar_belakang_ayah',  @$row_ortu->gelar_belakang_ayah); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir Ayah* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="tempat_lahir_ayah" value="<?php echo set_value('tempat_lahir_ayah',  @$row_ortu->tempat_lahir_ayah); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir_ayah" value="<?php echo set_value('tanggal_lahir_ayah',  @$row_ortu->tanggal_lahir_ayah); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kewarganegaraan </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kewarganegaraan_ayah" value="<?php echo set_value('kewarganegaraan_ayah',  @$row_ortu->kewarganegaraan_ayah); ?>">
                  </div>
                  </div>
                  </div>
                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama* </label>
                    <div class="col-sm-4 form-group">


                      <select class="form-control" name="agama_ayah" value="<?php echo set_value('agama_ayah',  @$row_ortu->agama_ayah);?>" required>
                     <option selected disabled value="">-Pilih Agama-</option>
                     <option value="Islam" <?php if (@$row_ortu->agama_ayah=="Islam") { echo "selected";} ?>>Islam</option>
                     <option value="Kristen" <?php if (@$row_ortu->agama_ayah=="Kristen") { echo "selected";} ?>>Kristen</option>
                     <option value="Katholik" <?php if (@$row_ortu->agama_ayah=="Katholik") { echo "selected";} ?>>Katholik</option>
                     <option value="Hindu" <?php if (@$row_ortu->agama_ayah=="Hindu") { echo "selected";} ?>>Hindu</option>
                     <option value="Budha" <?php if (@$row_ortu->agama_ayah=="Budha") { echo "selected";} ?>>Budha</option>
                     <option value="Lainnya" <?php if (@$row_ortu->agama_ayah=="Lainnya") { echo "selected";} ?>>Lainnya</option>
                   </select>

                  </div>
                </div>


                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pendidikan* </label>
                    <div class="col-sm-4 form-group">

                <select class="form-control" name="pendidikan_ayah" value="<?php echo set_value('pendidikan_ayah',  @$row_ortu->pendidikan_ayah);?>" required>
                 <option selected disabled value="">-Pilih Pendidikan-</option>
                 <option value="Tidak Sekolah" <?php if (@$row_ortu->pendidikan_ayah=="Tidak Sekolah") { echo "selected";} ?>>Tidak Sekolah</option>
                 <option value="Sekolah Dasar" <?php if (@$row_ortu->pendidikan_ayah=="Sekolah Dasar") { echo "selected";} ?>>Sekolah Dasar</option>
                 <option value="Sekolah Menengah Pertama" <?php if (@$row_ortu->pendidikan_ayah=="Sekolah Menengah Pertama") { echo "selected";} ?>>Sekolah Menengah Pertama</option>
                 <option value="Sekolah Menengah Atas" <?php if (@$row_ortu->pendidikan_ayah=="Sekolah Menengah Atas") { echo "selected";} ?>>Sekolah Menengah Atas</option>
                 <option value="D1" <?php if (@$row_ortu->pendidikan_ayah=="D1") { echo "selected";} ?>>D1</option>
                 <option value="D2" <?php if (@$row_ortu->pendidikan_ayah=="D2") { echo "selected";} ?>>D2</option>
                 <option value="D3" <?php if (@$row_ortu->pendidikan_ayah=="D3") { echo "selected";} ?>>D3</option>
                 <option value="S1" <?php if (@$row_ortu->pendidikan_ayah=="S3") { echo "selected";} ?>>S1</option>
                 <option value="S2" <?php if (@$row_ortu->pendidikan_ayah=="S2") { echo "selected";} ?>>S2</option>
                 <option value="S3" <?php if (@$row_ortu->pendidikan_ayah=="S3") { echo "selected";} ?>>S3</option>
               </select>

                  </div>
                </div>


                  
                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pekerjaan* </label>
                    <div class="col-sm-4 form-group">


                  <select class="form-control" name="pekerjaan_ayah" value="<?php echo set_value('pekerjaan_ayah',  @$row_ortu->pekerjaan_ayah);?>" required>
                 <option selected disabled value="">-Pilih Pekerjaan-</option>
                 <option value="Tidak Bekerja" <?php if (@$row_ortu->pekerjaan_ayah=="Tidak Bekerja") { echo "selected";} ?>>Tidak Bekerja</option>
                 <option value="Nelayan" <?php if (@$row_ortu->pekerjaan_ayah=="Nelayan") { echo "selected";} ?>>Nelayan</option>
                 <option value="Petani" <?php if (@$row_ortu->pekerjaan_ayah=="Petani") { echo "selected";} ?>>Petani</option>
                 <option value="Peternak" <?php if (@$row_ortu->pekerjaan_ayah=="Peternak") { echo "selected";} ?>>Peternak</option>
                 <option value="PNS/ TNI/ POLRI" <?php if (@$row_ortu->pekerjaan_ayah=="PNS/ TNI/ POLRI") { echo "selected";} ?>>PNS/ TNI/ POLRI</option>
                 <option value="Karyawan Swasta" <?php if (@$row_ortu->pekerjaan_ayah=="Karyawan Swasta") { echo "selected";} ?>>Karyawan Swasta</option>
                 <option value="Pedagang Kecil" <?php if (@$row_ortu->pekerjaan_ayah=="Pedagang Kecil") { echo "selected";} ?>>Pedagang Kecil</option>
                 <option value="Pedagang Besar" <?php if (@$row_ortu->pekerjaan_ayah=="Pedagang Besar") { echo "selected";} ?>>Pedagang Besar</option>
                 <option value="Wiraswasta" <?php if (@$row_ortu->pekerjaan_ayah=="Wiraswasta") { echo "selected";} ?>>Wiraswasta</option>
                 <option value="Wirausaha" <?php if (@$row_ortu->pekerjaan_ayah=="Wirausaha") { echo "selected";} ?>>Wirausaha</option>
                 <option value="Buruh" <?php if (@$row_ortu->pekerjaan_ayah=="Buruh") { echo "selected";} ?>>Buruh</option>
                 <option value="Pensiunan" <?php if (@$row_ortu->pekerjaan_ayah=="Pensiunan") { echo "selected";} ?>>Pensiunan</option>
               </select>

                  </div>
                </div>

                  
                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Penghasilan* </label>
                    <div class="col-sm-4 form-group">

                      <select class="form-control" name="penghasilan_ayah" value="<?php echo set_value('penghasilan_ayah',  @$row_ortu->penghasilan_ayah);?>" required>
                 <option selected disabled value="">-Pilih Penghasilan-</option>
                 <option value="Kurang dari Rp. 499.999" <?php if (@$row_ortu->penghasilan_ayah=="Kurang dari Rp. 499.999") { echo "selected";} ?>>Kurang dari Rp. 499.999</option>
                 <option value="Rp. 500.000 sd Rp. 999.999" <?php if (@$row_ortu->penghasilan_ayah=="Rp. 500.000 sd Rp. 999.999") { echo "selected";} ?>>Rp. 500.000 sd Rp. 999.999</option>
                 <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (@$row_ortu->penghasilan_ayah=="Rp. 1.000.000 sd Rp. 1.999.999") { echo "selected";} ?>>Rp. 1.000.000 sd Rp. 1.999.999</option>
                 <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (@$row_ortu->penghasilan_ayah=="Rp. 2.000.000 sd Rp. 3.999.999") { echo "selected";} ?>>Rp. 2.000.000 sd Rp. 3.999.999</option>
                 <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (@$row_ortu->penghasilan_ayah=="Rp. 4.000.000 sd Rp. 9.999.999") { echo "selected";} ?>>Rp. 4.000.000 sd Rp. 9.999.999</option>
                 <option value="Lebih dari Rp. 10.000.000" <?php if (@$row_ortu->penghasilan_ayah=="Lebih dari Rp. 10.000.000") { echo "selected";} ?>>Lebih dari Rp. 10.000.000</option>
                 <option value="Tidak Ada" <?php if (@$row_ortu->penghasilan_ayah=="Tidak Ada") { echo "selected";} ?>>Tidak Ada</option>
               </select>
                  </div>
                </div>



                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Berkebutuhan khusus </label>
                    <div class="col-sm-4 form-group">

                  <select class="form-control" name="ayah_berkebutuhan_khusus" value="<?php echo set_value('ayah_berkebutuhan_khusus',  @$row_ortu->ayah_berkebutuhan_khusus);?>" >
                 <option selected disabled value="">-Pilih ...-</option>
                 <option value="Tidak" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Tidak") { echo "selected";} ?>>Tidak</option>
                 <option value="Netra" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Netra") { echo "selected";} ?>>Netra</option>
                 <option value="Rungu" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Rungu") { echo "selected";} ?>>Rungu</option>
                 <option value="Grahita Ringan" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Grahita Ringan") { echo "selected";} ?>>Grahita Ringan</option>
                 <option value="Grahita Sedang" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Grahita Sedang") { echo "selected";} ?>>Grahita Sedang</option>
                 <option value="Daksa Ringan" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Daksa Ringan") { echo "selected";} ?>>Daksa Ringan</option>
                 <option value="Daksa Sedang" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Daksa Sedang") { echo "selected";} ?>>Daksa Sedang</option>
                 <option value="Laras" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Laras") { echo "selected";} ?>>Laras</option>
                 <option value="Wicara" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Wicara") { echo "selected";} ?>>Wicara</option>
                 <option value="Tuna Ganda" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Tuna Ganda") { echo "selected";} ?>>Tuna Ganda</option>
                 <option value="Hiperaktif" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Hiperaktif") { echo "selected";} ?>>Hiperaktif</option>
                 <option value="Cerdas Istimewa" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Cerdas Istimewa") { echo "selected";} ?>>Cerdas Istimewa</option>
                 <option value="Bakat Istimewa" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Bakat Istimewa") { echo "selected";} ?>>Bakat Istimewa</option>
                 <option value="Kesulitan Belajar" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Kesulitan Belajar") { echo "selected";} ?>>Kesulitan Belajar</option>
                 <option value="Narkoba" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Narkoba") { echo "selected";} ?>>Narkoba</option>
                 <option value="Indigo" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Indigo") { echo "selected";} ?>>Indigo</option>
                 <option value="Down Syndrome" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Down Syndrome") { echo "selected";} ?>>Down Syndrome</option>
                 <option value="Autis" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Autis") { echo "selected";} ?>>Autis</option>
                 <option value="Terbelakang" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Terbelakang") { echo "selected";} ?>>Terbelakang</option>
                 <option value="Bencana Alam/ Sosial" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="S3") { echo "selected";} ?>>S1</option>
                 <option value="Tidak Mampu Ekonomi" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Tidak Mampu Ekonomi") { echo "selected";} ?>>Tidak Mampu Ekonomi</option>
                 <option value="Lainnya" <?php if (@$row_ortu->ayah_berkebutuhan_khusus=="Lainnya") { echo "selected";} ?>>Lainnya</option>
               </select>
                  </div>
                </div>
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon / Handphone* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="no_telepon_hp_ayah" value="<?php echo set_value('no_telepon_hp_ayah',  @$row_ortu->no_telepon_hp_ayah); ?>">
                  </div>
                  </div>


                  <center><h3>Data Ibu Siswa</h3></center>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Ibu* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nama_ibu" value="<?php echo set_value('nama_ibu',  @$row_ortu->nama_ibu); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Depan Ibu </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_depan_ibu" value="<?php echo set_value('gelar_depan_ibu',  @$row_ortu->gelar_depan_ibu); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Belakang Ibu </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_belakang_ibu" value="<?php echo set_value('gelar_belakang_ibu',  @$row_ortu->gelar_belakang_ibu); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir Ibu* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="tempat_lahir_ibu" value="<?php echo set_value('tempat_lahir_ibu',  @$row_ortu->tempat_lahir_ibu); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir_ibu" value="<?php echo set_value('tanggal_lahir_ibu',  @$row_ortu->tanggal_lahir_ibu); ?>">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kewarganegaraan </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kewarganegaraan_ibu" value="<?php echo set_value('kewarganegaraan_ibu',  @$row_ortu->kewarganegaraan_ibu); ?>">
                  </div>
                  </div>
                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama* </label>
                    <div class="col-sm-4 form-group">
                       <select class="form-control" name="agama_ibu" value="<?php echo set_value('agama_ibu',  @$row_ortu->agama_ibu);?>" required>
                     <option selected disabled value="">-Pilih Agama-</option>
                     <option value="Islam" <?php if (@$row_ortu->agama_ibu=="Islam") { echo "selected";} ?>>Islam</option>
                     <option value="Kristen" <?php if (@$row_ortu->agama_ibu=="Kristen") { echo "selected";} ?>>Kristen</option>
                     <option value="Katholik" <?php if (@$row_ortu->agama_ibu=="Katholik") { echo "selected";} ?>>Katholik</option>
                     <option value="Hindu" <?php if (@$row_ortu->agama_ibu=="Hindu") { echo "selected";} ?>>Hindu</option>
                     <option value="Budha" <?php if (@$row_ortu->agama_ibu=="Budha") { echo "selected";} ?>>Budha</option>
                     <option value="Lainnya" <?php if (@$row_ortu->agama_ibu=="Lainnya") { echo "selected";} ?>>Lainnya</option>
                   </select>
                  </div>
                </div>

                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pendidikan* </label>
                    <div class="col-sm-4 form-group">

                      <select class="form-control" name="pendidikan_ibu" value="<?php echo set_value('pendidikan_ibu',  @$row_ortu->pendidikan_ibu);?>" required>
                 <option selected disabled value="">-Pilih Pendidikan-</option>
                 <option value="Tidak Sekolah" <?php if (@$row_ortu->pendidikan_ibu=="Tidak Sekolah") { echo "selected";} ?>>Tidak Sekolah</option>
                 <option value="Sekolah Dasar" <?php if (@$row_ortu->pendidikan_ibu=="Sekolah Dasar") { echo "selected";} ?>>Sekolah Dasar</option>
                 <option value="Sekolah Menengah Pertama" <?php if (@$row_ortu->pendidikan_ibu=="Sekolah Menengah Pertama") { echo "selected";} ?>>Sekolah Menengah Pertama</option>
                 <option value="Sekolah Menengah Atas" <?php if (@$row_ortu->pendidikan_ibu=="Sekolah Menengah Atas") { echo "selected";} ?>>Sekolah Menengah Atas</option>
                 <option value="D1" <?php if (@$row_ortu->pendidikan_ibu=="D1") { echo "selected";} ?>>D1</option>
                 <option value="D2" <?php if (@$row_ortu->pendidikan_ibu=="D2") { echo "selected";} ?>>D2</option>
                 <option value="D3" <?php if (@$row_ortu->pendidikan_ibu=="D3") { echo "selected";} ?>>D3</option>
                 <option value="S1" <?php if (@$row_ortu->pendidikan_ibu=="S3") { echo "selected";} ?>>S1</option>
                 <option value="S2" <?php if (@$row_ortu->pendidikan_ibu=="S2") { echo "selected";} ?>>S2</option>
                 <option value="S3" <?php if (@$row_ortu->pendidikan_ibu=="S3") { echo "selected";} ?>>S3</option>
               </select>
                  </div>
                </div>


                  
                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pekerjaan* </label>
                    <div class="col-sm-4 form-group">
                  <select class="form-control" name="pekerjaan_ibu" value="<?php echo set_value('pekerjaan_ibu',  @$row_ortu->pekerjaan_ibu);?>" required>
                 <option selected disabled value="">-Pilih Pekerjaan-</option>
                 <option value="Tidak Bekerja" <?php if (@$row_ortu->pekerjaan_ibu=="Tidak Bekerja") { echo "selected";} ?>>Tidak Bekerja</option>
                 <option value="Nelayan" <?php if (@$row_ortu->pekerjaan_ibu=="Nelayan") { echo "selected";} ?>>Nelayan</option>
                 <option value="Petani" <?php if (@$row_ortu->pekerjaan_ibu=="Petani") { echo "selected";} ?>>Petani</option>
                 <option value="Peternak" <?php if (@$row_ortu->pekerjaan_ibu=="Peternak") { echo "selected";} ?>>Peternak</option>
                 <option value="PNS/ TNI/ POLRI" <?php if (@$row_ortu->pekerjaan_ibu=="PNS/ TNI/ POLRI") { echo "selected";} ?>>PNS/ TNI/ POLRI</option>
                 <option value="Karyawan Swasta" <?php if (@$row_ortu->pekerjaan_ibu=="Karyawan Swasta") { echo "selected";} ?>>Karyawan Swasta</option>
                 <option value="Pedagang Kecil" <?php if (@$row_ortu->pekerjaan_ibu=="Pedagang Kecil") { echo "selected";} ?>>Pedagang Kecil</option>
                 <option value="Pedagang Besar" <?php if (@$row_ortu->pekerjaan_ibu=="Pedagang Besar") { echo "selected";} ?>>Pedagang Besar</option>
                 <option value="Wiraswasta" <?php if (@$row_ortu->pekerjaan_ibu=="Wiraswasta") { echo "selected";} ?>>Wiraswasta</option>
                 <option value="Wirausaha" <?php if (@$row_ortu->pekerjaan_ibu=="Wirausaha") { echo "selected";} ?>>Wirausaha</option>
                 <option value="Buruh" <?php if (@$row_ortu->pekerjaan_ibu=="Buruh") { echo "selected";} ?>>Buruh</option>
                 <option value="Pensiunan" <?php if (@$row_ortu->pekerjaan_ibu=="Pensiunan") { echo "selected";} ?>>Pensiunan</option>
               </select>
                  </div>
                </div>

                  
                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Penghasilan* </label>
                    <div class="col-sm-4 form-group">
                <select class="form-control" name="penghasilan_ibu" value="<?php echo set_value('penghasilan_ibu',  @$row_ortu->penghasilan_ibu);?>" required>
                 <option selected disabled value="">-Pilih ...-</option>
                 <option value="Kurang dari Rp. 499.999" <?php if (@$row_ortu->penghasilan_ibu=="Kurang dari Rp. 499.999") { echo "selected";} ?>>Kurang dari Rp. 499.999</option>
                 <option value="Rp. 500.000 sd Rp. 999.999" <?php if (@$row_ortu->penghasilan_ibu=="Rp. 500.000 sd Rp. 999.999") { echo "selected";} ?>>Rp. 500.000 sd Rp. 999.999</option>
                 <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (@$row_ortu->penghasilan_ibu=="Rp. 1.000.000 sd Rp. 1.999.999") { echo "selected";} ?>>Rp. 1.000.000 sd Rp. 1.999.999</option>
                 <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (@$row_ortu->penghasilan_ibu=="Rp. 2.000.000 sd Rp. 3.999.999") { echo "selected";} ?>>Rp. 2.000.000 sd Rp. 3.999.999</option>
                 <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (@$row_ortu->penghasilan_ibu=="Rp. 4.000.000 sd Rp. 9.999.999") { echo "selected";} ?>>Rp. 4.000.000 sd Rp. 9.999.999</option>
                 <option value="Lebih dari Rp. 10.000.000" <?php if (@$row_ortu->penghasilan_ibu=="Lebih dari Rp. 10.000.000") { echo "selected";} ?>>Lebih dari Rp. 10.000.000</option>
                 <option value="Tidak Ada" <?php if (@$row_ortu->penghasilan_ibu=="Tidak Ada") { echo "selected";} ?>>Tidak Ada</option>
               </select>
                  </div>
                </div>


                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Berkebutuhan khusus </label>
                    <div class="col-sm-4 form-group">
                  <select class="form-control" name="ibu_berkebutuhan_khusus" value="<?php echo set_value('ibu_berkebutuhan_khusus',  @$row_ortu->ibu_berkebutuhan_khusus);?>" >
                 <option selected disabled value="">-Pilih ...-</option>
                 <option value="Tidak" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Tidak") { echo "selected";} ?>>Tidak</option>
                 <option value="Netra" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Netra") { echo "selected";} ?>>Netra</option>
                 <option value="Rungu" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Rungu") { echo "selected";} ?>>Rungu</option>
                 <option value="Grahita Ringan" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Grahita Ringan") { echo "selected";} ?>>Grahita Ringan</option>
                 <option value="Grahita Sedang" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Grahita Sedang") { echo "selected";} ?>>Grahita Sedang</option>
                 <option value="Daksa Ringan" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Daksa Ringan") { echo "selected";} ?>>Daksa Ringan</option>
                 <option value="Daksa Sedang" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Daksa Sedang") { echo "selected";} ?>>Daksa Sedang</option>
                 <option value="Laras" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Laras") { echo "selected";} ?>>Laras</option>
                 <option value="Wicara" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Wicara") { echo "selected";} ?>>Wicara</option>
                 <option value="Tuna Ganda" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Tuna Ganda") { echo "selected";} ?>>Tuna Ganda</option>
                 <option value="Hiperaktif" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Hiperaktif") { echo "selected";} ?>>Hiperaktif</option>
                 <option value="Cerdas Istimewa" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Cerdas Istimewa") { echo "selected";} ?>>Cerdas Istimewa</option>
                 <option value="Bakat Istimewa" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Bakat Istimewa") { echo "selected";} ?>>Bakat Istimewa</option>
                 <option value="Kesulitan Belajar" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Kesulitan Belajar") { echo "selected";} ?>>Kesulitan Belajar</option>
                 <option value="Narkoba" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Narkoba") { echo "selected";} ?>>Narkoba</option>
                 <option value="Indigo" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Indigo") { echo "selected";} ?>>Indigo</option>
                 <option value="Down Syndrome" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Down Syndrome") { echo "selected";} ?>>Down Syndrome</option>
                 <option value="Autis" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Autis") { echo "selected";} ?>>Autis</option>
                 <option value="Terbelakang" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Terbelakang") { echo "selected";} ?>>Terbelakang</option>
                 <option value="Bencana Alam/ Sosial" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="S3") { echo "selected";} ?>>S1</option>
                 <option value="Tidak Mampu Ekonomi" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Tidak Mampu Ekonomi") { echo "selected";} ?>>Tidak Mampu Ekonomi</option>
                 <option value="Lainnya" <?php if (@$row_ortu->ibu_berkebutuhan_khusus=="Lainnya") { echo "selected";} ?>>Lainnya</option>
               </select>
                  </div>
                </div>
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon / Handphone* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nomor_telepon_ibu" value="<?php echo set_value('nomor_telepon_ibu',  @$row_ortu->nomor_telepon_ibu); ?>">
                  </div>
                  </div>




                  <center><h3>Data Wali Siswa</h3></center>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Wali* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="nama_wali" value="<?php echo set_value('nama_wali',  @$row_ortu->nama_wali); ?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir </label>
                    <div class="col-sm-4 form-group">
                    <input  type="text" class="form-control" name="tempat_lahir_wali" value="<?php echo set_value('tempat_lahir_wali',  @$row_ortu->tempat_lahir_wali); ?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir_wali" value="<?php echo set_value('tanggal_lahir_wali',  @$row_ortu->tanggal_lahir_wali); ?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pendidikan </label>
                    <div class="col-sm-4 form-group">
                       <select class="form-control" name="pendidikan_wali" value="<?php echo set_value('pendidikan_wali',  @$row_ortu->pendidikan_wali);?>" >
                 <option selected disabled value="">-Pilih Pendidikan-</option>
                 <option value="Tidak Sekolah" <?php if (@$row_ortu->pendidikan_wali=="Tidak Sekolah") { echo "selected";} ?>>Tidak Sekolah</option>
                 <option value="Sekolah Dasar" <?php if (@$row_ortu->pendidikan_wali=="Sekolah Dasar") { echo "selected";} ?>>Sekolah Dasar</option>
                 <option value="Sekolah Menengah Pertama" <?php if (@$row_ortu->pendidikan_wali=="Sekolah Menengah Pertama") { echo "selected";} ?>>Sekolah Menengah Pertama</option>
                 <option value="Sekolah Menengah Atas" <?php if (@$row_ortu->pendidikan_wali=="Sekolah Menengah Atas") { echo "selected";} ?>>Sekolah Menengah Atas</option>
                 <option value="D1" <?php if (@$row_ortu->pendidikan_wali=="D1") { echo "selected";} ?>>D1</option>
                 <option value="D2" <?php if (@$row_ortu->pendidikan_wali=="D2") { echo "selected";} ?>>D2</option>
                 <option value="D3" <?php if (@$row_ortu->pendidikan_wali=="D3") { echo "selected";} ?>>D3</option>
                 <option value="S1" <?php if (@$row_ortu->pendidikan_wali=="S3") { echo "selected";} ?>>S1</option>
                 <option value="S2" <?php if (@$row_ortu->pendidikan_wali=="S2") { echo "selected";} ?>>S2</option>
                 <option value="S3" <?php if (@$row_ortu->pendidikan_wali=="S3") { echo "selected";} ?>>S3</option>
               </select>
                  </div>
                </div>

                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kewarganegaraan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kewarganegaraan_wali" value="<?php echo set_value('kewarganegaraan_wali',  @$row_ortu->kewarganegaraan_wali); ?>">
                  </div>
                  </div>
                  

                   <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama </label>
                    <div class="col-sm-4 form-group">

                      <select class="form-control" name="agama_wali" value="<?php echo set_value('agama_wali',  @$row_ortu->agama_wali);?>" >
                     <option selected disabled value="">-Pilih Agama-</option>
                     <option value="Islam" <?php if (@$row_ortu->agama_wali=="Islam") { echo "selected";} ?>>Islam</option>
                     <option value="Kristen" <?php if (@$row_ortu->agama_wali=="Kristen") { echo "selected";} ?>>Kristen</option>
                     <option value="Katholik" <?php if (@$row_ortu->agama_wali=="Katholik") { echo "selected";} ?>>Katholik</option>
                     <option value="Hindu" <?php if (@$row_ortu->agama_wali=="Hindu") { echo "selected";} ?>>Hindu</option>
                     <option value="Budha" <?php if (@$row_ortu->agama_wali=="Budha") { echo "selected";} ?>>Budha</option>
                     <option value="Lainnya" <?php if (@$row_ortu->agama_wali=="Lainnya") { echo "selected";} ?>>Lainnya</option>
                   </select>
                  </div>
                </div>

                  
                 <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pekerjaan </label>
                    <div class="col-sm-4 form-group">
                  <select class="form-control" name="pekerjaan_wali" value="<?php echo set_value('pekerjaan_wali',  @$row_ortu->pekerjaan_wali);?>" >
                 <option selected disabled value="">-Pilih Pekerjaan-</option>
                 <option value="Tidak Bekerja" <?php if (@$row_ortu->pekerjaan_wali=="Tidak Bekerja") { echo "selected";} ?>>Tidak Bekerja</option>
                 <option value="Nelayan" <?php if (@$row_ortu->pekerjaan_wali=="Nelayan") { echo "selected";} ?>>Nelayan</option>
                 <option value="Petani" <?php if (@$row_ortu->pekerjaan_wali=="Petani") { echo "selected";} ?>>Petani</option>
                 <option value="Peternak" <?php if (@$row_ortu->pekerjaan_wali=="Peternak") { echo "selected";} ?>>Peternak</option>
                 <option value="PNS/ TNI/ POLRI" <?php if (@$row_ortu->pekerjaan_wali=="PNS/ TNI/ POLRI") { echo "selected";} ?>>PNS/ TNI/ POLRI</option>
                 <option value="Karyawan Swasta" <?php if (@$row_ortu->pekerjaan_wali=="Karyawan Swasta") { echo "selected";} ?>>Karyawan Swasta</option>
                 <option value="Pedagang Kecil" <?php if (@$row_ortu->pekerjaan_wali=="Pedagang Kecil") { echo "selected";} ?>>Pedagang Kecil</option>
                 <option value="Pedagang Besar" <?php if (@$row_ortu->pekerjaan_wali=="Pedagang Besar") { echo "selected";} ?>>Pedagang Besar</option>
                 <option value="Wiraswasta" <?php if (@$row_ortu->pekerjaan_wali=="Wiraswasta") { echo "selected";} ?>>Wiraswasta</option>
                 <option value="Wirausaha" <?php if (@$row_ortu->pekerjaan_wali=="Wirausaha") { echo "selected";} ?>>Wirausaha</option>
                 <option value="Buruh" <?php if (@$row_ortu->pekerjaan_wali=="Buruh") { echo "selected";} ?>>Buruh</option>
                 <option value="Pensiunan" <?php if (@$row_ortu->pekerjaan_wali=="Pensiunan") { echo "selected";} ?>>Pensiunan</option>
               </select> 
                  </div>
                </div>


                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Penghasilan </label>
                    <div class="col-sm-4 form-group">
                      <select class="form-control" name="penghasilan_wali" value="<?php echo set_value('penghasilan_wali',  @$row_ortu->penghasilan_wali);?>" >
                 <option selected disabled value="">-Pilih Penghasilan-</option>
                 <option value="Kurang dari Rp. 499.999" <?php if (@$row_ortu->penghasilan_wali=="Kurang dari Rp. 499.999") { echo "selected";} ?>>Kurang dari Rp. 499.999</option>
                 <option value="Rp. 500.000 sd Rp. 999.999" <?php if (@$row_ortu->penghasilan_wali=="Rp. 500.000 sd Rp. 999.999") { echo "selected";} ?>>Rp. 500.000 sd Rp. 999.999</option>
                 <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (@$row_ortu->penghasilan_wali=="Rp. 1.000.000 sd Rp. 1.999.999") { echo "selected";} ?>>Rp. 1.000.000 sd Rp. 1.999.999</option>
                 <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (@$row_ortu->penghasilan_wali=="Rp. 2.000.000 sd Rp. 3.999.999") { echo "selected";} ?>>Rp. 2.000.000 sd Rp. 3.999.999</option>
                 <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (@$row_ortu->penghasilan_wali=="Rp. 4.000.000 sd Rp. 9.999.999") { echo "selected";} ?>>Rp. 4.000.000 sd Rp. 9.999.999</option>
                 <option value="Lebih dari Rp. 10.000.000" <?php if (@$row_ortu->penghasilan_wali=="Lebih dari Rp. 10.000.000") { echo "selected";} ?>>Lebih dari Rp. 10.000.000</option>
                 <option value="Tidak Ada" <?php if (@$row_ortu->penghasilan_wali=="Tidak Ada") { echo "selected";} ?>>Tidak Ada</option>
               </select>
                  </div>
                </div>

                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Alamat* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="alamat_wali" value="<?php echo set_value('alamat_wali',  @$row_ortu->alamat_wali); ?>">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon/ Handphone* </label>
                    <div class="col-sm-4 form-group">
                    <input required="required" type="text" class="form-control" name="no_telepon_hp_wali" value="<?php echo set_value('no_telepon_hp_wali',  @$row_ortu->no_telepon_hp_wali); ?>">
                  </div>
                  </div>


                   <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                  </div>


                 </div>
                 </form>
                 </div>
                  


                  



                        <!-- end tab 1 -->
                        
                        <!-- end tab 2 -->
                        
                        <!-- end tab 3 -->

                        
                        <!-- end tab 4 -->
                      
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12 ">

          <!-- Profile Image -->
          
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
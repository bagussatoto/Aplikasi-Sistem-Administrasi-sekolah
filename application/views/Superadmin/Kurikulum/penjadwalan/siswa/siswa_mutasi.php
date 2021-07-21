<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Pengisian Data Diri Siswa Mutasi<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>penjadwalan/siswa/home">Dashboard</a></li>
      </ol>
    </section>

<section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" >Petunjuk Pengisian </a></li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Siswa </a></li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" >Data Orang Tua </a></li>
              <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" >Data Wali </a></li>
              </ul>

                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <center><p>Petunjuk Pengisian Formulir Daftar Ulang Siswa Mutasi Masuk</p></center>
                        <p>Formulir Daftar Ulang Siswa Mutasi Masuk memiliki 5 tab, yaitu :
                        <p> 1. Tab Petunjuk</p>
                        <p>Berisi pengisian Petunjuk pengisian formulir daftar ulang siswa mutasi masuk. Harap membaca petunjuk sebelum melakukan pengisian formulir ini. Disarankan untuk mengisi formulir secara urut, Kemudian "simpan" isian formulir di setiap tab nya. Setelah semua pengisian selesai, segera lakukan "logout" (panel "logout" ada di sebelah kanan atas) dan segera serahkan berkas kepada pihak sekolah.</p>
                        <p> 2. Tab Data Siswa</p>
                        <p>Tab ini merupakan formulir data siswa. Berisi data pokok dan data tambahan. Harap diisi secara lengkap dan benar. Tab ini wajib diisi</p>
                        <p> 3. Tab Data Orang Tua Siswa </p>
                        <p>Tab ini merupakan formulir data orang tua kandung siswa. Harap diisi secara lengkap dan benar. Tab ini wajib diisi </p>
                        <p> 4. Tab Data Wali Siswa</p>
                        <p>Tab ini merupakan formulir data wali siswa. Tab ini dapat dikosongkan apabila siswa tidak memiliki wali.</p>
                        <p> 5. Tab Berkas</p>
                        <p>Tab ini berisikan berkas yang harus dilampirkan kepada sekolah. Berikan centang pada berkas yang akan diberikan. Tab ini wajib diisi</p>
                        </p>
                        </div>



                        <div class="active tab-pane" id="tab_content2" aria-labelledby="profile-tab">
                    <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/save_siswa_mutasi_data_siswa');?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                    <center><h3>Data Pokok Siswa</h3></center>
                    <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Lengkap <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama">
                  </div>
                  </div>
                     <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">NISN <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nisn">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tempat_lahir">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Induk Siswa  <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_induk_siswa">
                  </div>
                  </div>
                  <center><h3>Data Tambahan Siswa</h3></center>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Foto  <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                     <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertFile" class="form-control" name="foto" placeholder="Foto Siswa">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">NIK  <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nik">
                  </div>
                  </div>


                   <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Jenis Kelamin <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                </div>

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="agama" class="form-control">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>
                    
                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Berkebutuhan khusus <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="berkebutuhan_khusus" class="form-control">
                    <option value="Tidak">Tidak</option>
                    <option value="Netra">Netra</option>
                    <option value="Rungu">Rungu</option>
                    <option value="Grahita Ringan">Grahita Ringan</option>
                    <option value="Grahita Sedang">Grahita Sedang</option>
                    <option value="Daksa Ringan">Daksa Ringan</option>
                    <option value="Daksa Sedang">Daksa Sedang</option>
                    <option value="Laras">Laras</option>
                    <option value="Wicara">Wicara</option>
                    <option value="Tuna Ganda">Tuna Ganda</option>
                    <option value="Hiperaktif">Hiperaktif</option>
                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                    <option value="Narkoba">Narkoba</option>
                    <option value="Indigo">Indigo</option>
                    <option value="Down Syndrome">Down Syndrome</option>
                    <option value="Autis">Autis</option>
                    <option value="Terbelakang">Terbelakang</option>
                    <option value="Bencana Alam / Sosial">Bencana Alam / Sosial</option>
                    <option value="Tidak Mampu Ekonomi">Tidak Mampu Ekonomi</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>
                  
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Alamat <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="alamat">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">RT <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="rt">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">RW <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="rw">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Dusun <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama_dusun">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Desa / Kelurahan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="desa_kelurahan">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kecamatan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kecamatan">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kode Pos <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kode_pos">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Tinggal <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tempat_tinggal">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Kategori Penduduk <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="radio" name="kategori_penduduk"
                            <?php if (isset($kategori_penduduk) && $kategori_penduduk=="Dalam Daerah") echo "checked";?>
                                  value="Dalam Daerah">Dalam Daerah <br>
                            <input type="radio" name="kategori_penduduk"
                            <?php if (isset($kategori_penduduk) && $kategori_penduduk=="Luar Daerah") echo "checked";?>
                                    value="Luar Daerah">Luar Daerah
                  </div>
                  </div>

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Transportasi <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="transportasi" class="form-control">
                    <option value="Jalan Kaki">Jalan Kaki</option>
                    <option value="Angkutan Umum">Angkutan Umum</option>
                    <option value="Mobil / Bus Antar Jemput">Mobil / Bus Antar Jemput</option>
                    <option value="Sepeda">Sepeda</option>
                    <option value="Sepeda Motor">Sepeda Motor</option>
                    <option value="Mobil Pribadi">Mobil Pribadi</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>

                  
                 
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_telepon">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Email <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="email">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pernah PAUD <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                   <input type="radio" name="pernah_paud"
                            <?php if (isset($pernah_paud) && $pernah_paud=="Ya") echo "checked";?>
                                  value="Ya">Ya <br>
                            <input type="radio" name="pernah_paud"
                            <?php if (isset($pernah_paud) && $pernah_paud=="Tidak") echo "checked";?>
                                    value="Tidak">Tidak
                  </div>
                  </div>

                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pernah TK <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="radio" name="pernah_tk"
                            <?php if (isset($pernah_tk) && $pernah_tk=="Ya") echo "checked";?>
                                  value="Ya">Ya <br>
                            <input type="radio" name="pernah_tk"
                            <?php if (isset($pernah_tk) && $pernah_tk=="Tidak") echo "checked";?>
                                    value="Tidak">Tidak
                  </div>
                  </div>
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No SKHUN <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_skhun_mi">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Seri SKHUN <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_seri_skhun_s">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Seri Ijazah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_seri_ijazah_sd_mi">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Penerima KPS / KKS / PKH / KIP <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                   <input type="radio" name="penerima_kps_kks_pkh_kip"
                            <?php if (isset($penerima_kps_kks_pkh_kip) && $penerima_kps_kks_pkh_kip=="Ya") echo "checked";?>
                                  value="Ya">Ya <br>
                            <input type="radio" name="penerima_kps_kks_pkh_kip"
                            <?php if (isset($penerima_kps_kks_pkh_kip) && $penerima_kps_kks_pkh_kip=="Tidak") echo "checked";?>
                                    value="Tidak">Tidak
                  </div>
                  </div>

                   
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">No Penerima <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_penerima">
                  </div>
                  </div>
                  

                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Sakit yang diderita <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="pernah_menderita_sakit">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Pernah Mengaji <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="radio" name="pernah_mengaji"
                            <?php if (isset($pernah_mengaji) && $pernah_mengaji=="Ya") echo "checked";?>
                                  value="Ya">Ya <br>
                            <input type="radio" name="pernah_tk"
                            <?php if (isset($pernah_mengaji) && $pernah_mengaji=="Tidak") echo "checked";?>
                                    value="Tidak">Tidak
                  </div>
                  </div>


                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Keterangan Mengaji <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="keterangan_mengaji">
                  </div>
                  </div>
                  
                    
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Bahasa Sehari-Hari di Rumah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="bahasa_sehari_hari_dirumah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Prestasi di Sekolah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="prestasi_disekolah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Hobi <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="hobi">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Asal Sekolah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="asal_sekolah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Lama Belajar di SD / MI <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="lama_belajar_disd_mi">
                  </div>
                  </div>




                  <center><h3>Data Periodik Siswa</h3></center>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tinggi Badan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tinggi_badan">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Berat Badan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="berat_badan">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Status dalam Keluarga <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="radio" name="status_dalam_keluarga"
                            <?php if (isset($status_dalam_keluarga) && $status_dalam_keluarga=="Kandung") echo "checked";?>
                                  value="Kandung">Kandung <br>
                            <input type="radio" name="status_dalam_keluarga"
                            <?php if (isset($status_dalam_keluarga) && $status_dalam_keluarga=="Angkat") echo "checked";?>
                                    value="Angkat">Angkat
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Anak Ke- <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="anak_ke">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Saudara Kandung <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="jumlah_saudara_kandung">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Saudara Tiri <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="jumlah_saudara_tiri">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Saudara Angkat <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="jumlah_saudara_angkat">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Anak Yatim Piatu <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="anak_yatim_piatu" class="form-control">
                    <option value="Yatim">Tidak</option>
                    <option value="Yatim">Yatim</option>
                    <option value="Piatu">Piatu</option>
                    <option value="Yatim Piatu">Yatim Piatu</option>
                  </select>
                  </div>
                </div>
                  
                  
                  
                  <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
                  </div>

                  </div>
                  </div>
                  </form>
                  </div>

                  

                  <div class="active tab-pane" id="tab_content3" aria-labelledby="profile-tab">
                    <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/save_siswa_mutasi_data_orangtua');?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">

                    <center><h3>Data Ayah Siswa</h3></center>
                    <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Ayah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama_ayah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Depan Ayah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_depan_ayah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Belakang Ayah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_belakang_ayah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir Ayah <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tempat_lahir_ayah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir_ayah">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kewarganegaraan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kewarganegaraan_ayah">
                  </div>
                  </div>
                  </div>
                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="agama_ayah" class="form-control">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>


                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pendidikan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="pendidikan_ayah" class="form-control">
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="Sekolah Dasar">Sekolah Dasar</option>
                    <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                    <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    </select>
                  </div>
                </div>


                  
                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pekerjaan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="pekerjaan_ayah" class="form-control">
                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Petani">Petani</option>
                    <option value="Peternak">Peternak</option>
                    <option value="PNS/ TNI/ POLRI">PNS/ TNI/ POLRI</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                    <option value="Pedagang Besar">Pedagang Besar</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Pensiunan">Pensiunan</option>
                    </select>
                  </div>
                </div>

                  
                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Penghasilan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="penghasilan_ayah" class="form-control">
                    <option value="Kurang dari Rp. 499.999">Kurang dari Rp. 499.999</option>
                    <option value="Rp. 500.000 sd Rp. 999.999">Rp. 500.000 sd Rp. 999.999</option>
                    <option value="Rp. 1.000.000 sd Rp. 1.999.999">Rp. 1.000.000 sd Rp. 1.999.999</option>
                    <option value="Rp. 2.000.000 sd Rp. 3.999.999">Rp. 2.000.000 sd Rp. 3.999.999</option>
                    <option value="Rp. 4.000.000 sd Rp. 9.999.999">Rp. 4.000.000 sd Rp. 9.999.999</option>
                    <option value="Lebih dari Rp. 10.000.000">Lebih dari Rp. 10.000.000</option>
                    </select>
                  </div>
                </div>



                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Berkebutuhan khusus <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="ayah_berkebutuhan_khusus" class="form-control">
                    <option value="Tidak">Tidak</option>
                    <option value="Netra">Netra</option>
                    <option value="Rungu">Rungu</option>
                    <option value="Grahita Ringan">Grahita Ringan</option>
                    <option value="Grahita Sedang">Grahita Sedang</option>
                    <option value="Daksa Ringan">Daksa Ringan</option>
                    <option value="Daksa Sedang">Daksa Sedang</option>
                    <option value="Laras">Laras</option>
                    <option value="Wicara">Wicara</option>
                    <option value="Tuna Ganda">Tuna Ganda</option>
                    <option value="Hiperaktif">Hiperaktif</option>
                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                    <option value="Narkoba">Narkoba</option>
                    <option value="Indigo">Indigo</option>
                    <option value="Down Syndrome">Down Syndrome</option>
                    <option value="Autis">Autis</option>
                    <option value="Terbelakang">Terbelakang</option>
                    <option value="Bencana Alam / Sosial">Bencana Alam / Sosial</option>
                    <option value="Tidak Mampu Ekonomi">Tidak Mampu Ekonomi</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon / Handphone <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_telepon_hp_ayah">
                  </div>
                  </div>


                  <center><h3>Data Ibu Siswa</h3></center>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Ibu <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama_ibu">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Depan Ibu <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_depan_ibu">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Gelar Belakang Ibu <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="gelar_belakang_ibu">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir Ibu <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tempat_lahir_ibu">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir_ibu">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kewarganegaraan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kewarganegaraan_ibu">
                  </div>
                  </div>
                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="agama_ibu" class="form-control">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>

                  

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pendidikan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="pendidikan_ibu" class="form-control">
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="Sekolah Dasar">Sekolah Dasar</option>
                    <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                    <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    </select>
                  </div>
                </div>


                  
                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pekerjaan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="pekerjaan_ibu" class="form-control">
                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Petani">Petani</option>
                    <option value="Peternak">Peternak</option>
                    <option value="PNS/ TNI/ POLRI">PNS/ TNI/ POLRI</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                    <option value="Pedagang Besar">Pedagang Besar</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Pensiunan">Pensiunan</option>
                    </select>
                  </div>
                </div>

                  
                <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Penghasilan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="penghasilan_ibu" class="form-control">
                    <option value="Kurang dari Rp. 499.999">Kurang dari Rp. 499.999</option>
                    <option value="Rp. 500.000 sd Rp. 999.999">Rp. 500.000 sd Rp. 999.999</option>
                    <option value="Rp. 1.000.000 sd Rp. 1.999.999">Rp. 1.000.000 sd Rp. 1.999.999</option>
                    <option value="Rp. 2.000.000 sd Rp. 3.999.999">Rp. 2.000.000 sd Rp. 3.999.999</option>
                    <option value="Rp. 4.000.000 sd Rp. 9.999.999">Rp. 4.000.000 sd Rp. 9.999.999</option>
                    <option value="Lebih dari Rp. 10.000.000">Lebih dari Rp. 10.000.000</option>
                    </select>
                  </div>
                </div>


                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Berkebutuhan khusus <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="ibu_berkebutuhan_khusus" class="form-control">
                    <option value="Tidak">Tidak</option>
                    <option value="Netra">Netra</option>
                    <option value="Rungu">Rungu</option>
                    <option value="Grahita Ringan">Grahita Ringan</option>
                    <option value="Grahita Sedang">Grahita Sedang</option>
                    <option value="Daksa Ringan">Daksa Ringan</option>
                    <option value="Daksa Sedang">Daksa Sedang</option>
                    <option value="Laras">Laras</option>
                    <option value="Wicara">Wicara</option>
                    <option value="Tuna Ganda">Tuna Ganda</option>
                    <option value="Hiperaktif">Hiperaktif</option>
                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                    <option value="Narkoba">Narkoba</option>
                    <option value="Indigo">Indigo</option>
                    <option value="Down Syndrome">Down Syndrome</option>
                    <option value="Autis">Autis</option>
                    <option value="Terbelakang">Terbelakang</option>
                    <option value="Bencana Alam / Sosial">Bencana Alam / Sosial</option>
                    <option value="Tidak Mampu Ekonomi">Tidak Mampu Ekonomi</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>
                  
                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon / Handphone <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nomor_telepon_ibu">
                  </div>
                  </div>


                   <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
                  </div>


                 </div>
                 </form>
                 </div>
                  


                  <div class="active tab-pane" id="tab_content4" aria-labelledby="profile-tab">
                    <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/save_siswa_mutasi_data_wali');?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                    <center><h3>Data Wali Siswa</h3></center>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama Wali <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama_wali">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tempat Lahir <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="tempat_lahir_wali">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Tanggal Lahir <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tanggal_lahir_wali">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pendidikan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="pendidikan_wali" class="form-control">
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="Sekolah Dasar">Sekolah Dasar</option>
                    <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                    <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    </select>
                  </div>
                </div>



                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kewarganegaraan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="kewarganegaraan_wali">
                  </div>
                  </div>
                  


                   <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Agama <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="agama_wali" class="form-control">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  </div>
                </div>


                  
                 <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Pekerjaan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="pekerjaan_wali" class="form-control">
                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Petani">Petani</option>
                    <option value="Peternak">Peternak</option>
                    <option value="PNS/ TNI/ POLRI">PNS/ TNI/ POLRI</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                    <option value="Pedagang Besar">Pedagang Besar</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Pensiunan">Pensiunan</option>
                    </select>
                  </div>
                </div>

                  <div class="form-group formgrup jarakform">            
                   <label class="control-label col-md-3" for="first-name">Penghasilan <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                  <select name="penghasilan_wali" class="form-control">
                    <option value="Kurang dari Rp. 499.999">Kurang dari Rp. 499.999</option>
                    <option value="Rp. 500.000 sd Rp. 999.999">Rp. 500.000 sd Rp. 999.999</option>
                    <option value="Rp. 1.000.000 sd Rp. 1.999.999">Rp. 1.000.000 sd Rp. 1.999.999</option>
                    <option value="Rp. 2.000.000 sd Rp. 3.999.999">Rp. 2.000.000 sd Rp. 3.999.999</option>
                    <option value="Rp. 4.000.000 sd Rp. 9.999.999">Rp. 4.000.000 sd Rp. 9.999.999</option>
                    <option value="Lebih dari Rp. 10.000.000">Lebih dari Rp. 10.000.000</option>
                    </select>
                  </div>
                </div>

                  
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Alamat <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="alamat_wali">
                  </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nomor Telepon/ Handphone <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="no_telepon_hp_wali">
                  </div>
                  </div>

                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                  <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
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
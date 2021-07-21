<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Daftar Ulang Siswa Baru<br></center> 
      <br>
      </h1>
  </section>
  <section class="content">

    <?php echo $this->session->userdata('berkas'); ?> <!--  -->
    <?php echo $this->session->userdata('dusiswa'); ?> <!-- pengumuman update -->
    <?php echo $this->session->userdata('duortu'); ?> <!-- pengumuman update -->
    <?php echo $this->session->userdata('duwali'); ?> <!-- pengumuman update -->

    <div class="col-md-12">
      <div class="nav-tabs-custom">
     <!-- page content -->
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content5" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Petunjuk Pengisian</a>
          </li><li role="presentation"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Siswa</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Orang Tua</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Wali</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Berkas</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" fade" id="tab_content5" aria-labelledby="home-tab">
           <?php
           if (!$tabel_form_daftarulang_ppdb) {
            ?>
              <br><br><br><br><br><br><br><br>
              <p><h5><center>Tidak dalam masa pendaftaran.<center></h5></p>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <?php
           } else if ($cek_pendaftar_daftarulang_ppdb) {
            ?>
              <br><br><br><br><br><br><br><br>
              <p><h5><center>Kamu bukan siswa baru.</p></center></h5>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
              <?php
           } else {
             ?>
             <h4><center>Petunjuk Pengisian Formulir Daftar Ulang Siswa Baru</center></h4>
              <br>
              <p>
                Formulir Daftar Ulang siswa baru memiliki 5 tab, masing-masing tujuannya adalah:
                <br>
                <p>
                  1. Tab Petunjuk <br>
                  Berisi petunjuk pengisian formulir daftar ulang siswa baru. Harap membaca petunjuk sebelum melakukan pengisian formulir ini. Disarankan untuk mengisi formulir secara urut, kemudian "simpan" isian formulir disetiap tabnya. Setelah semua pengisian selesai, segera lakukan "logout" (panel "logout" ada disebelah kanan atas) dan segera serahkan berkas kepada pihak sekolah.
                </p>
                <p>
                  2. Tab Data Siswa <br>
                  Tab ini merupakan formulir data siswa. Berisi Data Pokok dan Data Tambahan. Harap diisi secara lengkap dan benar. Tab ini wajib diisi.
                </p>
                <p>
                  3. Tab Data Orang Tua Siswa <br>
                  Tab ini merupakan formulir data orang tua kandung siswa. Harap diisi secara lengkap dan benar. Tab ini wajib diisi.
                </p>
                <p>
                  4. Tab Data Wali Siswa <br>
                  Tab ini merupakan formulir data wali siswa. Tab ini dapat dikosongkan apabila siswa tidak memiliki wali.
                </p>
                <p>
                  5. Tab Berkas <br>
                  Tab ini berisikan berkas yang harus diberikan kepada sekolah. Berikan centang pada berkas yang akan diberikan. Tab ini wajib diisi.
                </p>
                <br>
              </p>
              <?php
              } 
              ?>
          </div>

   <!-- ============================================ END OF TAB CONTENT 5 ================================== -->
          <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="profile-tab">
            <?php
             if (!$tabel_form_daftarulang_ppdb) {
              ?>
                <br><br><br><br><br><br><br><br>
                <p><h5><center>Tidak dalam masa pendaftaran.</center></h5></p><br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <?php
             } else if ($cek_pendaftar_daftarulang_ppdb) {
              ?>
                <br><br><br><br><br><br><br><br>
                <p><h5><center>Kamu bukan siswa baru.</center></h5></p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
                <?php
             } else {
             ?>
              <div class="form-group">
                <h4 class="box-title"><center>Data Pokok Siswa</center></h4>   
                <br>

                  <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->nama; ?>" readonly>
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">NISN*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input placeholder=" ambil dari Tabel Pendaftar" type="text" value="<?php echo $row_siswa->nisn; ?>" class="form-control col-md-7 col-xs-12" readonly>
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input placeholder=" ambil dari Tabel Pendaftar" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $row_siswa->tempat_lahir; ?>" readonly>
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input placeholder=" ambil dari Tabel Pendaftar" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $row_siswa->tanggal_lahir; ?>" readonly>
              </div>
          </div>
          <br><br>

          <br><h4><center>Data Tambahan Siswa</center> </h4>

          <form class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/siswa/daftarulang_ppdb_siswa/updatesiswa'); ?>" enctype="multipart/form-data">
          <br>
            
          <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Foto*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo base_url();?>assets/distribusi/foto_siswa/<?php echo $row_siswa->foto;?>" class="col-sm-5">
                      <!-- <img class="profile-user-img" src="<?php echo base_url();?>/assets/distribusi/foto_siswa/<?php echo $row_siswa->foto; ?>" alt="Belum Ada Foto Siswa"> -->
                      <input required="required" type="file" class="form-control" name="foto" accept="image/*">
                </div>
            </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <div id="gender" class="dropdown" data-toggle="buttons">
                <select required="required" name="agama" value="<?php echo $row_siswa->agama; ?>">
                  <option value="Islam" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Islam") echo "selected";?>> Islam </option>
                  <option value="Kristen" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Kristen") echo "selected";?>> Kristen </option>
                  <option value="Hindu" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Hindu") echo "selected";?>> Hindu </option>
                  <option value="Budha" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Budha") echo "selected";?>> Budha </option>
                  <option value="Katholik" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Katholik") echo "selected";?>> Katholik </option>
                  <option value="Lainnya" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Lainnya") echo "selected";?>> Lainnya </option>
                </select> 
              </div>
              </div>
          </div>

            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tinggal</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="tempat_tinggal" value="<?php echo $row_siswa->tempat_tinggal; ?>">
                    <option value="Dengan Orang Tua" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Dengan Orang Tua") echo "selected";?>> Dengan Orang Tua </option>
                     <option value="Dengan Saudara" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Dengan Saudara") echo "selected";?>> Dengan Saudara </option>
                     <option value="Tinggal di asrama" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Tinggal di asrama") echo "selected";?>> Tinggal di asrama </option>
                     <option value="Tinggal di kos" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Tinggal di kos") echo "selected";?>> Tinggal di kos </option>
                   </select>
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="textarea" rows="2" required="required" name="alamat"><?php echo $row_siswa->alamat; ?></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">RT*</label>
                <div class="col-md-1 col-sm-6 col-xs-12">
                  <input type="text" required="required" class="form-control" name="rt" value="<?php echo $row_siswa->rt; ?>">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">RW*</label>
                <div class="col-md-1 col-sm-6 col-xs-12">
                  <input type="text" required="required" class="form-control" name="rw" value="<?php echo $row_siswa->rw; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dusun*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama_dusun" value="<?php echo $row_siswa->nama_dusun; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Desa*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="desa_kelurahan" value="<?php echo $row_siswa->desa_kelurahan; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" required="required" class="form-control col-md-7 col-xs-12" type="text" name="kecamatan" value="<?php echo $row_siswa->kecamatan; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kode Pos</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kode_pos" value="<?php echo $row_siswa->kode_pos; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Penduduk</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" name="kategori_penduduk"
                    <?php if (isset($row_siswa->kategori_penduduk) && $row_siswa->kategori_penduduk=="Dalam Daerah") echo "checked";?>
                                    value="Dalam Daerah"> Dalam Daerah <br>
                   <input type="radio" name="kategori_penduduk"
                      <?php if (isset($row_siswa->kategori_penduduk) && $row_siswa->kategori_penduduk=="Luar Daerah") echo "checked";?>
                                      value="Luar Daerah"> Luar Daerah 
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Transportasi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
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
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_telepon" value="<?php echo $row_siswa->no_telepon; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php echo $row_siswa->email; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah Dasar*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama_sd_mi" value="<?php echo $row_siswa->nama_sd_mi; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lama Belajar di SD/ MI*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input required="required" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="lama_belajar_disd_mi" value="<?php echo $row_siswa->lama_belajar_disd_mi; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pernah PAUD</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" name="pernah_paud"
                    <?php if (isset($row_siswa->pernah_paud) && $row_siswa->pernah_paud=="Ya") echo "checked";?>
                                    value="Ya"> Ya <br>
                  <input type="radio" name="pernah_paud"
                    <?php if (isset($row_siswa->pernah_paud) && $row_siswa->pernah_paud=="Tidak") echo "checked";?>
                                      value="Tidak"> Tidak 
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pernah TK</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" name="pernah_tk"
                    <?php if (isset($row_siswa->pernah_tk) && $row_siswa->pernah_tk=="Ya") echo "checked";?>
                                    value="Ya"> Ya <br>
                  <input type="radio" name="pernah_tk"
                    <?php if (isset($row_siswa->pernah_tk) && $row_siswa->pernah_tk=="Tidak") echo "checked";?>
                                      value="Tidak"> Tidak 
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor SKHUN*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" required="required" class="form-control col-md-7 col-xs-12" type="text" name="no_skhun_mi" value="<?php echo $row_siswa->no_skhun_mi; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor SKHUN Sementara*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_seri_skhun_s" value="<?php echo $row_siswa->no_seri_skhun_s; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Seri Ijazah*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" required="required" class="form-control col-md-7 col-xs-12" type="text" name="no_seri_ijazah_sd_mi" value="<?php echo $row_siswa->no_seri_ijazah_sd_mi; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Penerima Kartu Perlidungan Sosial/ Kartu Keluarga Sejahtera/ Program Keluarga Harapan/ Kartu Indonesia Pintar</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="radio" name="penerima_kps_kks_pkh_kip"
                      <?php if (isset($row_siswa->penerima_kps_kks_pkh_kip) && $row_siswa->penerima_kps_kks_pkh_kip=="Ya") echo "checked";?>
                                      value="Ya"> Ya <br>
                    <input type="radio" name="penerima_kps_kks_pkh_kip"
                      <?php if (isset($row_siswa->penerima_kps_kks_pkh_kip) && $row_siswa->penerima_kps_kks_pkh_kip=="Tidak") echo "checked";?>
                                        value="Tidak"> Tidak
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Penerima</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_penerima" value="<?php echo $row_siswa->no_penerima; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pernah Menderita Sakit</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="pernah_menderita_sakit" value="<?php echo $row_siswa->pernah_menderita_sakit; ?>">
                </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="berkebutuhan_khusus" value="<?php echo $row_siswa->berkebutuhan_khusus; ?>">
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
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa Sehari-hari</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="bahasa_sehari_hari_dirumah" value="<?php echo $row_siswa->bahasa_sehari_hari_dirumah; ?>">
                </div>
            </div>

          <br><h4><center>Data Periodik</center> </h4>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan* </label>
            <div class="col-md-2 col-sm-6 col-xs-12">
              <input placeholder=" dalam centimeter" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="tinggi_badan" value="<?php echo $row_siswa->tinggi_badan; ?>">
            </div>
          </div>
          <div class="form-group"> 
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan* </label>
              <div class="col-md-2 col-sm-6 col-xs-12">
                <input placeholder="dalam kilogram" id="middle-name" class="form-control place col-md-7 col-xs-12" required="required" type="text" name="berat_badan" value="<?php echo $row_siswa->berat_badan; ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status Dalam Keluarga*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" name="status_dalam_keluarga"
                    <?php if (isset($row_siswa->status_dalam_keluarga) && $row_siswa->status_dalam_keluarga=="Kandung") echo "checked";?>
                                    value="Kandung"> Kandung <br>
                  <input type="radio" name="status_dalam_keluarga"
                    <?php if (isset($row_siswa->status_dalam_keluarga) && $row_siswa->status_dalam_keluarga=="Angkat") echo "checked";?>
                                      value="Angkat"> Angkat
                </div>
            </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Anak Ke- </label>
              <div class="col-md-1 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="anak_ke" value="<?php echo $row_siswa->anak_ke; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Saudara Kandung</label>
              <div class="col-md-1 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="jumlah_saudara_kandung" value="<?php echo $row_siswa->jumlah_saudara_kandung; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Saudara Tiri</label>
              <div class="col-md-1 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="jumlah_saudara_tiri" value="<?php echo $row_siswa->jumlah_saudara_tiri; ?>">
              </div>
          </div>
          <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Anak Yatim Piatu</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="anak_yatim_piatu" value="<?php echo $row_siswa->anak_yatim_piatu; ?>">
                    <option value="Tidak" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Tidak") echo "selected";?>> Tidak </option>
                    <option value="Yatim" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Yatim") echo "selected";?>> Yatim </option>
                     <option value="Piatu" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Piatu") echo "selected";?>> Piatu</option>
                     <option value="Yatim Piatu" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Yatim Piatu") echo "selected";?>> Yatim Piatu</option>
                  </select> 
                </div>
            </div>
            <br><br>
      
      <div class="modal-footer">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
          <button type="submit" class="btn btn-success">Simpan</button>
          <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
        </div>
      </div>
  </form>
          </div>   
           <?php
                } 
                ?>   
      </div>

     <!-- =========================================end tab 1================================================== -->
                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                  <?php
                 if (!$tabel_form_daftarulang_ppdb) {
                  ?>
                    <br><br><br><br><br><br><br><br><p><h5><center>Tidak dalam masa pendaftaran.<center></h5><p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php
                 } else if ($cek_pendaftar_daftarulang_ppdb) {
                  ?>
                    <br><br><br><br><br><br><br><br><p><h5><center>Kamu bukan siswa baru.<center></h5><p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
                    <?php
                 } else {
                 ?>
                 <h4><center>Berkas Daftar Ulang PPDB</center></h4>
                    <br>
                    
                    <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/siswa/daftarulang_ppdb_siswa/saveberkas'); ?>" >

                    <?php
                    if ($settingformberkas['nomor_pendaftar'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Pendaftaran*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-6" id="first-name" required="required" name="nomor_pendaftar">
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berkas yang harus dikumpulkan*</label>
                    </div><?php
                    if ($settingformberkas['surat_pernyataan'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" class="flat" name="surat_pernyataan" value="1">
                        <label>Surat Pernyataan </label>
                        </div>
                    </div>
                      <?php
                    }
                    ?>
                    <?php
                    if ($settingformberkas['form_pendataan'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" class="flat" name="form_pendataan" value="1">
                        <label>Formulir Pendataan </label>
                        </div>
                     </div>
                      <?php
                    }
                    ?>
                    <?php
                    if ($settingformberkas['tanda_pembayaran'] == '1') {
                    ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" class="flat" name="tanda_pembayaran" value="1">
                        <label>Tanda Pembayaran</label>
                        </div>
                     </div>
                      <?php
                    }
                    ?>
                    <?php
                    if ($settingformberkas['berkas_1'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" name="berkas_1" value="1"> 
                        <label><?php echo "hhhh"?></label>
                      </div>
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($settingformberkas['berkas_2'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" name="berkas_2" value="1"> 
                        <label><?php echo "hhhh"?> </label>
                      </div>
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($settingformberkas['berkas_3'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" name="berkas_3" value="1"> 
                        <label><?php echo "hhhh"?> </label>
                      </div>
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($settingformberkas['berkas_4'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" name="berkas_4" value="1"> 
                        <label><?php echo "hhhh"?></label> 
                      </div>
                    </div>
                    <?php
                    }
                    ?>

                    <?php
                    if ($settingformberkas['berkas_5'] == '1') {
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" name="berkas_5" value="1"> 
                        <label><?php echo "hhhh"?> </label>
                      </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="modal-footer">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
                      </div>
                    </div>
                    </form>
                    <?php
                    } 
                    ?>
                </div>

   <!-- ================================================== END OF TAB CONTENT 4 ================================== -->
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                   <?php
                 if (!$tabel_form_daftarulang_ppdb) {
                  ?>
                    <br><br><br><br><br><br><br><br>
                    <p><h5><center>Tidak dalam masa pendaftaran.</center></h5></p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php
                 } else if ($cek_pendaftar_daftarulang_ppdb) {
                  ?>
                    <br><br><br><br><br><br><br><br>
                    <p><h5><center>Kamu bukan siswa baru.</center></h5></p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
                    <?php
                 } else {
                 ?>
                     <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/siswa/daftarulang_ppdb_siswa/updateortusiswa'); ?>">
                  <br>
                  
                  <h4><center>Data Ayah Siswa</center> </h4>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama ayah*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" required="required" name="nama_ayah" value="<?php echo $row_ortu->nama_ayah; ?>">
                        </div>
                  </div>
                  <br>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Depan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_depan_ayah" value="<?php echo $row_ortu->gelar_depan_ayah; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Belakang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_belakang_ayah" value="<?php echo $row_ortu->gelar_belakang_ayah; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" name="tempat_lahir_ayah" value="<?php echo $row_ortu->tempat_lahir_ayah; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir*</label>
                        <fieldset>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                              <input type="date" class="form-control" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tgl_lahir_ayah" value="<?php echo $row_ortu->tanggal_lahir_ayah; ?>">
                              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                              </div>
                            </div>
                          </fieldset>
                  </div>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kewarganegaraan_ayah" value="<?php echo $row_ortu->kewarganegaraan_ayah; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <select required="required" name="agama_ayah" value="<?php echo $row_ortu->agama_ayah; ?>">
                          <option value="Islam" <?php if (isset($row_ortu->agama_ayah) && $row_ortu->agama_ayah=="Islam") echo "selected";?>> Islam </option>
                          <option value="Kristen" <?php if (isset($row_ortu->agama_ayah) && $row_ortu->agama_ayah=="Kristen") echo "selected";?>> Kristen </option>
                          <option value="Hindu" <?php if (isset($row_ortu->agama_ayah) && $row_ortu->agama_ayah=="Hindu") echo "selected";?>> Hindu </option>
                          <option value="Budha" <?php if (isset($row_ortu->agama_ayah) && $row_ortu->agama_ayah=="Budha") echo "selected";?>> Budha </option>
                          <option value="Katholik" <?php if (isset($row_ortu->agama_ayah) && $row_ortu->agama_ayah=="Katholik") echo "selected";?>> Katholik </option>
                          <option value="Lainnya" <?php if (isset($row_ortu->agama_ayah) && $row_ortu->agama_ayah=="Lainnya") echo "selected";?>> Lainnya </option>
                        </select> 
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pendidikan_ayah" value="<?php echo $row_ortu->pendidikan_ayah; ?>">
                            <option value="Tidak Sekolah" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                            <option value="Sekolah Dasar" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                            <option value="Sekolah Menengah Pertama" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                            <option value="Sekolah Menengah Atas" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                            <option value="D1" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="D1") echo "selected";?>> D1 </option>
                            <option value="D2" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="D2") echo "selected";?>> D2 </option>
                            <option value="D3" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="D3") echo "selected";?>> D3 </option>
                            <option value="D4" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="D4") echo "selected";?>> D4 </option>
                            <option value="S1" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="S1") echo "selected";?>> S1 </option>
                            <option value="S2" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="S2") echo "selected";?>> S2 </option>
                            <option value="S3" <?php if (isset($row_ortu->pendidikan_ayah) && $row_ortu->pendidikan_ayah=="S3") echo "selected";?>> S3 </option>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Ayah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pekerjaan_ayah" value="<?php echo $row_ortu->pekerjaan_ayah; ?>">
                            <option value="Tidak Bekerja" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                            <option value="Nelayan" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Nelayan") echo "selected";?>> Nelayan </option>
                            <option value="Petani" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Petani") echo "selected";?>> Petani </option>
                            <option value="Peternak" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Peternak") echo "selected";?>> Peternak </option>
                            <option value="PNS/ TNI/ POLRI" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                            <option value="Karyawan Swasta" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                            <option value="Pedagang Kecil" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                            <option value="Pedagang Besar" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                            <option value="Wiraswasta" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                            <option value="Wirausaha" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Wirausaha") echo "selected";?>> Wirausaha </option>
                            <option value="Buruh" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Buruh") echo "selected";?>> Buruh </option>
                            <option value="Pensiunan" <?php if (isset($row_ortu->pekerjaan_ayah) && $row_ortu->pekerjaan_ayah=="Pensiunan") echo "selected";?>> Pensiunan </option>
                          </select>  
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="penghasilan_ayah" value="<?php echo $row_ortu->penghasilan_ayah; ?>">
                            <option value="Kurang dari Rp. 499.999" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Kurang dari Rp. 499.999") echo "selected";?>> Kurang dari Rp. 499.999 </option>
                            <option value="Rp. 500.000 sd Rp. 999.999" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Rp. 500.000 sd Rp. 999.999") echo "selected";?>> Rp. 500.000 sd Rp. 999.999 </option>
                            <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Rp. 1.000.000 sd Rp. 1.999.999") echo "selected";?>> Rp. 1.000.000 sd Rp. 1.999.999 </option>
                            <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Rp. 2.000.000 sd Rp. 3.999.999") echo "selected";?>> Rp. 2.000.000 sd Rp. 3.999.999 </option>
                            <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Rp. 4.000.000 sd Rp. 9.999.999") echo "selected";?>> Rp. 4.000.000 sd Rp. 9.999.999 </option>
                            <option value="Lebih dari Rp. 10.000.000" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Lebih dari Rp. 10.000.000") echo "selected";?>> Lebih dari Rp. 10.000.000 </option>
                            <option value="Tidak Ada" <?php if (isset($row_ortu->penghasilan_ayah) && $row_ortu->penghasilan_ayah=="Tidak Ada") echo "selected";?>> Tidak Ada </option>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="no_telepon_hp_ayah" value="<?php echo $row_ortu->no_telepon_hp_ayah; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="ayah_berkebutuhan_khusus" value="<?php echo $row_ortu->ayah_berkebutuhan_khusus; ?>">
                      <option value="Tidak" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Tidak") echo "selected";?>> Tidak </option>
                        <option value="Netra" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Netra") echo "selected";?>> Netra </option>
                        <option value="Rungu" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Rungu") echo "selected";?>> Rungu </option>
                        <option value="Grahita Ringan" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Grahita Ringan") echo "selected";?>> Grahita Ringan </option>
                        <option value="Grahita Sedang" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Grahita Sedang") echo "selected";?>> Grahita Sedang </option>
                        <option value="Daksa Ringan" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Daksa Ringan") echo "selected";?>> Daksa Ringan </option>
                        <option value="Daksa Sedang" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Daksa Sedang") echo "selected";?>> Daksa Sedang </option>
                        <option value="Laras" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Laras") echo "selected";?>> Laras </option>
                        <option value="Wicara" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Wicara") echo "selected";?>> Wicara </option>
                        <option value="Tuna Ganda" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Tuna Ganda") echo "selected";?>> Tuna Ganda </option>
                        <option value="Hiperaktif" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Hiperaktif") echo "selected";?>> Hiperaktif </option>
                        <option value="Cerdas Istimewa" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Cerdas Istimewa") echo "selected";?>> Cerdas Istimewa </option>
                        <option value="Bakat Istimewa" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Bakat Istimewa") echo "selected";?>> Bakat Istimewa </option>
                        <option value="Kesulitan Belajar" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Kesulitan Belajar") echo "selected";?>> Kesulitan Belajar </option>
                        <option value="Narkoba" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Narkoba") echo "selected";?>> Narkoba </option>
                        <option value="Indigo" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Indigo") echo "selected";?>> Indigo </option>
                        <option value="Down Syndrome" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Down Syndrome") echo "selected";?>> Down Syndrome </option>
                        <option value="Autis" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Autis") echo "selected";?>> Autis </option>
                        <option value="Terbelakang" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Terbelakang") echo "selected";?>> Terbelakang </option>
                        <option value="Bencana Alam/ Sosial" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Bencana Alam/ Sosial") echo "selected";?>> Bencana Alam/ Sosial </option>
                        <option value="Tidak Mampu Ekonomi" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Tidak Mampu Ekonomi") echo "selected";?>> Tidak Mampu Ekonomi </option>
                        <option value="Lainnya" <?php if (isset($row_ortu->ayah_berkebutuhan_khusus) && $row_ortu->ayah_berkebutuhan_khusus=="Lainnya") echo "selected";?>> Lainnya </option>
                      </select> 
                  </div>
                  </div>
                  <br><br>

                  <h4><center>Data Ibu Siswa</center> </h4>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" required="required" name="nama_ibu" value="<?php echo $row_ortu->nama_ibu; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Depan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_depan_ibu" value="<?php echo $row_ortu->gelar_depan_ibu; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Belakang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_belakang_ibu" value="<?php echo $row_ortu->gelar_belakang_ibu; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" name="tempat_lahir_ibu" value="<?php echo $row_ortu->tempat_lahir_ibu; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir*</label>
                        <fieldset>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                              <input type="date" class="form-control" id="tgl_berlaku" name="tanggal_lahir_ibu" value="<?php echo $row_ortu->tanggal_lahir_ibu; ?>">
                              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                              </div>
                            </div>
                          </fieldset>
                  </div>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kewarganegaraan_ibu" value="<?php echo $row_ortu->kewarganegaraan_ibu; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama*</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <select required="required" name="agama_ibu" value="<?php echo $row_ortu->agama_ibu; ?>">
                          <option value="Islam" <?php if (isset($row_ortu->agama_ibu) && $row_ortu->agama_ibu=="Islam") echo "selected";?>> Islam </option>
                          <option value="Kristen" <?php if (isset($row_ortu->agama_ibu) && $row_ortu->agama_ibu=="Kristen") echo "selected";?>> Kristen </option>
                          <option value="Hindu" <?php if (isset($row_ortu->agama_ibu) && $row_ortu->agama_ibu=="Hindu") echo "selected";?>> Hindu </option>
                          <option value="Budha" <?php if (isset($row_ortu->agama_ibu) && $row_ortu->agama_ibu=="Budha") echo "selected";?>> Budha </option>
                          <option value="Katholik" <?php if (isset($row_ortu->agama_ibu) && $row_ortu->agama_ibu=="Katholik") echo "selected";?>> Katholik </option>
                          <option value="Lainnya" <?php if (isset($row_ortu->agama_ibu) && $row_ortu->agama_ibu=="Lainnya") echo "selected";?>> Lainnya </option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pendidikan_ibu" value="<?php echo $row_ortu->pendidikan_ibu; ?>">
                            <option value="Tidak Sekolah" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                            <option value="Sekolah Dasar" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                            <option value="Sekolah Menengah Pertama" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                            <option value="Sekolah Menengah Atas" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                            <option value="D1" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="D1") echo "selected";?>> D1 </option>
                            <option value="D2" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="D2") echo "selected";?>> D2 </option>
                            <option value="D3" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="D3") echo "selected";?>> D3 </option>
                            <option value="D4" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="D4") echo "selected";?>> D4 </option>
                            <option value="S1" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="S1") echo "selected";?>> S1 </option>
                            <option value="S2" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="S2") echo "selected";?>> S2 </option>
                            <option value="S3" <?php if (isset($row_ortu->pendidikan_ibu) && $row_ortu->pendidikan_ibu=="S3") echo "selected";?>> S3 </option>
                          </select> 
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Ibu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pekerjaan_ibu" value="<?php echo $row_ortu->pekerjaan_ibu; ?>">
                            <option value="Tidak Bekerja" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                            <option value="Nelayan" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Nelayan") echo "selected";?>> Nelayan </option>
                            <option value="Petani" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Petani") echo "selected";?>> Petani </option>
                            <option value="Peternak" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Peternak") echo "selected";?>> Peternak </option>
                            <option value="PNS/ TNI/ POLRI" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                            <option value="Karyawan Swasta" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                            <option value="Pedagang Kecil" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                            <option value="Pedagang Besar" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                            <option value="Wiraswasta" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                            <option value="Wirausaha" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Wirausaha") echo "selected";?>> Wirausaha </option>
                            <option value="Buruh" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Buruh") echo "selected";?>> Buruh </option>
                            <option value="Pensiunan" <?php if (isset($row_ortu->pekerjaan_ibu) && $row_ortu->pekerjaan_ibu=="Pensiunan") echo "selected";?>> Pensiunan </option>
                          </select> 
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="penghasilan_ibu" value="<?php echo $row_ortu->penghasilan_ibu; ?>">
                            <option value="Kurang dari Rp. 499.999" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Kurang dari Rp. 499.999") echo "selected";?>> Kurang dari Rp. 499.999 </option>
                            <option value="Rp. 500.000 sd Rp. 999.999" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Rp. 500.000 sd Rp. 999.999") echo "selected";?>> Rp. 500.000 sd Rp. 999.999 </option>
                            <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Rp. 1.000.000 sd Rp. 1.999.999") echo "selected";?>> Rp. 1.000.000 sd Rp. 1.999.999 </option>
                            <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Rp. 2.000.000 sd Rp. 3.999.999") echo "selected";?>> Rp. 2.000.000 sd Rp. 3.999.999 </option>
                            <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Rp. 4.000.000 sd Rp. 9.999.999") echo "selected";?>> Rp. 4.000.000 sd Rp. 9.999.999 </option>
                            <option value="Lebih dari Rp. 10.000.000" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Lebih dari Rp. 10.000.000") echo "selected";?>> Lebih dari Rp. 10.000.000 </option>
                            <option value="Tidak Ada" <?php if (isset($row_ortu->penghasilan_ibu) && $row_ortu->penghasilan_ibu=="Tidak Ada") echo "selected";?>> Tidak Ada </option>
                          </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nomor_telepon_ibu" value="<?php echo $row_ortu->nomor_telepon_ibu; ?>">
                        </div>
                  </div>
                  <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                   <select name="ibu_berkebutuhan_khusus" value="<?php echo $row_ortu->ibu_berkebutuhan_khusus; ?>">
                      <option value="Tidak" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Tidak") echo "selected";?>> Tidak </option>
                        <option value="Netra" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Netra") echo "selected";?>> Netra </option>
                        <option value="Rungu" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Rungu") echo "selected";?>> Rungu </option>
                        <option value="Grahita Ringan" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Grahita Ringan") echo "selected";?>> Grahita Ringan </option>
                        <option value="Grahita Sedang" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Grahita Sedang") echo "selected";?>> Grahita Sedang </option>
                        <option value="Daksa Ringan" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Daksa Ringan") echo "selected";?>> Daksa Ringan </option>
                        <option value="Daksa Sedang" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Daksa Sedang") echo "selected";?>> Daksa Sedang </option>
                        <option value="Laras" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Laras") echo "selected";?>> Laras </option>
                        <option value="Wicara" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Wicara") echo "selected";?>> Wicara </option>
                        <option value="Tuna Ganda" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Tuna Ganda") echo "selected";?>> Tuna Ganda </option>
                        <option value="Hiperaktif" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Hiperaktif") echo "selected";?>> Hiperaktif </option>
                        <option value="Cerdas Istimewa" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Cerdas Istimewa") echo "selected";?>> Cerdas Istimewa </option>
                        <option value="Bakat Istimewa" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Bakat Istimewa") echo "selected";?>> Bakat Istimewa </option>
                        <option value="Kesulitan Belajar" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Kesulitan Belajar") echo "selected";?>> Kesulitan Belajar </option>
                        <option value="Narkoba" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Narkoba") echo "selected";?>> Narkoba </option>
                        <option value="Indigo" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Indigo") echo "selected";?>> Indigo </option>
                        <option value="Down Syndrome" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Down Syndrome") echo "selected";?>> Down Syndrome </option>
                        <option value="Autis" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Autis") echo "selected";?>> Autis </option>
                        <option value="Terbelakang" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Terbelakang") echo "selected";?>> Terbelakang </option>
                        <option value="Bencana Alam/ Sosial" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Bencana Alam/ Sosial") echo "selected";?>> Bencana Alam/ Sosial </option>
                        <option value="Tidak Mampu Ekonomi" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Tidak Mampu Ekonomi") echo "selected";?>> Tidak Mampu Ekonomi </option>
                        <option value="Lainnya" <?php if (isset($row_ortu->ibu_berkebutuhan_khusus) && $row_ortu->ibu_berkebutuhan_khusus=="Lainnya") echo "selected";?>> Lainnya </option>
                      </select> 
                  </div>
                  </div><br>
                  <div class="modal-footer">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                      <button type="submit" class="btn btn-success">Simpan</button>
                      <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
                    </div>
                  </div>
                </form>
                <?php
                } 
                ?>
              </div>

   <!-- =========================================== end tab 2 ============================================= -->

                        
              <div class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                <div class="tab-pane">
                  <?php
                 if (!$tabel_form_daftarulang_ppdb) {
                  ?>
                    <br><br><br><br><br><br><br><br><p><h5><center>Tidak dalam masa pendaftaran.<center></h5><p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php
                 } else if ($cek_pendaftar_daftarulang_ppdb) {
                  ?>
                    <br><br><br><br><br><br><br><br><p><h5><center>Kamu bukan siswa baru.<center></h5><p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
                    <?php
                 } else {
                 ?>
                  <h4><center>Informasi Wali</center></h4>
                    <br>

                    <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/siswa/daftarulang_ppdb_siswa/updatewalisiswa'); ?>">
          <br>
          
                      <h4><center>Data Wali Siswa</center> </h4>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Wali</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" name="nama_wali" value="<?php echo $row_ortu->nama_wali; ?>">
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="tempat_lahir_wali" value="<?php echo $row_ortu->tempat_lahir_wali; ?>">
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir</label>
                            <fieldset>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                  <input type="date" class="form-control" name="tanggal_lahir_wali" value="<?php echo $row_ortu->tanggal_lahir_wali; ?>">
                                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                  </div>
                                </div>
                              </fieldset>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
                          <div class="col-md-6 col-sm-6 col-xs-6">
                            <textarea class="form-control" rows="2" name="alamat_wali"><?php echo $row_ortu->alamat_wali; ?></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kewarganegaraan_wali" value="<?php echo $row_ortu->kewarganegaraan_wali; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="agama_wali" value="<?php echo $row_ortu->agama_wali; ?>">
                              <option value="Islam" <?php if (isset($row_ortu->agama_wali) && $row_ortu->agama_wali=="Islam") echo "selected";?>> Islam </option>
                              <option value="Kristen" <?php if (isset($row_ortu->agama_wali) && $row_ortu->agama_wali=="Kristen") echo "selected";?>> Kristen </option>
                              <option value="Hindu" <?php if (isset($row_ortu->agama_wali) && $row_ortu->agama_wali=="Hindu") echo "selected";?>> Hindu </option>
                              <option value="Budha" <?php if (isset($row_ortu->agama_wali) && $row_ortu->agama_wali=="Budha") echo "selected";?>> Budha </option>
                              <option value="Katholik" <?php if (isset($row_ortu->agama_wali) && $row_ortu->agama_wali=="Katholik") echo "selected";?>> Katholik </option>
                              <option value="Lainnya" <?php if (isset($row_ortu->agama_wali) && $row_ortu->agama_wali=="Lainnya") echo "selected";?>> Lainnya </option>
                            </select> 
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="pendidikan_wali" value="<?php echo $row_ortu->pendidikan_wali; ?>">
                                <option value="Tidak Sekolah" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                                <option value="Sekolah Dasar" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                                <option value="Sekolah Menengah Pertama" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                                <option value="Sekolah Menengah Atas" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                                <option value="D1" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="D1") echo "selected";?>> D1 </option>
                                <option value="D2" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="D2") echo "selected";?>> D2 </option>
                                <option value="D3" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="D3") echo "selected";?>> D3 </option>
                                <option value="D4" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="D4") echo "selected";?>> D4 </option>
                                <option value="S1" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="S1") echo "selected";?>> S1 </option>
                                <option value="S2" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="S2") echo "selected";?>> S2 </option>
                                <option value="S3" <?php if (isset($row_ortu->pendidikan_wali) && $row_ortu->pendidikan_wali=="S3") echo "selected";?>> S3 </option>
                              </select>  
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Wali</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="pekerjaan_wali" value="<?php echo $row_ortu->pekerjaan_wali; ?>">
                                <option value="Tidak Bekerja" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                                <option value="Nelayan" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Nelayan") echo "selected";?>> Nelayan </option>
                                <option value="Petani" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Petani") echo "selected";?>> Petani </option>
                                <option value="Peternak" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Peternak") echo "selected";?>> Peternak </option>
                                <option value="PNS/ TNI/ POLRI" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                                <option value="Karyawan Swasta" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                                <option value="Pedagang Kecil" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                                <option value="Pedagang Besar" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                                <option value="Wiraswasta" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                                <option value="Wirausaha" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Wirausaha") echo "selected";?>> Wirausaha </option>
                                <option value="Buruh" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Buruh") echo "selected";?>> Buruh </option>
                                <option value="Pensiunan" <?php if (isset($row_ortu->pekerjaan_wali) && $row_ortu->pekerjaan_wali=="Pensiunan") echo "selected";?>> Pensiunan </option>
                              </select> 
                            </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="no_telepon_hp_wali" value="<?php echo $row_ortu->no_telepon_hp_wali; ?>">
                            </div>
                      </div>
                      <br>

                      <div class="modal-footer">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                          <button type="submit" class="btn btn-success">Simpan</button>
                          <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
                        </div>
                      </div>

                  </form>

                </div>
                <?php
                    } 
                    ?>
              </div>

<!-- ========================================= end tab 3 =================================================== --> 
            </div>
          </div>
        </div>
      <!-- end of profil -->
      </div>
            <!-- end container main -->
    </div>
  </div>
</section>
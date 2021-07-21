<section id="feature" class="transparent-bg">
  <div class="container">
      <h2><center>Formulir Pendaftaran Mutasi Masuk </center></h2>
      <br><br>
      <?php echo $this->session->userdata('pesan'); ?>

         <?php 
      if ($settingform['nisn'] == '0')
      {
          ?><br><br><br><br><br><h3><center>Bukan Masa Pendaftaran Penerimaan Peserta Didik Baru Jalur Mutasi</center></h3><br><br><br><br><br><br><br><br><br>
          <?php
      } else {
        ?>
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('superadmin/savependaftar_mutasi'); ?>" >

          
          <?php
          if (@$settingform['nisn'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NISN </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name="nisn_pendaftar_mutasi">
                        </div>
          </div>
          <?php
          }
          ?>
          <?php
          if (@$settingform['nama_pendaftar_mutasi'] == '1') {
          ?>
          <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pendaftar Mutasi </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama" required="required">
                        </div>
          </div>

          

          <?php
          }
          ?>
          
          <?php
          if (@$settingform['tempat_lahir'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Lahir</label>
                        <fieldset>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tempat_lahir" required="required">
                          </div>
                        </fieldset>
          </div>
          <?php
          }
          ?>

          <?php
          if (@$settingform['tanggal_lahir'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir</label>
                        <fieldset>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_lahir" required="required">
                          </div>
                        </fieldset>
          </div>
          <?php
          }
          ?>
          
          <?php
          if (@$settingform['jenis_kelamin'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input required="required" type="radio" name="jenis_kelamin"
                            <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Perempuan") echo "checked";?>
                                  value="Perempuan">Perempuan <br>
                            <input type="radio" name="jenis_kelamin"
                            <?php if (isset($jenis_kelamin) && $jenis_kelamin=="Laki-Laki") echo "checked";?>
                                    value="Laki-laki">Laki-Laki 
                          </div>
          </div>
          <?php
          }
          ?>
          
          <?php
          if (@$settingform['agama'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input required="required" type="radio" name="agama"
                            <?php if (isset($agama) && $agama=="Islam") echo "checked";?>
                                  value="Islam">Islam <br>
                            <input type="radio" name="agama"
                            <?php if (isset($agama) && $agama=="Kristen") echo "checked";?>
                                  value="Kristen">Kristen <br>
                            <input type="radio" name="agama"
                            <?php if (isset($agama) && $agama=="Katholik") echo "checked";?>
                                  value="Katholik">Katholik <br>
                            <input type="radio" name="agama"
                            <?php if (isset($agama) && $agama=="Hindu") echo "checked";?>
                                  value="Hindu">Hindu <br>
                            <input type="radio" name="agama"
                            <?php if (isset($agama) && $agama=="Budha") echo "checked";?>
                                  value="Budha">Budha <br>
                            <input type="radio" name="jenis_kelamin"
                            <?php if (isset($agama) && $agama=="Lainnya") echo "checked";?>
                                    value="Lainnya">Lainnya 
                          </div>
          </div>
          <?php
          }
          ?>

          <?php
          if (@$settingform['alamat'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <textarea required="required" class="form-control" rows="3" name="alamat"></textarea>
                        </div>
          </div>
          <?php
          }
          ?>

          <?php
          if (@$settingform['no_telepon'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon/HP</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="no_telepon">
                        </div>
          </div>
          <?php
          }
          ?>
          
          <?php
          if (@$settingform['sekolah_asal'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <textarea required="required" class="form-control" rows="3" name="sekolah_asal"></textarea>
                        </div>
          </div>
          <?php
          }
          ?>

          <?php
          if (@$settingform['tahun_kelulusan'] == '1') {
          ?>
          <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Kelulusan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input required="required" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tahun_kelulusan">
                        </div>
          </div>

          <?php
          }
          ?>
          
          <?php
          if (@$settingform['nilai_un_bahasaindonesia'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN Bahasa Indonesia </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input required="required" type="text" class="form-control" name="nilai_un_bahasaindonesia" placeholder="gunakan tanda titik untuk desimal">
                        </div>
          </div>
          <?php
          }
          ?>
          <?php
          if (@$settingform['nilai_un_matematika'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN Matematika </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input required="required" type="text" class="form-control" name="nilai_un_matematika" placeholder="gunakan tanda titik untuk desimal">
                        </div>
          </div>
          <?php
          }
          ?>
          <?php
          if (@$settingform['nilai_un_ipa'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN IPA </label>
                          <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" required="required" class="form-control" name="nilai_un_ipa" placeholder="gunakan tanda titik untuk desimal">
                        </div>
          </div>
          <?php
          }
          ?>
          
          <?php
          if (@$settingform['jumlah_nilai_un'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Nilai UN </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input required="required" type="text" class="form-control" name="jumlah_nilai_un" placeholder="gunakan tanda titik untuk desimal">
                        </div>
          </div>
          <?php
          }
          ?>
          

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas yang Harus Diserahkan :</label>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
                *berikan centang pada berkas yang akan dikumpulkan
            </div>
          </div>


          <?php
          if (@$settingform['surat_ket_nisn'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="surat_ket_nisn" > 
              Surat Keterangan NISN
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if (@$settingform['fc_buku_rapor'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="checkbox" name="fc_buku_rapor" > 
                Fotocopy Rapor
              </div>
          </div>
          <?php
          }
          ?>
          
          <?php
          if (@$settingform['fc_skhun'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="fc_skhun" > 
              Fotokopi SKHUN
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if (@$settingform['surat_ket_bangku'] == '1') {
          ?>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="checkbox" name="surat_ket_bangku" > 
                Surat Keterangan Bangku Kosong
            </div>
          </div>
          <?php
          }
          ?>
          <?php
          if (@$settingform['surat_ket_pindah'] == '1') {
          ?>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="checkbox" name="surat_ket_pindah" > 
                Surat Keterangan Pindah
              </div>
          </div>
          <?php
          }
          ?>
          
          <?php
          if (@$settingform['skck_kepsek'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="skck_kepsek" > 
              Surat Kelakuan Baik dari Kepala Sekolah
            </div>
          </div>
          <?php
          }
          ?>

           
          <?php
          if ($settingform['berkas_1'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="berkas_1" value="on"> 
              <?php echo $settingformberkas['berkas_1']; ?> 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['berkas_2'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="berkas_2" value="on"> 
              <?php echo $settingformberkas['berkas_2']; ?> 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['berkas_3'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="berkas_3" value="on"> 
              <?php echo $settingformberkas['berkas_3']; ?> 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['berkas_4'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="berkas_4" value="on"> 
              <?php echo $settingformberkas['berkas_4']; ?> 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['berkas_5'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="berkas_5" value="on"> 
              <?php echo $settingformberkas['berkas_5']; ?> 
            </div>
          </div>
          <?php
          }
          ?>


          
                    <br><br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-dark" type="reset">Reset</button>
                          <button class="btn btn-dark" type="submit">Submit</button>
                        </div>
                      </div>

                      </form>
      <?php
      }
      ?>
       
        </div><!--/.container-->
    </section><!--/#feature-->
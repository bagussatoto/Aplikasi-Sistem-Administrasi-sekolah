<section id="feature" class="transparent-bg">
  <div class="container">
      <h2><center>Formulir Pendaftaran Mutasi Masuk </center></h2>
      <br><br>
      <?php echo $this->session->userdata('pesan'); ?>
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('distribusi/sekolah/savependaftar_mutasi'); ?>" >

          
          <?php
          if (@$settingform['nisn'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NISN </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name='nisn'>
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
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama">
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
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tahun_kelulusan">
                        </div>
          </div>
          <?php
          }
          ?>
          <?php
          if (@$settingform['usia'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Usia</label>
                        <fieldset>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="usia">

                            <!-- <input type="date" class="form-control" id="tgl_berlaku" placeholder="Tgl Berlaku" name="usia">
                            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one"> -->
                            <!-- </div> -->
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
                          <input type="radio" name="jenis_kelamin"
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
          if (@$settingform['alamat'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <textarea class="form-control" rows="3" name="alamat"></textarea>
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
          if (@$settingform['nilai_un_bahasaindonesia'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN Bahasa Indonesia </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="nilai_un_bahasaindonesia" placeholder="gunakan tanda titik untuk desimal">
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
                          <input type="text" class="form-control" name="nilai_un_matematika" placeholder="gunakan tanda titik untuk desimal">
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
                          <input type="text" class="form-control" name="nilai_un_ipa" placeholder="gunakan tanda titik untuk desimal">
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
                          <input type="text" class="form-control" name="jumlah_nilai_un" placeholder="gunakan tanda titik untuk desimal">
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
          if (@$settingform['sekolah_asal'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <textarea class="form-control" rows="3" name="sekolah_asal"></textarea>
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
       
        </div><!--/.container-->
    </section><!--/#feature-->
<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><center style="color:navy;">Daftar Ulang Kelas</center></h1>
    <br>
  </section>

  <section class="content">

    <?php echo $this->session->userdata('daftarkelas'); ?> <!-- sukses -->
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
           <?php
                 if (!$tabel_form_daftarulang_kenaikan) {
                  ?>
                    <br><br><br><br><br><br><br><br>
                    <p><h5><center>Tidak dalam masa pendaftaran.</center></h5></p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php
                 } 
                 /*else if ($cek_pendaftar_daftarulang_ppdb) 
                 {
                    ?>
                    Kamu sudah pernah melakukan daftar ulang PPDB. 
                    <?php*/
                    /*{
                 ?>
                 <?php*/
                 /*if (!$tabel_form_daftarulang_ppdb) {
                  ?>
                    Tidak dalam masa pendaftaran.
                    <?php
                 } */
                 /*else if ($cek_pendaftar_daftarulang_ppdb) {
                  ?>
                    Kamu sudah pernah melakukan daftar ulang PPDB. 
                    <?php*/
                 else {
                 ?>
          <br><h4><center>Data Pokok Siswa</center></h4>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->nama; ?>" readonly>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NISN</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->nisn; ?>" readonly>
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Induk Siswa</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $row_siswa->no_induk_siswa; ?>" readonly>
              </div>
          </div>

          <br><br><br><h4><center>DATA PERIODIK DAN TAMBAHAN</center> </h4>

          <form id="demo-form2" data-parsley-validate " method="post" action="<?php echo site_url('ppdb/siswa/daftarulang_kenaikan_siswa/savependaftarkelas/'.$row_siswa->nisn); ?>">

            <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat* </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="textarea" required="required" name="alamat"></textarea>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <br><br>
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <input placeholder=" dalam centimeter" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tinggi_badan">
            </div>
          </div>
          <br><br>
          <div class="form-group"> 
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan </label>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <input placeholder="dalam kilogram" id="middle-name" class="form-control place col-md-7 col-xs-12" type="text" name="berat_badan">
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Anak Ke- </label>
              <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                <input type="text" class="form-control" name="anak_ke">
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Saudara Kandung</label>
              <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                <input type="text" class="form-control" name="jumlah_saudara_kandung">
              </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Saudara Tiri</label>
              <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                <input type="text" class="form-control" name="jumlah_saudara_tiri">
              </div>
              <br><br><br>
          </div>

          <?php
          if ($settingform['surat_pernyataan'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
             <div class="col-md-1 col-sm-12 col-xs-12  form-group">
              <input type="checkbox" name="surat_pernyataan" value="1"> 
              Surat Pernyataan 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['rapor'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-12 col-sm-6 col-xs-12">
              <input type="checkbox" name="rapor" value="1"> 
              Rapor 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['formulir_pendataan'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="formulir_pendataan" value="1"> 
              Formulir Pendataan 
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          if ($settingform['tanda_pembayaran'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
             <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" name="tanda_pembayaran" value="1"> 
              Tanda Pembayaran 
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
              <input type="checkbox" name="berkas_1" value="1"> 
              <?php echo "hhhh"?> 
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
              <input type="checkbox" name="berkas_2" value="1"> 
              <?php echo "hhhh"?> 
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
              <input type="checkbox" name="berkas_3" value="1"> 
              <?php echo "hhhh"?> 
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
              <input type="checkbox" name="berkas_4" value="1"> 
              <?php echo "hhhh"?> 
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
              <input type="checkbox" name="berkas_5" value="1"> 
              <?php echo "hhhh"?> 
            </div>
          </div>
          <?php
          }
          ?>

          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
              <button type="submit" class="btn btn-primary"> Save </button>
              <button type="Reset" class="btn btn-primary"> Reset </button>
            </div>
          </div>
          </div>
      </div>
    </div>
    </form>
    <?php
    } 
    ?>
  </section>
</div>
</div>
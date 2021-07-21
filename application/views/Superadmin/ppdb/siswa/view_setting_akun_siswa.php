<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Pengaturan Akun<br></center>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">

          <?php echo $this->session->flashdata('berhasil')?>
          <?php echo $this->session->flashdata('beda')?>
          <?php echo $this->session->flashdata('verifikasi')?>
          
          <form id="demo-form2" data-parsley-validate " method="post" action="<?php echo site_url('kesiswaan/siswa/setting_akun_siswa/editakun'); ?>">

            <div class="form-group">
              <br>
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NISN</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $row_siswa->nisn; ?>" readonly>
                </div>
            </div>
            <br><br>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password Lama</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="Password" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " name="password_lama">
                </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <h6>Password dapat berupa kombinasi angka dan huruf</h6>
                </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password Baru</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="Password" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " name="password_baru">
                </div>
            </div>
            
            <br>
            <br>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ulangi Password Baru</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="Password" id="first-name" name="password_lagi" required="required" class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
                <br><br><br>
                <div align="center">
                  <button class="btn btn-success" type="submit" align="center"> Save </button>
                  <button class=" btn btn-primary" align="center" type="Reset"> Reset </button>
                </div>
                
             <br>
        </div>

</form>
    <!-- =========================================== EDIT ORTU WALI =========================================-->
  </section>
</div>
</div>
</div>
</div>
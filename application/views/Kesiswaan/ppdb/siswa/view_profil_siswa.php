<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Profil Siswa<br></center>
    </h1>
    <br>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
<!-- page content -->
          <div class="right_col" role="main">
            <div class="">
                <div class="x_panel">
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <br>
                          <img class="profile-user-img img-responsive img-round" src="<?php echo base_url();?>assets/kesiswaan/foto_siswa/<?php echo $row_siswa->foto; ?>" alt="User profile picture">
                          <br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Induk Siswa</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $row_siswa->no_induk_siswa; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status Siswa</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $row_siswa->status_siswa; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NISN</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->nisn; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->nama; ?>" readonly>
                          </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->jenis_kelamin; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat dan Tanggal Lahir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->tempat_lahir; ?> <?php echo $row_siswa->tanggal_lahir; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->agama; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="textarea" required="required" name="alamat" readonly><?php echo $row_siswa->alamat; ?></textarea>
                            </div>       
                          <br><br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor telpon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->no_telepon; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->email; ?>" readonly>
                            </div>
                          <br><br>
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berkebutuhan Khusus</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->berkebutuhan_khusus; ?>" readonly>
                            </div>

                        <br><br><br>
                        </b><h4 class="box-title"><center>Keterangan Ayah Kandung</center></h4>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" readonly id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->nama_ayah; ?>">
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Tanggal Lahir</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->tempat_lahir_ayah; ?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->agama_ayah; ?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor telpon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->no_telepon_hp_ayah; ?>" readonly>
                            </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $row_siswa_ortu->pekerjaan_ayah; ?>" readonly>
                            </div>

                        <br><br><br>
                        </b><h4 class="box-title"><center>Keterangan Ibu Kandung</center></h4>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->nama_ibu; ?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Tanggal Lahir</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->tempat_lahir_ibu; ?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->agama_ibu; ?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor telpon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa_ortu->nomor_telepon_ibu; ?>" readonly>
                            </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $row_siswa_ortu->pekerjaan_ibu; ?>" readonly>
                            </div>
                        <br><br><br>

                        </b><h4 class="box-title"><center>Data Periodik Siswa</center></h4>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hobi</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->hobi; ?>" readonly>
                            </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tinggi Badan</label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->tinggi_badan; echo " cm";?>" readonly>
                            </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berat Badan</label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $row_siswa->berat_badan; echo " kg";?>" readonly>
                            </div>
                        <br><br>
                                                
                      </div>
                      <br>
                      
                    </form>
                        </div>
                        <!-- end tab 1 -->
                        
                        <!-- end tab 2 -->
                      </div>
                    </div>
              </div>
            <!-- role main -->
          
      <!-- en of berkas -->
          </div>
            <!-- end container main -->
      </div>
            <!-- end container body-->

<!-- /.content-wrapper -->
    </div>
  </div>
</section>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Induk Pegawai<br></center>
    </h1>
    <h2><a onclick="history.back(-1)" class="btn btn-danger">Back </a></h2>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <!-- page content -->
          <div class="right_col" role="main">
            <div>
              <div class="x_panel">
                <div role="tabpanel" data-example-id="togglable-tabs">
                  <div id="detailspegawai" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      <br>
                      <img class="profile-user-img img-responsive img-rectangle" src="<?php echo base_url();?>assets/superadmin/Fotoguru/<?php echo $datpeg->foto;?>" alt="User profile picture"> 
                      <br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NIP">NIP</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="NIP" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $datpeg->NIP;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nama">Nama</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Nama" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $datpeg->Nama;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_panggilan">Nama Panggilan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nama_panggilan" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->nama_panggilan;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="No_SK">No.SK</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="No_SK" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->No_SK;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_guru">Kode Guru</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kode_guru" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->kode_guru;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Jenis_kelamin">Jenis Kelamin</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Jenis_kelamin" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->Jenis_kelamin;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Golongan">Golongan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Golongan" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->Golongan;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kompetensi">Kompetensi</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kompetensi" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->kompetensi;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TTL">Tanggal Lahir</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-nam" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->TTL;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TMT_capeg">TMT Capeg</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="TMT_capeg" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->TMT_capeg;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Pendidikan">Pendidikan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Pendidikan" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->Pendidikan;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Agama">Agama</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Agama" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->Agama;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kontak">Kontak</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kontak" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->kontak;?>" readonly>
                      </div>
                      <br><br>  
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea  id="text" id="alamat" required="required" class="form-control col-md-7 col-xs-12" readonly><?php echo $datpeg->alamat?></textarea>
                        <!-- <input type="text" id="alamat" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->alamat;?>" readonly> -->
                      </div>
                      <br><br> <br>  <br> 
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Status" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->Status;?>" readonly>
                      </div>
                      <br><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
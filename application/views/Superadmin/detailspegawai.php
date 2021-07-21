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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nuptk">NUPTK</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nuptk" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $datpeg->nuptk;?>" readonly>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="No_SK">No.SK PNS/CPNS</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="No_SK" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->No_SK;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_guru">Kode Guru</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kode_guru" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->kode_guru;?>" readonly>
                      </div>
                     <!--   <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matapelajaran">Mata Pelajaran</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="matapelajaran" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->matapelajaran;?>" readonly>
                      </div> -->
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
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pangkat">Jenjang Pangkat</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="pangkat" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->pangkat;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempatlahir">Tempat Lahir</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="tempatlahir" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->tempatlahir;?>" readonly>
                      </div>
                      <br><br>
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TTL">Tanggal Lahir</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="TTL" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->TTL;?>" readonly>
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
                        <input type="text" id="alamat" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->alamat;?>" readonly>
                      </div>
                      <br><br>  
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Status" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->Status;?>" readonly>
                      </div>

<!-- ==================================================================================
=========================== AYAH =================================================
================================================================================== -->
                       <br><br><br>
                        </b><h4 class="box-title"><center>Keterangan Ayah Kandung</center></h4>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaayah">Nama </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" readonly id="namaayah" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->namaayah;?>">
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempatlahirayah">Tempat Lahir</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="tempatlahirayah" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->tempatlahirayah;?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tangallahirayah">Tanggal Lahir</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="tanggallahirayah" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->tanggallahirayah;?>" readonly>
                          </div>
                      <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agamaayah">Agama</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="agamaayah" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->agamaayah;?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomorayah">Nomor telpon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomorayah" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->nomorayah;?>" readonly>
                            </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaanayah">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="pekerjaanayah" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $datpeg->pekerjaanayah;?>" readonly>
                            </div>
                        <br><br>  
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamatayah">Alamat</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="alamatayah" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->alamatayah;?>" readonly>
                          </div>
                        

<!-- ==================================================================================
=========================== IBU =================================================
================================================================================== -->

                        <br><br><br>
                        </b><h4 class="box-title"><center>Keterangan Ibu Kandung</center></h4>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaibu">Nama</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="namaibu" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->namaibu;?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempatlahiribu">Tempat Lahir</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id=tempatlahiribu required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->tempatlahiribu;?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempatlahiribu">Tanggal Lahir</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="tanggallahiribu" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->tanggallahiribu;?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agamaibu">Agama</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="agamaibu" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->agamaibu;?>" readonly>
                          </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nomoribu">Nomor telpon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nomoribu" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->nomoribu;?>" readonly>
                            </div>
                        <br><br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaanibu">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="pekerjaanibu" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $datpeg->pekerjaanibu;?>" readonly>
                            </div>
                         <br><br>  
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamatibu">Alamat</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="alamatibu" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $datpeg->alamatibu;?>" readonly>
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
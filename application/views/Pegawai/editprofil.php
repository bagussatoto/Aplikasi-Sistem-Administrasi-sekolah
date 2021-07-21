

<?php echo $this->session->userdata('warning'); ?> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Edit Data Pribadi<br></center>
    </h1>

  </section>




  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">

        <div class="nav-tabs-custom">



          <div class="tab-pane" id="editdatpeg">
            <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('pegawai/editprofil/'.$rowpeg->NIP); ?>" enctype="multipart/form-data">
              <div class="bigbox-mapel"> 
                <div class="box-mapel" style="padding: 2% 0">

                  <div class="col-sm-6">

                    <h3 style="color:blue; padding: 0 3%;" >
                      Data Diri Pegawai
                    </h1>
                    <br>


                    <div class="form-group formgrup jarakform" >
                      <label  class="col-sm-4 control-label">NIP</label>
                      <div class="col-sm-7">
                       <input type="text" class="form-control" id="NIP" name="NIP" required="required" value="<?php echo $rowpeg->NIP; ?>" readonly>
                     </div>
                   </div>

                        <div class="form-group formgrup jarakform" >
                      <label  class="col-sm-4 control-label">NUPTK</label>
                      <div class="col-sm-7">
                       <input type="text" class="form-control" id="nuptk" name="nuptk" required="required" value="<?php echo $rowpeg->nuptk; ?>">
                     </div>
                   </div>

                   <div class="form-group formgrup jarakform">
                    <label  class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="Nama" name="Nama" required="required" value="<?php echo $rowpeg->Nama; ?>">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label  class="col-sm-4 control-label">Nama Panggilan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="nama_panggilan" required="required" name="nama_panggilan" value="<?php echo $rowpeg->nama_panggilan; ?>">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label  class="col-sm-4 control-label">No. SK PNS/CPNS</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="No_SK" required="required" name="No_SK" value="<?php echo $rowpeg->No_SK; ?>">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label  class="col-sm-4 control-label">Kode Guru</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="kode_guru" name="kode_guru" value="<?php echo $rowpeg->kode_guru; ?>">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label  class="col-sm-4 control-label">Mata Pelajaran</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="matapelajaran" required="required" name="matapelajaran" value="<?php echo $rowpeg->matapelajaran; ?>">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label  class="col-sm-4 control-label">Jenis Kelamin</label>
                    <div class="col-sm-7">
                     <select class="form-control" name="Jenis_kelamin" required>
                      <option selected disabled value="">-Pilih Gender-</option>
                      <option value="Laki-Laki" <?php if ($rowpeg->Jenis_kelamin=="Laki-Laki") { echo "selected"; } ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php if ($rowpeg->Jenis_kelamin=="Perempuan") { echo "selected"; } ?>>Perempuan</option>

                    </select>
                  </div>
                </div>

                <div class="form-group formgrup jarakform">
                  <label  class="col-sm-4 control-label">Golongan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="Golongan" required="required" name="Golongan" value="<?php echo $rowpeg->Golongan; ?>">
                  </div>
                </div>

                <div class="form-group formgrup jarakform">
                  <label  class="col-sm-4 control-label">Jenjang Pangkat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="pangkat" required="required" name="pangkat" value="<?php echo $rowpeg->pangkat; ?>">
                  </div>
                </div>

                
               <div class="form-group formgrup jarakform">
                <label  class="col-sm-4 control-label">Tempat Lahir</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="tempatlahir" required="required" name="tempatlahir" value="<?php echo $rowpeg->tempatlahir; ?>">
                </div>
              </div>

              <div class="form-group formgrup jarakform">
                <label  class="col-sm-4 control-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input id="datetimepicker" type="text" class="form-control" required="required" name="TTL" value="<?php echo $rowpeg->TTL;?>">
                </div>
              </div>

              <div class="form-group formgrup jarakform">
                <label  class="col-sm-4 control-label">TMT Capeg</label>
                <div class="col-sm-7">
                  <input id="datetimepicker1" type="text" class="form-control" required="required" name="TMT_capeg" value="<?php echo $rowpeg->TMT_capeg; ?>">
                </div>
              </div>

              <div class="form-group formgrup jarakform">
                <label  class="col-sm-4 control-label">Pendidikan</label>
                <div class="col-sm-7">
                  <select class="form-control" name="Pendidikan" value="<?php echo set_value('Pendidikan');?>" required>
                   <option selected disabled value="">-Pilih Pendidikan-</option>
                   <option value="D1" <?php if ($rowpeg->Pendidikan=="D1") { echo "selected";} ?>>D1</option>
                   <option value="D2" <?php if ($rowpeg->Pendidikan=="D2") { echo "selected";} ?>>D2</option>
                   <option value="D3" <?php if ($rowpeg->Pendidikan=="D3") { echo "selected";} ?>>D3</option>
                   <option value="S1" <?php if ($rowpeg->Pendidikan=="S3") { echo "selected";} ?>>S1</option>
                   <option value="S2" <?php if ($rowpeg->Pendidikan=="S2") { echo "selected";} ?>>S2</option>
                   <option value="S3" <?php if ($rowpeg->Pendidikan=="S3") { echo "selected";} ?>>S3</option>
                 </select>
               </div>
             </div>

             <div class="form-group formgrup jarakform">
              <label  class="col-sm-4 control-label">Agama</label>
              <div class="col-sm-7">
               <select class="form-control" name="Agama" value="<?php echo set_value('Agama');?>" required>
                 <option selected disabled value="">-Pilih Agama-</option>
                 <option value="Islam" <?php if ($rowpeg->Agama=="Islam") { echo "selected";} ?>>Islam</option>
                 <option value="Kristen" <?php if ($rowpeg->Agama=="Kristen") { echo "selected";} ?>>Kristen</option>
                 <option value="Katholik" <?php if ($rowpeg->Agama=="Katholik") { echo "selected";} ?>>Katholik</option>
                 <option value="Budha" <?php if ($rowpeg->Agama=="Budha") { echo "selected";} ?>>Budha</option>
                 <option value="Hindu" <?php if ($rowpeg->Agama=="Hindu") { echo "selected";} ?>>Hindu</option>
                 <option value="Lainnya" <?php if ($rowpeg->Agama=="Lainnya") { echo "selected";} ?>>Lainnya</option>
               </select>
             </div>
           </div>

           <div class="form-group formgrup jarakform">
            <label  class="col-sm-4 control-label">Kontak</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kontak" required="required" value="<?php echo $rowpeg->kontak; ?>" placeholder="Masukkan Kontak">
            </div>
          </div>


          <div class="form-group formgrup jarakform">
            <label  class="col-sm-4 control-label">Alamat</label>
            <div class="col-sm-7">
              <textarea type="text" class="form-control" id="alamat" required="required" name="alamat"><?php echo $rowpeg->alamat;?></textarea>
            </div>
          </div>

          <div class="form-group formgrup jarakform">
            <label  class="col-sm-4 control-label">Status</label>
            <div class="col-sm-7">
             <select class="form-control" name="Status" value="<?php echo $rowpeg->Status; ?>" required>
               <option selected disabled value="">-Pilih Status-</option>
               <option value="Guru"  <?php if ($rowpeg->Status=="Guru") { echo "selected";} ?>>Guru</option>
               <option value="Karyawan" <?php if ($rowpeg->Status=="Karyawan") { echo "selected";} ?>>Karyawan</option>
             </select>
           </div>
         </div>

         <br>
         <h3 style="color:blue; padding: 0 3%;" >
          Data Ayah Kandung 
        </h3>
        <br>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="namaayah" required="required" value="<?php echo $rowpeg->namaayah; ?>" placeholder="Masukkan Nama">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Tempat Lahir</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="tempatlahirayah" required="required" value="<?php echo $rowpeg->tempatlahirayah; ?>" placeholder="Masukkan Tempat Lahir">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Tanggal Lahir </label>
          <div class="col-sm-7">
            <input id="datetimepicker2" type="text" class="form-control" required="required" name="tanggallahirayah" value="<?php echo $rowpeg->tanggallahirayah;?>">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Agama</label>
          <div class="col-sm-7">
           <select class="form-control" name="agamaayah" value="<?php echo set_value('agamaayah');?>" required>
             <option selected disabled value="">-Pilih Agama-</option>
             <option value="Islam" <?php if ($rowpeg->agamaayah=="Islam") { echo "selected";} ?>>Islam</option>
             <option value="Kristen" <?php if ($rowpeg->agamaayah=="Kristen") { echo "selected";} ?>>Kristen</option>
             <option value="Katholik" <?php if ($rowpeg->agamaayah=="Katholik") { echo "selected";} ?>>Katholik</option>
             <option value="Budha" <?php if ($rowpeg->agamaayah=="Budha") { echo "selected";} ?>>Budha</option>
             <option value="Hindu" <?php if ($rowpeg->agamaayah=="Hindu") { echo "selected";} ?>>Hindu</option>
             <option value="Lainnya" <?php if ($rowpeg->agamaayah=="Lainnya") { echo "selected";} ?>>Lainnya</option>
           </select>
         </div>
       </div>

       <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Kontak</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="nomorayah" required="required" value="<?php echo $rowpeg->nomorayah; ?>" placeholder="Masukkan Kontak">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Pekerjaan</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="pekerjaanayah" required="required" value="<?php echo $rowpeg->pekerjaanayah; ?>" placeholder="Masukkan Pekerjaan">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Alamat</label>
        <div class="col-sm-7">
          <textarea type="text" class="form-control" id="alamatayah" required="required" name="alamatayah"><?php echo $rowpeg->alamatayah;?></textarea>
        </div>
      </div>


      <br>
      <h3 style="color:blue; padding: 0 3%;" >
       Data Ibu Kandung
      </h1>
      <br>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Nama</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="namaibu" required="required" value="<?php echo $rowpeg->namaibu; ?>" placeholder="Masukkan Nama">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Tempat Lahir</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="tempatlahiribu" required="required" value="<?php echo $rowpeg->tempatlahiribu; ?>" placeholder="Masukkan Tempat Lahir">
        </div>
      </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Tanggal Lahir </label>
          <div class="col-sm-7">
            <input id="datetimepicker3" type="text" class="form-control" required="required" name="tanggallahiribu" value="<?php echo $rowpeg->tanggallahiribu;?>">
          </div>
        </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Agama</label>
        <div class="col-sm-7">
         <select class="form-control" name="agamaibu" value="<?php echo set_value('agamaibu');?>" required>
           <option selected disabled value="">-Pilih Agama-</option>
           <option value="Islam" <?php if ($rowpeg->agamaibu=="Islam") { echo "selected";} ?>>Islam</option>
           <option value="Kristen" <?php if ($rowpeg->agamaibu=="Kristen") { echo "selected";} ?>>Kristen</option>
           <option value="Katholik" <?php if ($rowpeg->agamaibu=="Katholik") { echo "selected";} ?>>Katholik</option>
           <option value="Budha" <?php if ($rowpeg->agamaibu=="Budha") { echo "selected";} ?>>Budha</option>
           <option value="Hindu" <?php if ($rowpeg->agamaibu=="Hindu") { echo "selected";} ?>>Hindu</option>
           <option value="Lainnya" <?php if ($rowpeg->agamaibu=="Lainnya") { echo "selected";} ?>>Lainnya</option>
         </select>
       </div>
     </div>

     <div class="form-group formgrup jarakform">
      <label  class="col-sm-4 control-label">Kontak</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="nomoribu" required="required" value="<?php echo $rowpeg->nomoribu; ?>" placeholder="Masukkan Kontak">
      </div>
    </div>

    <div class="form-group formgrup jarakform">
      <label  class="col-sm-4 control-label">Pekerjaan</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="pekerjaanibu" required="required" value="<?php echo $rowpeg->pekerjaanibu; ?>" placeholder="Masukkan Pekerjaan">
      </div>
    </div>

    <div class="form-group formgrup jarakform">
      <label  class="col-sm-4 control-label">Alamat</label>
      <div class="col-sm-7">
        <textarea type="text" class="form-control" id="alamatibu" required="required" name="alamatibu"><?php echo $rowpeg->alamatibu;?></textarea>
      </div>
    </div>

  <br>
    



    


   <!-- tutup foto pegawai -->
 </div>
 <br>


 <div class="col-sm-6">
   <div class="col-sm-4"></div>
   <img  src="<?php echo base_url();?>assets/superadmin/Fotoguru/<?php echo $rowpeg->foto;?>" class="col-sm-5">
 </div>

 <div class=" col-sm-6">
   <div class="col-sm-4">
   </div>
   <!--a href="<?php echo site_url('superadmin/pegawaibaru');?>" type="button" role="button" class="col-sm-3 btn btn-danger" style="margin:10%">Edit Foto</a-->
   <input  name="foto" style="margin:6%" class="col-sm-6" type="file">
 </div>

 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-5">
    <input onclick="return confirm('Apakah Anda yakin akan mengedit data ini?');" name="submit" type="submit" role="button" class="btn btn-danger" value="Edit">
    <a href="<?php echo site_url('pegawai/datapegawai');?>" type="button" role="button" class="btn btn-danger">Cancel</a>
  </div>
</div>
</form>

</div>
<!-- /.tab-pane -->

<!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row (main row) -->
<!-- /modal -->



</section>
<!-- /.content -->
</div>

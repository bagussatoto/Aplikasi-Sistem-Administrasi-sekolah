
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
            <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('karyawan/editprofil/'.$rowpeg->NIP); ?>" enctype="multipart/form-data">
              <div class="bigbox-mapel"> 
                <div class="box-mapel" style="padding: 2% 0">
                  <!-- tmpat -->
                  <div class="col-sm-6">
                    <!-- .. -->

                    <div class="form-group formgrup jarakform" >
                      <label  class="col-sm-4 control-label">NIP</label>
                      <div class="col-sm-7">
                       <input type="text" class="form-control" id="NIP" name="NIP" required="required" value="<?php echo $rowpeg->NIP; ?>" readonly>
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
                    <label  class="col-sm-4 control-label">No. SK</label>
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
                <label  class="col-sm-4 control-label" >Kompetensi</label>
                <div class="col-sm-7">
                 <select class="form-control" name="kompetensi" required>
                   <option selected disabled value="">-Pilih Kompetensi-</option>
                   <option value="Pedagogik"  <?php if ($rowpeg->kompetensi=="Pedagogik") { echo "selected";} ?>>Pedagogik</option>
                   <option value="Kepribadian"  <?php if ($rowpeg->kompetensi=="Kepribadian") { echo "selected";} ?>>Kepribadian</option>
                   <option value="Sosial"  <?php if ($rowpeg->kompetensi=="Sosial") { echo "selected";} ?>>Sosial</option>
                   <option value="Profesional"  <?php if ($rowpeg->kompetensi=="Profesional") { echo "selected";} ?>>Profesional</option>
                 </select>
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

       <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Status Aktif</label>
        <div class="col-sm-7">
         <select class="form-control" name="Status_pensiun" value="<?php echo $rowpeg->Status_pensiun; ?>">
           <option selected disabled value="">-Pilih Status-</option>
           <option value=""  <?php if ($rowpeg->Status_pensiun=="") { echo "selected";} ?>>Aktif</option>
           <option value="pensiun" <?php if ($rowpeg->Status_pensiun=="Pensiun") { echo "selected";} ?>>Pensiun</option>
         </select>
       </div>
     </div>
     <!-- tutup foto pegawai -->
   </div>
   <br>


   <div class="col-sm-6">
     <div class="col-sm-4"></div>
     <img src="<?php echo base_url();?>assets/superadmin/Fotoguru/<?php echo $rowpeg->foto;?>" class="col-sm-5">
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
      <a href="<?php echo site_url('karyawan/profile');?>" type="button" role="button" class="btn btn-danger">Cancel</a>
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

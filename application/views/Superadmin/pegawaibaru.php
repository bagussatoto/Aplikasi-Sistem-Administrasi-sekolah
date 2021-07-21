<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Kelola Data Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
  </section>
  <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">

        <div class="nav-tabs-custom">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#homedatpeg" data-toggle="tab">Lihat Data Pegawai</a></li>
            <?php
            if ($this->session->userdata('jabatan') == 'Superadmin') {
              ?>
              <li><a href="#tambahdatpeg" data-toggle="tab">Tambah Data Pegawai</a></li>
              <?php
            }
            ?>
            <?php
            if (($this->session->userdata('jabatan') == 'Superadmin') || ($this->session->userdata('jabatan') == 'Pegawai')) {
              ?>
              <li><a href="#editdatpeg" data-toggle="tab">Edit Data Pegawai</a></li>
              <?php
            }
            ?>
            
          </ul>
          <div class="tab-content">
           <div class="active tab-pane" id="homedatpeg">

             <div class="box">
              <div class="box-header">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#datapegawai" data-toggle="tab">Data Karyawan</a></li>
                  <li><a href="#dataguru" data-toggle="tab">Data Guru</a></li>
                  <li><a href="#datapensiun" data-toggle="tab">Data Pensiun</a></li>
                </ul>
              </div>

              <div class="tab-content">

                <!-- data pegawai -->
                <div class="active tab-pane" id="datapegawai">

                  <table id="example1" class="table table-bordered table-striped" > 
                    <thead> 
                      <tr style="background-color: #53c68c">
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Golongan</th> 
                        <th>No.SK</th>   
                        <th>Action</th>      
                      </tr>
                    </thead>
                    <tbody>
                      <!-- function datpeg -->
                      <?php
                      $no=1;
                      foreach ($datpeg->result() as $key) { ?>
                      <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $key->NIP;?></td>
                        <td><?php echo $key->Nama;?></td>
                        <td><?php echo $key->Golongan;?></td>
                        <td><?php echo $key->No_SK;?></td>

                        <td> 
                          <?php
                          if ($this->session->userdata('jabatan') == 'Superadmin') {
                            ?>
                            <a  href="<?php echo site_url('superadmin/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Details</a>
                            <?php
                          } else if ($this->session->userdata('jabatan') == 'Kepala Sekolah') {
                            ?>
                            <a > No More Details</a>
                            <?php

                          } else if ($this->session->userdata('jabatan') == 'Pegawai'){
                            ?>
                            <a  href="<?php echo site_url('pegawai/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Details</a>
                            <?php
                          } 
                          ?>
                        </td>     
                      </tr>
                      <?php $no++; }?>
                      <!-- tutup function -->
                    </tbody>
                  </table>
              
                </div>
                <!-- tutup tab pegawai -->

                <!-- data guru -->
                <div class="tab-pane" id="dataguru">

                 <table id="example2" class="table table-bordered table-striped"> 
                  <thead> 
                    <tr style="background-color: #53c68c">
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Golongan</th> 
                      <th>No.SK</th>   
                      <th>Action</th>      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($datguru->result() as $key) { ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo $key->NIP;?></td>
                      <td><?php echo $key->Nama;?></td>
                      <td><?php echo $key->Golongan;?></td>
                      <td><?php echo $key->No_SK;?></td>

                      <td> 
                        <?php
                        if ($this->session->userdata('jabatan') == 'Superadmin') {
                          ?>
                          <a  href="<?php echo site_url('superadmin/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Details</a>
                          <?php
                        } else if ($this->session->userdata('jabatan') == 'Kepala Sekolah') {
                          ?>
                          <a > No More Details</a>
                          <?php

                        } else if ($this->session->userdata('jabatan') == 'Pegawai'){
                          ?>
                          <a  href="<?php echo site_url('pegawai/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Details</a>
                          <?php
                        } 
                        ?>
                      </td>     
                    </tr>
                    <?php $no++; }?>
                  </tbody>
                </table>
              </div>
              <!-- tutup data guru -->

              <!-- datapensiun -->
              <div class="tab-pane" id="datapensiun">

               <table id="example3"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Golongan</th> 
                    <th>No.SK</th>   
                    <th>Action</th>      
                  </tr>
                </thead>
                <tbody>
                 <?php
                 $no=1;
                 foreach ($datpensiun->result() as $key) { ?>
                 <tr>
                  <td><?php echo $no?></td>
                  <td><?php echo $key->NIP;?></td>
                  <td><?php echo $key->Nama;?></td>
                  <td><?php echo $key->Golongan;?></td>
                  <td><?php echo $key->No_SK;?></td>

                  <td> 
                    <?php
                    if ($this->session->userdata('jabatan') == 'Superadmin') {
                      ?>
                      <a  href="<?php echo site_url('superadmin/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Details</a>
                      <?php
                    } else if ($this->session->userdata('jabatan') == 'Kepala Sekolah') {
                      ?>
                      <a > No More Details</a>
                      <?php

                    } else if ($this->session->userdata('jabatan') == 'Pegawai'){
                      ?>
                      <a  href="<?php echo site_url('pegawai/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Details</a>
                      <?php
                    } 
                    ?>
                  </td>   
                </tr>
                <?php $no++; }?>
              </tbody>
            </table>
          </div>
          <!-- tutup data pensiun -->
    <a href="<?php echo site_url('superadmin/printpegawaibaru'); ?>" target="_blank" class="btnjdwl btn btn-default"><i class="fa fa-print text-red "></i>Print</a>
        </div> <!-- tutup content -->
      </div>

    </div>



    <!-- tambah data pegawai -->
    <div class="tab-pane" id="tambahdatpeg">

    
     <div id="myImpor" class="modal fade" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Import</h4>
          </div>
        </div>
      </div>
    </div>
    <br>

    <?php
    if ($this->session->userdata('jabatan') == 'Superadmin') {
      ?>


      <div class="row">
        <div class="col-md-8">
          <a data-toggle="modal" type="button" class="btn btn-default pull-left" data-show="true" href="<?php echo site_url('superadmin/importdatpeg'); ?>" data-target="#myImpor" style="margin-left: 10px;">
            <i class="fa fa-file-o text-blue" aria-hidden="true"></i> Import Data Pegawai
          </a>
        </div>
      </div>
      <br>
      <?php
    }
    ?>
    <br>

    <?php echo form_open_multipart(site_url('superadmin/tambahdatpeg'), array("class"=>"form-horizontal formmapel")) ?>
    <!--  -->
    <div class="bigbox-mapel"> 
      <div class="box-mapel">
       <div class="box-header">
        <h3 class="box-title">Tambah Data Pegawai</h3>
      </div>


      <div class="col-sm-6">
        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">NIP</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="NIP" required="required" value="<?php echo set_value('NIP');?>" placeholder="Masukkan NIP">
          </div>
        </div>


        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">NUPTK</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nuptk" required="required" value="<?php echo set_value('nuptk');?>" placeholder="Masukkan NUPTK">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Nama Lengkap</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="Nama" required="required" value="<?php echo set_value('Nama');?>" placeholder="Masukkan Nama">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Nama Panggilan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" required="required" name="nama_panggilan"  value="<?php echo set_value('nama_panggilan');?>" placeholder="Masukkan Nama">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">No. SK PNS/CPNS</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="No_SK"  required="required" value="<?php echo set_value('No_SK');?>" placeholder="Masukkan No.SK PNS/CPNS">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Kode Guru</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="kode_guru" value="<?php echo set_value('kode_guru');?>" placeholder="Masukkan Kode Guru">
          </div>
        </div>


        <!-- <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Mata Pelajaran</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="matapelajaran" required="required" value="<?php echo set_value('matapelajaran');?>" placeholder="Masukkan Mata Pelajaran">
          </div>
        </div> -->


        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Jenis Kelamin</label>
          <div class="col-sm-7">
           <select class="form-control" name="Jenis_kelamin" value="<?php echo set_value('Jenis_kelamin');?>" required>
             <option selected disabled value="">-Pilih Gender-</option>
             <option value="Laki-Laki">Laki-Laki</option>
             <option value="Perempuan">Perempuan</option>
           </select>
         </div>
       </div>

       <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Golongan</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="Golongan" required="required" value="<?php echo set_value('Golongan');?>" placeholder="Masukkan Golongan ">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Jenjang Pangkat</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="pangkat" required="required" value="<?php echo set_value('pangkat');?>" placeholder="Masukkan Pangkat">
        </div>
      </div>


      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Tempat Lahir</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="tempatlahir" required="required" value="<?php echo set_value('tempatlahir');?>" placeholder="Masukkan Tempat Lahir">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Tanggal Lahir</label>
        <div class="col-sm-7">
          <input id="datetimepicker" type="text" class="form-control" name="TTL" required="required" value="<?php echo set_value('TTL');?>" placeholder="Tanggal Lahir">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">TMT Capeg</label>
        <div class="col-sm-7">
          <input id="datetimepicker1" type="text" name="TMT_capeg" required="required"  value="<?php echo set_value('TMT_capeg');?>" class="form-control" placeholder="TMT Capeg">
        </div>
      </div>

      <div class="form-group formgrup jarakform">
        <label  class="col-sm-4 control-label">Pendidikan</label>
        <div class="col-sm-7">
          <select class="form-control" name="Pendidikan" required="required" value="<?php echo set_value('Pendidikan');?>" required>
           <option selected disabled value="">-Pilih Pendidikan-</option>
           <option value="D3">D3</option>
           <option value="S1">S1</option>
           <option value="S2">S2</option>
           <option value="S3">S3</option>
         </select>
       </div>
     </div>

     <div class="form-group formgrup jarakform">
      <label  class="col-sm-4 control-label">Agama</label>
      <div class="col-sm-7">
       <select class="form-control" name="Agama"  value="<?php echo set_value('Agama');?>" required> 
         <option selected disabled value="">-Pilih Agama-</option>
         <option value="Islam">Islam</option>
         <option value="Kristen">Kristen</option>
         <option value="Katholik">Katholik</option>
         <option value="Budha">Budha</option>
         <option value="Hindu">Hindu</option>
         <option value="Lainnya">Lainnya</option>
       </select>
     </div>
   </div>

   <div class="form-group formgrup jarakform">
    <label  class="col-sm-4 control-label">Kontak</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="kontak" required="required" value="<?php echo set_value('kontak');?>" placeholder="Masukkan Kontak">
    </div>
  </div>

  <div class="form-group formgrup jarakform">
    <label  class="col-sm-4 control-label">Alamat</label>
    <div class="col-sm-7">
      <textarea type="text" class="form-control" name="alamat" required="required" value="<?php echo set_value('alamat');?>" placeholder="Masukkan Alamat"></textarea>
    </div>
  </div>

  <div class="form-group formgrup jarakform">
    <label  class="col-sm-4 control-label">Status</label>
    <div class="col-sm-7">
     <select  class="form-control"  name="Status" value="<?php echo set_value('Status');?>" required>
       <option selected disabled value="">-Pilih Status-</option>
       <option value="Guru">Guru</option>
       <option value="Karyawan">Karyawan</option>
     </select>
   </div>
 </div>

 <br>
 <div class="box-header">
  <h3 class="box-title">Keterangan Ayah Kandung</h3>
</div>


<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Nama</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="namaayah" required="required" value="<?php echo set_value('namaayah');?>" placeholder="Masukkan Nama">
  </div>
</div>


<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Tempat Lahir</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="tempatlahirayah" required="required" value="<?php echo set_value('tempatlahirayah');?>" placeholder="Masukkan Tempat Lahir">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Tanggal Lahir</label>
  <div class="col-sm-7">
    <input id="datetimepicker2" type="text" class="form-control" name="tanggallahirayah" required="required" value="<?php echo set_value('tangallahirayah');?>" placeholder="Tanggal Lahir">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Agama</label>
  <div class="col-sm-7">
   <select class="form-control" name="agamaayah"  value="<?php echo set_value('agamaayah');?>" required> 
     <option selected disabled value="">-Pilih Agama-</option>
     <option value="Islam">Islam</option>
     <option value="Kristen">Kristen</option>
     <option value="Katholik">Katholik</option>
     <option value="Budha">Budha</option>
     <option value="Hindu">Hindu</option>
     <option value="Lainnya">Lainnya</option>
   </select>
 </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Kontak</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="nomorayah" required="required" value="<?php echo set_value('nomorayah');?>" placeholder="Masukkan Kontak">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Pekerjaan</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="pekerjaanayah" required="required" value="<?php echo set_value('pekerjaanayah');?>" placeholder="Masukkan Pekerjaan">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Alamat</label>
  <div class="col-sm-7">
    <textarea type="text" class="form-control" name="alamatayah" required="required" value="<?php echo set_value('alamatayah');?>" placeholder="Masukkan Alamat"></textarea>
  </div>
</div>


<br>
<div class="box-header">
  <h3 class="box-title">Keterangan Ibu Kandung</h3>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Nama</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="namaibu" required="required" value="<?php echo set_value('namaibu');?>" placeholder="Masukkan Nama">
  </div>
</div>


<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Tempat Lahir</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="tempatlahiribu" required="required" value="<?php echo set_value('tempatlahiribu');?>" placeholder="Masukkan Tempat Lahir">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Tanggal Lahir</label>
  <div class="col-sm-7">
    <input id="datetimepicker3" type="text" class="form-control" name="tanggallahiribu" required="required" value="<?php echo set_value('tanggallahiribu');?>" placeholder="Tanggal Lahir">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Agama</label>
  <div class="col-sm-7">
   <select class="form-control" name="agamaibu"  value="<?php echo set_value('agamaibu');?>" required> 
     <option selected disabled value="">-Pilih Agama-</option>
     <option value="Islam">Islam</option>
     <option value="Kristen">Kristen</option>
     <option value="Katholik">Katholik</option>
     <option value="Budha">Budha</option>
     <option value="Hindu">Hindu</option>
     <option value="Lainnya">Lainnya</option>
   </select>
 </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Kontak</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="nomoribu" required="required" value="<?php echo set_value('nomoribu');?>" placeholder="Masukkan Kontak">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Pekerjaan</label>
  <div class="col-sm-7">
    <input type="text" class="form-control" name="pekerjaanibu" required="required" value="<?php echo set_value('pekerjaanibu');?>" placeholder="Masukkan Pekerjaan">
  </div>
</div>

<div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Alamat</label>
  <div class="col-sm-7">
    <textarea type="text" class="form-control" name="alamatibu" required="required" value="<?php echo set_value('alamatibu');?>" placeholder="Masukkan Alamat"></textarea>
  </div>
</div>

<!-- <div class="form-group formgrup jarakform">
  <label  class="col-sm-4 control-label">Status Aktif</label>
  <div class="col-sm-7">
   <select  class="form-control"  name="Status_pensiun" value="<?php echo set_value('Status_pensiun');?>" >
     <option selected disabled value="">-Pilih Status-</option>
     <option value="">Aktif</option>
     <option value="Pensiun">Pensiun</option>
   </select>
 </div>
</div> -->

</div>

</div>
</div>


<div class="col-sm-6">
 <div class="col-sm-4">
 </div>
 <img src="<?php echo base_url();?>assets/superadmin/image/upload.png" class="col-sm-4">
</div>

<div class=" col-sm-6">
 <div class="col-sm-4">
 </div>
 <!--a href="<?php echo site_url('superadmin/Pegawaibaru');?>" type="button" role="button" class="col-sm-3 btn btn-danger" style="margin:4%">Tambahkan Foto</a-->
 <input  name="foto" style="margin:2%" class="col-sm-5" type="file">
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-5">
    <input name="submit" type="submit" role="button" class="btn btn-danger" value="Tambah Data" onclick="return confirm('Apakah Anda yakin akan menambahkan data?')">
  </div>
</div>
<?php echo form_close(); ?>
</div>
<!---tutup tambah data pegawai-->

<!-- edit datapegawai -->
<div class="tab-pane" id="editdatpeg">
 <div class="box">
  <div class="box-header">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#editdatapegawai" data-toggle="tab">Data Karyawan</a></li>
      <li><a href="#editdataguru" data-toggle="tab">Data Guru</a></li>
      <li><a href="#editdatapensiun" data-toggle="tab">Data Pensiun</a></li>
    </ul>
  </div>
  <!-- /.box-header -->
  <div class="tab-content">

    <!-- data pegawai -->
    <div class="active tab-pane" id="editdatapegawai">
      <table id="example4" class="table table-bordered table-striped" > 
        <thead> 
          <tr style="background-color: #53c68c ">
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Golongan</th> 
            <th>No.SK</th>  

            <th>Action</th>      
          </tr>
        </thead>
        <tbody>
          <!-- function datpeg -->
          <?php
          $no=1;
          foreach ($datpeg->result() as $key) { ?>
          <tr>
            <td><?php echo $no?></td>
            <td><?php echo $key->NIP;?></td>
            <td><?php echo $key->Nama;?></td>
            <td><?php echo $key->Golongan;?></td>
            <td><?php echo $key->No_SK;?></td>

            <td>
              <!-- perintah edit -->
              <?php 
              if ($this->session->userdata('jabatan') == 'Superadmin') {
                ?>
                <a  href="<?php echo site_url('superadmin/updatedatpeg/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
                <?php
              } else if ($this->session->userdata('jabatan') == 'Pegawai'){
                ?>
                <a  href="<?php echo site_url('pegawai/updatedatpeg/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
                <?php
              } 
              ?>
              <!-- tutup perintah edit -->

              <!-- perintah delete -->
              <?php
              if ($this->session->userdata('jabatan') == 'Superadmin') {
                ?>
                <div> <?php echo $this->session->flashdata('warning')?></div>
                <form id="confirm<?= $key->NIP?>" method="post" action="<?php echo site_url('superadmin/deletedatpeg/'.$key->NIP);?>"  style="margin-top: 2%" >
                  <button type="button" class="btn btn-primary btn-block btn-delete confirm<?= $key->NIP?>"   ><i class="glyphicon glyphicon-trash"></i></button> 
                </form>

                <?php
              }
              ?>
              <!-- tutup perintah delete -->
            </td> 

          </tr>
          <?php $no++; }?>
          <!-- tutup function -->
        </tbody>
      </table>
    </div>
    <!-- tutup tab pegawai -->

    <!-- data guru -->
    <div class="tab-pane" id="editdataguru">
     <table id="example5" class="table table-bordered table-striped"> 
      <thead> 
        <tr style="background-color: #53c68c">
          <th>No</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Golongan</th> 
          <th>No.SK</th>

          <th>Action</th>      
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
        foreach ($datguru->result() as $key) { ?>
        <tr>
          <td><?php echo $no?></td>
          <td><?php echo $key->NIP;?></td>
          <td><?php echo $key->Nama;?></td>
          <td><?php echo $key->Golongan;?></td>
          <td><?php echo $key->No_SK;?></td>
          <td> 
           <!-- perintah edit -->
           <?php 
           if ($this->session->userdata('jabatan') == 'Superadmin') {
            ?>
            <a  href="<?php echo site_url('superadmin/updatedatpeg/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
            <?php
          } else if ($this->session->userdata('jabatan') == 'Pegawai'){
            ?>
            <a  href="<?php echo site_url('pegawai/updatedatpeg/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
            <?php
          } 
          ?>
          <!-- tutup perintah edit -->

          <?php
          if ($this->session->userdata('jabatan') == 'Superadmin') {
            ?>
            <!--  <a onclick="return confirm('Apakah Anda yakin akan menghapus data <?php echo $key->Nama?>?');" href="<?php echo site_url('superadmin/datpeg/'.$key->NIP);?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Delete</a>  -->
            <div> <?php echo $this->session->flashdata('warning')?></div>

            <form id="confirm<?= $key->NIP?>" method="post" action="<?php echo site_url('superadmin/deletedatpeg/'.$key->NIP);?>"  style="margin-top: 2%">
              <button type="button" class="btn btn-primary btn-block btn-delete confirm<?= $key->NIP?>"><i class="glyphicon glyphicon-trash"></i></button> 
            </form>

            <?php
          }
          ?>
        </td>                 
      </tr>
      <?php $no++; }?>
    </tbody>
  </table>
</div>
<!-- tutup data guru -->

<!-- datapensiun -->
<div class="tab-pane" id="editdatapensiun">

 <table id="example6" class="table table-bordered table-striped" > 
  <thead> 
    <tr style="background-color: #53c68c ">
      <th>No</th>
      <th>NIP</th>
      <th>Nama</th>
      <th>Golongan</th>  
      <th>No.SK</th>   
      <th>Action</th>      
    </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   foreach ($datpensiun->result() as $key) { ?>
   <tr>
    <td><?php echo $no?></td>
    <td><?php echo $key->NIP;?></td>
    <td><?php echo $key->Nama;?></td>
    <td><?php echo $key->Golongan;?></td>
    <td><?php echo $key->No_SK;?></td>

    
    <td> 

      <!-- perintah edit -->
      <?php 
      if ($this->session->userdata('jabatan') == 'Superadmin') {
        ?>
        <a  href="<?php echo site_url('superadmin/updatedatpeg/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
        <?php
      } else if ($this->session->userdata('jabatan') == 'Pegawai'){
        ?>
        <a  href="<?php echo site_url('pegawai/updatedatpeg/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
        <?php
      } 
      ?>
      <!-- tutup perintah edit -->
      <?php
      if ($this->session->userdata('jabatan') == 'Superadmin') {
        ?> 
        <!--  <a onclick="return confirm('Apakah Anda yakin akan menghapus data <?php echo $key->Nama?>?');" href="<?php echo site_url('superadmin/deletedatpeg/'.$key->NIP);?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Delete</a>  -->
        <div> <?php echo $this->session->flashdata('warning')?></div>
        <form id="confirm<?= $key->NIP?>" method="post" action="<?php echo site_url('superadmin/deletedatpeg/'.$key->NIP);?>"  style="margin-top: 2%">
          <button type="button" class="btn btn-primary btn-block btn-delete confirm<?= $key->NIP?>"   ><i class="glyphicon glyphicon-trash"></i></button> 
        </form>
        <?php
      }
      ?>

    </td>                   
  </tr>
  <?php $no++; }?>
</tbody>
</table>
</div>
<!-- tutup data pensiun -->

</div>
<!-- /.box-body -->
</div>
</div>
<!-- /.box-body -->
</div>
</div>
<!-- tutup data pegawai -->
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


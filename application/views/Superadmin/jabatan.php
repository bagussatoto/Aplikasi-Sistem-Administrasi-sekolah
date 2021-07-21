<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Hak Akses SMP Yogyakarta <br></center>
      <br>
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

          <ul class="nav nav-tabs">
            <li class="active"><a href="#lihatjabatan" data-toggle="tab">Lihat Hak Akses</a></li>
            <li><a href="#tambahjabatan" data-toggle="tab">Tambah Hak Akses</a></li>
            <li><a href="#editjabatan" data-toggle="tab">Edit Hak Akses</a></li>
            <li><a href="#jenisjabatan" data-toggle="tab">Jenis Hak Akses</a></li>
            
          </ul>


          <div class="tab-content"> 
           <!-- lihat jabatan -->
           <div class="active tab-pane" id="lihatjabatan">
             <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Hak Akses</h3>
              </div>
              <table id="example1" class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Akses</th>      
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach ($datajabatan->result() as $key) { 
                    if ($key->Status_pensiun == "") {
                    ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $key->NIP;?></td>
                    <td><?php echo $key->Nama;?></td>
                    <td><?php echo $key->nama_jabatan;?></td>     
                  </tr>
                  <?php $no++; 
                    }
                }?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- ttutup lihat jabatan -->

          <!-- lihat  tambah jabatan -->
          <div class="tab-pane" id="tambahjabatan">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Hak Akses</h3>
            </div>
            <table id="example2" class="table table-bordered table-striped"> 
              <thead> 
                <tr style="background-color: #53c68c ">
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Akses</th> 
                  <th>Action</th>     
                </tr>
              </thead>
              <tbody>
                
                  <?php
                  $no=1;
                  foreach ($datatanpajabatan->result() as $key) { ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $key->NIP;?></td>
                    <td><?php echo $key->Nama;?></td>
                    <td>-<?php //echo $key->nama_jabatan;?></td>     
                    <td> <a href="<?php echo base_url();?>index.php/superadmin/editjabatan/<?php echo $key->NIP;?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Tambah</a>
                      <!-- <button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button> -->
                    </td>   
                  
                  <?php $no++; }?>                         
                </tbody>
              </table>

              <a href="<?php echo base_url();?>index.php/superadmin/setjabatan" class="btn btn-primary" >Tambah</a>
            </div>
          </div>
          <!-- ttutup tambah jabatan -->


          <!-- lihat  edit jabatan -->
          <div class="tab-pane" id="editjabatan">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Hak Akses</h3>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <tr style= "background-color: #53c68c">
                  <th class="fit">No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Akses</th>   
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                  <?php
                  $no=1;
                 

                  foreach ($datajabatan->result() as $key) { 
                    if ($key->Status_pensiun == "") {
                    ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $key->NIP;?></td>
                    <td><?php echo $key->Nama;?></td>
                    <td><?php echo $key->nama_jabatan;?></td>     
                    <td> <a href="<?php echo base_url();?>index.php/superadmin/editjabatan/<?php echo $key->NIP;?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
                      <a type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</></td></tr>
                    <?php $no++; }
                     }?>                         
                  </tbody>
                </table>
              </div>
            </div>
            <!-- ttutup edit jabatan -->

  <!-- lihat  jenis jabatan -->
          <div class="tab-pane" id="jenisjabatan">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jenis Hak Akses</h3>
            </div>
            <table  class="table table-bordered table-striped"> 
              <thead> 
                <tr style="background-color: #53c68c ">
                  <th style="width: 10%">No</th>
                  <th style="width: 20%">Nama Akses</th>
                  <!-- <th style="width: 20%">Url</th> -->
                  <th style="width: 40%">Menu Hak Akses</th> 
                  <th style="width: 10%">Action</th>     
                </tr>
              </thead>
              <tbody>
                
                  <?php
                  $no=1;
                  foreach ($jenisjabatan as $key) { 
                   if ($key->nama_jabatan != "Siswa"){
                    ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $key->nama_jabatan;?></td>
                    <!-- <td><?php echo $key->url;?></td> -->
                    <td><?php echo $key->menuakses;?></td>     
                    <td> <a href="<?php echo base_url();?>index.php/superadmin/editjenisjabatan/<?php echo $key->id_jabatan;?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a>
                      <!-- <button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button> -->
                    </td>   
                  
                  <?php $no++;
                    }

                   }?>                         
                </tbody>
              </table>
            </div>
          </div>
          <!-- ttutup jenis jabatan -->



      





            
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
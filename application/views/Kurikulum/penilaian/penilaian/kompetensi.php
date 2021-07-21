<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Jenis Nilai Akhir Mata Pelajaran SMP Yogyakarta <br></center>
      <center><small>Tahun Ajaran <?php echo $judul_tahun_ajaran; ?></small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#lihatNA" data-toggle="tab">Lihat Kompetensi Dasar</a></li>
            <li ><a href="#tambahkurikulum" data-toggle="tab">Tambah Kompetensi Dasar</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane" id="tambahkurikulum">
             <form class="form-horizontal formmapel" method="post" action="<?php echo base_url('penilaian/penilaian/tambah_kompetensi'); ?>">
              <div class="bigbox-mapel"> 
                <div class="box-mapel">
                  <select id="pilihkelaskd" onchange="document.location='<?php echo site_url('penilaian/penilaian/Kompetensi'); ?>/'+document.getElementById('pilihkelaskd').value+'/'+document.getElementById('pilihmapelkd').value;">
                    <option value="" ></option>
                    <?php

                    foreach ($kelas_reguler_berjalan as $d){
                      ?>
                      <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                      <?php
                    }?>
                  </select>
                  <!--form class=""-->
                    <select id="pilihmapelkd" name="id_mapel" onchange="document.location='<?php echo site_url('penilaian/penilaian/Kompetensi'); ?>/'+document.getElementById('pilihkelaskd').value+'/'+document.getElementById('pilihmapelkd').value;">
                      <?php
                      foreach ($mapel as $x){
                        ?>
                        <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                        <?php
                      }?></select>
                    <!--/form-->
                    <select name="id_jenis_na" >
                            <?php
                            foreach ($jenis_nilai_akhir as $d){
                              ?>
                              <option value="<?php echo $d->id_jenis_na;?>"><?php echo $d->Jenis_na;?></option>
                              <?php
                            }?>
                          </select>
                    <div class="form-group formgrup jarakform">
                      <label for="inputKurikulum" class="col-sm-2 control-label">Kode KD</label>
                      <div class="col-sm-2">
                        <input type="text" value="" class="form-control" name="kode_kd" id="inputName" placeholder="Kode KD">
                      </div>
                    </div>
                    <div class="form-group formgrup jarakform">
                      <label for="inputKurikulum" class="col-sm-2 control-label">Deskripsi KD</label>
                      <div class="col-lg-8">

                        <textarea type="text" class="col-lg-8"  name="deskripsi_kd"> <?php echo set_value('deskripsi_kd'); ?> </textarea>

                        <!-- <input type="text" class="form-control" id="inputName" placeholder="Deskripsi nilai"> -->
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </div>
                <!-- <div class="tambahmapel">
                  <i class="fa fa-plus-circle text-red"></i><a style="color:red" href="#" id="tambahmapel"> Tambah jenis</a>
                </div> -->

              </form>

            </div>
            <!-- /.tab-pane -->

            <!-- /.tab-pane -->

            <div class="active tab-pane" id="lihatNA">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Kompetensi</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <select id="pilihkelaskdview" onchange="document.location='<?php echo site_url('penilaian/penilaian/Kompetensi'); ?>/'+document.getElementById('pilihkelaskdview').value+'/'+document.getElementById('pilihmapelkdview').value;">
                    <option value="" ></option>
                    <?php

                    foreach ($kelas_reguler_berjalan as $d){
                      ?>
                      <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                      <?php
                    }?>
                  </select>
                  <!--form class=""-->
                    <select id="pilihmapelkdview" name="id_mapel" onchange="document.location='<?php echo site_url('penilaian/penilaian/Kompetensi'); ?>/'+document.getElementById('pilihkelaskd').value+'/'+document.getElementById('pilihmapelkdview').value;">
                      <?php
                      foreach ($mapel as $x){
                        ?>
                        <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                        <?php
                      }?></select>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Kode_KD</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=0;
                      foreach ($k_dasar as $a){
                        $no=$no+1;
                        echo "<tr>";
                        echo "<td>$no</td>"; 

                        echo "<td>{$a->kode_kd}</td>";
                        echo "<td>{$a->deskripsi_kd}</td>";
                        echo "<td>"; ?>
                          <a data-toggle="modal" data-show="true" data-target="#editjenisnilai<?php echo $no; ?>" class="btn btn-block btn-primary button-action btnedit" href="<?php echo base_url("penilaian/penilaian/form_edit_jenisNilai/".$a->id_jenis_na); ?>" >Edit</a>
                          <a type="button" style="background: red ; border: red;" class="btn btn-block btn-primary button-action btnhapus " href="<?php echo base_url("penilaian/penilaian/hapus_kompetensi/".$a->id_kd); ?>" onclick="return confirm_delete();">Hapus</a>
                          <?php
                          echo "</tr>";
                          ?>

                          <div id="editjenisnilai<?php echo $no; ?>" class="modal fade " role="dialog">
                            <div class="modal-dialog modal-md" >
                              <div class="modal-content">
                                <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title">Edit Jenis Nilai</h4>
                               </div>
                               <div class="modal-body"> 
                               </div>
                             </div>
                           </div>

                         </div>
                         <?php
                       }
                       ?>
                     </tbody>
                   </table>
                 </div>
                 <!-- /.box-body -->
               </div>
             </div>

             
             <!-- /.tab-pane -->
           </div>
           <!-- /.tab-content -->
         </div>
         <!-- /.nav-tabs-custom -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row (main row) -->

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 
 <script type="text/javascript">
  $(document).ready(function() {
      var max_fields      = 50; //maximum input boxes allowed
      var wrapper         = $(".bigbox-mapel"); //Fields wrapper
      var add_button      = $("#tambahmapel"); //Add button ID
      var box_mapel       = `<div class="box-mapel">
      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Nama Jenis Nilai</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Nama jenis Nilai">
      </div>
      </div>

      <i class="fa fa-minus-circle text-red tambahmapel"></i><a style="color:red" href="#" class="remove_field"> Hapus jenis</a>

      </div>`;
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append(box_mapel); //add input box
            }
          });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
  </script>
  </html>


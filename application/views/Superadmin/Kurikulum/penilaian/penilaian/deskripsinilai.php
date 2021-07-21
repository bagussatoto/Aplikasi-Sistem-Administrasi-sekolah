<!DOCTYPE html>
<html>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Deskripsi Nilai Mata Pelajaran SMP Yogyakarta <br></center>
      <center><small>Tahun Ajaran <?php echo $judul_tahun_ajaran; ?></small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#lihatdeskripsi" data-toggle="tab">Lihat Deskripsi Nilai</a></li>
            <li class=""><a href="#tambahdeskripsi" data-toggle="tab">Tambah Deskripsi Nilai</a></li>
          </ul>
          

          <div class="tab-content">
            <div class="  tab-pane " id="tambahdeskripsi">
             <select id="pilihkelasdesktambah" onchange="document.location='<?php echo site_url('superpen/deskripsinilai'); ?>/'+document.getElementById('pilihkelasdesktambah').value+'/'+document.getElementById('pilihmapeldesktambah').value;">
                      <option value="">Pilih Kelas</option>
                      <?php

                      foreach ($kelas_reguler_berjalan as $d){
                        ?>
                        <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?> <?php //echo $d->id_kelas_reguler;?></option>
                        <?php
                      }?>
                    </select>

                    <select name="mapel" id="pilihmapeldesktambah" onchange="document.location='<?php echo site_url('superpen/nilaisiswa'); ?>/'+document.getElementById('pilihkelastambah').value+'/'+document.getElementById('pilihmapeltambah').value;">
                      <option value="" >Pilih Mapel</option>
                      <?php

                      foreach ($mapel as $x){
                        ?>

                        <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                        <?php
                      }?></select>
            </form>
            <form class="form-horizontal formmapel" method="post" action="<?php echo base_url('superpen/tambah_desknilai'); ?>" id="desknilai">
              <div class="bigbox-mapel"> 
                <div class="box-mapel">
                  <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Atas</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="bts_a" placeholder="Batas Nilai Atas">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Bawah</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="bts_b" placeholder="Batas Nilai Bawah">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Predikat Nilai</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="predikat" id="inputName" placeholder="Predikat nilai">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Deskripsi Nilai</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="deskripsi"> <?php echo set_value('deskripsi'); ?> </textarea>

                      <!-- <input type="text" class="form-control" id="inputName" placeholder="Deskripsi nilai"> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="tambahmapel">
                <i class="fa fa-plus-circle text-red"></i><a style="color:red" href="#" id="tambahmapel"> Tambah deskripsi</a>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>

          </div>
          <div class="tab-pane active" id="lihatdeskripsi">
           <select id="pilihkelasdesknilai" onchange="document.location='<?php echo site_url('superpen/deskripsinilai'); ?>/'+document.getElementById('pilihdekkelasnilai').value+'/'+document.getElementById('pilihmapeldesknilai').value;">
            <option value="" ></option>
            <?php

            foreach ($kelas_reguler_berjalan as $d){
              ?>
              <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
              <?php
            }?>
          </select>
          <form class="">
            <select id="pilihmapeldesknilai" onchange="document.location='<?php echo site_url('superpen/deskripsinilai'); ?>/'+document.getElementById('pilihkelasdesknilai').value+'/'+document.getElementById('pilihmapeldesknilai').value;">
              <?php
              foreach ($mapel as $x){
                ?>
                <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                <?php
              }?></select>
            </form>
          </form>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Deskripsi Nilai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="fit">No</th>
                    <th>Batas Nilai Atas</th>
                    <th>Batas Nilai Bawah</th>
                    <th>Predikat Nilai</th>
                    <th>Deskripsi Nilai</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=0;
                  foreach($deskripsi_nilai as $s){
                    $no=$no+1;
                    echo "<tr>";
                    echo "<td>$no</td>"; 
                    echo "<td>{$s->Nilai_atas}</td>";
                    echo "<td>{$s->Nilai_bawah}</td>";
                    echo "<td>{$s->predikat}</td>";
                    echo "<td>{$s->deskripsi}</td>";
                    echo "<td>";
                    ?>
                    <a data-toggle="modal" data-show="true" data-target="#editdesknilai<?php echo $no; ?>" class="btn btn-block btn-primary button-action btnedit" href="<?php echo base_url("superpen/form_edit_deskripsi/".$s->id_deskripsi); ?>" >Edit</a>
                    <a type="button" style="background: red ; border: red;" class="btn btn-block btn-primary button-action btnhapus " href="<?php echo base_url("superpen/hapus_desknilai/".$s->id_deskripsi); ?>" onclick="return confirm_delete();">Hapus
                      <?php
                      echo "</tr>";
                      ?>
                      <div id="editdesknilai<?php echo $no; ?>" class="modal fade " role="dialog">
                        <div class="modal-dialog modal-lg" >
                          <div class="modal-content">
                            <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title">Edit Kategori Nilai</h4>
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

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<script type="text/javascript">
  $(document).ready(function() {
      var max_fields      = 50; //maximum input boxes allowed
      var wrapper         = $(".bigbox-mapel"); //Fields wrapper
      var add_button      = $("#tambahmapel"); //Add button ID
      var box_mapel       = `<div class="box-mapel">
      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Nama Kategori Nilai</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Nama Kategori Nilai">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Bobot Nilai</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Bobot Nilai">
      </div>
      </div>

      <i class="fa fa-minus-circle text-red tambahmapel"></i><a style="color:red" href="#" class="remove_field"> Hapus kategori</a>

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


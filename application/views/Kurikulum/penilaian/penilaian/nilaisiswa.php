<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Nilai Siswa SMP Yogyakarta <br></center>
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
            <li class="active"><a href="#daftar" data-toggle="tab">Daftar Nilai</a></li>
            <?php
            if (($this->session->userdata("jabatan") == "Kurikulum")||($this->session->userdata("jabatan") == "Guru")) {
              ?>
              <li class=""><a href="#impornilai" data-toggle="tab">Import Nilai</a></li>
              <li class=""><a href="#tambah_nilai" data-toggle="tab">Tambah Nilai</a></li>
              <li><a href="#leger" data-toggle="tab">LEGER</a></li>
              <?php
            }
            ?>
          </ul>
          <div class="tab-content">
            <div class=" tab-pane" id="tambah_nilai">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <script type="text/javascript">
                    function ceknilai() {
                      <?php
                      $no=0;
                      foreach ($siswa as $c ) {
                                # code...
                        $no=$no+1;
                        ?>
                        if ((document.getElementById('nilai<?php echo $no; ?>').value != "") && (eval(document.getElementById('nilai<?php echo $no; ?>').value) > 100 )) {
                          alert('Nilai Tidak Boleh Melebihi 100');
                          return false
                        }
                        <?php
                      }
                      ?>      
                      return true;
                    }
                  </script>
                  <form method="post" action="<?php echo base_url('penilaian/penilaian/tambah_nilai'); ?>" onsubmit="return ceknilai();">
                    <select id="pilihkelastambah" onchange="document.location='<?php echo site_url('penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('pilihkelastambah').value+'/'+document.getElementById('pilihmapeltambah').value;">
                      <option value="">Pilih Kelas</option>
                      <?php

                      foreach ($kelas_reguler_berjalan as $d){
                        ?>
                        <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?> <?php //echo $d->id_kelas_reguler;?></option>
                        <?php
                      }?>
                    </select>

                    <select name="mapel" id="pilihmapeltambah" onchange="document.location='<?php echo site_url('penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('pilihkelastambah').value+'/'+document.getElementById('pilihmapeltambah').value;">
                      <option value="" >Pilih Mapel</option>
                      <?php

                      foreach ($mapel as $x){
                        ?>

                        <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                        <?php
                      }?></select>


                  <br/><br/>
                  <div style="overflow: auto">
                    <table class="table table-bordered table-striped nilaisiswa" style="width: 100%">
                      <thead>
                        <tr class="barishari" id="head">
                          <th class="fit">No</th>
                          <th class="fit">Nama Siswa</th>
                          <th class="fit">
                            NILAI <br>
                            <select name="katnilai" id="katnilai">
                              <?php foreach ($kategori_nilai as $w ) {

                               ?>
                               <option value="<?php echo $w->id_kategorinilai;?>"><?php echo $w->kategori_nilai;?></option>
                               <?php
                             }
                             ?>
                           </select>
                           <select name="jenis_na" id="jenis_na">
                            <?php
                            foreach ($jenis_nilai_akhir as $d){
                              ?>
                              <option value="<?php echo $d->id_jenis_na;?>"><?php echo $d->Jenis_na;?></option>
                              <?php
                            }?>
                          </select>
                         
                       </th>

                     </tr>
                   </thead>
                   <tbody>
                    <?php
                    $no=0;
                    foreach ($siswaperkelas as $c ) {
                          # code...
                      $no=$no+1;
                      ?>
                      <tr id="body">
                        <th class="fit"><?php echo $no; ?></th>
                        <th><?php echo $c->nama; ?>
                          <input type="text" class="hidden" name="nisn[]" value="<?php echo $c->nisn; ?>">
                        </th> 
                        <th>
                          <input type="text" name="nilai[]" id="nilai<?php echo $no; ?>" style="width: 100%" >
                        </th>
                      </tr>
                      <?php }
                      ?>
                    </tbody>
                  </table>
                </div>
                
                <button type="button" class="pull-right btn-jdwl" onclick="document.location='<?php echo site_url('penilaian/penilaian/exportnilai/'.@$this->uri->segment(4).'/'.@$this->uri->segment(5)); ?>/'+document.getElementById('katnilai').value+'/'+document.getElementById('jenis_na').value;">Export</button>
                <button class="btnjdwl" type="Submit">Submit</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="impornilai">
         <form class="form-horizontal formmapel" action="<?php echo base_url('penilaian/penilaian/importnilai'); ?>" method="post" enctype="multipart/form-data">
          <div class="bigbox-mapel"> 
            <div class="box-mapel">
                  <span></span>
                  <br>
                  <div class="col-md-12">
                    <label>Pilih kelas</label>
                    <select nama="id_kelas_reguler_berjalan2" id="imporkelasnilai" onchange="document.location='<?php echo site_url('penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('imporkelasnilai').value+'/'+document.getElementById('impormapel').value;">
                      <option value="">Pilih Kelas</option>
                      <?php

                      foreach ($kelas_reguler_berjalan as $d){
                        ?>
                        <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?> <?php //echo $d->id_kelas_reguler;?></option>
                        <?php
                      }?>
                    </select>

                    <select name="id_mapel2" id="impormapel" onchange="document.location='<?php echo site_url('penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('imporkelasnilai').value+'/'+document.getElementById('impormapel').value;">
                      <label>Pilih Mapel</label>
                      <option value="" >Pilih Mapel</option>
                      <?php

                      foreach ($mapel as $x){
                        ?>

                        <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                        <?php
                      }?></select>
                      <select name="katnilai2" id="katnilai2">
                              <?php foreach ($kategori_nilai as $w ) {

                               ?>
                               <option value="<?php echo $w->id_kategorinilai;?>"><?php echo $w->kategori_nilai;?></option>
                               <?php
                             }
                             ?>
                           </select>
                           <select name="jenis_na2" id="jenis_na2">
                            <?php
                            foreach ($jenis_nilai_akhir as $d){
                              ?>
                              <option value="<?php echo $d->id_jenis_na;?>"><?php echo $d->Jenis_na;?></option>
                              <?php
                            }?>
                          </select>
                    </div>
                    <br>
                    <span>
                      <div class="form-group formgrup jarakform col-sm-12">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Pilih File</label>
                        <div class="col-xs-4">
                          <input type="file" class="" required="required" name="filenilai" placeholder="">
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </span>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>

            </div>

            <div class="active tab-pane" id="daftar">

              <select id="pilihkelasnilai" onchange="document.location='<?php echo site_url('penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('pilihkelasnilai').value+'/'+document.getElementById('pilihmapelnilai').value;">
                <option value="">Pilih Kelas</option>
                <?php

                foreach ($kelas_reguler_berjalan as $d){
                  ?>
                  <option value="<?php echo $d->id_kelas_reguler; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler) { echo " selected"; } ?>><?php echo $d->nama_kelas;?> <?php //echo $d->id_kelas_reguler;?></option>
                  <?php
                }?>
              </select>

              <select id="pilihmapelnilai" onchange="document.location='<?php echo site_url('penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('pilihkelasnilai').value+'/'+document.getElementById('pilihmapelnilai').value;">
                <option value="" >Pilih Mapel</option>
                <?php

                foreach ($mapel as $x){
                  ?>

                  <option value="<?php echo $x->id_mapel;?>" <?php if ($id_mapel == $x->id_mapel) { echo " selected"; } ?>><?php echo $x->nama_mapel; echo $x->jenjang?></option>
                  <?php
                }?></select>

                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Daftar Nilai Siswa</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th class="fit">No</th>
                          <th>Nama</th>
                          <th>Kategori Nilai</th>
                          <th>Jenis Nilai</th>
                          <th>Mata Pelajaran</th>
                          <th>Nilai Siswa</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        $no=0;
                        foreach($nilai_siswa as $f){
                          $no=$no+1;
                          echo "<tr>";
                          echo "<td>$no</td>"; 
                          echo "<td>{$f->nama}</td>";
                          echo "<td>{$f->kategori_nilai}</td>";
                          echo "<td>{$f->Jenis_na}</td>";
                          echo "<td>{$f->nama_mapel}</td>";
                          echo "<td>{$f->Nilai_siswa}</td>";
                          echo "<td>";
                          ?>
                          <?php
                          if (($this->session->userdata("jabatan") == "Kurikulum") || ($this->session->userdata("jabatan") == "Guru")) {
                            ?>
                            <a data-toggle="modal" data-show="true" data-target="#nilai<?php echo $no; ?>" class="btn btn-block btn-primary button-action btnedit" href="<?php echo base_url("penilaian/penilaian/form_edit_nilai/".$f->id_nilai_siswa); ?>" >Edit</a>
                            <a type="button" style="background: red ; border: red;" class="btn btn-block btn-primary button-action btnhapus " href="<?php echo base_url("penilaian/penilaian/hapus_nilai/".$f->id_nilai_siswa); ?>" onclick="return confirm_delete();">Hapus
                              <?php
                            }
                            ?>
                            <?php
                            echo "</tr>";
                            ?>

                            <div id="nilai<?php echo $no; ?>" class="modal fade " role="dialog">
                              <div class="modal-dialog modal-md" >
                                <div class="modal-content">
                                  <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <h4 class="modal-title">Edit Nilai Siswa</h4>
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


               <div class="tab-pane" id="leger">
                <div class="box">
                  <div class="box-header">
                   <!--    <h3 class="box-title">MATEMATIKA</h3> -->
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                  <option value=""></option>
                  <select id="pilihkelasledger" onchange="document.location='<?php echo site_url('/penilaian/penilaian/nilaisiswa'); ?>/'+document.getElementById('pilihkelasledger').value;">
                    <?php
                    foreach ($kelas_reguler_berjalan as $d){
                      ?>
                      <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                      <?php
                    }?>
                  </select>
                  <div class="tab-content">
                    <div class="active tab-pane" id="leger">
                      <div class="box">
                        <div class="box-header jarakbox" style="overflow: auto">
                          <table class="table">
                            <thead>
                              <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama</th>
                                <?php
                                foreach ($mapel as $rowmapel) {
                                  ?>
                                  <th colspan="2"><?php echo $rowmapel->nama_mapel; ?></th>
                                  <?php
                                }
                                ?>
                                <th colspan="2">P(Pengetahuan)</th>
                                <th colspan="2">K(Keterampilan)</th>
                              </tr>
                              <tr>
                                <?php
                                foreach ($mapel as $rowmapel) {
                                  ?>
                                  <th>P</th>
                                  <th>K</th>
                                  <?php
                                }

                                ?>

                                <th>Jumlah</th>
                                <th>Rata-rata</th>
                                <th>Jumlah</th>
                                <th>Rata-rata</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $i=0; 
                              foreach ($siswaperkelas as $rowsiswa) {
                                $i++;
                                ?>
                                <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $rowsiswa->nama; ?></td>
                                  <?php
                                  $jmlp=0;
                                  $jmlk=0;
                                  foreach ($mapel as $rowmapel) {
                                    $jmlp=$jmlp+@$nilaisiswa_p[$rowsiswa->nisn][$rowmapel->id_mapel];
                                    $jmlk=$jmlk+@$nilaisiswa_k[$rowsiswa->nisn][$rowmapel->id_mapel];
                                    ?>
                                    <td><?php echo @$nilaisiswa_p[$rowsiswa->nisn][$rowmapel->id_mapel]; ?></td>
                                    <td><?php echo @$nilaisiswa_k[$rowsiswa->nisn][$rowmapel->id_mapel]; ?></td>
                                    <?php
                                  }
                                  ?>
                                  <td><?php echo $jmlp; ?></td>
                                  <td><?php if (count($mapel)>0) { echo number_format($jmlp/count($mapel),2); } ?></td>
                                  <td><?php echo $jmlk; ?></td>
                                  <td><?php if (count($mapel)>0) { echo number_format($jmlk/count($mapel),2); } ?></td>
                                  <?php


                                  ?>
                                </tr>
                                <?php
                              }
                              ?>
                            </tbody>
                          </table>


                        </div>

                      </div>
                      <!-- /.box-body -->
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
      <label for="inputKurikulum" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Nama Mata Pelajaran">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">KKM</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="KKM">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Jam Belajar</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Jam Belajar">
      </div>
      </div>
      <i class="fa fa-minus-circle text-red tambahmapel"></i><a style="color:red" href="#" class="remove_field"> Hapus mapel</a>

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


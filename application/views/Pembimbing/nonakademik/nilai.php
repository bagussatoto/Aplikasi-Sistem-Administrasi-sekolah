<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Nilai Ekstrakurikuler SMP Yogyakarta<br></center>
      <center><small>Menu untuk melihat dan mendata penilaian ekstrakurikuler</small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('nonakademik');?>">Dashboard</a></li>
    </ol>
  </section>

  <section class="content">
    
    <div class="row">
      <!-- Left col -->
      <section class="col-md-12 ">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
          <!-- Tabs within a box -->
          <ul class="nav nav-tabs pull-left">
            <li class="active"><a href="#tab1" data-toggle="tab">Nilai Siswa</a></li>
            <li><a href="#tab2" data-toggle="tab">Daftar Nilai Persemester</a></li>
          </ul>
          <div class="tab-content no-padding">
            <div class="chart tab-pane active" id="tab1" style="position: relative; ">
              
              <div class="box">
                <form method="post" action="<?php echo site_url('nonakademik/simpan_nilai/'.$id_kelas_reguler); ?>">
                  <div class="box-body">
                    <select name="id_kelas_reguler1" id="id_kelas_reguler1" onchange="document.location = '<?php echo site_url('nonakademik/nilai'); ?>'+'/'+document.getElementById('id_kelas_reguler1').value + '/<?php echo $id_tahun_ajaran; ?>';">
                     <option value="">...</option>
                     <?php
                     foreach ($kelas_reguler as $row) {
                      ?>
                      <option value="<?php echo $row->id_kelas_reguler; ?>" <?php if ($row->id_kelas_reguler == $id_kelas_reguler) { echo " selected"; } ?>><?php echo $row->nama_kelas; ?></option>
                      <?php
                    }
                    ?>
                  </select> 
                  <br/><br/>  

                          <table class="table table-bordered">
                            <tr style="background-color: #53c68c">
                              <th style="width: 9px">No</th> 
                              <th>Nama</th>
                              <?php
                              foreach ($jenis_kls_tambahan as $row_jenis_kls_tambahan) {
                                ?>
                                <th><?php echo $row_jenis_kls_tambahan->jenis_kls_tambahan; ?></th> 
                                <?php
                              }
                              ?>
                            </tr>
                            <?php
                            $i=0;
                            $proses = "";
                            foreach ($siswa_kelas_reguler_berjalan as $row) {
                              if ($proses != $row->nisn) {
                                $i++;
                                ?>
                                <tr>
                                  <td ><?php echo $i; ?>.</td> 
                                  <td ><?php echo $row->nama; ?></td>
                                  <?php
                                  foreach ($jenis_kls_tambahan as $row_jenis_kls_tambahan) {
                                    $ikut = false;
                                    $nilai = "";
                                    foreach ($siswa_kelas_reguler_berjalan as $row2) {
                                      if (($row->nisn == $row2->nisn) && ($row2->jenis_kls_tambahan == $row_jenis_kls_tambahan->jenis_kls_tambahan)) {
                                        $ikut = true;
                                        $nilai = @$row2->nilai_ekskul;
                                      }
                                    }
                                    if ($ikut == true) {
                                      ?>
                                      <td ><input type="text" name="nilai_<?php echo $row->nisn; ?>_<?php echo $row_jenis_kls_tambahan->id_jenis_kls_tambahan; ?>" value="<?php echo $nilai; ?>"/></td>
                                      <?php
                                    } else {
                                      ?>
                                      <td >&nbsp;</td>
                                      <?php
                                    }
                                  } 
                                  ?>
                                  <td>
                                  </tr> 
                                  <?php

                                }
                                $proses = $row->nisn;
                              }
                              ?> 
                            </table>
                          </div>
                          <div class="box-footer clearfix">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>

                        </div>
                        <div class="box">
                          <div class="box-body">
                          <?php 
                          /*
                        <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Nama</th>
                              <th>Jenis Ekstrakurikuler</th> 
                              <th>Nilai</th>
                            </tr>
                            <?php
                            $i=0;
                            $proses = "";
                            foreach ($siswa_kelas_reguler_berjalan as $row) {
                              
                            ?>
                            <tr>
                            <?php
                              if ($proses != $row->nisn) {
                                $i++;
                                $rowspan = 0;
                                foreach ($siswa_kelas_reguler_berjalan as $row2) {
                                  if ($row2->nisn == $row->nisn) {
                                    $rowspan++;
                                  }
                                }
                              ?>
                              <td rowspan="<?php echo $rowspan; ?>"><?php echo $i; ?>.</td> 
                              <td rowspan="<?php echo $rowspan; ?>"><?php echo $row->nama; ?></td>
                              <?php
                              } 
                            ?>
                              <td><?php echo $row->jenis_kls_tambahan; ?>
                                  
                              </td>
                             <td>
                              <?php
                                if ($row->jenis_kls_tambahan != "") {
                                  ?>
                                  <?php  
                                      if (@$row->nilai_ekskul > 85) {
                                        echo "A";
                                      } else if (@$row->nilai_ekskul > 65) {
                                        echo "B";
                                      } else if (@$row->nilai_ekskul > 45) {
                                        echo "C";
                                      } else if (@$row->nilai_ekskul > 25) {
                                        echo "D";
                                      } else if (@$row->nilai_ekskul >= 0) {
                                        echo "E";
                                      } else {
                                        echo " ";
                                      }

                                  ?>
                                  
                                <?php
                                  } else {
                                  ?>
                                  &nbsp;
                                  <?php
                                  }
                                  ?>
                              </td> 
                            </tr> 
                           <?php
                              $proses = $row->nisn;
                            }
                           ?> 
                          </table>
                          */
                          ?>
                        </div>
                      </div>
                      
                      
                    </div>
                    <div class="chart tab-pane" id="tab2" style="position: relative; ">
                     <div class="box">
                      <div class="box-body">
                        <!-- <br><center><h4>Daftar Nilai Ekstrakurikuler Siswa Persemester</center></h4></br> -->
                        <select name="id_tahun_ajaran" id="id_tahun_ajaran" onchange="document.location='<?php echo site_url('nonakademik/nilai');?>/<?php echo $id_kelas_reguler; ?>/' + document.getElementById('id_tahun_ajaran').value;">
                          <option value=""></option>  
                          <?php
                          foreach ($tahunajaran as $rowtahunajaran) {
                            ?>
                            <option value="<?php echo $rowtahunajaran->id_tahun_ajaran; ?>" <?php if ($id_tahun_ajaran == $rowtahunajaran->id_tahun_ajaran) { echo " selected"; } ?>><?php echo $rowtahunajaran->nama_file_kaldik; ?></option>  
                            <?php
                          }
                          ?>
                        </select>
                        <select name="id_kelas_reguler2" id="id_kelas_reguler2" onchange="document.location = '<?php echo site_url('nonakademik/nilai'); ?>'+'/'+document.getElementById('id_kelas_reguler2').value + '/<?php echo $id_tahun_ajaran; ?>';">
                         <option value="">...</option>
                         <?php
                         foreach ($kelas_reguler as $row) {
                          ?>
                          <option value="<?php echo $row->id_kelas_reguler; ?>" <?php if ($row->id_kelas_reguler == $id_kelas_reguler) { echo " selected"; } ?>><?php echo $row->nama_kelas; ?></option>
                          <?php
                        }
                        ?>
                      </select> 
                      <br/><br/>  
                      
                      <table class="table table-bordered">
                        <tr style="background-color: #53c68c">
                          <th style="width: 10px">No</th>
                          <th>Nama</th>
                          <?php
                          foreach ($jenis_kls_tambahan as $row_jenis_kls_tambahan) {
                            ?>
                            <th><?php echo $row_jenis_kls_tambahan->jenis_kls_tambahan; ?></th> 
                            <?php
                          }
                          ?>
                        </tr>
                        <?php
                        $i=0;
                        $proses = "";
                        foreach ($siswa_kelas_reguler_berjalan as $row) {
                          if ($proses != $row->nisn) {
                            $i++;
                            ?>
                            <tr>
                              <td ><?php echo $i; ?>.</td> 
                              <td ><?php echo $row->nama; ?></td>
                              <?php
                              foreach ($jenis_kls_tambahan as $row_jenis_kls_tambahan) {
                                $ikut = false;
                                $nilai = "";
                                foreach ($siswa_kelas_reguler_berjalan as $row2) {
                                  if (($row->nisn == $row2->nisn) && ($row2->jenis_kls_tambahan == $row_jenis_kls_tambahan->jenis_kls_tambahan)) {
                                    $ikut = true;
                                    $nilai = @$row2->nilai_ekskul;
                                  }
                                }
                                if ($ikut == true) {
                                  ?>
                                  <td ><?php  
                                  if ($nilai > 85) {
                                    echo "A";
                                  } else if ($nilai > 65) {
                                    echo "B";
                                  } else if ($nilai > 45) {
                                    echo "C";
                                  } else if ($nilai > 25) {
                                    echo "D";
                                  } else if ($nilai >= 0) {
                                    echo "E";
                                  } else {
                                    echo " ";
                                  }

                                  ?></td>
                                  <?php
                                } else {
                                  ?>
                                  <td >&nbsp;</td>
                                  <?php
                                }
                              } 
                              ?>
                              <td>
                              </tr> 
                              <?php

                            }
                            $proses = $row->nisn;
                          }
                          ?> 
                        </table>

                        <!-- <div class="box-footer clearfix">
                          <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                          </ul>
                        </div> -->
                      </div>
                      
                    </div>
                    
                    
                    
                    
                  </div>
                </div>
              </section>
            </div>

            
          </section>
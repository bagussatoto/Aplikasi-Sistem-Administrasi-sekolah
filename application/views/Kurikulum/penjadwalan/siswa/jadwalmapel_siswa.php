<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:grey;">Jadwal Mata Pelajaran<br></center>
      <!-- <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>penjadwalan/siswa/home">Dashboard</a></li>
      </ol> -->
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
         <div class="nav-tabs-custom">
            <!-- <ul class="nav nav-tabs">
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Jadwal Siswa</a></li>
            </ul> -->

            <div id="myTabContent" class="tab-content">

              <div class="active tab-pane" id="tab_content2" aria-labelledby="profile-tab">
                <?php echo $this->session->flashdata('pesan'); ?>
                <form class="form-horizontal form-mapel" method="post">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      
                      <div class="form-group" style="margin-bottom: 0px">
                        <label class="control-label col-md-3" for="first-name">Nama <span class="required"></span>
                        </label>
                        <div class="col-sm-4 form-group">
                          <input type="text" class="form-control" name="nama" value="<?php echo $this->session->Nama; ?>" readonly disabled>
                        </div>
                      </div>

                      <div class="form-group" style="margin-bottom: 0px">
                        <label class="control-label col-md-3" for="first-name">NISN <span class="required"></span>
                        </label>
                        <div class="col-sm-4 form-group">
                          <input type="text" class="form-control" name="nisn" value="<?php echo $this->session->nisn; ?>" readonly disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="first-name">Kelas<span class="required"></span>
                        </label>
                        <div class="col-sm-4 form-group">
                          <input type="text" class="form-control" name="kelas" value="<?php echo $row_siswa->nama_kelas; ?>" readonly disabled>
                        </div>
                      </div>

                      <div class="tab-pane" id="jadwalmapel">
                        <div class="box">
                         
                          <!-- /.box-header -->
                          <div class="box-body">
                            <table class="table table-bordered table-striped tabelmapel">
                              <thead>
                                <tr class="barishari">
                                  <th class="tengah" rowspan="2">Jam ke</th>
                                  <!--  <th class="tengah" rowspan="2" style="width: 100px">Waktu</th> -->
                                  <th colspan="1">Senin</th>
                                  <th colspan="1">Selasa</th>
                                  <th colspan="1">Rabu</th>
                                  <th colspan="1">Kamis</th>
                                  <th colspan="1">Jumat</th>
                                  <th colspan="1">Sabtu</th>
                                  <th colspan="1">Minggu</th>
                                </tr>
                     <!--  <tr class="bariskelas">
                        <th>7A</th>
                      </tr> -->
                    </thead>
                    <tbody>
                      <?php 
                      for($i=0;$i<=11;$i++)  {
                        ?>
                        <tr>
                          <td class="fit"><?php echo $i; ?></td>
                          
                          <!--  <th>06.00 - 07.00</th> -->
                          <td class="putih">
                            <?php echo @substr($hari_rentang['Senin'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Senin'][$i]->jam_selesai,0,5); ?><br/>
                            <?php
                            foreach (@$tabel_jadwalprioritas_senin[$i] as $rowjadwalprioritas) {
                              $ada = false;
                              foreach (@$tabel_jadwalkhusus_senin[$i] as $rowjadwalkhusus) {
                                if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                                  $ada = true;
                                }
                              }
                              if ($ada == false) {
                                if ((@$tabel_jadwalmapel_senin[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_senin[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                              }
                            }
                          }
                          ?>
                          <?php 
                          foreach (@$tabel_jammengajar as $rowjammengajar) {
                            $ada = false;
                            foreach (@$tabel_jadwalprioritas_senin[$i] as $rowjadwalprioritas) {
                              if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                                $ada = true;
                              }
                            }
                            foreach (@$tabel_jadwalkhusus_senin[$i] as $rowjadwalkhusus) {
                              if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                                $ada = true;
                              }
                            }
                            if ($ada == false) {
                              if ((@$tabel_jadwalmapel_senin[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_senin[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                            }
                          }
                        }
                        ?></td>


                        <td class="putih">
                          <?php echo @substr($hari_rentang['Selasa'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Selasa'][$i]->jam_selesai,0,5); ?><br/>
                          <?php
                          foreach (@$tabel_jadwalprioritas_selasa[$i] as $rowjadwalprioritas) {
                            $ada = false;
                            foreach (@$tabel_jadwalkhusus_selasa[$i] as $rowjadwalkhusus) {
                              if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                                $ada = true;
                              }
                            }
                            if ($ada == false) {
                              if ((@$tabel_jadwalmapel_selasa[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_selasa[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                            }
                          }
                        }
                        ?>
                        <?php 
                        foreach (@$tabel_jammengajar as $rowjammengajar) {
                          $ada = false;
                          foreach (@$tabel_jadwalprioritas_selasa[$i] as $rowjadwalprioritas) {
                            if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                              $ada = true;
                            }
                          }
                          foreach (@$tabel_jadwalkhusus_selasa[$i] as $rowjadwalkhusus) {
                            if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_selasa[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_selasa[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                          }
                        }
                      }
                      ?></td>


                      <td class="putih">
                        <?php echo @substr($hari_rentang['Rabu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Rabu'][$i]->jam_selesai,0,5); ?><br/>
                        <?php
                        foreach (@$tabel_jadwalprioritas_rabu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_rabu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_rabu[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_rabu[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                          }
                        }
                      }
                      ?>
                      <?php 
                      foreach (@$tabel_jammengajar as $rowjammengajar) {
                        $ada = false;
                        foreach (@$tabel_jadwalprioritas_rabu[$i] as $rowjadwalprioritas) {
                          if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                            $ada = true;
                          }
                        }
                        foreach (@$tabel_jadwalkhusus_rabu[$i] as $rowjadwalkhusus) {
                          if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                            $ada = true;
                          }
                        }
                        if ($ada == false) {
                          if ((@$tabel_jadwalmapel_rabu[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_rabu[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                        }
                      }
                    }
                    ?></td>

                    <td class="putih">
                      <?php echo @substr($hari_rentang['Kamis'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Kamis'][$i]->jam_selesai,0,5); ?><br/>
                      <?php
                      foreach (@$tabel_jadwalprioritas_kamis[$i] as $rowjadwalprioritas) {
                        $ada = false;
                        foreach (@$tabel_jadwalkhusus_kamis[$i] as $rowjadwalkhusus) {
                          if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                            $ada = true;
                          }
                        }
                        if ($ada == false) {
                          if ((@$tabel_jadwalmapel_kamis[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_kamis[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                        }
                      }
                    }
                    ?>
                    <?php 
                    foreach (@$tabel_jammengajar as $rowjammengajar) {
                      $ada = false;
                      foreach (@$tabel_jadwalprioritas_kamis[$i] as $rowjadwalprioritas) {
                        if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                          $ada = true;
                        }
                      }
                      foreach (@$tabel_jadwalkhusus_kamis[$i] as $rowjadwalkhusus) {
                        if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                          $ada = true;
                        }
                      }
                      if ($ada == false) {
                        if ((@$tabel_jadwalmapel_kamis[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_kamis[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                      }
                    }
                  }
                  ?></td>

                  <td class="putih">
                    <?php echo @substr($hari_rentang['Jumat'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Jumat'][$i]->jam_selesai,0,5); ?><br/>
                    <?php
                    foreach (@$tabel_jadwalprioritas_jumat[$i] as $rowjadwalprioritas) {
                      $ada = false;
                      foreach (@$tabel_jadwalkhusus_jumat[$i] as $rowjadwalkhusus) {
                        if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                          $ada = true;
                        }
                      }
                      if ($ada == false) {
                        if ((@$tabel_jadwalmapel_jumat[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_jumat[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                      }
                    }
                  }
                  ?>
                  <?php 
                  foreach (@$tabel_jammengajar as $rowjammengajar) {
                    $ada = false;
                    foreach (@$tabel_jadwalprioritas_jumat[$i] as $rowjadwalprioritas) {
                      if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                        $ada = true;
                      }
                    }
                    foreach (@$tabel_jadwalkhusus_jumat[$i] as $rowjadwalkhusus) {
                      if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                        $ada = true;
                      }
                    }
                    if ($ada == false) {
                      if ((@$tabel_jadwalmapel_jumat[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_jumat[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                    }
                  }
                }
                ?></td>

                <td class="putih">
                  <?php echo @substr($hari_rentang['Sabtu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Sabtu'][$i]->jam_selesai,0,5); ?><br/>
                  <?php
                  foreach (@$tabel_jadwalprioritas_sabtu[$i] as $rowjadwalprioritas) {
                    $ada = false;
                    foreach (@$tabel_jadwalkhusus_sabtu[$i] as $rowjadwalkhusus) {
                      if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                        $ada = true;
                      }
                    }
                    if ($ada == false) {
                      if ((@$tabel_jadwalmapel_sabtu[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_sabtu[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                    }
                  }
                }
                ?>
                <?php 
                foreach (@$tabel_jammengajar as $rowjammengajar) {
                  $ada = false;
                  foreach (@$tabel_jadwalprioritas_sabtu[$i] as $rowjadwalprioritas) {
                    if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                      $ada = true;
                    }
                  }
                  foreach (@$tabel_jadwalkhusus_sabtu[$i] as $rowjadwalkhusus) {
                    if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                      $ada = true;
                    }
                  }
                  if ($ada == false) {
                    if ((@$tabel_jadwalmapel_sabtu[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_sabtu[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                  }
                }
              }
              ?></td>

              <td class="putih">
                <?php echo @substr($hari_rentang['Minggu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Minggu'][$i]->jam_selesai,0,5); ?><br/>
                <?php
                foreach (@$tabel_jadwalprioritas_minggu[$i] as $rowjadwalprioritas) {
                  $ada = false;
                  foreach (@$tabel_jadwalkhusus_minggu[$i] as $rowjadwalkhusus) {
                    if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                      $ada = true;
                    }
                  }
                  if ($ada == false) {
                    if ((@$tabel_jadwalmapel_minggu[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_minggu[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo $rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")";
                  }
                }
              }
              ?>
              <?php 
              foreach (@$tabel_jammengajar as $rowjammengajar) {
                $ada = false;
                foreach (@$tabel_jadwalprioritas_minggu[$i] as $rowjadwalprioritas) {
                  if (($rowjammengajar->NIP == $rowjadwalprioritas->NIP) && ($rowjammengajar->id_namamapel == $rowjadwalprioritas->id_namamapel)) {
                    $ada = true;
                  }
                }
                foreach (@$tabel_jadwalkhusus_minggu[$i] as $rowjadwalkhusus) {
                  if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                    $ada = true;
                  }
                }
                if ($ada == false) {
                  if ((@$tabel_jadwalmapel_minggu[$row_siswa->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_minggu[$row_siswa->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo $rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")";
                }
              }
            }
            ?></td>

          </tr>
          <?php
        }
        ?> 
      </tbody>

    </table>
    
    
    <!-- <a href="#jadwalmapel" data-toggle="tab"><button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button></a> -->
  </div>
  <!-- /.box-body -->
</div>


</div>



</div>
</div>
</form>
</div>



















<!-- end tab 1 -->

<!-- end tab 2 -->

<!-- end tab 3 -->


<!-- end tab 4 -->

<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <div class="col-md-12 ">

      <!-- Profile Image -->
      
      <!-- /.box -->
    </div>
    
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->
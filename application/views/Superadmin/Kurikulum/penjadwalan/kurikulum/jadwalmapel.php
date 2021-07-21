<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/penjadwalam/chosen/chosen.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Jadwal Mata Pelajaran<br></center>
      <!-- <center><small>Tahun Ajaran 2016-2017</small></center> -->
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

            <li  class="active"><a href="#jadwalprioritas" data-toggle="tab" alt="test kursor">Jadwal Prioritas</a></li>
            <li><a href="#jadwalkhusus" data-toggle="tab">Jadwal Khusus</a></li>
            <li><a href="#kelolajadwalmapel" data-toggle="tab">Kelola Jadwal Mata Pelajaran</a></li>
            <li><a href="#jadwalmapel" data-toggle="tab">Jadwal Mata Pelajaran</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane" id="jadwalmapel">
              <div class="box">
                <div class="box-header">
                  <form>
                    <select id="jenjangjadwalmapel2" onchange="document.location = '<?php echo site_url('kurikulum/jadwalmapel'); ?>/' + document.getElementById('jenjangjadwalmapel2').value;">
                      <option value="7" <?php if ($jenjang == '7') { echo " selected"; } ?>> KELAS 7</option>
                      <option value="8" <?php if ($jenjang == '8') { echo " selected"; } ?>> KELAS 8</option>
                      <option value="9" <?php if ($jenjang == '9') { echo " selected"; } ?>> KELAS 9</option>
                    </select>
                  </form>
                </div>

                <!-- /.box-header -->
                <div class="box-body">


                  <table class="table table-bordered table-striped tabelmapel">
                    <thead>
                      <tr class="barishari">
                        <th class="tengah" rowspan="2">Jam ke</th>
                        <th class="tengah" rowspan="2">Waktu</th>
                        <th colspan="<?php echo count($tabel_kelasreguler); ?>">Senin</th>
                      </tr>
                      <tr class="bariskelas">
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                          <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                          <?php
                        }
                        ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      for($i=0;$i<=12;$i++)  {
                        ?>
                        <tr>
                          <td class="fit"><?php echo $i; ?></td>
                          <th><?php echo @substr($hari_rentang['Senin'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Senin'][$i]->jam_selesai,0,5); ?></th>
                          <?php
                          foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                            ?>
                            <!--th bgcolor="#00FF00"--> <!-- echo @$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel;  -->
                            <?php
                            $sudah = false;
                            foreach (@$tabel_jadwalprioritas_senin[$i] as $rowjadwalprioritas) {
                              $ada = false;
                              foreach (@$tabel_jadwalkhusus_senin[$i] as $rowjadwalkhusus) {
                                if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                                  $ada = true;
                                }
                              }
                              if ($ada == false) {
                                if ((@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>'; $sudah = true;
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
                              if ((@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>';  $sudah = true;
                            }
                          }
                        }

                        if ($sudah == false) {
                         echo '<th bgcolor="#ffffff">&nbsp;</th>';
                       }
                       ?>

                       <!--/th-->
                       <?php
                     }
                     ?>
                   </tr>
                   <?php
                 }
                 ?>                      
               </tbody>

             </table>
             <br>


             <table class="table table-bordered table-striped tabelmapel">
              <thead>
                <tr class="barishari">
                  <th class="tengah" rowspan="2">Jam ke</th>
                  <th class="tengah" rowspan="2">Waktu</th>
                  <th colspan="<?php echo count($tabel_kelasreguler); ?>">Selasa</th>
                </tr>
                <tr class="bariskelas">
                  <?php
                  foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                    ?>
                    <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                    <?php
                  }
                  ?>
                </tr>
              </thead>
              <tbody>
                <?php 
                for($i=0;$i<=12;$i++)  {
                  ?>
                  <tr>
                    <td class="fit"><?php echo $i; ?></td>
                    <th><?php echo @substr($hari_rentang['Selasa'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Selasa'][$i]->jam_selesai,0,5); ?></th>
                    <?php
                    foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                      ?>
                      <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?>

                        <?php
                        $sudah = false;
                        foreach (@$tabel_jadwalprioritas_selasa[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_selasa[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>'; $sudah = true;
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
                         if ((@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>'; $sudah = true;
                       }
                     }
                   }

                   if ($sudah == false) {
                    echo '<th bgcolor="#ffffff">&nbsp;</th>';
                  }
                  ?>
                  <!--  </th> -->
                  <?php
                }
                ?>
              </tr>
              <?php
            }
            ?>                      
          </tbody>

        </table>
        <br>

        <table class="table table-bordered table-striped tabelmapel">
          <thead>
            <tr class="barishari">
              <th class="tengah" rowspan="2">Jam ke</th>
              <th class="tengah" rowspan="2">Waktu</th>
              <th colspan="<?php echo count($tabel_kelasreguler); ?>">Rabu</th>
            </tr>
            <tr class="bariskelas">
              <?php
              foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                ?>
                <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                <?php
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php 
            for($i=0;$i<=12;$i++)  {
              ?>
              <tr>
                <td class="fit"><?php echo $i; ?></td>
                <th><?php echo @substr($hari_rentang['Rabu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Rabu'][$i]->jam_selesai,0,5); ?></th>
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

                  <?php
                  $sudah = false;
                  foreach (@$tabel_jadwalprioritas_rabu[$i] as $rowjadwalprioritas) {
                    $ada = false;
                    foreach (@$tabel_jadwalkhusus_rabu[$i] as $rowjadwalkhusus) {
                      if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                        $ada = true;
                      }
                    }
                    if ($ada == false) {
                      if ((@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>'; $sudah = true;
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
                    if ((@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>'; $sudah = true;
                  }
                }
              }

              if ($sudah == false) {
                echo '<th bgcolor="#ffffff">&nbsp;</th>';
              }
              ?>
              <?php
            }
            ?>
          </tr>
          <?php
        }
        ?>                      
      </tbody>

    </table>
    <br>

    <table class="table table-bordered table-striped tabelmapel">
      <thead>
        <tr class="barishari">
          <th class="tengah" rowspan="2">Jam ke</th>
          <th class="tengah" rowspan="2">Waktu</th>
          <th colspan="<?php echo count($tabel_kelasreguler); ?>">Kamis</th>
        </tr>
        <tr class="bariskelas">
          <?php
          foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
            ?>
            <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
            <?php
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php 
        for($i=0;$i<=12;$i++)  {
          ?>
          <tr>
            <td class="fit"><?php echo $i; ?></td>
            <th><?php echo @substr($hari_rentang['Kamis'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Kamis'][$i]->jam_selesai,0,5); ?></th>
            <?php
            foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
              ?>
              <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

              <?php
              $sudah = false;
              foreach (@$tabel_jadwalprioritas_kamis[$i] as $rowjadwalprioritas) {
                $ada = false;
                foreach (@$tabel_jadwalkhusus_kamis[$i] as $rowjadwalkhusus) {
                  if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                    $ada = true;
                  }
                }
                if ($ada == false) {
                  if ((@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';  $sudah = true;
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
                if ((@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>';  $sudah = true;
              }
            }
          }

          if ($sudah == false) {
            echo '<th bgcolor="#ffffff">&nbsp;</th>';
          }
          ?>
          <?php
        }
        ?>
      </tr>
      <?php
    }
    ?>                      
  </tbody>

</table>
<br>

<table class="table table-bordered table-striped tabelmapel">
  <thead>
    <tr class="barishari">
      <th class="tengah" rowspan="2">Jam ke</th>
      <th class="tengah" rowspan="2">Waktu</th>
      <th colspan="<?php echo count($tabel_kelasreguler); ?>">Jumat</th>
    </tr>
    <tr class="bariskelas">
      <?php
      foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
        ?>
        <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
        <?php
      }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php 
    for($i=0;$i<=12;$i++)  {
      ?>
      <tr>
        <td class="fit"><?php echo $i; ?></td>
        <th><?php echo @substr($hari_rentang['Jumat'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Jumat'][$i]->jam_selesai,0,5); ?></th>
        <?php
        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
          ?>
          <!--  <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

          <?php
          $sudah = false;
          foreach (@$tabel_jadwalprioritas_jumat[$i] as $rowjadwalprioritas) {
            $ada = false;
            foreach (@$tabel_jadwalkhusus_jumat[$i] as $rowjadwalkhusus) {
              if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                $ada = true;
              }
            }
            if ($ada == false) {
              if ((@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';  $sudah = true;
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
            if ((@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>';  $sudah = true;
          }
        }
      }

      if ($sudah == false) {
        echo '<th bgcolor="#ffffff">&nbsp;</th>';
      }
      ?>
      <?php
    }
    ?>
  </tr>
  <?php
}
?>                      
</tbody>

</table>
<br>
<table class="table table-bordered table-striped tabelmapel">
  <thead>
    <tr class="barishari">
      <th class="tengah" rowspan="2">Jam ke</th>
      <th class="tengah" rowspan="2">Waktu</th>
      <th colspan="<?php echo count($tabel_kelasreguler); ?>">Sabtu</th>
    </tr>
    <tr class="bariskelas">
      <?php
      foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
        ?>
        <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
        <?php
      }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php 
    for($i=0;$i<=12;$i++)  {
      ?>
      <tr>
        <td class="fit"><?php echo $i; ?></td>
        <th><?php echo @substr($hari_rentang['Sabtu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Sabtu'][$i]->jam_selesai,0,5); ?></th>
        <?php
        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
          ?>
          <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

          <?php
          $sudah = false;
          foreach (@$tabel_jadwalprioritas_sabtu[$i] as $rowjadwalprioritas) {
            $ada = false;
            foreach (@$tabel_jadwalkhusus_sabtu[$i] as $rowjadwalkhusus) {
              if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                $ada = true;
              }
            }
            if ($ada == false) {
              if ((@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>'; $sudah = true;
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
            if ((@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>'; $sudah = true;
          }
        }
      }

      if ($sudah == false) {
        echo '<th bgcolor="#ffffff">&nbsp;</th>';
      }
      ?>
      <?php
    }
    ?>
  </tr>
  <?php
}
?>                      
</tbody>

</table>
<br>

<table class="table table-bordered table-striped tabelmapel">
  <thead>
    <tr class="barishari">
      <th class="tengah" rowspan="2">Jam ke</th>
      <th class="tengah" rowspan="2">Waktu</th>
      <th colspan="<?php echo count($tabel_kelasreguler); ?>">Minggu</th>
    </tr>
    <tr class="bariskelas">
      <?php
      foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
        ?>
        <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
        <?php
      }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php 
    for($i=0;$i<=12;$i++)  {
      ?>
      <tr>
        <td class="fit"><?php echo $i; ?></td>
        <th><?php echo @substr($hari_rentang['Minggu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Minggu'][$i]->jam_selesai,0,5); ?></th>
        <?php
        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
          ?>
          <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

          <?php
          $sudah = false;
          foreach (@$tabel_jadwalprioritas_minggu[$i] as $rowjadwalprioritas) {
            $ada = false;
            foreach (@$tabel_jadwalkhusus_minggu[$i] as $rowjadwalkhusus) {
              if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                $ada = true;
              }
            }
            if ($ada == false) {
              if ((@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>'; $sudah = true;
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
            if ((@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama_mapel."(".$rowjammengajar->nama_panggilan.")".'</th>'; $sudah = true;
          }
        }
      }
      if ($sudah == false) {
        echo '<th bgcolor="#ffffff">&nbsp;</th>';
      }
      ?>
      <?php
    }
    ?>
  </tr>
  <?php
}
?>                      
</tbody>

</table>
<br>

<a href="<?php echo site_url('kurikulum/exportjadwalmapel/'.$jenjang); ?>" ><button class="btnjdwl"><i class="fa fa-upload text-red "></i> Export</button></a>
</div>
<!-- /.box-body -->
</div>


</div>
<!-- /.tab-pane -->

<div class="active tab-pane" id="jadwalprioritas">
  <div class="box">

    <!-- /.box-header -->
    <div class="box-body">
      <form method="post" action="<?php echo site_url('kurikulum/simpanprioritas'); ?>">
        <table class="table table-bordered table-striped tabelmapel">
          <p style="color: #ff0000">> Jadwal Prioritas adalah <b>Mata Pelajaran</b> yang ingin di <b>dahulukan</b> atau <b>prioritaskan</b>.<br>
            > Pilih Mata Pelajaran, bisa lebih dari <b>satu</b>.</p>
                      <!-- <select name="jenjang">
                        <option value="7"> KELAS 7</option>
                        <option value="8"> KELAS 8</option>
                        <option value="9"> KELAS 9</option>
                      </select> -->
                      <thead>
                        <tr class="barishari">
                          <th class="tengah" >Jam ke</th>
                          <!-- <th class="tengah" >Waktu</th> -->
                          <th class="tengah">Senin</th>
                          <th class="tengah">Selasa</th>
                          <th class="tengah">Rabu</th>
                          <th class="tengah">Kamis</th>
                          <th class="tengah">Jumat</th>
                          <th class="tengah">Sabtu</th>
                          <th class="tengah">Minggu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        for($i=0;$i<=5;$i++)  {
                          ?>
                          <tr class="btnpilih">
                            <td class="fit"><?php echo $i; ?></td>
                            <!-- <th>&nbsp;</th> -->
                            <th>

                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_senin_<?php echo $i; ?>[]" id="id_namamapel_senin_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>


                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                            <th>
                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_selasa_<?php echo $i; ?>[]" id="id_namamapel_selasa_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                            <th>
                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_rabu_<?php echo $i; ?>[]" id="id_namamapel_rabu_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                            <th>
                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_kamis_<?php echo $i; ?>[]" id="id_namamapel_kamis_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                            <th>
                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_jumat_<?php echo $i; ?>[]" id="id_namamapel_jumat_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                            <th>
                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_sabtu_<?php echo $i; ?>[]" id="id_namamapel_sabtu_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                            <th>
                              <select data-placeholder="Pilih mapel" multiple class="chosen-select" name="id_namamapel_minggu_<?php echo $i; ?>[]" id="id_namamapel_minggu_<?php echo $i; ?>">
                                <?php
                                foreach ($tabel_namamapel as $row_namamapel) {
                                  ?>
                                  <option value="<?php echo $row_namamapel->id_namamapel; ?>"><?php echo $row_namamapel->nama_mapel; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#80002a; border-color:#80002a;">Pilih Mapel</button> -->
                            </th>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>

                    </table>
                    <button class="btn btnjdwl" type="submit">Submit</button>
                  </form>
                </div>
                <!-- /.box-body -->

                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped tabelmapel">
                    <thead>
                      <tr class="barishari" style="background-color:grey; color:white;">
                        <th class="tengah" >Jam ke</th>
                        <!-- <th class="tengah" >Waktu</th> -->
                        <th class="tengah">Senin</th>
                        <th class="tengah">Selasa</th>
                        <th class="tengah">Rabu</th>
                        <th class="tengah">Kamis</th>
                        <th class="tengah">Jumat</th>
                        <th class="tengah">Sabtu</th>
                        <th class="tengah">Minggu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <?php $i = 0 ?>
                      <?php foreach ($prioritas_khusus as $nama => $jadwalmapel) : ?>
                        <?php $i++ ?>
                        <?php $nama = implode($jadwalmapel["nama"]) ?>
                       <tr>
                         <td><?php echo $i. "." ?>;</td>
                         <td>&nbsp;</td>
                         <td><?php echo $Senin ?></td>
                         <td><?php echo $Selasa ?>;</td>
                         <td><?php echo $Rabu ?>;</td>
                         <td><?php echo $Kamis ?>;</td>
                         <td><?php echo $Jumat ?>;</td>
                         <td><?php echo $Sabtu ?>;</td>
                         <td><?php echo $Minggu ?>;</td>
                       </tr>

                     <?php endforeach; ?> -->

                     <?php
                     for($i=0;$i<=5;$i++) {
                      ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <!-- <th>&nbsp;</th> -->
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_senin[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?> </th>
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_selasa[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?> </th>
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_rabu[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?> </th>
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_kamis[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?> </th>
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_jumat[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?></th>
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_sabtu[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?> </th>
                        <th><?php 
                        $z=0;
                        foreach (@$tabel_prioritaskhusus_minggu[$i] as $rowprioritaskhusus) {
                          $z++;
                          if ($z>1) { echo ", "; }
                          echo $rowprioritaskhusus->nama.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                        }
                        ?> </th>
                          
 </tr>
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

<div class="tab-pane" id="jadwalkhusus">
  <div class="box">

    <!-- /.box-header -->
    <div class="box-body">
     <form method="post" action="<?php echo site_url('kurikulum/simpankhusus'); ?>">
      <table class="table table-bordered table-striped tabelmapel">
        <p style="color: #ff0000">> Jadwal Khusus yaitu <b>guru</b> yang <b>tidak bisa mengajar</b> atau <b>memunyai aktifitas rutin lain</b> sehingga tidak bisa mengajar.<br>
          > Pilih Guru, bisa lebih dari <b>satu</b>.</p>
          <thead>
            <tr class="barishari">
              <th class="tengah" >Jam ke</th>
              <!-- <th class="tengah" >Waktu</th> -->
              <th class="tengah">Senin</th>
              <th class="tengah">Selasa</th>
              <th class="tengah">Rabu</th>
              <th class="tengah">Kamis</th>
              <th class="tengah">Jumat</th>
              <th class="tengah">Sabtu</th>
              <th class="tengah">Minggu</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for($i=0;$i<=12;$i++)  {
              ?>
              <tr class="btnpilih">
                <td class="fit"><?php echo $i; ?></td>
                <!-- <th>&nbsp;</th> -->
                <th>
                  <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_senin_<?php echo $i; ?>[]" id="NIP_senin_<?php echo $i; ?>">
                    <?php
                    foreach ($tabel_pegawai as $row_pegawai) {
                      ?>
                      <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                  <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#00994d; border-color:#00994d;">Pilih guru</button> -->
                </th>
                <th>
                  <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_selasa_<?php echo $i; ?>[]" id="NIP_selasa_<?php echo $i; ?>">
                    <?php
                    foreach ($tabel_pegawai as $row_pegawai) {
                      ?>
                      <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                      <?php
                    }
                    ?>
                  </select>

                  <th>
                    <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_rabu_<?php echo $i; ?>[]" id="NIP_rabu_<?php echo $i; ?>">
                      <?php
                      foreach ($tabel_pegawai as $row_pegawai) {
                        ?>
                        <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#00994d; border-color:#00994d;">Pilih guru</button> -->
                  </th>
                  <th>
                    <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_kamis_<?php echo $i; ?>[]" id="NIP_kamis_<?php echo $i; ?>">
                      <?php
                      foreach ($tabel_pegawai as $row_pegawai) {
                        ?>
                        <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#00994d; border-color:#00994d;">Pilih guru</button> -->
                  </th>
                  <th>
                    <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_jumat_<?php echo $i; ?>[]" id="NIP_jumat_<?php echo $i; ?>">
                      <?php
                      foreach ($tabel_pegawai as $row_pegawai) {
                        ?>
                        <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#00994d; border-color:#00994d;">Pilih guru</button> -->
                  </th>
                  <th>
                    <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_sabtu_<?php echo $i; ?>[]" id="NIP_sabtu_<?php echo $i; ?>">
                      <?php
                      foreach ($tabel_pegawai as $row_pegawai) {
                        ?>
                        <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#00994d; border-color:#00994d;">Pilih guru</button> -->
                  </th>
                  <th>
                    <select data-placeholder="Pilih guru" multiple class="chosen-select" name="NIP_minggu_<?php echo $i; ?>[]" id="NIP_minggu_<?php echo $i; ?>">
                      <?php
                      foreach ($tabel_pegawai as $row_pegawai) {
                        ?>
                        <option value="<?php echo $row_pegawai->NIP; ?>"><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <!-- <button class="btn btn-success button-form" data-toggle="modal" data-target="#review4" style="background-color:#00994d; border-color:#00994d;">Pilih guru</button> -->
                  </th>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button class="btn btnjdwl">Submit</button>
        </form>
      </div>
      <!-- /.box-body -->

      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered table-striped tabelmapel">
          <thead>
            <tr class="barishari" style="background-color:grey; color:white;">
              <th class="tengah" >Jam ke</th>
              <!-- <th class="tengah" >Waktu</th> -->
              <th class="tengah">Senin</th>
              <th class="tengah">Selasa</th>
              <th class="tengah">Rabu</th>
              <th class="tengah">Kamis</th>
              <th class="tengah">Jumat</th>
              <th class="tengah">Sabtu</th>
              <th class="tengah">Minggu</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for($i=0;$i<=12;$i++) {
              ?>
              <tr>
                <td class="fit"><?php echo $i; ?></td>
                <!-- <th>&nbsp;</th> -->
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_senin[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?> </th>
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_selasa[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?> </th>
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_rabu[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?> </th>
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_kamis[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?> </th>
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_jumat[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?></th>
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_sabtu[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?> </th>
                <th><?php 
                $z=0;
                foreach (@$tabel_khusus_minggu[$i] as $rowprioritaskhusus) {
                  $z++;
                  if ($z>1) { echo ", "; }
                  echo $rowprioritaskhusus->nama_panggilan.'&nbsp;<a href="'.site_url('kurikulum/hapusprioritas/'.$rowprioritaskhusus->id_prkh).'">X</a>&nbsp;';
                }
                ?> </th>
              </tr>
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

  <div class="tab-pane" id="kelolajadwalmapel">
    <div class="box">
      <div class="box-header">
        <form>
          <select id="jenjangjadwalmapel" onchange="document.location = '<?php echo site_url('kurikulum/jadwalmapel'); ?>/' + document.getElementById('jenjangjadwalmapel').value;">
            <option value="7" <?php if ($jenjang == '7') { echo " selected"; } ?>> KELAS 7</option>
            <option value="8" <?php if ($jenjang == '8') { echo " selected"; } ?>> KELAS 8</option>
            <option value="9" <?php if ($jenjang == '9') { echo " selected"; } ?>> KELAS 9</option>
          </select>
        </form>
      </div>

      <!-- /.box-header -->
      <div class="box-body">
        <div style="overflow-x: scroll; width: 1090px">
          <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/senin/'.$jenjang); ?>">

            <table  class="table table-bordered table-striped tabelmapel">
              <thead>
                <tr class="barishari">
                  <th class="tengah" rowspan="2">Jam ke</th>
                  <th class="tengah" rowspan="2">Waktu</th>
                  <th colspan="<?php echo count($tabel_kelasreguler); ?>">Senin</th>

                </tr>
                <tr class="bariskelas">
                  <?php
                  foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                    ?>
                    <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                    <?php
                  }
                  ?>
                </tr>
              </thead>
              <tbody>
                <?php 
                for($i=0;$i<=12;$i++)  {
                  ?>
                  <tr>
                    <td class="fit"><?php echo $i; ?></td>
                    <th><?php echo @substr($hari_rentang['Senin'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Senin'][$i]->jam_selesai,0,5); ?></th>
                    <?php
                    foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                      ?>
                      <th>
                        <select data-placeholder="Pilih" class="kodeguru" name="jadwal_senin_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_senin_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                          <option value="">...</option>
                          <?php 
                          foreach (@$tabel_jadwalprioritas_senin[$i] as $rowjadwalprioritas) {
                            $ada = false;
                            foreach (@$tabel_jadwalkhusus_senin[$i] as $rowjadwalkhusus) {
                              if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                                $ada = true;
                              }
                            }
                            if ($ada == false) {
                              ?>
                              <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                              <?php
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
                              ?>
                              <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                              <?php
                            }
                          }
                          ?>
                        </select>
                      </th>
                      <?php
                    }
                    ?>
                  </tr>
                  <?php
                }
                ?>
              </tbody>

            </table>
            <button type="submit" class="btn btn-danger">Submit</button>
          </form>
        </div>

        <div style="overflow-x: scroll; width: 1090px">
          <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/selasa/'.$jenjang); ?>">

           <table  class="table table-bordered table-striped tabelmapel">
            <thead>
              <tr class="barishari">
                <th class="tengah" rowspan="2">Jam ke</th>
                <th class="tengah" rowspan="2">Waktu</th>
                <th colspan="<?php echo count($tabel_kelasreguler); ?>">Selasa</th>

              </tr>
              <tr class="bariskelas">
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                  <?php
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0;$i<=12;$i++)  {
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <th><?php echo @substr($hari_rentang['Selasa'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Selasa'][$i]->jam_selesai,0,5); ?></th>
                  <?php
                  foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                    ?>
                    <th>
                      <select data-placeholder="Pilih" class="kodeguru" name="jadwal_selasa_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_selasa_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                        <option value="">...</option>
                        <?php 
                        foreach (@$tabel_jadwalprioritas_selasa[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_selasa[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                            <?php
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
                            ?>
                            <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>

      <div style="overflow-x: scroll; width: 1090px">
        <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/rabu/'.$jenjang); ?>">

          <table  class="table table-bordered table-striped tabelmapel">
            <thead>
              <tr class="barishari">
                <th class="tengah" rowspan="2">Jam ke</th>
                <th class="tengah" rowspan="2">Waktu</th>
                <th colspan="6">Rabu</th>

              </tr>
              <tr class="bariskelas">
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                  <?php
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0;$i<=12;$i++)  {
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <th><?php echo @substr($hari_rentang['Rabu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Rabu'][$i]->jam_selesai,0,5); ?></th>
                  <?php
                  foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                    ?>
                    <th>
                      <select data-placeholder="Pilih" class="kodeguru" name="jadwal_rabu_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_rabu_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                        <option value="">...</option>
                        <?php 
                        foreach (@$tabel_jadwalprioritas_rabu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_rabu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                            <?php
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
                            ?>
                            <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>

      <div style="overflow-x: scroll; width: 1090px">
        <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/kamis/'.$jenjang); ?>">

          <table  class="table table-bordered table-striped tabelmapel">
            <thead>
              <tr class="barishari">
                <th class="tengah" rowspan="2">Jam ke</th>
                <th class="tengah" rowspan="2">Waktu</th>
                <th colspan="6">Kamis</th>

              </tr>
              <tr class="bariskelas">
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                  <?php
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0;$i<=12;$i++)  {
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <th><?php echo @substr($hari_rentang['Kamis'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Kamis'][$i]->jam_selesai,0,5); ?></th>
                  <?php
                  foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                    ?>
                    <th>
                      <select data-placeholder="Pilih" class="kodeguru" name="jadwal_kamis_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_kamis_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                        <option value="">...</option>
                        <?php 
                        foreach (@$tabel_jadwalprioritas_kamis[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_kamis[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                            <?php
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
                          foreach (@$tabel_jadwalkhusus_kamisa[$i] as $rowjadwalkhusus) {
                            if ($rowjammengajar->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>

      <div style="overflow-x: scroll; width: 1090px">
        <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/jumat/'.$jenjang); ?>">

          <table  class="table table-bordered table-striped tabelmapel">
            <thead>
              <tr class="barishari">
                <th class="tengah" rowspan="2">Jam ke</th>
                <th class="tengah" rowspan="2">Waktu</th>
                <th colspan="6">Jumat</th>

              </tr>
              <tr class="bariskelas">
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                  <?php
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0;$i<=12;$i++)  {
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <th><?php echo @substr($hari_rentang['Jumat'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Jumat'][$i]->jam_selesai,0,5); ?></th>
                  <?php
                  foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                    ?>
                    <th>
                      <select data-placeholder="Pilih" class="kodeguru" name="jadwal_jumat_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_jumat_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                        <option value="">...</option>
                        <?php 
                        foreach (@$tabel_jadwalprioritas_jumat[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_jumat[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                            <?php
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
                            ?>
                            <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>

      <div style="overflow-x: scroll; width: 1090px">
        <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/sabtu/'.$jenjang); ?>">

          <table  class="table table-bordered table-striped tabelmapel">
            <thead>
              <tr class="barishari">
                <th class="tengah" rowspan="2">Jam ke</th>
                <th class="tengah" rowspan="2">Waktu</th>
                <th colspan="6">Sabtu</th>

              </tr>
              <tr class="bariskelas">
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                  <?php
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0;$i<=12;$i++)  {
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <th><?php echo @substr($hari_rentang['Sabtu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Sabtu'][$i]->jam_selesai,0,5); ?></th>
                  <?php
                  foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                    ?>
                    <th>
                      <select data-placeholder="Pilih" class="kodeguru" name="jadwal_sabtu_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_sabtu_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                        <option value="">...</option>
                        <?php 
                        foreach (@$tabel_jadwalprioritas_sabtu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_sabtu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                            <?php
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
                            ?>
                            <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>

      <div style="overflow-x: scroll; width: 1090px">
        <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalguru/minggu/'.$jenjang); ?>">

          <table  class="table table-bordered table-striped tabelmapel">
            <thead>
              <tr class="barishari">
                <th class="tengah" rowspan="2">Jam ke</th>
                <th class="tengah" rowspan="2">Waktu</th>
                <th colspan="6">Minggu</th>

              </tr>
              <tr class="bariskelas">
                <?php
                foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                  ?>
                  <th><?php echo $row_kelasreguler->nama_kelas; ?></th>
                  <?php
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0;$i<=12;$i++)  {
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <th><?php echo @substr($hari_rentang['Minggu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Minggu'][$i]->jam_selesai,0,5); ?></th>
                  <?php
                  foreach ($tabel_kelasreguler as  $row_kelasreguler) {
                    ?>
                    <th>
                      <select data-placeholder="Pilih" class="kodeguru" name="jadwal_minggu_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" id="jadwal_minggu_<?php echo $row_kelasreguler->id_kelas_reguler; ?>_<?php echo $i; ?>" style="width: 120px;">
                        <option value="">...</option>
                        <?php 
                        foreach (@$tabel_jadwalprioritas_minggu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_minggu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            ?>
                            <option class="kuning" value="<?php echo $rowjadwalprioritas->NIP; ?>_<?php echo $rowjadwalprioritas->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjadwalprioritas->nama; ?>(<?php echo $rowjadwalprioritas->nama_panggilan; ?>)</option>
                            <?php
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
                            ?>
                            <option class="putih" value="<?php echo $rowjammengajar->NIP; ?>_<?php echo $rowjammengajar->id_namamapel; ?>" <?php if ((@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo " selected"; } ?>><?php echo $rowjammengajar->nama_mapel; ?>(<?php echo $rowjammengajar->nama_panggilan; ?>)</option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
              }
              ?>
            </tbody>

          </table>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>


    </div>
    <!-- /.box-body -->
  </div> 
</div>


</div>
<!-- /.tab-content -->
</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row (main row) -->
<!-- modal -->


      <!-- <div class="modal fade bs-example-modal-lg" id="review4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Daftar Mata Pelajaran Jadwal Prioritas</h4>
            </div>
            <div class="modal-body">
              <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="#" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Pilih Mata Pelajar :</label>
                          <div class="col-sm-10">
                            <ul class="titik">
                              <li><input type="checkbox"> Matematika</li>
                              <li><input type="checkbox"> Bahasa Indonesia</li>
                              <li><input type="checkbox"> Bahasa Inggris</li>
                              <li><input type="checkbox"> IPS</li>
                              <li><input type="checkbox"> Fisika</li>
                              <li><input type="checkbox"> Biologi</li>
                              <li><input type="checkbox"> Penjaskes</li>
                              <li><input type="checkbox"> Kesenian</li>
                              <li><input type="checkbox"> Bahasa Jawa</li>
                            </ul>                      
                          </div>
                      </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary button-form button-update-barang">Save changes</button>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    <!-- /.content -->
  </div>
  <!--  /.content-wrapper -->
  <script type="text/javascript">
    $(".chosen-select").chosen({width: "95%"}); 
  </script>
  <script type="text/javascript">

            </script>
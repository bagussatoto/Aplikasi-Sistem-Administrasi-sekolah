<?php
header("Content-Type: application/download\n");
header("Content-Disposition: attachment; filename=\"Jadwal Mapel.xls\"");
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    @media print {
      body {-webkit-print-color-adjust: exact;}
    }
  </style>
</head>
<body>
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Senin'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Senin'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                       <!--  <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?>
                          
                          <?php
                          foreach (@$tabel_jadwalprioritas_senin[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_senin[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_senin[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
                        }
                        ?>

                        <!-- </th> -->
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Selasa'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Selasa'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                       <!--  <th class="ungu" bgcolor="#00FF00"> -->
                          <?php //echo @$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?>
                          
                          <?php
                          foreach (@$tabel_jadwalprioritas_selasa[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_selasa[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_selasa[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
                        }
                        ?>
                        <!-- </th> -->
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Rabu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Rabu'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                        <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

                        <?php
                          foreach (@$tabel_jadwalprioritas_rabu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_rabu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_rabu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Kamis'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Kamis'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                        <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

                        <?php
                          foreach (@$tabel_jadwalprioritas_kamis[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_kamis[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_kamis[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Jumat'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Jumat'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                        <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

                        <?php
                          foreach (@$tabel_jadwalprioritas_jumat[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_jumat[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_jumat[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Sabtu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Sabtu'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                        <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

                        <?php
                          foreach (@$tabel_jadwalprioritas_sabtu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_sabtu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_sabtu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
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
                        for($i=0;$i<=11;$i++)  {
                          ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <th><?php echo @substr($hari_rentang['Minggu'][$i]->jam_mulai,0,5)."-".@substr($hari_rentang['Minggu'][$i]->jam_selesai,0,5); ?></th>
                        <?php
                        foreach ($tabel_kelasreguler as $key => $row_kelasreguler) {
                          ?>
                        <!-- <th class="ungu" bgcolor="#00FF00"> --><?php //echo @$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP." ".@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel; ?><!-- </th> -->

                        <?php
                          foreach (@$tabel_jadwalprioritas_minggu[$i] as $rowjadwalprioritas) {
                          $ada = false;
                          foreach (@$tabel_jadwalkhusus_minggu[$i] as $rowjadwalkhusus) {
                            if ($rowjadwalprioritas->NIP == $rowjadwalkhusus->NIP) {
                              $ada = true;
                            }
                          }
                          if ($ada == false) {
                            if ((@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjadwalprioritas->NIP) && (@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjadwalprioritas->id_namamapel)) { echo '<th bgcolor="'.@$rowjadwalprioritas->warna.'">'.$rowjadwalprioritas->nama."(".$rowjadwalprioritas->nama_panggilan.")".'</th>';
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
                            if ((@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->NIP == $rowjammengajar->NIP) && (@$tabel_jadwalmapel_minggu[$row_kelasreguler->id_kelas_reguler][$i][0]->id_namamapel == $rowjammengajar->id_namamapel)) { echo '<th bgcolor="'.@$rowjammengajar->warna.'">'.$rowjammengajar->nama."(".$rowjammengajar->nama_panggilan.")".'</th>';
                            }
                          }
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
</body>
</html>
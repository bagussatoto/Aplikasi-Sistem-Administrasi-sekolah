<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Nilai Ekstrakurikuler SMP Yogyakarta<br></center>
      <center><small>Tahun Ajaran 2016-2017</small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-md-12 ">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Daftar Nilai Persemester</h4>
          </div>
        </div>

          <div class="box">
            <div class="box-body">
              <select name="id_tahun_ajaran" id="id_tahun_ajaran" onchange="document.location='<?php echo site_url('siswa/nilai');?>/<?php echo $id_kelas_reguler; ?>/' + document.getElementById('id_tahun_ajaran').value;">
                <option value=""></option>  
                <?php
                foreach ($tahunajaran as $rowtahunajaran) {
                  ?>
                  <option value="<?php echo $rowtahunajaran->id_tahun_ajaran; ?>" <?php if ($id_tahun_ajaran == $rowtahunajaran->id_tahun_ajaran) { echo " selected"; } ?>><?php echo $rowtahunajaran->nama_file_kaldik; ?></option>  
                  <?php
                }
                ?>
              </select>
              <select name="id_kelas_reguler2" id="id_kelas_reguler2" onchange="document.location = '<?php echo site_url('siswa/nilai'); ?>'+'/'+document.getElementById('id_kelas_reguler2').value + '/<?php echo $id_tahun_ajaran; ?>';">
               <option value="">...</option>
               <?php
               foreach ($kelas_reguler as $row) {
               ?>
                <option value="<?php echo $row->id_kelas_reguler; ?>" <?php if ($row->id_kelas_reguler == $id_kelas_reguler) { echo " selected"; } ?>><?php echo $row->nama_kelas; ?></option>
                <?php
              }
              ?>
              </select>
              </br></br>
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
            </div>
          </div>
      </section>
    </div>

  </section>
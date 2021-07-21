<!DOCTYPE html>
<html>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

   

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color: navy;">Presensi Siswa SMP Yogyakarta <br></center>
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
            <li class="active"><a href="#presensisiswa" data-toggle="tab">Presensi Siswa</a></li>
            <?php
      if (($this->session->userdata("jabatan") == "Superadmin") || ($this->session->userdata("jabatan") == "Guru")|| ($this->session->userdata("jabatan") == "Karyawan") ) {
        ?>
            <li><a href="#imporpresensi" data-toggle="tab">Import Presensi</a></li>
            <?php
          }
          ?>
            <?php
      if (($this->session->userdata("jabatan") == "Superadmin") || ($this->session->userdata("jabatan") == "Guru") ) {
        ?>
            <li><a href="#laporanpresensi" data-toggle="tab">Laporan Presensi Per Bulan</a></li>
            <li><a href="#laporanpersemester" data-toggle="tab">Laporan Presensi Per Semester</a></li>
          <?php
    }
    ?> 
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="presensisiswa">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Presensi Siswa</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <select id="pilihkelaspresensi" onchange="document.location='<?php echo site_url('superkur/presensi'); ?>/'+document.getElementById('pilihkelaspresensi').value+'/'+document.getElementById('tahun').value+'/'+document.getElementById('bulan').value;">
                    <option value="">Pilih Kelas</option>
                    <?php
                    foreach ($kelas_reguler_berjalan as $d){
                      ?>
                      <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                      <?php
                    }?>
                  </select>

                  <?php
      if (($this->session->userdata("jabatan") == "Superadmin") || ($this->session->userdata("jabatan") == "Guru")|| ($this->session->userdata("jabatan") == "Karyawan") ) {
        ?>
                  <div class="posisikanan">
                    <select name="bulan" id="bulan" onchange="document.location='<?php echo site_url('superkur/presensi'); ?>/'+document.getElementById('pilihkelaspresensi').value+'/'+document.getElementById('tahun').value+'/'+document.getElementById('bulan').value;">
                      <option value="1" <?php if ($bln == '01') { echo " selected"; } ?>>Januari</option>
                      <option value="2" <?php if ($bln == '02') { echo " selected"; } ?>>Februari</option>
                      <option value="3" <?php if ($bln == '03') { echo " selected"; } ?>>Maret</option>
                      <option value="4" <?php if ($bln == '04') { echo " selected"; } ?>>April</option>
                      <option value="5" <?php if ($bln == '05') { echo " selected"; } ?>>Mei</option>
                      <option value="6" <?php if ($bln == '06') { echo " selected"; } ?>>Juni</option>
                      <option value="7" <?php if ($bln == '07') { echo " selected"; } ?>>Juli</option>
                      <option value="8" <?php if ($bln == '08') { echo " selected"; } ?>>Agustus</option>
                      <option value="9" <?php if ($bln == '09') { echo " selected"; } ?>>September</option>
                      <option value="10" <?php if ($bln == '10') { echo " selected"; } ?>>Oktober</option>
                      <option value="11" <?php if ($bln == '11') { echo " selected"; } ?>>November</option>
                      <option value="12" <?php if ($bln == '12') { echo " selected"; } ?>>Desember</option>
                    </select>
                    <select name="tahun" id="tahun" onchange="document.location='<?php echo site_url('superkur/presensi'); ?>/'+document.getElementById('pilihkelaspresensi').value+'/'+document.getElementById('tahun').value+'/'+document.getElementById('bulan').value;">
                      <option value="2017" <?php if ($thn == '2017') { echo " selected"; } ?>>2017</option>
                      <option value="2018" <?php if ($thn == '2018') { echo " selected"; } ?>>2018</option>
                    </select>
                  </div>
                  <br/><br/>
                  <form method="post" action="<?php echo site_url('superkur/simpanpresensi'); ?>">
                    <input type="hidden" name="bln" value="<?php echo $bln; ?>">
                    <input type="hidden" name="thn" value="<?php echo $thn; ?>">
                    <input type="hidden" name="id_kelas_reguler_berjalan" value="<?php echo $id_kelas_reguler_berjalan; ?>">

                  <div style="overflow: auto">
                    <table class="table table-bordered table-striped" style="width: 100%">
                      <thead>
                        <tr class="barishari">
                          <th class="fit">No</th>
                          <th>Nama Siswa</th>
                          <?php
                          //for($i=1;$i<=date('t');$i++) {
                          for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
                            ?>
                            <th><?php echo $i; ?></th>
                            <?php
                          }
                          ?>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>


                         <?php
                         $z=0; 
                         foreach ($siswaperkelas as $rowsiswa) {
                          $z++;
                          ?>
                          <tr>
                            <td><?php echo $z; ?></td>
                            <td><?php echo $rowsiswa->nama; ?></td>
                            <?php
                            //for($i=1;$i<=date('t');$i++) {
                            for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
                              ?>
                            <th>
                              <?php
                                //echo @$libur[$thn][ltrim($bln, "0")][ltrim($i, "0")];
                                if ((@$libur[$thn][ltrim($bln, "0")][ltrim($i, "0")] == "") && (@$liburnasional[ltrim($bln, "0")][ltrim($i, "0")] == "")) {
                              ?>
                              <select class="kodeguru" style="color: black"  name="presensi_<?php echo $rowsiswa->nisn; ?>_<?php echo $i; ?>">
                               <option value="" style="color: black" >-</option>
                               <option value="H" style="color: black" <?php if (@$datpresensi[$rowsiswa->nisn][$i] == "H") { echo " selected"; } ?>>H</option>
                               <option value="S" style="color: black" <?php if (@$datpresensi[$rowsiswa->nisn][$i] == "S") { echo " selected"; } ?>>S</option>
                               <option value="I" style="color: black" <?php if (@$datpresensi[$rowsiswa->nisn][$i] == "I") { echo " selected"; } ?>>I</option>
                               <option value="A" style="color: black" <?php if (@$datpresensi[$rowsiswa->nisn][$i] == "A") { echo " selected"; } ?>>A</option> 
                             </select>
                             <?php
                              }
                             ?>
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
</div>
<br>

<<a class="pull-right btn-jdwl" href="<?php  echo site_url('superkur/exportpresensi/'.@$this->uri->segment(3)); ?>">Export</a> 
<!-- <button type="button" class="pull-right btn-jdwl" onclick="document.location='<?php //echo site_url('akademik/exportpresensi/'.@$this->uri->segment(3)); ?>">Export</button> -->


<button class=" btn btn-danger pull-right" style="margin-right: 20px;">Submit</button>
</form>

</div>
<?php
}
?>
<div class="box-body">
  <div class="box-header">
    <h3 class="box-title center" style="margin-left: 35%">Presensi Siswa Bulan <?php if ($bln == '01') { echo "Januari";} elseif ($bln == '02') {echo "Februari";} elseif ($bln == '03') {echo "Maret";} elseif ($bln == '04') {echo "April";} elseif ($bln == '05') {echo "Mei";} elseif ($bln == '06') {echo "Juni";} elseif ($bln == '07') {echo "Juli";} elseif ($bln == '08') {echo "Agustus";} elseif ($bln == '09') {echo "September";} elseif ($bln == '10') {echo "Oktober";} elseif ($bln == '11') {echo "November";} elseif ($bln == '12') {echo "Desember";}?></h3>
  </div>
  <table class="table table-bordered table-striped" style="width: 100%">
    <thead>
      <tr class="barishari">
        <th class="fit">No</th>
        <th>Nama Siswa</th>
        <?php
        //for($i=1;$i<=date('t');$i++) {
        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
          ?>
          <th><?php echo $i; ?></th>
          <?php
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
         $z=0; 
         foreach ($siswaperkelas as $rowsiswa) {
          $z++;
          ?>
          <tr>
            <td><?php echo $z; ?></td>
            <td><?php echo $rowsiswa->nama; ?></td>
            <?php
              //for($i=1;$i<=date('t');$i++) {
              for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
                ?>
              <th><?php echo @$datpresensi[$rowsiswa->nisn][$i]; ?>
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

  </div>

  <!-- /.box-body -->
</div> 
</div>

      <div class="tab-pane" id="imporpresensi">
             <form class="form-horizontal formmapel" action="<?php echo base_url('superkur/importpresensi'); ?>" method="post" enctype="multipart/form-data">
              <div class="bigbox-mapel"> 
                <div class="box-mapel">
              
                  <span></span>
                  <br>
                  <div class=" col-md-12">
                    <label>Pilih kelas</label>
                    <select name="kelasimportpresensi" class="">
                   
                    <option value="">Pilih kelas</option>
                    
                    <?php

                    foreach ($kelas_reguler_berjalan as $d){
                      ?>
                      <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                      <?php
                    }?>
                  </select>
                  </div>
                  <br>
                  <span>
                  <div class="form-group formgrup jarakform col-sm-12">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Pilih File</label>
                    <div class="col-xs-4">
                      <input type="file" class="" required="required" name="filepresensi" placeholder="">
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

<!-- /.tab-pane -->
<div class=" tab-pane" id="laporanpresensi">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Laporan Presensi Siswa Per Bulan</h3>
      <form class="posisikanan">
        <select id="pilihkelasperbulan" onchange="document.location='<?php echo site_url('superkur/presensi'); ?>/'+document.getElementById('pilihkelasperbulan').value+'/'+document.getElementById('tahun').value+'/'+document.getElementById('bulan').value;">
          <option value="">Pilih Kelas</option>
          <?php
          foreach ($kelas_reguler_berjalan as $d){
            ?>
            <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
            <?php
          }?>
        </select></form>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div style="overflow: auto">
          <table class="table table-bordered table-striped" style="width: 100%">
            <thead>
              <tr class="barishari">
                <th>Bulan</th>
                <th class="fit">Nomor Absen</th>
                <th class="fit">Nama Siswa</th>
                <th class="fit">Sakit</th>
                <th class="fit">Ijin</th>
                <th class="fit">Absen</th>
              </tr>
            </thead>
            <tbody>
              <?php
                for ($i=1;$i<=12;$i++) {
                  ?>
              <tr>
                <th class="fit" rowspan="<?php echo count($siswaperkelas)+1; ?>"><?php 
                        if ($i == 1) {
                          echo "Januari";
                        } else if ($i == 2) {
                          echo "Februari";
                        } else if ($i == 3) {
                          echo "Maret";
                        } else if ($i == 4) {
                          echo "April";
                        } else if ($i == 5) {
                          echo "Mei";
                        } else if ($i == 6) {
                          echo "Juni";
                        } else if ($i == 7) {
                          echo "Juli";
                        } else if ($i == 8) {
                          echo "Agustus";
                        } else if ($i == 9) {
                          echo "September";
                        } else if ($i == 10) {
                          echo "Oktober";
                        } else if ($i == 11) {
                          echo "November";
                        } else if ($i == 12) {
                          echo "Desember";
                        }
                        //echo $i;
                         ?></th>
              </tr>
                <?php
                $z=0; 
                foreach ($siswaperkelas as $rowsiswa) {
                  $z++;
                  ?>
                  <tr>
                    <td><?php echo $z; ?></td>
                    <td><?php echo $rowsiswa->nama; ?></td>
                    <th><?php echo $datpresensibulan[$rowsiswa->nisn][$i]['S']; ?></th>
                    <th><?php echo $datpresensibulan[$rowsiswa->nisn][$i]['I']; ?></th>
                    <th><?php echo $datpresensibulan[$rowsiswa->nisn][$i]['A']; ?></th>
                  </tr>
                  <?php
                }
              }
                ?>
             

                </tbody>
              </table>
            </div>
            <a class="btn btnjdwl" href="<?php echo site_url('superkur/cetak_presensi/'.$id_kelas_reguler_berjalan.'/'.$thn.'/'.$bln); ?>">PRINT</a>
          </div>
          <!-- /.box-body -->
        </div> 
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="laporanpersemester">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Laporan Presensi Siswa Per Semester</h3>
            <form class="posisikanan">
              <select id="pilihkelassemester" onchange="document.location='<?php echo site_url('superkur/presensi'); ?>/'+document.getElementById('pilihkelassemester').value+'/'+document.getElementById('tahun').value+'/'+document.getElementById('bulan').value;">
                <option value="">Pilih Kelas</option>
                <?php
                foreach ($kelas_reguler_berjalan as $d){
                  ?>
                  <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                  <?php
                }?>
              </select></form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div style="overflow: auto">
                <table class="table table-bordered table-striped" style="width: 100%">
                  <thead>
                    <tr class="barishari">
                      <th>Semester</th>
                      <th class="fit">Nomor Absen</th>
                      <th class="fit">Nama Siswa</th>
                      <th class="fit">Sakit</th>
                      <th class="fit">Ijin</th>
                      <th class="fit">Absen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  for ($i=1;$i<=2;$i++) {
                    ?>
                    <tr>
                      <th class="fit" rowspan="<?php echo count($siswaperkelas)+1; ?>">Semester <?php 
                        if ($i == 1) {
                          echo "Ganjil";
                        } else {
                          echo "Genap";
                        }
                        //echo $i;
                         ?></th>
                       </tr>
                      <?php
                      $z=0; 
                      foreach ($siswaperkelas as $rowsiswa) {
                        $z++;
                        ?>
                        <tr>
                          <td><?php echo $z; ?></td>
                          <td><?php echo $rowsiswa->nama; ?></td>
                          <th><?php echo $datpresensisemester[$rowsiswa->nisn][$i]['S']; ?></th>
                          <th><?php echo $datpresensisemester[$rowsiswa->nisn][$i]['I']; ?></th>
                          <th><?php echo $datpresensisemester[$rowsiswa->nisn][$i]['A']; ?></th>
                        </tr>
                        <?php
                      }

                    }
                      ?>

                      </tbody>
                    </table>
                  </div>
                  <a class="btn btnjdwl" href="<?php echo site_url('superkur/cetak_presensisem/'.$id_kelas_reguler_berjalan.'/'.$thn.'/'.$bln); ?>">PRINT</a>
                  <!-- <button class="btn btnjdwl">PRINT</button> -->
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

<!-- Control Sidebar -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
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


   
<!-- Content Wrapper -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Presensi Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('superadmin');?>">Dashboard</a></li>
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
           <?php
           if (($this->session->userdata('jabatan') == 'Superadmin') || ($this->session->userdata('jabatan') == 'Pegawai')) {
            ?>
            <li class="active"><a href="#presensipegawai" data-toggle="tab">Kelola Presensi Pegawai</a></li>
            <?php
          }
          ?>
          <li><a href="#lihatpresensi " data-toggle="tab">Lihat Presensi</a></li>
          <li><a href="#laporanpresensibulan" data-toggle="tab">Laporan Presensi Per Bulan</a></li>
           <!-- <li><a href="#laporanpersemester" data-toggle="tab">Laporan Presensi Per Semester</a></li> -->

          <li><a href="#grafik" data-toggle="tab">Grafik Kehadiran Pegawai</a></li>

        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="presensipegawai">
            <div class="box">
              <div class="box-header">
                <form method="post" action="">
                  <?php 
                  $bln = date('m');
                  $thn = date('Y');
                  if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
                  if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                  $tgl = date('Y-m-d');
                  if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
                  ?>
                  <input type="date" name="tgl" value="<?php echo $tgl; ?>">
                 
                  <input type="submit" value="Lihat"/>
                </form>


                <br>
              </div>
              <!-- /.box-header -->
              <!-- box body presensi pegawai-->
              <div class="box-body">

                <div style="overflow: auto">
                  <form action="<?php echo site_url('superadmin/submitpresensipegawai'); ?>" method="post" accept-charset="utf-8">
                    <input type="hidden" name="bln" value="<?php echo $bln; ?>">
                    <input type="hidden" name="thn" value="<?php echo $thn; ?>">
                    <input type="hidden" name="tgl" value="<?php echo $tgl; ?>">
                    <?php
                    //print_r($datpresensi);
                    ?>
                    <table  class="table table-striped table-bordered" style="width: 100%">
                      <thead>
                        <tr class="barishari">
                          <th class="fit">No</th>
                          <th>Nama Pegawai</th>
                          <th>Presensi</th>
                           <th>Keterangan</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $j=0;
                        foreach ($datpeg->result() as $rowpeg) {
                          $j++;
                          ?>
                          <tr>
                            <td><?php echo $j; ?></td>
                            <td><?php echo $rowpeg->Nama; ?></td>
                            <td>
                             <div class="form-group">
                              <div class="radio">
                                <label class="radio-inline">
                                  <input type="radio" name="presensi_<?php echo $rowpeg->NIP; ?>" <?php  if ((@$presensipeg[$rowpeg->NIP] == "H") || (@$presensipeg[$rowpeg->NIP] == "")) { echo " checked"; } ?> value="H" >Hadir </label>
                                  <label class="radio-inline">
                                    <input type="radio"  name="presensi_<?php echo $rowpeg->NIP; ?>" <?php  if (@$presensipeg[$rowpeg->NIP] == "S") { echo " checked"; } ?> value="S" >Sakit
                                  </label>
                                  <label class="radio-inline"><input type="radio"  name="presensi_<?php echo $rowpeg->NIP; ?>" <?php  if (@$presensipeg[$rowpeg->NIP] == "I") { echo " checked"; } ?> value="I" >Ijin
                                  </label>
                                   <label class="radio-inline">
                                    <input type="radio"  name="presensi_<?php echo $rowpeg->NIP; ?>" <?php  if (@$presensipeg[$rowpeg->NIP] == "A") { echo " checked"; } ?> value="A" >Alfa
                                  </label>

                                </div>
                              </div>
                            </td>
                            <td><textarea name="presensiket_<?php echo $rowpeg->NIP; ?>" id="" cols="30" rows="1"><?php echo @$keteranganpeg[$rowpeg->NIP]; ?></textarea></td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                    <input class="btn btnjdwl" type="submit" value="Submit"/>
                  </form>
                </div>



              </div>


            </div> 
          </div>

          <div class="tab-pane" id="lihatpresensi">
            <div class="box">
              <div class="box-header">
               

                <form method="post" action="">
                  <?php 
                  $bln = date('m');
                  $thn = date('Y');
                  if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
                  if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                  $tgl = date('Y-m-d');
                  if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
                  ?>
                  <input type="date" name="tgl" value="<?php echo $tgl; ?>">
                 
                  <input type="submit" value="Lihat"/>

                   <div class="col-md-12 col-sm-12 col-xs-12" align="right">
                     <a href="<?php echo site_url('superadmin/printlihatpresensipegawai'); ?>" target="_blank" class="btnjdwl btn btn-default"><i class="fa fa-print text-red "></i>Print</a>
                  </div>
                 
                </form>



              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div style="overflow: auto">
                  <table id="example5" class="table table-bordered table-striped" style="width: 100%">
                    <thead>
                      <tr class="barishari" style="background-color: #53c68c">
                        <th class="fit">No</th>
                        <th>Nama Pegawai</th>
                        <th>Presensi</th>
                        <th>Keterangan</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $j=0;
                      foreach ($datpeg->result() as $rowpeg) {
                        $j++;
                        ?>
                        <tr>
                          <td><?php echo $j; ?></td>
                          <td><?php echo $rowpeg->Nama; ?></td>
                          <td><?php  
                          if (@$presensipeg[$rowpeg->NIP] == "H") 
                          { 
                            echo "Hadir"; 
                          } else if (@$presensipeg[$rowpeg->NIP] == "S") 
                          { 
                            echo " Sakit"; 
                          } else if (@$presensipeg[$rowpeg->NIP] == "I") 
                          { 
                            echo "Ijin"; 
                          }
                           else if (@$presensipeg[$rowpeg->NIP] == "A") 
                          { 
                            echo "Alfa"; 
                          }

                            ?></td>
                          <td><?php echo @$keteranganpeg[$rowpeg->NIP]; ?></td>

                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
             <!--    <button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button> -->
              </div>

              <!-- /.box-body -->
            </div> 
          </div>

          <!-- /.tab-pane -->
          <div class=" tab-pane" id="laporanpresensibulan">
            <div class="box">
              <div class="box-header"> 
               <form method="post" action="">
                <?php 
                $thn = date('Y');
                if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                ?>

                <select name="thn">
                  <option value="">-</option>
                  <?php
                  for ($i=2016; $i<=date('Y')+5; $i++) {
                  ?>
                  <option value="<?php echo $i; ?>" <?php if ($thn == $i) { echo " selected"; } ?>><?php echo $i; ?></option>
                  <?php
                  }
                  ?>
                  <!-- <option value="2016" <?php if ($thn == '2016') { echo " selected"; } ?>>2016</option>
                  <option value="2017" <?php if ($thn == '2017') { echo " selected"; } ?>>2017</option>
                  <option value="2018" <?php if ($thn == '2018') { echo " selected"; } ?>>2018</option>
                  <option value="2019" <?php if ($thn == '2019') { echo " selected"; } ?>>2019</option>
                  <option value="2020" <?php if ($thn == '2020') { echo " selected"; } ?>>2020</option> -->
                </select>
                <input type="submit" value="Lihat"/>


                 <div class="col-md-12 col-sm-12 col-xs-12" align="right">
                     <a href="<?php echo site_url('superadmin/printpresensipegawaibulan'); ?>" target="_blank" class="btnjdwl btn btn-default"><i class="fa fa-print text-red "></i>Print</a>
                  </div>
              </form>
              <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div style="overflow: auto">
                <table  class="table table-bordered table-striped" style="width: 100%">
                  <thead>
                    <tr class="barishari">
                      <th>Bulan</th>

                      <th class="fit">Nama Pegawai</th>
                      <th class="fit">Hadir</th>
                      <th class="fit">Sakit</th>
                      <th class="fit">Ijin</th>
                      <th class="fit">Absen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i=1;$i<=12;$i++) {
                      $j=0;
                      $tabel_datpeg = $datpeg->result();
                      foreach ($tabel_datpeg as $rowpeg) {
                        $j++;
                        ?>
                        <tr>
                          <?php 
                          if ($j == 1) {
                            ?>
                            <td class="fit" rowspan="<?php echo count($tabel_datpeg); ?>"><?php 
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
                            ?></td>
                            <?php
                          }
                          ?>
                          <td><a href="<?php echo site_url('superadmin/resumepresensipegawai/'.$rowpeg->NIP.'/'.$thn.'/'.$i); ?>"><?php echo $rowpeg->Nama; ?></a></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['H']; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['S']; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['I']; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['A']; ?></td>
                        </tr>
                        <?php
                      }

                    }
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- <button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button> -->
          </div>
          <!-- /.box-body -->
        </div> 
      </div>
      <!-- /.tab-pane -->

      <!-- /.tab-pane -->
          <div class=" tab-pane" id="laporanpersemester">
            <div class="box">
              <div class="box-header"> 
               <form method="post" action="">
                <?php 
                $thn = date('Y');
                if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                ?>

                <select name="thn">
                  <option value="">-</option>
                  <?php
                  for ($i=2016; $i<=date('Y')+5; $i++) {
                  ?>
                  <option value="<?php echo $i; ?>" <?php if ($thn == $i) { echo " selected"; } ?>><?php echo $i; ?></option>
                  <?php
                  }
                  ?>
                  <!-- <option value="2016" <?php if ($thn == '2016') { echo " selected"; } ?>>2016</option>
                  <option value="2017" <?php if ($thn == '2017') { echo " selected"; } ?>>2017</option>
                  <option value="2018" <?php if ($thn == '2018') { echo " selected"; } ?>>2018</option>
                  <option value="2019" <?php if ($thn == '2019') { echo " selected"; } ?>>2019</option>
                  <option value="2020" <?php if ($thn == '2020') { echo " selected"; } ?>>2020</option> -->
                </select>
                <input type="submit" value="Lihat"/>
              </form>
              <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div style="overflow: auto">
                <table  class="table table-bordered table-striped" style="width: 100%">
                  <thead>
                    <tr class="barishari">
                      <th>Bulan</th>

                      <th class="fit">Nama Pegawai</th>
                      <th class="fit">Hadir</th>
                      <th class="fit">Sakit</th>
                      <th class="fit">Ijin</th>
                      <th class="fit">Absen</th>
                    </tr>
                  </thead>
                   <tbody>
                <?php
                  for ($i=1;$i<=2;$i++) {
                    $j=0;
                    $tabel_datpeg = $datpeg->result();
                    foreach ($tabel_datpeg as $rowpeg) {
                      $j++;
                      ?>
                    <tr>
                      <?php 
                      if ($j == 1) {
                      ?>
                      <td class="fit" rowspan="<?php echo count($tabel_datpeg); ?>"><?php 
                        if ($i == 1) {
                          echo "Ganjil";
                        } else {
                          echo "Genap";
                        }
                        //echo $i;
                         ?></td>
                      <?php
                      }
                      ?>
                     <td><a href="<?php echo site_url('superadmin/resumepresensipegawaisemester/'.$rowpeg->NIP.'/'.$thn.'/'.$i); ?>"><?php echo $rowpeg->Nama; ?></a></td>                    
                       <td><?php echo $datpresensisemester[$rowpeg->NIP][$i]['H']; ?></td>
                      <td><?php echo $datpresensisemester[$rowpeg->NIP][$i]['S']; ?></td>
                      <td><?php echo $datpresensisemester[$rowpeg->NIP][$i]['I']; ?></td>
                      <td><?php echo $datpresensisemester[$rowpeg->NIP][$i]['A']; ?></td>
                    </tr>
                    <?php
                    }

                  }
                  ?>
                
              </tbody>
              </table>
            </div>
            <!-- <button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button> -->
          </div>
          <!-- /.box-body -->
        </div> 
      </div>
      <!-- /.tab-pane -->



      <div class="chart tab-pane" id="grafik" style="position: relative; ">
        <div class="box box-primary">
         <div class="box-header">
           <form method="post" action="">
            <?php 
            $thn = date('Y');
            if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
            ?>

            <select name="thn">
              <option value="">-</option>
              <option value="2016" <?php if ($thn == '2016') { echo " selected"; } ?>>2016</option>
              <option value="2017" <?php if ($thn == '2017') { echo " selected"; } ?>>2017</option>
              <option value="2018" <?php if ($thn == '2018') { echo " selected"; } ?>>2018</option>
              <option value="2019"  <?php if ($thn == '2019') { echo " selected"; } ?>>2019</option>
              <option value="2020"  <?php if ($thn == '2020') { echo " selected"; } ?>>2020</option>
            </select>
            <input type="submit" value="Lihat"/>
          </form>

        </div>
    <!-- <div class="box-header with-border">
      <i class="fa fa-bar-chart-o"></i>
      <h3 class="box-title" id="Perkelas" >Grafik Perkelas</h3>
    </div> -->
    <div class="box-body">
      <div id="container" style="height: 300px;"></div>
    </div>
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
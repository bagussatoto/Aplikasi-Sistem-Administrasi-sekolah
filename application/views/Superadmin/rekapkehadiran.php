
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
  </section>





  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#rekapkehadiran" data-toggle="tab">Rekap Kehadiran</a></li>
            <li><a href="#grafik" data-toggle="tab">Grafik Kehadiran Pegawai</a></li>
          </ul>
          
          <div class="tab-content">
             <div class="active tab-pane" id="rekapkehadiran">
            
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="">
            <?php 
            $thn = date('Y');
            if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
            //print_r($tahun_ajaran);
            ?>

            <!--select name="thn">
              <option value="">-</option>
              <option value="2016" <?php if ($thn == '2016') { echo " selected"; } ?>>2016</option>
              <option value="2017" <?php if ($thn == '2017') { echo " selected"; } ?>>2017</option>
              <option value="2018" <?php if ($thn == '2018') { echo " selected"; } ?>>2018</option>
              <option value="2019"  <?php if ($thn == '2019') { echo " selected"; } ?>>2019</option>
              <option value="2020"  <?php if ($thn == '2020') { echo " selected"; } ?>>2020</option>
            </select-->
            <select name="id_tahun_ajaran">
              <option value="">-</option>
              <?php
              foreach ($tahun_ajaran as $row_tahun_ajaran) {
              ?>
              <option value="<?php echo $row_tahun_ajaran->id_tahun_ajaran; ?>" <?php if (@$id_tahun_ajaran == $row_tahun_ajaran->id_tahun_ajaran) { echo " selected"; } ?>><?php echo "semester ".$row_tahun_ajaran->semester." ".$row_tahun_ajaran->tahun_ajaran; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Lihat"/>
          </form>
              <div style="overflow: auto">
                <table  class="table table-bordered table-striped" style="width: 100%">
                  <thead>
                    <tr class="barishari">
                      <th class="fit">No</th>
                      <th>Nama Pegawai</th>

                      <th class="fit">Tanggal</th>
                      <th class="fit">Presensi</th>
                      <th class="fit">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $j=0;
                      foreach ($datpresensi as $rowpresensi) {
                        $j++;
                        ?>
                        <tr>
                          <td><?php 
                          echo $j;
                            ?></td>
                          <td><?php echo $rowpresensi->Nama; ?></td>
                          <td><?php echo $rowpresensi->Tanggal_presensi; ?></td>
                          <td><?php 
                            if ($rowpresensi->Rangkuman_presensi == "H") {
                              echo "Hadir";
                            } else if ($rowpresensi->Rangkuman_presensi == "S") {
                              echo "Sakit";

                            } else if ($rowpresensi->Rangkuman_presensi == "I") {
                              echo "Ijin";

                            } else if ($rowpresensi->Rangkuman_presensi == "A") {
                              echo "Alfa";

                            }
                            ?></td>
                          <td><?php echo $rowpresensi->keterangan_presensi; ?></td>
                        </tr>
                        <?php
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

        <!-- /.tab-pane -->


          <div class="chart tab-pane" id="grafik" style="position: relative; ">
        <div class="box box-primary">
         <div class="box-header">
           <form method="post" action="">
            <?php 
            $thn = date('Y');
            if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
            //print_r($tahun_ajaran);
            ?>

            <!--select name="thn">
              <option value="">-</option>
              <option value="2016" <?php if ($thn == '2016') { echo " selected"; } ?>>2016</option>
              <option value="2017" <?php if ($thn == '2017') { echo " selected"; } ?>>2017</option>
              <option value="2018" <?php if ($thn == '2018') { echo " selected"; } ?>>2018</option>
              <option value="2019"  <?php if ($thn == '2019') { echo " selected"; } ?>>2019</option>
              <option value="2020"  <?php if ($thn == '2020') { echo " selected"; } ?>>2020</option>
            </select-->
            <select name="id_tahun_ajaran">
              <option value="">-</option>
              <?php
              foreach ($tahun_ajaran as $row_tahun_ajaran) {
              ?>
              <option value="<?php echo $row_tahun_ajaran->id_tahun_ajaran; ?>" <?php if (@$id_tahun_ajaran == $row_tahun_ajaran->id_tahun_ajaran) { echo " selected"; } ?>><?php echo "semester ".$row_tahun_ajaran->semester." ".$row_tahun_ajaran->tahun_ajaran; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Lihat"/>
          </form>

        </div>
    <!-- <div class="box-header with-border">
      <i class="fa fa-bar-chart-o"></i>
      <h3 class="box-title" id="Perkelas" >Grafik Perkelas</h3>
    </div> -->
    <div class="box-body">
      <div id="rekap" style="height: 300px;"></div>
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
<!-- /modal -->

</section>
<!-- /.content -->
</div>
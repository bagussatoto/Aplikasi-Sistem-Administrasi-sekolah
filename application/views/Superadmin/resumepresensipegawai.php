   
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
          
         
          <li class="active"><a href="#laporanpresensibulan" data-toggle="tab">Laporan Presensi Per Bulan</a></li>

          

        </ul>
         
        <div class="tab-content">
          <!-- /.tab-pane -->
          <div class="active tab-pane" id="laporanpresensibulan">
            
            <!-- /.box-header -->
            <div class="box-body">
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
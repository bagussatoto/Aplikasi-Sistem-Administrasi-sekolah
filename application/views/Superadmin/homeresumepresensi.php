   
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
          <!-- /.tab-pane -->
          <div class=" active tab-pane" id="laporanpresensibulan">
          
            <!-- /.box-header -->
            <div class="box-body">
              <div style="overflow: auto">
                <table  class="table table-bordered table-striped" style="width: 100%">
                  <thead>
                    <tr class="barishari">
                      <th>Bulan</th>
                        <?php 
                  $bln = date('m');
                  $thn = date('Y');
                  // if ($this->input->post('bln') != "") { $bln = $this->input->post('bln'); }
                  // if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                  // $tgl = date('Y-m-d');
                  // if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
                  ?>

                      <th class="fit">Nama Pegawai</th>
                      <?php if ((@$this->uri->segment(3) == "hadir") || (@$this->uri->segment(3) == "")) { ?><th class="fit">Hadir</th><?php } ?>
                      <?php if ((@$this->uri->segment(3) == "sakit") || (@$this->uri->segment(3) == "")) { ?><th class="fit">Sakit</th><?php } ?>
                      <?php if ((@$this->uri->segment(3) == "ijin") || (@$this->uri->segment(3) == "")) { ?><th class="fit">Ijin</th><?php } ?>
                      <?php if ((@$this->uri->segment(3) == "alfa") || (@$this->uri->segment(3) == "")) { ?><th class="fit">Absen</th><?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i=1;$i<=12;$i++) {
                      $j=0;
                      if ($i == $bln) {
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
                        echo " ".$thn;
                            ?></td>
                            <?php
                          }
                          ?>
                          <td><a href="<?php echo site_url('superadmin/resumepresensipegawai/'.$rowpeg->NIP.'/'.$thn.'/'.$i); ?>"><?php echo $rowpeg->Nama; ?></a></td>
                          <?php if ((@$this->uri->segment(3) == "hadir") || (@$this->uri->segment(3) == "")) { ?><td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['H']; ?></td><?php } ?>
                          <?php if ((@$this->uri->segment(3) == "sakit") || (@$this->uri->segment(3) == "")) { ?><td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['S']; ?></td><?php } ?>
                          <?php if ((@$this->uri->segment(3) == "ijin") || (@$this->uri->segment(3) == "")) { ?><td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['I']; ?></td><?php } ?>
                          <?php if ((@$this->uri->segment(3) == "alfa") || (@$this->uri->segment(3) == "")) { ?><td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['A']; ?></td><?php } ?>
                        </tr>
                        <?php
                      }
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
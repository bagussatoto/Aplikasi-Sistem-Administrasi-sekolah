<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Jadwal Tambahan<br></center>
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
                    <!-- <center><h3>Data Pokok Siswa</h3></center> -->
                   <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NIP">NISN</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nisn" required="required" class="form-control col-md-7 col-xs-12 " value="<?php echo $datasiswa->nisn;?>" readonly>
                      </div> -->
                    <div class="form-group" style=" margin-bottom: 0px" >
                    <label class="control-label col-md-3" for="first-name">Nama <span class="required"></span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama" value="<?php echo $this->session->Nama; ?>" readonly disabled>
                  </div>
                  </div>

                     <div class="form-group" style=" margin-bottom: 0px">
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
                    <input type="text" class="form-control" name="kelastam" value="<?php echo $row_siswatam->nama_kelas_tambahan; ?>" readonly disabled>
                  </div>
                  </div>

                 <div class="tab-pane" id="datajadwaltambahan">
              <div class="box">
                <!-- <div class="box-header" style="background-color:     #5c8a8a">
                  <h3 class="box-title" style="color:white">Jadwal Tambahan </h3>
                </div> -->
                <!-- /.box-header -->

                <?php
                  function tgl_indo($tanggal) {
                    $tgl = substr($tanggal, 8, 2);
                    $bln = substr($tanggal, 5, 2);
                    $thn = substr($tanggal, 0, 4);
                    if ($bln == "1") { $bulan = "Januari"; } 
                    if ($bln == "2") { $bulan = "Februari"; } 
                    if ($bln == "3") { $bulan = "Maret"; } 
                    if ($bln == "4") { $bulan = "April"; } 
                    if ($bln == "5") { $bulan = "Mei"; } 
                    if ($bln == "6") { $bulan = "Juni"; } 
                    if ($bln == "7") { $bulan = "Juli"; } 
                    if ($bln == "8") { $bulan = "Agustus"; } 
                    if ($bln == "9") { $bulan = "September"; } 
                    if ($bln == "10") { $bulan = "Oktober"; } 
                    if ($bln == "11") { $bulan = "November"; } 
                    if ($bln == "12") { $bulan = "Desember"; } 
                    return $tgl." ".$bulan." ".$thn;
                  }
                ?>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Tanggal</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Guru</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=0;
                      foreach ($tabel_jadwaltambahan as $row_jadwaltambahan) {
                        $i++; 
                        ?>
                        <tr>
                          <td class="fit"><?php echo $i; ?></td>
                          <th><?php echo tgl_indo($row_jadwaltambahan->tgl_tambahan); ?></th>
                          <th><?php echo $row_jadwaltambahan->nama_kelas_tambahan; ?></th>
                          <th><?php echo $row_jadwaltambahan->nama_mapel; ?></th>
                          <th><?php echo $row_jadwaltambahan->Nama; ?></th>
                          <th><?php echo $row_jadwaltambahan->jam_mulai; ?></th>
                          <th><?php echo $row_jadwaltambahan->jam_selesai; ?></th>
                                        
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
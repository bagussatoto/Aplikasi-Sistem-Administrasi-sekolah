 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Jadwal Piket<br></center>
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
                   <div class="form-group" style="margin-bottom: 0px">
                    <label class="control-label col-md-3" for="first-name">Nama <span class="required"></span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="nama"  value="<?php echo $this->session->Nama; ?>" readonly disabled>
                  </div>
                  </div>

                     <div class="form-group" style="margin-bottom: 0px">
                    <label class="control-label col-md-3" for="first-name">NIP <span class="required"></span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="NIP"  value="<?php echo $this->session->NIP; ?>" readonly disabled>
                  </div>
                  </div>

              <div class="tab-pane" id="jadwalpiketguru_guru">
                <div class="box">
                  
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped tabelmapel">
                      <thead>
                        
                      <th> <?php
                            foreach ($tabel_tahunajaran as $row_tahunajaran) {
                             if ($id_tahun_ajaran == $row_tahunajaran->id_tahun_ajaran) { echo $row_tahunajaran->semester." ".$row_tahunajaran->tahun_ajaran; } 
                            }
                            ?></th>
                      <tr class="barishari">
                        <th class="tengah" rowspan="2">No.</th>
                        <th >Senin</th>
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
                        for($i=1;$i<=7;$i++) {
                      ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                         <th><?php echo @$tabel_jadwalpiketguru_senin[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_jadwalpiketguru_selasa[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_jadwalpiketguru_rabu[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_jadwalpiketguru_kamis[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_jadwalpiketguru_jumat[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_jadwalpiketguru_sabtu[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_jadwalpiketguru_minggu[$i-1]->nama_panggilan; ?> </th>
                         
                      </tr>
                      <?php
                        }
                      ?>
                      </tbody>

                    </table>
                   <!--  <button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button> -->
                  </div>
                  <!-- /.box-body -->
                </div>             
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              <!-- /.tab-pane -->


                 
                <!-- /.box-body -->


                  
                  
 














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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Jadwal Mengajar<br></center>
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

                 <div class="tab-pane" id="datajadwaltambahan">
              <div class="box">
                <!-- <div class="box-header" style="background-color:     #5c8a8a">
                  <h3 class="box-title" style="color:white">Data Jadwal Mengajar </h3>
                </div> -->
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Hari</th>
                        <th>Jam Ke-</th>
                        <th>Waktu</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                    </thead>
                    <tbody>
                      <?php
                      $i=0;
                      foreach ($tabel_jadwalmapel as $row_jadwalmapel) {
                        $i++; 
                        ?>
                        <tr>
                          <td class="fit"><?php echo $i; ?></td>
                          <th><?php echo $row_jadwalmapel->hari; ?></th>
                          <th><?php echo $row_jadwalmapel->jam_ke; ?></th>
                          <th><?php echo substr($row_jadwalmapel->jam_mulai, 0, 5); ?> - <?php echo substr($row_jadwalmapel->jam_selesai, 0, 5); ?></th>
                          <th><?php echo $row_jadwalmapel->nama_kelas; ?></th>
                          <th><?php echo $row_jadwalmapel->nama; ?></th>
                          <td> 
                           <!--  <a href="#jadwalmapel" data-toggle="tab"><button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button></a> -->
                          </td>               
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
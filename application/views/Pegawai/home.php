
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/homeplugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>pegawai"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $totaluser ?></h3>

              <p>Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="<?php echo base_url();?>pegawai/homedatapegawai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totaluserpg?></h3>

              <p>Total Guru</p>
            </div>
            <div class="icon"> 
              <i class="ion" style="font-size: 70%;"> Guru</i>
            </div>
            <a href="<?php echo base_url();?>pegawai/homedataguru" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $totaluserpk ?></h3>

              <p>Total Karyawan</p>
            </div>
            <div class="icon">
              <i class="ion" style="font-size: 60%;">Karyawan</i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col --> 
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $totaluserps ?></h3>

              <p>Total Pensiun</p>
            </div>
            <div class="icon">
              <i class="ion" style="font-size: 60%;"> Pensiun</i>
            </div>
            <a href="<?php echo base_url();?>pegawai/homedatapensiun" class="small-box-footer">More info <i classs="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#grafik" data-toggle="tab">Kehadiran Pegawai</a></li>
              <li><a href="#persentase" data-toggle="tab">Donut</a></li>
              <li><a href="#usia" data-toggle="tab">Usia</a></li>
              <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
              <li><a href="#pensiun" data-toggle="tab">Pensiun</a></li>
              
              <li class="pull-left header"><i class="fa fa-bar-chart"></i>Kehadiran & Pengelompokan Pegawai </li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="grafik" style="position: relative;">
                <div class="box-body">
                  <div id="container"></div>
                </div>
              </div>

               <div class="chart tab-pane " id="persentase" style="position: relative;">
                <div class="box-body">
                  <div id="visitor"></div>
                </div>
              </div>

               <div class="chart tab-pane " id="usia" style="position: relative;">
                <div class="box-body">
                  <div id="grafikusia"></div>
                   <a href="<?php echo site_url('pegawai/grafikusia'); ?>" class="btnjdwl btn btn-default"><i class="fa fa-bar-chart-o text-red "></i> Lihat Pegawai</a>
                </div>
              </div>

               <div class="chart tab-pane " id="pendidikan" style="position: relative;">
                <div class="box-body">
                  <div id="grafikpendidikan"></div>
                  <a href="<?php echo site_url('pegawai/grafikpendidikan'); ?>" class="btnjdwl btn btn-default"><i class="fa fa-bar-chart-o text-red "></i> Lihat Pegawai</a>
                </div>
              </div>

               <div class="chart tab-pane " id="pensiun" style="position: relative;">
                <div class="box-body">
                  <div id="grafikpensiun"></div>
                  <a href="<?php echo site_url('pegawai/grafikpensiun'); ?>" class="btnjdwl btn btn-default"><i class="fa fa-bar-chart-o text-red "></i> Lihat Pegawai</a>
                </div>
              </div>
              
            </div>
          </div>

        </section>
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Kalender Akademik</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <!--The calendar -->
                <img  src="<?php echo base_url();?>assets/superadmin/image/kaldik.png" alt="User profile picture" style="width: 100%;">
              </div>
              <!-- /.box-body -->
              
            </div>
            <!-- /.box -->
            <!-- Map box -->
       <!--      <div class="box box-solid bg-light-blue-gradient">
              <div class="box-header">
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                  title="Date range">
                  <i class="fa fa-calendar"></i></button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                  data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                </div>
                

                <i class="fa fa-map-marker"></i>

                <h3 class="box-title">
                  Visitors
                </h3>
              </div>
              <div class="box-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <div class="box-footer no-border">
                <div class="row">
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-1"></div>
                    <div class="knob-label">Visitors</div>
                  </div>
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">Online</div>
                  </div>

                  <div class="col-xs-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="knob-label">Exists</div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- /.box -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="<?php echo base_url();?>assets/superadmin/home/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/superadmin/home/bower_components/morris.js/morris.min.js"></script>

<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/superadmin/home/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/superadmin/home/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/superadmin/home/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>


<!-- datepicker -->
<script src="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<script src="<?php echo base_url();?>/assets/admin/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>/assets/admin/highcharts/modules/exporting.js"></script>
<!-- FastClick -->

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/superadmin/home/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/superadmin/home/dist/js/pages/dashboard.js"></script>




 
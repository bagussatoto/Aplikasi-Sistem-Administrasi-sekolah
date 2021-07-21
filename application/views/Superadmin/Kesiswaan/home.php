
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
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $totaluserpk ?></h3>

            <p>Total Siswa</p>
          </div>
          <div class="icon">
            <i class="ion ion-man"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $totaluserpg ?></h3>


            <p>Total Guru</p>
          </div>
          <div class="icon">
            <i class="ion ion-woman"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
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
            <i class="ion ion-alert-circled"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
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
            <li class="active"><a href="#grafik" data-toggle="tab"></a></li>
            <li class="pull-left header"><i class="fa fa-bar-chart"></i>Grafik</li>
          </ul>
          <div class="tab-content no-padding">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="grafik" style="position: relative;">
              <div class="box-body">
                <div id="container"></div>
              </div>
            </div>
          
          </div>
        </div>
        </section>


     
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
     
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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



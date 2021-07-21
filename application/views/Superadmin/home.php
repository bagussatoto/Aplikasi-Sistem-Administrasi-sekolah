 <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap/dist/css/bootstrap.min.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/font-awesome/css/font-awesome.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/Ionicons/css/ionicons.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/dist/css/AdminLTE.min.css">

 

   <!-- Morris chart -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/morris.js/morris.css">
   <!-- jvectormap -->
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
        <li><a href="<?php echo base_url();?>superadmin"><i class="fa fa-dashboard"></i> Home</a></li>
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
            <a href="<?php echo base_url();?>superadmin/homedatapegawai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totaljabatan ?></sup></h3>

              <p>Pegawai Dengan Hak Akses</p>
            </div>
            <div class="icon">
              <i class="ion-android-people"></i>
            </div>
            <a href="<?php echo base_url();?>superadmin/homelihatjabatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $totaltanpajabatan ?></h3>

              <p>Pegawai Tanpa Hak Akses</p>

            </div>
            <div class="icon">
              <i class="ion-android-cancel"></i>
            </div>
            <a href="<?php echo base_url();?>superadmin/hometanpajabatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $totaluserps  ?></h3>

              <p>Total Pensiun</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <a href="<?php echo base_url();?>superadmin/homedatapensiun" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #7cb5ec; color:white">
            <div class="inner">
              <h3>
                <?php
                $blnsekarang = ltrim(date('m'), '0');
                //echo $blnsekarang;
                $totalsemua = @$datpresensitotalbulan[$blnsekarang]['H']+@$datpresensitotalbulan[$blnsekarang]['S']+@$datpresensitotalbulan[$blnsekarang]['I']+@$datpresensitotalbulan[$blnsekarang]['A']; 
                if($totalsemua == 0){
                  echo number_format(0,1)."%<br>";
                }else{
                echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['H'])/$totalsemua)*100),1)."%<br/>";
                  // echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['S'])/$totalsemua)*100),1)."%<br/>";
                }
                ?> 

              </h3>

              <p>Persentase Hadir</p>
            </div>
            <div class="icon">
              <i class="fa fa-percent"></i>
            </div>
            <a href="<?php echo base_url();?>superadmin/homeresumepresensi/hadir" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#cccccc; color:white">
            <div class="inner">
              <h3>
                <?php
                $blnsekarang = ltrim(date('m'), '0');
                //echo $blnsekarang;
                $totalsemua = @$datpresensitotalbulan[$blnsekarang]['H']+@$datpresensitotalbulan[$blnsekarang]['S']+@$datpresensitotalbulan[$blnsekarang]['I']+@$datpresensitotalbulan[$blnsekarang]['A']; 
                 if($totalsemua == 0){
                  echo number_format(0,1)."%<br>";
                }else{
                echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['S'])/$totalsemua)*100),1)."%<br/>";
                  // echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['S'])/$totalsemua)*100),1)."%<br/>";
                }
                
                ?> 

              </h3>

              <p>Persentase Sakit</p>
            </div>
            <div class="icon">
              <i class="fa fa-percent""></i>
            </div>
             <a href="<?php echo base_url();?>superadmin/homeresumepresensi/sakit" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
           </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #90ed7d; color:white">
            <div class="inner">
              <h3>
                <?php
                $blnsekarang = ltrim(date('m'), '0');
                //echo $blnsekarang;
                $totalsemua = @$datpresensitotalbulan[$blnsekarang]['H']+@$datpresensitotalbulan[$blnsekarang]['S']+@$datpresensitotalbulan[$blnsekarang]['I']+@$datpresensitotalbulan[$blnsekarang]['A']; 

               if($totalsemua == 0){
                  echo number_format(0,1)."%<br>";
                }else{
                echo number_format((((0+@$datpresensitotalbulan[$blnsekarang][''])/$totalsemua)*100),1)."%<br/>";
                  // echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['S'])/$totalsemua)*100),1)."%<br/>";
                }
                ?> 

              </h3>

              <p>Persentase Ijin</p>
            </div>
            <div class="icon">
              <i class="fa fa-percent""></i>
            </div>
           <a href="<?php echo base_url();?>superadmin/homeresumepresensi/ijin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color:   #f7a35c; color:white">
            <div class="inner">
              <h3>
                <?php
                $blnsekarang = ltrim(date('m'), '0');
                //echo $blnsekarang;
                $totalsemua = @$datpresensitotalbulan[$blnsekarang]['H']+@$datpresensitotalbulan[$blnsekarang]['S']+@$datpresensitotalbulan[$blnsekarang]['I']+@$datpresensitotalbulan[$blnsekarang]['A']; 
                 if($totalsemua == 0){
                  echo number_format(0,1)."%<br>";
                }else{
                echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['A'])/$totalsemua)*100),1)."%<br/>";
                  // echo number_format((((0+@$datpresensitotalbulan[$blnsekarang]['S'])/$totalsemua)*100),1)."%<br/>";
                }
                ?> 

              </h3>

              <p>Persentase Alfa</p>
            </div>
            <div class="icon">
              <i class="fa fa-percent""></i>
            </div>
             <a href="<?php echo base_url();?>superadmin/homeresumepresensi/alfa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                   <a href="<?php echo site_url('superadmin/grafikusia'); ?>" class="btnjdwl btn btn-default"><i class="fa fa-bar-chart-o text-red "></i> Lihat Pegawai</a>
                </div>
              </div>

               <div class="chart tab-pane " id="pendidikan" style="position: relative;">
                <div class="box-body">
                  <div id="grafikpendidikan"></div>
                  <a href="<?php echo site_url('superadmin/grafikpendidikan'); ?>" class="btnjdwl btn btn-default"><i class="fa fa-bar-chart-o text-red "></i> Lihat Pegawai</a>
                </div>
              </div>

               <div class="chart tab-pane " id="pensiun" style="position: relative;">
                <div class="box-body">
                  <div id="grafikpensiun"></div>
                  <a href="<?php echo site_url('superadmin/grafikpensiun'); ?>" class="btnjdwl btn btn-default"><i class="fa fa-bar-chart-o text-red "></i> Lihat Pegawai</a>
                </div>
              </div>
              
            </div>
          </div>

        </section>
        
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
         <!--  <div class="col-lg-3 col-md-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><span class="lstick"></span>Visit Separation</h4>
                <div id="visitor" style="height:250px; width:100%;"></div>
                <table class="table vm font-14">
                  <tr>
                    <td class="b-0">Mobile</td>
                    <td class="text-right font-medium b-0">38.5%</td>
                  </tr>
                  <tr>
                    <td>Tablet</td>
                    <td class="text-right font-medium">30.8%</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /.box -->

      </section>
    </div>
    <!-- /.row (main row) -->

  <!--     </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>assets/superadmin/home/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/superadmin/home/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/moment/min/moment.min.js"></script>
   <!--  <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    datepicker
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>assets/superadmin/home/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>/assets/admin/highcharts/highcharts.js"></script>
    <script src="<?php echo base_url();?>/assets/admin/highcharts/modules/exporting.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/superadmin/home/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/superadmin/home/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>assets/superadmin/home/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>assets/superadmin/home/dist/js/demo.js"></script>

   



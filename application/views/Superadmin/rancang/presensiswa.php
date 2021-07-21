<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi SMP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashsiswa.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b>SMP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="image/guru1.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Yuniar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="image/guru1.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body pdg">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu">
          <li class="header"></li>
      <ul class="sidebar-menu">
      <li class="treeview active">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>KBM</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i>Jadwal </a>
           <ul class="treeview-menu">
            <li ><a href="kaldiksiswa.php"><i class="fa fa-circle-o text-red"></i> Kalender akademik</a></li>
            <li ><a href="#"><i class="fa fa-circle-o text-red"></i> Mapel</a></li>
            <li ><a href="#"><i class="fa fa-circle-o text-red"></i> Jadwal tambahan</a></li>
          </ul>
        </li>
        <li class="active"><a href="presensiswa.php"><i class="fa fa-circle-o text-red"></i>Presensi</a></li>
        <li ><a href="#"><i class="fa fa-circle-o"></i> Nilai </a> 
         <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o text-red"></i>Rapor</a></li>
          <li ><a href="#"><i class="fa fa-circle-o text-red"></i>Tugas</a></li>
          <li ><a href="#"><i class="fa fa-circle-o text-red"></i>Ulangan Harian</a></li>
        </ul>
      </li>
      </ul>
<li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Non Akademik</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i>Ekstrakulikuler </a>
           <ul class="treeview-menu">
            <li ><a href="daftareks.php"><i class="fa fa-circle-o text-red"></i> Pendaftaran Ekskul</a></li>
          </ul>
        </li>
      </li>


</section>
<!-- /.sidebar -->
</aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color: navy;">Presensi Siswa SMP Yogyakarta <br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashsiswa.php">Dashboard</a></li>
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
              <li class="active"><a href="#presensisiswa" data-toggle="tab">Presensi Siswa</a></li>
              <li><a href="#laporanpresensi" data-toggle="tab">Laporan Presensi Per Bulan</a></li>
              <li><a href="#laporanpersemester" data-toggle="tab">Laporan Presensi Per Semester</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="presensisiswa">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Presensi Siswa</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    
                    <form class="posisitengah">
                      <select>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                    </form>
                    <br/><br/>
                    <div style="overflow: auto">
                      <table class="table table-bordered table-striped" style="width: auto">
                        
                    <thead>
                        <tr class="barishari">
                          <th>Nama Siswa</th>
                        </tr>
                          <tr class="">
                            <th>Yuniar Rahmawati</th>
                          </tr>
                    <div style="overflow: auto">
                      <table class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                        <tr class="barishari">

                          <th>1</th>
                          <th>2</th>
                          <th>3</th>
                          <th>4</th>
                          <th>5</th>
                          <th>6</th>
                          <th>7</th>
                          <th>8</th>
                          <th>9</th>
                          <th>10</th>
                          <th>11</th>
                          <th>12</th>
                          <th>13</th>
                          <th>14</th>
                          <th>15</th>
                          
                        </tr>
                        
                        </thead>
                        <tbody>
                        <tr>
                          
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>

                          <th>
                            H
                          </th>
                          <th></th>
                          <th></th>
                          <tr class="barishari">
                          <th>16</th>
                          <th>17</th>
                          <th>18</th>
                          <th>19</th>
                          <th>20</th>
                          <th>21</th>
                          <th>22</th>
                          <th>23</th>
                          <th>24</th>
                          <th>25</th>
                          <th>26</th>
                          <th>27</th>
                          <th>28</th>
                          <th>29</th>
                          <th>30</th>
                          </tr>

                          <th>
                            H
                          </th>
                          
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>

                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>

                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                          <th>
                            H
                          </th>
                        </tr>
                        
                        </tbody>
                      </table>
                    </div>                   

                  </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>


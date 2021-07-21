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
      <a href="dashboard.php" class="logo">
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
                <img src="image/admin.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="image/admin.png" class="img-circle" alt="User Image">

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
        
        <ul class="sidebar-menu">
          <li class="header"></li>


          
          <!-- Sidemenu Kesiswaan -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li ><a><i class="fa fa-circle-o"></i> Penerimaan Peserta Didik Baru </a>
               <ul class="treeview-menu">
                <li ><a href="ppdbujian.php"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
                <li ><a href="ppdbneg.php"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
              </ul>
            </li>
            <li ><a><i class="fa fa-circle-o"></i> Daftar Ulang </a> 
              <ul class="treeview-menu">
                <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
                <li ><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
              </ul>

            </li>
            <li ><a><i class="fa fa-circle-o"></i> Distribusi Kelas </a> 
              <ul class="treeview-menu">
                <li ><a href="distribusi.php"><i class="fa fa-circle-o text-red"></i> Kelas Reguler</a></li>
                <li ><a href="distribusi2.php"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan</a></li>
              </ul>
            </li>
            <li ><a><i class="fa fa-circle-o"></i> Mutasi Siswa </a> 
              <ul class="treeview-menu">
                <li ><a href="masuk.php"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
                <li ><a href="keluar.php"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <!-- Sidemenu Kurikulum -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kurikulum</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a><i class="fa fa-circle-o"></i> Jadwal</a>
              <ul class="treeview-menu">
                <li ><a href="mapel.php"><i class="fa fa-circle-o text-red"></i> Manajemen Mata Pelajaran</a></li>
                <li ><a href="harirentang.php"><i class="fa fa-circle-o text-red"></i> Manajemen Hari & Jam</a></li>
                <li><a href="jadwalmapel.php"><i class="fa fa-circle-o text-red"></i> Jadwal Mapel</a></li>
                <li><a href="jadwalpiketguru.php"><i class="fa fa-circle-o text-red"></i> Jadwal Piket Guru</a></li>
                <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o text-red"></i> Jadwal Tambahan</a></li>
              </ul>
            </li>


            <li><a><i class="fa fa-circle-o"></i> Penilaian</a>
             <ul class="treeview-menu">
              <li ><a href="nilaisiswa.php"><i class="fa fa-circle-o text-red"></i> Nilai Siswa</a></li>
              <li ><a href="kategorinilai.php"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
              <li ><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o text-red"></i> Jenis Nilai Akhir</a></li>
              <li><a href="deskripsinilai.php"><i class="fa fa-circle-o text-red"></i> Deskripsi Nilai</a></li>
              <li><a href="rapor.php"><i class="fa fa-circle-o text-red"></i> Rapor</a></li>
            </ul>
          </li>
        </ul>
      </li>


      <!-- Sidemenu Kepegawaian -->
      <li class="treeview active">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="Datapegawai.php"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
          <li ><a href="presensipegawai.php"><i class="fa fa-circle-o"></i>Presensi Pegawai</a></li>
          <!--   <li><a href="jadwalmengajar.php"><i class="fa fa-circle-o"></i>Jadwal Mengajar</a></li> -->
        </ul>
      </li>


      <!-- Sidemenu Non Akademik -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Non akademik</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
            <ul class="treeview-menu">
              <li><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
              <li><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
              <li><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
              <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
              <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-circle-o"></i> Konseling</a>
            <ul class="treeview-menu">
              <li ><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
              <li><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
              <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
              <li><a href="prestasi.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <br>

      <li class="header">Optional</li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle-o text-aqua"></i> <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="Gantipassword.php">Ganti Password</a></li> 
        </ul> 
      </li>  
    </ul>

  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Presensi Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
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
            <li class="active"><a href="#presensisiswa" data-toggle="tab">Presensi Pegawai</a></li>
            <li><a href="#laporanpresensi" data-toggle="tab">Laporan Presensi Per Bulan</a></li>
            <!--   <li><a href="#laporanpersemester" data-toggle="tab">Laporan Presensi Per Semester</a></li> -->
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="presensisiswa">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Presensi Pegawai</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <div style="overflow: auto">
                    <table class="table table-bordered table-striped" style="width: 100%">
                      <thead>
                        <tr class="barishari">
                          <th class="fit">No</th>
                          <th>Nama Pegawai</th>
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
                      </thead>
                      <tbody>
                        <tr>
                          <th class="fit">1</th>
                          <th>Ahmad Muzadi</th>
                          <th>
                            <select class="kodepegawai">
                             <option>H</option>
                             <option>S</option>
                             <option>I</option>
                             <option>A</option> 
                           </select>
                         </th>
                         <th>
                          <select class="kodepegawai">
                           <option>H</option>
                           <option>S</option>
                           <option>I</option>
                           <option>A</option> 
                         </select>
                       </th>
                       <th>
                        <select class="kodepegawai">
                         <option>H</option>
                         <option>S</option>
                         <option>I</option>
                         <option>A</option> 
                       </select>
                     </th>
                     <th>
                      <select class="kodepegawai">
                       <option>H</option>
                       <option>S</option>
                       <option>I</option>
                       <option>A</option> 
                     </select>
                   </th>
                   <th><select class="kodepegawai">
                     <option>H</option>
                     <option>S</option>
                     <option>I</option>
                     <option>A</option> 
                   </select>
                 </th>
                 <th>
                  <select class="kodepegawai">
                   <option>H</option>
                   <option>S</option>
                   <option>I</option>
                   <option>A</option> 
                 </select>
               </th>
               <th>
                <select class="kodepegawai">
                 <option>H</option>
                 <option>S</option>
                 <option>I</option>
                 <option>A</option> 
               </select>
             </th>
             <th>
              <select class="kodepegawai">
               <option>H</option>
               <option>S</option>
               <option>I</option>
               <option>A</option> 
             </select>
           </th>
           <th>
            <select class="kodepegawai">
             <option>H</option>
             <option>S</option>
             <option>I</option>
             <option>A</option> 
           </select>
         </th>
         <th>
          <select class="kodepegawai">
           <option>H</option>
           <option>S</option>
           <option>I</option>
           <option>A</option> 
         </select>
       </th>
       <th>
        <select class="kodepegawai">
         <option>H</option>
         <option>S</option>
         <option>I</option>
         <option>A</option> 
       </select>
     </th>
     <th>
      <select class="kodepegawai">
       <option>H</option>
       <option>S</option>
       <option>I</option>
       <option>A</option> 
     </select>
   </th>
   <th>
    <select class="kodepegawai">
     <option>H</option>
     <option>S</option>
     <option>I</option>
     <option>A</option> 
   </select>
 </th>
 <th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
</tr>
<tr>
  <th class="fit">2</th>
  <th>Ahmad Dahlan</th>
  <th>
    <select class="kodepegawai">
     <option>H</option>
     <option>S</option>
     <option>I</option>
     <option>A</option> 
   </select>
 </th>
 <th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th><select class="kodepegawai">
 <option>H</option>
 <option>S</option>
 <option>I</option>
 <option>A</option> 
</select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
</tr>
<tr>
  <th class="fit">3</th>
  <th>Ryan Restyawan</th>
  <th>
    <select class="kodepegawai">
     <option>H</option>
     <option>S</option>
     <option>I</option>
     <option>A</option> 
   </select>
 </th>
 <th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th><select class="kodepegawai">
 <option>H</option>
 <option>S</option>
 <option>I</option>
 <option>A</option> 
</select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
<th>
  <select class="kodepegawai">
   <option>H</option>
   <option>S</option>
   <option>I</option>
   <option>A</option> 
 </select>
</th>
</tr>
</tbody>
</table>
</div>
<button class=" btn btnjdwl">Submit</button>


</div>

<div class="box-body">
  <div class="box-header">
    <h3 class="box-title center" style="margin-left: 35%">Presensi Pegawai Bulan Januari</h3>
  </div>
  <table class="table table-bordered table-striped" style="width: 100%">
    <thead>
      <tr class="barishari">
        <th class="fit">No</th>
        <th>Nama Pegawai</th>
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
        <th>16</th>
        <th>17</th>
        <th>18</th>
        <th>19</th>
        <th>20</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="fit">1</th>
        <th>Ahmad Muzadi</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>I</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>A</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <th class="fit">2</th>
        <th>Ahmad Dahlan</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>I</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <th class="fit">3</th>
        <th>Ryan Restyawan</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>S</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
        <th>H</th>
      </tr>
    </tbody>
  </table>

</div>

<!-- /.box-body -->
</div> 
</div>

<!-- /.tab-pane -->
<div class=" tab-pane" id="laporanpresensi">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Laporan Presensi Pegawai Per Bulan</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div style="overflow: auto">
        <table class="table table-bordered table-striped" style="width: 100%">
          <thead>
            <tr class="barishari">
              <th>Bulan</th>
              
              <th class="fit">Nama Siswa</th>
              <th class="fit">Sakit</th>
              <th class="fit">Ijin</th>
              <th class="fit">Absen</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="fit" rowspan="3">Januari</th>
              
              <th>Ahmad Muzadi</th>
              <th>0</th>
              <th>0</th>
              <th>1</th>
            </tr>
            <tr>
              
              <th>Ahmad Dahlan</th>
              <th>1</th>
              <th>0</th>
              <th>2</th>
            </tr>
            <tr>
              
              <th>Ryan Restyawan</th>
              <th>1</th>
              <th>0</th>
              <th>0</th>
            </tr>
            <tr>
              <th class="fit" rowspan="3">Februari</th>
              
              <th>Ahmad Muzadi</th>
              <th>2</th>
              <th>0</th>
              <th>0</th>
            </tr>
            <tr>
              
              <th>Ahmad Dahlan</th>
              <th>1</th>
              <th>0</th>
              <th>0</th>
            </tr>
            <tr>
              
              <th>Ryan Restyawan</th>
              <th>0</th>
              <th>1</th>
              <th>0</th>
            </tr>
          </tbody>
        </table>
      </div>
      <button class="btn btnjdwl">PRINT</button>
    </div>
    <!-- /.box-body -->
  </div> 
</div>
<!-- /.tab-pane -->
<div class="tab-pane" id="laporanpersemester">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Laporan Presensi Pegawai Per Semester</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div style="overflow: auto">
        <table class="table table-bordered table-striped" style="width: 100%">
          <thead>
            <tr class="barishari">
              <th>Semester</th>
              
              <th class="fit">Nama Siswa</th>
              <th class="fit">Sakit</th>
              <th class="fit">Ijin</th>
              <th class="fit">Absen</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="fit" rowspan="3">Semester 1</th>
              
              <th>Ahmad Muzadi</th>
              <th>1</th>
              <th>2</th>
              <th>2</th>
            </tr>
            <tr>
              
              <th>Ahmad Dahlan</th>
              <th>1</th>
              <th>1</th>
              <th>2</th>
            </tr>
            <tr>
              
              <th>Ryan Restyawan</th>
              <th>0</th>
              <th>4</th>
              <th>1</th>
            </tr>
            <tr>
              <th class="fit" rowspan="3">Semester 2</th>
              
              <th>Ahmad Muzadi</th>
              <th>2</th>
              <th>1</th>
              <th>2</th>
            </tr>
            <tr>
              
              <th>Ahmad Dahlan</th>
              <th>1</th>
              <th>1</th>
              <th>3</th>
            </tr>
            <tr>
              
              <th>Ryan Restyawan</th>
              <th>0</th>
              <th>1</th>
              <th>3</th>
            </tr>
            
          </tbody>
        </table>
      </div>
      <button class="btn btnjdwl">PRINT</button>
    </div>
    <!-- /.box-body -->
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

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Allow mail redirect
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Other sets of options are available
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Expose author name in posts
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Allow the user to show his name in blog posts
          </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Show me as online
            <input type="checkbox" class="pull-right" checked>
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Turn off notifications
            <input type="checkbox" class="pull-right">
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Delete chat history
            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
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
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
      var max_fields      = 50; //maximum input boxes allowed
      var wrapper         = $(".bigbox-mapel"); //Fields wrapper
      var add_button      = $("#tambahmapel"); //Add button ID
      var box_mapel       = `<div class="box-mapel">
      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Nama Mata Pelajaran">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">KKM</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="KKM">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Jam Belajar</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Jam Belajar">
      </div>
      </div>
      <i class="fa fa-minus-circle text-red tambahmapel"></i><a style="color:red" href="#" class="remove_field"> Hapus mapel</a>

      </div>`;

      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append(box_mapel); //add input box
            }
          });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
  </script>
  </html>


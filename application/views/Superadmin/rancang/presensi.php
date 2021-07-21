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
  <link rel="stylesheet" href="noven_dist/AdminLTE.min.css">
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
    <a href="index2.html" class="logo">
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
      <!-- Sidebar user panel -->
      <!-- Sidebar user panel -->

        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->


        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
 <ul class="sidebar-menu">
          <li class="header"></li><!-- Sidemenu Kesiswaan -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i>Penerimaan Peserta Didik Baru</a>
           <ul class="treeview-menu">
            <li ><a href="ppdbujian.php"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
            <li ><a href="ppdbneg.php"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
          </ul>
        </li>

        <li ><a href="#"><i class="fa fa-circle-o"></i>Daftar  Ulang</a>
         <ul class="treeview-menu">
          <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
          <li ><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
        </ul>
      </li>

      <li ><a href="#"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
        <ul class="treeview-menu">
          <li ><a href="distribusi.php"><i class="fa fa-circle-o text-red"></i>Kelas Reguler</a></li>
          <li ><a href="distribusi2.php"><i class="fa fa-circle-o text-red"></i>Kelas Tambahan</a></li>
        </ul>
      </li>

      <li ><a href="#"><i class="fa fa-circle-o"></i> Mutasi </a>
      <ul class="treeview-menu">
          <li ><a href="masuk.php"><i class="fa fa-circle-o text-red"></i>Mutasi Masuk</a></li>
          <li ><a href="keluar.php"><i class="fa fa-circle-o text-red"></i>Mutasi Keluar</a></li>
        </ul>
      </li>
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
      <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Penjadwalan</a>
        <ul class="treeview-menu">
          <li><a href="mapel.php"><i class="fa fa-circle-o"></i> Manajemen Mata Pelajaran</a></li>
          <li><a href="harirentang.php"><i class="fa fa-circle-o"></i> Manajemen Hari & Jam</a></li>
          <li><a href="jadwalmapel.php"><i class="fa fa-circle-o"></i> Jadwal Mapel</a></li>
          <li><a href="jadwalguru.php"><i class="fa fa-circle-o"></i> Jadwal Piket Guru</a></li>
          <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o"></i> Jadwal Tambahan</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Penilaian Siswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="nilaisiswa.php"><i class="fa fa-circle-o"></i> Nilai Siswa</a></li>
          <li><a href="kategorinilai.php"><i class="fa fa-circle-o"></i> Kategori Nilai</a></li>
          <li><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o"></i> Jenis Nilai Akhir</a></li>
          <li><a href="deskripsinilai.php"><i class="fa fa-circle-o"></i> Deskripsi Nilai</a></li>
          <li><a href="rapor.php"><i class="fa fa-circle-o"></i> Rapor</a></li>
        </ul>
      </li>
    </ul>
  </li>

<!-- Sidemenu Kepegawaian -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li ><a href="Datapegawai.php"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
      <li ><a href="presensipegawai.php"><i class="fa fa-circle-o"></i> Presensi Pegawai</a></li>
      <li><a href="jadwalmengajar.php"><i class="fa fa-circle-o"></i>Jadwal Mengajar</a></li>
    </ul>
  </li>

<!-- Sidemenu Non Akademik -->
  <li class="treeview active">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i> Pendaftaran</a></li>
            <li><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li class="active"><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
        <ul class="treeview-menu">
          <li><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
          <li><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
          <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
          <li><a href="prestasi.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
        </ul>
        </li>
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
        <center style="color:navy;">Presensi Ekstrakurikuler SMP Yogyakarta<br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">            
            <!-- Left col -->
            <section class="col-md-12 ">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-left">
                  <li class="active"><a href="#tab3" data-toggle="tab">Presensi Pembimbing</a></li>
                  <li><a href="#tab1" data-toggle="tab">Presensi Siswa</a></li>
                  <li><a href="#tab2" data-toggle="tab">Laporan Presensi Persemester</a></li>
                  <li><a href="#tab4" data-toggle="tab">Laporan Presensi Pembimbing</a></li>
                </ul>
                <div class="tab-content no-padding">
                  <div class="chart tab-pane" id="tab1" style="position: relative; ">
                      
                      <div class="box" style="min-height:300px;">
                        <div class="box-body">
                          <!-- <center><h4>Presensi Siswa</h4></center> -->
                          <select name="kelas" id="kelas">
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Foodball">Foodball</option>
                          </select>
                          <select name="kelas" id="kelas">
                            <option value="Pertemuan">Pertemuan 1</option>
                            <option value="Pertemuan">Pertemuan 2</option>
                            <option value="Pertemuan">Pertemuan 3</option>
                            <option value="Pertemuan">Pertemuan 4</option>
                          </select> 
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Kelas</th>
                              <th>Nama Siswa</th>
                              <th>Persensi</th>
                              <th>Aksi</th> 
                            </tr> 
                            <tr>
                              <td>1.</td>
                              <td>7A</td> 
                              <td>Shella Afiya</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td>7B</td> 
                              <td>Kharunnisa Alkatihi</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td> 
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td>8A</td> 
                              <td>Aziz Alfatih</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td> 
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td>8F</td> 
                              <td>Iqbal Ramadhan</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td> 
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                          </table>
                        <div class="box-footer clearfix" style="float:left;">
                        <a href="#" class="btn btn-primary">Submit</a>
                        
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="box" style="min-height:300px;">
                        <div class="box-body">
                          <!-- <center><h4>Rekap Presensi Siswa</h4></center> -->
                          <select name="kelas" id="kelas">
                            <option value="Bulu Tangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Food ball">Foodball</option>
                          </select>
                          <select>
                            <option value="Pertemuan">Pertemuan 1</option>
                            <option value="Pertemuan">Pertemuan 2</option>
                            <option value="Pertemuan">Pertemuan 3</option>
                            <option value="Pertemuan">Pertemuan 4</option> 
                          </select>
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Kelas</th>
                              <th>Nama Siswa</th>
                              <th>Presensi</th> 
                            </tr> 
                            <tr>
                              <td>1.</td>
                              <td>7A</td> 
                              <td>Shella Afiya</td>
                              <td>H</td>  
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td>7B</td> 
                              <td>Kharunnisa Alkatihi</td>
                              <td>H</td>  
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td>8A</td> 
                              <td>Aziz Alfatih</td>
                              <td>I</td>  
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td>8F</td> 
                              <td>Iqbal Ramadhan</td>
                              <td>A</td>  
                            </tr> 
                          </table>
                       
                        <div class="box-footer clearfix" style="float:left">
                          <a href="#" class="btn btn-primary">Kembali</a>
                          <a href="#" class="btn btn-primary">Next</a>
                        </div>

                         <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
                    </div>
                      </div>
                  </div>
                  <div class="chart tab-pane" id="tab2" style="position: relative; ">
                      
                       <div class="box">
                        <div class="box-body">
                        <!-- <center><h4>Laporan Presensi Ekstrakurikuler Siswa Persemester</h4></center> -->
                          <select name="semester" id="semester">
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                          </select> 
                          <select name="eks12" id="eks12">
                            <option value="Olimpiade IPA">Olimpiade IPA</option>
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Foodball">Foodball</option>
                          </select> <br/>
                        <br/>
                        <table class="table table-bordered">
                            <tr>
                              <th rowspan="2">No</th>
                              <th rowspan="2">Kelas</th>
                              <th rowspan="2">Nama Siswa</th>
                              <th colspan="10"><center>10 Pertemuan</center></th>
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7A</td>
                                <td>Shella Alazta</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>7B</td>
                                <td>Amanda Sari</td>
                                <td>H</td>
                                <td>H</td>
                                <td>A</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>I</td>
                            </tr>
                            
                            
                            <tr>
                                <td>3</td>
                                <td>7C</td>
                                <td>Aziz Alfatih</td>
                                <td>H</td>
                                <td>S</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>I</td>
                            </tr>
                            
                            
                            <tr>
                                <td>4</td>
                                <td>7D</td>
                                <td>Iqbal Ramadhan</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>A</td>
                                <td>S</td>
                                <td>H</td>
                            </tr>
                            
                            
                            <tr>
                                <td>5</td>
                                <td>7E</td>
                                <td>Muhammad Haykal</td>
                                <td>A</td>
                                <td>S</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">Total Kehadiran</td>
                                <td>4</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>4</td>
                                <td>4</td>
                                <td>3</td>
                            </tr>
                          </table>
                        </div>

                        <div class="box-footer clearfix" style="float:left;">
                          <a href="#" class="btn btn-primary">Print</a>
                        </div>

                        <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>

                      </div>
                      
                  </div>
                    
                  <div class="chart tab-pane active" id="tab3" style="position: relative; ">
                      
                       <div class="box" style="min-height:500px;">
                        <div class="box-body">
                        <!-- <center><h4>Presensi Pembimbing</h4></center> -->
                          <select name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select> 
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th style="width: 200px;"><center>Tanggal Pelaksanaan</center></th>
                              <th>Pembimbing</th>
                              <th>Jabatan</th>
                              <th>Aksi</th>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pembina</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pelatih</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pelatih</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pelatih</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr>
                          </table>
                        </div>

                        <div class="box-footer clearfix" style="float:left">
                          <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                      </div>
                      
                      
                      <div class="box">
                        <div class="box-body">
                        <center><h4>Presensi Pembimbing Perbulan</h4></center>
                        <select name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select> 
                          <br/><br/>
                        <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th style="width: 200px;"><center>Tanggal Pelaksanaan</center></th>
                              <th>Pembimbing</th>
                              <th>Jabatan</th>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>01/02/2017</td>
                              <td>Kurniawan <br/> Hartanto <br/> Tomi</td> 
                              <td>Pembina</td>  
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td>01/03/2017</td>
                              <td>Yusuf <br/> Hartanto <br/> Tomi</td> 
                              <td>Pelatih</td>  
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td>01/06/2017</td>
                              <td>Ibnu <br/> Hartanto <br/> Tomi</td> 
                              <td>Pelatih</td>  
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td>01/10/2017</td>
                              <td>Khansa Rosdiana <br/> Hartanto <br/> Tomi</td> 
                              <td>Pelatih</td>  
                            </tr> 
                            
                          </table>
                        </div>
                        <div class="box-footer clearfix" style="float:left">
                          <a href="#" class="btn btn-primary">Kembali</a>
                          <a href="#" class="btn btn-primary">Next</a>
                        </div>

                         <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
             </div>   
           </div>
                    
                  
                  <div class="chart tab-pane" id="tab4" style="position: relative; ">
                      
                       <div class="box">
                        <div class="box-body">
                            <!-- <center><h4>Laporan Presensi Pembimbing Perbulan</h4></center> -->
                        <select>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                        </select>
                        <select name="eks12" id="eks12">
                            <option value="Olimpiade IPA">Olimpiade IPA</option>
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Foodball">Foodball</option>
                          </select>
                        <select name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select><br/><br>
                        <table class="table table-bordered">
                            <tr>
                              <th rowspan="2">Nama Pembimbing</th>
                              <th rowspan="2">Jabatan</th>
                              <th colspan="4"><center>Januari</center></th>
                              <th rowspan="2">Jumlah Kehadiran</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                            </tr>
                            <tr>
                              <td>Hartanto</td>
                              <td>Pelatih</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>4</td>
                            </tr> 
                            <tr>
                              <td>Tomi</td>
                              <td>Pelatih</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>4</td>
                            </tr> 
                            <tr>
                              <td>Ibnu Kurniawan</td>
                              <td>Pelatih</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>4</td>
                            </tr> 
                          </table>
                        </div>

                        <div class="box-footer clearfix" style="float:left;">
                          <a href="#" class="btn btn-primary">Print</a>
                        </div>

                        <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                          <li><a href="#">&laquo;</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">&raquo;</a></li>
                      </ul>
                  </div>
                      </div>    
                  </div>
                </div>
              </div>
            </section>
        </div>

        
    </section>
    <!-- /.content -->
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
<script>
  $(function () {
    // $("#example1").DataTable();
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
</html>


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
          <li class="header"></li>

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

  <li class="active treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i> Pendaftaran</a></li>
            <li><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li class="active treeview"><a href="#"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
        <ul class="treeview-menu">
          <li class="active"><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
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
        <center style="color:navy;">Keterlambatan Siswa SMP Yogyakarta<br></center>
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
            <section class="col-lg-12 ">
                            
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-left">
                      <li class="active"><a href="Keterlambatan.html">Keterlambatan Siswa</a></li>
                      <li>
                          <a href="grafik.php" class="dropdown-toggle" data-toggle="dropdown">Grafik</a>
                          <ul class="dropdown-menu">
                              <li><a tabindex="-1" href="grafik.php#Perkelas">Perkelas</a></li>
                              <li><a tabindex="-1" href="grafik.php#Mingguan">Mingguan</a></li>
                              <li><a tabindex="-1" href="grafik.php#Bulanan">Bulanan</a></li>
                              <li><a tabindex="-1" href="grafik.php#Tahunan">Tahunan</a></li>
                          </ul>
                     </li>
                    </ul>
                <div class="tab-content no-padding">
                <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                <div class="box">
                <div class="box-body">
                <h4 class="box-title">Form Siswa Terlambat</h4>
                </div>
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Kelas</label>
                      <select name="kelas">
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="7C">7C</option>
                        <option value="7D">7D</option>
                        <option value="7E">7E</option>
                        <option value="7F">7F</option>
                        <option value="8A">8A</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text"name="nama_lengkap" required="required">
                    </div>

                   <div class="form-group">
                      <label>Tanggal Terlambat</label> 
                      <input type="date" name="tgl"/>
                    </div>
                      
                      <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="keterangan">
                      </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
                    <div class="tab-content no-padding">
                      <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                        <div class="box">
                            <div class="box-body">
                                <center><h4>Data Keterlambatan siswa</h4></center>
                            <select name="semester">
                                <option value="semester 1">Semester 1</option>  
                                <option value="semester 2">Semester 2</option>    
                            </select>
                            <select name="tahun">
                                <option value="2016/2017">Tahun 2016/2017</option>  
                                <option value="2017/2018">Tahun 2017/2018</option>    
                            </select>
                            <br/><br/>
                            <table class="table table-bordered">
                                <tr>
                                  <th>Semester</th>
                                  <th>Jumlah Siswa</th>
                                  <th>Jumlah Terlambat</th>
                                </tr>
                                <tr>
                                  <td> Semester 1</td>
                                  <td>
                                      <a data-toggle="modal" data-target="#myModal">7 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">10 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">5 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">9 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">3 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">20 Siswa</a><br/>  
                                  </td>
                                  <td>
                                      3 Kali<br/>
                                      6 Kali<br/>
                                      9 Kali<br/>
                                      6 Kali<br/>
                                      10 Kali<br/>
                                      1 Kali<br/>  
                                  </td>
                                </tr>
                              </table>
                            </div>

                           </div>
                         </div>            
                     </section>
                   </div>
    </section>
    <!-- /.content -->]
    
    <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Detail Keterlambatan</h4>
              </div>
              <div class="modal-body">
                <select name="kelas">
                    <option value="Kelas 7">Kelas 7</option>  
                    <option value="Kelas 8">Kelas 8</option>
                    <option value="Kelas 9">Kelas 9</option>
                  </select>
                <select name="tahun">
                    <option value="2017">2017</option>  
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                  </select>
                <select name="bulan">
                    <option value="Januari">Januari</option>  
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>  
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>  
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>  
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>  
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>  
                    <option value="Desember">Desember</option>    
                </select>
                <br/><br/>
                <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Tgl Terlambat</th>
                      <th>Jumlah Terlambat</th>
                      <th>Keterangan</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Shella Afiya</td>
                      <td>05/01/17 </br> 08/01/17 </br> 18/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Peringatan</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Putri Erika</td>
                      <td>07/01/17 </br> 10/01/17 </br> 15/01/17 </td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Peringatan</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Syarifah Kayra</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>4</td>
                      <td>Dika Yuriza</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>5</td>
                      <td>Muhammad Reyhan</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>6</td>
                      <td>Aldi Fairuz</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>7</td>
                      <td>Amanda Sari</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
              </div>
            </div>
          </div>
        </div>
      </div>
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


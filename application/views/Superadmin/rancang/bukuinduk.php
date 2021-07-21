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
    

    <!--       INI BUKA DARI MENU      -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        
        <ul class="sidebar-menu">
          <li class="header">KESISWAAN</li>

      <li class="treeview active">
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
      <li class="active"><a href="bukuinduk.php"><i class="fa fa-circle-o"></i> Buku Induk </a>
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
    <li ><a href="#"><i class="fa fa-circle-o"></i> Penjadwalan</a>
      <ul class="treeview-menu">
        <li ><a href="mapel.php"><i class="fa fa-circle-o text-red"></i> Manajemen Mata Pelajaran</a></li>
        <li ><a href="harirentang.php"><i class="fa fa-circle-o text-red"></i> Manajemen Hari & Jam</a></li>
        <li ><a href="jadwalmapel.php"><i class="fa fa-circle-o text-red"></i> Jadwal Mata Pelajaran</a></li>
        <li><a href="jadwalpiketguru.php"><i class="fa fa-circle-o text-red"></i> Jadwal Piket Guru</a></li>
        <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o text-red"></i> Jadwal Tambahan</a></li>
      </ul>
    </li>

    <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a></li>
  <ul class="treeview-menu">
       <li ><a href="nilaisiswa.php"><i class="fa fa-circle-o text-red"></i> Nilai Siswa</a></li>
        <li ><a href="kategorinilai.php"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
        <li ><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o text-red"></i> Jenis Nilai Akhir</a></li>
        <li><a href="deskripsinilai.php"><i class="fa fa-circle-o text-red"></i> Deskripsi Nilai</a></li>
        <li><a href="rapor.php"><i class="fa fa-circle-o text-red"></i> Rapor</a></li>
      </ul>
</li>
</ul>

<li class="treeview">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li ><a href="datapegawai.php"><i class="fa fa-circle-o"></i>Data Pegawai</a>
  </li>

  <li ><a href="presensipegawai.php"><i class="fa fa-circle-o"></i> Presensi Pegawai</a></li>
  <li><a href="jadwalmengajar.php"><i class="fa fa-circle-o"></i>Jadwal Mengajar</a></li>

</ul>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Non akademik</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Ekstrakulikuler</a>
        <ul class="treeview-menu">
        <li ><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i> Pendaftaran</a></li>
        <li ><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstra Kulikuler</a></li>
        <li ><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
        <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
        <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
      </ul>
    </li>
    <li><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
    <ul class="treeview-menu">
        <li ><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan dan jam</a></li>
        <li ><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
        <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i>Pelangggaran</a></li>
        <li><a href="prestasi.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
      </ul></li>

  </ul>
</li>  
</ul>
</section>
<!-- /.sidebar -->
</aside>

<!--       INI TUTUP DARI MENU      -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Buku Induk Siswa<br></center>
      <br>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a href="dashboard.php">Dashboard</li>
    </ol>
  </section>
  </a>
  </li>
  </ol>
  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <!-- Main row -->
    

      <!-- /.col -->
      <div class="col-md-12">
        <div class="nav-tabs-custom">
       
<!-- page content -->
          
                  <!-- end x tittle -->
                    
                    <div class="row">
                    <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Data yang ingin dicari: <input type="search"> <button type="submit">Cari</button>
                              </label>
                            </div>
                          </div>
                          </div>

                          <br>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="dataTables_length" id="example1_length">
                                <label>Menampilkan hasil pencarian : 2013 <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                  <option value="100">Semua</option>
                                </select> 
                              </label>
                            </div>
                          </div>
                          <br>
                          
                        </div>
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 5%">Tahun</th>
                          <th style="width: 5%">NISN</th>
                          <th style="width: 25%">Nama</th>
                          <th style="width: 15%">Tanggal Lahir</th>
                          <th style="width: 35%">Alamat</th>
                          <th style="width: 5%">Status</th>
                          <th style="width: 5%"></th>
                          <th style="width: 5%"></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"></i> Edit </a>
                          </td>
                        </tr>
                         <tr>
                          <td>2013</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>01 Februari 2000</td>
                          <td>Jalan Kaliurang KM XX Gang Blabla Nomor 98, Ngaglik, Sleman</td>
                          <td>Aktif</td>
                          <td>
                             <a href="lihatinduk.php" class="btn btn-info btn-xs""><i class="fa fa-trash-o"></i> Lihat </a>
                          </td>
                          <td>
                            <a href="editinduk.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Edit </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                      

                        
                        
                    </div>
              </div>


      <!-- end of berkas -->
      <!-- end of berkas -->
      
      <!-- end of profil -->
          </div>
            <!-- end container main -->
      </div>
  
 <!-- end container body-->



       
<!-- /.content-wrapper -->

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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
</html>


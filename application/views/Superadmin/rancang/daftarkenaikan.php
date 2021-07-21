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

        <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Daftar  Ulang</a>
         <ul class="treeview-menu">
          <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
          <li class="active"><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
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
      <center style="color:navy;">Daftar Ulang Peserta Didik Baru<br></center>
      <center><small>Tahun Ajaran 2016-2017</small></center>
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
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">
        <div class="nav-tabs-custom">
         

       
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                   
                  </div> 
                  <!-- end x tittle -->
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Formulir Pendataan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Siswa Daftar Ulang</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                           
                    <br>

                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                      <div class="form-group">

                      <h4 class="box-title"><center>Formulir Daftar Ulang Kenaikan Kelas</center></h4>
                  
<br>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Fromulir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Atribut Formulir <span class="required">*</span>
                        </label> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <ul class="to_do">
                          <li>
                            <p><h3><b>Data Pribadi Siswa</b></h3></p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nama Lengkap</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Jenis Kelamin</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> NIS</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Alamat</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> RT</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> RW</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Domisili</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nama Dusun</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Desa/Kelurahan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Kecamatan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Kode Pos</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tempat Tinggal</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nomor Telepon</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nomor HP</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> E-mail</p>
                          </li>
                          <li>
                            <p><h3><b>Data Ayah Kandung</b></h3></p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nama</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Gelar Depan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Gelar Belakang</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tempat Lahir</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tanggal Lahir</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Agama</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Pendidikan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Pekerjaan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Penghasilan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Berkebutuhan Khusus</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nomor Telepon/ HP</p>
                          </li>
                          <li>
                            <p><h3><b>Data Ibu Kandung</b></h3></p>
                          </li>
                           <li>
                            <p>
                              <input type="checkbox" class="flat"> Nama</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Gelar Depan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Gelar Belakang</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tempat Lahir</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tanggal Lahir</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Agama</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Pendidikan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Pekerjaan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Penghasilan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Berkebutuhan Khusus</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nomor Telepon/ HP</p>
                          </li>
                          <li>
                            <p><h3><b>Data Wali</b></h3></p>
                          </li>
                                                  <li>
                            <p>
                              <input type="checkbox" class="flat"> Nama</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Gelar Depan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Gelar Belakang</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tempat Lahir</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Tanggal Lahir</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Agama</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Pendidikan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Pekerjaan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Penghasilan</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Berkebutuhan Khusus</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Nomor Telepon/ HP</p>
                          </li>
                          <li>
                          
                          <li>
                            <h3>Berkas Daftar Ulang</h3>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li><li>
                            <p>
                              <input type="checkbox" class="flat"> Berkas</p>
                          </li>
                        </ul>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                        </div>
                        <!-- end tab 1 -->
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div class="row"><h4 class="box-title"><center>Siswa Yang Telah Daftar Ulang Kenaikan Kelas</center></h4>
                  
<br>
                            <div class="col-sm-6">


                              <div class="dataTables_length" id="example1_length">
                                <label>Urutkan Berdasarkan: <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option value="25">NISN</option>
                                  <option value="50">Nama</option>
                                  <option value="100">Status</option>
                                </select> 
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                            <br>
                            <br>
                              <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                              </label>
                            </div>
                          </div>
                        </div>
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                        <th style="width: 10%">Nomor</th>
                          <th style="width: 10%">NISN</th>
                          <th style="width: 20%">Nama</th>
                          <th style="width: 10%">Berkas</th>
                          <th style="width: 10%">Status</th>
                          <th style="width: 10%"></th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td>1</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro Fatimatus Zuhro</td>
                          <br /></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Lengkap</button>
                          </td>
                        </tr>
                        <tr>
                        <td>2</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-xs">Belum lengkap</button>
                          </td>
                        </tr>
                        <tr>
                        <td>3</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Lengkap</button>
                          </td>
                        </tr>
                        <tr>
                        <td>4</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro Fatimatus Zuhro</td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Lengkap</button>
                          </td>
                        </tr>
                        <tr>
                        <td>5</td>
                          <td>12523034</td>
                          <td>Fatimatus Zuhro</td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Lengkap</button>
                          </td>
                        </tr>
                        <tr>
                        <td>6</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-xs">Belum lengkap</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                        </div>
                        
                        <!-- end tab 2 -->
                      </div>
                    </div>
              </div>
            <!-- role main -->
          
      <div class="modal fade bs-example-modal-lg" id="berkas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Daftar Berkas Daftar Ulang</h4>
            </div>
            <div class="modal-body">
              <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="#" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Pilih Berkas yang Sudah Dilengkapi Siswa:</label>
                          <div class="col-sm-10">
                            <ul class="titik">
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                            </ul>                      
                          </div>
                      </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary button-form button-update-barang">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- en of berkas -->
          </div>
            <!-- end container main -->
      </div>
            <!-- end container body-->


       
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


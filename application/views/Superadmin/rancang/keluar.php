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
      
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">Distribusi Kelas</li>

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
          <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i> Peserta Didik Baru</a></li>
          <li ><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i> Kenaikan Kelas</a></li>
        </ul>
      </li>
          <li ><a href="#"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
          <ul class="treeview-menu">
          <li ><a href="distribusi.php"><i class="fa fa-circle-o text-red"></i> Kelas Reguler </a></li>
          <li ><a href="distribusi2.php"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan </a></li>
                    <li ><a href="klinikun.html"><i class="fa fa-circle-o text-red"></i> Klinik UN </a></li>
          </ul>
          <li ><a href="#"><i class="fa fa-circle-o"></i> Mutasi Siswa </a>
          <ul class="treeview-menu">
          <li ><a href="masuk.php"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
          <li ><a href="keluar.php"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
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
          <li ><a href="#"><i class="fa fa-circle-o"></i> Jadwal </a>
        <ul class="treeview-menu">
          <li><a href="mapel.php"><i class="fa fa-circle-o"></i> Manajemen Mata Pelajaran</a></li>
          <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Manajemen Hari & Jam</a></li>
          <li><a href="jadwalmapel.php"><i class="fa fa-circle-o"></i> Jadwal Mapel</a></li>
          <li><a href="jadwalguru.php"><i class="fa fa-circle-o"></i> Jadwal Piket Guru</a></li>
          <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o"></i> Jadwal Tambahan</a></li>
        </ul>
          </li>
          
          <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a></li>
        <ul class="treeview-menu">
          <li><a href="nilaisiswa.php"><i class="fa fa-circle-o"></i> Nilai Siswa</a></li>
          <li ><a href="kategorinilai.php"><i class="fa fa-circle-o"></i> Kategori Nilai</a></li>
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
       
      <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li class="active"><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
            <li><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
        <ul class="treeview-menu">
          <li ><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
          <li ><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
          <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
          <li><a href="prestasi.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
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
        <center style="color:grey;">Mutasi Siswa Keluar<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
    <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" >Surat Pengajuan</a></li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pendaftar</a></li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pencatatan</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">

              <div class="tab-pane" id="lihatpengumuman">
                                <a href="#dokumen" data-toggle="tab"><button class="btnback"><i class="fa fa-chevron-left"></i></button></a>
                                <div class="box-header jarakbox">
                                <center><embed src="dokumen/surat.pdf" width="1000" height="1000"> </embed></center>
                                </div>
                              </div>
                        <div class="tab-pane" id="dokumen">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="dataTables_length" id="example1_length">
                                <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                              </label>
                            </div>
                          </div>
                        </div>
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 5%">NIS</th>
                          <th style="width: 10%">Nama Siswa</th>
                          <th style:"width: 5%">Kelas</th>
                          <th style="width: 15%">Surat Pengajuan Mutasi</th>
                          <th style="width 15%">Surat Bebas Adminstrasi</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>12523036</td>
                          <td>Yanuar Fajar</td>
                          <td>IX C</td>
                          <td><a href="#lihatpengumuman" data-toggle="tab">surat.pdf</td>
                           <td><a href="#lihatpengumuman" data-toggle="tab">bebas.pdf</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content1" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content4" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                      </table>
                        </div>






              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            
              
				<form class="form-horizontal formmapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      <div class="form-group formgrup jarakform">
                        <label for="first-name" class="col-sm-2 control-label">NIS*</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="first-name" placeholder="Judul Formulir">
                        </div>
                      </div>
                      <div class="form-group formgrup jarakform">
                        <label for="first-name" class="col-sm-2 control-label">Nama Siswa</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="first-name" placeholder="Judul Formulir">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="logo-daerah" class="col-sm-2 control-label">Surat Permohonan</label>
                        <div class="col-sm-4">
                          <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertFile" class="form-control" id="surat_permohonan" placeholder="Surat Permohonan">
                       </div>
                       <div class="col-sm-4">
                       <button type="button" class="btn btn-danger" href="#dokumen" data-toggle="tab"> Lihat dokumen</button>
                       </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="logo-sekolah" class="col-sm-2 control-label">Surat Bebas Administrasi</label>
                        <div class="col-sm-4">
                          <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertFile" class="form-control" id="surat_bebas_administrasi" placeholder="Surat Bebas Administrasi">
                        </div>
                        <div class="col-sm-4">
                       <button type="button" class="btn btn-danger" href="#dokumen" data-toggle="tab"> Lihat dokumen</button>
                       </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="atribut-formulir" class="col-sm-2 control-label">Berkas yang dibutuhkan<span class="required">*</span></label>
                        <div class="col-sm-4">
                          <ul class+"to_do">
                          	<li>
                          		<p>
                          		<input type="checkbox" class="flat">
                          		Berkas </p>
                          	</li>
                          	<li>
                          		<p>
                          		<input type="checkbox" class="flat">
                          		Berkas </p>
                          	</li>
 							              <li>
                           		<p>
                          		<input type="checkbox" class="flat">
                          		Berkas </p>
                          	</li>
  								          <li>
                          		<p>
                          		<input type="checkbox" class="flat">
                          		Berkas </p>
                          	</li>
 								             <li>
                          		<p>
                          		<input type="checkbox" class="flat">
                          		Berkas </p>
                          	</li>

                          </ul>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-primary">Cancel</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                     </div>
                    </div>
                    </div>
                    </form>
                    </div>
        
                <!-- end tab 1 -->

              

            
              <div class="active tab-pane" id="tab_content2" aria-labelledby="profile-tab">
              <div class="col-sm-6">
                              <div class="dataTables_length" id="example_length">
                                <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="form-control input-sm text-right" placeholder="" aria-controls="example1">
                              </label>
                            </div>
                          </div>
                          <table class="table table-striped projects">
                          <thead>
                      <tr>
                        <th style="width: 5%">NISN</th>
                        <th style="width: 20%">Nama Siswa</th>
                        <th style="width: 5%">Berkas yang berkas dibutuhkan</th>
                        <th style="width: 20%"></th>
                        
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro
                          <br />
                            <small>Daftar Pada 12.06.2017</small></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          <td>
                            <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Pengumuman</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro
                          <br />
                            <small>Daftar Pada 12.06.2017</small></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          <td>
                            <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Pengumuman</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro
                          <br />
                            <small>Daftar Pada 12.06.2017</small></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          <td>
                            <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Pengumuman</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro
                          <br />
                            <small>Daftar Pada 12.06.2017</small></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          <td>
                            <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Pengumuman</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro
                          <br />
                            <small>Daftar Pada 12.06.2017</small></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          <td>
                            <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Pengumuman</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro
                          <br />
                            <small>Daftar Pada 12.06.2017</small></td>
                          <td>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#berkas"><i class="fa fa-folder"></i> Lihat Berkas</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          <td>
                            <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Pengumuman</button>
                          </td>
                        </tr>
                      </tbody>
                      </thead>
                      </table>
                        
                
              </div>


                            
                                          <!-- END TAB 2 -->



                     <div class="active tab-pane" id="tab_content3" aria-labelledby="profile-tab2">
                       <div class="row">
                       <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length">
                                <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                              </label>
                            </div>
                          </div>
                        </div>
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 5%">No</th>
                          <th style="width: 5%">NISN</th>
                          <th style="width: 20%">Nama Pendaftar</th>
                          <th style="width: 10%">Tanggal</th>
                          <th style="width: 10%">Keterangan</th>
                          <th style="width: 10%">Sekolah</th>
                          <th style="width: 10%"></th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>12345666</td>
                          <td>Fatimatus Zuhro</td>
                          <td>12-09-2011</td>
                          <td>Mutasi Keluar</td>
                          <td>SMPN 7 Karawang</td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>12345666</td>
                          <td>Sania Warenda</td>
                          <td>12-10-2015</td>
                          <td>Mutasi Keluar</td>
                          <td>SMPN 8 Pekanbaru</td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        </tr>
                      </tbody>
                    </table>
                     </div>

                     <!-- end tab 3 -->

                     
                        <!-- end tab 4 -->
                       
                        </div>
                        </div>
            
            </div>

             <!-- end container main -->
            <div class="modal fade bs-example-modal-lg" id="berkas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Daftar Berkas Mutasi Masuk</h4>
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
      <!-- end of berkas -->
      <div class="modal fade bs-example-modal-lg" id="nilai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Nilai Ujian Masuk Siswa</h4>
            </div>
            <div class="modal-body">
              <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="#" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Masukkan Nilai Siswa</label>
                          <div class="col-sm-10">
                            <ul class="titik">
                              <li>Nilai 1 <input type="text"></li>
                              <li>Nilai 2 <input type="text"></li>
                              <li>Nilai 3 <input type="text"></li>
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
      <!-- end of profil -->
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
<script type="text/javascript" src="jscolor.js"></script>
</body>
</html>
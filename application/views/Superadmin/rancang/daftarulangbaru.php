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


<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu">
          <li class="header"></li>
          <ul class="sidebar-menu">
          <li class="treeview">
              <a href="siswaeedit.php">
                  <i class="fa fa-dashboard"></i> <span>Data Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
              </a>
          </li>
          </ul>

          <ul class="sidebar-menu">
          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Daftar Ulang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
              </a>
              <ul class="treeview-menu">
          <li class="active"><a href="daftarulangbaru.php"><i class="fa fa-circle-o"></i>Siswa Baru</a></li>
        <li ><a href="daftarulangnaik.php"><i class="fa fa-circle-o"></i>Kenaikan Kelas</a></li>
      </ul>
      </li>
      </ul>

      <ul class="sidebar-menu">
          <li class="treeview">
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
        <li><a href="presensiswa.php"><i class="fa fa-circle-o text-red"></i>Presensi</a></li>
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

<!--       INI TUTUP DARI MENU      -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Daftar Ulang Siswa Baru<br></center>
    </h1>
    <br>
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
 
          <h3>DATA PRIBADI SISWA</h3>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Laki-Laki &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NISN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Tanggal Lahir" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Agama-</option>
                            <option>Islam</optnion>
                            <option>Kriste Protestan</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Khong Hu Chu</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p style="padding: 5px;">
                        <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Tidak
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Netra
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Rungu
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Laras 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Wicara 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tuna Ganda  
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Hiperaktif
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Cerdas Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bakat Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Kesulitan Belajr
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Narkoba
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Indigo
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Down Syndrome
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Autis
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Terpencil / Tebelakang
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bencana Alam / Sosial
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tidak Mampu Ekonomi
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Lainnya
                        <br />
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      <div><textarea rows="3"></textarea></div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RT <span class="required">*</span>
                        </label>
                         <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                         <input type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RW <span class="required">*</span>
                        </label>
                         <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                         <input type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Domisili </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Dalam Daerah &nbsp;</label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Luar Daerah</label>
                          </div>
                        </div>
                      </div>
                      <br>
                      <br>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dusun <span class="required">*</span> </label>
                         <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Desa / Kelurahan <span class="required">*</span> </label>
                         <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan <span class="required">*</span> </label>
                         <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Pos <span class="required">*</span> </label>
                         <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tinggal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p style="padding: 5px;">

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Bersama Orang Tua
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Wali
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Kost 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Asrama 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Panti Asuhan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Lainya 
                        <br />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Transportasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p style="padding: 5px;">
                        <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Jalan Kaki
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Angkutan Umum
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Mobil / Bus Antar Jemput
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Kereta Api 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Ojek 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Andong /  Becak 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sepeda 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sepeda Motor 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Mobil Pribadi 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Lainnya  
                        <br />
                        </div>
                      </div>
                      <br>
                      <br/>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon/HP </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama SD/MI </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lama Belajar SD/MI </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor SKHUN/S </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Seri SKHUN/S </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Seri Ijazah SD/MI </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Penerima KPS/KKS/PKH/KIP </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <h3>DATA AYAH KANDUNG</h3>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Depan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Belakang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Tanggal Lahir" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Agama-</option>
                            <option>Islam</optnion>
                            <option>Kriste Protestan</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Khong Hu Chu</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Pendidikan-</option>
                            <option>Tidak Sekolah</optnion>
                            <option>Putus SD</option>
                            <option>SD Sederajat</option>
                            <option>SMP Sederajat</option>
                            <option>SMA Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Pekerjaan-</option>
                            <option>Tidak Bekerja</optnion>
                            <option>Nelayan</option>
                            <option>Petani</option>
                            <option>Peternak</option>
                            <option>PNS/TNI/Polri</option>
                            <option>Karyawan Swasta</option>
                            <option>Pedagang Kecil</option>
                            <option>Pedagang Besar</option>
                            <option>Wiraswasta</option>
                            <option>Wirausaha</option>
                            <option>Buruh</option>
                            <option>Pensiunan</option>
                            <option>Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasillan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Penghasillan-</option>
                            <option>Kurang dari Rp 500.000</optnion>
                            <option>Rp 500.000 - Rp 999.000</option>
                            <option>Rp 1.000.000 - Rp 1.999999</option>
                            <option>Rp 2.000.000 - Rp 4.000.000</option>
                            <option>Rp 5.000.000 - Rp 20.000.000</option>
                            <option>Labih Dari Rp 20.000.000</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p style="padding: 5px;">
                        <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Tidak
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Netra
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Rungu
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Laras 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Wicara 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tuna Ganda  
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Hiperaktif
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Cerdas Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bakat Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Kesulitan Belajr
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Narkoba
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Indigo
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Down Syndrome
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Autis
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Terpencil / Tebelakang
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bencana Alam / Sosial
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tidak Mampu Ekonomi
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Lainnya
                        <br />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon/HP </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <h3>DATA IBU KANDUNG</h3>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Depan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Belakang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Tanggal Lahir" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Agama-</option>
                            <option>Islam</optnion>
                            <option>Kriste Protestan</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Khong Hu Chu</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Pendidikan-</option>
                            <option>Tidak Sekolah</optnion>
                            <option>Putus SD</option>
                            <option>SD Sederajat</option>
                            <option>SMP Sederajat</option>
                            <option>SMA Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Pekerjaan-</option>
                            <option>Tidak Bekerja</optnion>
                            <option>Nelayan</option>
                            <option>Petani</option>
                            <option>Peternak</option>
                            <option>PNS/TNI/Polri</option>
                            <option>Karyawan Swasta</option>
                            <option>Pedagang Kecil</option>
                            <option>Pedagang Besar</option>
                            <option>Wiraswasta</option>
                            <option>Wirausaha</option>
                            <option>Buruh</option>
                            <option>Pensiunan</option>
                            <option>Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasillan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Penghasillan-</option>
                            <option>Kurang dari Rp 500.000</optnion>
                            <option>Rp 500.000 - Rp 999.000</option>
                            <option>Rp 1.000.000 - Rp 1.999999</option>
                            <option>Rp 2.000.000 - Rp 4.000.000</option>
                            <option>Rp 5.000.000 - Rp 20.000.000</option>
                            <option>Labih Dari Rp 20.000.000</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p style="padding: 5px;">
                        <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Tidak
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Netra
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Rungu
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Laras 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Wicara 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tuna Ganda  
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Hiperaktif
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Cerdas Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bakat Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Kesulitan Belajr
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Narkoba
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Indigo
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Down Syndrome
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Autis
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Terpencil / Tebelakang
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bencana Alam / Sosial
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tidak Mampu Ekonomi
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Lainnya
                        <br />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon/HP </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <h3>DATA WALI</h3>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Depan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gelar Belakang </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Tanggal Lahir" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Agama-</option>
                            <option>Islam</optnion>
                            <option>Kriste Protestan</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Khong Hu Chu</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Pendidikan-</option>
                            <option>Tidak Sekolah</optnion>
                            <option>Putus SD</option>
                            <option>SD Sederajat</option>
                            <option>SMP Sederajat</option>
                            <option>SMA Sederajat</option>
                            <option>D1</option>
                            <option>D2</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Pekerjaan-</option>
                            <option>Tidak Bekerja</optnion>
                            <option>Nelayan</option>
                            <option>Petani</option>
                            <option>Peternak</option>
                            <option>PNS/TNI/Polri</option>
                            <option>Karyawan Swasta</option>
                            <option>Pedagang Kecil</option>
                            <option>Pedagang Besar</option>
                            <option>Wiraswasta</option>
                            <option>Wirausaha</option>
                            <option>Buruh</option>
                            <option>Pensiunan</option>
                            <option>Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasillan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Penghasillan-</option>
                            <option>Kurang dari Rp 500.000</optnion>
                            <option>Rp 500.000 - Rp 999.000</option>
                            <option>Rp 1.000.000 - Rp 1.999999</option>
                            <option>Rp 2.000.000 - Rp 4.000.000</option>
                            <option>Rp 5.000.000 - Rp 20.000.000</option>
                            <option>Labih Dari Rp 20.000.000</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <p style="padding: 5px;">
                        <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Tidak
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Netra
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Rungu
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Grahita Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Ringan 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Daksa Sedang 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Laras 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Wicara 
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tuna Ganda  
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Hiperaktif
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Cerdas Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bakat Istimewa
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Kesulitan Belajr
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Narkoba
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Indigo
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Down Syndrome
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Autis
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Terpencil / Tebelakang
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Bencana Alam / Sosial
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Tidak Mampu Ekonomi
                        <br />

                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Lainnya
                        <br />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon/HP </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      
                    <h3>DATA PERIODIK DAN TAMBAHAN</h3>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Anak</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>-Pilih Status-</option>
                            <option>Kandung</optnion>
                            <option>Tiri</option>
                            <option>Angkat</option>
                          </select>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Saudara Kandung 
                        </label>
                         <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                         <input type="text" class="form-control">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Saudara Tiri 
                        </label>
                         <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                         <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Anak Ke-  
                        </label>
                         <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                         <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="daftar_baru.html"><button class="btn btn-primary" type="button">Edit</button></a>
                          <button class="btn btn-primary" type="button">Terapkan</button>
                        </div>

        </div>
      </div>
    </div>
  </section>
         

       
<!-- page content -->
        
              
            <!-- end container body-->


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


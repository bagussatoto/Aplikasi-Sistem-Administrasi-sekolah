
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi SMP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/kesiswaan/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/kesiswaan/sweetalert/sweetalert.css'); ?>">
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
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
                
              </a>
            </li>
            
            <li>
              <a href="<?php echo site_url('kesiswaan/logout'); ?>"><i class="fa fa-sign-out"></i>Log out</a>
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
              <a href="<?php echo base_url();?>kesiswaan/siswa/siswa">
                  <i class="fa fa-dashboard"></i> <span>Profil Siswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
              </a>
              </li>
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Daftar Ulang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>kesiswaan/siswa/daftarulang_ppdb_siswa"><i class="fa fa-circle-o"></i>Siswa Baru</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Siswa Mutasi</a></li>
                <li><a href="<?php echo base_url();?>kesiswaan/siswa/daftarulang_kenaikan_siswa"><i class="fa fa-circle-o"></i>Daftar Kelas</a></li>
              </ul>
            </li>
           </ul>
        
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
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Tambahan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i>Klinik UN</a>
        </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url();?>kesiswaan/siswa/setting_akun_siswa">
          <i class="fa fa-dashboard"></i> <span>Pengaturan Akun</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
</section>
<!-- /.sidebar -->
</aside>

<!--       INI TUTUP DARI MENU      -->

<?php echo $contents; ?>       

<script type="text/javascript" src="<?php echo base_url('assets/kesiswaan/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/kesiswaan/plugins/datatables/dataTables.bootstrap.min.js"></script>
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

<script>

function tambahdata(){
swal("Bagus", "Anda menambahkan Data", "success");
}
</script>
</html>



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
                <img src="<?php echo base_url(); ?>assets/kesiswaan/image/admin.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/kesiswaan/image/admin.png" class="img-circle" alt="User Image">

                  <p>
                    Anggraeni Dias Saputri
                    <small>SIA 2 13523039</small>
                    <!-- <?php echo $nama?> -->
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
                    <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
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
        <ul class="treeview-menu active">
          <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Penerimaan Peserta Didik Baru</a>
           <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>ppdb/admin/pendaftar_jalur_ujian"><i class="fa fa-circle-o text-red"></i> Jalur Ujian</a></li>
            <li class="active"><a href="<?php echo base_url();?>ppdb/admin/pendaftar_jalur_un"><i class="fa fa-circle-o text-red"></i> Jalur UN</a></li>
          </ul>
        </li>

        <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Daftar  Ulang</a>
         <ul class="treeview-menu active">
          <li class="active"><a href="<?php echo base_url();?>ppdb/admin/daftarulang_ppdb"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
          <li class="active"><a href="<?php echo base_url();?>ppdb/admin/daftarulang_kenaikan"><i class="fa fa-circle-o text-red"></i>Kelas</a></li>
        </ul>
      </li>

      <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
        <ul class="treeview-menu active">
          <li class="active"><a href="<?php echo base_url();?>distribusi/kesiswaan/distribusi_reg"><i class="fa fa-circle-o text-red"></i>Kelas Reguler</a></li>
          <li class="active"><a href="<?php echo base_url();?>distribusi/kesiswaan/distribusi_tam"><i class="fa fa-circle-o text-red"></i>Kelas Tambahan</a></li>
          <li class="active"><a href="<?php echo base_url();?>distribusi/kesiswaan/klinik_un"><i class="fa fa-circle-o text-red"></i>Klinik UN</a></li>
        </ul>
      </li>
   

      <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Mutasi </a>
      <ul class="treeview-menu acrive">
          <li class="active"><a href="<?php echo base_url();?>distribusi/kesiswaan/mutasi_masuk"><i class="fa fa-circle-o text-red"></i>Mutasi Masuk</a></li>
          <li class="active"><a href="<?php echo base_url();?>distribusi/kesiswaan/mutasi_keluar"><i class="fa fa-circle-o text-red"></i>Mutasi Keluar</a></li>
        </ul>
      </li>
    </li>
    <li class="active"><a href="<?php echo base_url();?>ppdb/admin/buku_induk"><i class="fa fa-circle-o"></i> Buku Induk </a>
    </li>
  </ul>
</li>
</ul>
</section>

</aside>
<!--       INI TUTUP DARI MENU      -->


<!-- Content Wrapper. Contains page content -->
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

  hapus({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then(function () {
    swal(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
})
</script>
</html>


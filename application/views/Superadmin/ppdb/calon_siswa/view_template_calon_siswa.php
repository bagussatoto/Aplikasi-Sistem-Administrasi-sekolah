<TYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIA SMP | PPDB</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/css/responsive.css" rel="stylesheet">    
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">

        <!--      OPEN MENU NAV      --> 
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>ppdb/calon_siswa/frontend_ppdb">SISMP</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jadwal<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Jadwal Pelajaran</a></li>
                                <li><a href="#">Jadwal Tambahan</a></li>
                                <li><a href="#">Jadwal Piket</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ekstrakurikuler<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Jadwal Ekskul</a></li>
                                <li><a href="#">Pendaftaran</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penerimaan Siswa Baru <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="http://localhost:8000/sia/index.php/kesiswaan/calon_siswa/frontend_ppdb">PPDB</a></li>
                                <li><a href="http://localhost:8000/sia/distribusi/sekolah/mutasi">Mutasi</a></li>
                            </ul>
                        </li>                    
                        <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <!--      CLOSED MENU NAV      --> 
        
    </header><!--/header-->


<?php echo $contents; ?>  

 <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    2017 | Sistem Informasi Akademik Sekolah Menengah Pertama
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/kesiswaan/calon_siswa/js/wow.min.js"></script>
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

</body>
</html>
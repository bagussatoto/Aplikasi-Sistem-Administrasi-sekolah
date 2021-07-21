<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Sistem Informasi Akademik</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url();?>/assets/distribusi/admin/css_s/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/distribusi/admin/css_s/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/distribusi/admin/css_s/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/distribusi/admin/css_s/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/distribusi/admin/css_s/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/distribusi/admin/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/assets/distribusi/admin/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/assets/distribusi/admin/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/assets/distribusi/admin/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/assets/distribusi/admin/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
         <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div> <!--/container-->

        <!-- </div -->>/.top-bar

        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>distribusi/sekolah/home">SISMP</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url();?>distribusi/sekolah/home">Home</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jadwal<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Jadwal Pelajaran</a></li>
                                <li><a href="#">Jadwal Tambahan</a></li>
                                <li><a href="#">Jadwal Piket</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nilai</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ekstrakurikuler<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Jadwal Ekskul</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PSB <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">PPDB</a></li>
                                <li><a href="#">Daftar Ulang</a></li>
                                <li><a href="<?php echo base_url();?>distribusi/sekolah/mutasi">Mutasi</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>distribusi/sekolah/pengumuman">Pengumuman</a></li>                        
                       <li><div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->


 

    
    <?php echo $contents; ?>
    
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="<?php echo base_url();?>/assets/distribusi/admin/http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url();?>/assets/distribusi/admin/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/distribusi/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/distribusi/admin/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>/assets/distribusi/admin/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>/assets/distribusi/admin/js/main.js"></script>
    <script src="<?php echo base_url();?>/assets/distribusi/admin/js/wow.min.js"></script>
</body>
</html>
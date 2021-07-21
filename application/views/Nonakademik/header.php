<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi SMP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("dist/css/AdminLTE.min.css") ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("dist/css/AdminLTE.min.css") ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("dist/css/skins/_all-skins.min.css") ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url("plugins/iCheck/flat/blue.css") ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url("plugins/morris/morris.css") ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url("plugins/jvectormap/jquery-jvectormap-1.2.2.css") ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url("plugins/datepicker/datepicker3.css") ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url("plugins/daterangepicker/daterangepicker.css") ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("css/style.css") ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url("plugins/jQuery/jquery-2.2.3.min.js") ?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>index.php/nonakademik" class="logo">
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
              <img src="<?php echo base_url("image/admin.png") ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("image/admin.png") ?>" class="img-circle" alt="User Image">

                <p>
                  Admin
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
                  <a href="<?php echo base_url('logout') ?>">Sign out</a>
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
        <!-- <li class="header"></li> -->

        
        <?php $role = "all";//@$_GET["role"] 
          if ($this->session->userdata('jabatan') == "nonakademik") {
            $role = "nonakademik";
          }
        ?>
        <?php $all_menu = sismp_data_menu($role); ?>
        <?php //print_r($all_menu); ?>

        <?php foreach ($all_menu as $menu1) : ?>
        	<li class="treeview">
        		<a href="#">
        			<i class="fa <?php echo $menu1["icon"] ?>"></i> <span><?php echo $menu1["title"] ?></span>
        			<span class="pull-right-container">
        				<i class="fa fa-angle-left pull-right"></i>
        			</span>
            </a>

            <?php if (!empty($menu1["child"])) : ?>
            	<?php foreach ($menu1["child"] as $menu2) : ?>
            		<ul class="treeview-menu">
              		<?php if (!isset($menu2["child"]) || (count($menu2["child"]) <= 0)) : ?>
              			<li ><a href="<?php echo $menu2["link"] ?>"><i class="fa fa-circle-o"></i><?php echo $menu2["title"] ?></a></li>
              		<?php else : ?>
              			<li ><a><i class="fa fa-circle-o"></i> <?php echo $menu2["title"] ?> </a>
  	            			<ul class="treeview-menu">
  	            				<?php foreach ($menu2["child"] as $menu3) : ?>
  	            					<li ><a href="<?php echo $menu3["link"] ?>"><i class="fa fa-circle-o text-red"></i> <?php echo $menu3["title"] ?></a></li>
  	            				<?php endforeach; ?>
  	            			</ul>
  	            		</li>
              		<?php endif; ?>
  	            		
              	</ul>
            	<?php endforeach; ?>

            <?php endif; ?>
        	</li>
        <?php endforeach; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi SMP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/style.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/superadmin/sweetalert/sweetalert.css'); ?>">

    <script type="text/javascript" src="<?php echo base_url('assets/superadmin/sweetalert/sweetalert.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/moment.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/transition.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/collapse.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/bootstrap/css/bootstrap-datetimepicker.min.css">

<script src="<?php echo base_url("nonakademik/plugins/jQuery/jquery-2.2.3.min.js") ?>"></script>
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
      <a href="<?php echo site_url('konseling/dashboard');?>" class="logo">
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
                <img src="<?php echo base_url();?>assets/superadmin/fotoguru/<?php echo $foto; ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $nama ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url();?>assets/superadmin/fotoguru/<?php echo $foto; ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $nama; ?>
                    <small><?php echo $username; ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body pdg">
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo site_url('konseling/profile');?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo site_url('logout');?>" class="btn btn-default btn-flat">Log Out</a>
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

        <ul class="sidebar-menu">
                   <li class="header">MAIN NAVIGATION</li>

          <?php
          $arrmenuakses = explode(",", $this->session->userdata("menuakses"));
          ?>
          <!-- SIDE MENU PEGAWAI BARU -->
          <?php 
          if (in_array("1", $arrmenuakses)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <!-- +++++++++++++++++++++++PPDB+++++++++++++++++++++++++ -->
                <?php 
                if (in_array("2", $arrmenuakses)) {
                  ?>
                  <li ><a href="#"><i class="fa fa-circle-o"></i> Penerimaan Peserta Didik Baru </a>
                   <ul class="treeview-menu">

                    <?php 
                    if (in_array("3", $arrmenuakses)) {
                      ?>
                      <li ><a href="<?php echo base_url();?>ppdb/admin/Pendaftar_jalur_ujian"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
                      <?php
                    }
                    ?>

                    <?php 
                    if (in_array("4", $arrmenuakses)) {
                      ?>
                      <li ><a href="<?php echo base_url();?>ppdb/admin/Pendaftar_jalur_un"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
                      <?php
                    }
                    ?>
                  </ul>
                </li>
                <?php
              }
              ?>
              <!-- tutup ppdb -->

              <!-- ++++++++++++++++++++++DAFTAR ULANG+++++++++++++++++++++++++++++++++ -->

              <?php 
              if (in_array("5", $arrmenuakses)) {
                ?>
                <li ><a href="#"><i class="fa fa-circle-o"></i> Daftar Ulang </a> 
                 <ul class="treeview-menu">

                  <?php 
                  if (in_array("6", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>ppdb/admin/daftarulang_ppdb"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
                    <?php
                  }
                  ?>

                  <?php 
                  if (in_array("7", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>ppdb/admin/daftarulang_kenaikan"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
                    <?php
                  }
                  ?>
                </ul>
              </li>
              <?php
            }
            ?>
            <!-- ++++++++++++++++++++++++TUTUP DAFTAR ULANG+++++++++++++++++++++++++ -->


            <!-- ++++++++++++++++++++++++dISTRIBUSI KELAS+++++++++++++++++++++++++ -->
            <?php 
            if (in_array("8", $arrmenuakses)) {
              ?>
              <li><a href="#"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
                <ul class="treeview-menu">

                  <?php 
                  if (in_array("9", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo site_url('distribusi/distribusi_reg');?>"><i class="fa fa-circle-o text-red"></i> Kelas Reguler </a></li>
                    <?php
                  }
                  ?>

                  <?php 
                  if (in_array("10", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo site_url('distribusi/distribusi_tam');?>"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan </a></li>
                    <?php
                  }
                  ?>


                  <?php 
                  if (in_array("11", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>distribusi/klinik_un"><i class="fa fa-circle-o text-red"></i> Klinik UN</a></li>
                    <?php
                  }
                  ?>
                </ul>
              </li>
              <?php
            }
            ?>
            <!-- ++++++++++++++++++++++++TUTUP DISTRIBUSI KELAS++++++++++++++++++++++ -->


            <!-- ++++++++++++++++++++++++MUTASI++++++++++++++++++++++++ -->
            <?php 
            if (in_array("12", $arrmenuakses)) {
              ?>
              <li><a href="#"><i class="fa fa-circle-o"></i> Mutasi </a>
                <ul class="treeview-menu">
                  <?php 
                  if (in_array("13", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>kesiswaan/mutasi_masuk"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
                    <?php
                  }
                  ?>

                  <?php 
                  if (in_array("14", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>kesiswaan/mutasi_keluar"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
                    <?php
                  }
                  ?>
                </ul>
              </li>
              <?php
            }
            ?>
            <!-- ++++++++++++++++++++++++TUTUP MUTASI+++++++++++++++++++++++++ -->
            <?php 
            if (in_array("15", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>ppdb/admin/buku_induk"><i class="fa fa-circle-o"></i>Buku Induk</a></li>
              <?php
            }
            ?>

          </ul>
        </li>
        <?php
      }
      ?>



      <!-- ++++++++++++++++++++++++++++KURIKULUM++++++++++++++++++++++++++++++ -->
      <?php 
      if (in_array("16", $arrmenuakses)) {
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kurikulum</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">



            <!-- ++++++++++++++++++++++++++++PENJADWALAN++++++++++++++++++++++++++++++ -->
            <?php 
            if (in_array("17", $arrmenuakses)) {
              ?>
              <li ><a href="#"><i class="fa fa-circle-o"></i> Penjadwalan</a>
               <ul class="treeview-menu">

                <?php 
                if (in_array("18", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/namamapel'); ?>"><i class="fa fa-circle-o text-red"></i> Tambah Mapel</a></li>
                  <?php
                }
                ?>

                <?php 
                if (in_array("19", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/mapel'); ?>"><i class="fa fa-circle-o text-red"></i> Mengelola Mapel</a></li>
                  <?php
                }
                ?>


                <?php 
                if (in_array("20", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/harirentang'); ?>"><i class="fa fa-circle-o text-red"></i> Mengelola Hari & Jam</a></li>
                  <?php
                }
                ?>

                <?php 
                if (in_array("21", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/jammengajar'); ?>"><i class="fa fa-circle-o text-red"></i> Jam Mengajar Guru</a></li>
                  <?php
                }
                ?>

                <?php 
                if (in_array("22", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/jadwalmapel'); ?>"><i class="fa fa-circle-o text-red"></i> Jadwal Mapel</a></li>
                  <?php
                }
                ?>

                <?php 
                if (in_array("23", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/jadwalpiketguru'); ?>"><i class="fa fa-circle-o text-red"></i> Jadwal Piket Guru</a></li>
                  <?php
                }
                ?>

                <?php 
                if (in_array("24", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/jadwaltambahan'); ?>"><i class="fa fa-circle-o text-red"></i> Jadwal Tambahan</a></li>
                  <?php
                }
                ?>


                <?php 
                if (in_array("25", $arrmenuakses)) {
                  ?>
                  <li ><a href="<?php echo site_url('kurikulum/Ekstrakurikuler'); ?>"><i class="fa fa-circle-o text-red"></i> Mengelola Ekstrakurikuler</a></li>
                  <?php
                }
                ?>

              </ul>
            </li>
            <?php
          }
          ?>
          <!-- ++++++++++++++++++++++++TUTUP PENJADWALAN++++++++++++++++++++++++++++-->


          <!-- ++++++++++++++++++++++++PENILAIAN++++++++++++++++++++++++++++-->
        <!-- ++++++++++++++++++++++++PENILAIAN++++++++++++++++++++++++++++-->
        <?php 
        if (in_array("26", $arrmenuakses)) {
          ?>
          <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a>
           <ul class="treeview-menu">

            <?php 
            if (in_array("27", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>kurikulum/kaldik"><i class="fa fa-circle-o text-red"></i> KALDIK</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("28", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>kurikulum/kurikulum"><i class="fa fa-circle-o text-red"></i> Kurikulum Sekolah</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("29", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>kurikulum/presensi"><i class="fa fa-circle-o text-red"></i> Presensi Siswa</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("30", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>penilaian/penilaian/nilaisiswa"><i class="fa fa-circle-o text-red"></i> Nilai Siswa</a></li>  
              <?php
            }
            ?>

             <?php 
            if (in_array("31", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>penilaian/penilaian/Kompetensi"><i class="fa fa-circle-o text-red"></i> Kompetensi Dasar</a></li>  
              <?php
            }
            ?>

            <?php 
            if (in_array("32", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>penilaian/penilaian/kategorinilai"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("33", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>penilaian/penilaian/jenisNA"><i class="fa fa-circle-o text-red"></i> Jenis Nilai Akhir</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("34", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>penilaian/penilaian/deskripsinilai"><i class="fa fa-circle-o text-red"></i> Deskripsi Nilai</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("35", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>penilaian/penilaian/rapor"><i class="fa fa-circle-o text-red"></i> Rapor</a></li>
              <?php
            }
            ?>

          </ul>
        </li>
        <?php
      }
      ?>

      <!-- ++++++++++++++++++++++++TUTUP PENILAIAN++++++++++++++++++++++++++++-->
    </ul>
  </li>
  <?php
}
?>

<!-- ++++++++++++++++++++++TUTUP KURIKULUM++++++++++++++++++++++++++++++++ -->

<?php 
if (in_array("36", $arrmenuakses)) {
  ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <?php 
      if (in_array("37", $arrmenuakses)) {
        ?>
        <li><a href="<?php echo site_url('pegawai/datapegawai');?>"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
        <?php
      }
      ?>

      <?php 
      if (in_array("38", $arrmenuakses)) {
        ?>
        <li><a href="<?php echo site_url('pegawai/presensipegawai');?>"><i class="fa fa-circle-o"></i>Presensi Pegawai</a></li>
        <?php
      }
      ?>
      
    </ul>
  </li>
  <?php
}
?>



<?php 
if (in_array("39", $arrmenuakses)) {
  ?>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Non Akademik</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
 <ul class="treeview-menu">
    <?php 
    if (in_array("40", $arrmenuakses)) {
      ?>
     
        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">

            <?php 
            if (in_array("41", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>nonakademik/pendaftaran"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("42", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>nonakademik/jadwal"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("43", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>nonakademik/presensi"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("44", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>nonakademik/nilai"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("45", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>nonakademik/pembayaran"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
              <?php
            }
            ?>

          </ul>
        </li>
        <?php 
      }
      ?>


      <?php 
      if (in_array("46", $arrmenuakses)) {
        ?>
        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
         <ul class="treeview-menu">

          <?php 
          if (in_array("47", $arrmenuakses)) {
            ?>
            <li ><a href="<?php echo base_url();?>konseling/keterlambatan"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
            <?php 
          }
          ?>

          <?php 
          if (in_array("48", $arrmenuakses)) {
            ?>
            <li><a href="<?php echo base_url();?>konseling/Perizinan"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
            <?php 
          }
          ?>

          <?php 
          if (in_array("49", $arrmenuakses)) {
            ?>
            <li><a href="<?php echo base_url();?>konseling/pelanggaran"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
            <?php 
          }
          ?>

          <?php 
          if (in_array("50", $arrmenuakses)) {
            ?>
            <li><a href="<?php echo base_url();?>konseling/prestasi"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
            <?php 
          }
          ?>
        </ul>
      </li>
      <?php 
    }
    ?>

  </ul>
</li>
<?php
}
?>

  <br>

  <li class="header">OPTIONAL</li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-circle-o text-aqua"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('konseling/gantipassword');?>">Ganti Password</a></li> 
            </ul> 
          </li>

        </ul>

      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->


    <!-- Main content -->
    <?php echo $contents; ?>
    <!-- /.content -->

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
  <script src="<?php echo base_url();?>/assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url();?>/assets/admin/bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <!-- Sparkline -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url();?>/assets/admin/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>/assets/admin/dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>/assets/admin/dist/js/demo.js"></script>

</body>

<!-- DataTables -->
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable();
    $('#example3').DataTable();
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="<?php echo base_url("assets/nonakademik/dist/js/app.min.js") ?>"></script>
<script src="<?php echo base_url("assets/nonakademik/tema/dist/js/demo.js") ?>"></script>
<script src="<?php echo base_url("assets/nonakademik/tema/plugins/flot/jquery.flot.min.js") ?>"></script>
<script src="<?php echo base_url("assets/nonakademik/tema/plugins/flot/jquery.flot.resize.min.js") ?>"></script>
<script src="<?php echo base_url("assets/nonakademik/tema/plugins/flot/jquery.flot.categories.min.js") ?>"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/bootstrap/css/jquery.datetimepicker.min.css"/ >
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker').datetimepicker({
      timepicker:false,
      format:'d/m/Y',
    });
  });
</script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker1').datetimepicker({
      timepicker:false,
      format:'d/m/Y',
    });
  });
</script>

<script>
  $(function () {
    
    var bar_data = {
      data: [["7A", 10], ["7B", 8], ["7C",], ["7D", 4], ["7E", 13], ["7F", 17], ["7G", 18]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    
    var bar_data2 = {
      data: [["Minggu 1", 10], ["Minggu 2", 8], ["Minggu 3", 4], ["Minggu 4", 13]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart1", [bar_data2], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });     
    
    var bar_data1 = {
      data: [["Januari", 10], ["Februari", 8], ["Maret", 4], ["April", 13], ["Mei", 17], ["Juni", 9]
      , ["Juli", 13], ["Agustus", 17], ["September", 9]
      , ["Oktober", 13], ["November", 17], ["Desember", 9]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart2", [bar_data1], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    
    
    var bar_data3 = {
      data: [["2015", 10], ["2016", 8], ["2017", 17]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart3", [bar_data3], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    

  });

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
    + label
    + "<br>"
    + Math.round(series.percent) + "%</div>";
  }
</script>




</html>


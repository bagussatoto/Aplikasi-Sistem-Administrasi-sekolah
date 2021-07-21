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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/dist/css/AdminLTE.min.css">
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

  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/datatables/datatables/searchcolumn.js"></script>



  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/bootstrap/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.js">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/datatables/datatables.net-scroller-bs/searchcolumn.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo site_url('kepsek');?>" class="logo">
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
                    <?php echo $nama ?>
                    <small><?php echo $username ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body pdg">
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo site_url('kepsek/profile');?>" class="btn btn-default btn-flat">Profile</a>
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
          <?php 
          if (in_array("26", $arrmenuakses)) {
            ?>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a>
             <ul class="treeview-menu">

              <?php 
              if (in_array("27", $arrmenuakses)) {
                ?>
                <li ><a href="<?php echo base_url();?>kurikulumpenilaian/penilaian/kaldik"><i class="fa fa-circle-o text-red"></i> KALDIK</a></li>
                <?php
              }
              ?>

              <?php 
              if (in_array("28", $arrmenuakses)) {
                ?>
                <li ><a href="<?php echo base_url();?>kurikulumpenilaian/penilaian/kurikulum"><i class="fa fa-circle-o text-red"></i> Kurikulum Sekolah</a></li>
                <?php
              }
              ?>

              <?php 
              if (in_array("29", $arrmenuakses)) {
                ?>
                <li ><a href="<?php echo base_url();?>kurikulumpenilaian/penilaian/presensi"><i class="fa fa-circle-o text-red"></i> Presensi Siswa</a></li>
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
                <li ><a href="<?php echo base_url();?>penilaian/penilaian/kompetensi"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
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
             <li><a href="<?php echo base_url();?>konseling/absensi_harian"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
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
  <a href="<?php echo site_url('kepsek/rekapkehadiran');?>">
    <i class="fa fa-circle-o text-aqua"></i> <span>Rekap Kehadiran Pribadi</span>
  </a>
</li>
   <li class="treeview">
    <a href="#">
      <i class="fa fa-circle-o text-aqua"></i> <span>Settings</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo site_url('kepsek/gantipassword');?>">Ganti Password</a></li> 
    </ul> 
  </li>
</section>
</aside>

<?php echo $contents; ?>



    <div class="control-sidebar-bg"></div>
  </div>

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

<!-- diagram -->
<script src="<?php echo base_url();?>/assets/admin/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>/assets/admin/highcharts/modules/exporting.js"></script>
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

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/bootstrap/css/jquery.datetimepicker.min.css"/ >
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker').datetimepicker();
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker3').datetimepicker({
      timepicker:false,
      format:'Y-m-d',
    });
  });
</script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker1').datetimepicker({
      timepicker:false,
      format:'Y-m-d',
    });
  });
</script>



<?php
if (@$grafikpresensipegawai == TRUE) {
  ?>
  <script type="text/javascript">

    Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Grafik Kehadiran Pegawai Tahun <?php 
                $thn = date('Y');
                if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                ?><?php echo @$thn; ?>'
      },
    // subtitle: {
    //   text: 'Source: WorldClimate.com'
    // },
    xAxis: {
      categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'Mei',
      'Jun',
      'Jul',
      'Agu',
      'Sep',
      'Okt',
      'Nov',
      'Des'
      ],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Persentase'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Hadir',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        if ($datpresensitotal[$i] <= 0) {
          echo 0+@$datpresensitotalbulan[$i]['H']; 
        } else {
          echo ((0+@$datpresensitotalbulan[$i]['H'] / @$datpresensitotal[$i]) * 100); 
        }
      }
      ?>
      ]

    }, {
      name: 'Sakit',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        if ($datpresensitotal[$i] <= 0) {
          echo 0+@$datpresensitotalbulan[$i]['S']; 
        } else {
          echo ((0+@$datpresensitotalbulan[$i]['S'] / @$datpresensitotal[$i]) * 100); 
        }
      }
      ?>
      ]

    }, {
      name: 'Izin',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        if ($datpresensitotal[$i] <= 0) {
          echo 0+@$datpresensitotalbulan[$i]['I']; 
        } else {
          echo ((0+@$datpresensitotalbulan[$i]['I'] / @$datpresensitotal[$i]) * 100); 
        }
      }
      ?>
      ]

    }, {
      name: 'Alfa',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        if ($datpresensitotal[$i] <= 0) {
          echo 0+@$datpresensitotalbulan[$i]['A']; 
        } else {
          echo ((0+@$datpresensitotalbulan[$i]['A'] / @$datpresensitotal[$i]) * 100); 
        }
      }
      ?>
      ]

    }]
  });
</script>

<?php
}
?>

<?php
if (@$grafikusia == TRUE) {
  ?>

    <script type="text/javascript">

Highcharts.chart('grafikusia', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Pengelompokan Pegawai Berdasarkan Usia'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f} % ({point.y:.1f} orang)</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} % ({point.y:.1f} orang)',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: '20-30',
            y: <?php echo $pegawai_20_30; ?>
        }, {
            name: '31-40',
            y: <?php echo $pegawai_31_40; ?>,
            sliced: true,
            selected: true
        }, {
            name: '41-50',
            y: <?php echo $pegawai_41_50; ?>
        }, {
            name: '51-60',
            y: <?php echo $pegawai_51_60; ?>
        }]
    }]
});
    </script>
<?php
}
?>

<?php
if (@$grafikpendidikan == TRUE) {
  ?>

    <script type="text/javascript">

Highcharts.chart('grafikpendidikan', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Pengelompokan Pegawai Berdasarkan Pendidikan'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}% ({point.y:.1f} orang)</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} % ({point.y:.1f} orang)',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'SMA',
            y: <?php echo $total_sma; ?>
        }, {
            name: 'D3',
            y: <?php echo $total_d3; ?>,
            sliced: true,
            selected: true
        }, {
            name: 'S1',
            y: <?php echo $total_s1; ?>
        }, {
            name: 'S2',
            y: <?php echo $total_s2; ?>
        }, {
            name: 'S3',
            y: <?php echo $total_s3; ?>
        }]
    }]
});
    </script>
<?php
}
?>


<?php
if (@$grafikpensiun == TRUE) {
  ?>

    <script type="text/javascript">

Highcharts.chart('grafikpensiun', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Pegawai Pensiun'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}% ({point.y:.1f} orang)</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} % ({point.y:.1f} orang)',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Bakal Pensiun',
            y: <?php echo $sudahakanpensiun; ?>
        }, {
            name: 'Masih Aktif',
            y: <?php echo $belumakanpensiun; ?>,
            sliced: true,
            selected: true
        }]
    }]
});
    </script>
<?php
}
?>


<?php
if (@$persentase == TRUE) {
  ?>
  <script type="text/javascript">
    Highcharts.chart('visitor', {
      chart: {
            plotBackgroundColor: null, 
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
      title: {
            text: 'Grafik Kehadiran Pegawai Tahun <?php 
                $thn = date('Y');
                if ($this->input->post('thn') != "") { $thn = $this->input->post('thn'); }
                ?><?php echo @$thn; ?>'
        },
       tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },

      plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
      series: [{
        type: 'pie',
        name: 'Jumlah Persentase',
        colorByPoint: true,
      
        data: [
        ['Hadir',
        <?php
        for ($i=1;$i<=12;$i++) {
          if ($i>1) { echo ","; }
          echo 0+@$datpresensitotalbulan[$i]['H']; 
        }
        ?>
        
        ],

        ['Sakit',  <?php
        for ($i=1;$i<=12;$i++) {
          if ($i>1) { echo ","; }
          echo 0+@$datpresensitotalbulan[$i]['S']; 
        }
        ?>],
        ['Ijin', <?php
        for ($i=1;$i<=12;$i++) {
          if ($i>1) { echo ","; }
          echo 0+@$datpresensitotalbulan[$i]['I']; 
        }
        ?>],
        ['Alfa', <?php 
        for ($i=1;$i<=12;$i++) {
          if ($i>1) { echo ","; }
          echo 0+@$datpresensitotalbulan[$i]['A']; 
        }
        ?>],
        ]
      }]
    });


  </script>
  <?php
}
?>




<?php
if (@$rekap == TRUE) {
  ?>
<script type="text/javascript">

// Create the chart
Highcharts.chart('rekap', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Kehadiran Pegawai <?php echo $nama_tahun_ajaran; ?>'
    },
    // subtitle: {
    //     text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
    // },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: true
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }

        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Hadir',
            y: <?php
                  if ($datpresensitotal <= 0) {
                    echo 0+@$datpresensitotaltanggal['H']; 
                  } else {
                    echo ((0+@$datpresensitotaltanggal['H'] / @$datpresensitotal) * 100); 
                  }
                ?>,
            //drilldown: 'Microsoft Internet Explorer'
        }, {
            name: 'Sakit',
            y: <?php
                  if ($datpresensitotal <= 0) {
                    echo 0+@$datpresensitotaltanggal['S']; 
                  } else {
                    echo ((0+@$datpresensitotaltanggal['S'] / @$datpresensitotal) * 100); 
                  }
                ?>,
            //drilldown: 'Chrome'
        }, {
            name: 'Izin',
            y: <?php
                  if ($datpresensitotal <= 0) {
                    echo 0+@$datpresensitotaltanggal['I']; 
                  } else {
                    echo ((0+@$datpresensitotaltanggal['I'] / @$datpresensitotal) * 100); 
                  }
                ?>,
            //drilldown: 'Firefox'
        }, {
            name: 'Alpa',
            y: <?php
                  if ($datpresensitotal <= 0) {
                    echo 0+@$datpresensitotaltanggal['A']; 
                  } else {
                    echo ((0+@$datpresensitotaltanggal['A'] / @$datpresensitotal) * 100); 
                  }
                ?>,
            //drilldown: 'Safari'
        }]
    }]
});
    </script>

<?php
}
?>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Pelayanan Satu Pintu</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/home/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/superadmin/bootstrap/css/bootstrap-datetimepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/superadmin/tema/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/superadmin/sweetalert/sweetalert.css'); ?>">
  
  <!--   link data table -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/superadmin/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">


  <!-- <script type="text/javascript" src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/jquery-1.11.3.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/moment.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/transition.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/collapse.js"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/bootstrap-datetimepicker.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/superadmin/sweetalert/sweetalert.min.js'); ?>"></script>
</head>

<body class=" skin-blue sidebar-mini" >
  <div class="wrapper">

    <header class="main-header">
      <a href="<?php echo site_url('superadmin');?>" class="logo">
        <span class="logo-mini"><h4>Login Admin</h4></span>
        <span class="logo-lg"><h4>Login Admin</h4></span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Menu Utama</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/superadmin/fotoguru/<?php echo $foto; ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $nama?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('superadmin/profile');?>" ><i class="fa fa-people "></i>Profile</a>
            </li>
            <li>
                
              <a onclick="return confirm('Apakah Anda Ingin Keluar Dari Sistem?');" href="<?php echo site_url('logout');?>" ><i class="fa fa-sign-out"></i>Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <aside class="main-sidebar"> 
      <section class="sidebar"> 
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>


          <!-- SIDE MENU PEGAWAI BARU -->

          <?php
          $arrmenuakses = explode(",", $this->session->userdata("menuakses"));
          ?>

          <!-- arr menu kesiswaan -->
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


              <!-- arr menu ppdb-->
              <?php 
              if (in_array("2", $arrmenuakses)) {
                ?>
                <ul class="treeview-menu">
                  <li ><a href="#"><i class="fa fa-circle-o"></i> Penerimaan Peserta Didik Baru </a>
                   <ul class="treeview-menu">

                    <!-- arr menu ppdb ujian -->
                    <?php 
                    if (in_array("3", $arrmenuakses)) {
                      ?>
                      <li ><a href="<?php echo base_url();?>suppdb/admin/pendaftar_jalur_ujian"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
                      <?php
                    }
                    ?>
                    <!-- tutup arr menu ppdb ujian -->
                    <!-- arr menu ppdb UN--> 
                    <?php 
                    if (in_array("4", $arrmenuakses)) {
                      ?>
                      <li ><a href="<?php echo base_url();?>suppdb/admin/pendaftar_jalur_un"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
                      <?php
                    }
                    ?>
                    <!-- tutup arr menu ppdb UN--> 

                  </ul>
                </li>
                <?php
              }
              ?>
              <!-- tutup arrmenu ppdb -->

              <!-- ============================================================================================== -->
              <?php 
              if (in_array("5", $arrmenuakses)) {
                ?>
                <li ><a href="#"><i class="fa fa-circle-o"></i> Daftar Ulang </a> 
                 <ul class="treeview-menu">

                   <!-- ============================== -->
                   <?php 
                   if (in_array("6", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>suppdb/admin/daftarulang_ppdb"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
                    <?php
                  }
                  ?>
                  <!-- ============================== -->

                  <!-- ============================== -->
                  <?php 
                  if (in_array("7", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>suppdb/admin/daftarulang_kenaikan"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
                    <?php
                  }
                  ?>
                  <!-- ============================== -->

                </ul>
              </li>
              <?php
            }
            ?>
            <!-- ============================================================================================== -->


            <!-- ============================================DISTRIBUSI KELAS==================================== -->
            <?php 
            if (in_array("8", $arrmenuakses)) {
              ?>
              <li><a href="distribusi.php"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
                <ul class="treeview-menu">

                  <?php 
                  if (in_array("9", $arrmenuakses)) {
                    ?>                  
                    <li ><a href="<?php echo base_url();?>superadmin/distribusi_reg"><i class="fa fa-circle-o text-red"></i> Kelas Reguler </a></li>
                    <?php
                  }
                  ?>

                  <?php 
                  if (in_array("10", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>superadmin/distribusi_tam"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan </a></li>
                    <?php
                  }
                  ?>  

                  <?php 
                  if (in_array("11", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>superadmin/klinik_un"><i class="fa fa-circle-o text-red"></i> Klinik UN</a></li>
                    <?php
                  }
                  ?>
                </ul>
              </li>
              <?php
            }
            ?>
            <!-- ===========================================TUTUP DISTRIBUSI================================== -->

            <!-- ==============================================Mutasi================================= -->
            <?php 
            if (in_array("12", $arrmenuakses)) {
              ?>
              <li><a href="mutasi.php"><i class="fa fa-circle-o"></i> Mutasi </a>
                <ul class="treeview-menu">

                  <?php 
                  if (in_array("13", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>superadmin/mutasi_masuk"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
                    <?php
                  }
                  ?>

                  <?php 
                  if (in_array("14", $arrmenuakses)) {
                    ?>
                    <li ><a href="<?php echo base_url();?>superadmin/mutasi_keluar"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
                    <?php
                  }
                  ?>
                </ul>
              </li>
              <?php
            }
            ?>

            
            <?php 
            if (in_array("15", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>suppdb/admin/buku_induk"><i class="fa fa-circle-o"></i>Buku Induk</a></li>
              <?php
            }
            ?>
          </ul>
        </li>

        <!--  -->
        <?php
      }
      ?>
      <!-- tutup menu arr kesiswaan -->
      

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


          <?php 
          if (in_array("17", $arrmenuakses)) {
            ?>
            <ul class="treeview-menu">
              <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Penjadwalan</a>
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




                <!-- ++++++++++++++++++++++++PENILAIAN++++++++++++++++++++++++++++-->
        <?php 
        if (in_array("26", $arrmenuakses)) {
          ?>
          <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a>
           <ul class="treeview-menu">

            <?php 
            if (in_array("27", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superkur/kaldik"><i class="fa fa-circle-o text-red"></i> KALDIK</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("28", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superkur/kurikulum"><i class="fa fa-circle-o text-red"></i> Kurikulum Sekolah</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("29", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superkur/presensi"><i class="fa fa-circle-o text-red"></i> Presensi Siswa</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("30", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superpen/nilaisiswa"><i class="fa fa-circle-o text-red"></i> Nilai Siswa</a></li>  
              <?php
            }
            ?>

             <?php 
            if (in_array("31", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superpen/Kompetensi"><i class="fa fa-circle-o text-red"></i> Kompetensi Dasar</a></li>  
              <?php
            }
            ?>

            <?php 
            if (in_array("32", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superpen/kategorinilai"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("33", $arrmenuakses)) {
              ?>
              <li ><a href="<?php echo base_url();?>superpen/jenisNA"><i class="fa fa-circle-o text-red"></i> Jenis Nilai Akhir</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("34", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>superpen/deskripsinilai"><i class="fa fa-circle-o text-red"></i> Deskripsi Nilai</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("35", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>superpen/rapor"><i class="fa fa-circle-o text-red"></i> Rapor</a></li>
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
        <li><a href="<?php echo site_url('superadmin/pegawaibaru');?>"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
        <?php
      }
      ?>

      <?php 
      if (in_array("38", $arrmenuakses)) {
        ?>
        <li><a href="<?php echo site_url('superadmin/presensipegawai');?>"><i class="fa fa-circle-o"></i>Presensi Pegawai</a></li>
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
              <li><a href="<?php echo base_url();?>superadmin/pendaftaran"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("42", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>superadmin/jadwal"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("43", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>superadmin/presensi"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("44", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>superadmin/nilai"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
              <?php
            }
            ?>

            <?php 
            if (in_array("45", $arrmenuakses)) {
              ?>
              <li><a href="<?php echo base_url();?>superadmin/pembayaran"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
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
            <li ><a href="<?php echo base_url();?>superadmin/keterlambatan"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
            <?php 
          }
          ?>

          <?php 
          if (in_array("48", $arrmenuakses)) {
            ?>
            <li><a href="<?php echo base_url();?>superadmin/perizinan"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
            <?php 
          }
          ?>

          <?php 
          if (in_array("49", $arrmenuakses)) {
            ?>
            <li><a href="<?php echo base_url();?>superadmin/pelanggaran"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
            <?php 
          }
          ?>

          <?php 
          if (in_array("50", $arrmenuakses)) {
            ?>
            <li><a href="<?php echo base_url();?>superadmin/prestasi"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
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
  <a href="<?php echo site_url('superadmin/rekapkehadiran');?>">
    <i class="fa fa-circle-o text-aqua"></i> <span>Rekap Kehadiran Pribadi</span>
  </a>
</li>

<li class="treeview">
  <a href="<?php echo site_url('superadmin/jabatan');?>">
    <i class="fa fa-circle-o text-aqua"></i> <span>Manajemen Role</span>
  </a>
</li>

<li class="treeview">
  <a href="<?php echo site_url('superadmin/tahunajaran');?>">
    <i class="fa fa-circle-o text-aqua"></i> <span>Tahun Ajaran</span>
  </a>
</li>

<li class="treeview">
  <a href="<?php echo site_url('superadmin/gantipasswordsiswa');?>">
    <i class="fa fa-circle-o text-aqua"></i> <span>Ganti Password Siswa</span>
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
    <li><a href="<?php echo site_url('superadmin/gantipassword');?>">Ganti Password</a></li> 
  </ul> 
  <ul class="treeview-menu">
    <li><a href="<?php echo site_url('superadmin/harilibur');?>">Setting Hari Libur</a></li> 
  </ul> 
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>

<?php echo $contents; ?>

<footer class="main-footer"> 
  <strong>Copyright &copy; 2020 Fauzan</strong>
</footer>

<div class="control-sidebar-bg"></div>
</div>

<script src="<?php echo base_url();?>assets/superadmin/tema/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/superadmin/bootstrap/js/jquery-ui.min.js"></script> -->

<script src="<?php echo base_url();?>assets/superadmin/tema/dist/js/app.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="<?php echo base_url();?>/assets/superadmin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="<?php echo base_url();?>/assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/knob/jquery.knob.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/superadmin/bootstrap/js/moment.min.js"></script> -->
<script src="<?php echo base_url();?>assets/superadmin/bootstrap/js/jquery-ui.min.js"></script>

<script src="<?php echo base_url();?>/assets/superadmin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>/assets/superadmin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>/assets/superadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>/assets/superadmin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/assets/superadmin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/superadmin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url();?>/assets/superadmin/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>/assets/superadmin/tema/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>/assets/superadmin/tema/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>/assets/superadmin/tema/plugins/flot/jquery.flot.categories.min.js"></script> -->
</body>

<!-- diagram -->
<script src="<?php echo base_url();?>/assets/admin/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>/assets/admin/highcharts/modules/exporting.js"></script>

<!-- data tables -->
<!-- <script src="<?php echo base_url();?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script> -->

  <script src="<?php echo base_url();?>/assets/admin/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/datatables/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url();?>/assets/admin/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/bootstrap/css/jquery.datetimepicker.min.css"/ >
  <script type="text/javascript" src="<?php echo base_url();?>assets/admin/bootstrap/js/jquery.datetimepicker.full.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#datetimepicker').datetimepicker({
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
  <script type="text/javascript">
    $(function () {
      $('#datetimepicker2').datetimepicker({
        timepicker:false,
        format:'Y-m-d',
      });
    });
  </script>
  <script type="text/javascript">
    $(function () {
      $('#datetimepicker3').datetimepicker({
        timepicker:false,
        format:'Y-m-d',
      });
    });
  </script>


  <script>
    $(function () {
      $("#example1").DataTable();
      $("#example2").DataTable();
      $("#example3").DataTable();
      $('#example4').DataTable();
      $('#example5').DataTable();
      $('.example6').DataTable();
      $('.example7').DataTable();
      $('#example100').DataTable({
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




  <script>
   $(".btn-delete").on('click', function(){
    var form = $(this).attr('class').split(" ");
    var formID = '#' + form[4];
    swal({
     title: "Apakah Anda Yakin?",
     text: "Data yang Terhapus Tidak Dapat Dikembalikan ! ",
     type: "warning",
     showCancelButton: true,
     confirmButtonColor: "#DD6B55",
     confirmButtonText: "Ya!",
     closeOnConfirm: false

   }, 
   function(){
    $(formID).submit();


  });
    return false;
  });

   function areYouSure(form) {
    swal({
     title: "Apakah Anda Yakin?",
     text: "Anda Ingin Menghapus Data ini!",
     type: "warning",
     showCancelButton: true,
     confirmButtonColor: "#DD6B55",
     confirmButtonText: "Ya!",
     closeOnConfirm: false   
   },
   function(){
    return true;
  });
    return false;
  }

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
            name: 'Umur 20-30',
            y: <?php echo $pegawai_20_30; ?>
        }, {
            name: ' Umur 31-40',
            y: <?php echo $pegawai_31_40; ?>,
            sliced: true,
            selected: true
        }, {
            name: 'Umur 41-50',
            y: <?php echo $pegawai_41_50; ?>
        }, {
            name: 'Umur 51-60',
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

<!-- <footer class="main-footer"> 
  <strong>Copyright &copy; 2017 UII</strong>
</footer> -->

</html>

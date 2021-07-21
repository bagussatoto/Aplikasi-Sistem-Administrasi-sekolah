<!DOCTYPE html>
<html>
<head>
  <title>Sistem Informasi SMP</title>
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
              <a href="<?php echo site_url('logout');?>" ><i class="fa fa-sign-out"></i>Log Out</a>
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
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li ><a href="#"><i class="fa fa-circle-o"></i> Penerimaan Peserta Didik Baru </a>
               <ul class="treeview-menu">
                <li ><a href="<?php echo base_url();?>superadmin/ppdbujian"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
                <li ><a href="<?php echo base_url();?>superadmin/ppdbneg"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
              </ul>
            </li>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Daftar Ulang </a> 
             <ul class="treeview-menu">
              <li ><a href="<?php echo base_url();?>superadmin/daftarulang"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
              <li ><a href="<?php echo base_url();?>superadmin/daftarkenaikan"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
            </ul>
          </li>

          <li><a href="distribusi.php"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
            <ul class="treeview-menu">
              <li ><a href="<?php echo base_url();?>superadmin/distribusi_reg"><i class="fa fa-circle-o text-red"></i> Kelas Reguler </a></li>
              <li ><a href="<?php echo base_url();?>superadmin/distribusi_tam"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan </a></li>
              <li ><a href="<?php echo base_url();?>superadmin/klinik_un"><i class="fa fa-circle-o text-red"></i> Klinik UN</a></li>
            </ul>

            <li><a href="mutasi.php"><i class="fa fa-circle-o"></i> Mutasi </a>
              <ul class="treeview-menu">
                <li ><a href="<?php echo base_url();?>superadmin/mutasi_masuk"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
                <li ><a href="<?php echo base_url();?>superadmin/mutasi_keluar"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
              </ul>
            </li>
          </li>

          <li><a href="<?php echo base_url();?>superadmin/bukuinduk"><i class="fa fa-circle-o"></i>Buku Induk</a></li>
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
          <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Penjadwalan</a>
            <ul class="treeview-menu">
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/namamapel'); ?>"><i class="fa fa-circle-o text-red"></i> Tambah Mapel</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/mapel'); ?>"><i class="fa fa-circle-o text-red"></i> Mengelola Mapel</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/harirentang'); ?>"><i class="fa fa-circle-o text-red"></i> Mengelola Hari & Jam</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/jammengajar'); ?>"><i class="fa fa-circle-o text-red"></i> Jam Mengajar Guru</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/jadwalmapel'); ?>"><i class="fa fa-circle-o text-red"></i> Jadwal Mapel</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/jadwalpiketguru'); ?>"><i class="fa fa-circle-o text-red"></i> Jadwal Piket Guru</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/jadwaltambahan'); ?>"><i class="fa fa-circle-o text-red"></i> Jadwal Tambahan</a></li>
              <li ><a href="<?php echo site_url('penjadwalan/kurikulum/Ekstrakurikuler'); ?>"><i class="fa fa-circle-o text-red"></i> Mengelola Ekstrakurikuler</a></li>
            </ul>
          </li>

          <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a>
           <ul class="treeview-menu">
            <li ><a href="<?php echo base_url();?>superadmin/nilaisiswa"><i class="fa fa-circle-o text-red"></i> Nilai Siswa</a></li>
            <li ><a href="<?php echo base_url();?>superadmin/kategorinilai"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
            <li ><a href="<?php echo base_url();?>superadmin/jenisnilaiakhir"><i class="fa fa-circle-o text-red"></i> Jenis Nilai Akhir</a></li>
            <li><a href="<?php echo base_url();?>superadmin/deskripsinilai"><i class="fa fa-circle-o text-red"></i> Deskripsi Nilai</a></li>
            <li><a href="<?php echo base_url();?>superadmin/rapor"><i class="fa fa-circle-o text-red"></i> Rapor</a></li>
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
        <li><a href="<?php echo site_url('superadmin/pegawaibaru');?>"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
        <li><a href="<?php echo site_url('superadmin/presensipegawai');?>"><i class="fa fa-circle-o"></i>Presensi Pegawai</a></li>
        
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non Akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>superadmin/pendaftaran"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
            <li><a href="<?php echo base_url();?>superadmin/jadwal"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li><a href="<?php echo base_url();?>superadmin/presensi"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li><a href="<?php echo base_url();?>superadmin/nilai"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="<?php echo base_url();?>superadmin/pembayaran"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
         <ul class="treeview-menu">
           <li ><a href="<?php echo base_url();?>superadmin/keterlambatan"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
           <li><a href="<?php echo base_url();?>superadmin/absensi_harian"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
           <li><a href="<?php echo base_url();?>superadmin/pelanggaran"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
           <li><a href="<?php echo base_url();?>superadmin/prestasi"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
         </ul>
       </li>
     </ul>
   </li>

   <br>

   <li class="header">OPTIONAL</li>

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
    <!-- <ul class="treeview-menu">
      <li><a href="<?php echo site_url('superadmin/harilibur');?>">Setting Hari Libur</a></li> 
    </ul>  -->
  </li>



</ul>
</section>
<!-- /.sidebar -->
</aside>

<?php echo $contents; ?>

<footer class="main-footer"> 
  <strong>Copyright &copy; 2017 UII</strong>
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
        text: 'Grafik Kehadiran Pegawai'
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
      '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
        echo 0+@$datpresensitotalbulan[$i]['H']; 
      }
      ?>
      ]

    }, {
      name: 'Sakit',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        echo 0+@$datpresensitotalbulan[$i]['S']; 
      }
      ?>
      ]

    }, {
      name: 'Izin',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        echo 0+@$datpresensitotalbulan[$i]['I']; 
      }
      ?>
      ]

    }, {
      name: 'Alfa',
      data: [
      <?php
      for ($i=1;$i<=12;$i++) {
        if ($i>1) { echo ","; }
        echo 0+@$datpresensitotalbulan[$i]['A']; 
      }
      ?>
      ]

    }]
  });
</script>
<?php
}
?>
</html>

<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Rapor Siswa SMP Yogyakarta <br></center>
      <center><small>Tahun Ajaran <?php echo $judul_tahun_ajaran; ?></small></center>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a href="dashboard.php">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">

        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <!-- <li class="active"><a href="#rapor" data-toggle="tab">Rapor</a></li> -->
              <li ><a href="#datarapor" data-toggle="tab" alt="test kursor">Data Rapor</a></li>
            </ul>
            <div class="tab-content ">
              <div class=" tab-pane" id="rapor">
                <div class="box">
                  <!-- /.box-header -->
                  <h4 style="margin-left: 35%"><b> PENCAPAIAN KOMPETENSI SISWA</b></h4>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <h5>Nama sekolah : SMP 8 Yogyakarta</h5>
                    </div>
                    <div class="col-md-6" style="float: right">
                      <h5 style="float: right">Kelas: VIIB</h5>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <h5>Alamat : Jl.Kaliurang</h5>
                    </div>
                    <div class="col-md-6" style="float: right">
                      <h5 style="float: right">Semester: Genap</h5>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <h5>Nama siswa : <?php echo $nama ?> Rahmawati</h5>
                    </div>
                    <div class="col-md-6" style="float: right">
                      <h5 style="float: right">Tahun Ajaran : <?php echo $judul_tahun_ajaran; ?></h5>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <h5>Nomor Induk/NISN : 921838/2164782154</h5>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <h4><b>A. Sikap</b></h4>
                    </div>
                  </div>
                  <br>
                  <h4><b>1. Sikap Spiritual</b></h4>
                  <div class="box-kotak">Deskripsi: Aspek sikap spiritual semua mata pelajaran baik, dengan rincian: Sikap mengucapkan salam ketika masuk ruangan baik,memberi salam ketika bertemu dengan orang lain baik,toleransi dalam beragama baik,menjaga lingkungan hidup di sekitar sekolah baik, pengendalian diri baik.</div>

                  <h4><b>2. Sikap Sosial</b></h4>
                  <div class="box-kotak">Deskripsi: Aspek sikap sosial semua mata pelajaran baik, dengan rincian: Sikap kejujuran baik,kedisiplinan baik,tanggung jawab baik,kepedulian baik, toleransi baik, gotong royong baik, kesantunan (sopan/santun) baik, percaya diri baik.</div>

                  <h4><b>B. Capaian Pengetahuan dan Keterampilan</b></h4>
                  
                  <div class="box-body">
                    <div class="box-header jarakbox" style="overflow: auto">

                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th colspan="3">Kriteria Ketuntasan Minimal Sekolah (KKM): <span style="font-weight: bold">77</span></th>
                            <th colspan="3" style="text-align : center">Pengetahuan</th>
                            <th colspan="3" style="text-align : center">Keterampilan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="2" style="text-align : center">MATA PELAJARAN</td>
                            <td style="text-align : center">KKM</td>
                            <td style="text-align : center">Angka</td>
                            <td style="text-align : center">Predikat</td>
                            <td style="text-align : center">Deskripsi</td>
                            <td style="text-align : center">Angka</td>
                            <td style="text-align : center">Predikat</td>
                            <td style="text-align : center">Deskripsi</td>
                          </tr>
                          <tr>
                            <td colspan="2">Kelompok A</td>
                            <td style="text-align : center"></td>
                            <td style="text-align : center"></td>
                            <td style="text-align : center"></td>
                            <td style="text-align : center"></td>
                            <td style="text-align : center"></td>
                            <td style="text-align : center"></td>
                            <td style="text-align : center"></td>
                          </tr>
                          <tr>
                            <td style="vertical-align : center">1</td>
                            <td style="vertical-align : center">Pendidikan Agama dan Budi Pekerti Guru</td>
                            <td style="vertical-align : center">80</td>
                            <td style="vertical-align : center">88</td>
                            <td style="vertical-align : center">Sangat Baik (A)</td>
                            <td style="vertical-align : center">Angka yang sagat mengemberikananap</td>
                            <td style="vertical-align : center">88</td>
                            <td style="vertical-align : center">Sangat Baik (A)</td>
                            <td style="vertical-align : center">Angka yang sagat mengemberikananap</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                  </div>
                  <button class=" btn btnjdwl">Print</button>
                  <!-- /.box-body -->
                </div>

              </div>
              <!-- /.tab-pane -->


              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              <div class="tab-pane active" id="datarapor">
                <div class="box">

                  <!-- /.box-header -->
                  <div class="box-body">
                    <select id="pilihkelasrapor" onchange="document.location='<?php echo site_url('penilaian/penilaian/rapor'); ?>/'+document.getElementById('pilihkelasrapor').value;">
                      <?php
                      foreach ($kelas_reguler_berjalan as $d){
                        ?>
                        <option value="<?php echo $d->id_kelas_reguler_berjalan; ?>" <?php if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo " selected"; } ?>><?php echo $d->nama_kelas;?></option>
                        <?php
                      }?>
                    </select>
                   <!--  <form class="posisikanan">
                      <select>
                        <option>2016-2017</option>
                        <option>2015-2016</option>
                        <option>2014-2015</option>
                        <option>2013-2014</option>
                        <option>2012-2013</option>
                      </select>
                    </form> -->
                    <div class="box-header jarakbox" style="overflow: auto">

                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i=0;
                          foreach ($siswaperkelas as $rowsiswa) {
                            $i++;
                          ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rowsiswa->nama ;?></td>
                            <td><a href="<?php echo site_url('penilaian/penilaian/cetak_rapor/'.$rowsiswa->nisn).'/'.$id_kelas_reguler_berjalan; ?>" class="btn btn-default">Lihat Rapor</a></td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    
                  </div>

                  <!-- /.box-body -->
                </div>

              </div>
              <!-- /.tab-pane -->


              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12 ">

          <!-- Profile Image -->

          <!-- /.box -->
        </div>

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
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
 <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
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


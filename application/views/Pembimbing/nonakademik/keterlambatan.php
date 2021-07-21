<script type="text/javascript">
/*  function fetch_select(val)
  {
      
     $('#divprogram').html('<option value="">Please Wait ... </option>');
     $.ajax({
     type: 'post',
     url: 'get_program.php',
     //data: 'nama=' + jsnama + '&instansi=' + jsinstansi + '&hp=' + jshp  + '&email=' + jsemail,
     data: {
       jenis:val
     },
     success: function (response) {
       document.getElementById("divprogram").innerHTML=response; 
     }
     });
     
     $('#divhari').html('<option value="">Please Wait ... </option>');
     $.ajax({
     type: 'post',
     url: 'get_hari.php',
     //data: 'nama=' + jsnama + '&instansi=' + jsinstansi + '&hp=' + jshp  + '&email=' + jsemail,
     data: {
       jenis:val
     },
     success: function (response) {
       document.getElementById("divhari").innerHTML=response+'<option value="ketik sendiri">Ketik Sendiri...</option>'; 
     }
     });
     
     $('#divwaktu').html('<option value="">Please Wait ... </option>');
     $.ajax({
     type: 'post',
     url: 'get_waktu.php',
     //data: 'nama=' + jsnama + '&instansi=' + jsinstansi + '&hp=' + jshp  + '&email=' + jsemail,
     data: {
       jenis:val
     },
     success: function (response) {
       document.getElementById("divwaktu").innerHTML=response; 
     }
     });
  } 
  */
  function fetch_select_siswa(val)
  {
     $('#cbsiswa').html('<option value="">Please Wait ... </option>');
     $.ajax({
     type: 'post',
     url: '<?php echo site_url('nonakademik/getsiswa'); ?>/'+val,
     //data: 'nama=' + jsnama + '&instansi=' + jsinstansi + '&hp=' + jshp  + '&email=' + jsemail,
     data: {
       program:val
     },
     success: function (response) {
       document.getElementById("cbsiswa").innerHTML=response; 
     }
     });
  } 
  </script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Keterlambatan Siswa SMP Yogyakarta<br></center>
      <center><small>Tahun Ajaran 2016-2017</small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('nonakademik');?>">Dashboard</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 ">
          
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-left">
              <li class="active"><a href="<?php echo site_url('nonakademik/keterlambatan'); ?>">Keterlambatan Siswa</a></li>
              <li>
                <a href="<?php echo site_url('nonakademik/grafik'); ?>" class="dropdown-toggle" data-toggle="dropdown">Grafik</a>
                <ul class="dropdown-menu">
                              <!-- <li><a tabindex="-1" href="<?php //echo site_url('nonakademik/grafik'); ?>#Perkelas">Perkelas</a></li>
                                <li><a tabindex="-1" href="<?php //echo site_url('nonakademik/grafik'); ?>#Mingguan">Mingguan</a></li> -->
                                <li><a tabindex="-1" href="<?php echo site_url('nonakademik/grafik'); ?>#Bulanan">Bulanan</a></li>
                                <li><a tabindex="-1" href="<?php echo site_url('nonakademik/grafik'); ?>#Tahunan">Tahunan</a></li>
                              </ul>
                            </li>
                          </ul>
                          <div class="tab-content no-padding">
                            <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                              <div class="box">
                                <div class="box-body">
                                  <h4 class="box-title">Form Siswa Terlambat</h4>
                                </div>
                                <form role="form" method="post" action="<?php echo site_url('nonakademik/simpanketerlambatan'); ?>">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
                                      <div class="col-md-2 col-sm-2 col-xs-10">
                                        <select class="select2_single form-control" tabindex="-1" onchange="fetch_select_siswa(this.value);">
                                          <option>-Pilih Kelas-</option>
                                            <?php
                                            foreach ($kelas_reguler as $row) {
                                            ?>
                                            <option value="<?php echo $row->id_kelas_reguler; ?>" ><?php echo $row->nama_kelas; ?></option>
                                            <?php
                                            }
                                            ?>
                                          </select>
                                        </div>
                                      </div>
                                      <br/>
                                      <br/>
                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">NISN</label>
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                          <!--input type="text" name="nisn" required="required" class="form-control" placeholder="Nomor Induk Siswa Nasional" style="font-size: 14px"-->
                                          <select name="nisn" required="required" class="form-control" placeholder="Nomor Induk Siswa Nasional" style="font-size: 14px" id="cbsiswa">
                                            <option value="">-Pilih Siswa-</option>
                                          </select>
                                        </div>
                                      </div>
                                      <br/>
                                      <br/>
                                      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-10">Tanggal Terlambat</label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input type="date" name="tgl_terlambat"/>
                                        </div>
                                      </div>
                                      <br/>
                                      <br/>
                                      
                                      <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                                        <div class="col-md-4 col-sm-4 col-xs-10">
                                          <input type="text" name="keterangan" class="form-control col-md-7 col-xs-12" placeholder="Isi Keterangan Siswa" style="font-size: 14px">
                                        </div>
                                      </div>

                                    </div>
                                    <div class="box-footer">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>


                            <div class="tab-content no-padding">
                              <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                                <div class="box">
                                  <div class="box-body">
                                    <center><h3>Data Keterlambatan siswa</h3></center>
                                    <select name="id_tahun_ajaran" id="id_tahun_ajaran" onchange="document.location='<?php echo site_url('nonakademik/keterlambatan');?>/' + document.getElementById('id_tahun_ajaran').value;">
                                      <option value=""></option>  
                                      <?php
                                      foreach ($tahunajaran as $rowtahunajaran) {
                                        ?>
                                        <option value="<?php echo $rowtahunajaran->id_tahun_ajaran; ?>" <?php if ($id_tahun_ajaran == $rowtahunajaran->id_tahun_ajaran) { echo " selected"; } ?>><?php echo $rowtahunajaran->nama_file_kaldik; ?></option>  
                                        <?php
                                      }
                                      ?>
                                    </select>
                                    <br/><br/>
                                    <table class="table table-bordered">
                                      <tr style="background-color: #53c68c">
                                        <th>Semester</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Jumlah Terlambat</th>
                                      </tr>
                                      <?php
                                      foreach ($keterlambatan as $row_keterlambatan) {
                                        ?>
                                        <tr >
                                          <td> Semester 1</td>
                                          <td>
                                            <a data-toggle="modal" data-show="true" href="<?php echo site_url('nonakademik/dataketerlambatan/'.$id_tahun_ajaran."/".$row_keterlambatan->jml); ?>" data-target="#myModal<?php echo $row_keterlambatan->orang ?>"><?php echo $row_keterlambatan->orang; ?> Siswa</a>
                                          </td>
                                          <td>
                                            <?php echo $row_keterlambatan->jml; ?> Kali
                                          </td>
                                        </tr>

                                        <div id="myModal<?php echo $row_keterlambatan->orang ?>" class="modal fade" role="dialog">
                                          <div class="modal-dialog modal-md">

                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Edit Data</h4>
                                              </div>
                                              <div class="modal-body">
                                                
                                              </div>
                                            </div>

                                          </div>
                                        </div>


                                        <?php
                                      }
                                      ?>
                                    </table>
                                  </div>

                                </div>
                              </div>            
                            </section>
                          </div>
                        </section>
                        <!-- /.content -->
                      </div>
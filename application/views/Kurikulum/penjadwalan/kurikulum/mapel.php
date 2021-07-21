<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Halaman Kelola Data Mata Pelajaran<br></center>
       <!--  <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
   
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#kelolamapel" data-toggle="tab"><?php if ($edit_mapel) { echo "Edit"; } else { echo "Tambah"; } ?> Mata Pelajaran</a></li>
              <li><a href="#datamapel" data-toggle="tab">Data Mata Pelajaran </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="kelolamapel">
              <div class="box-header">
              <form>
                      <select name="pilihgrade" id="pilihgrade" onchange="document.getElementById('grade').value = document.getElementById('pilihgrade').value; if (document.getElementById('pilihgrade').value == 'Ekskul') { document.getElementById('formmapel').style.display = 'none'; document.getElementById('formekskul').style.display = 'block'; } else { document.getElementById('formmapel').style.display = 'block'; document.getElementById('formekskul').style.display = 'none'; }">
                        <option value="">Pilih Jenjang</option>

                        <?php
                      $i=0;
                      foreach ($tabel_kelasreguler as $row_kelasreguler) {
                        $i++;
                        ?>
                          <option value="<?php echo $row_kelasreguler->jenjang; ?>" <?php if (@$edit_mapel->jenjang == $row_kelasreguler->jenjang) { echo " selected"; } ?>> KELAS <?php echo $row_kelasreguler->jenjang; ?></option>
                        <?php
                        }
                      ?>
                      <tr>
                      </select>
              </form>
            </div>
               <form id="formmapel" style="display:block;" class="form-horizontal formmapel" method="post" action="<?php echo site_url('kurikulum/simpanmapel'); ?>">
                  <input type="hidden" name="id_mapel" id="id_mapel"  value="<?php echo @$edit_mapel->id_mapel; ?>"/>
                  <input type="hidden" name="id_namamapel_old" id="id_namamapel_old"  value="<?php echo @$edit_mapel->id_namamapel; ?>"/>
                  <input type="hidden" name="grade" id="grade"  value="<?php if (@$edit_mapel->jenjang != "") { echo @$edit_mapel->jenjang; } else { echo "7"; } ?>"/>
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Pilih Mata Pelajaran</label>
                        <div class="col-sm-4">
                            <select class="kodemapel" name="id_namamapel" id="id_namamapel">
                              <option value="">Pilih mapel</option>
                              <?php
                            foreach ($tabel_namamapel as $row_namamapel) {
                            ?>
                            <option value="<?php echo $row_namamapel->id_namamapel; ?>" <?php if ($row_namamapel->id_namamapel == @$edit_mapel->id_namamapel) { echo " selected"; } ?>><?php echo $row_namamapel->nama_mapel; ?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">KKM</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="kkm" name="kkm" placeholder="KKM"  value="<?php echo @$edit_mapel->kkm; ?>">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Jam Belajar </br> per minggu</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="jam_belajar" name="jam_belajar" placeholder="Jam Belajar"  value="<?php echo @$edit_mapel->jam_belajar; ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>

               
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
              <div> <?php echo $this->session->flashdata('warning') ?></div>
              <div class="tab-pane" id="datamapel">
              <!-- DATA MAPEL KELAS 7 -->
                <div class="box">
                  <div class="box-header" style="background-color:     #5c8a8a">
                    <h3 class="box-title" style="color:white">Data Mata Pelajaran Semua Kelas</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Mata Pelajaran</th>
                        <th>KKM</th>
                        <th>Jam Belajar per Minggu</th>
                        <th>Kelas</th>
                        <th>Jumlah Jam Belajar<br>
                        (Jam Belajar x Jumlah Kelas)</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      $i=0;
                      $nama_mapel = "";
                      $kkm = "";
                      $jam_belajar = "";
                      $jenjang = "";
                      foreach ($tabel_mapel as $row_mapel) {
                        if (($nama_mapel != $row_mapel->nama_mapel) || ($kkm != $row_mapel->kkm) || ($jam_belajar != $row_mapel->jam_belajar) || ($jenjang != $row_mapel->jenjang)) {

                        $i++;
                      ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                        <td><?php echo $row_mapel->nama_mapel; ?></td>
                        <td><?php echo $row_mapel->kkm; ?></td>
                        <td><?php echo $row_mapel->jam_belajar; ?></td>
                        <td><?php echo $row_mapel->jenjang; ?></td>
                        <td><?php echo ($row_mapel->totalkelas*$row_mapel->jam_belajar); ?></td>
                        <td> 
                          <a class="btn btn-block btn-primary button-action btnedit" href="<?php echo site_url('kurikulum/mapel/'.$row_mapel->id_kelas_reguler.'/'.$row_mapel->jenjang.'/'.str_replace(" ", "_", $row_mapel->id_namamapel)); ?>" > Edit </a>
                          <a onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-primary button-action btnhapus" href="<?php echo site_url('kurikulum/hapusmapelbyidjenjang/'.$row_mapel->id_kelas_reguler.'/'.$row_mapel->jenjang.'/'.str_replace(" ", "_", $row_mapel->id_namamapel)); ?>" > Hapus </a>
                        </td>               
                      </tr>
                      <?php
                          $nama_mapel = $row_mapel->nama_mapel;
                          $kkm = $row_mapel->kkm;
                          $jam_belajar = $row_mapel->jam_belajar;
                          $jenjang = $row_mapel->jenjang;
                        }
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>

              <!-- DATA MAPEL KELAS 8 -->
                

              <!-- DATA MAPEL KELAS 9 -->
                
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              <div class="tab-pane" id="editdatamapel">
              <form class="form-horizontal formmapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="IPA">  
                        </div>
                      </div>


                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">KKM</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="80">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Jam Belajar</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="7">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <td><button type="submit" class="btn btn-danger" href="#datamapel" data-toggle="tab">Submit</button></td><td> <button class="btn btn-danger" href="#datamapel" data-toggle="tab">Back</button></td>
                    </div>
                  </div>
                </form>

                </div>

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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper
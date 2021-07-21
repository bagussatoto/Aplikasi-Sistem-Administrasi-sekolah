<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Jadwal Ekstrakurikuler<br></center>
      <!--  <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row" >
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
           <li class="active"><a href="#dataekskul" data-toggle="tab"><?php if (@$edit_jadwalekskul) { echo "Edit"; } else { echo "Tambah"; } ?> Jadwal Ekskul</a></li>
           <li><a href="#dataekstrakurikuler" data-toggle="tab">Data Ekskul </a></li>
         </ul>


         <div class="tab-content">
          <div class="active tab-pane" id="dataekskul">
            <form method="post" action="<?php echo site_url('kurikulum/simpanjadwalekskul'); ?>">
              <input type="hidden" name="id_jadwal_ekskul" value="<?php echo @$edit_jadwalekskul->id_jadwal_ekskul; ?>">
              <table id="example1" class="table table-bordered table-striped tabelmapel">

                <tbody>

                  <tr>
                    <tr>
                      <th>Hari</th>
                      <th>
                       <select required="required" name="hari" value="<?php echo $row_jadwalekskul->hari; ?>">
                        <option value="">Pilih Hari</option>
                        <option value="Senin" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Senin") echo "selected";?>> Senin </option>
                        <option value="Selasa" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Selasa") echo "selected";?>> Selasa </option>
                        <option value="Rabu" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Rabu") echo "selected";?>> Rabu </option>
                        <option value="Kamis" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Kamis") echo "selected";?>> Kamis </option>
                        <option value="Jumat" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Jumat") echo "selected";?>> Jumat</option>
                        <option value="Sabtu" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Sabtu") echo "selected";?>> Sabtu </option>
                        <option value="Minggu" <?php if (isset($row_jadwalekskul->hari) && $row_jadwalekskul->hari=="Minggu") echo "selected";?>> Minggu </option>
                      </select> <!-- <input type="text" name="hari" placeholder="hari" value="<?php echo @$edit_jadwalekskul->hari; ?>"> --></th>
                    </tr>

                    <tr>
                      <th>Jam Mulai</th>
                      <th><input type="time" name="jam_mulai" placeholder="Waktu" value="<?php echo @$edit_jadwalekskul->jam_mulai; ?>"></th>
                    </tr>
                    <tr>
                      <th>Jam Selesai</th>
                      <th><input type="time" name="jam_selesai" placeholder="Waktu" value="<?php echo @$edit_jadwalekskul->jam_selesai; ?>"></th>
                    </tr>

                    <tr>
                      <th>Jenis Ekstrakurikuler</th>
                      <th>
                        <select class="ekskul" name="id_jenis_kls_tambahan" id="kelas1" onchange="fetch_select_ekskul(this.value, 'ekskul1');">
                          <option value="">Pilih Ekskul</option>
                          <?php
                          foreach ($tabel_jenisklstambahan as $row_jenisklstambahan) {
                            ?>
                            <option value="<?php echo $row_jenisklstambahan->id_jenis_kls_tambahan; ?>" <?php if (@$edit_jadwalekskul->id_jenis_kls_tambahan == $row_jenisklstambahan->id_jenis_kls_tambahan) { echo " selected"; } ?>><?php echo $row_jenisklstambahan->jenis_kls_tambahan; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                      </th>
                    </tr>


                  </tr>
                  <tr>
                    <th>Tempat</th>
                    <th><input type="text" name="tempat" placeholder="tempat" value="<?php echo @$edit_jadwalekskul->tempat; ?>">
                    </th>

                  </tr>
                  <tr>
                    <th>Pembimbing</th>
                    <th>
                      <select class="Pembimbing" name="id_pembimbing">
                        <option value="">Pilih Pembimbing</option>
                        <?php
                        foreach ($tabel_pembimbing as $row_pembimbing) {
                          ?>
                          <option value="<?php echo $row_pembimbing->id_pembimbing; ?>"  <?php if (@$edit_jadwalekskul->id_pembimbing == $row_pembimbing->id_pembimbing) { echo " selected"; } ?>><?php echo $row_pembimbing->nama_pembimbing; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                    </th>

                  </tr>

                </tbody>

              </table>
              <button class="btn btn-danger" type="submit">Submit</button>
            </form>

          </div>
          <!-- /.tab-pane -->

          <!-- /.tab-pane -->
          <div> <?php echo $this->session->flashdata('warning') ?></div>
          <div class="tab-pane" id="dataekstrakurikuler">
            <div class="box-body">
              <div class="box-header" style="background-color:     #5c8a8a">
                <h3 class="box-title" style="color:white">Data Jadwal Ekstrakurikuler </h3>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="fit">No.</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Jenis Ekstrakurikuler</th>
                    <th>Tempat</th>
                    <th>Pembimbing</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  foreach ($tabel_jadwalekskul as $row_jadwalekskul) {
                    $i++;
                    ?>
                    <tr>
                      <td class="fit"><?php echo $i; ?></td>
                      <td><?php echo $row_jadwalekskul->hari; ?></td>
                      <td><?php echo substr($row_jadwalekskul->jam_mulai, 0, 5); ?></td>
                      <td><?php echo substr($row_jadwalekskul->jam_selesai, 0, 5); ?></td>
                      <td><?php echo $row_jadwalekskul->jenis_kls_tambahan; ?></td>
                      <td><?php echo $row_jadwalekskul->tempat; ?></td>
                      <td><?php echo $row_jadwalekskul->nama_pembimbing; ?></td>
                      <td> 
                        <a class="btn btn-block btn-primary button-action btnedit" href="<?php echo site_url('kurikulum/ekstrakurikuler/'.$row_jadwalekskul->id_jadwal_ekskul); ?>" > Edit </a>
                        <a onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-primary button-action btnhapus" href="<?php echo site_url('kurikulum/hapusjadwalekskul/'.$row_jadwalekskul->id_jadwal_ekskul); ?>" > Hapus </a>
                      </td>               
                    </tr>
                    <?php
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

        <!-- /.tab-pane -->

      </div>
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.nav-tabs-custom -->
</div>
</div>
</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper
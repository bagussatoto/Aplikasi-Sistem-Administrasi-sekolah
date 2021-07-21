<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Halaman Kelola Mata Pelajaran<br></center>
      <!-- <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> -->
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
            <li class="active"><a href="#tambah_mapel" data-toggle="tab">Tambah Mata Pelajaran</a></li>
            <!-- <li class="active"><a href="#datakelolamapel" data-toggle="tab"><?php if (@$edit_mapel) { echo "Edit"; } else { echo "Tambah"; } ?> Mata Pelajaran </a></li> -->
            <li><a href="#datanamamapel" data-toggle="tab">Data Mata Pelajaran </a></li>
          </ul>


          <div class="tab-content">
            <!-- <div class="active tab-pane" id="datakelolamapel">
             <form id="formmapel" style="display:block;" class="form-horizontal formmapel" method="post" action="<?php echo site_url('kurikulum/simpannamamapel'); ?>">
               <input type="hidden" name="id_namamapel" id="id_namamapel"  value="<?php echo @$edit_mapel->id_namamapel; ?>"/>
               <p style="color: #ff0000"> > Isi <b>Nama Mata Pelajaran</b> dengan <b>Mata Pelajaran</b> yang ada di sekolah.<br>
                > <b>Pilih Warna</b> adalah untuk memberi warna agar berbeda pada setiap mata pelajaran (berguna pada Jadwal Mapel)

               </p>


               <div class="bigbox-mapel"> 
                <div class="box-mapel">
                  <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mata Pelajaran" value="<?php echo @$edit_mapel->nama_mapel; ?>">
                    </div>
                  </div>

                  <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Pilih Warna</label>
                    <div class="col-sm-4">
                      <select type="text" class="form-control" id="warna" name="warna" placeholder="Warna" value=" style="width: 120px;">
                        <option value="">...</option>
                            <option  value="#ff0000" style="background-color: #ff0000;" <?php if (@$edit_mapel->warna == "#ff0000") { echo " selected"; } ?>>Merah</option>
                            <option  value="#00ff00" style="background-color: #00ff00;" <?php if (@$edit_mapel->warna == "#00ff00") { echo " selected"; } ?>>Hijau Tua</option>
                            <option  value="#bfed87" style="background-color: #bfed87;" <?php if (@$edit_mapel->warna == "#bfed87") { echo " selected"; } ?>>Hijau Muda</option>
                            <option  value="#0000ff" style="background-color: #0000ff;" <?php if (@$edit_mapel->warna == "#0000ff") { echo " selected"; } ?>>Biru Tua</option>
                            <option  value="#62d5db" style="background-color: #62d5db;" <?php if (@$edit_mapel->warna == "#62d5db") { echo " selected"; } ?>>Biru Muda</option>
                            <option  value="#ffff00" style="background-color: #ffff00;" <?php if (@$edit_mapel->warna == "#ffff00") { echo " selected"; } ?>>Kuning</option>
                            <option  value="#a331c6" style="background-color: #a331c6;" <?php if (@$edit_mapel->warna == "#a331c6") { echo " selected"; } ?>>Ungu Tua</option>
                            <option  value="#d38fe8" style="background-color: #d38fe8;" <?php if (@$edit_mapel->warna == "#d38fe8") { echo " selected"; } ?>>Ungu Muda</option>
                            <option  value="#cccccc" style="background-color: #cccccc;" <?php if (@$edit_mapel->warna == "#cccccc") { echo " selected"; } ?>>Abu-abu</option>
                            <option  value="#efad13" style="background-color: #efad13;" <?php if (@$edit_mapel->warna == "#efad13") { echo " selected"; } ?>>Oren</option>
                            <option  value="#e89696" style="background-color: #e89696;" <?php if (@$edit_mapel->warna == "#e89696") { echo " selected"; } ?>>Pink</option>
                            <option  value="#ba8c48" style="background-color: #ba8c48;" <?php if (@$edit_mapel->warna == "#ba8c48") { echo " selected"; } ?>>Coklat</option>
                            <option  value="#eddeb8" style="background-color: #eddeb8;" <?php if (@$edit_mapel->warna == "#eddeb8") { echo " selected"; } ?>>Krem</option>
                            
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Tambah</button>
                </div>
              </div>
            </form>
          </div> -->
          <!-- /.tab-pane -->



          <div class="active tab-pane" id="tambah_mapel">
            <div class="box">
              <div class="box-header" style="background-color:     #5c8a8a">
                <h3 class="box-title" style="color:white">Tambah Otomatis</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="fit">No</th>
                      <th>Mata Pelajaran</th>
                      <th>Warna</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=1;
                    foreach ($tabel_mapel_default as $row_mapel_default) {
                      $flag = 0;

                      foreach ($tabel_namamapel as $row_namamapel) {
                        if (strtolower($row_mapel_default->nama_mapel) == strtolower($row_namamapel->nama_mapel)){
                          $flag++;
                        }   
                      }

                      if ($flag == 0) { ?>
                        <tr>
                          <form id="formmapel" style="display:block;" class="form-horizontal formmapel" method="post" action="<?php echo site_url('kurikulum/simpannamamapel'); ?>">
                            <input type="hidden" class="form-control" id="nama" name="nama" value="<?php echo $row_mapel_default->nama_mapel ?>">
                            <td class="fit"><?php echo $i; ?></td>
                            <td><?php echo $row_mapel_default->nama_mapel; ?></td>
                            <td>
                              <select type="text" class="form-control" id="warna" name="warna" placeholder="Warna" value=" style="width: 120px;">
                                <option  value="#ff0000" style="background-color: #ff0000;" <?php if ($i == 1) { echo " selected"; } ?>>Merah</option>
                                <option  value="#00ff00" style="background-color: #00ff00;" <?php if ($i == 2) { echo " selected"; } ?>>Hijau Tua</option>
                                <option  value="#bfed87" style="background-color: #bfed87;" <?php if ($i == 3) { echo " selected"; } ?>>Hijau Muda</option>
                                <option  value="#0000ff" style="background-color: #0000ff;" <?php if ($i == 4) { echo " selected"; } ?>>Biru Tua</option>
                                <option  value="#62d5db" style="background-color: #62d5db;" <?php if ($i == 5) { echo " selected"; } ?>>Biru Muda</option>
                                <option  value="#ffff00" style="background-color: #ffff00;" <?php if ($i == 6) { echo " selected"; } ?>>Kuning</option>
                                <option  value="#a331c6" style="background-color: #a331c6;" <?php if ($i == 7) { echo " selected"; } ?>>Ungu Tua</option>
                                <option  value="#d38fe8" style="background-color: #d38fe8;" <?php if ($i == 8) { echo " selected"; } ?>>Ungu Muda</option>
                                <option  value="#cccccc" style="background-color: #cccccc;" <?php if ($i == 9) { echo " selected"; } ?>>Abu-abu</option>
                                <option  value="#efad13" style="background-color: #efad13;" <?php if ($i == 10) { echo " selected"; } ?>>Oren</option>
                                <option  value="#e89696" style="background-color: #e89696;" <?php if ($i == 11) { echo " selected"; } ?>>Pink</option>
                                <option  value="#ba8c48" style="background-color: #ba8c48;" <?php if ($i == 12) { echo " selected"; } ?>>Coklat</option>
                                <option  value="#eddeb8" style="background-color: #eddeb8;" <?php if ($i == 13) { echo " selected"; } ?>>Krem</option>     
                              </select>
                            </td>
                            <!-- <td><span style="background-color: <?php echo $row_mapel_default->warna; ?>;"><?php echo $row_mapel_default->warna; ?></span></td> -->
                            <td>
                              <button type="submit" class="btn btn-info">Tambahkan</button>
                            </td>
                          </form>           
                        </tr> <?php
                      $i++;  
                      } 
                      ?>
                       
                      <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div>
              <div class="box-header" style="background-color:     #5c8a8a">
                <h3 class="box-title" style="color:white">Tambah Manual</h3>
              </div>
              <form id="formmapel" style="display:block;" class="form-horizontal formmapel" method="post" action="<?php echo site_url('kurikulum/simpannamamapel'); ?>">
                <input type="hidden" name="id_namamapel" id="id_namamapel"  value="<?php echo @$edit_mapel->id_namamapel; ?>"/>
                <p style="color: #ff0000"> > Isi <b>Nama Mata Pelajaran</b> dengan <b>Mata Pelajaran</b> yang ada di sekolah.<br>
                  > <b>Pilih Warna</b> adalah untuk memberi warna agar berbeda pada setiap mata pelajaran (berguna pada Jadwal Mapel)

                </p>


                <div class="bigbox-mapel"> 
                  <div class="box-mapel">
                    <div class="form-group formgrup jarakform">
                      <label for="inputKurikulum" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mata Pelajaran" value="<?php echo @$edit_mapel->nama_mapel; ?>">
                      </div>
                    </div>

                    <div class="form-group formgrup jarakform">
                      <label for="inputKurikulum" class="col-sm-2 control-label">Pilih Warna</label>
                      <div class="col-sm-4">
                        <select type="text" class="form-control" id="warna" name="warna" placeholder="Warna" value=" style="width: 120px;">
                          <option value="">...</option>
                              <option  value="#ff0000" style="background-color: #ff0000;" <?php if (@$edit_mapel->warna == "#ff0000") { echo " selected"; } ?>>Merah</option>
                              <option  value="#00ff00" style="background-color: #00ff00;" <?php if (@$edit_mapel->warna == "#00ff00") { echo " selected"; } ?>>Hijau Tua</option>
                              <option  value="#bfed87" style="background-color: #bfed87;" <?php if (@$edit_mapel->warna == "#bfed87") { echo " selected"; } ?>>Hijau Muda</option>
                              <option  value="#0000ff" style="background-color: #0000ff;" <?php if (@$edit_mapel->warna == "#0000ff") { echo " selected"; } ?>>Biru Tua</option>
                              <option  value="#62d5db" style="background-color: #62d5db;" <?php if (@$edit_mapel->warna == "#62d5db") { echo " selected"; } ?>>Biru Muda</option>
                              <option  value="#ffff00" style="background-color: #ffff00;" <?php if (@$edit_mapel->warna == "#ffff00") { echo " selected"; } ?>>Kuning</option>
                              <option  value="#a331c6" style="background-color: #a331c6;" <?php if (@$edit_mapel->warna == "#a331c6") { echo " selected"; } ?>>Ungu Tua</option>
                              <option  value="#d38fe8" style="background-color: #d38fe8;" <?php if (@$edit_mapel->warna == "#d38fe8") { echo " selected"; } ?>>Ungu Muda</option>
                              <option  value="#cccccc" style="background-color: #cccccc;" <?php if (@$edit_mapel->warna == "#cccccc") { echo " selected"; } ?>>Abu-abu</option>
                              <option  value="#efad13" style="background-color: #efad13;" <?php if (@$edit_mapel->warna == "#efad13") { echo " selected"; } ?>>Oren</option>
                              <option  value="#e89696" style="background-color: #e89696;" <?php if (@$edit_mapel->warna == "#e89696") { echo " selected"; } ?>>Pink</option>
                              <option  value="#ba8c48" style="background-color: #ba8c48;" <?php if (@$edit_mapel->warna == "#ba8c48") { echo " selected"; } ?>>Coklat</option>
                              <option  value="#eddeb8" style="background-color: #eddeb8;" <?php if (@$edit_mapel->warna == "#eddeb8") { echo " selected"; } ?>>Krem</option>
                              
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Tambah</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- /.tab-pane -->
          <div> <?php echo $this->session->flashdata('warning') ?></div>
          <div class="tab-pane" id="datanamamapel">
            <!-- DATA MAPEL KELAS 7 -->
            <div class="box">
              <div class="box-header" style="background-color:     #5c8a8a">
                <h3 class="box-title" style="color:white">Data Mata Pelajaran</h3>
              </div>
              <!-- /.box-header -->

              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="fit">No</th>
                      <th>Mata Pelajaran</th>
                      <th>Warna</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    ?>
                    <?php
                    $i=0;
                    foreach ($tabel_namamapel as $row_namamapel) {
                      $i++; 
                      ?>
                      <tr>

                        <td class="fit"><?php echo $i; ?></td>
                        <td><?php echo $row_namamapel->nama_mapel; ?></td>
                        <td><span style="background-color: <?php echo $row_namamapel->warna; ?>;"><?php echo $row_namamapel->warna; ?></span></td>
                        <td> 
                          <a class="btn btn-block btn-primary button-action btnedit edit_mapel" href="#" data_id="<?php echo $row_namamapel->id_namamapel; ?>" data_nama="<?php echo $row_namamapel->nama_mapel; ?>" data_warna="<?php echo $row_namamapel->warna; ?>"> Edit </a>
                          <a onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-primary button-action btnhapus" href="<?php echo site_url('kurikulum/hapusnamamapel/'.$row_namamapel->id_namamapel); ?>" > Hapus </a>
                        </td>               
                      </tr>
                      <?php

                      ?> 
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

<div class="modal fade" id="edit_mapel_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin-top: 50vh; transform: translateY(-175px)">
    <div class="modal-content" style="height:350px; padding: 20px;">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Mata Pelajaran</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formmapel" style="display:block;" class="form-horizontal" method="post" action="<?php echo site_url('kurikulum/simpannamamapel'); ?>#datanamamapel">
      <div class="modal-body">
          <input type="hidden" name="id_namamapel" id="id_mapel_modal"  value=""/>

            <div class="bigbox-mapel"> 
            <div class="box-mapel">
              <div class="form-group formgrup jarakform">
                <label for="inputKurikulum" class="col-sm-4 control-label" style="text-align: left">Nama Mata Pelajaran</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_mapel_modal" name="nama" placeholder="Nama Mata Pelajaran" value="">
                </div>
              </div>

              <div class="form-group formgrup jarakform">
                <label for="inputKurikulum" class="col-sm-4 control-label" style="text-align: left">Pilih Warna</label>
                <div class="col-sm-8">
                  <select type="text" class="form-control" id="warna" name="warna" placeholder="Warna" value=" style="width: 120px;">
                    <option id="ff0000"  value="#ff0000" style="background-color: #ff0000;">Merah</option>
                    <option id="00ff00"  value="#00ff00" style="background-color: #00ff00;">Hijau Tua</option>
                    <option id="bfed87"  value="#bfed87" style="background-color: #bfed87;">Hijau Muda</option>
                    <option id="0000ff"  value="#0000ff" style="background-color: #0000ff;">Biru Tua</option>
                    <option id="62d5db"  value="#62d5db" style="background-color: #62d5db;">Biru Muda</option>
                    <option id="ffff00"  value="#ffff00" style="background-color: #ffff00;">Kuning</option>
                    <option id="a331c6"  value="#a331c6" style="background-color: #a331c6;">Ungu Tua</option>
                    <option id="d38fe8"  value="#d38fe8" style="background-color: #d38fe8;">Ungu Muda</option>
                    <option id="cccccc"  value="#cccccc" style="background-color: #cccccc;">Abu-abu</option>
                    <option id="efad13"  value="#efad13" style="background-color: #efad13;">Oren</option>
                    <option id="e89696"  value="#e89696" style="background-color: #e89696;">Pink</option>
                    <option id="ba8c48"  value="#ba8c48" style="background-color: #ba8c48;">Coklat</option>
                    <option id="eddeb8"  value="#eddeb8" style="background-color: #eddeb8;">Krem</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->

  <script>
    $(document).ready(function() {
      $(".edit_mapel").click(function() {
        var id = $(this).attr('data_id')
        var nama = $(this).attr('data_nama')
        var warna = $(this).attr('data_warna')

        $("#id_mapel_modal").attr('value', id)
        $("#nama_mapel_modal").attr('value', nama)
        $(`${warna}`).attr('selected', true)
        $("#edit_mapel_modal").modal('show')
      })

      if (location.hash) {
        $("a[href='" + location.hash + "']").tab("show");
      }
      $(document.body).on("click", "a[data-toggle='tab']", function(event) {
          location.hash = this.getAttribute("href");
      });
    })

    $(window).on("popstate", function() {
      var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
      $("a[href='" + anchor + "']").tab("show");
    });
  </script>
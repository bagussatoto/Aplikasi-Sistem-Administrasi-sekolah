<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;"><b>Daftar Ulang</b><br></center>
      <center><small>Penerimaan Peserta Didik Baru</small></center>
    </h1>
  </section>
  <section class="content">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
       <!-- page content -->
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pengaturan Formulir </a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Ketentuan </a>
            </li>
            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pendaftar </a>
            </li>
            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pengumuman</a>
            </li>
          </ul>

          <?php echo $this->session->userdata('aktif'); ?>  <!-- formulir aktif -->
          <?php echo $this->session->userdata('nonaktif'); ?>  <!-- formulir nonaktif -->
          <?php echo $this->session->userdata('pesan'); ?>  <!-- ketentuan -->
          <?php echo $this->session->userdata('baru'); ?>  <!-- update ketentuan -->
          <?php echo $this->session->userdata('berkas'); ?>  
          <?php echo $this->session->userdata('pengumuman'); ?>  <!-- pengumuman -->
          <?php echo $this->session->userdata('pengumumanupdate'); ?> <!-- pengumuman update -->

          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
              <div class="form-group">
                <h4 class="box-title"><center><b>Pengaturan Formulir</b></center></h4>    
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('ppdb/admin/daftarulang_ppdb/saveformppdb'); ?>">  
                  <p><center>Berikan centang pada atribut formulir yang ingin dikeluarkan sebagai syarat berkas daftar ulang sebagai Peserta Didik Baru:
                  </center></p><br> 
                  <div class="form-group">
                    <script type="text/javascript">
                    function cek() {
                      var sdh = true;
                      if ((document.getElementById('nilai5').checked == true) && (document.getElementById('atribut5').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai6').checked == true) && (document.getElementById('atribut6').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai7').checked == true) && (document.getElementById('atribut7').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai8').checked == true) && (document.getElementById('atribut8').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai9').checked == true) && (document.getElementById('atribut9').value == "")) { sdh = false; }
                      if (sdh == false) { alert('Nama "Berkas Lain" yang dicentang harus diisi!'); }
                      return sdh;
                    }
                    </script>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                      <?php
                      $i=1;
                      foreach ($tabel_form_daftarulang_ppdb as $form) 
                      { 
                        if ($i<5) 
                        {
                          ?><input type="checkbox" class="flat" name="nilai<?php echo $form->id_form_daftarulang_ppdb; ?>" value="1" 
                          <?php 
                          if ($form->nilai == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>
                          > <label><?php echo $form->atribut; ?></label>
                          <br> 
                          <?php 
                        }
                        elseif ($form!==NULL) 
                        { 
                          if ($form->id_form_daftarulang_ppdb < 10) 
                          {
                            ?><input type="checkbox" class="flat" id="nilai<?php echo $form->id_form_daftarulang_ppdb; ?>" name="nilai<?php echo $form->id_form_daftarulang_ppdb; ?>" value="1" <?php 
                            if ($form->nilai == "1") 
                            {
                              echo " checked"; 
                            } 
                            ?>> <label style="font-style: normal;">Berkas lain yg ingin dilampirkan</label> 
                            <input type="text" id="atribut<?php echo $form->id_form_daftarulang_ppdb; ?>" name="atribut<?php echo $form->id_form_daftarulang_ppdb; ?>" placeholder=" Nama Berkas" value="<?php echo $form->atribut; ?>"> <br>
                            <?php 
                          }
                        }
                        else
                        {
                          echo "error";
                        }
                        $i=$i+1;
                      }
                      ?>
                      <br>
                      <div class="modal-footer" align="left">
                        <a href="<?php echo site_url('ppdb/admin/daftarulang_ppdb/nonaktif'); ?>" class="btn btn-danger">Non Aktifkan Formulir</a>
                        <button class="btn btn-default" type="reset">Reset</button>
                        <button type="Save" class="btn btn-success" onclick="return cek();">Aktifkan Formulir</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form> 
            </div>
  <!-- ========================================= end tab 1 ============================================== -->

              <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                <h4><center><b>Ketentuan Daftar Ulang PPDB</b></center></h4><br>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('ppdb/admin/daftarulang_ppdb/saveketentuan'); ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Ketentuan</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_ketentuan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Isi Ketentuan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" required="required" class="form-control" id="inputName" placeholder="Name" name="isi_ketentuan" accept="application/pdf">
                          <textarea name="descr" id="descr" style="display:none;"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal berlaku </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" class="form-control" required="required" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tgl_berlaku">
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button class="btn btn-default" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
                  <br>
            </form>

              <table class="table table-striped projects" id="example1">
              <thead>
                <tr>
                  <th style="width: 5%">No </th>
                  <th style="width: 70%">Judul Ketentuan</th>
                  <th style="width: 10%">Tanggal</th>
                  <th style="width: 5%"></th>
                  <th style="width: 10%"></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=0;
                  foreach ($tabel_ketentuan_ppdb as $row) {
                    $i++;
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row->nama_ketentuan; ?></td>
                  <td><?php echo $row->tgl_berlaku; ?></td>
                  <td>                        
                    <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('ppdb/admin/daftarulang_ppdb/editketentuan/'.$row->id_ketentuan); ?>" data-target="#myKetentuanDU<?php echo $row->id_ketentuan; ?>">Edit</a>
                  </td>
                  <td>
                    <a href="<?php echo base_url(); ?>assets/kesiswaan/ketentuan/<?php echo $row->isi_ketentuan; ?>" class="btn btn-download btn-xs"><i class="fa fa-file" aria-hidden="true"></i> Lihat Dokumen</a>
                  </td>
                </tr>

                <div id="myKetentuanDU<?php echo $row->id_ketentuan; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Data</h4>
                      </div>
                    </div>
                  </div>
                </div>    
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>

   <!-- =========================================== end tab 2 ============================================= -->

          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
            <h4><center><b>Peserta Daftar Ulang PPDB</b></center></h4>
            <div class="row">
              <div class="col-sm-4">
              <div class="dataTables_length" id="example1_length">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="dataTables_length" id="example1_length">
              </div>
            </div>
              <div class="col-sm-4">
                <div class="dataTables_length" id="example1_length">
                  <div class="form-group" align="right">
                    <a type="button" role="button" href=<?php echo site_url('ppdb/admin/daftarulang_ppdb/eksportujian');?> class="btn btn-default"><i class="fa fa-print text-red "></i> Export Data Pendaftar</a>
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-striped projects" id="example2">
              <thead>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 10%">NISN</th>
                  <th style="width: 50%">Nama</th>
                  <th style="width: 10%">Verifikasi</th>
                  <th style="width: 10%"></th>
                </tr>
                </tr>
              </thead>
              <tbody>
                <?php 
                $i=1;
                  foreach ($tabel_pendaftar_daftarulang_ppdb as $row) {
                ?>
                <tr>
                  <td><?php echo $row->nomor_pendaftaran; ?></td>
                  <td><?php echo $row->nisn; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->statusver; ?></td>
                  <td>
                     <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('ppdb/admin/daftarulang_ppdb/editberkas/'.$row->nisn); ?>" data-target="#myPendaftar<?php echo $i; ?>">Edit</a>
                  </td>
                </tr>

                <div id="myPendaftar<?php echo $i; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Data</h4>
                        </div>
                        <div class="modal-body"></div>
                      </div>
                    </div>
                  </div>

                <?php
                $i=$i+1;
                  }
                ?>
              </tbody>
            </table>
            <div class="ln_solid"></div>
          </div>

<!-- =============================== END OF TAB CONTENT 4 ================================== -->

          <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
            <h4><center><b>Pengumuman Daftar Ulang PPDB</b></center></h4><br>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('ppdb/admin/daftarulang_ppdb/savepengumuman'); ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Pengumuman</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="judul">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Isi</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" class="form-control" required="required" id="inputName" placeholder="Name" name="isi" accept="application/pdf">
                      <textarea name="descr" id="descr" style="display:none;"></textarea>
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal berlaku</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" class="form-control" id="tgl_berlaku" required="required" placeholder="Tgl Berlaku" name="tanggal_berlaku">
                  </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-default" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </div>
            </form>
        <br>

        <table class="table table-striped projects" id="example2">
          <thead>
            <tr>
              <th style="width: 5%">No </th>
              <th style="width: 70%">Judul Pengumuman</th>
              <th style="width: 10%">Tanggal</th>
              <th style="width: 5%"></th>
              <th style="width: 10%"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            foreach ($tabel_pengumuman_ppdb as $row) {
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row->judul; ?></td>
              <td><?php echo $row->tanggal_berlaku; ?></td>
              <td>                        
                <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('ppdb/admin/daftarulang_ppdb/editpengumuman/'.$row->id_pengumuman_ppdb); ?>" data-target="#myPengumuman<?php echo $i; ?>">Edit</a>
              </td>
              <td>
                <a href="<?php echo base_url(); ?>assets/kesiswaan/pengumuman/<?php echo $row->isi; ?>" class="btn btn-download btn-xs"><i class="fa fa-file" aria-hidden="true"></i> Lihat Dokumen</a>
              </td>
            </tr>

            <div id="myPengumuman<?php echo $i; ?>" class="modal fade" role="dialog">
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
            $i=$i+1;
              }
            ?>
          </tbody>
        </table>
        <br>
      </div>
 <!-- ============================================= end tab 5 ========================================== -->
    </div>
  </div>
</div>
</div>
      <!-- end container main -->
  </div>
</div>
</section>


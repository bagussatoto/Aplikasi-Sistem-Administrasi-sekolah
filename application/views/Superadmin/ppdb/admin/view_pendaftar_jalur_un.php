<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
    <section class="content-header">
      <h1>
        <center style="color:navy;"><b>Penerimaan Peserta Didik Baru</b></center>
        <center><small>Jalur Nilai Ujian Nasional</small></center>
        <center><small>hanya menggunakan nilai UN sebagai penyeleksi utama</small></center>    
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
            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Passing Grade</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pendaftar </a>
            </li>
            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Lolos Seleksi </a>
            </li>
            <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pengumuman</a>
            </li>
          </ul>

          <?php echo $this->session->userdata('pesan'); ?> <!-- ketentuan -->
          <?php echo $this->session->userdata('status'); ?> <!-- cekbox -->
          <?php echo $this->session->userdata('aktif'); ?>  <!-- formulir aktif -->
          <?php echo $this->session->userdata('nonaktif'); ?>  <!-- formulir nonaktif -->
          <?php echo $this->session->userdata('baru'); ?>  <!-- update ketentuan -->
          <?php echo $this->session->userdata('passing'); ?> <!-- passing grade -->
          <?php echo $this->session->userdata('pendaftar'); ?> <!-- edit pendaftar -->
          <?php echo $this->session->userdata('pendaftarlolos'); ?> <!-- edit pendaftar lolos -->
          <?php echo $this->session->userdata('lolos'); ?> <!-- pembuatan akun siswa baru -->
          <?php echo $this->session->userdata('pengumuman'); ?> <!-- pengumuman -->
          <?php echo $this->session->userdata('pengumumanupdate'); ?> <!-- pengumuman update -->

          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/saveformnegeri'); ?>">  
                <div class="form-group">
                  <script type="text/javascript">
                    function cek() {
                      var sdh = true;
                      if ((document.getElementById('nilai29').checked == true) && (document.getElementById('atribut29').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai30').checked == true) && (document.getElementById('atribut30').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai31').checked == true) && (document.getElementById('atribut31').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai32').checked == true) && (document.getElementById('atribut32').value == "")) { sdh = false; }
                      if ((document.getElementById('nilai33').checked == true) && (document.getElementById('atribut33').value == "")) { sdh = false; }
                      if (sdh == false) { alert('Nama "Berkas Lain" yang dicentang harus diisi!'); }
                      return sdh;
                    }
                  </script>
                  <div class="col-md-12 col-sm-12 col-xs-12" align="right">
                    <a href="<?php echo site_url('ppdb/calon_siswa/form_ppdb'); ?>" target="_blank" class="btn btn-default"><i class="fa fa-external-link-square text-blue" aria-hidden="true"></i> Lihat Halaman Formulir PPDB</a>
                  </div><br><br>
                  <h4 class="box-title"><center><b>Pengaturan Formulir</b></center></h4>    
                    <p><center>Berikan centang pada atribut formulir yang ingin dikeluarkan sebagai Formulir Penerimaan Peserta Didik Baru:</p></center>  
                    <div class="col-md-9 col-sm-9 col-xs-9">
                      <?php
                      $i=1;
                      foreach ($tabel_form_ppdb as $form) 
                      { 
                        if ($i<29) 
                        {
                          ?><input type="checkbox" class="flat" name="nilai<?php echo $form->id_form_ppdb; ?>" value="1" <?php 
                          if ($form->nilai == "1") 
                            { echo " checked"; } ?>>
                            <label><?php echo $form->atribut; ?></label><br> 
                          <?php 
                        }
                        elseif ($form!==NULL) 
                        { 
                          if ($form->id_form_ppdb < 34) 
                          {
                            ?><input type="checkbox" class="flat" id="nilai<?php echo $form->id_form_ppdb; ?>" name="nilai<?php echo $form->id_form_ppdb; ?>" value="1" <?php 
                              if ($form->nilai == "1") 
                              {
                                echo " checked"; 
                              } 
                            ?>> <label style="font-style: normal;">Berkas lain yg ingin dilampirkan</label> 
                            <input type="text" id="atribut<?php echo $form->id_form_ppdb; ?>" name="atribut<?php echo $form->id_form_ppdb; ?>" placeholder=" Nama Berkas" value="<?php echo $form->atribut; ?>"> <br>
                             <?php 
                          }
                          elseif ($i<37) 
                          { 
                            ?><input type="checkbox" class="flat" name="nilai<?php echo $form->id_form_ppdb; ?>" value="1" <?php 
                            if ($form->nilai == "1") 
                            { echo " checked"; } 
                            ?>
                            > <label><?php echo $form->atribut; ?></label><br>
                          <?php 
                          }
                        }
                        else
                        { echo "error"; }
                        $i=$i+1;
                      }
                      ?>
                      <br>
                      <div class="modal-footer" align="center">
                        <a href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/nonaktifform'); ?>" class="btn btn-danger">Non Aktifkan Formulir</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Reset</button>
                        <button type="Save" class="btn btn-success" onclick="return cek();">Aktifkan Formulir</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

<!-- =========================================end tab 1===================================================== -->
                
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <h4><center><b>Ketentuan PPDB</b></center></h4>
                     <br>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/saveketentuan'); ?>" enctype="multipart/form-data">
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
                            <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/editketentuan/'.$row->id_ketentuan); ?>" data-target="#myKetentuan<?php echo $i; ?>">Edit</a>
                          </td>
                          <td>
                            <a href="<?php echo base_url(); ?>assets/kesiswaan/ketentuan/<?php echo $row->isi_ketentuan; ?>" class="btn btn-download btn-xs"><i class="fa fa-file" aria-hidden="true"></i> Lihat Dokumen</a>
                          </td>
                        </tr>

                        <div id="myKetentuan<?php echo $i; ?>" class="modal fade" role="dialog">
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
       
              <div class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                <div class="tab-pane">
                  <h4><center><b>Tetapkan Passing Grade</b></center></h4><br>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/savepassing'); ?>" >
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select required="required" name="kategori">
                                <option value="Dalam Kota">Dalam Kota</option>
                                <option value="Luar Kota">Luar Kota</option>
                          </select> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nilai Bawah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input placeholder=" angka desimal gunakan titik" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal berlaku <span class="required">*</span>
                        </label>
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
                    </form>
                    <br>
                    <table class="table table-striped projects" id="example1">
                      <thead>
                        <tr>
                          <th style="width: 10%">No </th>
                          <th style="width: 20%">Th Ajaran</th>
                          <th style="width: 20%">Kategori</th>
                          <th style="width: 20%">Nilai Bawah</th>
                          <th style="width: 20%">Tanggal Berlaku</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                          foreach ($tabel_passing_grade as $row) {
                        ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row->tahun_ajaran; ?></td>
                          <td><?php echo $row->kategori; ?></td>
                          <td><?php echo $row->nilai; ?></td>
                          <td><?php echo $row->tgl_berlaku; ?></td>
                        </tr>
                        <?php
                        $i=$i+1;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

<!-- ========================================= end tab 3 ============================================ -->

                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                  <h4><center><b>Pendaftar PPDB</b></center></h4> <br>
                    <form method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/ubahstatus');?>">
                    <table class="table table-striped projects" id="example1">
                      <div class="form-group" align="right">
                        Ubah Status pendaftar bersamaan
                        <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Diterima?');" type="submit" name="button" value="Diterima" class="btn btn-primary btn-xs"/>
                        <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Tidak Diterima?');" type="submit" name="button" value="Tidak Diterima" class="btn btn-success btn-xs"/>
                        <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi DIcabut?');" type="submit" name="button" value="Dicabut" class="btn btn-danger btn-xs"/>
                      </div><br>
                      <thead>
                        <tr>
                          <th style="width: 5%"></th>
                          <th style="width: 5%">No Pdftrn</th>
                          <th style="width: 10%">NISN</th>
                          <th style="width: 30%">Nama</th>
                          <th style="width: 8%">Total Nilai</th>
                          <th style="width: 10%"></th>
                          <th style="width: 10%">Verifikasi</th>
                          <th style="width: 10%">Status</th>
                          <th style="width: 7%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($tabel_pendaftar_ppdb as $row) 
                        {
                          ?>
                          <tr>
                            <td><input type="checkbox" class="flat" name="nisn_ubah[]" value="<?php echo $row->nisn_pendaftar; ?>"></td>
                            <td><?php echo $row->nomor_pendaftaran; ?></td>
                            <td><?php echo $row->nisn_pendaftar; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->nilai_un_nun; ?></td>
                            <td>
                             <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/editnilai/'.$row->nisn_pendaftar); ?>" data-target="#myNilai<?php echo $i; ?>">Detail Nilai</a>
                            </td>
                            <td><?php echo $row->terverifikasi; ?></td>
                            <td><?php echo $row->status_siswa; ?></td>
                            <td>
                             <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/editpendaftar/'.$row->nisn_pendaftar); ?>" data-target="#myPendaftar<?php echo $i; ?>">Edit</a>
                            </td>
                          </tr>
                          <?php
                          $i=$i+1;
                          }
                          ?>
                        </tbody>
                      </table>
                    </form>

                   <?php 
                      $i=1;
                      foreach ($tabel_pendaftar_ppdb as $row) 
                      { ?>
                          <div id="myNilai<?php echo $i; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-md">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Lihat Nilai</h4>
                                  </div>
                                  <div class="modal-body"></div>
                              </div>
                            </div>
                          </div> 

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
                        } ?>
                </div>

         <!-- =============================== END OF TAB CONTENT 4 ================================== -->
              
                <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                 <h4><center><b>Pendaftar PPDB yang Lolos Seleksi</b></center></h4>
                    <br>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="dataTables_length" id="example1_length">
                          <div class="form-group" align="right">
                          <a type="button" role="button" href=<?php echo site_url('suppdb/admin/pendaftar_jalur_un/eksportujian');?> class="btn btn-default"><i class="fa fa-print text-red "></i> Export Data Pendaftar</a>
                        </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="dataTables_length" id="example1_length">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="dataTables_length" id="example1_length">
                          <div class="form-group">
                            <a type="button" role="button" class="btn btn-default" href=<?php echo site_url('suppdb/admin/pendaftar_jalur_un/buatakun');?> onclick="return confirm('Apakah anda yakin data pendaftar yang lolos sudah benar dan akan dibuatkan akun siswa?');"><i class="fa fa-user text-blue" aria-hidden="true"></i> Buat akun siswa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <table class="table table-striped projects" id="example1">
                      <thead>
                        <tr>
                          <th style="width: 5%">No</th>
                          <th style="width: 10%">NISN</th>
                          <th style="width: 35%">Nama</th>
                          <th style="width: 20%">Asal Sekolah</th>
                          <th style="width: 15%">Domisili</th>
                          <th style="width: 5%">Penilaian</th>
                          <th style="width: 5%"></th>
                          <th style="width: 5%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1;
                        foreach ($tabel_pendaftar_ppdb_lolos as $row) 
                        {
                          ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row->nisn_pendaftar; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->asal_sekolah; ?></td>
                            <td><?php echo $row->domisili; ?></td>
                            <td><?php echo $row->nilai_un_nun; ?></td>
                            <td>
                             <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/editnilai/'.$row->nisn_pendaftar); ?>" data-target="#myNilailolos<?php echo $i; ?>">Detail</a>
                            </td>
                            <td>
                             <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/editpendaftarlolos/'.$row->nisn_pendaftar); ?>" data-target="#myPendaftarlolos<?php echo $i; ?>">Edit</a>
                            </td>
                          </tr>

                          <div id="myNilailolos<?php echo $i; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-md">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Lihat Nilai</h4>
                                  </div>
                                  <div class="modal-body"></div>
                              </div>
                            </div>
                          </div> 

                          <div id="myPendaftarlolos<?php echo $i; ?>" class="modal fade" role="dialog">
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

<!-- =============================== END OF TAB CONTENT 5 ================================== -->
                  <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                    <h4><center><b>Pengumuman PPDB</b></center></h4><br>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/savepengumuman'); ?>" enctype="multipart/form-data">
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

                <table class="table table-striped projects" id="example1">
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
                        <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/editpengumuman/'.$row->id_pengumuman_ppdb); ?>" data-target="#myPengumuman<?php echo $i; ?>">Edit</a>
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
                <br>
              </div>
 <!-- ================================ end tab 5 ========================================== -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</div>
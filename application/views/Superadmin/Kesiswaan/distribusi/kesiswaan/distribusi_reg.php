 <div class="content-wrapper">

  <section class="content-header">
      <h1>
        <center style="color:grey;">Distribusi Kelas Reguler<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/kesiswaan/">Dashboard</a></li>
      </ol>
    </section>


  <section class="content">
    <?php $this->load->view('common/messages') ?>
     
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Data Master</a>
            </li>
            <li><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Distribusi Siswa</a>
            </li>
            <li><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Lihat Kelas</a>
            </li>
            </ul>
        
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_content4" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Tambah</a>
              </li>
              <li><a href="#tab_content5" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Master Kelas</a>
              </li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content4" aria-labelledby="home-tab">
            <a href="<?php echo base_url()?>superadmin/isi_siswa_kelas";><button type="button" class="btn btn-round btn-primary">Insert Siswa Kelas </button></a>

            <a class="btn btn-primary" data-toggle="modal" href='#modal-upload-prestasi'>Import Data Prestasi</a>
     
            <?php $this->load->view('superadmin/kesiswaan/distribusi/kesiswaan/modal-upload') ?>

            <form class="form-horizontal form-mapel" method="post" action="<?php echo base_url('superadmin/tambahkelas'); ?>">
              <div class="bigbox-mapel">
                 <div class="box-mapel">
                   <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Kelas <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="jumlah_kelas">
                  </div>
                  </div>

                  <div class="form-group">
                        <label class="control-label col-md-3">Nama Kelas</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control" name="jenjang">
                            <option value="">- Pilih Jenjang -</option>
                            <option value="7">Kelas 7</option>
                            <option value="8">Kelas 8</option>
                            <option value="9">Kelas 9</option>
                            
                          </select>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control" name="penamaan">
                            <option value="">- Pilih Penamaan -</option>
                            <option value="angka">Angka (1,2,3,..)</option>
                            <option value="huruf">Huruf (A,B,C,..)</option>
                            <option value="romawi">Romawi (I,II,III,..)</option>
                            
                          </select>
                        </div>
                  </div>

                  <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                   <button type="reset" class="btn btn-danger">Reset</button> 
                  </div>
                  </div>
                 </div>
              </div>
            </form>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
            

             <table class="table table-striped projects_1">
                      <thead>
                        <tr>
                          <th style="width: 1%"></th>
                          <th style="width: 1%">No</th>
                          <th style="width: 5%">Nama Kelas</th>
                          <th style="width: 5%">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i=0;
                        foreach ($kelas_reguler_master as $m) {
                          $i++;
                      ?>
                        <tr>
                          <td><?php //echo $i; ?></td>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $m->nama_kelas; ?></td>
                          
                          <td>
                            <a onclick="return confirm('Apakah Anda yakin akan menghapus kelas?')" class="btn btn-danger btn-primary button-action btnhapus" href="<?php echo site_url('superadmin/hapus_kelas_reguler/'.$m->id_kelas_reguler); ?>" > Hapus </a>
                          </td>
                        </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                </table>

                <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Kelas</a>
                <div class="modal fade" id="modal-id">
                   <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Form Tambah Kelas</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal form-mapel" method="post" action="<?php echo base_url('superadmin/update_kelas_reg'); ?>">
                          <div class="bigbox-mapel">
                             <div class="box-mapel">
                              <div class="form-group formgrup jarakform">
                                <label class="control-label col-md-4" for="first-name">Jumlah Kelas <span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                <input type="text" class="form-control" name="jumlah_kelas">
                              </div>
                              </div>
                               <label class="control-label col-md-4">Nama Kelas</label>
                               <div class="col-md-5 col-sm-12 col-xs-12 form-group">
                                <select class="form-control" name="jenjang">
                                  <option value="">- Pilih Jenjang -</option>
                                  <option value="7">Kelas 7</option>
                                  <option value="8">Kelas 8</option>
                                  <option value="9">Kelas 9</option>
                                </select>
                              </div>
                              <br><br><br><br>
                              <div class="form-group">
                              <center><button type="submit" class="btn btn-primary">Simpan</button>
                               <button type="reset" class="btn btn-danger">Reset</button> </center>
                              </div>
                             </div>
                          </div>
                        </form>
                      </div>
                    </div>
                   </div>
                </div>
          </div>
          </div>
        </div>
      </div>
        <!-- END TAB CONTENT 2 -->

         <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
          <form class="form-horizontal form-mapel" method="post" action="<?php echo base_url('superadmin/pilih_pembagian'); ?>">
            <div class="bigbox-mapel">
              <div class="box-mapel">
                <a href="<?php echo base_url()?>superadmin/buat_kelas_reguler_berjalan";><button type="button" class="btn btn-round btn-primary">Aktifkan Kelas </button></a>
                <div class="form-group">
                        <label class="control-label col-md-3">Pilih jenjang </label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control" name="jenjang">
                            <option value="">- Pilih Jenjang -</option>
                            <option value="7">Kelas 7</option>
                            <option value="8">Kelas 8</option>
                            <option value="9">Kelas 9</option>
                          </select>
                        </div>
                        
                  </div>
                  <div class="form-group">
                          <label class="control-label col-md-3"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                             <input type="submit" class="btn btn-primary" name="btntipe" value="Mulai pendistribusian">
                          </div>
                        </div>
              </div>
            </div>
          </form>
          </div>

          <!-- END TAB CONTENT 2 -->


          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%"></th>
                          <th style="width: 1%">No</th>
                          <th style="width: 5%">Nama Kelas</th>
                          <th style="width: 5%"></th>
                          <th style="width: 5%">Pilih Wali Kelas</th>
                          <th style="width: 5%"></th>
                        </tr>
                      </thead>
                      <tbody>

                        
                      <?php

                        $i=0;
                        foreach ($kelas_reguler as $m) {
                          $i++;
                      ?>
                      <form action="<?= base_url() ?>superadmin/simpan_walikelas" method="post">
                        <tr>
                          <td><?php //echo $i; ?></td>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $m->nama_kelas; ?></td>
                          
                          <td>
                           <div class="modal fade bs-example-modal-lg" id="myDetail<?php echo $i; ?>">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Daftar Siswa Kelas</h4>
                                </div>
                                <div class="modal-body">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <td>No</td>
                                        <td>NISN</td>
                                        <td>Nama</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Agama</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      foreach ($m->siswa as $siswa): ?>
                                      <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $siswa->nisn ?></td>
                                        <td><?= $siswa->nama ?></td>
                                        <td><?= $siswa->jenis_kelamin ?></td>
                                        <td><?= $siswa->agama ?></td>
                                      </tr>
                                      <?php endforeach; ?>
                                      <?php if (!count($m->siswa)): ?>
                                        <tr>
                                          <td colspan="3">Belum ada siswa.</td>
                                        </tr>
                                      <?php endif; ?>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <a type="button" role="button" href=<?php echo site_url('superadmin/eksportdatakelas/'.$m->id_kelas_reguler);?> class="btn btn-default"><i class="fa fa-print text-red "></i> Export Data Kelas</a>
                                  <!-- <button type="button" class="btn btn-primary button-form button-update-barang">Save changes</button> -->
                                </div>
                              </div>
                            </div>
                          </div> 
                          <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" data-target="#myDetail<?php echo $i; ?>">Detail Siswa</a>
                       
                          </td>
                          <td>

                            <input type="hidden" name="id_kelas_reguler_berjalan" value="<?php echo $m->id_kelas_reguler_berjalan ?>">
                            <select class="kodeguru" name="wali_kelas">
                              <option value="">Pilih Guru</option>
                              <?php
                              foreach ($tabel_pegawai as $row_pegawai) {
                                $selected = $m->wali_kelas == $row_pegawai->NIP ? 'selected' : '';
                                ?>
                                <option value="<?php echo $row_pegawai->NIP; ?>"  <?php echo $selected ?>><?php echo $row_pegawai->kode_guru; ?>. <?php echo $row_pegawai->nama_panggilan; ?></option>
                                <?php
                              }
                              ?>
                            </select>
                          </td>
                          <td>
                            <button type="submit" name="button" value="simpan" class="btn btn-success">Simpan</button>
                            <!-- <input type="submit" name="button" class="btn btn-success btn-lg" value="Simpan"> -->
                          </td>
                        </tr>
                      </form>
                      <?php
                        }
                      ?>
                      </tbody>
                    </table>        
          </div>
          <!-- END TAB CONTENT 3 -->

    </div>

    </div>
    </div>
    </div>


</section>
</div>
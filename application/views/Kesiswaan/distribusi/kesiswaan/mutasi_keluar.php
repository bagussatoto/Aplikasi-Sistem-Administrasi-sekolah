  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Mutasi Siswa Keluar<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/kesiswaan/index">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <?php $this->load->view('common/messages') ?>
    <div class="row">
    <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" >Form Pengajuan Mutasi</a></li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pendaftar</a></li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pencatatan</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">

              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            
            <?php echo $this->session->flashdata('pesan'); ?>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('kesiswaan/save_siswa_mutasi_keluar'); ?>" >

              
				
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                    
                      <div class="form-group formgrup jarakform">
                        <label for="first-name" class="col-sm-2 control-label">NISN*</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control mutasi-keluar-nisn" id="first-name" name="nisn" required="required">
                        </div>
                      </div>
                      <div class="form-group formgrup jarakform">
                        <label for="first-name" class="col-sm-2 control-label">Nama Siswa</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control mutasi-keluar-nama" id="first-name" name="nama" readonly>
                        </div>
                      </div>
                      <div class="form-group formgrup jarakform">
                        <label for="first-name" class="col-sm-2 control-label">Sekolah Tujuan</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="first-name" name="sekolah_tujuan" required="required">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="logo-daerah" class="col-sm-2 control-label">Surat Permohonan Pindah</label>
                        <div class="col-sm-4">
                          <input type="file" class="form-control" name="surat_ket_pindah" id="surat_ket_pindah" required="required"></div>
                       <!-- <div class="col-sm-4">
                       <button type="button" class="btn btn-danger" href="#dokumen" data-toggle="tab"> Lihat dokumen</button>
                       </div> -->
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="logo-sekolah" class="col-sm-2 control-label">Surat Bebas Administrasi</label>
                        <div class="col-sm-4">
                          <input type="file" class="form-control" name="surat_bebas_administrasi" id="surat_bebas_administrasi" required="required" ></div>
                       <!--  <div class="col-sm-4">
                       <button type="button" class="btn btn-danger" href="#dokumen" data-toggle="tab"> Lihat dokumen</button>
                       </div> -->
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="atribut-formulir" class="col-sm-2 control-label">Berkas yang dibutuhkan<span class="required">*</span></label>
                        <div class="col-sm-4">

                         <div class="form-group">
                          <label class="control-label col-sm-0"></label>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                           <input type="checkbox" name="berkas_1" > 
                              Berkas 1
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-0"></label>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                           <input type="checkbox" name="berkas_2" > 
                              Berkas 2
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-0"></label>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                           <input type="checkbox" name="berkas_3" > 
                              Berkas 3
                          </div>
                        </div>
                          
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                       <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                     </div>
                     </div>
                    </div>
                    </div>
                    </form>
                    </div>
        
                <!-- end tab 1 -->

              

            
              <div class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
              
                      
              <table class="table table-striped projects datatables">
                      <thead>
                      <tr>
                        <th class="fit">ID pendaftar</th>
                         <th>NISN</th>
                         <th>Nama</th>
                         <th>Berkas</th>
                         <th>&nbsp;</th>
                         <th>&nbsp;</th>
                      </tr>
                      </thead>
                      <tbody>
                 <?php 
                  $i=1;
            
                  foreach ($tabel_siswa_mutasi_keluar as $row) 
                  {
                    ?>
                    <tr>
                     
                      <td><?php echo $row->id_siswa_mutasi_keluar; ?></td>
                      <td><?php echo $row->nisn; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td>
                      
                      <!-- Modal detail berkas -->
                      <div class="modal fade bs-example-modal-lg" id="myBerkas<?php echo $i; ?>">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <h4 class="modal-title" id="myModalLabel">Daftar Berkas Mutasi Keluar</h4>
                            </div>
                            <div class="modal-body">
                              <table>
                                <tr>
                                  <td>Surat Permohonan Pindah </td>
                                  <td>:</td>
                                  <td><?php echo $row->surat_ket_pindah ?></td>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Surat Bebas Administrasi </td>
                                  <td>:</td>
                                  <td><?php echo $row->surat_bebas_administrasi ?></td> 
                                </tr>
                                <tr>
                                  <td>Berkas 1 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_1 == 'on' ? 'Tersedia' : 'Tidak Tersedia'  ?></td>
                                </tr>
                                <tr>
                                  <td>Berkas 2 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_2 == 'on' ? 'Tersedia' : 'Tidak Tersedia'?></td>
                                </tr>
                                <tr>
                                  <td>Berkas 3 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_3 == 'on' ? 'Tersedia' : 'Tidak Tersedia'?></td>
                                </tr>
                                
                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary button-form button-update-barang">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      
                       <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" data-target="#myBerkas<?php echo $i; ?>">Detail Berkas</a>
                      </td>
                      
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary">Ubah Status</button>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <?php
                            $link_diterima = base_url()."kesiswaan/ubah_status_siswa_mutasi_keluar/".$row->id_siswa_mutasi_keluar."/Diterima";
                            $link_ditolak = base_url()."kesiswaan/ubah_status_siswa_mutasi_keluar/".$row->id_siswa_mutasi_keluar."/Ditolak";
                            $link_dicabut = base_url()."kesiswaan/ubah_status_siswa_mutasi_keluar/".$row->id_siswa_mutasi_keluar."/Dicabut";
                            ?>
                            <li><a href="<?php echo $link_diterima ?>">Diterima</a></li>
                            <li><a href="<?php echo $link_ditolak ?>">Ditolak</a></li>
                            <li><a href="<?php echo $link_dicabut ?>">Dicabut</a></li>
                          </ul>

                        </div>
                      </td>
                      <td>
                        <?php
                        if ($row->status_siswa == 'Diterima') {
                          echo '<span class="label label-success">Diterima</span>';
                        } elseif ($row->status_siswa == 'Ditolak') {
                          echo '<span class="label label-danger">Ditolak</span>';
                        } elseif ($row->status_siswa == 'Dicabut') {
                          echo '<span class="label label-warning">Dicabut</span>';
                        } else {
                          echo '<span class="label label-default"><i>Belum ada status</i></span>';
                        }
                        ?>
                      </td>
                    </tr>
                    <?php
                    $i=$i+1;
                    }
                    ?>
                  </tbody>
                      </thead>
                      </table>
                        
                
              </div>


                            
                                          <!-- END TAB 2 -->



                     <div class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                       
                    <table class="table table-striped projects datatables">
                      <thead>
                        <tr>

                        <th class="fit">ID pendaftar</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Sekolah Tujuan</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                $i=1;
                foreach ($data_pencatatan_keluar as $row) 
                { 
                ?>
                <tr>
                   <td><?php echo $i; ?></td>
                   <!-- <td><?php echo $row->id_siswa_mutasi_keluar; ?></td> -->
                   <td><?php echo $row->nisn; ?></td>
                   <td><?php echo $row->nama; ?></td>
                   <td><?php echo $row->sekolah_tujuan; ?></td>
                   <td>
                     <a href="<?php echo site_url('kesiswaan/nonaktifkan_akun/').$row->nisn; ?>" class="btn btn-primary">Non Aktifkan Akun</a>
                   </td>
                   <td>
                    <a href="<?php echo site_url('kesiswaan/cetak_bukti_mutasi_keluar/').$row->nisn; ?>" class="btn btn-warning fa fa-print text-black ">Print Bukti</a>
                     <!-- <button class="btn btn-dark"><i class="fa fa-print text-red "></i> Print Bukti</button> -->
                   </td>
                 </tr>
                 <?php
                    $i=$i+1;
                  } ?>

                      </tbody>
                    </table>
                     </div>

                     <!-- end tab 3 -->

                     
                        <!-- end tab 4 -->
                       
                        </div>
                        </div>
            
            </div>

             <!-- end container main -->
            <div class="modal fade bs-example-modal-lg" id="berkas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Daftar Berkas Mutasi Masuk</h4>
            </div>
            <div class="modal-body">
              <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="#" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Pilih Berkas yang Sudah Dilengkapi Siswa:</label>
                          <div class="col-sm-10">
                            <ul class="titik">
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                              <li><input type="checkbox"> berkas</li>
                            </ul>                      
                          </div>
                      </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary button-form button-update-barang">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end of berkas -->
      <div class="modal fade bs-example-modal-lg" id="nilai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Nilai Ujian Masuk Siswa</h4>
            </div>
            <div class="modal-body">
              <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="#" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Masukkan Nilai Siswa</label>
                          <div class="col-sm-10">
                            <ul class="titik">
                              <li>Nilai 1 <input type="text"></li>
                              <li>Nilai 2 <input type="text"></li>
                              <li>Nilai 3 <input type="text"></li>
                            </ul>                      
                          </div>
                      </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary button-form button-update-barang">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end of profil -->
      </div>

<div class="content-wrapper">

<section class="content-header">
<h1>
 <center style="color:grey;">Mutasi Siswa Masuk<br></center>
 <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
<ol class="breadcrumb">
 <li><a href="<?php echo base_url();?>kesiswaan/index">Dashboard</a></li>
</ol>
</section>

<section class="content">
   <?php $this->load->view('common/messages') ?>
  <div class="row">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
       <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" >Formulir Pengajuan </a></li>
       <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pendaftar </a></li>
       <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pencatatan </a></li>
       <li role="presentation"><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Buat Pengumuman </a></li>
     </ul>

     <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
        <?php echo $this->session->flashdata('pesan'); ?>

        <div class="col-md-12 col-sm-12 col-xs-12" align="right">
       <a href="<?php echo site_url('distribusi/sekolah/form_mutasimasuk'); ?>" target="_blank" class="btn btn-default">
        <i class="fa fa-external-link-square text-blue" aria-hidden="true"></i> Lihat Halaman Formulir
       </a>
      </div><br><br>

      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('kesiswaan/simpan_form_mutasi'); ?>">
        <?php
                 $i=1;

                 // var_dump($form_pendaftaran_mutasi_masuk); exit;

                 foreach ($form_pendaftaran_mutasi_masuk as $form) { 
                   if ($i<21) {
                    $checked = $form->nilai == "1" ? 'checked' : '';
                     ?><input type="checkbox" class="flat" name="nilai<?php echo $form->id_form_pendaftaran_mutasi_masuk; ?>" value="1" <?php echo $checked ?> > <label><?php echo $form->atribut; ?></label>
                     <br> 
                     <?php 
                   } elseif ($form!==NULL) { 
                      if ($form->id_form_pendaftaran_mutasi_masuk < 27) {
                       $checked = $form->nilai == "1" ? 'checked' : '';
                       ?>
                       <br>
                       <input type="checkbox" class="flat" name="nilai<?php echo $form->id_form_pendaftaran_mutasi_masuk; ?>" value="1" <?php echo $checked ?>> <label style="font-style: normal;">Berkas lain yg ingin dilampirkan</label> 
                         <input type="text" id="atribut<?php echo $form->id_form_pendaftaran_mutasi_masuk; ?>" name="atribut<?php echo $form->id_form_pendaftaran_mutasi_masuk; ?>" placeholder=" Nama Berkas" value="<?php echo $form->atribut; ?>"> <br>
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
                 <div class="ln_solid"></div>
               <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
               <!-- <div class="modal-footer" align="center"> -->
                <a href="<?php echo site_url('kesiswaan/nonaktifform'); ?>" class="btn btn-danger">Non Aktifkan Formulir</a>
               <button type="reset" class="btn btn-submit">Reset</button>
               <button type="submit" class="btn btn-primary">Aktifkan Formulir</button>
               </div>
              </div>
      </form>
      </div>

      <!-- END TAB CONTENT 1 -->

      <div class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
        <form method="post" action="<?php echo site_url('kesiswaan/ubah_status_siswa_mutasi');?>">
          <div class="row">
                  <div class="col-sm-4">
                    <div class="dataTables_length" id="example1_length">
                      <div class="form-group" align="right"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="dataTables_length" id="example1_length">
                      <div class="form-group" align="right"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="dataTables_length" id="example1_length">
                      <div class="btn-wrap pull-left" style="margin-right: 10px; ">
                        <div class="dropdown" style="display: inline-block; margin-right: 8px;">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ubah Status
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Diterima?');" type="submit" name="button" value="Diterima" class="btn-success"/></li>
                            <li><input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Tidak Diterima?');" type="submit" name="button" value="Tidak Diterima" class="btn-danger"/></li>
                            <li><input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Dicabut?');" type="submit" name="button" value="Dicabut" class="btn-warning"/></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><br>
                <table class="table table-striped projects datatables">
                   <thead>
                    <tr>
                      
                      <th class="center"></th>
                      <th class="center">No.</th>
                      <th class="center">NISN <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                      <th class="center">Nama <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                      <th class="center">Total Nilai <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                      <th class="center"></th>
                      <th class="center">Berkas <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                      <th class="center"></th>
                      <th class="center">Status <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                      <th class="center"></th>
                      <th class="center"></th>
                    </tr>
                 </thead>
               <tbody>
                 <?php 
                  $i=1;
            
                  foreach ($tabel_siswa_mutasi_masuk as $row)
                  {
                    
                    ?>
                    <tr>
                      <td><input type="checkbox" class="flat checkNisn" name="nisn_ubah[]" value="<?php echo $row->nisn_pendaftar_mutasi; ?>"></td>
                      <td><?php echo $row->id_pendaftar_mutasi; ?></td>
                      <td><?php echo $row->nisn_pendaftar_mutasi; ?></td>
                      <td><?php echo $row->nama_pendaftar_mutasi; ?></td>
                      <td><?php echo $row->jumlah_nilai_un; ?></td>
                      <td>
                      <!--  Modal detail nilai -->
                      <div class="modal fade bs-example-modal-lg" id="myNilaii<?php echo $i; ?>">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <h4 class="modal-title" id="myModalLabel">Daftar Berkas Mutasi Masuk</h4>
                            </div>
                            <div class="modal-body">
                              <table>
                              <tr>
                                  <td>Nilai UN Bahasa Indonesia &nbsp&nbsp&nbsp&nbsp</td>
                                  
                                  <td>:</td>
                                  
                                  <td><?php echo $row->nilai_un_bahasaindonesia ?></td>
                                </tr>
                                <tr>
                                  <td>Nilai UN IPA</td>
                                  <td>:</td>
                                  <td><?php echo $row->nilai_un_ipa ?></td>
                                </tr>
                                <tr>
                                  <td>Nilai UN Matematika</td>
                                  <td>:</td>
                                  <td><?php echo $row->nilai_un_matematika ?></td>
                                </tr>
                                
                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal detail berkas -->
                      <div class="modal fade bs-example-modal-lg" id="myBerkas<?php echo $i; ?>">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <h4 class="modal-title" id="myModalLabel">Daftar Berkas Mutasi Masuk</h4>
                            </div>
                            <div class="modal-body">
                              <table>
                                <tr>
                                  <td>Surat Keterangan NISN </td>
                                  <td>:</td>
                                  <td><?php echo $row->surat_ket_nisn == 'on' ? 'Tersedia' : 'Tidak Tersedia'  ?></td>
                                </tr>
                                <tr>
                                  <td>Fotokopi Buku Rapor </td>
                                  <td>:</td>
                                  <td><?php echo $row->fc_buku_rapor == 'on' ? 'Tersedia' : 'Tidak Tersedia'?></td>
                                </tr>
                                <tr>
                                  <td>Fotokopi SKHUN </td>
                                  <td>:</td>
                                  <td><?php echo $row->fc_skhun == 'on' ? 'Tersedia' : 'Tidak Tersedia'?></td>
                                </tr>
                                <tr>
                                  <td>Surat Keterangan Bangku Kosong </td>
                                  <td>:</td>
                                  <td><?php echo $row->surat_ket_bangku == 'on' ? 'Tersedia' : 'Tidak Tersedia'?></td>
                                </tr>
                                <tr>
                                  <td>Surat Keterangan Pindah </td>
                                  <td>:</td>
                                  <td><?php echo $row->surat_ket_pindah == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                                <tr>
                                  <td>Surat Kelakuan Baik Kepala Sekolah </td>
                                  <td>:</td>
                                  <td><?php echo $row->skck_kepsek == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                                <tr>
                                  <td>Berkas tambahan 1 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_1 == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                                <tr>
                                  <td>Berkas tambahan 2 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_2 == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                                <tr>
                                  <td>Berkas tambahan 3 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_3 == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                                <tr>
                                  <td>Berkas tambahan 4 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_4 == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                                <tr>
                                  <td>Berkas tambahan 5 </td>
                                  <td>:</td>
                                  <td><?php echo $row->berkas_5 == 'on' ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                </tr>
                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                        </div>
                      </div>
                       <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" data-target="#myNilaii<?php echo $i; ?>">Detail Nilai</a>
                      </td>
                      <td>
                       <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" data-target="#myBerkas<?php echo $i; ?>">Detail Berkas</a>
                      </td>
                      <td>
                        
                        <?php
                            if ($row->status_siswa == 'Diterima') {
                              echo '<span class="label label-success">Diterima</span>';
                            } elseif ($row->status_siswa == 'Tidak Diterima') {
                              echo '<span class="label label-danger">Tidak Diterima</span>';
                            } elseif ($row->status_siswa == 'Dicabut') {
                              echo '<span class="label label-warning">Dicabut</span>';
                            } else {
                              echo '<span class="label label-default"><i>Belum ada status</i></span>';
                            }
                            ?>
                      </td>
                      <td>
                        <a data-toggle="modal" class="btn btn-block btn-primary button-action btnedit" data-show="true" href="<?php echo site_url('kesiswaan/editpendaftar_mutasi/'.$row->nisn_pendaftar_mutasi); ?>" data-target="#myPendaftar<?php echo $i; ?>">Edit</a>
                      </td>
                      <td>
                       <td>
                     <!-- <a onclick="return confirm"('Apakah anda yakin akan menghapus data? <?php echo $row->nisn_pendaftar_mutasi; ?>') href="<?php echo site_url("distribusi/kesiswaan/hapus_pendaftar_mutasi/".$row->nisn_pendaftar_mutasi) ?>" type="button" role="button" class="btn btn-block btn-danger button-action btnedit">Hapus</a> -->

                     <a onclick="return confirm('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger btn-primary button-action btnhapus" href="<?php echo site_url('kesiswaan/hapus_pendaftar_mutasi/'.$row->nisn_pendaftar_mutasi); ?>" > Hapus </a>
                      </td> 
                       
                      </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                  </tbody>
                </table>
          </form>
             <?php 
                $i=1;
                foreach ($tabel_siswa_mutasi_masuk as $row) 
                { 
                  ?>
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

                 <div class="ln_solid"></div>
      </div>

      <!-- END TAB CONTENT 2 -->

      <div class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('kesiswaan/ubah_siswa_akun'); ?>">
            
            <p align="center">
              <button type="submit" class="btn btn-default" onclick="return confirm('Apakah anda yakin data pendaftar yang lolos sudah benar dan akan dibuatkan akun siswa?');"><i class="fa fa-user text-green" aria-hidden="true"></i> Buat akun siswa</button>
            </p>
             
             <div class="clearfix"></div> 
             <!-- bikin enter  -->

              <table class="table table-striped projects datatables">
               <thead>
                 <tr>
                  <th class="center"></th>
                   <th class="center">No</th>
                   <th class="center">NISN</th>
                   <th class="center">Nama Siswa</th>
                   <th class="center">Sekolah</th>
                   <th class="center">Kelas</th>
                   <th class="center"></th>
                   <th class="center"></th>
                 </tr>
               </thead>
               <tbody>
               <?php 
                $i=1;

                foreach ($data_pencatatan as $row) 
                { 

                  // var_dump($row);
                ?>
                <tr>
                  <td><input type="checkbox" class="flat checkNisn" name="nisn_ubah[]" value="<?php echo $row->nisn_pendaftar_mutasi; ?>"></td>
                   <td><?php echo $i; ?></td>
                   <td><?php echo $row->nisn_pendaftar_mutasi; ?></td>
                   <td><?php echo $row->nama_pendaftar_mutasi; ?></td>
                   <td><?php echo $row->sekolah_asal; ?></td>
                   <td>
                     <select class="kodekelas" name="cmb<?php echo $row->nisn_pendaftar_mutasi; ?>" id="cmb<?php echo $row->nisn_pendaftar_mutasi; ?>" onchange="fetch_select_mapel(this.value, 'mapel1');">
                                  <option value="">Pilih Kelas</option>
                                  <?php
                                  foreach ($kelas_reguler_berjalan as $row_kelas) {
                                     $selected = $row->nama_kelas == $row_kelas->nama_kelas ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $row_kelas->id_kelas_reguler_berjalan; ?>" <?php echo $selected ?>><?php echo $row_kelas->nama_kelas; ?></option>
                                    <?php
                                  }
                                  ?>
                                </select>
                   </td>
                   <td>
                    <button type="button" role="button" class="btn btn-primary" onclick="document.location='<?php echo site_url('kesiswaan/masukkan_siswa_kelas');?>' + '/' + '<?php echo $row->nisn_pendaftar_mutasi; ?>' + '/' + document.getElementById('cmb<?php echo $row->nisn_pendaftar_mutasi; ?>').value;" >Simpan</button></td>
                   <!-- <td>
                     <a onclick="return confirm"('Apakah anda yakin akan menghapus data? <?php echo $row->nisn_pendaftar_mutasi; ?>') href="<?php echo site_url("distribusi/kesiswaan/hapus_pendaftar_mutasi/".$row->nisn_pendaftar_mutasi) ?>" type="button" role="button" class="btn btn-block btn-danger button-action btnedit">Hapus</a>
                  </td> -->
                   <td>
                    <a href="<?php echo site_url('kesiswaan/print_bukti_mutasi_diterima/'.$row->nisn_pendaftar_mutasi); ?>" target="_blank" class="btn btn-warning fa fa-print text-black">Print Bukti</a>
                   </td>
                 </tr>
                 <?php
                    $i=$i+1;
                  } ?>

                 
                
               </tbody>


             </table>
        </form>
      </div>

      <!-- END TAB CONTENT 3 -->
      <div class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
        <form class="form-horizontal formkaldik" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>kesiswaan/tambah_pengumuman">
          <div class="form-group formgrup jarakform">
                    <label class="control-label col-sm-3" for="first-name">Judul Pengumuman <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="text" class="form-control" name="judul_pengumuman">
                  </div>
                  </div>
                  <div class="form-group form-grup">
                    <label class="control-label col-sm-3" for="first-name">Tanggal <span class="required">*</span>
                    </label>
                    <div class="col-sm-4 form-group">
                    <input type="date" class="form-control" name="tgl_pengumuman">
                  </div>
                  </div>
                   <div class="form-group form-grup">
                     <label for="inputName" class="col-sm-3 control-label">File </label>
                      <div class="col-sm-4 form-group">
                     <input type="file" class="form-control" id="inputName" placeholder="Name" name="file_pengumuman">
                   </div>
                 </div>
                 <div class="form-group" >
                   <div class="col-sm-offset-4 col-sm-10">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <!-- <button type="button" class="btn btn-danger"> Lihat dokumen</button> -->
                 </div>
               </div>
        </form>
         </br>

              <div class="tab-pane" id="dokumen">
                   <div class="row">
                     <div class="col-sm-6">
                       <div class="dataTables_length" id="example1_length">
                         <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                           <option value="10">10</option>
                           <option value="25">25</option>
                           <option value="50">50</option>
                           <option value="100">100</option>
                         </select> entries
                       </label>
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div id="example1_filter" class="dataTables_filter">
                       <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                       </label>
                     </div>
                   </div>
                 </div>
             <table class="table table-striped projects">
               <thead>
                 <tr>
                   <th style="width: 1%">No</th>
                   <th style="width: 10%">Judul pengumuman</th>
                   <th style="width: 10%">Tanggal</th>
                   <th style="width: 10%"></th>
                 </tr>
               </thead>
               <tbody>
                 <?php 
              if (is_array($pengumuman_mutasi) && count($pengumuman_mutasi)) : ?>
                  <?php $i=1; foreach($pengumuman_mutasi as $m) : ?>
                  <?php if ($m->id_pengumuman != 0) { ?>

                  <tr class="odd gradeX">
                    <td><?php echo $i ?></td>
                    <td><?php echo $m->judul_pengumuman?></td>
                    <td><?php echo $m->tgl_pengumuman?></td><td>
                    <a href="<?php echo base_url('distribusi/kesiswaan/download/'.$m->id_pengumuman)?>" class="btn btn-primary btn-xs"><i class="fa fa-download"></i></a>
                    <?php
                    //delete
                    include('delete.php');
                    ?>

            </td>
        </tr>
              
                <?php $i++; } ?>
                 <?php endforeach;
                 else :
                 print "data tidak tersedia";
                endif;
                ?>
            </tbody>
               </table>
                 </div> 

      </div>
     </div>
      </div>
    </div>
  </div>
  </section>
</div>
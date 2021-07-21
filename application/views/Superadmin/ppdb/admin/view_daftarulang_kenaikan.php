<div class="content-wrapper">
   <div style="overflow-y: scroll; height: 600px">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;"><b>Daftar Ulang</b><br></center>
      <center><small>Kelas</small></center>
    </h1>
  </section>
  <section class="content">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pengaturan Formulir </a>
          </li>
          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Pendaftar </a>
          </li>
        </ul>

        <?php echo $this->session->userdata('aktif'); ?>  <!-- formulir aktif -->
        <?php echo $this->session->userdata('nonaktif'); ?>  <!-- formulir aktif -->
        <?php echo $this->session->userdata('berkas'); ?>  <!-- formulir aktif -->

        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <div class="form-group">
              <h4 class="box-title"><center><b>Pengaturan Formulir</b></center></h4>    
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('suppdb/admin/daftarulang_kenaikan/saveformkenaikan'); ?>">  
                <p><center>Berikan centang pada atribut formulir yang ingin dikeluarkan sebagai syarat berkas daftar ulang kelas:</p></center>
                <div class="form-group">  
                  <div class="col-md-9 col-sm-9 col-xs-9">
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
                        foreach ($tabel_form_daftarulang_kenaikan as $form) 
                        { 
                          if ($i<5) 
                          {
                            ?><input type="checkbox" class="flat" name="nilai<?php echo $form->id_form_daftarulang_kenaikan; ?>" value="1" 
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
                            if ($form->id_form_daftarulang_kenaikan < 10) 
                            {
                              ?><input type="checkbox" class="flat" id="nilai<?php echo $form->id_form_daftarulang_kenaikan; ?>" name="nilai<?php echo $form->id_form_daftarulang_kenaikan; ?>" value="1" <?php 
                              if ($form->nilai == "1") 
                              {
                                echo " checked"; 
                              } 
                              ?>> <label style="font-style: normal;">Berkas lain yg ingin dilampirkan</label> 
                              <input type="text" id="atribut<?php echo $form->id_form_daftarulang_kenaikan; ?>" name="atribut<?php echo $form->id_form_daftarulang_kenaikan; ?>" placeholder=" Nama Berkas" value="<?php echo $form->atribut; ?>"> <br>
                              <?php 
                            }
                          }
                          else
                          {
                            echo "error";
                          }
                          $i=$i+1;
                        } ?>
                    <br><br>
                    <div class="modal-footer" align="right">
                      <a href="<?php echo site_url('suppdb/admin/daftarulang_kenaikan/nonaktif'); ?>" class="btn btn-danger">Non Aktifkan Formulir</a>
                      <button class="btn btn-default" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success" onclick="return cek();">Aktifkan Formulir</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>

     <!-- ========================================= end tab 1 ============================================= -->

          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
            <h4><center><b>Pendaftar Daftar Ulang Kelas</b></center></h4>
            <br>
            <table class="table table-striped projects" id="example1">
              <thead>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 10%">Th Ajaran</th>
                  <th style="width: 10%">NISN</th>
                  <th style="width: 45%">Nama</th>
                  <th style="width: 10%">Th Angkatan</th>
                  <th style="width: 10%">Verifikasi</th>
                  <th style="width: 5%"></th>
                </tr>
                </tr>
              </thead>
              <tbody>
                <?php
                 $i=1;
                  foreach ($tabel_pendaftar_daftarulang_kenaikan as $row)
                  {
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row->tahun_ajaran; ?></td>
                      <td><?php echo $row->nisn; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->id_tahun_ajaran; ?></td>
                      <td><?php echo $row->terverifikasi; ?></td>
                      <td><a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('suppdb/admin/daftarulang_kenaikan/editberkas/'.$row->nisn); ?>" data-target="#myPendaftar<?php echo $i; ?>">Edit</a>
                      </td>
                    </tr>

                    <div id="myPendaftar<?php echo $i; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Berkas Kenaikan</h4>
                          </div>
                          <div class="modal-body"></div>
                        </div>
                      </div>
                      </div> 
                    <?php
                    $i=$i+1;
                  } ?>
              </tbody>
            </table>
          <div class="ln_solid"></div>
        </div>

      <!-- =============================== END OF TAB CONTENT 4 ================================== -->

       </div>
      </div>
    </div>
<!-- end of profil -->
  </div>
    <!-- end container main -->
</div>
</div>
</section>



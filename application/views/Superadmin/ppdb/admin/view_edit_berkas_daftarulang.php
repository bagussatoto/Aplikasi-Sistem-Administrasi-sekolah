<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Berkas : <?php echo $row_pendaftar_daftarulang_ppdb->nisn; ?></h4>
    </div>
    <div class="modal-content">       
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('suppdb/admin/daftarulang_ppdb/updateberkas/'.$row_pendaftar_daftarulang_ppdb->nisn); ?>">
          <label class="control-label col-md-8 col-sm-3 col-xs-12">Pilih Berkas yang Sudah Dilengkapi Siswa:</label>
            <br><br>          
          <?php
                if ($settingform['surat_pernyataan'] == '1') 
                {
                  ?>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" class="checkbox_berkas" name="surat_pernyataan" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->surat_pernyataan == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Surat Pernyataan 
                      </div>
                  </div>
                  <?php
                }

                if ($settingform['form_pendataan'] == '1') 
                {
                 ?>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" class="checkbox_berkas" name="form_pendataan" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->form_pendataan == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Form Pendataan 
                     </div>
                  </div>
                  <?php
                }

               
                if ($settingform['tanda_pembayaran'] == '1')
                {
                  ?>
                  <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="checkbox" class="checkbox_berkas" name="tanda_pembayaran" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->tanda_pembayaran == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Tanda Pembayaran 
                     </div>
                  </div>
                 <?php
                }
              
                if ($settingform['berkas_1'] == '1') 
                {
                  ?>
                  <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="checkbox" class="checkbox_berkas" name="berkas_1" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->berkas_1 == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Berkas 1 
                     </div>
                  </div>
                <?php
                }

                ?>
                <?php
                if ($settingform['berkas_2'] == '1') 
                {
                  ?>
                  <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="checkbox" class="checkbox_berkas" name="berkas_2" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->berkas_2 == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Berkas 2 
                     </div>
                  </div>
                <?php
                }
                ?>

                <?php
                if ($settingform['berkas_3'] == '1') {
                ?>
                <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="checkbox" class="checkbox_berkas" name="berkas_3" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->berkas_3 == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Berkas 3 
                     </div>
                  </div>
                <?php
                }
                ?>

                <?php
                if ($settingform['berkas_4'] == '1') {
                ?>
                <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="checkbox" class="checkbox_berkas" name="berkas_4" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->berkas_4 == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Berkas 4
                     </div>
                  </div>
                <?php
                }
                ?>

                <?php
                if ($settingform['berkas_5'] == '1') {
                ?>
                <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="checkbox" class="checkbox_berkas" name="berkas_5" value="1" <?php 
                          if ($row_pendaftar_daftarulang_ppdb->berkas_5 == "1") 
                            {
                              echo " checked"; 
                            } 
                          ?>> Berkas 5 
                   </div>
                </div>
                  <?php
                }
                ?>
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Verifikasi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="gender" class="dropdown" data-toggle="buttons">
                  <select name="terverifikasi" id="terverifikasi" value="<?php echo $row_pendaftar_daftarulang_ppdb->terverifikasi; ?>" onchange="if ($('.checkbox_berkas:checked').length == $('.checkbox_berkas').length) { return true; } else { this.value = 'Belum'; alert('Berkas belum lengkap!'); return false; } ">
                      <option value="Terverifikasi" <?php if (isset($row_pendaftar_daftarulang_ppdb->terverifikasi) && $row_pendaftar_daftarulang_ppdb->terverifikasi=="Terverifikasi") echo "selected";?>> Terverifikasi </option>
                      <option value="Belum" <?php if (isset($row_pendaftar_daftarulang_ppdb->terverifikasi) && $row_pendaftar_daftarulang_ppdb->terverifikasi=="Belum") echo "selected";?>> Belum </option>
                  </select> 
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>

      </form>
    </div>
  </div>   
</body>
</html>


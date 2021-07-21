<html>
  <body>
    <div class="modal-dialog">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Informasi Pendaftar Mutasi : <?php echo $tabel_siswa_mutasi_masuk->nama_pendaftar_mutasi; ?></h4>
      </div>
      <div class="modal-content">
        <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('kesiswaan/updatependaftar_mutasi/'.$tabel_siswa_mutasi_masuk->nisn_pendaftar_mutasi); ?>" ><br>

          <?php
          if (@$settingform['nisn'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NISN </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name='nisn_pendaftar_mutasi' value="<?php echo $tabel_siswa_mutasi_masuk->nisn_pendaftar_mutasi; ?>">
                        </div>
          </div>

          <?php
          }
          if (@$settingform['nama_pendaftar_mutasi'] == '1') {
          ?>
          <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pendaftar Mutasi </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama_pendaftar_mutasi" value="<?php echo $tabel_siswa_mutasi_masuk->nama_pendaftar_mutasi; ?>">
                        </div>
          </div>
          
          <?php
        }
        if (@$settingform['tempat_lahir'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <!--  <textarea class="form-control" rows="3" name="tempat_lahir"><?php echo $tabel_siswa_mutasi_masuk->tempat_lahir; ?></textarea> -->
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tempat_lahir" required="required" value="<?php echo $tabel_siswa_mutasi_masuk->tempat_lahir; ?>">
                        </div>
          </div>
          
          <?php
        }
        if (@$settingform['tanggal_lahir'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <textarea class="form-control" rows="3" name="tanggal_lahir"><?php echo $tabel_siswa_mutasi_masuk->tanggal_lahir; ?></textarea> -->
                           <input type="date" class="form-control" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tanggal_lahir" required="required" value="<?php echo $tabel_siswa_mutasi_masuk->tanggal_lahir; ?>">
                          <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one"></div>
                        </div>
          </div>
          
          <?php
        }
         
          if (@$settingform['tahun_kelulusan'] == '1') {
          ?>
          <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Kelulusan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tahun_kelulusan" value="<?php echo $tabel_siswa_mutasi_masuk->tahun_kelulusan; ?>">
                        </div>
          </div>
          
          <?php
        }
         
          if (@$settingform['jenis_kelamin'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="radio" name="jenis_kelamin"
                            <?php if (isset($tabel_siswa_mutasi_masuk->jenis_kelamin) && $tabel_siswa_mutasi_masuk->jenis_kelamin=="Perempuan") echo "checked";?>
                                  value="Perempuan">Perempuan <br>
                            <input type="radio" name="jenis_kelamin"
                            <?php if (isset($tabel_siswa_mutasi_masuk->jenis_kelamin) && $tabel_siswa_mutasi_masuk->jenis_kelamin=="Laki-Laki") echo "checked";?>
                                    value="Laki-laki">Laki-Laki 
                          </div>
          </div>
          
          <?php
        }
        if (@$settingform['agama'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="radio" name="agama"
                            <?php if (isset($tabel_siswa_mutasi_masuk->agama) && $tabel_siswa_mutasi_masuk->agama=="Islam") echo "checked";?>
                                  value="Islam">Islam <br>
                            <input type="radio" name="agama"
                            <?php if (isset($tabel_siswa_mutasi_masuk->agama) && $tabel_siswa_mutasi_masuk->agama=="Kristen") echo "checked";?>
                                  value="Kristen">Kristen <br>
                                  <input type="radio" name="agama"
                            <?php if (isset($tabel_siswa_mutasi_masuk->agama) && $tabel_siswa_mutasi_masuk->agama=="Katholik") echo "checked";?>
                                  value="Katholik">Katholik <br>
                                  <input type="radio" name="agama"
                            <?php if (isset($tabel_siswa_mutasi_masuk->agama) && $tabel_siswa_mutasi_masuk->agama=="Hindu") echo "checked";?>
                                  value="Hindu">Hindu <br>
                                  <input type="radio" name="agama"
                            <?php if (isset($tabel_siswa_mutasi_masuk->agama) && $tabel_siswa_mutasi_masuk->agama=="Budha") echo "checked";?>
                                  value="Budha">Budha <br>
                            <input type="radio" name="agama"
                            <?php if (isset($tabel_siswa_mutasi_masuk->agama) && $tabel_siswa_mutasi_masuk->agama=="Lainnya") echo "checked";?>
                                    value="Lainnya">Lainnya
                          </div>
          </div>
          
          <?php
        }
          if (@$settingform['alamat'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" name="alamat"><?php echo $tabel_siswa_mutasi_masuk->alamat; ?></textarea>
                        </div>
          </div>
          
          <?php
        }

          if (@$settingform['no_telepon'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon/HP</label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="no_telepon" value="<?php echo $tabel_siswa_mutasi_masuk->no_telepon; ?>">
                        </div>
          </div>
          
          <?php
          }
          ?>
          <div class="form-group">
            <br><label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN</label>
            <label><h5>*angka desimal gunakan tanda titik</h5></label>
          </div>
          <?php
          if (@$settingform['nilai_un_bahasaindonesia'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN Bahasa Indonesia </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="nilai_un_bahasaindonesia" placeholder="gunakan tanda titik untuk desimal" value="<?php echo $tabel_siswa_mutasi_masuk->nilai_un_bahasaindonesia; ?>" id="nilai_un_bahasaindonesia">
                        </div>
          </div>
          
          <?php
        }
          if (@$settingform['nilai_un_matematika'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN Matematika </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="nilai_un_matematika" placeholder="gunakan tanda titik untuk desimal" value="<?php echo $tabel_siswa_mutasi_masuk->nilai_un_matematika; ?>" id="nilai_un_matematika">
                        </div>
          </div>
          
          <?php
        }
          if (@$settingform['nilai_un_ipa'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nilai UN IPA </label>
                          <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="nilai_un_ipa" placeholder="gunakan tanda titik untuk desimal" value="<?php echo $tabel_siswa_mutasi_masuk->nilai_un_ipa; ?>" id="nilai_un_ipa">
                        </div>
          </div>
          
          <?php
        }
          if (@$settingform['jumlah_nilai_un'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Nilai UN </label>
                         <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="jumlah_nilai_un" placeholder="gunakan tanda titik untuk desimal" value="<?php echo $tabel_siswa_mutasi_masuk->jumlah_nilai_un; ?>" id="jumlah_nilai_un">
                        </div>
          </div>

          <?php
          }
          if (@$settingform['sekolah_asal'] == '1') {
          ?>
          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Asal Sekolah</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="sekolah_asal" value="<?php echo $tabel_siswa_mutasi_masuk->sekolah_asal; ?>">
                        </div>
          </div>
          
          <?php
          }
          if (@$settingform['surat_ket_nisn'] == '1') {
          ?>
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" name="surat_ket_nisn" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->surat_ket_nisn == "on") 
                  { echo " checked"; } ?>> 
            </div><label>Surat Keterangan NISN</label>
          </div>
          

           <?php
         }
          if (@$settingform['fc_buku_rapor'] == '1') {
          ?>
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" name="fc_buku_rapor" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->fc_buku_rapor == "on") 
                  { echo " checked"; } ?>> 
            </div><label>Fotokopi Rapor</label>
          </div>
          
           <?php
         }
          if (@$settingform['fc_skhun'] == '1') {
          ?>
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" name="fc_skhun" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->fc_skhun == "on") 
                  { echo " checked"; } ?>> 
            </div><label>Fotokopi SKHUN</label>
          </div>
          
           <?php
         }
          if (@$settingform['surat_ket_bangku'] == '1') {
          ?>
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" name="surat_ket_bangku" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->surat_ket_bangku == "on") 
                  { echo " checked"; } ?>> 
            </div><label>Surat Keterangan Bangku</label>
          </div>
          
           <?php
         }
          if (@$settingform['surat_ket_pindah'] == '1') {
          ?>
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" name="surat_ket_pindah" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->surat_ket_pindah == "on") 
                  { echo " checked"; } ?>> 
            </div><label>Surat Keterangan Pindah</label>
          </div>
          
           <?php
         }
          if (@$settingform['skck_kepsek'] == '1') {
          ?>
          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" name="skck_kepsek" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->skck_kepsek == "on") 
                  { echo " checked"; } ?>> 
            </div><label>Surat Berkelakuan Baik</label>
          </div>
          
           <?php
          }

          
          if ($settingform['berkas_1'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" class="checkbox_berkas" name="berkas_1" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->berkas_1 == "on") 
                  { echo " checked"; } ?>> 
            </div><label><?php echo $settingformberkas['berkas_1']; ?></label>
          </div>

          <?php
          }
          if ($settingform['berkas_2'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" class="checkbox_berkas" name="berkas_2" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->berkas_2 == "on") 
                  { echo " checked"; } ?>> 
            </div><label><?php echo $settingformberkas['berkas_2']; ?></label>
          </div>
          
          <?php
          }
          if ($settingform['berkas_3'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" class="checkbox_berkas" name="berkas_3" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->berkas_3 == "on") 
                  { echo " checked"; } ?>> 
            </div><label><?php echo $settingformberkas['berkas_3']; ?></label>
          </div>

          <?php
          }
          if ($settingform['berkas_4'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" class="checkbox_berkas" name="berkas_4" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->berkas_4 == "on") 
                  { echo " checked"; } ?>> 
            </div><label><?php echo $settingformberkas['berkas_4']; ?></label>
          </div>

          <?php
          }
          if ($settingform['berkas_5'] == '1') {
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Berkas Lampiran </label>
             <div class="col-md-1 col-sm-1 col-xs-1">
              <input type="checkbox" class="checkbox_berkas" name="berkas_5" value="on" <?php 
                if ($tabel_siswa_mutasi_masuk->berkas_5 == "on") 
                  { echo " checked"; } ?>> 
            </div><label><?php echo $settingformberkas['berkas_5']; ?></label>
          </div>
          <?php
          }
          ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Verifikasi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div id="gender" class="dropdown" data-toggle="buttons">
                <select name="terverifikasi" id="terverifikasi" onchange="
                      if ($('.checkbox_berkas:checked').length == $('.checkbox_berkas').length) {
                       return true; 
                     } else { 
                      this.value = 'Belum Terverifikasi'; 
                      alert('Berkas belum lengkap!'); 
                      return false; 
                    } ">
                  <option value="Sudah Terverifikasi" <?php if ($tabel_siswa_mutasi_masuk->terverifikasi=="Sudah Terverifikasi") echo "selected";?>> Sudah Terverifikasi </option>
                  <option value="Belum Terverifikasi" <?php if ($tabel_siswa_mutasi_masuk->terverifikasi=="Belum Terverifikasi") echo "selected";?>> Belum Terverifikasi </option>
                </select> 
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var asal = $('#status_siswa').val();
          </script>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div id="gender" class="dropdown" data-toggle="buttons">
                <select name="status_siswa" id="status_siswa" value="<?php echo $tabel_siswa_mutasi_masuk->status_siswa; ?>" onchange="
                  if ($('#status_siswa').val() == 'Diterima') 
                    { 
                      if ($('#terverifikasi').val() == 'Sudah Terverifikasi') 
                        { asal = $('#status_siswa').val(); } 
                      else 
                      { 
                        alert('Pendaftar belum terverifikasi!');
                        $('#status_siswa').val(asal); 
                      } 
                    } asal = $('#status_siswa').val();" >
                    <option value="" > Pilih ... </option>
                    <option value="Diterima" <?php if (isset($tabel_siswa_mutasi_masuk->status_siswa) && $tabel_siswa_mutasi_masuk->status_siswa=="Diterima") echo "selected";?>> Diterima </option>
                    <option value="Tidak Diterima" <?php if (isset($tabel_siswa_mutasi_masuk->status_siswa) && $tabel_siswa_mutasi_masuk->status_siswa=="Tidak Diterima") echo "selected";?>> Tidak Diterima </option>
                     <option value="Dicabut" <?php if (isset($tabel_siswa_mutasi_masuk->status_siswa) && $tabel_siswa_mutasi_masuk->status_siswa=="Dicabut") echo "selected";?>> Dicabut</option>
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
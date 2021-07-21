<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Pendaftar PPDB : <?php echo $row_pendaftar_ppdb->nama; ?></h4>
    </div>
    <div class="modal-content">

      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_ujian/updatependaftarlolos/'.$row_pendaftar_ppdb->nisn_pendaftar); ?>" >
          <br>

          <?php
          if ($settingform['nomor_pendaftaran'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">No Pendaftaran </label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="nomor_pendaftaran" value="<?php echo $row_pendaftar_ppdb->nomor_pendaftaran; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingform['no_usbn'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">No. USBN </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name='no_usbn' value="<?php echo $row_pendaftar_ppdb->no_usbn; ?>">
              </div>
            </div>
            <?php
          }
          
          if ($settingform['nisn_pendaftar'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NISN </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name='nisn_pendaftar' value="<?php echo $row_pendaftar_ppdb->nisn_pendaftar; ?>">
              </div>
            </div>
            <?php
          }
          
          if ($settingform['nama'] == '1') 
          {
            ?>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nama" value="<?php echo $row_pendaftar_ppdb->nama; ?>">
              </div>
            </div>
            <?php
          }

          if ($settingform['tempat_lahir'] == '1') 
          {
            ?>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tempat_lahir" value="<?php echo $row_pendaftar_ppdb->tempat_lahir; ?>">
              </div>
            </div>
            <?php
          }
          
          if ($settingform['tanggal_lahir'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Lahir</label>
              <fieldset>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" class="form-control" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tanggal_lahir" value="<?php echo $row_pendaftar_ppdb->tanggal_lahir; ?>">
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                  </div>
                </div>
              </fieldset>
            </div>
            <?php
          }
          
          if ($settingform['jenis_kelamin'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <input type="radio" name="jenis_kelamin"
                  <?php if (isset($row_pendaftar_ppdb->jenis_kelamin) && $row_pendaftar_ppdb->jenis_kelamin=="Perempuan") echo "checked";?>
                                  value="Perempuan">Perempuan <br>
                 <input type="radio" name="jenis_kelamin"
                    <?php if (isset($row_pendaftar_ppdb->jenis_kelamin) && $row_pendaftar_ppdb->jenis_kelamin=="Laki-Laki") echo "checked";?>
                                    value="Laki-laki">Laki-Laki 
              </div>
            </div>
            <?php
          }
          
          if ($settingform['domisili'] == '1') 
          {
          ?>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Domisili </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="radio" name="domisili"
                  <?php if (isset($row_pendaftar_ppdb->domisili) && $row_pendaftar_ppdb->domisili=="Dalam Daerah") echo "checked";?>
                                  value="Dalam Daerah">Dalam Daerah <br>
                 <input type="radio" name="domisili"
                    <?php if (isset($row_pendaftar_ppdb->domisili) && $row_pendaftar_ppdb->domisili=="Luar Daerah") echo "checked";?>
                                    value="Luar Daerah">Luar Daerah 
            </div>
          </div>
          <?php
          }
          
          if ($settingform['alamat'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <textarea class="form-control" rows="5" name="alamat"><?php echo $row_pendaftar_ppdb->alamat;?></textarea>
              </div>
            </div>
            <?php
          }
          
          if ($settingform['asal_sekolah'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="asal_sekolah" value="<?php echo $row_pendaftar_ppdb->asal_sekolah; ?>">
              </div>
            </div>
            <?php
          }
          
          if ($settingform['tahun_lulus'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Kelulusan </label>
              <div class="col-md-3 col-sm-3 col-xs-3">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tahun_lulus" value="<?php echo $row_pendaftar_ppdb->tahun_lulus; ?>">
              </div>
            </div>
            <?php
          }
          ?>

          <div class="form-group">
            <br><label class="control-label col-md-3 col-sm-3 col-xs-12">Penilaian Ujian</label>
            <label><h5>*angka desimal gunakan tanda titik</h5></label>
          </div>

          <?php
          if ($settingformswasta['ujian_1'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_1']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_1" value="<?php echo $row_pendaftar_ppdb->ujian_1; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_2'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_2']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_2" value="<?php echo $row_pendaftar_ppdb->ujian_2; ?>">
                </div>
            </div>
          <?php
          }

          if ($settingformswasta['ujian_3'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_3']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_3" value="<?php echo $row_pendaftar_ppdb->ujian_3; ?>">
                </div>
            </div>
          <?php
          }

          if ($settingformswasta['ujian_4'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_4']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_4" value="<?php echo $row_pendaftar_ppdb->ujian_4; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_5'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_5']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_5" value="<?php echo $row_pendaftar_ppdb->ujian_5; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_6'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_6']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_6" value="<?php echo $row_pendaftar_ppdb->ujian_6; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_7'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_7']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_7" value="<?php echo $row_pendaftar_ppdb->ujian_7; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_8'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_8']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_8" value="<?php echo $row_pendaftar_ppdb->ujian_8; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_9'] == '1') 
          {
            ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_9']; ?></label>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <input type="text" class="form-control" name="ujian_9" value="<?php echo $row_pendaftar_ppdb->ujian_9; ?>">
                </div>
            </div>
            <?php
          }

          if ($settingformswasta['ujian_10'] == '1') 
          {
            ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $settingatribut['ujian_10']; ?></label>
              <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="text" class="form-control" name="ujian_10" value="<?php echo $row_pendaftar_ppdb->ujian_10; ?>">
              </div>
          </div>
          <?php
        }
        ?>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Nilai</label>
              <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="text" class="form-control" name="total_nilai" value="<?php echo $row_pendaftar_ppdb->total_nilai; ?>">
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


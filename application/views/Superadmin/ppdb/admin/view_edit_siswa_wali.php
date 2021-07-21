<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Ketentuan</h4>
    </div>
    <div class="modal-content">
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/admin/buku_induk/updatewalisiswa/'.$row_siswa_wali->id_orangtua); ?>">
          <br>
          
          <h4><center>Data Wali Siswa</center> </h4>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Wali</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" name="nama_wali" value="<?php echo $row_siswa_wali->nama_wali; ?>">
                </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="tempat_lahir_wali" value="<?php echo $row_siswa_wali->tempat_lahir_wali; ?>">
                </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir</label>
                <fieldset>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" class="form-control" id="tgl_berlaku" name="tanggal_lahir_wali" value="<?php echo $row_siswa_wali->tanggal_lahir_wali; ?>">
                      <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                      </div>
                    </div>
                  </fieldset>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <textarea class="form-control" rows="3" name="alamat_wali"><?php echo $row_siswa_wali->alamat_wali; ?></textarea>
              </div>
          </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $row_siswa_wali->kewarganegaraan_wali; ?>" name="kewarganegaraan_wali">
              </div>
          </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <select name="agama_wali" value="<?php echo $row_siswa_wali->agama_wali; ?>">
                  <option value="Islam" <?php if (isset($row_siswa_wali->agama_wali) && $row_siswa_wali->agama_wali=="Islam") echo "selected";?>> Islam </option>
                  <option value="Kristen" <?php if (isset($row_siswa_wali->agama_wali) && $row_siswa_wali->agama_wali=="Kristen") echo "selected";?>> Kristen </option>
                  <option value="Hindu" <?php if (isset($row_siswa_wali->agama_wali) && $row_siswa_wali->agama_wali=="Hindu") echo "selected";?>> Hindu </option>
                  <option value="Budha" <?php if (isset($row_siswa_wali->agama_wali) && $row_siswa_wali->agama_wali=="Budha") echo "selected";?>> Budha </option>
                  <option value="Katholik" <?php if (isset($row_siswa_wali->agama_wali) && $row_siswa_wali->agama_wali=="Katholik") echo "selected";?>> Katholik </option>
                  <option value="Lainnya" <?php if (isset($row_siswa_wali->agama_wali) && $row_siswa_wali->agama_wali=="Lainnya") echo "selected";?>> Lainnya </option>
                </select> 
              </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="pendidikan_wali" value="<?php echo $row_siswa_wali->pendidikan_wali; ?>">
                    <option value="Tidak Sekolah" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                    <option value="Sekolah Dasar" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                    <option value="Sekolah Menengah Pertama" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                    <option value="Sekolah Menengah Atas" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                    <option value="D1" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="D1") echo "selected";?>> D1 </option>
                    <option value="D2" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="D2") echo "selected";?>> D2 </option>
                    <option value="D3" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="D3") echo "selected";?>> D3 </option>
                    <option value="D4" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="D4") echo "selected";?>> D4 </option>
                    <option value="S1" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="S1") echo "selected";?>> S1 </option>
                    <option value="S2" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="S2") echo "selected";?>> S2 </option>
                    <option value="S3" <?php if (isset($row_siswa_wali->pendidikan_wali) && $row_siswa_wali->pendidikan_wali=="S3") echo "selected";?>> S3 </option>
                  </select> 
                </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Wali</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="pekerjaan_wali" value="<?php echo $row_siswa_wali->pekerjaan_wali; ?>">
                    <option value="Tidak Bekerja" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                    <option value="Nelayan" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Nelayan") echo "selected";?>> Nelayan </option>
                    <option value="Petani" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Petani") echo "selected";?>> Petani </option>
                    <option value="Peternak" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Peternak") echo "selected";?>> Peternak </option>
                    <option value="PNS/ TNI/ POLRI" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                    <option value="Karyawan Swasta" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                    <option value="Pedagang Kecil" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                    <option value="Pedagang Besar" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                    <option value="Wiraswasta" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                    <option value="Wirausaha" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Wirausaha") echo "selected";?>> Wirausaha </option>
                    <option value="Buruh" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Buruh") echo "selected";?>> Buruh </option>
                    <option value="Pensiunan" <?php if (isset($row_siswa_wali->pekerjaan_wali) && $row_siswa_wali->pekerjaan_wali=="Pensiunan") echo "selected";?>> Pensiunan </option>
                  </select> 
                </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" value="<?php echo $row_siswa_wali->no_telepon_hp_wali; ?>" class="form-control col-md-7 col-xs-12" name="no_telepon_hp_wali">
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


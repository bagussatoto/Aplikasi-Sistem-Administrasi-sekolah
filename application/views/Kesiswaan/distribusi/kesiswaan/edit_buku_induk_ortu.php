<html>
  <body>
    <div class="modal-dialog">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Ketentuan</h4>
      </div>
      <div class="modal-content">
        <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('distribusi/kesiswaan/update_buku_induk_ortu/'.$row_siswa_ortu->id_orangtua); ?>"><br>
          <h4><center>Data Ayah Siswa</center> </h4>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama ayah*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" required="required" name="nama_ayah" value="<?php echo $row_siswa_ortu->nama_ayah; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Depan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_depan_ayah" value="<?php echo $row_siswa_ortu->gelar_depan_ayah; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Belakang</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_belakang_ayah" value="<?php echo $row_siswa_ortu->gelar_belakang_ayah; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" name="tempat_lahir_ayah" value="<?php echo $row_siswa_ortu->tempat_lahir_ayah; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir*</label>
              <fieldset>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" class="form-control" id="tgl_berlaku" name="tgl_lahir_ayah" value="<?php echo $row_siswa_ortu->tanggal_lahir_ayah; ?>">
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                  </div>
                </div>
              </fieldset>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kewarganegaraan_ayah" value="<?php echo $row_siswa_ortu->kewarganegaraan_ayah; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama*</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <select required="required" name="agama_ayah" value="<?php echo $row_siswa_ortu->agama_ayah; ?>">
                  <option value="Islam" <?php if (isset($row_siswa_ortu->agama_ayah) && $row_siswa_ortu->agama_ayah=="Islam") echo "selected";?>> Islam </option>
                  <option value="Kristen" <?php if (isset($row_siswa_ortu->agama_ayah) && $row_siswa_ortu->agama_ayah=="Kristen") echo "selected";?>> Kristen </option>
                  <option value="Hindu" <?php if (isset($row_siswa_ortu->agama_ayah) && $row_siswa_ortu->agama_ayah=="Hindu") echo "selected";?>> Hindu </option>
                  <option value="Budha" <?php if (isset($row_siswa_ortu->agama_ayah) && $row_siswa_ortu->agama_ayah=="Budha") echo "selected";?>> Budha </option>
                  <option value="Katholik" <?php if (isset($row_siswa_ortu->agama_ayah) && $row_siswa_ortu->agama_ayah=="Katholik") echo "selected";?>> Katholik </option>
                  <option value="Lainnya" <?php if (isset($row_siswa_ortu->agama_ayah) && $row_siswa_ortu->agama_ayah=="Lainnya") echo "selected";?>> Lainnya </option>
                </select> 
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="pendidikan_ayah" value="<?php echo $row_siswa_ortu->pendidikan_ayah; ?>">
                <option value="Tidak Sekolah" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                <option value="Sekolah Dasar" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                <option value="Sekolah Menengah Pertama" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                <option value="Sekolah Menengah Atas" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                <option value="D1" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="D1") echo "selected";?>> D1 </option>
                <option value="D2" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="D2") echo "selected";?>> D2 </option>
                <option value="D3" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="D3") echo "selected";?>> D3 </option>
                <option value="D4" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="D4") echo "selected";?>> D4 </option>
                <option value="S1" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="S1") echo "selected";?>> S1 </option>
                <option value="S2" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="S2") echo "selected";?>> S2 </option>
                <option value="S3" <?php if (isset($row_siswa_ortu->pendidikan_ayah) && $row_siswa_ortu->pendidikan_ayah=="S3") echo "selected";?>> S3 </option>
              </select> 
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Ayah</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="pekerjaan_ayah" value="<?php echo $row_siswa_ortu->pekerjaan_ayah; ?>">
                <option value="Tidak Bekerja" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                <option value="Nelayan" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Nelayan") echo "selected";?>> Nelayan </option>
                <option value="Petani" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Petani") echo "selected";?>> Petani </option>
                <option value="Peternak" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Peternak") echo "selected";?>> Peternak </option>
                <option value="PNS/ TNI/ POLRI" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                <option value="Karyawan Swasta" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                <option value="Pedagang Kecil" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                <option value="Pedagang Besar" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                <option value="Wiraswasta" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                <option value="Wirausaha" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Wirausaha") echo "selected";?>> Wirausaha </option>
                <option value="Buruh" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Buruh") echo "selected";?>> Buruh </option>
                <option value="Pensiunan" <?php if (isset($row_siswa_ortu->pekerjaan_ayah) && $row_siswa_ortu->pekerjaan_ayah=="Pensiunan") echo "selected";?>> Pensiunan </option>
              </select> 
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="penghasilan_ayah" value="<?php echo $row_siswa_ortu->penghasilan_ayah; ?>">
                  <option value="Kurang dari Rp. 499.999" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Kurang dari Rp. 499.999") echo "selected";?>> Kurang dari Rp. 499.999 </option>
                  <option value="Rp. 500.000 sd Rp. 999.999" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Rp. 500.000 sd Rp. 999.999") echo "selected";?>> Rp. 500.000 sd Rp. 999.999 </option>
                  <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Rp. 1.000.000 sd Rp. 1.999.999") echo "selected";?>> Rp. 1.000.000 sd Rp. 1.999.999 </option>
                  <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Rp. 2.000.000 sd Rp. 3.999.999") echo "selected";?>> Rp. 2.000.000 sd Rp. 3.999.999 </option>
                  <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Rp. 4.000.000 sd Rp. 9.999.999") echo "selected";?>> Rp. 4.000.000 sd Rp. 9.999.999 </option>
                  <option value="Lebih dari Rp. 10.000.000" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Lebih dari Rp. 10.000.000") echo "selected";?>> Lebih dari Rp. 10.000.000 </option>
                  <option value="Tidak Ada" <?php if (isset($row_siswa_ortu->penghasilan_ayah) && $row_siswa_ortu->penghasilan_ayah=="Tidak Ada") echo "selected";?>> Tidak Ada </option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="no_telepon_hp_ayah" value="<?php echo $row_siswa_ortu->no_telepon_hp_ayah; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="ayah_berkebutuhan_khusus" value="<?php echo $row_siswa_ortu->ayah_berkebutuhan_khusus; ?>">
                  <option value="Tidak" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Tidak") echo "selected";?>> Tidak </option>
                    <option value="Netra" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Netra") echo "selected";?>> Netra </option>
                    <option value="Rungu" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Rungu") echo "selected";?>> Rungu </option>
                    <option value="Grahita Ringan" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Grahita Ringan") echo "selected";?>> Grahita Ringan </option>
                    <option value="Grahita Sedang" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Grahita Sedang") echo "selected";?>> Grahita Sedang </option>
                    <option value="Daksa Ringan" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Daksa Ringan") echo "selected";?>> Daksa Ringan </option>
                    <option value="Daksa Sedang" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Daksa Sedang") echo "selected";?>> Daksa Sedang </option>
                    <option value="Laras" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Laras") echo "selected";?>> Laras </option>
                    <option value="Wicara" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Wicara") echo "selected";?>> Wicara </option>
                    <option value="Tuna Ganda" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Tuna Ganda") echo "selected";?>> Tuna Ganda </option>
                    <option value="Hiperaktif" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Hiperaktif") echo "selected";?>> Hiperaktif </option>
                    <option value="Cerdas Istimewa" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Cerdas Istimewa") echo "selected";?>> Cerdas Istimewa </option>
                    <option value="Bakat Istimewa" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Bakat Istimewa") echo "selected";?>> Bakat Istimewa </option>
                    <option value="Kesulitan Belajar" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Kesulitan Belajar") echo "selected";?>> Kesulitan Belajar </option>
                    <option value="Narkoba" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Narkoba") echo "selected";?>> Narkoba </option>
                    <option value="Indigo" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Indigo") echo "selected";?>> Indigo </option>
                    <option value="Down Syndrome" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Down Syndrome") echo "selected";?>> Down Syndrome </option>
                    <option value="Autis" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Autis") echo "selected";?>> Autis </option>
                    <option value="Terbelakang" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Terbelakang") echo "selected";?>> Terbelakang </option>
                    <option value="Bencana Alam/ Sosial" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Bencana Alam/ Sosial") echo "selected";?>> Bencana Alam/ Sosial </option>
                    <option value="Tidak Mampu Ekonomi" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Tidak Mampu Ekonomi") echo "selected";?>> Tidak Mampu Ekonomi </option>
                    <option value="Lainnya" <?php if (isset($row_siswa_ortu->ayah_berkebutuhan_khusus) && $row_siswa_ortu->ayah_berkebutuhan_khusus=="Lainnya") echo "selected";?>> Lainnya </option>
                  </select> 
                </div>
          </div>
          <br><br><h4><center>Data Ibu Siswa</center> </h4>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Ibu*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" required="required" name="nama_ibu" value="<?php echo $row_siswa_ortu->nama_ibu; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Depan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_depan_ibu" value="<?php echo $row_siswa_ortu->gelar_depan_ibu; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gelar Belakang</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="gelar_belakang_ibu" value="<?php echo $row_siswa_ortu->gelar_belakang_ibu; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" name="tempat_lahir_ibu" value="<?php echo $row_siswa_ortu->tempat_lahir_ibu; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir*</label>
              <fieldset>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" class="form-control" required="required" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tanggal_lahir_ibu" value="<?php echo $row_siswa_ortu->tanggal_lahir_ibu; ?>">
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                  </div>
                </div>
              </fieldset>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kewarganegaraan_ibu" value="<?php echo $row_siswa_ortu->kewarganegaraan_ibu; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama*</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <select required="required" name="agama_ibu" value="<?php echo $row_siswa_ortu->agama_ibu; ?>">
                  <option value="Islam" <?php if (isset($row_siswa_ortu->agama_ibu) && $row_siswa_ortu->agama_ibu=="Islam") echo "selected";?>> Islam </option>
                  <option value="Kristen" <?php if (isset($row_siswa_ortu->agama_ibu) && $row_siswa_ortu->agama_ibu=="Kristen") echo "selected";?>> Kristen </option>
                  <option value="Hindu" <?php if (isset($row_siswa_ortu->agama_ibu) && $row_siswa_ortu->agama_ibu=="Hindu") echo "selected";?>> Hindu </option>
                  <option value="Budha" <?php if (isset($row_siswa_ortu->agama_ibu) && $row_siswa_ortu->agama_ibu=="Budha") echo "selected";?>> Budha </option>
                  <option value="Katholik" <?php if (isset($row_siswa_ortu->agama_ibu) && $row_siswa_ortu->agama_ibu=="Katholik") echo "selected";?>> Katholik </option>
                  <option value="Lainnya" <?php if (isset($row_siswa_ortu->agama_ibu) && $row_siswa_ortu->agama_ibu=="Lainnya") echo "selected";?>> Lainnya </option>
                </select> 
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="pendidikan_ibu" value="<?php echo $row_siswa_ortu->pendidikan_ibu; ?>">
                  <option value="Tidak Sekolah" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                  <option value="Sekolah Dasar" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                  <option value="Sekolah Menengah Pertama" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                  <option value="Sekolah Menengah Atas" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                  <option value="D1" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="D1") echo "selected";?>> D1 </option>
                  <option value="D2" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="D2") echo "selected";?>> D2 </option>
                  <option value="D3" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="D3") echo "selected";?>> D3 </option>
                  <option value="D4" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="D4") echo "selected";?>> D4 </option>
                  <option value="S1" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="S1") echo "selected";?>> S1 </option>
                  <option value="S2" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="S2") echo "selected";?>> S2 </option>
                  <option value="S3" <?php if (isset($row_siswa_ortu->pendidikan_ibu) && $row_siswa_ortu->pendidikan_ibu=="S3") echo "selected";?>> S3 </option>
                </select> 
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Ibu</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="pekerjaan_ibu" value="<?php echo $row_siswa_ortu->pekerjaan_ibu; ?>">
                  <option value="Tidak Bekerja" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                  <option value="Nelayan" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Nelayan") echo "selected";?>> Nelayan </option>
                  <option value="Petani" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Petani") echo "selected";?>> Petani </option>
                  <option value="Peternak" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Peternak") echo "selected";?>> Peternak </option>
                  <option value="PNS/ TNI/ POLRI" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                  <option value="Karyawan Swasta" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                  <option value="Pedagang Kecil" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                  <option value="Pedagang Besar" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                  <option value="Wiraswasta" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                  <option value="Wirausaha" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Wirausaha") echo "selected";?>> Wirausaha </option>
                  <option value="Buruh" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Buruh") echo "selected";?>> Buruh </option>
                  <option value="Pensiunan" <?php if (isset($row_siswa_ortu->pekerjaan_ibu) && $row_siswa_ortu->pekerjaan_ibu=="Pensiunan") echo "selected";?>> Pensiunan </option>
                </select> 
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="penghasilan_ibu" value="<?php echo $row_siswa_ortu->penghasilan_ibu; ?>">
                  <option value="Kurang dari Rp. 499.999" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Kurang dari Rp. 499.999") echo "selected";?>> Kurang dari Rp. 499.999 </option>
                  <option value="Rp. 500.000 sd Rp. 999.999" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Rp. 500.000 sd Rp. 999.999") echo "selected";?>> Rp. 500.000 sd Rp. 999.999 </option>
                  <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Rp. 1.000.000 sd Rp. 1.999.999") echo "selected";?>> Rp. 1.000.000 sd Rp. 1.999.999 </option>
                  <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Rp. 2.000.000 sd Rp. 3.999.999") echo "selected";?>> Rp. 2.000.000 sd Rp. 3.999.999 </option>
                  <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Rp. 4.000.000 sd Rp. 9.999.999") echo "selected";?>> Rp. 4.000.000 sd Rp. 9.999.999 </option>
                  <option value="Lebih dari Rp. 10.000.000" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Lebih dari Rp. 10.000.000") echo "selected";?>> Lebih dari Rp. 10.000.000 </option>
                  <option value="Tidak Ada" <?php if (isset($row_siswa_ortu->penghasilan_ibu) && $row_siswa_ortu->penghasilan_ibu=="Tidak Ada") echo "selected";?>> Tidak Ada </option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nomor_telepon_ibu" value="<?php echo $row_siswa_ortu->nomor_telepon_ibu; ?>">
                </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="ibu_berkebutuhan_khusus" value="<?php echo $row_siswa_ortu->ibu_berkebutuhan_khusus; ?>">
                  <option value="Tidak" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Tidak") echo "selected";?>> Tidak </option>
                    <option value="Netra" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Netra") echo "selected";?>> Netra </option>
                    <option value="Rungu" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Rungu") echo "selected";?>> Rungu </option>
                    <option value="Grahita Ringan" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Grahita Ringan") echo "selected";?>> Grahita Ringan </option>
                    <option value="Grahita Sedang" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Grahita Sedang") echo "selected";?>> Grahita Sedang </option>
                    <option value="Daksa Ringan" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Daksa Ringan") echo "selected";?>> Daksa Ringan </option>
                    <option value="Daksa Sedang" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Daksa Sedang") echo "selected";?>> Daksa Sedang </option>
                    <option value="Laras" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Laras") echo "selected";?>> Laras </option>
                    <option value="Wicara" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Wicara") echo "selected";?>> Wicara </option>
                    <option value="Tuna Ganda" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Tuna Ganda") echo "selected";?>> Tuna Ganda </option>
                    <option value="Hiperaktif" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Hiperaktif") echo "selected";?>> Hiperaktif </option>
                    <option value="Cerdas Istimewa" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Cerdas Istimewa") echo "selected";?>> Cerdas Istimewa </option>
                    <option value="Bakat Istimewa" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Bakat Istimewa") echo "selected";?>> Bakat Istimewa </option>
                    <option value="Kesulitan Belajar" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Kesulitan Belajar") echo "selected";?>> Kesulitan Belajar </option>
                    <option value="Narkoba" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Narkoba") echo "selected";?>> Narkoba </option>
                    <option value="Indigo" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Indigo") echo "selected";?>> Indigo </option>
                    <option value="Down Syndrome" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Down Syndrome") echo "selected";?>> Down Syndrome </option>
                    <option value="Autis" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Autis") echo "selected";?>> Autis </option>
                    <option value="Terbelakang" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Terbelakang") echo "selected";?>> Terbelakang </option>
                    <option value="Bencana Alam/ Sosial" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Bencana Alam/ Sosial") echo "selected";?>> Bencana Alam/ Sosial </option>
                    <option value="Tidak Mampu Ekonomi" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Tidak Mampu Ekonomi") echo "selected";?>> Tidak Mampu Ekonomi </option>
                    <option value="Lainnya" <?php if (isset($row_siswa_ortu->ibu_berkebutuhan_khusus) && $row_siswa_ortu->ibu_berkebutuhan_khusus=="Lainnya") echo "selected";?>> Lainnya </option>
                  </select> 
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama wali</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" name="nama_wali" value="<?php echo $row_siswa_ortu->nama_wali; ?>">
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir wali</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" name="tempat_lahir_wali" value="<?php echo $row_siswa_ortu->tempat_lahir_wali; ?>">
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir Wali</label>
              <fieldset>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" class="form-control" id="tgl_berlaku" name="tanggal_lahir_wali" value="<?php echo $row_siswa_ortu->tanggal_lahir_wali; ?>">
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                  </div>
                </div>
              </fieldset>
          </div>

             <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan Wali</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="pendidikan_wali" value="<?php echo $row_siswa_ortu->pendidikan_wali; ?>">
                <option value="Tidak Sekolah" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="Tidak Sekolah") echo "selected";?>> Tidak Sekolah </option>
                <option value="Sekolah Dasar" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="Sekolah Dasar") echo "selected";?>> Sekolah Dasar </option>
                <option value="Sekolah Menengah Pertama" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="Sekolah Menengah Pertama") echo "selected";?>> Sekolah Menengah Pertama </option>
                <option value="Sekolah Menengah Atas" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="Sekolah Menengah Atas") echo "selected";?>> Sekolah Menengah Atas </option>
                <option value="D1" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="D1") echo "selected";?>> D1 </option>
                <option value="D2" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="D2") echo "selected";?>> D2 </option>
                <option value="D3" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="D3") echo "selected";?>> D3 </option>
                <option value="D4" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="D4") echo "selected";?>> D4 </option>
                <option value="S1" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="S1") echo "selected";?>> S1 </option>
                <option value="S2" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="S2") echo "selected";?>> S2 </option>
                <option value="S3" <?php if (isset($row_siswa_ortu->pendidikan_wali) && $row_siswa_ortu->pendidikan_wali=="S3") echo "selected";?>> S3 </option>
              </select> 
            </div>
          </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan Wali</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kewarganegaraan_wali" value="<?php echo $row_siswa_ortu->kewarganegaraan_wali; ?>">
              </div>
          </div>

           <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama Wali*</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <select required="required" name="agama_wali" value="<?php echo $row_siswa_ortu->agama_wali; ?>">
                  <option value="Islam" <?php if (isset($row_siswa_ortu->agama_wali) && $row_siswa_ortu->agama_wali=="Islam") echo "selected";?>> Islam </option>
                  <option value="Kristen" <?php if (isset($row_siswa_ortu->agama_wali) && $row_siswa_ortu->agama_wali=="Kristen") echo "selected";?>> Kristen </option>
                  <option value="Hindu" <?php if (isset($row_siswa_ortu->agama_wali) && $row_siswa_ortu->agama_wali=="Hindu") echo "selected";?>> Hindu </option>
                  <option value="Budha" <?php if (isset($row_siswa_ortu->agama_wali) && $row_siswa_ortu->agama_wali=="Budha") echo "selected";?>> Budha </option>
                  <option value="Katholik" <?php if (isset($row_siswa_ortu->agama_wali) && $row_siswa_ortu->agama_wali=="Katholik") echo "selected";?>> Katholik </option>
                  <option value="Lainnya" <?php if (isset($row_siswa_ortu->agama_wali) && $row_siswa_ortu->agama_wali=="Lainnya") echo "selected";?>> Lainnya </option>
                </select> 
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan Wali</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="pekerjaan_wali" value="<?php echo $row_siswa_ortu->pekerjaan_wali; ?>">
                <option value="Tidak Bekerja" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Tidak Bekerja") echo "selected";?>> Tidak Bekerja </option>
                <option value="Nelayan" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Nelayan") echo "selected";?>> Nelayan </option>
                <option value="Petani" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Petani") echo "selected";?>> Petani </option>
                <option value="Peternak" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Peternak") echo "selected";?>> Peternak </option>
                <option value="PNS/ TNI/ POLRI" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="PNS/ TNI/ POLRI") echo "selected";?>> PNS/ TNI/ POLRI </option>
                <option value="Karyawan Swasta" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Karyawan Swasta") echo "selected";?>> Karyawan Swasta </option>
                <option value="Pedagang Kecil" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Pedagang Kecil") echo "selected";?>> Pedagang Kecil </option>
                <option value="Pedagang Besar" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Pedagang Besar") echo "selected";?>> Pedagang Besar </option>
                <option value="Wiraswasta" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Wiraswasta") echo "selected";?>> Wiraswasta </option>
                <option value="Wirausaha" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Wirausaha") echo "selected";?>> Wirausaha </option>
                <option value="Buruh" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Buruh") echo "selected";?>> Buruh </option>
                <option value="Pensiunan" <?php if (isset($row_siswa_ortu->pekerjaan_wali) && $row_siswa_ortu->pekerjaan_wali=="Pensiunan") echo "selected";?>> Pensiunan </option>
              </select> 
            </div>
          </div>

              <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penghasilan Wali</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="penghasilan_wali" value="<?php echo $row_siswa_ortu->penghasilan_wali; ?>">
                  <option value="Kurang dari Rp. 499.999" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Kurang dari Rp. 499.999") echo "selected";?>> Kurang dari Rp. 499.999 </option>
                  <option value="Rp. 500.000 sd Rp. 999.999" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Rp. 500.000 sd Rp. 999.999") echo "selected";?>> Rp. 500.000 sd Rp. 999.999 </option>
                  <option value="Rp. 1.000.000 sd Rp. 1.999.999" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Rp. 1.000.000 sd Rp. 1.999.999") echo "selected";?>> Rp. 1.000.000 sd Rp. 1.999.999 </option>
                  <option value="Rp. 2.000.000 sd Rp. 3.999.999" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Rp. 2.000.000 sd Rp. 3.999.999") echo "selected";?>> Rp. 2.000.000 sd Rp. 3.999.999 </option>
                  <option value="Rp. 4.000.000 sd Rp. 9.999.999" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Rp. 4.000.000 sd Rp. 9.999.999") echo "selected";?>> Rp. 4.000.000 sd Rp. 9.999.999 </option>
                  <option value="Lebih dari Rp. 10.000.000" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Lebih dari Rp. 10.000.000") echo "selected";?>> Lebih dari Rp. 10.000.000 </option>
                  <option value="Tidak Ada" <?php if (isset($row_siswa_ortu->penghasilan_wali) && $row_siswa_ortu->penghasilan_wali=="Tidak Ada") echo "selected";?>> Tidak Ada </option>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Wali</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="alamat_wali" value="<?php echo $row_siswa_ortu->alamat_wali; ?>">
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Telepon Wali</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12" name="no_telepon_hp_wali" value="<?php echo $row_siswa_ortu->no_telepon_hp_wali; ?>">
              </div>
          </div>






          <br>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>   
  </body>
</html>
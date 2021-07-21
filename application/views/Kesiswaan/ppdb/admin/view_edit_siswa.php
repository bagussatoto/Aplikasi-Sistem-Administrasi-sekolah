<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Siswa : <?php echo $row_siswa->nama; ?></h4>
    </div>
    <div class="modal-content">
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/admin/buku_induk/updatesiswa/'.$row_siswa->nisn); ?>" enctype="multipart/form-data">
          <br>
          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NISN*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control col-md-7 col-xs-12" id="first-name" required="required" name="nisn" value="<?php echo $row_siswa->nisn; ?>">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Induk Siswa</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="no_induk_siswa" value="<?php echo $row_siswa->no_induk_siswa; ?>">
                </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img class="profile-user-img" src="<?php echo base_url();?>assets/kesiswaan/foto_siswa/<?php echo $row_siswa->foto; ?>" alt="Belum Ada Foto Siswa">
                  <input type="file" class="form-control col-md-7 col-xs-12" name="foto" accept="image/*" >
                </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" name="nama" value="<?php echo $row_siswa->nama; ?>">
                </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="radio" name="jenis_kelamin" required="required"
                    <?php if (isset($row_siswa->jenis_kelamin) && $row_siswa->jenis_kelamin=="Perempuan") echo "checked";?>
                                    value="Perempuan">Perempuan <br>
                   <input type="radio" required="required" name="jenis_kelamin" 
                      <?php if (isset($row_siswa->jenis_kelamin) && $row_siswa->jenis_kelamin=="Laki-Laki") echo "checked";?>
                                      value="Laki-laki">Laki-Laki 
                </div> 
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" name="tempat_lahir"  value="<?php echo $row_siswa->tempat_lahir; ?>">
                </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir*</label>
                <fieldset>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" class="form-control" id="tgl_berlaku" name="tanggal_lahir" required="required" value="<?php echo $row_siswa->tanggal_lahir; ?>">
                      <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                      </div>
                    </div>
                  </fieldset>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_telepon"  value="<?php echo $row_siswa->no_telepon; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="email"  value="<?php echo $row_siswa->email; ?>">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="dropdown" data-toggle="buttons">
                    <select required="required" name="agama" value="<?php echo $row_siswa->agama; ?>">
                      <option value="Islam" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Islam") echo "selected";?>> Islam </option>
                      <option value="Kristen" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Kristen") echo "selected";?>> Kristen </option>
                      <option value="Hindu" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Hindu") echo "selected";?>> Hindu </option>
                      <option value="Budha" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Budha") echo "selected";?>> Budha </option>
                      <option value="Katholik" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Katholik") echo "selected";?>> Katholik </option>
                      <option value="Lainnya" <?php if (isset($row_siswa->agama) && $row_siswa->agama=="Lainnya") echo "selected";?>> Lainnya </option>
                    </select> 
                  </div>
                </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat*</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="textarea" required="required" name="alamat"><?php echo $row_siswa->alamat; ?> </textarea>
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">RT</label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="rt" value="<?php echo $row_siswa->rt; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">RW</label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="rw" value="<?php echo $row_siswa->rw; ?>">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Dusun</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="nama_dusun" value="<?php echo $row_siswa->nama_dusun; ?>">
                </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Desa Kelurahan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="desa_kelurahan"  value="<?php echo $row_siswa->desa_kelurahan; ?>">
                </div>
          </div>
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kecamatan</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="kecamatan" value="<?php echo $row_siswa->kecamatan; ?>">
                </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kode Pos</label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="kode_pos" value="<?php echo $row_siswa->kode_pos; ?>">
              </div>
          </div>
          
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Tinggal</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="tempat_tinggal" value="<?php echo $row_siswa->tempat_tinggal; ?>">
                    <option value="Dengan Orang Tua" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Dengan Orang Tua") echo "selected";?>> Dengan Orang Tua </option>
                     <option value="Dengan Saudara" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Dengan Saudara") echo "selected";?>> Dengan Saudara </option>
                     <option value="Tinggal di asrama" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Tinggal di asrama") echo "selected";?>> Tinggal di asrama </option>
                     <option value="Tinggal di kos" <?php if (isset($row_siswa->tempat_tinggal) && $row_siswa->tempat_tinggal=="Tinggal di kos") echo "selected";?>> Tinggal di kos </option>
              </select> 
              </div>
        </div>

      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Penduduk</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="radio" name="kategori_penduduk"
                    <?php if (isset($row_siswa->kategori_penduduk) && $row_siswa->kategori_penduduk=="Dalam Daerah") echo "checked";?>
                                    value="Dalam Daerah"> Dalam Daerah <br>
                   <input type="radio" name="kategori_penduduk"
                      <?php if (isset($row_siswa->kategori_penduduk) && $row_siswa->kategori_penduduk=="Luar Daerah") echo "checked";?>
                                      value="Luar Daerah"> Luar Daerah 
          </div>
      </div>

      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Transportasi</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="gender" class="dropdown" data-toggle="buttons">
              <select name="transportasi" value="<?php echo $row_siswa->transportasi; ?>">
                    <option value="Jalan Kaki" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Jalan Kaki") echo "selected";?>> Jalan Kaki </option>
                     <option value="Angkutan Umum" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Angkutan Umum") echo "selected";?>> Angkutan Umum </option>
                     <option value="Mobil/ Bus Antar Jemput" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Mobil/ Bus Antar Jemput") echo "selected";?>> Mobil/ Bus Antar Jemput </option>
                     <option value="Sepeda" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Sepeda") echo "selected";?>> Sepeda </option>
                     <option value="Sepeda Motor" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Sepeda Motor") echo "selected";?>> Sepeda Motor </option>
                     <option value="Mobil Pribadi" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Mobil Pribadi") echo "selected";?>> Mobil Pribadi </option>
                     <option value="Lainnya" <?php if (isset($row_siswa->transportasi) && $row_siswa->transportasi=="Lainnya") echo "selected";?>> Lainnya </option>
              </select> 
            </div>
          </div>
      </div>

          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah Dasar*</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="nama_sd_mi" value="<?php echo $row_siswa->nama_sd_mi; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lama Belajar di SD/ MI*</label>
             <div class="col-md-3 col-sm-3 col-xs-3">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="lama_belajar_disd_mi" value="<?php echo $row_siswa->lama_belajar_disd_mi; ?>">
              </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Mutasi</label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" placeholder=" apabila siswa pindahan" name="asal_mutasi" value="<?php echo $row_siswa->asal_mutasi; ?>">
              </div>
          </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pernah PAUD</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="radio" name="pernah_paud"
              <?php if (isset($row_siswa->pernah_paud) && $row_siswa->pernah_paud=="Ya") echo "checked";?>
                              value="Ya"> Ya <br>
            <input type="radio" name="pernah_paud"
              <?php if (isset($row_siswa->pernah_paud) && $row_siswa->pernah_paud=="Tidak") echo "checked";?>
                                value="Tidak"> Tidak 
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pernah TK</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="radio" name="pernah_tk"
              <?php if (isset($row_siswa->pernah_tk) && $row_siswa->pernah_tk=="Ya") echo "checked";?>
                              value="Ya"> Ya <br>
            <input type="radio" name="pernah_tk"
              <?php if (isset($row_siswa->pernah_tk) && $row_siswa->pernah_tk=="Tidak") echo "checked";?>
                                value="Tidak"> Tidak 
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor SKHUN*</label>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <input id="middle-name" required="required" class="form-control col-md-7 col-xs-12" type="text" name="no_skhun_mi" value="<?php echo $row_siswa->no_skhun_mi; ?>">
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor SKHUN Sementara</label>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_seri_skhun_s" value="<?php echo $row_siswa->no_seri_skhun_s; ?>">
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Seri Ijazah*</label>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="no_seri_ijazah_sd_mi" required="required" value="<?php echo $row_siswa->no_seri_ijazah_sd_mi; ?>">
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Penerima Kartu Perlidungan Sosial/ Kartu Keluarga Sejahtera/ Program Keluarga Harapan/ Kartu Indonesia Pintar</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="radio" name="penerima_kps_kks_pkh_kip"
              <?php if (isset($row_siswa->penerima_kps_kks_pkh_kip) && $row_siswa->penerima_kps_kks_pkh_kip=="Ya") echo "checked";?>
                              value="Ya"> Ya <br>
            <input type="radio" name="penerima_kps_kks_pkh_kip"
              <?php if (isset($row_siswa->penerima_kps_kks_pkh_kip) && $row_siswa->penerima_kps_kks_pkh_kip=="Tidak") echo "checked";?>
                                value="Tidak"> Tidak 
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Penerima</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" placeholder=" Tidak perlu diisi jika Bukan Penerima" class="form-control col-md-7 col-xs-12" type="text" name="no_penerima" value="<?php echo $row_siswa->no_penerima; ?>">
          </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pernah Menderita Sakit</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="pernah_menderita_sakit" value="<?php echo $row_siswa->pernah_menderita_sakit; ?>">
          </div>
      </div>

      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berkebutuhan Khusus*</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="berkebutuhan_khusus" value="<?php echo $row_siswa->berkebutuhan_khusus; ?>">
              <option value="Tidak" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Tidak") echo "selected";?>> Tidak </option>
                <option value="Netra" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Netra") echo "selected";?>> Netra </option>
                <option value="Rungu" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Rungu") echo "selected";?>> Rungu </option>
                <option value="Grahita Ringan" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Grahita Ringan") echo "selected";?>> Grahita Ringan </option>
                <option value="Grahita Sedang" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Grahita Sedang") echo "selected";?>> Grahita Sedang </option>
                <option value="Daksa Ringan" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Daksa Ringan") echo "selected";?>> Daksa Ringan </option>
                <option value="Daksa Sedang" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Daksa Sedang") echo "selected";?>> Daksa Sedang </option>
                <option value="Laras" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Laras") echo "selected";?>> Laras </option>
                <option value="Wicara" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Wicara") echo "selected";?>> Wicara </option>
                <option value="Tuna Ganda" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Tuna Ganda") echo "selected";?>> Tuna Ganda </option>
                <option value="Hiperaktif" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Hiperaktif") echo "selected";?>> Hiperaktif </option>
                <option value="Cerdas Istimewa" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Cerdas Istimewa") echo "selected";?>> Cerdas Istimewa </option>
                <option value="Bakat Istimewa" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Bakat Istimewa") echo "selected";?>> Bakat Istimewa </option>
                <option value="Kesulitan Belajar" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Kesulitan Belajar") echo "selected";?>> Kesulitan Belajar </option>
                <option value="Narkoba" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Narkoba") echo "selected";?>> Narkoba </option>
                <option value="Indigo" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Indigo") echo "selected";?>> Indigo </option>
                <option value="Down Syndrome" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Down Syndrome") echo "selected";?>> Down Syndrome </option>
                <option value="Autis" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Autis") echo "selected";?>> Autis </option>
                <option value="Terbelakang" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Terbelakang") echo "selected";?>> Terbelakang </option>
                <option value="Bencana Alam/ Sosial" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Bencana Alam/ Sosial") echo "selected";?>> Bencana Alam/ Sosial </option>
                <option value="Tidak Mampu Ekonomi" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Tidak Mampu Ekonomi") echo "selected";?>> Tidak Mampu Ekonomi </option>
                <option value="Lainnya" <?php if (isset($row_siswa->berkebutuhan_khusus) && $row_siswa->berkebutuhan_khusus=="Lainnya") echo "selected";?>> Lainnya </option>
              </select> 
          </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Status Dalam Keluarga</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="radio" name="status_dalam_keluarga"
              <?php if (isset($row_siswa->status_dalam_keluarga) && $row_siswa->status_dalam_keluarga=="Kandung") echo "checked";?>
                              value="Kandung"> Kandung <br>
            <input type="radio" name="status_dalam_keluarga"
              <?php if (isset($row_siswa->status_dalam_keluarga) && $row_siswa->status_dalam_keluarga=="Angkat") echo "checked";?>
                                value="Angkat"> Angkat
          </div>
      </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-3">Anak Ke- </label>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <input type="text" class="form-control" name="anak_ke" value="<?php echo $row_siswa->anak_ke; ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Saudara Kandung</label>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <input type="text" class="form-control" name="jumlah_saudara_kandung" value="<?php echo $row_siswa->jumlah_saudara_kandung; ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah Saudara Tiri</label>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <input type="text" class="form-control" name="jumlah_saudara_tiri" value="<?php echo $row_siswa->jumlah_saudara_tiri; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Anak Yatim Piatu</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="gender" class="dropdown" data-toggle="buttons">
              <select name="anak_yatim_piatu" value="<?php echo $row_siswa->anak_yatim_piatu; ?>">
                <option value="Tidak" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Tidak") echo "selected";?>> Tidak </option>
                <option value="Yatim" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Yatim") echo "selected";?>> Yatim </option>
                 <option value="Piatu" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Piatu") echo "selected";?>> Piatu</option>
                 <option value="Yatim Piatu" <?php if (isset($row_siswa->anak_yatim_piatu) && $row_siswa->anak_yatim_piatu=="Yatim Piatu") echo "selected";?>> Yatim Piatu</option>
              </select> 
            </div>
          </div>
      </div>

      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa Sehari-hari</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="bahasa_sehari_hari_dirumah" value="<?php echo $row_siswa->bahasa_sehari_hari_dirumah; ?>">
          </div>
      </div>
  
  <br><h4><center>Data Periodik</center> </h4>
    <div class="form-group">
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tinggi Badan </label>
      <div class="col-md-3 col-sm-3 col-xs-3">
        <input placeholder=" dalam centimeter" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tinggi_badan" value="<?php echo $row_siswa->tinggi_badan; ?>">
      </div>
    </div>
    <div class="form-group"> 
      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Berat Badan </label>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <input placeholder="dalam kilogram" id="middle-name" class="form-control place col-md-7 col-xs-12" type="text" name="berat_badan" value="<?php echo $row_siswa->berat_badan; ?>">
        </div>
    </div>


          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="dropdown" data-toggle="buttons">
                    <select name="status_siswa" value="<?php echo $row_siswa->status_siswa; ?>">
                          <option value="Aktif" <?php if (isset($row_siswa->status_siswa) && $row_siswa->status_siswa=="Aktif") echo "selected";?>> Aktif </option>
                          <option value="Keluar" <?php if (isset($row_siswa->status_siswa) && $row_siswa->status_siswa=="Keluar") echo "selected";?>> Keluar </option>
                           <option value="Lulus" <?php if (isset($row_siswa->status_siswa) && $row_siswa->status_siswa=="Lulus") echo "selected";?>> Lulus</option>
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


<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Pengumuman</h4>
    </div>
    <div class="modal-content">
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('ppdb/admin/pendaftar_jalur_un/updatepengumuman/'.$row_pengumuman_ppdb->id_pengumuman_ppdb); ?>" enctype="multipart/form-data">
          <br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Pengumuman</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="judul" value="<?php echo $row_pengumuman_ppdb->judul; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Isi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                 <?php echo $row_pengumuman_ppdb->isi; ?><br/>
                 <input type="file" class="form-control" id="inputName" placeholder="Name" name="isi" accept="application/pdf">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal berlaku </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" class="form-control" required="required" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tanggal_berlaku"  value="<?php echo $row_pengumuman_ppdb->tanggal_berlaku; ?>">
              </div>
          </div>
          <div class="modal-footer">
            <a href="<?php echo site_url('ppdb/admin/pendaftar_jalur_un/deletepengumuman/'.$row_pengumuman_ppdb->id_pengumuman_ppdb); ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin data dihapus?');">Hapus</a>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </form>
  </div>
</div>     
</body>
</html>


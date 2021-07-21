<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Informasi Ketentuan</h4>
    </div>
    <div class="modal-content">
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/updateketentuan/'.$row_ketentuan_ppdb->id_ketentuan); ?>" enctype="multipart/form-data">
          <br>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Ketentuan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama_ketentuan" value="<?php echo $row_ketentuan_ppdb->nama_ketentuan; ?>">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Isi Ketentuan</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                 <?php echo $row_ketentuan_ppdb->isi_ketentuan; ?><br/>
                 <input type="file" class="form-control" id="inputName" placeholder="Name" name="isi_ketentuan" accept="application/pdf">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal berlaku </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" class="form-control" required="required" id="tgl_berlaku" placeholder="Tgl Berlaku" name="tgl_berlaku"  value="<?php echo $row_ketentuan_ppdb->tgl_berlaku; ?>">
              </div>
          </div>
          <div class="modal-footer">
            <a href="<?php echo site_url('suppdb/admin/pendaftar_jalur_un/deleteketentuan/'.$row_ketentuan_ppdb->id_ketentuan); ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin data dihapus?');">Hapus</a>
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
      </form>
    </div>
  </div>   
</body>
</html>


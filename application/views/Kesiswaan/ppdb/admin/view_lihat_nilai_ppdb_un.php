<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nilai Siswa : <?php echo $row_pendaftar_ppdb->nama; ?></h4> 
    </div>
    <div class="modal-content">
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('kesiswaan/admin/pendaftar_jalur_un/updatenilai/'.$row_pendaftar_ppdb->nisn_pendaftar); ?>">
          <br>
           <div class="row">            
            <div class="col-sm-5">
              <div class="dataTables_length" id="example1_length">
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6" for="first-name">Nilai UN B.Indonesia</label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai_un_ind" value="<?php echo $row_pendaftar_ppdb->nilai_un_ind; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name">Nilai UN Matematika</label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai_un_mat" value="<?php echo $row_pendaftar_ppdb->nilai_un_mat; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name">Nilai UN IPA</label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai_un_ipa" value="<?php echo $row_pendaftar_ppdb->nilai_un_ipa; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name">Nilai Prestasi</label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="nilai_prestasi" value="<?php echo $row_pendaftar_ppdb->nilai_prestasi; ?>" readonly>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Nilai</label>
              <div class="col-md-4 col-sm-4 col-xs-4">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nilai_un_nun" value="<?php echo $row_pendaftar_ppdb->nilai_un_nun; ?>" readonly>
                </div>
              </div>

          <br><br>
      </form>
    </div>
  </div>   
</body>
</html>
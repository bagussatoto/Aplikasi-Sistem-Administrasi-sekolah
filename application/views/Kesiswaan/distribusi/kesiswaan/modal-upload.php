<div class="modal fade" id="modal-upload-prestasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Informasi Import Data Prestasi</h4>
      </div>
      <div class="modal-body">
        <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('distribusi/kesiswaan/data_import_prestasi'); ?>" enctype="multipart/form-data">
          <div class="form-group">
            <div align="center"><br>
              <p>Untuk menghindari kesalahan dalam memasukan data, disarankan untuk mempelajari file berikut ini: </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4" align="right">
              <a type="button" role="button" class="btn btn-default" href="<?php echo base_url(); ?>assets/distribusi/import/Ketentuan Import Data Prestasi Siswa.pdf" download="Ketentuan Import Data Prestasi Siswa.pdf"><i class="fa fa-download text-blue"></i> Download Ketentuan</a>
            </div> 
            <div class="col-sm-4">
              <div class="form-group" align="right">
                <a type="button" role="button" class="btn btn-default" href="<?php echo base_url(); ?>assets/distribusi/import/Template Import Data Prestasi Siswa.xlsx" download="Template Import Data Prestasi Siswa.xlsx" class="btn btn-download btn-xs"><i class="fa fa-download text-blue"></i> Download Format Excel</a>
              </div> 
            </div><br><br>
          </div><br>
          <div class="form-group formgrup jarakform hasil-pendalaman">
                        <label for="file_prestasi_siswa" class="control-label col-md-3">Upload File Prestasi Siswa</label>
                        <div class="col-md-8 col-sm-4 col-xs-12 form-group">
                          <input type="file" name="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertFile" class="form-control" id="hasil-tpm" placeholder="file_prestasi">
                        </div>
                      </div><br><br>
          
           
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
       </form> 
      </div>
      
    </div>
  </div>
</div>
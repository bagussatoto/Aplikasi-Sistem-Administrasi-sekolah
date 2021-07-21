
<html>
<body>

  <div class="modal-dialog modal-lg" >
    
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h2 class="modal-title">Edit Deskripsi Nilai</h4>
     </div>
     <div class="modal-content"> 
      <form class="form-horizontal formgrup "  action="<?php echo base_url("superpen/ubah_desknilai/".$s->id_deskripsi); ?>" method="post" id="desknilai">
        <div class="bigbox-mapel" > 
          <div class="box-mapel">

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai atas</label>
              <div class="col-sm-4">
                <input type="hidden" name="id" value="<?php echo $s->id_deskripsi; ?>"> 
                <input type="text" name="bts_a" class="form-control"  value="<?php echo $s->Nilai_atas ; ?>">
              </div>
            </div>

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Bawah</label>
              <div class="col-sm-4">
                <input type="text" name="bts_b" class="form-control"  value="<?php echo $s->Nilai_bawah ; ?>">
              </div>
            </div>
            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Predikat</label>
              <div class="col-sm-4">
                <input type="text" name="predikat" class="form-control"  value="<?php echo $s->predikat ; ?>">
              </div>
            </div>
            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Deskripsi</label>
              <div class="col-sm-4">
                <textarea type="text" name="deskripsi" cols="31" rows="5"> <?php echo set_value('deskripsi'); ?>
                  <?php echo str_replace("<br />", "", $s->deskripsi) ; ?>
                </textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-danger" data-dismiss="modal" href="#lihatkategori" data-toggle="tab">Back</button>
              </div>
            </div>
          </div>
        </div>


      </form>
    </div>
  </div>

</body>
</html>


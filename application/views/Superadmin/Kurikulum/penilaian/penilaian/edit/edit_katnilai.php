<html>
<body>
  <div class="modal-dialog" >
    
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h2 class="modal-title">Edit Kategori Nilai</h4>
     </div>
     <div class="modal-content"> 
      <form class="form-horizontal formgrup"  action="<?php echo base_url("superpen/ubah_katnilai/".$a->id_kategorinilai); ?>" method="post">
        <div class="bigbox-mapel" > 
          <div class="box-mapel">

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Nama Kategori Nilai</label>
              <div class="col-sm-4">
                <input type="hidden" name="id" value="<?php echo $a->id_kategorinilai; ?>"> 
                <input type="text" name="katnilai" class="form-control"  value="<?php echo $a->kategori_nilai ; ?>">
              </div>
            </div>

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Bobot Nilai</label>
              <div class="col-sm-4">
                <input type="text" class="form-control"  name="bobot" value="<?php echo $a->bobot; ?>">
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


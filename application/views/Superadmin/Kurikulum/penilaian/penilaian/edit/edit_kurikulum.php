<html>
<body>
  <div class="modal-dialog" >
    
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h2 class="modal-title">Edit Kurikulum</h4>
     </div>
     <div class="modal-content"> 
      <form class="form-horizontal formgrup"  action="<?php echo base_url("Kurikulum/ubah_kurikulum/".$a->id_kurikulum); ?>" method="post" enctype="multipart/form-data">
        <div class="bigbox-mapel" > 
          <div class="box-mapel">

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Nama Kaldik</label>
              <div class="col-sm-4">
                <input type="hidden" name="id" value="<?php echo $a->id_kurikulum; ?>"> 
                <input type="text" name="nama_kurikulum" class="form-control"  value="<?php echo $a->nama_kurikulum ; ?>">
              </div>
            </div>

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Nama File</label>
              <div class="col-sm-4"><br/>
                <input type="file" name="nama_filekur" class="form-control" value="<?php echo $a->nama_filekur; ?>" >
                <input type="hidden" name="tahunajaran_id" value="<?php echo $a->id_kurikulum; ?>"">
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


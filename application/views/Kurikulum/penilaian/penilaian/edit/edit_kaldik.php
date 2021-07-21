<html>
<body>
  <div class="modal-dialog" >
    
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h2 class="modal-title">Edit Kalender Pendidikan</h4>
     </div>
     <div class="modal-content"> 
      <form class="form-horizontal formgrup"  action="<?php echo base_url("kurikulum/ubah_kaldik/".$a->id_kaldik); ?>" method="post" enctype="multipart/form-data">
        <div class="bigbox-mapel" > 
          <div class="box-mapel">

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Nama Kaldik</label>
              <div class="col-sm-4">
                <input type="hidden" name="id" value="<?php echo $a->id_kaldik; ?>"> 
                <input type="text" name="nama_kaldik" class="form-control"  value="<?php echo $a->nama_kaldik ; ?>">
              </div>
            </div>

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Simbol</label>
              <div class="col-sm-4"><img src="<?php echo base_url(); ?>assets/penilaian/simbol/<?php echo $a->simbol_kaldik; ?>" width="50"/><br/>
                <input type="file" name="simbol_kaldik" class="form-control" >
              </div>
            </div>

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Tanggal Awal</label>
              <div class="col-sm-4">
                <input type="date" name="tgl_awal" class="form-control"  value="<?php echo $a->tgl_awal ; ?>">
              </div>
            </div>

            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Tanggal Akhir</label>
              <div class="col-sm-4">
                <input type="date" name="tgl_akhir" class="form-control"  value="<?php echo $a->tgl_akhir ; ?>">
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


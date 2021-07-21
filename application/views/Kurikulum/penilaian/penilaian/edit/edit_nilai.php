<html>
<body>
  <div class="modal-dialog " >
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h2 class="modal-title">Edit Nilai Siswa</h4>
    </div>
   <div class="modal-content"> 
    <form class="form-horizontal formgrup "  action="<?php echo base_url('penilaian/penilaian/ubah_nilai/'.$f->id_nilai_siswa); ?>" method="post" >
      <div class="bigbox-mapel" > 
        <div class="box-mapel">

<!--         <div class="form=group">
            <input type="hidden" name="nisn" value="<?php echo $f->nisn ?>">
            <input type="hidden" name="katnilai" value="<?php echo $f->kategori_nilai_id ?>">
            <input type="hidden" name="jenis_na" value="<?php echo $f->jenis_na_id ?>">
            <input type="hidden" name="mapel" value="<?php echo $f->mapel_id ?>">
            <input type="text" name="nilai" value="<?php echo $f->Nilai_siswa ?>">
          </div> -->
<!-- 
        <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">NISN</label>
              <div class="col-sm-4">
                <input type="hidden" name="id" value="<?php echo $f->id_nilai_siswa; ?>"> 
                <input type="text" name="bts_a" class="form-control"  value="<?php echo $f->nisn ; ?>" readonly>
              </div>
          </div>
           <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Kategori Nilai</label>
              <div class="col-sm-4">
                <input type="text" name="bts_a" class="form-control"  value="<?php echo $f->kategori_nilai_id ; ?>" readonly>
              </div>
          </div>
           <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Jenis Nilai</label>
              <div class="col-sm-4">
                <input type="text" name="bts_a" class="form-control"  value="<?php echo $f->jenis_na_id ; ?>" readonly>
              </div>
          </div>
           <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Mata Pelajaran</label>
              <div class="col-sm-4">
                <input type="text" name="bts_a" class="form-control"  value="<?php echo $f->mapel_id ; ?>" readonly>
              </div>
          </div>
           <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Nilai Siswa</label>
              <div class="col-sm-4">
                <input type="text" name="bts_a" class="form-control"  value="<?php echo $f->Nilai_siswa ; ?>">
              </div>
          </div> 
        </div> -->
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


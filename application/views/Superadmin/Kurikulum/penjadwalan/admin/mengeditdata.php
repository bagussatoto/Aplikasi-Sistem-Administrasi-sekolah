

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/admin">Dashboard </a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="tab-pane" id="tambahdatpeg">
      <form class="form-horizontal formmapel">
        <div class="bigbox-mapel"> 
          <div class="box-mapel">
           <div class="box-header">
            <h3 class="box-title">Edit Data Pegawai</h3>
          </div>

          <div class="col-sm-6">

            <div class="form-group formgrup jarakform" >
              <label  class="col-sm-4 control-label">NIP</label>
              <div class="col-sm-7">
               <input type="text" class="form-control" id="inputName" placeholder="NIP" value="19213273126">
             </div>
           </div>

           <div class="form-group formgrup jarakform">
            <label  class="col-sm-4 control-label">Nama </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="inputName" placeholder="Nama" value="Ahmad Muzadi">
            </div>
          </div>

          <div class="form-group formgrup jarakform">
            <label  class="col-sm-4 control-label">No. SK </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="inputName" placeholder="No. SK" value="672362156351">
            </div>
          </div>

          <div class="form-group formgrup jarakform">
            <label  class="col-sm-4 control-label">Jenis Kelamin </label>
            <div class="col-sm-7">
             <select class="form-control" name="Kelamin">
             <option value="pilih">-Pilih Gender-</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>

            </select>
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Golongan </label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="inputName" placeholder="Golongan" value="IIIA">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Tanggal Lahir</label>
          <div class="col-sm-7">
            <input id="datetimepicker" type="text" class="form-control" value="03/09/1958">
          </div>
        </div>

        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">TMT Capeg</label>
          <div class="col-sm-7">
            <input id="datetimepicker1" type="text" class="form-control" value="01/03/1978">
          </div>
        </div>


       <div class="form-group formgrup jarakform">
                  <label  class="col-sm-4 control-label">Kompetensi </label>
                  <div class="col-sm-7">
                   <select class="form-control" name="Kompetensi">
                     <option value="pilih">-Pilih Kompetensi-</option>
                     <option value="Pedagogik">Pedagogik</option>
                     <option value="Kepribadian">Kepribadian</option>
                     <option value="Sosial">Sosial</option>
                     <option value="Profesional">Profesional</option>
                   </select>
                 </div>
               </div>



        <div class="form-group formgrup jarakform">
          <label  class="col-sm-4 control-label">Alamat</label>
          <div class="col-sm-7">
            <textarea type="text" class="form-control" id="alamat" placeholder="Alamat">Jalan MT Haryono</textarea>
          </div>
        </div>
      </div>


      <div class="col-sm-6">
       <div class="col-sm-4"></div>
       <img src="<?php echo base_url();?>assets/admin/Fotoguru/3.jpg" class="col-sm-5">
     </div>

     <div class=" col-sm-6">
       <div class="col-sm-4">
       </div>
       <a href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="col-sm-3 btn btn-danger" style="margin:10%">Edit Foto</a>
     </div>



     <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <a href="<?php echo base_url();?>index.php/admin/datapegawai" type="button" role="button" class="btn btn-danger">Submit</a>
        <a href="<?php echo base_url();?>index.php/admin/datapegawai" type="button" role="button" class="btn btn-danger">Cancel</a>
      </div>
    </div>
  </form>
</div>
</section>
<!-- /.content -->
</div>


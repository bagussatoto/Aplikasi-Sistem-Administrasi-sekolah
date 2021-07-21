
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
  </section>





  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tahunajaran" data-toggle="tab">Tahun Ajaran</a></li>
            <li><a href="#tambahtahunajaran" data-toggle="tab">Tambah Tahun Ajaran</a></li>
          </ul>
          
          <div class="tab-content">
           <div class="active tab-pane" id="tahunajaran">
             <div class="box">
              <br>
            <table id="example1" class="table table-bordered table-striped" > 
              <thead> 
                <tr style="background-color: #53c68c ">
                  <th>No</th>
                  <th>Tahun Ajaran</th>  
                  <th>Semester</th>
                  <th>Status</th>      
                  <th>Action</th>      
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($dat->result() as $key) { ?>
                <tr>
                  <td><?php echo $no?></td>
                  <td><?php echo $key->tahun_ajaran;?></td>
                  <td><?php echo $key->semester;?></td>
                  <td><?php if ($key->id_setting != "") { echo "Aktif"; }?></td>
                  
                  <td><?php if ($key->id_setting == "") { ?>
                    <a type="button" class="btn btn-success btn-xs" href="<?php echo site_url('superadmin/aktifkantahunajaran/'.$key->id_tahun_ajaran); ?>">Aktif</a><?php }?>
                    <!-- <button type="button" class="btn btn-error btn-xs" style="background-color: red">Non-Aktif</button> -->
                  </td>
                </tr>
                <?php $no++; }?>
              </tbody>
            </table>
          </div>
        </div>


        <!-- /.tab-pane -->


          <div class="tab-pane" id="tambahtahunajaran">
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('superadmin/tambahtahunajaran'); ?>">
                  <div class="bigbox-mapel"> 
                  <div class="box-header">
                  <br>
                    <h3 class="box-title">Ganti Password</h3>
                  </div>
                  <div class="box-mapel" style="padding: 2% 0">



                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">Tahun Ajaran</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="tahun_ajaran" placeholder="Masukkan Tahun Ajaran *2016/2017">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Semester</label>
                        <div class="col-sm-4">
                         <select class="form-control" name="semester" required>
                           <option selected disabled value="">-Pilih semester-</option>
                           <option value="ganjil">Ganjil</option>
                           <option value="genap">genap</option>
                         </select>
                       </div>
                     </div>

                      
                      <!-- <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Nama File Kaldik</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nama_file_kaldik">
                        </div>
                      </div> -->

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Tanggal Mulai</label>
                        <div class="col-sm-4">
                          <input id="datetimepicker" type="text" class="form-control" name="tanggal_mulai" required="required"  placeholder="Tanggal Mulai">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">tanggal Selesai</label>
                        <div class="col-sm-4">
                          <input id="datetimepicker1" type="text" class="form-control" name="tanggal_selesai" required="required"  placeholder="Tanggal Selesai">
                        </div>
                      </div>

                      
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                      <button type="submit" role="button" name="submit" class="btn btn-danger">Tambah Tahun AJaran</button>
                         <a href="<?php echo site_url('superadmin/tahunajaran');?>" type="button" role="button" class="btn btn-danger">Cancel</a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row (main row) -->
<!-- /modal -->

</section>
<!-- /.content -->
</div>s
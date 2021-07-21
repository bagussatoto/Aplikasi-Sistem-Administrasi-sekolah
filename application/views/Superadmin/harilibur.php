
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Hari Libur SMP Yogyakarta <br></center>
      <br>
    </h1>
  </section>





  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#harilibur" data-toggle="tab">Lihat Hari Libur</a></li>
            <!-- <li><a href="#hariliburnasional" data-toggle="tab">Lihat Hari Libur Nasional</a></li> -->
            <li><a href="#tambahharilibur" data-toggle="tab">Tambah Hari Libur</a></li>
            <!-- <li><a href="#tambahhariliburnasional" data-toggle="tab">Tambah Hari Libur Nasional</a></li> -->

          </ul>
          
          <div class="tab-content">
           <div class="active tab-pane" id="harilibur">
             <div class="box">
              <br>
            <table id="example1" class="table table-bordered table-striped" > 
              <thead> 
                <tr style="background-color: #53c68c ">
                  <th>No</th>
                  <th>Nama Hari Libur</th>  
                  <th>Tanggal Awal</th>
                  <th>Tanggal Akhir</th>
                  <th>Action</th>      
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($datlibur as $key) { ?>
                <tr>
                  <td><?php echo $no?></td>
                  <td><?php echo $key->nama_libur;?></td>
                  <td><?php echo $key->tanggal_awal;?></td>
                  <td><?php echo $key->tanggal_akhir;?></td>
                  <td><a type="button" class="btn btn-danger btn-xs" href="<?php echo site_url('superadmin/deleteharilibur/'.$key->id_tanggal_libur); ?>">Hapus</a>
                    <!-- <button type="button" class="btn btn-error btn-xs" style="background-color: red">Non-Aktif</button> -->
                  </td>
                </tr>
                <?php $no++; }?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane" id="hariliburnasional">
             <div class="box">
              <br>
            <table id="example3" class="table table-bordered table-striped" > 
              <thead> 
                <tr style="background-color: #53c68c ">
                  <th>No</th>
                  <th>Nama Hari Libur Nasional</th>  
                  <th>Tanggal Libur Nasional</th>
                  <th>Bulan Libur Nasional</th>
                  <th>Action</th>      
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($datliburnasional as $key) { ?>
                <tr>
                  <td><?php echo $no?></td>
                  <td><?php echo $key->nama_libur_nasional;?></td>
                  <td><?php echo $key->tanggal_libur_nasional;?></td>
                  <td><?php echo $key->bulan_libur_nasional;?></td>
                  <td><a type="button" class="btn btn-danger btn-xs" href="<?php echo site_url('superadmin/deletehariliburnasional/'.$key->id_tanggal_libur_nasional); ?>">Hapus</a>
                    <!-- <button type="button" class="btn btn-error btn-xs" style="background-color: red">Non-Aktif</button> -->
                  </td>
                </tr>
                <?php $no++; }?>
              </tbody>
            </table>
          </div>
        </div>


        <!-- /.tab-pane -->


          <div class="tab-pane" id="tambahharilibur">
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('superadmin/simpanharilibur'); ?>">
                  <div class="bigbox-mapel"> 
                  <div class="box-header">
                  <br>
                    <h3 class="box-title">Tambah Hari Libur</h3>
                  </div>
                  <div class="box-mapel" style="padding: 2% 0">



                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">Nama Hari Libur</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nama_libur">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Tanggal Awal</label>
                        <div class="col-sm-4">
                          <input id="datetimepicker" type="text" class="form-control" name="tanggal_awal" required="required"  placeholder="Tanggal Awal">
                        </div>
                      </div>

                       <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Tanggal Akhir</label>
                        <div class="col-sm-4">
                          <input id="datetimepicker1" type="text" class="form-control" name="tanggal_akhir" required="required"  placeholder="Tanggal Akhir">
                        </div>
                      </div>                 
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                      <button type="submit" role="button" name="submit" class="btn btn-danger">Tambah</button>
                         <a href="<?php echo site_url('superadmin/harilibur');?>" type="button" role="button" class="btn btn-danger">Cancel</a>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            <div class="tab-pane" id="tambahhariliburnasional">
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('superadmin/simpanhariliburnasional'); ?>">
                  <div class="bigbox-mapel"> 
                  <div class="box-header">
                  <br>
                    <h3 class="box-title">Tambah Hari Libur Nasional</h3>
                  </div>
                  <div class="box-mapel" style="padding: 2% 0">



                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">Nama Hari Libur Nasional</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="nama_libur_nasional">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Tanggal Libur Nasional</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="tanggal_libur_nasional" required="required"  placeholder="Tanggal">
                            <option value="">..</option>
                            <?php 
                            for ($i=1;$i<=31;$i++) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php 
                            }
                            ?>
                          </select>
                        </div>
                      </div>

                       <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Tanggal Akhir</label>
                        <div class="col-sm-4">
                          <select class="form-control" name="bulan_libur_nasional" required="required"  placeholder="Bulan">
                            <option value="">..</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                            
                          </select>
                        </div>
                      </div>                 
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                      <button type="submit" role="button" name="submit" class="btn btn-danger">Tambah</button>
                         <a href="<?php echo site_url('superadmin/harilibur');?>" type="button" role="button" class="btn btn-danger">Cancel</a>
                          
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
</div>
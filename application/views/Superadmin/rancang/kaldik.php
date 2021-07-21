  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Kalender Pendidikan SMP Yogyakarta <br></center>
        <!-- <center><small>Tahun Ajaran 2016-2017</small></center> -->
      </h1>
      <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
   
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#homekaldik" data-toggle="tab">Kalender Pendidikan</a></li>
              <li><a href="#tambahkaldik" data-toggle="tab">Tambah Kaldik</a></li>
              <li><a href="#datakaldik" data-toggle="tab">Data Kaldik</a></li>
            </ul>
            <div class="tab-content">
               <div class="active tab-pane" id="homekaldik">
               <div class="box">
              <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Kalender Akademik</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                
                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <!--The calendar -->
                <img  src="<?php echo base_url();?>assets/superadmin/image/kaldik.png" alt="User profile picture" style="width: 100%;">
              </div>
              </div>
            </div>
              
              <!-- /.tab-pane -->
    
              <div class="tab-pane" id="tambahkaldik">
               <form class="form-horizontal formkaldik">
                  <div class="form-group formgrup">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-4">
                      <input type="file" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                 
                  <div class="form-group" id="homekaldik">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form> 
              </div>
              <!-- /.tab-pane -->

                 <div class="tab-pane" id="editkaldik">
               <form class="form-horizontal formkaldik">
                  <div class="form-group formgrup">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-4">
                      <input type="file" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                 
                  <div class="form-group" id="homekaldik">
                    <div class="col-sm-offset-2 col-sm-10">
                      <td><button type="submit" class="btn btn-danger" href="#datakaldik" data-toggle="tab">Submit</button> <button type="submit" class="btn btn-danger" href="#datakaldik" data-toggle="tab">Back</button> </td>
                    </div>
                  </div>
                </form> 
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="datakaldik">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Kalender Pendidikan</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Nama file</th>
                        <th>Tahun Ajaran</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="fit">1</td>
                        <td><a data-toggle="modal" data-target="#kaldik1"> kaldik1.pdf</a></td>
                        <td>2016-2017</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkaldik" data-toggle="tab"> Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">2</td>
                        <td><a>kaldik2.pdf </a></td>
                        <td>2017-2018</td>
                        <td><button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkaldik" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>  
                      </tr>
                      <tr>
                        <td class="fit">3</td>
                        <td><a>kaldik3.pdf</a></td>
                        <td>2018-2019</td>
                        <td><button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkaldik" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      <tr>
                        <td class="fit">4</td>
                        <td><a>kaldik4.pdf</a></td>
                        <td>2019-2020</td>
                        <td><button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkaldik" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
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
      <div class="modal fade bs-example-modal-lg" id="kaldik1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">KALDIK TAHUN AJARAN 2016-2017</h4>
            </div>
            <div class="modal-body">
            <center><embed src="image/kaldik1.jpg"> </embed></center>
            </div>
            <div class="modal-footer">
              <a href="#kaldik1" data-toggle="tab"><button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button></a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

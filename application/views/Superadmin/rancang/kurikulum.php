
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Kurikulum SMP Yogyakarta <br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
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
              <li class="active"><a href="#dokumenkurikulum" data-toggle="tab">Dokumen Kurikulum</a></li>
              <li><a href="#tambahkurikulum" data-toggle="tab">Tambah Kurikulum</a></li>
              <li><a href="#datakurikulum" data-toggle="tab">Data Kurikulum </a></li>
            </ul>
            <div class="tab-content">
               <div class="active tab-pane" id="dokumenkurikulum">
               <div class="box">
                <div class="box-header jarakbox">
                <center><embed src="<?php echo site_url();?>assets/superadmin/dokumen_kurikulum/dokumenkurikulum.pdf" width="1000" height="1000"> </embed></center>
              </div>
              </div>
              </div>

              <!-- lihatdatakurikulum1 -->
              
              
            <!-- /.tab-pane -->
              <div class="tab-pane" id="tambahkurikulum">
               <form class="form-horizontal formkaldik">
                  <div class="form-group formgrup">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>
                    
                    <div class="col-sm-4">
                      <input type="file" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  

                 <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Kurikulum</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" placeholder="Nama Kurikulum">
                    </div>
                  </div>

                  <div class="form-group" id="dokumenkurikulum">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
             
              <!-- /.tab-pane -->
               <!-- /.tab-pane -->
              <div class="tab-pane" id="editkurikulum">
               <form class="form-horizontal formkaldik">
                  <div class="form-group formgrup">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>
                    
                    <div class="col-sm-4">
                      <input type="file" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  

                 <div class="form-group formgrup jarakform">
                    <label for="inputKurikulum" class="col-sm-2 control-label">Kurikulum</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" placeholder="Nama Kurikulum">
                    </div>
                  </div>

                  <div class="form-group" id="dokumenkurikulum">
                    <div class="col-sm-offset-2 col-sm-10">
                      <td><button type="submit" class="btn btn-danger" href="#datakurikulum" data-toggle="tab">Submit</button> <button type="submit" class="btn btn-danger" href="#datakurikulum" data-toggle="tab">Back</button></td>
                    </div>
                  </div>
                </form>
              </div>
             
              <!-- /.tab-pane -->

               <!-- /.tab-pane -->
              <div class="tab-pane" id="lihatkurikulum">
               <div class="box">
               <a href="#datakurikulum" data-toggle="tab"><button class="btnback"><i class="fa fa-chevron-left"></i></button></a>
                <div class="box-header jarakbox">
                <center><embed src="dokumen_kurikulum/contohaja.pdf" width="1000" height="1000"> </embed></center>
              </div>
              </div>
              </div>
             
              <!-- /.tab-pane -->

              <div class="tab-pane" id="datakurikulum">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Kurikulum</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Nama file</th>
                        <th>Kurikulum</th>
                        <th>Tahun Ajaran</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="fit">1</td>
                        <td><a href="#lihatkurikulum" data-toggle="tab">kurikulum1.pdf</a></td>
                        <td>KURIKULUM 2013</td>
                        <td>2016-2017</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkurikulum" data-toggle="tab"> Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">2</td>
                        <td><a href="#lihatkurikulum" data-toggle="tab">kurikulum2.pdf </a></td>
                        <td>KURIKULUM 2013</td>
                        <td>2017-2018</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkurikulum" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">3</td>
                        <td><a href="#lihatkurikulum" data-toggle="tab">kurikulum3.pdf</a></td>
                        <td>KURIKULUM 2014</td>
                        <td>2018-2019</td>
                        <td><button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkurikulum" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      <tr>
                        <td class="fit">4</td>
                        <td><a href="#lihatkurikulum" data-toggle="tab">kurikulum3.pdf </a></td>
                        <td>KURIKULUM 2014</td>
                        <td>2019-2020</td>
                         <td><button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkurikulum" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Kategori Nilai Mata Pelajaran SMP Yogyakarta <br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center>
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
              <li class="active"><a href="#tambahkurikulum" data-toggle="tab">Tambah Kategori Nilai</a></li>
              <li><a href="#lihatkurikulum" data-toggle="tab">Lihat Kategori Nilai</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="tambahkurikulum">
               <form class="form-horizontal formmapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Nama Kategori Nilai</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Nama Kategori Nilai">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Bobot Nilai</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Bobot nilai">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tambahmapel">
                    <i class="fa fa-plus-circle text-red"></i><a style="color:red" href="#" id="tambahmapel"> Tambah kategori</a>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
               
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              <div class="tab-pane" id="lihatkurikulum">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Kategori Nilai</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Kategori Nilai</th>
                        <th>Bobot nilai</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="fit">1</td>
                        <td>Tugas</td>
                        <td>10%</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editkategorinilai" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">2</td>
                        <td>Ulangan Harian </td>
                        <td>20%</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">3</td>
                        <td>Ujian Tengah Semester </td>
                        <td>30%</td>
                        <td><button type="button" class="btn btn-block btn-primary button-action btnedit">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      <tr>
                        <td class="fit">4</td>
                        <td>Ujian Akhir Semester </td>
                        <td>40%</td>
                         <td><button type="button" class="btn btn-block btn-primary button-action btnedit">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="editkategorinilai">
              <form class="form-horizontal formmapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Nama Kategori Nilai</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Nama Kategori Nilai">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Bobot Nilai</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Bobot nilai">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <td><button type="submit" class="btn btn-danger" href="#lihatkurikulum" data-toggle="tab">Submit</button></td><td> <button class="btn btn-danger" href="#lihatkurikulum" data-toggle="tab">Back</button></td>
                    </div>
                  </div>
                </form>
                </div>
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
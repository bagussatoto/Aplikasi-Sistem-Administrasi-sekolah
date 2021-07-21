  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Deskripsi Nilai Mata Pelajaran SMP Yogyakarta <br></center>
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
              <li class="active"><a href="#tambahdeskripsi" data-toggle="tab">Tambah Deskripsi Nilai</a></li>
              <li><a href="#lihatdeskripsi" data-toggle="tab">Lihat Deskripsi Nilai</a></li>
            </ul>
          
                  
            <div class="tab-content">
              <div class="active tab-pane" id="tambahdeskripsi">
                 <select>
                      <option>Kelas 7</option>
                      <option>Kelas 8</option>
                      <option>Kelas 9</option>
                     
                    </select>
                    <form class="posisikanan">
                      <select>
                        <option>Matematika</option>
                        <option>Bahasa Indo</option>
                        <option>IPA</option>
                        <option>IPS</option>
                        <option>PPKn</option>
                        <option>B.Inggris</option>
                      </select>
                    </form>
               <form class="form-horizontal formmapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Atas</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Batas Nilai Atas">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Bawah</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Batas Nilai Bawah">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Predikat Nilai</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Predikat nilai">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Deskripsi Nilai</label>
                        <div class="col-sm-10">
                          <textarea></textarea>
                          <!-- <input type="text" class="form-control" id="inputName" placeholder="Deskripsi nilai"> -->
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="tambahmapel">
                    <i class="fa fa-plus-circle text-red"></i><a style="color:red" href="#" id="tambahmapel"> Tambah deskripsi</a>
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

              <div class="tab-pane" id="lihatdeskripsi">
                 <select>
                      <option>Kelas 7</option>
                      <option>Kelas 8</option>
                      <option>Kelas 9</option>
                     
                    </select>
                    <form class="posisikanan">
                      <select>
                        <option>Matematika</option>
                        <option>Bahasa Indo</option>
                        <option>IPA</option>
                        <option>IPS</option>
                        <option>PPKn</option>
                        <option>B.Inggris</option>
                      </select>
                    </form>
                  <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Data Deskripsi Nilai</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th class="fit">No</th>
                        <th>Batas Nilai Atas</th>
                        <th>Batas Nilai Bawah</th>
                        <th>Predikat Nilai</th>
                        <th>Deskripsi Nilai</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="fit">1</td>
                        <td>100</td>
                        <td>90</td>
                        <td>A</td>
                        <td>Tuntas</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdeskripsinilai" data-toggle="tab">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">2</td>
                        <td>89</td>
                        <td>80</td>
                        <td>B</td>
                        <td>Tuntas</td>
                        <td> <button type="button" class="btn btn-block btn-primary button-action btnedit">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>               
                      </tr>
                      <tr>
                        <td class="fit">3</td>
                        <td>79</td>
                        <td>60</td>
                        <td>C</td>
                        <td>Tuntas</td>
                        <td><button type="button" class="btn btn-block btn-primary button-action btnedit">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      <tr>
                        <td class="fit">4</td>
                        <td>59</td>
                        <td>40</td>
                        <td>D</td>
                        <td>Tidak Tuntas</td>
                         <td><button type="button" class="btn btn-block btn-primary button-action btnedit">Edit</button><button type="button" class="btn btn-block btn-primary button-action btnhapus">Hapus</button></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="editdeskripsinilai">
              <form class="form-horizontal formmapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                       <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Atas</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Batas Nilai Atas">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Batas Nilai Bawah</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Batas Nilai Bawah">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Predikat Nilai</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputName" placeholder="Predikat nilai">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Deskripsi Nilai</label>
                        <div class="col-sm-10">
                          <textarea></textarea>
                          <!-- <input type="text" class="form-control" id="inputName" placeholder="Deskripsi nilai"> -->
                        </div>
                      </div>
                    </div>
                   
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <td><button type="submit" class="btn btn-danger" href="#lihatdeskripsi" data-toggle="tab">Submit</button></td><td> <button class="btn btn-danger" href="#lihatdeskripsi" data-toggle="tab">Back</button></td>
                    </div>
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
 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Distribusi Kelas Tambahan<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Guru">Dashboard</a></li>
      </ol>
    </section>

<section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Buat Kelas Baru</a>
            </li>
            <li><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tambah Kelas</a>
            </li>
            </ul>

                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    
                  <form class="form-horizontal form-mapel">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                     
                     <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Kelas <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3">Nama Kelas</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control">
                            <option>- Pilih Jenjang -</option>
                            <option>Kelas 7</option>
                            <option>Kelas 8</option>
                             <option>Kelas 9</option> 
                          </select>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                          <select class="form-control">
                            <option>- Pilih Penamaan -</option>
                            <option>Angka (1,2,3,..)</option>
                            <option>Huruf (A,B,C,..)</option>
                            <option>Romawi (I,II,III,..)</option>
                            
                          </select>
                        </div>
                      
                  </div>
                        <div class="form-group">
                          <label class="control-label col-md-3"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                             <a href="<?php echo base_url();?>guru/hasil_pembagian_tambahan"><button type="button" class="btn btn-primary">Bagi Kelas</button></a>
                          </div>
                        </div>
                        
                        </form>
                        </div>
                        </div>
                        </form>
                        </div>

                       <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <div class="row">
                            <div class="col-sm-6">
                              <div class="dataTables_length" id="example1_length">
                                <label>Kelas 7 <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option>Kelas 8</option>
                                  <option>Kelas 9</option>
                                  <option>Kelas Tambahan</option>
                                </select> entries
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                              </label>
                            </div>
                          </div>
                        </div>
                     <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%"></th>
                          <th style="width: 1%">No</th>
                          <th style="width: 5%">Nama Kelas</th>
                          <th style="width: 5%">Jumlah Siswa</th>
                          <th style="width: 5%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="flat" name="table_records"></td>
                          <td>1</td>
                          <td>Kelas 7A</td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="flat" name="table_records"></td>
                          <td>2</td>
                          <td>Kelas 7B</td>
                          <td></td>   
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="flat" name="table_records"></td>
                          <td>3</td>
                          <td>Kelas 7C</td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        <tr>
                          <td><input type="checkbox" class="flat" name="table_records"></td>
                          <td>4</td>
                          <td>Kelas 7D</td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="flat" name="table_records"></td>
                          <td>5</td>
                          <td>Kelas 7E</td>
                          <td></td>
                          <td>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                          </td>
                          
                        </tr>
                      </tbody>
                    </table>

                    <div class="tambahkelas">
                     <i class="fa fa-plus-circle text-red"></i><a style="color:red" href="#" id="tambahkelas"> Tambah kelas</a>
                      </div>

                       &nbsp
                        &nbsp

                      <div class="bagikelas">
                     <a href="<?php echo base_url();?>superadmin/hasil_pembagian_tambahan"><button type="button" class="btn btn-primary">Bagi Kelas</button></a>
                      </div>


                        &nbsp
                        &nbsp

                        


                    
                        </div>
                      </div>
                    </div>
          
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
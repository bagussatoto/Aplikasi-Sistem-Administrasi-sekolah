  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Presensi Ekstrakurikuler SMP Yogyakarta<br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="row">            
            <!-- Left col -->
            <section class="col-md-12 ">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-left">
                  <li class="active"><a href="#tab3" data-toggle="tab">Presensi Pembimbing</a></li>
                  <li><a href="#tab1" data-toggle="tab">Presensi Siswa</a></li>
                  <li><a href="#tab2" data-toggle="tab">Laporan Presensi Persemester</a></li>
                  <li><a href="#tab4" data-toggle="tab">Laporan Presensi Pembimbing</a></li>
                </ul>
                <div class="tab-content no-padding">
                  <div class="chart tab-pane" id="tab1" style="position: relative; ">
                      
                      <div class="box" style="min-height:300px;">
                        <div class="box-body">
                          <!-- <center><h4>Presensi Siswa</h4></center> -->
                          <select name="kelas" id="kelas">
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Foodball">Foodball</option>
                          </select>
                          <select name="kelas" id="kelas">
                            <option value="Pertemuan">Pertemuan 1</option>
                            <option value="Pertemuan">Pertemuan 2</option>
                            <option value="Pertemuan">Pertemuan 3</option>
                            <option value="Pertemuan">Pertemuan 4</option>
                          </select> 
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Kelas</th>
                              <th>Nama Siswa</th>
                              <th>Persensi</th>
                              <th>Aksi</th> 
                            </tr> 
                            <tr>
                              <td>1.</td>
                              <td>7A</td> 
                              <td>Shella Afiya</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td>7B</td> 
                              <td>Kharunnisa Alkatihi</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td> 
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td>8A</td> 
                              <td>Aziz Alfatih</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td> 
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td>8F</td> 
                              <td>Iqbal Ramadhan</td>
                              <td>
                                  <input type="radio" checked name="c"/>&nbsp; H &nbsp;
                                  <input type="radio" name="c"/>&nbsp; S &nbsp;
                                  <input type="radio" name="c"/>&nbsp; I &nbsp;
                                  <input type="radio" name="c"/>&nbsp; A &nbsp;
                              </td> 
                              <td> 
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                          </table>
                        <div class="box-footer clearfix" style="float:left;">
                        <a href="#" class="btn btn-primary">Submit</a>
                        
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="box" style="min-height:300px;">
                        <div class="box-body">
                          <!-- <center><h4>Rekap Presensi Siswa</h4></center> -->
                          <select name="kelas" id="kelas">
                            <option value="Bulu Tangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Food ball">Foodball</option>
                          </select>
                          <select>
                            <option value="Pertemuan">Pertemuan 1</option>
                            <option value="Pertemuan">Pertemuan 2</option>
                            <option value="Pertemuan">Pertemuan 3</option>
                            <option value="Pertemuan">Pertemuan 4</option> 
                          </select>
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Kelas</th>
                              <th>Nama Siswa</th>
                              <th>Presensi</th> 
                            </tr> 
                            <tr>
                              <td>1.</td>
                              <td>7A</td> 
                              <td>Shella Afiya</td>
                              <td>H</td>  
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td>7B</td> 
                              <td>Kharunnisa Alkatihi</td>
                              <td>H</td>  
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td>8A</td> 
                              <td>Aziz Alfatih</td>
                              <td>I</td>  
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td>8F</td> 
                              <td>Iqbal Ramadhan</td>
                              <td>A</td>  
                            </tr> 
                          </table>
                       
                        <div class="box-footer clearfix" style="float:left">
                          <a href="#" class="btn btn-primary">Kembali</a>
                          <a href="#" class="btn btn-primary">Next</a>
                        </div>

                         <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
                    </div>
                      </div>
                  </div>
                  <div class="chart tab-pane" id="tab2" style="position: relative; ">
                      
                       <div class="box">
                        <div class="box-body">
                        <!-- <center><h4>Laporan Presensi Ekstrakurikuler Siswa Persemester</h4></center> -->
                          <select name="semester" id="semester">
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                          </select> 
                          <select name="eks12" id="eks12">
                            <option value="Olimpiade IPA">Olimpiade IPA</option>
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Foodball">Foodball</option>
                          </select> <br/>
                        <br/>
                        <table class="table table-bordered">
                            <tr>
                              <th rowspan="2">No</th>
                              <th rowspan="2">Kelas</th>
                              <th rowspan="2">Nama Siswa</th>
                              <th colspan="10"><center>10 Pertemuan</center></th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>7A</td>
                                <td>Shella Alazta</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                            </tr>
                            
                            <tr>
                                <td>2</td>
                                <td>7B</td>
                                <td>Amanda Sari</td>
                                <td>H</td>
                                <td>H</td>
                                <td>A</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>I</td>
                            </tr>
                            
                            
                            <tr>
                                <td>3</td>
                                <td>7C</td>
                                <td>Aziz Alfatih</td>
                                <td>H</td>
                                <td>S</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>I</td>
                            </tr>
                            
                            
                            <tr>
                                <td>4</td>
                                <td>7D</td>
                                <td>Iqbal Ramadhan</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>A</td>
                                <td>S</td>
                                <td>H</td>
                            </tr>
                            
                            
                            <tr>
                                <td>5</td>
                                <td>7E</td>
                                <td>Muhammad Haykal</td>
                                <td>A</td>
                                <td>S</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                                <td>H</td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">Total Kehadiran</td>
                                <td>4</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>4</td>
                                <td>4</td>
                                <td>3</td>
                            </tr>
                          </table>
                        </div>

                        <div class="box-footer clearfix" style="float:left;">
                          <a href="#" class="btn btn-primary">Print</a>
                        </div>

                        <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>

                      </div>
                      
                  </div>
                    
                  <div class="chart tab-pane active" id="tab3" style="position: relative; ">
                      
                       <div class="box" style="min-height:500px;">
                        <div class="box-body">
                        <!-- <center><h4>Presensi Pembimbing</h4></center> -->
                          <select name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select> 
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th style="width: 200px;"><center>Tanggal Pelaksanaan</center></th>
                              <th>Pembimbing</th>
                              <th>Jabatan</th>
                              <th>Aksi</th>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pembina</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pelatih</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pelatih</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td><input type="date" /></td>
                              <td><textarea cols="40" rows="2"></textarea></td> 
                              <td>Pelatih</td> 
                              <td>
                                <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                <i class="fa fa-trash"></i><a href="#">Delete</a> 
                              </td>
                            </tr>
                          </table>
                        </div>

                        <div class="box-footer clearfix" style="float:left">
                          <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                      </div>
                      
                      
                      <div class="box">
                        <div class="box-body">
                        <center><h4>Presensi Pembimbing Perbulan</h4></center>
                        <select name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select> 
                          <br/><br/>
                        <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th style="width: 200px;"><center>Tanggal Pelaksanaan</center></th>
                              <th>Pembimbing</th>
                              <th>Jabatan</th>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>01/02/2017</td>
                              <td>Kurniawan <br/> Hartanto <br/> Tomi</td> 
                              <td>Pembina</td>  
                            </tr> 
                            <tr>
                              <td>2.</td>
                              <td>01/03/2017</td>
                              <td>Yusuf <br/> Hartanto <br/> Tomi</td> 
                              <td>Pelatih</td>  
                            </tr> 
                            <tr>
                              <td>3.</td>
                              <td>01/06/2017</td>
                              <td>Ibnu <br/> Hartanto <br/> Tomi</td> 
                              <td>Pelatih</td>  
                            </tr> 
                            <tr>
                              <td>4.</td>
                              <td>01/10/2017</td>
                              <td>Khansa Rosdiana <br/> Hartanto <br/> Tomi</td> 
                              <td>Pelatih</td>  
                            </tr> 
                            
                          </table>
                        </div>
                        <div class="box-footer clearfix" style="float:left">
                          <a href="#" class="btn btn-primary">Kembali</a>
                          <a href="#" class="btn btn-primary">Next</a>
                        </div>

                         <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
             </div>   
           </div>
                    
                  
                  <div class="chart tab-pane" id="tab4" style="position: relative; ">
                      
                       <div class="box">
                        <div class="box-body">
                            <!-- <center><h4>Laporan Presensi Pembimbing Perbulan</h4></center> -->
                        <select>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                        </select>
                        <select name="eks12" id="eks12">
                            <option value="Olimpiade IPA">Olimpiade IPA</option>
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Catur">Catur</option>
                            <option value="Volly">Volly</option>
                            <option value="Foodball">Foodball</option>
                          </select>
                        <select name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select><br/><br>
                        <table class="table table-bordered">
                            <tr>
                              <th rowspan="2">Nama Pembimbing</th>
                              <th rowspan="2">Jabatan</th>
                              <th colspan="4"><center>Januari</center></th>
                              <th rowspan="2">Jumlah Kehadiran</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                            </tr>
                            <tr>
                              <td>Hartanto</td>
                              <td>Pelatih</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>4</td>
                            </tr> 
                            <tr>
                              <td>Tomi</td>
                              <td>Pelatih</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>4</td>
                            </tr> 
                            <tr>
                              <td>Ibnu Kurniawan</td>
                              <td>Pelatih</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>H</td>
                              <td>4</td>
                            </tr> 
                          </table>
                        </div>

                        <div class="box-footer clearfix" style="float:left;">
                          <a href="#" class="btn btn-primary">Print</a>
                        </div>

                        <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                          <li><a href="#">&laquo;</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">&raquo;</a></li>
                      </ul>
                  </div>
                      </div>    
                  </div>
                </div>
              </div>
            </section>
        </div>

        
    </section>
    <!-- /.content -->
  </div>
  
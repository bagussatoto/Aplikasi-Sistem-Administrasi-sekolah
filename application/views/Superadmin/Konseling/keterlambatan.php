<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Keterlambatan Siswa SMP Yogyakarta<br></center>
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
            <section class="col-lg-12 ">
                            
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-left">
                      <li class="active"><a href="Keterlambatan.html">Keterlambatan Siswa</a></li>
                      <li>
                          <a href="grafik.php" class="dropdown-toggle" data-toggle="dropdown">Grafik</a>
                          <ul class="dropdown-menu">
                              <li><a tabindex="-1" href="grafik.php#Perkelas">Perkelas</a></li>
                              <li><a tabindex="-1" href="grafik.php#Mingguan">Mingguan</a></li>
                              <li><a tabindex="-1" href="grafik.php#Bulanan">Bulanan</a></li>
                              <li><a tabindex="-1" href="grafik.php#Tahunan">Tahunan</a></li>
                          </ul>
                     </li>
                    </ul>
                <div class="tab-content no-padding">
                <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                <div class="box">
                <div class="box-body">
                <h4 class="box-title">Form Siswa Terlambat</h4>
                </div>
                <form role="form" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Kelas</label>
                      <select name="kelas">
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="7C">7C</option>
                        <option value="7D">7D</option>
                        <option value="7E">7E</option>
                        <option value="7F">7F</option>
                        <option value="8A">8A</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text"name="nama_lengkap" required="required">
                    </div>

                   <div class="form-group">
                      <label>Tanggal Terlambat</label> 
                      <input type="date" name="tgl"/>
                    </div>
                      
                      <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="keterangan">
                      </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
                    <div class="tab-content no-padding">
                      <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                        <div class="box">
                            <div class="box-body">
                                <center><h4>Data Keterlambatan siswa</h4></center>
                            <select name="semester">
                                <option value="semester 1">Semester 1</option>  
                                <option value="semester 2">Semester 2</option>    
                            </select>
                            <select name="tahun">
                                <option value="2016/2017">Tahun 2016/2017</option>  
                                <option value="2017/2018">Tahun 2017/2018</option>    
                            </select>
                            <br/><br/>
                            <table class="table table-bordered">
                                <tr>
                                  <th>Semester</th>
                                  <th>Jumlah Siswa</th>
                                  <th>Jumlah Terlambat</th>
                                </tr>
                                <tr>
                                  <td> Semester 1</td>
                                  <td>
                                      <a data-toggle="modal" data-target="#myModal">7 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">10 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">5 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">9 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">3 Siswa</a><br/>
                                      <a data-toggle="modal" data-target="#myModal">20 Siswa</a><br/>  
                                  </td>
                                  <td>
                                      3 Kali<br/>
                                      6 Kali<br/>
                                      9 Kali<br/>
                                      6 Kali<br/>
                                      10 Kali<br/>
                                      1 Kali<br/>  
                                  </td>
                                </tr>
                              </table>
                            </div>

                           </div>
                         </div>            
                     </section>
                   </div>
    </section>
    <!-- /.content -->]
    
    <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Detail Keterlambatan</h4>
              </div>
              <div class="modal-body">
                <select name="kelas">
                    <option value="Kelas 7">Kelas 7</option>  
                    <option value="Kelas 8">Kelas 8</option>
                    <option value="Kelas 9">Kelas 9</option>
                  </select>
                <select name="tahun">
                    <option value="2017">2017</option>  
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                  </select>
                <select name="bulan">
                    <option value="Januari">Januari</option>  
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>  
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>  
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>  
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>  
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>  
                    <option value="Desember">Desember</option>    
                </select>
                <br/><br/>
                <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Tgl Terlambat</th>
                      <th>Jumlah Terlambat</th>
                      <th>Keterangan</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Shella Afiya</td>
                      <td>05/01/17 </br> 08/01/17 </br> 18/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Peringatan</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Putri Erika</td>
                      <td>07/01/17 </br> 10/01/17 </br> 15/01/17 </td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Peringatan</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Syarifah Kayra</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>4</td>
                      <td>Dika Yuriza</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>5</td>
                      <td>Muhammad Reyhan</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>6</td>
                      <td>Aldi Fairuz</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                    <tr>
                    <td>7</td>
                      <td>Amanda Sari</td>
                      <td>05/01/17 </br> 10/01/17 </br> 20/01/17</td>
                      <td>3 Kali</td>
                      <td>Mendapat Surat Pringatan</td>
                    </tr>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
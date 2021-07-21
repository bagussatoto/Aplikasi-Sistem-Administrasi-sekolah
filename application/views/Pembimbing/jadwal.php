
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Jadwal  Ekstrakurikuler SMP Yogyakarta<br></center>
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
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-left">
                  <li  class="active"><a href="#tab2" data-toggle="tab">Kelola Jadwal</a></li>
                  <li><a href="#tab1" data-toggle="tab">Jadwal Ekstrakurikuler</a></li>
                </ul>
                <div class="tab-content no-padding">
                  <div class="chart tab-pane" id="tab1" style="position: relative; height: 300px;">
                      
                      <div class="box">
                        <div class="box-body">
                        <h4>Jadwal Ekstrakurikuler</h4>
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Hari</th>
                              <th>Waktu</th>
                              <th>Jenis Ekstrakurikuler</th>
                              <th>Tempat</th>
                              <th>Pembimbing</th>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>Juma't</td> 
                              <td>12.30 - 15.00<br/>15.30 - 17.00 <br/> 15.30 - 17.00</td>
                              <td>Catur <br/> Volly <br/> Bola Kaki</td>
                              <td>Ruang Kelas <br/> Lapangan Olahraga <br/> Lapangan Olahraga</td>
                              <td>Mulya <br/> Nunung <br/> Ilham</td>
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>Sabtu</td> 
                              <td>09.00 - 11.00 <br/> 12.30 - 15.00 <br/> 15.30 - 17.00</td>
                              <td>Seni Tari <br/> Volly <br/> Bola Kaki </td>
                              <td>Sanggar <br/> Lapangan Olahraga <br/> Lapangan Olahraga</td>
                              <td>Sri <br/> Nunung <br/> Ilham </td>
                            </tr>
                          </table>
                        </div>
                        <div class="box-footer clearfix"  style="float:right;">
                          <a href="#" class="btn btn-primary">PRINT</a>
                        </div>
                      </div>

                  </div>
                  <div class="chart tab-pane active" id="tab2" style="position: relative; min-height: 300px;">
                      
                       <div class="box">
                          <div class="box-body">
                            <h4>Kelola Jadwal Ekstrakurikuler</h4>
                              <table class="table table-bordered">
                                <tr>
                                  <th style="width: 10px">No</th>
                                  <th>Hari</th>
                                  <th>Waktu</th>
                                  <th>Jenis Ekstrakurikuler</th>
                                  <th>Tempat</th>
                                  <th>Pembimbing</th>
                                  <th>Aksi</th>
                                </tr>
                                <tr>
                                  <td>1.</td>
                                  <td>
                                   <div id="hari">
                                     <select name="Hari" id="Hari">
                                        <option>-Pilih Hari-</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumaat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                    </select>
                                  <td>
                                   <div id="Waktu">
                                     <select name="Jam" id="Jam">
                                        <option>-Pilih Waktu-</option>
                                        <option value="Jam">09.00-11.00</option>
                                        <option value="Jam">12.30-15.00</option>
                                        <option value="Jam">15.30-17.00</option>
                                    </select>
                                   </div>15.30 - 17.00</td>
                                  <td>
                                   
                                    <div id="eks">
                                      <select name="kelas" id="kelas">
                                        <option>-Pilih Ekskul-</option>
                                        <option value="SeniTari">Tari</option>
                                        <option value="Bulutangkis">Bulutangkis</option>
                                        <option value="Catur">Catur</option>
                                        <option value="Volly">Volly</option>
                                        <option value="BolaKaki">Food ball</option>
                                      </select>
                                      <br/> Volly
                                    <br />
                                    </div>
                                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                                        <script type="text/javascript">
                                            $(function () {
                                                $("#add").bind("click", function () { 
                                                    var index = $("#eks select").length + 1;
                                                    if(index<=3){
                                                        var ddl = $("#kelas").clone();
                                                        ddl.attr("id", "kelas" + index);
                                                        ddl.attr("name", "kelas_" + index);
                                                        $("#eks").append(ddl);
                                                        $("#eks").append("<br />");
                                                    }else{
                                                        alert('maximal 3');
                                                    } 
                                                });
                                            });
                                        </script>
                                      <br/>
                                      <input type="button" value="+" id="add"/>
                                      
                                  </td>
                                  <td>
                                  <div id="Tempat">
                                     <select name="lokasi" id="lokasi">
                                        <option>-Pilih Tempat-</option>
                                        <option value="Sanggar">Sanggar</option>
                                        <option value="LapanganOlahraga">Lapangan Olahraga</option>
                                        <option value="Perpustakaan">Perpustakaan</option>
                                     </select>
                                   </div>Lapangan Olahraga</td>
                                  <td>
                                   <div id="nama">
                                    <select name="nama" id="nama">
                                      <option>-Pilih Guru Pembimbing-</option>
                                        <option value="Pembimbing">Sri</option>
                                        <option value="Pembimbing">Nunung</option>
                                        <option value="Pembimbing">Ilham</option>
                                     </select>

                                   <br/> Ilham</td>
                                  <td>
                                    <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                    <i class="fa fa-trash"></i><a href="#">Delete</a> 
                                  </td>
                                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td>Sabtu</td> 
                                  <td>09.00 - 11.00<br/> 12.30 - 15.00<br/> 15.30 - 17.00</td>
                                  <td>
                                     
                                    <div id="eks1">
                                      <select name="kelas" id="kelas">
                                        <option>-Pilih Ekskul-</option>
                                        <option value="SeniTari">Tari</option>
                                        <option value="Bulutangkis">Bulutangkis</option>
                                        <option value="Catur">Catur</option>
                                        <option value="Volly">Volly</option>
                                        <option value="BolaKaki">Food ball</option>
                                      </select>
                                      <br/>
                                     <select name="kelas" id="kelas">
                                        <option>-Pilih Ekskul-</option>
                                        <option value="SeniTari">Tari</option>
                                        <option value="Bulutangkis">Bulutangkis</option>
                                        <option value="Catur">Catur</option>
                                        <option value="Volly">Volly</option>
                                        <option value="BolaKaki">Food ball</option>
                                      </select>
                                      <br/>
                                     <select name="kelas" id="kelas">
                                        <option>-Pilih Ekskul-</option>
                                        <option value="SeniTari">Tari</option>
                                        <option value="Bulutangkis">Bulutangkis</option>
                                        <option value="Catur">Catur</option>
                                        <option value="Volly">Volly</option>
                                        <option value="BolaKaki">Food ball</option>
                                      </select>
                                    <br />
                                    </div>
                                        <script type="text/javascript">
                                            $(function () {
                                                $("#add1").bind("click", function () { 
                                                    var index = $("#eks1 select").length + 1;
                                                    if(index<=3){
                                                        var ddl = $("#kelas").clone();
                                                        ddl.attr("id", "kelas" + index);
                                                        ddl.attr("name", "kelas_" + index);
                                                        $("#eks1").append(ddl);
                                                        $("#eks1").append("<br />");
                                                    }else{
                                                        alert('maximal 3');
                                                    } 
                                                });
                                            });
                                        </script>
                                      <br/>
                                      <input type="button" value="+" id="add1"/>
                                      

                                  </td>
                                  <td>Ruangan Kelas <br/> Lapangan Olahraga <br/> Lapangan Olahraga</td>
                                  <td>Nunung <br/> Budi <br/> Adam</td>
                                  <td>
                                    
                                    <i class="fa fa-edit"></i><a href="#">Edit</a> 
                                    <i class="fa fa-trash"></i><a href="#">Delete</a> 
                                  </td>
                                </tr>
                              </table>
                          </div>
                        <div class="box-footer clearfix" style="float:right;">
                          <a href="#" class="btn btn-primary">Submit</a>
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
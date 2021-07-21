<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Pembagian Kelas Berdasarkan Agama<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/kesiswaan/index">Dashboard</a></li>
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
            
            <div class="tab-content">
              <div class="active tab-pane" id="kelolamapel">
              
               <form class="form-horizontal formmapel" method="post" action="<?php echo base_url();?>distribusi/kesiswaan/hasil_pembagian_agama">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">

                  <?php
                    for ($i=0; $i<$jumlah_kelas; $i++) {
                  ?>
                  
                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-4">
                          <input name="nama_kelas<?php echo $i; ?>" type="text" class="form-control" readonly value="<?php echo $nama_kelas[$i]; ?>">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Jumlah Siswa</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" value="" name="jumlah_siswa<?php echo $i; ?>">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Agama</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        Pilih Agama
                        <ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihislam<?php echo $i; ?>" value="true"> Islam</p>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            Persentase<input type="text" class="form-control" name="persentaseislam<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                      	<label for="inputKurikulum" class="col-sm-2 control-label"></label>
                      	<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      	<ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihkristen<?php echo $i; ?>" value="true" >Kristen</p>
                            </li>
                          </ul>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" name="persentasekristen<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                      	<label for="inputKurikulum" class="col-sm-2 control-label"></label>
                      	<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      	<ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihkatholik<?php echo $i; ?>" value="true" >Katholik</p>
                            </li>
                          </ul>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" name="persentasekatholik<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                      	<label for="inputKurikulum" class="col-sm-2 control-label"></label>
                      	<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      	<ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihhindu<?php echo $i; ?>" value="true" >Hindu</p>
                            </li>
                          </ul>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" name="persentasehindu<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                      	<label for="inputKurikulum" class="col-sm-2 control-label"></label>
                      	<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      	<ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihbudha<?php echo $i; ?>" value="true" >Budha</p>
                            </li>
                          </ul>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" name="persentasebudha<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                      	<label for="inputKurikulum" class="col-sm-2 control-label"></label>
                      	<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      	<ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihlainnya<?php echo $i; ?>" value="true" >Lainnya</p>
                            </li>
                          </ul>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" name="persentaselainnya<?php echo $i; ?>" value="">
                          </div>
                      </div>

                       <div class="form-group formgrup jarakform">
                        <label for="inputKurikulum" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        Pilih Jenis Kelamin
                        <ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihlakilaki<?php echo $i; ?>" value="true" >Laki-laki</p>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            Persentase<input type="text" class="form-control" name="persentaselakilaki<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                      	<label for="inputKurikulum" class="col-sm-2 control-label"></label>
                      	<div class="col-md-2 col-sm-12 col-xs-12 form-group">
                      	<ul class="to_do">
                            <li>
                             <p><input type="checkbox" name="pilihperempuan<?php echo $i; ?>" value="true" >Perempuan</p>
                            </li>
                          </ul>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <input type="text" class="form-control" name="persentaseperempuan<?php echo $i; ?>" value="">
                          </div>
                      </div>

                      <div class="ln_solid"></div>
                    <?php
                      }
                    ?>

                    </div>
                  </div>

                  <div class="col-sm-offset-2 col-sm-10">
                  <input type="hidden" name="jumlah_kelas" value="<?php echo $jumlah_kelas; ?>">
                  <input type="hidden" name="jenjang" value="<?php echo $jenjang; ?>">
                  <button type="submit" class="btn btn-primary">Bagi Kelas</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  
                  
                  </div>
                </form>
               
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              
<!-- ./wrapper -->

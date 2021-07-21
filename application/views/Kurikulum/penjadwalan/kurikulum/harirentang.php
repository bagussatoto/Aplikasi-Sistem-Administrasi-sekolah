<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Manajemen waktu untuk Jadwal Mata Pelajaran<br></center>
        <!-- <center><small>Tahun Ajaran 2016-2017 Semester 1 Kurikulum 2013</small></center> -->
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
          <form method="post" action="<?php echo site_url('kurikulum/simpanharirentang'); ?>">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <!-- <li class="active"><a href="#tambahkurikulum" data-toggle="tab">Tambah Rentang Waktu</a></li> -->
              <!--li><a href="#lihatkurikulum" data-toggle="tab">Lihat hari & waktu</a></li-->
              <li class="active"><a href="#tabsenin" data-toggle="tab">Senin</a></li>
              <li><a href="#tabselasa" data-toggle="tab" >Selasa</a></li>
              <li><a href="#tabrabu" data-toggle="tab">Rabu</a></li>
              <li><a href="#tabkamis" data-toggle="tab">Kamis</a></li>
              <li><a href="#tabjumat" data-toggle="tab">Jumat</a></li>
              <li><a href="#tabsabtu" data-toggle="tab">Sabtu</a></li>
              <li><a href="#tabminggu" data-toggle="tab">Minggu</a></li>
            </ul>
          
                   
            <div class="tab-content">


            
                  <div class="active tab-pane" href="#tabsenin" id="tabsenin">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">TES SENIN</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_senin_<?php echo $i; ?>" value="<?php echo @$hari_rentang['senin'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_senin_<?php echo $i; ?>" value="<?php echo @$hari_rentang['senin'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_senin_<?php echo $i; ?>" value="<?php echo @$hari_rentang['senin'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['senin'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> -->
                        </tr>
                        <?php

                        }
                        ?>                        

                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>

          


                  <div class="tab-pane" href="#tabselasa" id="tabselasa">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">TES SELASA</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_selasa_<?php echo $i; ?>" value="<?php echo @$hari_rentang['selasa'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_selasa_<?php echo $i; ?>" value="<?php echo @$hari_rentang['selasa'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_selasa_<?php echo $i; ?>" value="<?php echo @$hari_rentang['selasa'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['selasa'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> -->
                        </tr>
                        <?php
                        }
                        ?>                        

                      </tbody>


                    </table>
                    <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>

                    <div class="tab-pane" href="#tabrabu" id="tabrabu">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">TES RABUUUU</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_rabu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['rabu'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_rabu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['rabu'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_rabu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['rabu'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['rabu'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> --> 
                        </tr>
                        <?php
                        }
                        ?>                        

                      </tbody>


                    </table>
                   <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>

                    <div class="tab-pane" href="#tabkamis" id="tabkamis">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">TES kamis</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_kamis_<?php echo $i; ?>" value="<?php echo @$hari_rentang['kamis'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_kamis_<?php echo $i; ?>" value="<?php echo @$hari_rentang['kamis'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_kamis_<?php echo $i; ?>" value="<?php echo @$hari_rentang['kamis'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['kamis'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> -->
                        </tr>
                        <?php
                        }
                        ?>                        

                      </tbody>


                    </table>
                    <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>

                    <div class="tab-pane" href="#tabjumat" id="tabjumat">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">TES Jumat</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_jumat_<?php echo $i; ?>" value="<?php echo @$hari_rentang['jumat'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_jumat_<?php echo $i; ?>" value="<?php echo @$hari_rentang['jumat'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_jumat_<?php echo $i; ?>" value="<?php echo @$hari_rentang['jumat'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['jumat'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> -->
                        </tr>
                        <?php
                        }
                        ?>                        

                      </tbody>


                    </table>
                    <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>

                    <div class="tab-pane" href="#tabsabtu" id="tabsabtu">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">TES SABTU</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_sabtu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['sabtu'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_sabtu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['sabtu'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_sabtu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['sabtu'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['sabtu'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> -->
                        </tr>
                        <?php
                        }
                        ?>                        

                      </tbody>


                    </table>
                    <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>

                    <div class="tab-pane" href="#tabminggu" id="tabminggu">
              <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 2%">No</th>
                          <th style="width: 3%">Jam Ke-</th>
                          <th style="width: 3%">Jam Mulai</th>
                          <th style="width: 5%">Jam Selesai</th>
                          <!-- <th style="width: 5%">MINGGU</th> -->
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        for ($i=1;$i<=12;$i++) {
                        ?>
                        <tr>
                          <td><input type="text" class="form-control" value="<?php echo $i; ?>"></td>
                          <td><input type="text" class="form-control" name="jam_ke_minggu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['minggu'][$i]->jam_ke; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_mulai_minggu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['minggu'][$i]->jam_mulai; ?>"></td>
                          <td><input type="time" class="form-control" name="jam_selesai_minggu_<?php echo $i; ?>" value="<?php echo @$hari_rentang['minggu'][$i]->jam_selesai; ?>"></td>
                          <td><a href="<?php echo site_url('kurikulum/delharirentang/'.@$hari_rentang['minggu'][$i]->id_rentang_jam); ?>" class="btn btn-danger" style="border-radius: 20px" size="2"><b>X</b></a></td>
                          <!-- <td>
                            <button type="button" class="btn btn-block btn-primary button-action btnedit" href="#editdatamapel" data-toggle="tab"> Edit </button>
                          </td> -->
                        </tr>
                        <?php
                        }
                        ?>                        

                      </tbody>


                    </table>
                    <button type="submit" class="btn btn-block btn-primary button-action btnedit" > Simpan </button>
                    </div>



                    </div>


                    
                 
                </div>
              </div-->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          
          </div>
          <!-- /.nav-tabs-custom -->
          </form>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper
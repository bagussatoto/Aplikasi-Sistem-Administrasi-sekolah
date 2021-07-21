<script type="text/javascript">

  function fetch_select_siswa(val)
  {
     $('#cbsiswa').html('<option value="">Please Wait ... </option>');
     $.ajax({
     type: 'post',
     url: '<?php echo site_url('nonakademik/getsiswa'); ?>/'+val,
     //data: 'nama=' + jsnama + '&instansi=' + jsinstansi + '&hp=' + jshp  + '&email=' + jsemail,
     data: {
       program:val
     },
     success: function (response) {
       document.getElementById("cbsiswa").innerHTML=response; 
     }
     });
  } 
  </script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Prestasi Siswa SMP Yogyakarta <br></center>
        <center><small>Prestasi Siswa selama mengikuti kegiatan diluar ataupun didalam sekolah</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('nonakademik');?>">Dashboard</a></li>
      </ol>
    </section>


    <section class="content">
        
        <div class="row">          
            <!-- Left col -->
            <section class="col-lg-12 ">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-left">
                  <li class="active"><a href="#tab1" data-toggle="tab">Prestasi siswa</a></li> 
                </ul>
                <div class="tab-content no-padding">
                  <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                      
                      <div class="box">
                        <div class="box-body">
                        <!-- <br/><br/> -->
                        <form role="form" method="post" action="<?php echo site_url('nonakademik/simpanprestasi'); ?>" enctype="multipart/form-data">
                    <!-- <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-3 col-sm-3 col-xs-10">
                          <input type="text" name="nama" required="required" class="form-control" placeholder="Nama">
                        </div>
                    </div> -->
                  </br></br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
                    <div class="col-md-2 col-sm-2 col-xs-10">
                      <select class="select2_single form-control" tabindex="-1" onchange="fetch_select_siswa(this.value);">
                        <option>-Pilih Kelas-</option>
                        <?php
                        foreach ($kelas_reguler as $row) {
                          ?>
                          <option value="<?php echo $row->id_kelas_reguler; ?>" ><?php echo $row->nama_kelas; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <br/>
                  <br/>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">NISN</label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <!--input type="text" name="nisn" required="required" class="form-control" placeholder="Nomor Induk Siswa Nasional" style="font-size: 14px"-->
                      <select name="nisn" required="required" class="form-control" placeholder="Nomor Induk Siswa Nasional" style="font-size: 14px" id="cbsiswa">
                        <option value="">-Pilih Siswa-</option>
                      </select>
                    </div>
                  </div>
                  <br/>
                  <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tahun</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="text" name="tahun" class="form-control col-md-3 col-xs-12" placeholder="Tahun" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Peringkat</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="text" name="peringkat" required="required" class="form-control" placeholder="Peringkat" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tingkat</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="text" name="tingkat_pend" required="required" class="form-control" placeholder="Tingkat" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="file" name="foto" required="required" class="form-control" placeholder="foto" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                      
                      <div class="box">
                        <div class="box-body">
                        <table class="table table-bordered">
                            <tr style="background-color: #53c68c">
                              <th style="width: 10px">No</th>
                              <th>Nama Siswa</th>
                              <th>Jenis Prestasi</th>
                              <th>Tahun</th> 
                              <th>Peringkat</th>
                              <th>Tingkat</th>
                              <th>Foto</th>
                            </tr>
                            <?php
                            $i=0;
                            foreach ($prestasi as $rowprestasi) {
                              $i++;
                            ?>
                            <tr>
                              <td><?php echo $i; ?>.</td>
                              <td><?php echo $rowprestasi->nama; ?></td>
                              <td><?php echo $rowprestasi->jenis_prestasi; ?></td>
                              <td><?php echo $rowprestasi->tahun; ?></td>
                              <td><?php echo $rowprestasi->peringkat; ?></td>
                              <td><?php echo $rowprestasi->tingkat_pend; ?></td>
                              <td><img src="<?php echo base_url()."assets/image/".$rowprestasi->fotoprestasi; ?>" width="200"/></td>
                            </tr> 
                            <?php
                            }
                            ?>
                          </table>
                        </div>
                        <!-- <div class="box-footer clearfix">
                          <a href="#" class="btn btn-primary">Kembali</a>
                        </div> -->
                      </div>
                      
            
                  </div>
                 
                    
                    
                    
                 
                    
                </div>
              </div>
            </section>
        </div>

        
    </section>
    <!-- /.content -->
  </div>
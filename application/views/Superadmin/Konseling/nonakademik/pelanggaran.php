<script type="text/javascript">

  function fetch_select_siswa(val)
  {
     $('#cbsiswa').html('<option value="">Please Wait ... </option>');
     $.ajax({
     type: 'post',
     url: '<?php echo site_url('superadmin/getsiswa'); ?>/'+val,
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
        <center style="color:navy;">Pelanggaran Siswa SMP Yogyakarta<br></center>
        <center><small>Pelanggaran Siswa yang didapat selama berada di dalam sekolah</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('superadmin');?>">Dashboard</a></li>
      </ol>
    </section>

    <?php echo $this->session->flashdata('pesan'); ?>
    <!-- Main content -->
    <section class="content">
       
         <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pelanggaran siswa</h3>
                </div>
                <form role="form" method="post" action="<?php echo site_url('superadmin/simpanpelanggaran'); ?>">
                  <?php
                      $tgl = date('Y-m-d');
                      if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
                    ?>
                    <div class="box-body">
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
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pelanggaran</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="date" name="tgl_kejadian" required="required" class="form-control" placeholder="tanggal kejadian" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Pelanggaran</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <select class="select2_single form-control" tabindex="-1" name="kategori">
                            <option value="">-Kategori Pelanggaran-</option>
                            <option value="Pelanggaran Ringan">Pelanggaran Ringan</option>  
                            <option value="Pelanggaran Sedang">Pelanggaran Sedang</option>  
                            <option value="Pelanggaran Berat">Pelanggaran Berat</option>
                          </select>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bentuk Pelanggaran</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="text" name="bentuk_pelanggaran" class="form-control col-md-7 col-xs-12" placeholder="Isi Keterangan Siswa" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >No Pasal</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <select name="no_pasal">
                                <option value="4">Pasal 4</option>  
                                <option value="5">Pasal 5</option>  
                                <option value="6">Pasal 6</option> 
                            </select>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Point Pelanggaran</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <select name="poin">
                                <option value="5">5</option>  
                                <option value="10">10</option>  
                                <option value="15">15</option>   
                            </select>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sanksi</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="text" name="sanksi" required="required" class="form-control" placeholder="Memberi hukuman" style="font-size: 14px">
                        </div>
                    </div>
                    
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

                <?php
                  function tgl_indo($tanggal) {
                    $tgl = substr($tanggal, 8, 2);
                    $bln = substr($tanggal, 5, 2);
                    $thn = substr($tanggal, 0, 4);
                    if ($bln == "1") { $bulan = "Januari"; } 
                    if ($bln == "2") { $bulan = "Februari"; } 
                    if ($bln == "3") { $bulan = "Maret"; } 
                    if ($bln == "4") { $bulan = "April"; } 
                    if ($bln == "5") { $bulan = "Mei"; } 
                    if ($bln == "6") { $bulan = "Juni"; } 
                    if ($bln == "7") { $bulan = "Juli"; } 
                    if ($bln == "8") { $bulan = "Agustus"; } 
                    if ($bln == "9") { $bulan = "September"; } 
                    if ($bln == "10") { $bulan = "Oktober"; } 
                    if ($bln == "11") { $bulan = "November"; } 
                    if ($bln == "12") { $bulan = "Desember"; } 
                    return $tgl." ".$bulan." ".$thn;
                  }
                ?>
                <div class="box">
                        <div class="box-body">
                          <h4 class="box-title">Data Pelanggaran Siswa</h4>
                        <table class="table table-bordered">
                            <tr style="background-color: #53c68c">
                              <th style="width: 10px">No</th>
                              <th>NISN</th>
                              <th>nama</th>
                              <th>Tanggal Pelanggaran</th>
                              <th>Kategori Pelanggaran</th> 
                              <th>Bentuk Pelanggaran</th>
                              <th>No Pasal</th>
                              <th>Point Pelanggaran</th>
                              <th>Sanksi</th>
                              <th>Aksi</th>
                            </tr>
                            <?php
                            $i=0;
                            foreach ($pelanggaran as $rowpelanggaran) {
                              $i++;
                            ?>
                            <tr>
                              <td><?php echo $i; ?>.</td>
                              <td><?php echo $rowpelanggaran->nisn; ?></td>
                              <td><?php echo $rowpelanggaran->nama; ?></td>
                              <td><?php echo tgl_indo($rowpelanggaran->tgl_kejadian); ?></td>
                              <td><?php echo $rowpelanggaran->kategori; ?></td>
                              <td><?php echo $rowpelanggaran->bentuk_pelanggaran; ?></td>
                              <td><?php echo $rowpelanggaran->no_pasal; ?></td>
                              <td><?php echo $rowpelanggaran->poin; ?></td>
                              <td><?php echo $rowpelanggaran->sanksi; ?></td>
                              <td><a href="<?php echo site_url('superadmin/deletepelanggaran/'.$rowpelanggaran->id_jenis_pelanggaran); ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin?');">Del</a></td>
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
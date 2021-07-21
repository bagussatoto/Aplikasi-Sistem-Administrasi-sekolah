<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Pendanaan Ekstrakurikuler SMP Yogyakarta<br></center>
        <center><small>Menu ini untuk mendata pendanaan pada ekstrakurikuler pilihan yang telah diambil</small></center>
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
                  <h3 class="box-title">Sejarah Pendanaan</h3>
                </div>
                <form role="form" method="post" action="<?php echo site_url('superadmin/simpanpembayaran'); ?>">
                  <?php
                      $tgl = date('Y-m-d');
                      if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
                    ?>
                  <div class="box-body">
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">NIS</label>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                          <input type="text" name="nisn" required="required" class="form-control" placeholder="Nomor Induk Siswa" style="font-size: 14px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <!-- <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kelas</label>
                      <div class="col-md-3 col-sm-4 col-xs-10">
                        <select class="select2_single form-control" tabindex="-1">
                          <option>-Pilih Kelas-</option>
                            <option>7A</optnion>
                            <option>7B</option>
                            <option>7C</option>
                            <option>7D</option>
                            <option>7F</option>
                            <option>8A</option>
                            <option>8B</option>
                            <option>8C</option>
                            <option>8D</option>
                            <option>8F</option>
                            <option>9A</option>
                            <option>9B</option>
                            <option>9C</option>
                            <option>9D</option>
                            <option>9E</option>
                            <option>9F</option>
                          </select>
                        </div>
                    </div>
                    <br/>
                    <br/> -->
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nominal</label>
                      <div class="col-md-3 col-sm-4 col-xs-10">
                        <input type="text" name="nominal" required="required" class="form-control" placeholder="Nomminal Uang" style="font-size: 14px">
                      </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Tagihan</label>
                      <div class="col-md-3 col-sm-4 col-xs-10">
                        <input type="text" name="jenis_tagihan" required="required" class="form-control" placeholder="Jenis Tagihan" style="font-size: 14px">
                      </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-10">Tanggal</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="date" name="tgl_pembayaran"/> s/d <input type="date" name="batas_akhir_pembayaran"/>
                      </div>
                    </div>
                    <br/>
                    <br/>
                    <!-- <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-3 col-sm-4 col-xs-10">
                        <select name="poin">
                          <option value="sudah">sudah bayar</option>  
                          <option value="belum">belum bayar</option> 
                        </select>
                      </div>
                    </div>
                    <br/>
                    <br/> -->
                    
                  </div>

                  <div class="box-footer">
                    <div> <?php echo $this->session->flashdata('success')?></div>
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
                    <h4 class="box-title">Data Pendanaan Ekstrakurikuler</h4>
                    <table class="table table-bordered">
                      <tr style="background-color: #53c68c">
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Nominal</th>
                        <th>Jenis Tagihan</th>
                        <th>Tanggal Pembayaran</th> 
                        <th>Batas Akhir Pembayaran</th>
                        <!-- <th>Status</th> -->
                        <th>Aksi</th>
                      </tr>
                      <?php
                      $i=0;
                      foreach ($danamandiri as $rowdanamandiri) {
                        $i++;
                        ?>
                        <tr>
                          <td><?php echo $i; ?>.</td>
                          <td><?php echo $rowdanamandiri->nama; ?></td>
                          <td><?php echo $rowdanamandiri->nominal; ?></td>
                          <td><?php echo $rowdanamandiri->jenis_tagihan; ?></td>
                          <td><?php echo tgl_indo($rowdanamandiri->tgl_pembayaran); ?></td>
                          <td><?php echo tgl_indo($rowdanamandiri->batas_akhir_pembayaran); ?></td>
                          <!-- <td><?php echo $rowdanamandiri->status; ?></td> -->
                          <td><a href="<?php echo site_url('superadmin/deletepembayaran/'.$rowdanamandiri->id_danamandiri); ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin?');">Del</a></td>
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

  <!-- /.content -->
  </div>
  <script>
    $(".swa-confirm").on("submit", function(e) {
      e.preventDefault();
      swal({
        title: $(this).data("swa-title"),
        text: $(this).data("swa-text"),
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#cc3f44",
        confirmButtonText: $(this).data("swa-btn-txt"),
        closeOnConfirm: false,
        html: false
      }, function() {

      }
      );
    });
  </script>
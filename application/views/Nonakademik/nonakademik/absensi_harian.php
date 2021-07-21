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
        <center style="color:navy;">Absensi Siswa SMP Yogyakarta<br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('nonakademik');?>">Dashboard</a></li>
      </ol>
    </section>

    <?php echo $this->session->flashdata('pesan'); ?>
     <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Surat Izin Siswa</h3>
              </div>
              <form role="form" method="post" action="<?php echo site_url('nonakademik/simpanperizinan'); ?>">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-10">Tanggal</label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <input type="date" name="tgl_mulai"/> s/d <input type="date" name="tgl_selesai"/>
                    </div>
                  </div>
                  <br/><br/>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                      <input type="text" name="keterangan" class="form-control col-md-7 col-xs-12" placeholder="Isi Keterangan Siswa" style="font-size: 14px">
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <div> <?php echo $this->session->flashdata('success')?></div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
          </div>
       </div>

       <div class="row">
         <div class="col-md-12">
           <div class="box">
             <div class="box-header with-border">
               <h4 class="box-title">Data Abnsensi Harian Siswa</h4>
               </br></br>
               <form method="post" action="<?php echo site_url('nonakademik/Perizinan'); ?>">
                 <?php
                   $tgl = date('Y-m-d');
                   if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
                  ?>
                  <input type="date" name="tgl" value="<?php echo $tgl; ?>" />
                  <button type="submit" class="btn btn-primary">Tampilkan</button>
               </form>
             </br>
             </div>

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
            <div class="box-body">
              <table class="table table-bordered">
                <tr style="background-color: #53c68c">
                  <th style="width: 10px">No</th>
                  <th>Nama Siswa</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th> 
                  <th>Aksi</th>
                </tr>
                <?php
                $i=0;
                foreach ($absenharian as $rowabsenharian) {
                  $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?>.</td>
                    <td><?php echo $rowabsenharian->nama; ?></td> 
                    <td><?php echo tgl_indo($rowabsenharian->tgl_mulai); ?> s/d <?php echo tgl_indo($rowabsenharian->tgl_selesai); ?></td> 
                    <td><?php echo $rowabsenharian->keterangan; ?></td>
                    <td><a href="<?php echo site_url('nonakademik/deleteperizinan/'.$rowabsenharian->id_absen_harian); ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin?');">Del</a></td>
                  </tr>
                  <?php
                    }
                  ?>
              </table>
            </div>
           </div>
         </div>
       </div>
    </section>
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
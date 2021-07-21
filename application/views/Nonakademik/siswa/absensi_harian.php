<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Absensi Siswa SMP Yogyakarta<br></center>
      <center><small>Tahun Ajaran 2016-2017</small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <?php echo $this->session->flashdata('pesan'); ?>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Data Abnsensi Harian Siswa</h4>
            <form method="post" action="<?php echo site_url('siswa/Perizinan'); ?>">
              <?php
                $tgl = date('Y-m-d');
                if ($this->input->post('tgl') != "") { $tgl = $this->input->post('tgl'); }
              ?>
              <input type="date" name="tgl" value="<?php echo $tgl; ?>" />
              <button type="submit" class="btn btn-primary">Tampilkan</button>
            </form></br>
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
<section id="feature" class="transparent-bg">
  <br><br><br><br><br>
    <div class="container">
      <div class="right_col" role="main">
        <h2><center>Ketentuan Penerimaa Peserta Didik Baru</center></h2><br>
          <table class="table table-striped projects" id="example2">
            <thead>
              <tr>
                <th style="width: 5%">No </th>
                <th style="width: 35%">Nama Ketentuan</th>
                <th style="width: 10%">Tanggal</th>
                <th style="width: 10%"></th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i=1;
              foreach ($tabel_ketentuan_ppdb as $row) {
              ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row->nama_ketentuan; ?></td>
                  <td><?php echo $row->tgl_berlaku; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>assets/kesiswaan/ketentuan/<?php echo $row->isi_ketentuan; ?>" class="btn btn-download btn-xs">Download</a>
                  </td
                </tr>
                <?php
                $i=$i+1;
                }
                ?>
              </tbody>
          </table>
          <br>
          <?php 
          if (count($tabel_passing_grade)>0) {
          ?>
            <h2><center>Passing Grade</center></h2><br>
            <table class="table table-striped projects" id="example2">
              <thead>
                <tr>
                  <th style="width: 10%">No </th>
                  <th style="width: 20%">Kategori</th>
                  <th style="width: 20%">Nilai Bawah</th>
                  <th style="width: 40%">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $x=1; 
                foreach ($tabel_passing_grade as $row) {
                ?>
                  <tr>
                    <td><?php echo $x; ?></td>
                    <td><?php echo $row->kategori; ?></td>
                    <td><?php echo $row->nilai; ?></td>
                    <td><?php echo $row->tgl_berlaku; ?></td>
                  </tr>
                  <?php
                  $x=$x+1;
                  }
                  ?>
              </tbody>
            </table>
          <?php } ?>

      </div>
    </div>
  </section>
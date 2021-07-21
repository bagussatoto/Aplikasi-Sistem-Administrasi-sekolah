<section id="feature" class="transparent-bg">
  <div class="container">
    <div class="right_col" role="main">
      <br><br><br><br>
      <h2><center>Pengumuman Penerimaa Peserta Didik Baru</center></h2>
    </div>
    <br>
  </div>
  <br>
  <div class="container">
    <div class="right_col" role="main">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 5%">Nomor </th>
            <th style="width: 55%"><center>Judul</center></th>
            <th style="width: 20%">Tanggal</th>
            <th style="width: 20%"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          foreach ($tabel_pengumuman_ppdb as $row) {
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row->judul; ?></td>
            <td><?php echo $row->tanggal_berlaku; ?></td>
            <td>
              <a href="<?php echo base_url(); ?>assets/kesiswaan/pengumuman/<?php echo $row->isi; ?>" class="btn btn-download btn-xs">Download</a>
            </td>
           </tr>
           <?php
           $i=$i+1;
           }
           ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
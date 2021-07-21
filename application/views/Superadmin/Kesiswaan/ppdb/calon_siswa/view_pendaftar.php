<section id="feature" class="transparent-bg">
  <div class="container">
    <div class="right_col" role="main">
      <br><br><br><br>
      <h2><center>Pendaftar Peserta Didik Baru</center></h2>
    </div>
    <br>
  </div>
  <br>
  <div class="container">
    <div class="right_col" role="main">
      <?php
      if ($settingform['ujian_1'] == '1') 
      {
        ?>
        <table class="table table-striped projects"  id="example1">
        <thead>
          <tr>
            <th style="width: 5%"><h6>Nomor Pendaftar</h6></th>
            <th style="width: 5%"><h5>NISN</h5></th>
            <th style="width: 25%"><h5>Nama</h5></th>
            <th style="width: 15%"><h5>Jenis Kelamin</h5></th>
            <th style="width: 20%"><h5>Asal</h5></th>
            <th style="width: 20%"><h5>Alamat</h5></th>
            <th style="width: 10%"><h5>Status</h5></th>
          </tr>
        </thead>
          <tbody>
            <?php 
            $i=1;
            foreach ($tabel_pendaftar_ppdb as $row) {
            ?>
              <tr>
                <td><h6><?php echo $row->nomor_pendaftaran; ?></h6></td>
                <td><h6><?php echo $row->nisn_pendaftar; ?></h6></td>
                <td><h6><?php echo $row->nama; ?></h6></td>
                <td><h6><?php echo $row->jenis_kelamin; ?></h6></td>
                <td><h6><?php echo $row->asal_sekolah; ?></h6></td>
                <td><h6><?php echo $row->alamat; ?></h6></td>
                <td><h6><?php echo $row->terverifikasi; ?></h6></td>
              </tr>
              <?php
              $i=$i+1;
              }
              ?>
          </tbody>
    </table> 
        <?php
      } else {
        ?>
        <table class="table table-striped projects"  id="example1">
        <thead>
          <tr>
            <th style="width: 5%"><h6>Nomor Pendaftar</h6></th>
            <th style="width: 5%"><h5>NISN</h5></th>
            <th style="width: 25%"><h5>Nama</h5></th>
            <th style="width: 5%"><h5>Ind</h5></th>
            <th style="width: 5%"><h5>Mat</h5></th>
            <th style="width: 5%"><h5>IPA</h5></th>
            <th style="width: 5%"><h5>Prestasi</h5></th>
            <th style="width: 5%"><h5>Total</h5></th>
            <th style="width: 20%"><h5>Asal</h5></th>
            <th style="width: 10%"><h5>Domisili</h5></th>
            <th style="width: 10%"><h5>Status</h5></th>
          </tr>
        </thead>
          <tbody>
            <?php 
            $i=1;
            foreach ($tabel_pendaftar_ppdb as $row) {
            ?>
              <tr>
                <td><h6><?php echo $row->nomor_pendaftaran; ?></h6></td>
                <td><h6><?php echo $row->nisn_pendaftar; ?></h6></td>
                <td><h6><?php echo $row->nama; ?></h6></td>
                <td><h6><?php echo $row->nilai_un_ind; ?></h6></td>
                <td><h6><?php echo $row->nilai_un_mat; ?></h6></td>
                <td><h6><?php echo $row->nilai_un_ipa; ?></h6></td>
                <td><h6><?php echo $row->nilai_prestasi; ?></h6></td>
                <td><h6><?php echo $row->nilai_un_nun; ?></h6></td>
                <td><h6><?php echo $row->asal_sekolah; ?></h6></td>
                <td><h6><?php echo $row->domisili; ?></h6></td>
                <td><h6><?php echo $row->terverifikasi; ?></h6></td>
              </tr>
              <?php
              $i=$i+1;
              }
              ?>
          </tbody>
    </table> 
        <?php
      }
      ?>

            </div>
          </div>
        </section>
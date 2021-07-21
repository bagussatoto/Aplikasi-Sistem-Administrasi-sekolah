<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Hasil Pembagian Kelas Tambahan<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/kesiswaan/index">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div class="tab-pane" id="kelas">
                          
                        
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th class="center">No Absen</th>
                          <th class="center">NISN</th>
                          <th class="center">Nama Siswa</th>
                          <th class="center">Jenis Kelamin</th>
                          <th class="center">Kelas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        $kelas_before = $kelas_tambahan_berjalan[0]->nama_kelas_tambahan;
                        foreach ($kelas_tambahan_berjalan as $kelas) {
                          if ($kelas_before != $kelas->nama_kelas_tambahan || $no == 1) {
                            $kelas_before = $kelas->nama_kelas_tambahan;
                            $no = 1;

                            echo "<tr>";
                            echo "<td colspan='5'>";
                            echo "<div class=\"box-header\" style=\"background-color: #94b8b8\"><h3 class=\"box-title\" style=\"color:white\">Kelas ".$kelas->nama_kelas_tambahan."</h3></div>";
                            echo "</tr>";
                          }
                        ?> 
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $kelas->nisn ?></td>
                          <td><?= $kelas->nama ?></td>
                          <td><?= $kelas->jenis_kelamin ?></td>
                          <td><?= $kelas->nama_kelas_tambahan ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>  
                      </table>

                  

                      
                      
                          

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Hasil Pembagian Kelas Reguler<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/kesiswaan/index">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div class="tab-pane" id="kelas">
                          
                    <table id="tabel-pembagian-agama" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th class="center">No Absen</th>
                          <th class="center">NISN</th>
                          <th class="center">Nama Siswa</th>
                          <th class="center">Jenis Kelamin</th>
                          <th class="center">Agama</th>
                          <th class="center">Kelas</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php   
                          $no = 1;
                          foreach ($siswa as $murid): 
                          ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $murid->nisn ?></td>
                              <td><?= $murid->nama ?></td>
                              <td><?= $murid->jenis_kelamin ?></td>
                              <td><?= $murid->agama ?></td>
                              <td><?= $murid->nama_kelas ?></td>
                            </tr>
                          <?php endforeach; ?>
                      </tbody>
                      </table>

                  

                      
                      
                          

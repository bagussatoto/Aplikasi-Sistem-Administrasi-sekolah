<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Pembagian Kelas Berdasarkan Kuartil<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/kesiswaan/index">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
   
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            
            <div class="tab-content">
              <div class="active tab-pane" id="kelolamapel">
              
               <form method="post" action="<?php echo site_url('distribusi/kesiswaan/hsl_pembagian_kuartil'); ?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">

                      <select class="kodekelas" name="id_kelas_reguler_berjalan" id="kelas1" >
                        <option value="">Pilih Kelas</option>
                        <?php
                        foreach ($kelas_reguler_berjalan as $row_kelas) {
                          ?>
                          <option value="<?php echo $row_kelas->id_kelas_reguler_berjalan; ?>"><?php echo $row_kelas->nama_kelas; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                      
                                    <div class="col-md-6">   
                    <table id="tabel-pembagian-laki" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th class="center">Pilih</th>
                          <th class="center">NISN</th>
                          <th class="center">Nama Siswa</th>
                          <th class="center">Jenis Kelamin</th>
                          <th class="center">Agama</th>
                          <th class="center">Nilai</th>
                          <th class="center">Kuartil</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php   
                          $no = 1;
                          if (count($siswaL) % 2 == 0) {
                            $batas1 = (count($siswaL) + 2) / 4;
                            $batas3 = ((3 * count($siswaL)) + 2) / 4;
                          } else {
                            $batas1 = (1 * (count($siswaL) + 1)) / 4;
                            $batas3 = (3 * (count($siswaL) + 1)) / 4;
                          }
                          
                          $i=0;
                          foreach ($siswaL as $murid): 
                            $i++;
                          ?>
                            <tr>
                              <td><input type="checkbox" name="L<?= $murid->nisn ?>" value="true"></td>
                              <td><?= $murid->nisn ?></td>
                              <td><?= $murid->nama ?></td>
                              <td><?= $murid->jenis_kelamin ?></td>
                              <td><?= $murid->agama ?></td>
                              <td><?= $murid->total_nilai ?><br/><?= $murid->nilai_un_nun ?></td>
                              <td><?php if ($i <= $batas1) { echo "Q1"; } else if ($i >= $batas3) { echo "Q3"; } else { echo "Q2"; } ?></td>
                            </tr>
                          <?php endforeach; ?>
                      </tbody>
                      </table>
              </div>
                            <div class="col-md-6">
                    <table id="tabel-pembagian-perempuan" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th class="center">No Absen</th>
                          <th class="center">NISN</th>
                          <th class="center">Nama Siswa</th>
                          <th class="center">Jenis Kelamin</th>
                          <th class="center">Agama</th>
                          <th class="center">Nilai</th>
                          <th class="center">Kuartil</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php   
                          $no = 1;
                          if (count($siswaL) % 2 == 0) {
                            $batas1 = (count($siswaL) + 2) / 4;
                            $batas3 = ((3 * count($siswaL)) + 2) / 4;
                          } else {
                            $batas1 = (1 * (count($siswaL) + 1)) / 4;
                            $batas3 = (3 * (count($siswaL) + 1)) / 4;
                          }
                          
                          $i=0;
                          foreach ($siswaP as $murid):
                            $i++; 
                          ?>
                            <tr>
                              <td><input type="checkbox" name="P<?= $murid->nisn ?>" value="true"></td>
                              <td><?= $murid->nisn ?></td>
                              <td><?= $murid->nama ?></td>
                              <td><?= $murid->jenis_kelamin ?></td>
                              <td><?= $murid->agama ?></td>
                              <td><?= $murid->total_nilai ?><br/><?= $murid->nilai_un_nun ?></td>
                              <td><?php if ($i <= $batas1) { echo "Q1"; } else if ($i >= $batas3) { echo "Q3"; } else { echo "Q2"; } ?></td>
                              <td><?= $murid->nama_kelas ?></td>
                            </tr>
                          <?php endforeach; ?>
                      </tbody>
                      </table>
                        </div>
                       <div class="col-sm-offset-2 col-sm-10">
                       <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                    </div>
                  </div>

                  
                </form>
               
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              
<!-- ./wrapper -->

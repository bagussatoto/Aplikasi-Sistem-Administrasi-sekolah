<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;"><b>Buku Induk Siswa</b><br></center>
    </h1>
  </section>
  <section class="content">
  
    <?php echo $this->session->userdata('status'); ?>  <!-- siswa -->
    <?php echo $this->session->userdata('siswa'); ?>  <!-- siswa -->
    <?php echo $this->session->userdata('orangtua'); ?>  <!-- formulir aktif -->
    <?php echo $this->session->userdata('wali'); ?>  <!-- formulir aktif -->
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <br>
        <form method="post" action="<?php echo site_url('ppdb/admin/buku_induk/ubahstatus');?>">
        <table class="table table-striped projects" id="example1">
          <div class="form-group" align="right">
          Ubah Status siswa bersamaan
            <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Aktif?');" type="submit" name="button" value="Aktif" class="btn btn-primary btn-xs"/>
            <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Lulus?');" type="submit" name="button" value="Lulus" class="btn btn-success btn-xs"/>
            <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Keluar?');" type="submit" name="button" value="Keluar" class="btn btn-danger btn-xs"/>
          </div>
          <thead>
            <tr>
              <th style="width: 3%"></th>
              <th style="width: 5%">No</th>
              <!-- <th style="width: 5%">Tahun</th> -->
              <th style="width: 5%">NISN</th>
              <th style="width: 22%">Nama</th>
              <th style="width: 10%">Tgl Lahir</th>
              <th style="width: 30%">Alamat</th>
              <th style="width: 5%">Status</th>
              <th colspan="3" style="width: 15%">Informasi Lebih Lengkap</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            foreach ($tabel_siswa as $row) {
            ?>
            <tr>
              <td><input type="checkbox" class="flat" name="nisn_ubah[]" value="<?php echo $row->nisn; ?>"></td>
              <td><?php echo $i; ?></td>
              <!-- <td><?php echo $row->tahun_ajaran; ?></td> -->
              <td><?php echo $row->nisn; ?></td>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->tanggal_lahir; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->status_siswa; ?></td>
              <td>                        
                <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('ppdb/admin/buku_induk/editsiswa/'.$row->nisn); ?>" data-target="#mySiswa<?php echo $i; ?>">Siswa</a>
              </td>
              <td>                        
                <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('ppdb/admin/buku_induk/editsiswaortu/'.$row->nisn); ?>" data-target="#myOrtu<?php echo $i; ?>">Orang Tua</a>
              </td>
              <td>                        
                <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('ppdb/admin/buku_induk/editsiswawali/'.$row->nisn); ?>" data-target="#myWali<?php echo $i; ?>">Wali</a>
              </td>
            </tr>

            <?php
            $i=$i+1;
            }
            ?>
          </tbody>
        </table>
        </form>

         <?php 
            $i=1;
            foreach ($tabel_siswa as $row) {
            ?>

        <div id="mySiswa<?php echo $i; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Data Siswa</h4>
                  </div>
                <div class="modal-body"></div>
                </div>
              </div>
            </div> 

            <div id="myOrtu<?php echo $i; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Data Siswa</h4>
                  </div>
                <div class="modal-body"></div>
                </div>
              </div>
            </div>

            <div id="myWali<?php echo $i; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Data Siswa</h4>
                  </div>
                <div class="modal-body"></div>
                </div>
              </div>
            </div>

            <?php
            $i=$i+1;
            }
            ?> 

        <br>
      </div>

    <!-- =========================================== EDIT ORTU WALI =========================================-->
    </section>
  </div>
</div>
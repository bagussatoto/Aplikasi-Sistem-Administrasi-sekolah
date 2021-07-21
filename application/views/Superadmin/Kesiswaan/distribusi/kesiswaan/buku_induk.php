<div class="content-wrapper">
  <div style="overflow-y: scroll; height: 600px">
    <section class="content-header">
      <h1><center style="color:navy;"><b>Buku Induk Siswa</b><br></center><br></h1>
    </section>
    <section class="content">
  
    <div class="col-md-12">
      <div class="nav-tabs-custom"><br>
        
          
          <table class="table table-striped projects examples">
          <thead>
            <tr>
              <th width="10">No</th>
              <th width="100">NISN <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
              <th>Nama <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
              <th width="100">Tgl Lahir</th>
              <th width="90">Status <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
              <th width="230">Informasi Lebih Lengkap</th>
            </tr>
          </thead>
          <tbody class="searchable">
               <?php 
            $i=1;
            foreach ($tabel_siswa as $row) {
              ?>
              <tr>
                
                <td><?php echo $i; ?></td>
                <td><?php echo $row->nisn; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->tanggal_lahir; ?></td>
                <td><?php echo $row->status_siswa; ?></td>
                <td>                        
                  <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('superadmin/kesiswaan/edit_buku_induk_siswa/'.$row->nisn); ?>" data-target="#mySiswa<?php echo $i; ?>"><i class="fa fa-pencil text-red" aria-hidden="true"></i> Siswa</a>
                  <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('superadmin/kesiswaan/edit_buku_induk_ortu/'.$row->nisn); ?>" data-target="#myOrtu<?php echo $i; ?>"><i class="fa fa-pencil text-blue" aria-hidden="true"></i> Orang Tua</a>               
                </td>
              </tr>
              <?php
              $i=$i+1;
            }
            ?>
          </tbody>  
        </table>
      
    </div>
    
       <?php 
    $i=1;
    foreach ($tabel_siswa as $row) 
    {
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
              <h4 class="modal-title">Data Orang Tua dan Wali Siswa</h4>
            </div>
          <div class="modal-body"></div>
          </div>
        </div>
      </div>
      
      <?php
      $i=$i+1;
      }
      ?><br>
      </div>
    </section>
  </div>
</div>
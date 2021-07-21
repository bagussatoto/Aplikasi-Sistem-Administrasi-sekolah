<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai Akan dan Belum Pensiun <br></center>
      <br>
    </h1>
  </section>
  <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">

        <div class="nav-tabs-custom">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#homedatpeg" data-toggle="tab">Pegawai Akan dan Belum Pensiun</a></li>
          </ul>
          <div class="tab-content">
           <div class="active tab-pane" id="homedatpeg">

             <div class="box">
              <div class="box-header">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#belum" data-toggle="tab">Masih Aktif</a></li>
                  <li><a href="#sudah" data-toggle="tab">Bakal Pensiun</a></li>
                 
                </ul>
              </div>

              <div class="tab-content">

                <!-- data pegawai -->
                <div class="active tab-pane" id="belum">

                  <table id="example1"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th> 
                    <th>Usia</th>   
                    <th>Masa Bakal Pensiun</th> 
                        
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($belum as $key => $value) {
                   echo "<tr>";
                    echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->TTL."</td>";
                   echo "<td>".$value->TAHUN." Tahun</td>";
                   echo "<td>".$value->BULAN." Bulan</td>";
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
              
                </div>
                <!-- tutup tab pegawai -->

                <!-- data guru -->
                <div class="tab-pane" id="sudah">

                 <table id="example3"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th> 
                    <th>Usia</th>   
                      <th>Masa Bakal Pensiun</th>  
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($sudah as $key => $value) {
                   echo "<tr>";
                    echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->TTL."</td>";
                   echo "<td>".$value->TAHUN." Tahun</td>";
                   
                   echo "<td>".$value->BULAN." Bulan</td>";
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
              </div>
              <!-- tutup data guru -->

             
              <!-- tutup data guru -->
          <!-- tutup data pensiun -->
  <!--   <a href="<?php echo site_url('superadmin/printpegawaibaru'); ?>" target="_blank" class="btnjdwl btn btn-default"><i class="fa fa-print text-red "></i>Print</a> -->
        </div> <!-- tutup content -->
      </div>

    </div>



    

</div>
<!-- /.tab-content -->
</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row (main row) -->
<!-- /modal -->


</section>
<!-- /.content -->
</div>


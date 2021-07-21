<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai Berdasarkan Pendidikan <br></center>
      <br>
    </h1>
  </section>
  <section class="content">
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">

        <div class="nav-tabs-custom">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#homedatpeg" data-toggle="tab">Pendidikan Pegawai</a></li>
          </ul>
          <div class="tab-content">
           <div class="active tab-pane" id="homedatpeg">

             <div class="box">
              <div class="box-header">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#2030" data-toggle="tab">SMA</a></li>
                  <li><a href="#3140" data-toggle="tab">D3</a></li>
                  <li><a href="#4150" data-toggle="tab">S1</a></li>
                  <li><a href="#5160" data-toggle="tab">S2</a></li>
                  <li><a href="#s3" data-toggle="tab">S3</a></li>
                </ul>
              </div>

              <div class="tab-content">

                <!-- data pegawai -->
                <div class="active tab-pane" id="2030">

                  <table id="example1"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pendidikan</th> 
                    
                        
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($sma as $key => $value) {
                   echo "<tr>";
                    echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->Pendidikan."</td>";
                  
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
              
                </div>
                <!-- tutup tab pegawai -->

                <!-- data guru -->
                <div class="tab-pane" id="3140">

                 <table id="example3"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pendidikan</th> 
                    
                        
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($d3 as $key => $value) {
                   echo "<tr>";
                    echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->Pendidikan."</td>";
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
              </div>
              <!-- tutup data guru -->

              <!-- datapensiun -->
              <div class="tab-pane" id="4150">

               <table id="example2"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pendidikan</th> 
                  
                        
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($s1 as $key => $value) {
                   echo "<tr>";
                    echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->Pendidikan."</td>";
                   
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
          </div>

            <!-- data guru -->
                <div class="tab-pane" id="5160">

                 <table id="example4"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pendidikan</th> 
                   
                        
                  </tr>
                </thead>
                 <tbody>
                 <?php foreach ($s2 as $key => $value) {
                   echo "<tr>";
                   echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->Pendidikan."</td>";
                   
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
              </div>
              <!-- tutup data guru -->
              <!-- data guru -->
                <div class="tab-pane" id="s3">

                 <table id="example4"  class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pendidikan</th> 
                     
                  </tr>
                </thead>
                 <tbody>
                 <?php foreach ($s3 as $key => $value) {
                   echo "<tr>";
                   echo "<td>".($key+1)."</td>";
                   echo "<td>".$value->NIP."</td>";
                   echo "<td>".$value->Nama."</td>";
                   echo "<td>".$value->Pendidikan."</td>";
                   
                   echo "</tr>";
                 } ?>
              
              </tbody>
            </table>
              </div>
              <!-- tutup data guru -->
          <!-- tutup data pensiun -->
    <!-- <a href="<?php echo site_url('superadmin/printpegawaibaru'); ?>" target="_blank" class="btnjdwl btn btn-default"><i class="fa fa-print text-red "></i>Print</a> -->
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


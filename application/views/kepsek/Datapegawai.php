 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('kepsek');?>">Dashboard </a></li>
    </ol>
  </section>

  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">

        <div class="nav-tabs-custom">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#homedatpeg" data-toggle="tab">Data Induk Pegawai</a></li>
          </ul>
          <div class="tab-content">
           <div class="active tab-pane" id="homedatpeg">
             <div class="box">
              <div class="box-header">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#datapegawai" data-toggle="tab">Data Pegawai</a></li>
                  <li><a href="#dataguru" data-toggle="tab">Data Guru</a></li>
                  <li><a href="#datapensiun" data-toggle="tab">Data Pensiun</a></li>
                </ul>
              </div>
              
              <div class="tab-content">
                
                <!-- Tab data pegawai  -->
                <div class="active tab-pane" id="datapegawai">
                 <table class="table table-bordered table-striped" > 
                  <thead> 
                    <tr style="background-color: #53c68c">
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Golongan</th> 
                      <th>No.SK</th>   
                      <th>Action</th>      
                    </tr>
                  </thead>
                  
                  <tbody>

                  <!-- function datpeg -->
                  <?php
                   $no=1;
                  foreach ($datpeg->result() as $key) { ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo $key->NIP;?></td>
                      <td><?php echo $key->Nama;?></td>
                      <td><?php echo $key->Golongan;?></td>
                      <td><?php echo $key->No_SK;?></td>
                      
                      <td> <a  href="<?php echo site_url('kepsek/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>     
                    </tr>
                      <?php $no++; }?>
                      <!-- tutup function -->
                  </tbody>
                </table>
              </div>

              <!-- Tab data guru -->
              <div class="tab-pane" id="dataguru">
               <table class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Golongan</th> 
                    <th>No.SK</th>   
                    <th>Action</th>      
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $no=1;
                  foreach ($datguru->result() as $key) { ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo $key->NIP;?></td>
                      <td><?php echo $key->Nama;?></td>
                      <td><?php echo $key->Golongan;?></td>
                      <td><?php echo $key->No_SK;?></td> 
                      <td> <a  href="<?php echo site_url('kepsek/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>     
                    </tr>
                      <?php $no++; }?>
                </tbody>
              </table>
            </div>

            <!-- Tab data guru -->
              <div class="tab-pane" id="datapensiun">
                
               <table class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Golongan</th> 
                    <th>No.SK</th>   
                    <th>Action</th>      
                  </tr>
                </thead>
                <tbody>
                 <?php
                   $no=1;
                  foreach ($datpensiun->result() as $key) { ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo $key->NIP;?></td>
                      <td><?php echo $key->Nama;?></td>
                      <td><?php echo $key->Golongan;?></td>
                      <td><?php echo $key->No_SK;?></td>
                      
                      <td> <a  href="<?php echo site_url('kepsek/detailspegawai/');?><?php echo $key->NIP; ?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>     
                    </tr>
                      <?php $no++; }?>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>

      <!-- /.tab-pane -->

      <!-- /.tab-pane -->

      <!-- /.tab-pane -->
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
</div>
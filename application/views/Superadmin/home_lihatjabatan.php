<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Pegawai Dengan Hak Akses<br></center>
      <br>
    </h1>
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
            <li class="active"><a href="#lihatjabatan" data-toggle="tab">Lihat Hak Akses</a></li>
           
          </ul>


          <div class="tab-content"> 
           <!-- lihat jabatan -->
           <div class="active tab-pane" id="lihatjabatan">
             <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Hak Akses</h3>
              </div>
              <table id="example1" class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Akses</th>      
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach ($datajabatan->result() as $key) { ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $key->NIP;?></td>
                    <td><?php echo $key->Nama;?></td>
                    <td><?php echo $key->nama_jabatan;?></td>     
                  </tr>
                  <?php $no++; }?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- ttutup lihat jabatan -->



      

            
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
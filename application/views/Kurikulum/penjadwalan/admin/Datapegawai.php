 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Pegawai SMP Yogyakarta <br></center>
      <br>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/admin">Dashboard </a></li>
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
                </ul>
              </div>
              <div class="tab-content">
                
                <!-- Tab data pegawai  -->
                <div class="active tab-pane" id="datapegawai">
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
                    <tr>
                      <td>1</td>
                      <td>1982923819</td>
                      <td>Ahmad Muzadi</td>
                      <td>IIIA</td>
                      <td>672362156351</td>
                      <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>    

                    </tr>
                    <tr>
                      <td>2</td>
                      <td>127313818</td>
                      <td>Ahmad Dahlan</td>
                      <td>IIIB</td>
                      <td>672362156354</td>
                      <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>    
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>127313819</td>
                      <td>Ryan Restiawan</td>
                      <td>IIIC</td>
                      <td>672362156359</td>
                      <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>  
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>127313820</td>
                      <td>Mia Puspa</td>
                      <td>IIIC</td>
                      <td>672362156360</td>
                      <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>  
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>127313821</td>
                      <td>Sukijan</td>
                      <td>IIIC</td>
                      <td>672362156361</td>
                      <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>     
                    </tr>
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
                  <tr>
                    <td>1</td>
                    <td>12738123</td>
                    <td>Ahmad Wahyudi</td>
                    <td>IIIA</td>
                    <td>2813123819</td>
                    <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>   

                  </tr>
                  <tr>
                    <td>2</td>
                    <td>823931837</td>
                    <td>Muhammad Choirul Anwar</td>
                    <td>IVA</td>
                    <td>82391238748</td>
                    <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>     
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>812912393</td>
                    <td>Ngurah Rai</td>
                    <td>IIA</td>
                    <td>672362156359</td>
                    <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>12738123178</td>
                    <td>Nadya Aulia</td>
                    <td>IIIB</td>
                    <td>8128312378474</td>
                    <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>      
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>76728746473</td>
                    <td>Gita Suhendar</td>
                    <td>IIB</td>
                    <td>81293192389</td>
                    <td> <a  href="<?php echo base_url();?>index.php/admin/detailspegawai" type="button" role="button" class="btn btn-block btn-primary button-action btnedit" >Details</a></td>    
                  </tr>
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
<div class="modal fade bs-example-modal-lg" id="kaldik1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">KALDIK TAHUN AJARAN 2016-2017</h4>
      </div>
      <div class="modal-body">
        <center><embed src="image/kaldik1.jpg"> </embed></center>
      </div>
      <div class="modal-footer">
        <a href="#kaldik1" data-toggle="tab"><button class="btnjdwl"><i class="fa fa-print text-red "></i> Print</button></a>
      </div>
    </div>
  </div>
</div>

</section>
</div>
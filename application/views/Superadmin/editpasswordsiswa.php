    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Data Jabatan SMP Yogyakarta <br></center>

        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('superadmin');?>">Dashboard </a></li>
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

<?php
  //print_r($datjab);
?>

              <div class="tab-pane" id="updatepasswordsiswa">
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('superadmin/updatepasswordsiswa'); ?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel" style="padding: 2% 0">


                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">NISN</label>
                        <div class="col-sm-4">
                         <input type="text" class="form-control"  name="nisn" placeholder="nisn" value="<?php echo $rowpeg->nisn; ?>">
                       </div>
                     </div>
                     <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-4">
                         <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo $rowpeg->nama; ?>">
                       </div>
                     </div>

                     

                    <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-4">
                         <input type="text" class="form-control" id="inputName" name="password" placeholder="password" value="<?php echo $rowpeg->password; ?>">
                       </div>
                     </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-5">
                       <button type="submit" role="button" class="btn btn-danger">Edit data</button>
                       <a href="<?php echo base_url();?>/superadmin/gantipasswordsiswa" type="button" role="button" class="btn btn-danger">Cancel</a>
                     </div>
                   </div>
                 </div>
                 </form>
               </div>
             
           
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
<!-- /.content -->
</div>

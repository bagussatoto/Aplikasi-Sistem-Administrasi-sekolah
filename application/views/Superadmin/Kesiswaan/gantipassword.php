<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center style="color:navy;">Data Pegawai SMP Yogyakarta <br></center>
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



              <div class="tab-pane" id="gantipassword">
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('kesiswaan/updatepassword'); ?>">
                  <div class="bigbox-mapel"> 
                  <div class="box-header">
                  <br>
                    <h3 class="box-title">Ganti Password</h3>
                  </div>
                  <div class="box-mapel" style="padding: 2% 0">



                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">NIP/Username</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="username" placeholder="NIP" value="<?php echo $this->session->userdata('NIP'); ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Password Lama</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="password" placeholder="Password Lama ">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Password Baru</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="passwordbaru" placeholder="Password Baru ">
                        </div>
                      </div>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password ">
                        </div>
                      </div>

                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                      <button type="submit" role="button" class="btn btn-danger">Ganti Password</button>
                         <a href="<?php echo site_url('kesiswaan/gantipassword');?>" type="button" role="button" class="btn btn-danger">Cancel</a>
                          
                        </div>
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
    
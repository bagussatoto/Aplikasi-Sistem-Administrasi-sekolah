<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Request Kelas Klinik UN<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>distribusi/siswa/home">Dashboard</a></li>
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
            

                      <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/save_klinik_un_siswa');?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel">
                     <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">NISN <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="nisn">
                  </div>
                  </div>
                    <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Nama  <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="nama_siswa">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Kelas <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="kelas">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Request Materi <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="req_materi">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Peserta <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="jumlah_peserta">
                  </div>
                  </div>
                  <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                   <button type="reset" class="btn btn-primary">Reset</button> 
                  </div>
                  </div>
                        
                        </form>
                        </div>
                        </div>
                        </form>
                        </div>
                        <!-- end tab 1 -->
                        
                        <!-- end tab 2 -->
                        
                        <!-- end tab 3 -->

                        
                        <!-- end tab 4 -->
                      
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12 ">

          <!-- Profile Image -->
          
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
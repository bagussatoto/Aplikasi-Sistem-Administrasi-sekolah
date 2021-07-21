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
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" >Form Request</a></li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Respon Request</a></li>
            </ul>


                      
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                       
                    <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="form-horizontal form-mapel" method="post" action="<?php echo site_url('distribusi/siswa/save_klinik_un_siswa');?>">
                  <div class="bigbox-mapel"> 
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Request Materi <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="req_materi" required="required">
                  </div>
                  </div>
                  <div class="form-group formgrup jarakform">
                    <label class="control-label col-md-3" for="first-name">Jumlah Peserta <span class="required">*</span>
                    </label>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control" name="jumlah_peserta" required="required">
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
                      <!-- end tab 1 -->
                        
                     <div class="tab-pane" id="tab_content2" aria-labelledby="profile-tab">
                      <div class="bigbox-mapel"> 
                  
                  
                      <table class="table table-striped projects" id="dataTables-example">
                        <thead>
                          <tr>
                          <th class="center"> No </th>
                          <th class="center">NISN</th>
                          <th class="center">Nama</th>
                          <th class="center">Kelas</th>
                          <th class="center">Request Materi</th>
                          <th class="center">Jumlah Peserta</th>
                          <th class="center">Tanggal</th>
                          <th class="center">Respon</th>
                          <th class="center"></th>
                          <th class="center"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                        $i=0;
                        foreach ($klinik_un as $m) {
                          $i++;
                      ?>
                        <tr>
                          <td><?php echo $i ?></td>
                          <td><?php echo $m->nisn?></td>
                          <td><?php echo $m->nama_siswa?></td>
                          <td><?php echo $m->kelas?></td>
                          <td><?php echo $m->req_materi?></td> 
                          <td><?php echo $m->jumlah_peserta?></td>
                          <td><?php echo $m->tanggal?></td>
                          <td><?php echo $m->respon?></td>
                        </tr>
                      <?php
                        }
                      ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
           
                        
                        
        </div>
        
        </div>
        </div>    
    </section>
    
 </div>
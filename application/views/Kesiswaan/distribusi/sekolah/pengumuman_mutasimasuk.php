<section id="feature" class="transparent-bg">
  <div class="container">
      <h2><center>Pengumuman Mutasi Masuk </center></h2>
      <br><br>
      <div class="row">
      <div class="nav-tabs-custom">
      <div id="myTabContent" class="tab-content">
      <div class="bigbox-mapel">
      <div class="box-mapel">
      <div class="form-group formgrup jarakform">
        <div class="col-sm-6">
                  <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> entries
                </label>
              </div>
          <div class="col-sm-6">
                     <div id="example1_filter" class="dataTables_filter">
                       <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                       </label>
                     </div>
                   </div>
      </div>
      </div>

      <table class="table table-striped projects">
               <thead>
                 <tr>
                   <th style="width: 1%">No</th>
                   <th style="width: 10%">Judul pengumuman</th>
                   <th style="width: 10%">Tanggal</th>
                   <th style="width: 10%"></th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  $i=0;
                  foreach ($pengumuman_mutasi as $m) {
                  $i++;
                  ?>
                  <tr class="odd gradeX">
                    <td><?php echo $i ?></td>
                    <td><?php echo $m->judul_pengumuman?></td>
                    <td><?php echo $m->tgl_pengumuman?></td><td>
                    <a href="<?php echo base_url('distribusi/sekolah/download/'.$m->id_pengumuman)?>" class="btn btn-primary btn-xs"><i class="fa fa-download"></i></a>
                  </tr>
              
                <?php $i++; } ?>
              </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
       
        </div><!--/.container-->
    </section><!--/#feature-->
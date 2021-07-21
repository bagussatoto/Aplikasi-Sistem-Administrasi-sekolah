<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Keterlambatan Siswa SMP Yogyakarta<br></center>
      <center><small>Tahun Ajaran 2016-2017</small></center>
    </h1>
    <ol class="breadcrumb">
      <!-- <li ><a href="<?php echo site_url('nonakademik');?>">Dashboard</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <section class="col-lg-12 ">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-left">
               <li class="active"><a href="<?php echo site_url('siswa/keterlambatan'); ?>">Keterlambatan Siswa</a></li>
               <li>
                <a href="<?php echo site_url('siswa/grafik'); ?>" class="dropdown-toggle" data-toggle="dropdown">Grafik</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="<?php echo site_url('siswa/grafik'); ?>#Bulanan">Bulanan</a></li>
                  <li><a tabindex="-1" href="<?php echo site_url('siswa/grafik'); ?>#Tahunan">Tahunan</a></li>
                </ul>
               </li>
            </ul>
            <div class="tab-content no-padding">
              <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                <div class="box">
                  <div class="box-body">
                    <center><h3>Data Keterlambatan siswa</h3></center>
                    <select name="id_tahun_ajaran" id="id_tahun_ajaran" onchange="document.location='<?php echo site_url('siswa/keterlambatan');?>/' + document.getElementById('id_tahun_ajaran').value;">
                      <option value=""></option>  
                      <?php
                      foreach ($tahunajaran as $rowtahunajaran) {
                        ?>
                        <option value="<?php echo $rowtahunajaran->id_tahun_ajaran; ?>" <?php if ($id_tahun_ajaran == $rowtahunajaran->id_tahun_ajaran) { echo " selected"; } ?>><?php echo $rowtahunajaran->nama_file_kaldik; ?></option>  
                        <?php
                      }
                      ?>
                    </select>
                    <br/><br/>
                    <table class="table table-bordered">
                      <tr style="background-color: #53c68c">
                        <th>Semester</th>
                        <th>Jumlah Siswa</th>
                        <th>Jumlah Terlambat</th>
                      </tr>
                      <?php
                      foreach ($keterlambatan as $row_keterlambatan) {
                        ?>
                        <tr >
                          <td> Semester 1</td>
                          <td>
                            <a data-toggle="modal" data-show="true" href="<?php echo site_url('nonakademik/dataketerlambatan/'.$id_tahun_ajaran."/".$row_keterlambatan->orang); ?>" data-target="#myModal<?php echo $row_keterlambatan->orang ?>"><?php echo $row_keterlambatan->orang; ?> Siswa</a>
                          </td>
                          <td>
                            <?php echo $row_keterlambatan->jml; ?> Kali
                          </td>
                        </tr>

                        <div id="myModal<?php echo $row_keterlambatan->orang ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog modal-md">

                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Data</h4>
                              </div>
                              <div class="modal-body">
                                
                              </div>
                            </div>

                          </div>
                        </div>


                        <?php
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
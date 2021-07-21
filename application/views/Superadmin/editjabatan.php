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

              <div class="tab-pane" id="updatejab">
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('superadmin/updatejab'); ?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel" style="padding: 2% 0">


                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">NIP</label>
                        <div class="col-sm-4">
                         <input type="text" class="form-control"  name="NIP" placeholder="NIP" value="<?php echo $rowpeg->NIP; ?>" readonly>
                       </div>
                     </div>
                     <div class="form-group formgrup jarakform" >
                      <label  class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-4">
                       <input type="text" class="form-control" name="Nama" placeholder="Nama" value="<?php echo $rowpeg->Nama; ?>" readonly>
                     </div>
                   </div>

                   <script type="text/javascript">
                    function tulisket() {
                          //alert(document.getElementById('id_jabatann').value );
                          if (document.getElementById('id_jabatann').value == "1") {
                            document.getElementById('ketjabatan').innerHTML = "*Kepala sekolah merupakan hak akses yang dapat membaca Menu-Menu yang ada pada SIA";
                          } else if (document.getElementById('id_jabatann').value == "2") {
                            document.getElementById('ketjabatan').innerHTML = "*Superadmin merupakan role yang mempunyai hak akses penuh pada SIA";
                          } else if (document.getElementById('id_jabatann').value == "3") {
                            document.getElementById('ketjabatan').innerHTML = "*Pegawai merupakan role yang memegang hak akses menu Kepegawaian pada SIA dan beberapa menu lainnya";
                          } else if (document.getElementById('id_jabatann').value == "4") {
                            document.getElementById('ketjabatan').innerHTML = "*Guru Dapat mengakses menu Distribusi Kelas, Jam Mengajar Guru, Jadwal Mapel, Jadwal Piket,Jam Mengajar Guru, Jadwal, Rapor, Nilai Siswa";
                          } else if (document.getElementById('id_jabatann').value == "5") {
                            document.getElementById('ketjabatan').innerHTML = "*Konseling dapat mengakses menu Non Akademik untuk Bagian BK pada SIA";
                          } else if (document.getElementById('id_jabatann').value == "6") {
                            document.getElementById('ketjabatan').innerHTML = "*Kesiswaan merupakan role yang memegang hak akses Menu Kesiswaan pada SIA";
                          } else if (document.getElementById('id_jabatann').value == "7") {
                            document.getElementById('ketjabatan').innerHTML = "*Kurikulum merupakan role yang memegang Hak akses menu Kurikulum pada SIA";
                          } else if (document.getElementById('id_jabatann').value == "9") {
                            document.getElementById('ketjabatan').innerHTML = "*Pembimbing dapat mengakses menu Non Akademik untuk Bagian Ekstrakurikuler pada SIA";
                          } else if (document.getElementById('id_jabatann').value == "10") {
                            document.getElementById('ketjabatan').innerHTML = "*Karyawan dapat mengakses Menu Distribusi Kelas, Jadwal Piket, Menu Non Akademik, Dan Nilai siswa";
                          } else if (document.getElementById('id_jabatann').value == "11") {
                            document.getElementById('ketjabatan').innerHTML = "*Guru Piket merupakan role yang memiliki hak akses untuk mengelola Presensi Pegawai dan Presensi Siswa";
                          } else {
                            document.getElementById('ketjabatan').innerHTML = "-";
                          }
                        }  
                      </script>

                      <div class="form-group formgrup jarakform">
                        <label  class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-4">
                          <select name="id_jabatan" id="id_jabatann" required onchange="tulisket();">
                           <option selected disabled value="">Pilih Jabatan</option>
                           <?php 

                           foreach ($datjab as $key) {
                            if ($key->nama_jabatan != "Siswa") {
                             ?>
                             <option value="<?php echo $key->id_jabatan; ?>" <?php if ($key->id_jabatan == $rowpeg->id_jabatan) { echo "selected"; } ?>><?php echo $key->nama_jabatan; ?></option>
                             <?php
                           }
                         }
                         ?>
                       </select>
                     </div>
                   </div>

                   <div class="form-group formgrup jarakform" >
                    <label  class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-4">
                     <span id="ketjabatan">-</span>
                   </div>
                 </div>

                 <div class="form-group formgrup jarakform" >
                  <label  class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                   <input type="password" class="form-control" id="inputName" name="password" placeholder="password" value="<?php echo $rowpeg->password; ?>">
                 </div>
               </div>

               <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                 <button type="submit" role="button" class="btn btn-danger">Edit data</button>
                 <a href="<?php echo base_url();?>index.php/superadmin/jabatan" type="button" role="button" class="btn btn-danger">Cancel</a>
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

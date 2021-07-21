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
                <form class="form-horizontal formmapel" method="post" action="<?php echo site_url('superadmin/updatejenisjab'); ?>">
                  <div class="bigbox-mapel"> 
                    <div class="box-mapel" style="padding: 2% 0">


                      <div class="form-group formgrup jarakform" >
                        <label  class="col-sm-2 control-label">ID Jabatan</label>
                        <div class="col-sm-4">
                         <input type="text" class="form-control"  name="id_jabatan" placeholder="id_jabatan" value="<?php echo $rowjab->id_jabatan; ?>" readonly >
                       </div>
                     </div>
                     <div class="form-group formgrup jarakform" >
                      <label  class="col-sm-2 control-label">Nama Jabatan</label>
                      <div class="col-sm-4">
                       <input type="text" class="form-control" name="nama_jabatan" placeholder="nama_jabatan" value="<?php echo $rowjab->nama_jabatan; ?>" readonly>
                     </div>
                   </div>


                <!--    <div class="form-group formgrup jarakform" >
                    <label  class="col-sm-2 control-label">URL </label>
                    <div class="col-sm-4">
                     <input type="text" class="form-control" name="url" placeholder="url" value="<?php echo $rowjab->url; ?>" readonly>
                   </div>
                 </div> -->

                 <?php
                 $arrmenuakses = explode(",", $rowjab->menuakses);

                 ?>
                 <div class="form-group formgrup jarakform" >
                  <label  class="col-sm-2 control-label">Menu Akses</label>
                  <div class="col-sm-4">
                   <!-- <input type="text" class="form-control" name="menuakses" placeholder="menuakses" value="<?php //echo $rowjab->menuakses; ?>" > -->

                   

                   <input type="checkbox" name="menuakses[]" value="1" <?php if (in_array("1", $arrmenuakses)) { echo " checked"; } ?>>1. Kesiswaan<br/>
                   <input type="checkbox" name="menuakses[]" value="2" <?php if (in_array("2", $arrmenuakses)) { echo " checked"; } ?>>2. Penerimaan Peserta Didik Baru<br/>
                   <input type="checkbox" name="menuakses[]" value="3" <?php if (in_array("3", $arrmenuakses)) { echo " checked"; } ?>>3. PPDB Ujian<br/>
                   <input type="checkbox" name="menuakses[]" value="4" <?php if (in_array("4", $arrmenuakses)) { echo " checked"; } ?>>4. PPDB UN<br/><br>
                   <input type="checkbox" name="menuakses[]" value="5" <?php if (in_array("5", $arrmenuakses)) { echo " checked"; } ?>> 5. Daftar Ulang<br/>
                   <input type="checkbox" name="menuakses[]" value="6" <?php if (in_array("6", $arrmenuakses)) { echo " checked"; } ?>> 6. Peserta Didik Baru<br/>
                   <input type="checkbox" name="menuakses[]" value="7" <?php if (in_array("7", $arrmenuakses)) { echo " checked"; } ?>> 7. Kenaikan Kelas<br/><br>

                   <input type="checkbox" name="menuakses[]" value="8" <?php if (in_array("8", $arrmenuakses)) { echo " checked"; } ?>> 8. Distribusi Kelas<br/>
                   <input type="checkbox" name="menuakses[]" value="9" <?php if (in_array("9", $arrmenuakses)) { echo " checked"; } ?>> 9. Kelas Reguler<br/>
                   <input type="checkbox" name="menuakses[]" value="10" <?php if (in_array("10", $arrmenuakses)) { echo " checked"; } ?>> 10. Kelas Tambahan<br/>
                   <input type="checkbox" name="menuakses[]" value="11" <?php if (in_array("11", $arrmenuakses)) { echo " checked"; } ?>> 11. Klinik UN<br/><br>

                   <input type="checkbox" name="menuakses[]" value="12" <?php if (in_array("12", $arrmenuakses)) { echo " checked"; } ?>> 12. Mutasi<br/>
                   <input type="checkbox" name="menuakses[]" value="13" <?php if (in_array("13", $arrmenuakses)) { echo " checked"; } ?>> 13. Mutasi Masuk<br/>
                   <input type="checkbox" name="menuakses[]" value="14" <?php if (in_array("14", $arrmenuakses)) { echo " checked"; } ?>> 14. Mutasi Keluar<br/><br>
                   <input type="checkbox" name="menuakses[]" value="15" <?php if (in_array("15", $arrmenuakses)) { echo " checked"; } ?>> 15. Buku Induk<br/><br>

                   <input type="checkbox" name="menuakses[]" value="16" <?php if (in_array("16", $arrmenuakses)) { echo " checked"; } ?>>16. Kurikulum<br/>
                   <input type="checkbox" name="menuakses[]" value="17" <?php if (in_array("17", $arrmenuakses)) { echo " checked"; } ?>>17. Penjadwalan<br/>
                   <input type="checkbox" name="menuakses[]" value="18" <?php if (in_array("18", $arrmenuakses)) { echo " checked"; } ?>>18. Tambah Mapel<br/>
                   <input type="checkbox" name="menuakses[]" value="19" <?php if (in_array("19", $arrmenuakses)) { echo " checked"; } ?>>19. Mengelola Mapel<br/>
                   <input type="checkbox" name="menuakses[]" value="20" <?php if (in_array("20", $arrmenuakses)) { echo " checked"; } ?>>20. Mengelola Hari & Jam<br/>
                   <input type="checkbox" name="menuakses[]" value="21" <?php if (in_array("21", $arrmenuakses)) { echo " checked"; } ?>>21. Jam Mengajar Guru<br/>
                   <input type="checkbox" name="menuakses[]" value="22" <?php if (in_array("22", $arrmenuakses)) { echo " checked"; } ?>> 22. Jadwal Mapel<br/>
                   <input type="checkbox" name="menuakses[]" value="23" <?php if (in_array("23", $arrmenuakses)) { echo " checked"; } ?>>23. Jadwal Piket Guru<br/>
                   <input type="checkbox" name="menuakses[]" value="24" <?php if (in_array("24", $arrmenuakses)) { echo " checked"; } ?>>24. Jadwal Tambahan<br/>
                   <input type="checkbox" name="menuakses[]" value="25" <?php if (in_array("25", $arrmenuakses)) { echo " checked"; } ?>>25. Mengelola Ektrakurikuler<br/><br>

                   <input type="checkbox" name="menuakses[]" value="26" <?php if (in_array("26", $arrmenuakses)) { echo " checked"; } ?>>26. Penilaian<br/>
                   <input type="checkbox" name="menuakses[]" value="27" <?php if (in_array("27", $arrmenuakses)) { echo " checked"; } ?>>27. Kaldik<br/>
                   <input type="checkbox" name="menuakses[]" value="28" <?php if (in_array("28", $arrmenuakses)) { echo " checked"; } ?>>28. Kurikulum Sekolah<br/>
                   <input type="checkbox" name="menuakses[]" value="29" <?php if (in_array("29", $arrmenuakses)) { echo " checked"; } ?>>29. Presensi Siswa<br/>
                   <input type="checkbox" name="menuakses[]" value="30" <?php if (in_array("30", $arrmenuakses)) { echo " checked"; } ?>>30. Nilai Siswa<br/>
                   <input type="checkbox" name="menuakses[]" value="31" <?php if (in_array("31", $arrmenuakses)) { echo " checked"; } ?>>31. Kompetensi Dasar<br/>

                   <input type="checkbox" name="menuakses[]" value="32" <?php if (in_array("32", $arrmenuakses)) { echo " checked"; } ?>>32. Kategori Nilai<br/>
                   <input type="checkbox" name="menuakses[]" value="33" <?php if (in_array("33", $arrmenuakses)) { echo " checked"; } ?>>33. Jenis Nilai Akhir<br/>
                   <input type="checkbox" name="menuakses[]" value="34" <?php if (in_array("34", $arrmenuakses)) { echo " checked"; } ?>>34. Deskripsi Nilai<br/>
                   <input type="checkbox" name="menuakses[]" value="35" <?php if (in_array("35", $arrmenuakses)) { echo " checked"; } ?>>35. Rapor<br/><br>


                   <input type="checkbox" name="menuakses[]" value="36" <?php if (in_array("36", $arrmenuakses)) { echo " checked"; } ?>>36. Kepegawaian<br/>
                   <input type="checkbox" name="menuakses[]" value="37" <?php if (in_array("37", $arrmenuakses)) { echo " checked"; } ?>>37. Data Pegawai<br/>
                   <input type="checkbox" name="menuakses[]" value="38" <?php if (in_array("38", $arrmenuakses)) { echo " checked"; } ?>>38. Presensi Pegawai<br/><br>

                   <input type="checkbox" name="menuakses[]" value="39" <?php if (in_array("39", $arrmenuakses)) { echo " checked"; } ?>>39. Non Akademik<br/>
                   <input type="checkbox" name="menuakses[]" value="40" <?php if (in_array("40", $arrmenuakses)) { echo " checked"; } ?>>40. Ekstrakurikuler<br/>
                   <input type="checkbox" name="menuakses[]" value="41" <?php if (in_array("41", $arrmenuakses)) { echo " checked"; } ?>>41. Pendaftaran<br/>
                   <input type="checkbox" name="menuakses[]" value="42" <?php if (in_array("42", $arrmenuakses)) { echo " checked"; } ?>>42. Jadwal Ekstrakurikuler<br/>
                   <input type="checkbox" name="menuakses[]" value="43" <?php if (in_array("43", $arrmenuakses)) { echo " checked"; } ?>>43. Presensi<br/>
                   <input type="checkbox" name="menuakses[]" value="44" <?php if (in_array("44", $arrmenuakses)) { echo " checked"; } ?>>44. Nilai<br/>
                   <input type="checkbox" name="menuakses[]" value="45" <?php if (in_array("45", $arrmenuakses)) { echo " checked"; } ?>>45. Pendanaan<br/><br>

                   <input type="checkbox" name="menuakses[]" value="46" <?php if (in_array("46", $arrmenuakses)) { echo " checked"; } ?>>46. Bimbingan Konseling<br/>
                   <input type="checkbox" name="menuakses[]" value="47" <?php if (in_array("47", $arrmenuakses)) { echo " checked"; } ?>>47. Keterlambatan & Jam<br/>
                   <input type="checkbox" name="menuakses[]" value="48" <?php if (in_array("48", $arrmenuakses)) { echo " checked"; } ?>>48. Perizinan<br/>
                   <input type="checkbox" name="menuakses[]" value="49" <?php if (in_array("49", $arrmenuakses)) { echo " checked"; } ?>>49. Pelanggaran<br/>
                   <input type="checkbox" name="menuakses[]" value="50" <?php if (in_array("50", $arrmenuakses)) { echo " checked"; } ?>>50. Prestasi<br/>











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

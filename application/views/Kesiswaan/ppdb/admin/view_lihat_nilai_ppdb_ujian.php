<html>
<body>
  <div class="modal-dialog">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Nilai Siswa : <?php echo $row_pendaftar_ppdb->nama; ?></h4> 
    </div>
    <div class="modal-content">
      <form id="formPartE" class="form-horizontal style-form form-goods" method="post" action="<?php echo site_url('kesiswaan/admin/pendaftar_jalur_ujian/updatenilai/'.$row_pendaftar_ppdb->nisn_pendaftar); ?>">
          <br>

           <div class="row">            
            <div class="col-sm-5">
              <div class="dataTables_length" id="example1_length">
                <?php
                if ($settingform['ujian_1'] == '1') 
                {
                  ?>
                  <div class="form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_1']; ?></label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_1" value="<?php echo $row_pendaftar_ppdb->ujian_1; ?>" readonly>
                      </div>
                  </div>
                  <?php
                }
                if ($settingform['ujian_2'] == '1') 
                {
                  ?>
                  <div class="form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_2']; ?></label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_2" value="<?php echo $row_pendaftar_ppdb->ujian_2; ?>" readonly>
                      </div>
                  </div>
                  <?php
                }
                if ($settingform['ujian_3'] == '1') 
                {
                  ?>
                  <div class="form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_3']; ?></label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_3" value="<?php echo $row_pendaftar_ppdb->ujian_3; ?>" readonly>
                    </div>
                  </div>
                  <?php
                }
                if ($settingform['ujian_4'] == '1') 
                {
                  ?>
                  <div class="form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_4']; ?></label>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_4" value="<?php echo $row_pendaftar_ppdb->ujian_4; ?>" readonly>
                      </div>
                  </div>
                  <?php
                }
                if ($settingform['ujian_5'] == '1') 
                {
                  ?>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_5']; ?></label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_5" value="<?php echo $row_pendaftar_ppdb->ujian_5; ?>" readonly>
                    </div>
                </div>
              </div>
              <?php
            }
            ?>
            </div>

          <div class="col-sm-5">
            <div class="dataTables_length" id="example1_length">
              <?php
              if ($settingform['ujian_6'] == '1') 
              {
                ?>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_6']; ?></label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_6" value="<?php echo $row_pendaftar_ppdb->ujian_6; ?>" readonly>
                   </div>
                </div>
                <?php
              }
                if ($settingform['ujian_7'] == '1') 
              {
                ?>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_7']; ?></label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_7" value="<?php echo $row_pendaftar_ppdb->ujian_7; ?>" readonly>
                    </div>
                </div>
                <?php
              }
              if ($settingform['ujian_8'] == '1') 
              {
                ?>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_8']; ?></label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_8" value="<?php echo $row_pendaftar_ppdb->ujian_8; ?>" readonly>
                    </div>
                </div>
                <?php
              }
              if ($settingform['ujian_9'] == '1') 
              {
                ?>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_9']; ?></label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_9" value="<?php echo $row_pendaftar_ppdb->ujian_9; ?>" readonly>
                    </div>
                </div>
                <?php
              }
              if ($settingform['ujian_10'] == '1') 
              {
                ?>
                <div class="form-group">
                  <label class="control-label col-md-6 col-sm-6 col-xs-6"  for="first-name"><?php echo $settingatribut['ujian_10']; ?></label>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ujian_10" value="<?php echo $row_pendaftar_ppdb->ujian_10; ?>" readonly>
                    </div>
                </div>
                <?php
              }
              ?>
            </div>
          </div>
        </div>
          
        <div class="modal-footer">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Nilai</label>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="total_nilai" value="<?php echo $row_pendaftar_ppdb->total_nilai; ?>" readonly>
            </div>
        </div> 
        <br>
                
      </form>
    </div>
  </div>   
</body>
</html>
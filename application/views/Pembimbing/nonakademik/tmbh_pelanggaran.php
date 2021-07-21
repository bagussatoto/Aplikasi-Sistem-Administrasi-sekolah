<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Tambah Pelanggaran<br></center>
        <center><small>Menu ini untuk menambah kategori, pasal dan poin pelanggaran</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>index.php/nonakademik">Dashboard</a></li>
      </ol>
    </section>

    <?php echo $this->session->flashdata('pesan'); ?>
    <!-- Main content -->
    <section class="content">
       
         <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Pelanggaran</h3>
                </div>
                <form role="form" method="post" action="<?php echo site_url('nonakademik/simpan_tmbh_pelanggaran'); ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Pelanggaran</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" name="kategori" required="required" class="form-control" placeholder="Kategori Pelanggaran" style="font-size: 12px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Poin Pelanggaran</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" name="poin" class="form-control col-md-7 col-xs-12" placeholder="Poin Pelanggaran" style="font-size: 12px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Pasal</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="text" name="no_pasal" required="required" class="form-control" placeholder="No Pasal" style="font-size: 12px">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
         </div>
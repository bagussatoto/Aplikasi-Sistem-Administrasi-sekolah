<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Kurikulum SMP Yogyakarta <br></center>
      <center><small>Tahun Ajaran <?php echo $judul_tahun_ajaran; ?></small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#dokumenkurikulum" data-toggle="tab">Dokumen Kurikulum</a></li>
            <?php
                  if ($this->session->userdata("jabatan") == "Kurikulum") {
                    ?>
            <li><a href="#tambahkurikulum" data-toggle="tab">Tambah Kurikulum</a></li>
            <li><a href="#datakurikulum" data-toggle="tab">Data Kurikulum </a></li>
            <?php
          }
          ?>
          </ul>
          <div class="tab-content">
           <div class="active tab-pane" id="dokumenkurikulum">
             <div class="box">
              <div class="box-header jarakbox">
                <?php
                  foreach ($kurikulum as $rowkur) {
                    # code...
                  ?>
                <center><embed src="<?php echo base_url();?>assets/dokumen_kurikulum/<?php echo $rowkur->nama_filekur ?>" width="1000" height="1000"> </embed></center>
                <?php
              }
              ?>
              </div>
            </div>
          </div>

          <!-- lihatdatakurikulum1 -->


          <!-- /.tab-pane -->
          <div class="tab-pane" id="tambahkurikulum">
           <form class="form-horizontal formkaldik" action="<?php echo base_url('/akademik/tambah_kurikulum'); ?>" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-group formgrup jarakform">
              <label for="inputKurikulum" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-4">
                <input type="text" name="nama_kurikulum" class="form-control" id="inputName" placeholder="Nama Kurikulum">
              </div>
            </div>
            <div class="form-group formgrup jarakform">
              <label for="inputName" class="col-sm-2 control-label">Pilih File</label>
              <div class="col-sm-2">
                <input  name="nama_filekur" placeholder="" required="required" type="file">
                <input type="hidden" name="tahunajaran_id" value="<?php echo $id_tahun_ajaran; ?>">
              </div>
            </div>

            <div class="form-group" id="dokumenkurikulum">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </div>
          </form>
        </div>

        <!-- /.tab-pane -->
        <!-- /.tab-pane -->
        <div class="tab-pane" id="editkurikulum">
         <form class="form-horizontal formkaldik">
          <div class="form-group formgrup">
            <label for="inputName" class="col-sm-2 control-label">Nama</label>

            <div class="col-sm-4">
              <input type="file" class="form-control" id="inputName" placeholder="Name">
            </div>
          </div>


          <div class="form-group formgrup jarakform">
            <label for="inputKurikulum" class="col-sm-2 control-label">Kurikulum</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputName" placeholder="Nama Kurikulum">
            </div>
          </div>

          <div class="form-group" id="dokumenkurikulum">
            <div class="col-sm-offset-2 col-sm-10">
              <td><button type="submit" class="btn btn-danger" href="#datakurikulum" data-toggle="tab">Submit</button> <button type="submit" class="btn btn-danger" href="#datakurikulum" data-toggle="tab">Back</button></td>
            </div>
          </div>
        </form>
      </div>

      <!-- /.tab-pane -->

      <!-- /.tab-pane -->
      <div class="tab-pane" id="dokumenkurikulum">
       <div class="box">
         <a href="#datakurikulum" data-toggle="tab"><button class="btnback"><i class="fa fa-chevron-left"></i></button></a>
         <div class="box-header jarakbox">
          <center><embed src="kurikulum/012.pdf" width="1000" height="1000"> </embed></center>
        </div>
      </div>
    </div>

    <!-- /.tab-pane -->

    <div class="tab-pane" id="datakurikulum">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Kurikulum</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="fit">No</th>
                <th>Nama file</th>
                <th>Kurikulum</th>
                <th>Tahun Ajaran</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
              foreach ($kurikulum as $rowkur) {
                $i++;
                ?>
                <tr>
                  <td class="fit"><?php echo $i; ?></td>
                  <td><?php echo $rowkur->nama_filekur; ?></td>
                  <td><?php echo $rowkur->nama_kurikulum; ?></td>
                  <td><?php echo $rowkur->tahun_ajaran; ?></td>
                  <td> 
                    <a data-toggle="modal" data-show="true" data-target="#editkur<?php echo $i; ?>" class="btn btn-block btn-primary button-action btnedit" href="<?php echo base_url("akademik/form_edit_kurikulum/".$rowkur->id_kurikulum); ?>" >Edit</a>
                    <a type="button" style="background: red ; border: red;" class="btn btn-block btn-primary button-action btnhapus " href="<?php echo base_url("/akademik/hapus_kurikulum/".$rowkur->id_kurikulum); ?>" onclick="return confirm_delete();">Hapus</a>
                  </td>               
                </tr>

                <div id="editkur<?php echo $i; ?>" class="modal fade " role="dialog">
                  <div class="modal-dialog modal-md" >
                    <div class="modal-content">
                      <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title">Edit Kaldik</h4>
                     </div>
                     <div class="modal-body"> 
                     </div>
                   </div>



                 </div>
               </div>

               <?php
             }
             ?>
           </tbody>
         </table>
       </div>
       <!-- /.box-body -->
     </div>
   </div>
   <!-- /.tab-pane -->
 </div>
 <!-- /.tab-content -->
</div>
<!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>

<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</html>


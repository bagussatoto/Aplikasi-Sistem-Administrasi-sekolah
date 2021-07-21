<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <center style="color:navy;">Data Akun Siswa SMP Yogyakarta <br></center>
      <br>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
           <ul class="nav nav-tabs">
            <li class="active"><a href="#lihatjabatan" data-toggle="tab">Ubah Password Siswa</a></li>
          </ul>
           <div class="tab-content">
             <div class="active tab-pane" id="lihatjabatan">
               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Siswa</h3>
                </div>
                <table id="example2" class="table table-bordered table-striped" > 
                <thead> 
                  <tr style="background-color: #53c68c ">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach ($datajabatansiswa->result() as $key) { ?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $key->nisn;?></td>
                    <td><?php echo $key->nama;?></td>
                    <td><?php echo $key->nama_jabatan;?></td>
                    <td> <a href="<?php echo base_url();?>superadmin/editpasswordsiswa/<?php echo $key->nisn;?>" type="button" role="button" class="btn btn-block btn-primary button-action btnedit">Edit</a></td>
                  </tr>
                  <?php $no++; }?>
                </tbody>
                </table> 
               </div>
             </div>
           </div>
        </div>
      </div>
    </div>  
  </section>
</div>
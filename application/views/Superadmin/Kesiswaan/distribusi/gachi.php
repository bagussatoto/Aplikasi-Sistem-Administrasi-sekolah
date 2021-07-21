
<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
            <h4><center>Pendaftar Peserta Didik Baru</center></h4> <br>
              <form method="post" action="<?php echo site_url('kesiswaan/admin/pendaftar_jalur_un/ubahstatus');?>">
              <table class="table table-striped projects" id="example1">
                <div class="form-group" align="right">
                  Ubah Status pendaftar bersamaan
                  <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Diterima?');" type="submit" name="button" value="Diterima" class="btn btn-primary btn-xs"/>
                  <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi Tidak Diterima?');" type="submit" name="button" value="Tidak Diterima" class="btn btn-success btn-xs"/>
                  <input onclick="return confirm('Apakah anda ingin mengubah status siswa menjadi DIcabut?');" type="submit" name="button" value="Dicabut" class="btn btn-danger btn-xs"/>
                </div><br>
                <thead>
                  <tr>
                    <th style="width: 5%"></th>
                    <th style="width: 5%">No Pdftrn</th>
                    <th style="width: 10%">NISN</th>
                    <th style="width: 30%">Nama</th>
                    <th style="width: 8%">Total Nilai</th>
                    <th style="width: 10%"></th>
                    <th style="width: 10%">Verifikasi</th>
                    <th style="width: 10%">Status</th>
                    <th style="width: 7%"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=1;
                  foreach ($tabel_pendaftar_ppdb as $row) 
                  {
                    ?>
                    <tr>
                      <td><input type="checkbox" class="flat" name="nisn_ubah[]" value="<?php echo $row->nisn_pendaftar; ?>"></td>
                      <td><?php echo $row->nomor_pendaftaran; ?></td>
                      <td><?php echo $row->nisn_pendaftar; ?></td>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->nilai_un_nun; ?></td>
                      <td>
                       <a data-toggle="modal" class="btn btn-default btn-xs" data-show="true" href="<?php echo site_url('kesiswaan/admin/pendaftar_jalur_un/editnilai/'.$row->nisn_pendaftar); ?>" data-target="#myNilai<?php echo $i; ?>">Detail Nilai</a>
                      </td>
                      <td><?php echo $row->terverifikasi; ?></td>
                      <td><?php echo $row->status_siswa; ?></td>
                      <td>
                       <a data-toggle="modal" class="btn btn-info btn-xs" data-show="true" href="<?php echo site_url('kesiswaan/admin/pendaftar_jalur_un/editpendaftar/'.$row->nisn_pendaftar); ?>" data-target="#myPendaftar<?php echo $i; ?>">Edit</a>
                      </td>
                    </tr>
                    <?php
                    $i=$i+1;
                    }
                    ?>
                  </tbody>
                </table>
              </form>

             <?php 
                $i=1;
                foreach ($tabel_pendaftar_ppdb as $row) 
                { ?>
                    <div id="myNilai<?php echo $i; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Lihat Nilai</h4>
                            </div>
                            <div class="modal-body"></div>
                        </div>
                      </div>
                    </div> 

                    <div id="myPendaftar<?php echo $i; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Data</h4>
                          </div>
                          <div class="modal-body"></div>
                        </div>
                      </div>
                    </div>
                    <?php
                    $i=$i+1;
                  } ?>
          </div>
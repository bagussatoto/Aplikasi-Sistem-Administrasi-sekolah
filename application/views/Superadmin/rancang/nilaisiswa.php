<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Nilai Siswa SMP Yogyakarta <br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center>
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
              <li class="active"><a href="#presensisiswa" data-toggle="tab">Nilai Siswa</a></li>
              <li><a href="#leger" data-toggle="tab">LEGER</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="presensisiswa">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">MATEMATIKA</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <select>
                      <option>Kelas 7A</option>
                      <option>Kelas 7B</option>
                      <option>Kelas 7C</option>
                      <option>Kelas 8A</option>
                      <option>Kelas 8B</option>
                      <option>Kelas 8C</option>
                      <option>Kelas 9A</option>
                    </select>
                    <button onclick="tambahNilai()">Tambah Nilai</button>
                    <script type="text/javascript">
                      function tambahNilai() {
                        var head = '<td style="position: relative">'+
                            'NILAI <br>'+
                            '<select>' +
                            '<option>Tugas</option>' +
                            '<option>Ulangan Harian</option>' +
                            '<option>Ujian Tengah Semester</option>' +
                            '</select>' +
                            '<select>' +
                            '<option>Pengetahuan</option>' +
                            '<option>Ketrampilan</option>' +
                            '</select>' +
                            '<button style="position: absolute; right: 0; top: 0;">x</button>'
                            '</td>';
                        var body = '<td>'+
                            '<input type="text" style="width: 100%" />'+
                            '</td>';
                        $('#head').append(head);
                        $('#body').append(body);
                      }
                    </script>
                    <form class="posisikanan">
                      <select>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                    </form>
                    <br/><br/>
                    <div style="overflow: auto">
                      <table class="table table-bordered table-striped nilaisiswa" style="width: 100%">
                        <thead>
                        <tr class="barishari" id="head">
                          <td class="fit">No</td>
                          <td class="fit">Nama Siswa</td>
                          <td class="fit">
                          NILAI <br>
                          <select>
                          <option>Tugas</option>
                          <option>Ulangan Harian</option>
                          <option>Ujian Tengah Semester</option>
                          </select>
                          <select>
                          <option>Pengetahuan</option>
                          <option>Ketrampilan</option>
                          </select>
                          </td>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <tr id="body">
                          <td class="fit">1</td>
                          <td>Yuniar Rahmawati</td>
                          <td>
                          <input type="text" style="width: 100%" />
                          </td>
                        </tr>
                        
                        </tbody>
                      </table>
                    </div>
                    <button class="btnjdwl">Submit</button>
                  </div>
                  <!-- /.box-body -->
                </div>
               
              </div>
              <!-- /.tab-pane -->
                            <div class="tab-pane" id="leger">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">MATEMATIKA</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                   <select>
                      <option>Kelas 7A</option>
                      <option>Kelas 7B</option>
                      <option>Kelas 7C</option>
                      <option>Kelas 8A</option>
                      <option>Kelas 8B</option>
                      <option>Kelas 8C</option>
                      <option>Kelas 9A</option>
                    </select>
                    <form class="posisikanan">
                      <select>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                    </form>
                  <div class="tab-content">
                  <div class="active tab-pane" id="leger">
                  <div class="box">
                  <div class="box-header jarakbox" style="overflow: auto">

                    <center><embed src="dokumen_kurikulum/contoh rapor.pdf" width="1000" height="1000"> </embed></center>
                  </div>

                  </div>
                  <!-- /.box-body -->
                </div>
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Presensi Ekstrakurikuler SMP Yogyakarta<br></center>
      <center><small>Presensi Pembimbing dan Siswa kegiatan Ekstrakurikuler</small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <section class="content">

    <div class="row">            
      <!-- Left col -->
      <section class="col-md-12 ">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
          <!-- Tabs within a box -->
          <ul class="nav nav-tabs pull-left">
            <li class="active"><a href="#tab1" data-toggle="tab">Presensi Siswa</a></li>
            <li><a href="#tab2" data-toggle="tab">Laporan Presensi Persemester</a></li>
          </ul>
          <div class="tab-content no-padding">
            <div class="chart tab-pane active" id="tab1" style="position: relative; ">
            <div class="box">
              <div class="box-body">
                <center><h4>Rekap Presensi Siswa</h4></center>

                <div style="float: left;margin-right: 5px;">
                  <select name="ps_ekskul">
                    <?php foreach ($data_ekskul as $ekskul) : ?>
                      <option value="<?php echo $ekskul->id_jenis_kls_tambahan ?>"><?php echo $ekskul->jenis_kls_tambahan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div style="float: left;margin-right: 5px;">
                  <input type="text" name="ps_tanggal" class="tanggal" value="<?php echo date("d-m-Y") ?>" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                </div>

                <div style="float: left;margin-right: 5px;">
                  <button type="button" id="ps_tampil_tombol">Tampilkan</button>
                </div>
                <div style="clear: both;"></div>

                  <table id="ps_data" class="table table-bordered">
                    <thead>
                      <tr style="background-color: #53c68c">
                        <th style="width: 10px">No</th>
                        <th style="width: 150px;">NIS</th>
                        <th>Nama Siswa</th>
                        <th style="width: 100px;">Presensi</th>
                      </tr>
                    </thead>
                    <tbody class="ps_siswa">
                      
                    </tbody>
                    
                  </table>

                </div>
              </div>
            </div>
            <div class="chart tab-pane" id="tab2" style="position: relative; ">

             <div class="box">
              <div class="box-body">
                <!-- <center><h4>Laporan Presensi Ekstrakurikuler Siswa Persemester</h4></center> -->
                <select name="ps2_thn_ajaran" class="thn_ajaran">
                  <?php for ($i = 2010; $i<=date(Y)+2; $i++) : ?>
                    <?php $pilih = ($i == date("Y")) ? "selected" : "" ?>
                    <?php $thn_ajaran = $i . " - " . ($i+1) ?>
                    <option value="<?php echo $thn_ajaran ?>" <?php echo $pilih ?> ><?php echo $thn_ajaran ?></option>
                  <?php endfor; ?>
                </select>
                <select name="ps2_semester" class="semester">
                  <option value="Ganjil">Ganjil</option>
                  <option value="Genap">Genap</option>
                </select>
                <select name="ps2_ekskul">
                    <?php foreach ($data_ekskul as $ekskul) : ?>
                      <option value="<?php echo $ekskul->id_jenis_kls_tambahan ?>"><?php echo $ekskul->jenis_kls_tambahan ?></option>
                    <?php endforeach; ?>
                  </select>
                <button type="button" id="ps2_tampil_tombol">Tampilkan</button>
                <br/>
                <table class="table table-bordered">
                  <thead>
                    <tr style="background-color: #53c68c">
                      <th rowspan="2">No</th>
                      <th rowspan="2">NISN</th>
                      <th rowspan="2">Nama Siswa</th>
                      <th class="ps2_header_jum" colspan="10"><center>10 Pertemuan</center></th>
                    </tr>
                    <tr style="background-color: #53c68c" class="ps2_header_pertemuan">
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>5</th>
                      <th>6</th>
                      <th>7</th>
                      <th>8</th>
                      <th>9</th>
                      <th>10</th>
                    </tr>
                  </thead>
                  <tbody class="ps2_body">
                    

                  </tbody>
                    
                </table>
              </div>

            </div>

          </div>

      </div>
    </div>
  </section>
</div>


</section>


<script>
  $(function () {
    $(".presensi-waktu").click(function(){
      $("#pp_jadwal_id").val($(this).data("id"));
      $('#presensiModal').modal('show');
    });

    $("#pp_form").submit(function(){
      var thisform = $(this);
      $.post( "<?php echo site_url("siswa/presensi/save") ?>", thisform.serialize(),function( data ) {
        $('#presensiModal').modal('hide');
      });

      return false;
    });

    $("select[name='pp_bulan_report'], select[name='pp_tahun_report']").change(function(){
      var sbulan = $("select[name='pp_bulan_report']").val();
      var stahun = $("select[name='pp_tahun_report']").val();
      $.post( "<?php echo site_url("siswa/presensi/pp_report") ?>", {bulan: sbulan, tahun: stahun},function( data ) {
        $("table#pp_report").find("tbody").html(data);
      });
    });

    $(".presensi-siswa-waktu").click(function(){
      $("#presensisiswaModal").find(".pp_jadwal_id").val($(this).data("id"));
      $("#presensisiswaModal").find(".dtpresensi_siswa").html("");
      $('#presensisiswaModal').modal('show');
    });

    $("#presensisiswaModal button.tampilkan").click(function(){
      var sthnajaran = $("#presensisiswaModal").find(".thn_ajaran").val();
      var ssemester = $("#presensisiswaModal").find(".semester").val();
      var sidjadwal = $("#presensisiswaModal").find(".pp_jadwal_id").val();
      var stanggal = $("#presensisiswaModal").find(".tanggal").val();
      $.post( "<?php echo site_url("siswa/presensi/siswa") ?>", {thnajaran: sthnajaran, semester: ssemester, idjadwal: sidjadwal, tanggal: stanggal},function( data ) {
        $("#presensisiswaModal").find(".dtpresensi_siswa").html("");
        $("#presensisiswaModal").find(".dtpresensi_siswa").append(data);
      });
    });

    $("#pp_form_siswa").submit(function(){
      var thisform = $(this);
      console.log(thisform.serialize());
      $.post( "<?php echo site_url("siswa/presensi/siswa_save") ?>", thisform.serialize(),function( data ) {
        $('#presensisiswaModal').modal('hide');
      });

      return false;
    });

    $("#ps_tampil_tombol").click(function(){
      var ps_ekskul = $("select[name='ps_ekskul']").val();
      var ps_tanggal = $("input[name='ps_tanggal']").val();

      $("#ps_data .ps_siswa").html("");

      $.post( "<?php echo site_url("siswa/presensi/siswa_report") ?>", {ekskul: ps_ekskul, tanggal: ps_tanggal},function( data ) {
        $("#ps_data .ps_siswa").html(data);
      });
    });

    $("#ps2_tampil_tombol").click(function(){
      var ps2_thn_ajaran = $("#tab2").find("select[name='ps2_thn_ajaran']").val();
      var ps2_semester = $("#tab2").find("select[name='ps2_semester']").val();
      var ps2_ekskul = $("#tab2").find("select[name='ps2_ekskul']").val();

      $.post( "<?php echo site_url("siswa/presensi/siswa_report_pertemuan") ?>", {subaction: "jum_pertemuan", thn_ajaran: ps2_thn_ajaran, semester: ps2_semester, ekskul: ps2_ekskul},function( data ) {
        var obj = jQuery.parseJSON( data );
        var jum_peremuan = obj.length;

        $(".ps2_header_jum").attr("colspan",jum_peremuan);
        $(".ps2_header_jum").html("<center>"+jum_peremuan+" Pertemuan</center>");
        $(".ps2_header_pertemuan").html("");
        for (var i = 1; i <= jum_peremuan; i++)
        {
          $(".ps2_header_pertemuan").append("<th data-tgl='"+obj[i-1].tgl_kegiatan+"'>"+i+"</th>");
        }

        $.post( "<?php echo site_url("siswa/presensi/siswa_report_pertemuan") ?>", {subaction: "siswa_pertemuan", thn_ajaran: ps2_thn_ajaran, semester: ps2_semester, ekskul: ps2_ekskul},function( data2 ) {
          var obj2 = jQuery.parseJSON( data2 );
          console.log(obj2);
          $(".ps2_body").html("");
          for (var i = 0; i < obj2.length; i++)
          {
            var content1 = "";
            content1 += "<tr>";
            content1 += "<td>"+(i+1)+"</td>";
            content1 += "<td>"+obj2[i].nisn+"</td>";
            content1 += "<td>"+obj2[i].nama+"</td>";
            for (var n = 0; n < jum_peremuan; n++)
            {
              var status = obj2[i].status;
              var hisa = "";
              for (var j = 0; j < status.length; j++)
              {
                if (status[j].tgl_kegiatan == obj[n].tgl_kegiatan)
                {
                  hisa = status[j].status_kehadiran;
                  break;
                }
              }
              content1 += "<td align='center'>"+hisa.toUpperCase()+"</td>";
            }
            content1 += "</tr>";
            $(".ps2_body").append(content1);
          }
        });
      });
    });

    $("#pp_tampil_tombol2").click(function(){
      var sbulan = $("select[name='pp_bulan_report2']").val();
      var stahun = $("select[name='pp_tahun_report2']").val();
      var pptable = $("#pp_table_report");
      var ppheader = pptable.find("thead");
      var ppbody = pptable.find("tbody");

      ppheader.find(".bulan").html("<center>"+$("select[name='pp_bulan_report2'] option:selected").text()+"</center>");
      ppheader.find(".tanggal").html("");

      ppbody.html("");

      $.post( "<?php echo site_url("siswa/presensi/pembimbing_report") ?>", {subaction: "get_tanggal", tahun: stahun, bulan: sbulan},function( data ) {
        var obj = jQuery.parseJSON( data );
        var obj_tanggal = obj.tanggal;
        var obj_pembimbing = obj.pembimbing;
        // console.log(obj.length);
        ppheader.find(".bulan").attr("colspan",obj_tanggal.length);
        for (var i = 0; i < obj_tanggal.length; i++)
        {
          ppheader.find(".tanggal").append("<th>"+obj_tanggal[i].tgl+"</th>");
        }

        for (var j = 0; j < obj_pembimbing.length; j++)
        {
          var tr = "";

          tr += "<td>"+obj_pembimbing[j].nama_pembimbing+"</td>";
          tr += "<td>"+obj_pembimbing[j].jenis_kls_tambahan+" ("+obj_pembimbing[j].jam_mulai+" - "+obj_pembimbing[j].jam_selesai+")</td>";

          var jum_hadir = 0;
          for (var i = 0; i < obj_tanggal.length; i++)
          {
            var presensi = obj_tanggal[i].presensi;
            var status = "";

            for (var k = 0; k < presensi.length; k++)
            {
              if ((presensi[k].id_jadwal_ekskul == obj_pembimbing[j].id_jadwal_ekskul) && (presensi[k].id_pembimbing == obj_pembimbing[j].id_pembimbing))
              {
                status = presensi[k].status_kehadiran;
              }
            }

            tr += "<td>"+status.toUpperCase()+"</td>";

            if (status == "h")
              jum_hadir++;
          }

          tr += "<td>"+jum_hadir+"</td>";

          ppbody.append("<tr>"+tr+"</tr>");
        }
        console.log(obj);
      });
    });

  });
</script>
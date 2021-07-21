
  <style type="text/css">
    @media print {
      body {-webkit-print-color-adjust: exact;}
    }
  </style>
<body onload="window.print();">
	<table id="example1" class="table table-bordered table-striped tabelmapel">
                      <thead>
                        
                      <th> <?php
                            foreach ($tabel_tahunajaran as $row_tahunajaran) {
                             if ($id_tahun_ajaran == $row_tahunajaran->id_tahun_ajaran) { echo $row_tahunajaran->semester." ".$row_tahunajaran->tahun_ajaran; } 
                            }
                            ?></th>
                      <tr class="barishari">
                        <th class="tengah" rowspan="2">No.</th>
                        <th >Senin</th>
                        <th class="tengah">Selasa</th>
                        <th class="tengah">Rabu</th>
                        <th class="tengah">Kamis</th>
                        <th class="tengah">Jumat</th>
                        <th class="tengah">Sabtu</th>
                        <th class="tengah">Minggu</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                        for($i=1;$i<=7;$i++) {
                      ?>
                      <tr>
                        <td class="fit"><?php echo $i; ?></td>
                         <th><?php echo @$tabel_kurikulumtguru_senin[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_kurikulumtguru_selasa[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_kurikulumtguru_rabu[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_kurikulumtguru_kamis[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_kurikulumtguru_jumat[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_kurikulumtguru_sabtu[$i-1]->nama_panggilan; ?> </th>
                         <th><?php echo @$tabel_kurikulumtguru_minggu[$i-1]->nama_panggilan; ?> </th>
                         
                      </tr>
                      <?php
                        }
                      ?>
                      </tbody>

                    </table>
</body>
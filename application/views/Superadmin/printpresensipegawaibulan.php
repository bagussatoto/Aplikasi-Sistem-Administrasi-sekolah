 <style type="text/css">
    @media print {
      body {-webkit-print-color-adjust: exact;}
    }
  </style>

<body onload="window.print();">
<table  class="table table-bordered table-striped" style="width: 100%">
                  <thead>
                    <tr class="barishari">
                      <th>Bulan</th>

                      <th class="fit">Nama Pegawai</th>
                      <th class="fit">Hadir</th>
                      <th class="fit">Sakit</th>
                      <th class="fit">Ijin</th>
                      <th class="fit">Absen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i=1;$i<=12;$i++) {
                      $j=0;
                      $tabel_datpeg = $datpeg->result();
                      foreach ($tabel_datpeg as $rowpeg) {
                        $j++;
                        ?>
                        <tr>
                          <?php 
                          if ($j == 1) {
                            ?>
                            <td class="fit" rowspan="<?php echo count($tabel_datpeg); ?>"><?php 
                            if ($i == 1) {
                              echo "Januari";
                            } else if ($i == 2) {
                              echo "Februari";
                            } else if ($i == 3) {
                              echo "Maret";
                            } else if ($i == 4) {
                              echo "April";
                            } else if ($i == 5) {
                              echo "Mei";
                            } else if ($i == 6) {
                              echo "Juni";
                            } else if ($i == 7) {
                              echo "Juli";
                            } else if ($i == 8) {
                              echo "Agustus";
                            } else if ($i == 9) {
                              echo "September";
                            } else if ($i == 10) {
                              echo "Oktober";
                            } else if ($i == 11) {
                              echo "November";
                            } else if ($i == 12) {
                              echo "Desember";
                            }
                        //echo $i;
                            ?></td>
                            <?php
                          }
                          ?>
                        <td><?php echo $rowpeg->Nama; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['H']; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['S']; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['I']; ?></td>
                          <td><?php echo $datpresensibulan[$rowpeg->NIP][$i]['A']; ?></td>
                        </tr>
                        <?php
                      }

                    }
                    ?>
                  </tr>
                </tbody>
              </table>
</body>
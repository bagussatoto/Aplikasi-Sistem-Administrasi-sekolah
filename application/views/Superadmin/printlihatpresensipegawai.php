 <style type="text/css">
    @media print {
      body {-webkit-print-color-adjust: exact;}
    }
  </style>

<body onload="window.print();">

  
<table id="example5a" class="table table-bordered table-striped" style="width: 100%">
                    <thead>
                      <tr class="barishari" style="background-color: #53c68c">
                        <th class="fit">No</th>
                        <th>Nama Pegawai</th>
                        <th>Presensi</th>
                        <th>Keterangan</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $j=0;
                      foreach ($datpeg->result() as $rowpeg) {
                        $j++;
                        ?>
                        <tr>
                          <td><?php echo $j; ?></td>
                          <td><?php echo $rowpeg->Nama; ?></td>
                          <td><?php  
                          if (@$presensipeg[$rowpeg->NIP] == "H") 
                          { 
                            echo "Hadir"; 
                          } else if (@$presensipeg[$rowpeg->NIP] == "S") 
                          { 
                            echo " Sakit"; 
                          } else if (@$presensipeg[$rowpeg->NIP] == "I") 
                          { 
                            echo "Ijin"; 
                          }
                           else if (@$presensipeg[$rowpeg->NIP] == "A") 
                          { 
                            echo "Alfa"; 
                          }

                            ?></td>
                          <td><?php echo @$keteranganpeg[$rowpeg->NIP]; ?></td>

                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
</body>
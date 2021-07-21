
  <style type="text/css">
    @media print {
      body {-webkit-print-color-adjust: exact;}
    }
  </style>
<body onload="window.print();">
                  <table id="example11" class="table table-bordered table-striped" > 
                    <thead> 
                      <tr style="background-color: #53c68c">
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Golongan</th> 
                        <th>No.SK</th>  
                        <th>Status</th>      
                      </tr>
                    </thead>
                    <tbody>
                      <!-- function datpeg -->
                      <?php
                      $no=1;
                      foreach ($datpeg->result() as $key) { ?>
                      <tr>
                        <td><?php echo $no?></td>
                        <td><?php echo $key->NIP;?></td>
                        <td><?php echo $key->Nama;?></td>
                        <td><?php echo $key->Golongan;?></td>
                        <td><?php echo $key->No_SK;?></td>
                        <td><?php echo $key->Status;?></td>

                        
                      </tr>
                      <?php $no++; }?>
                      <!-- tutup function -->
                    </tbody>
                  

                   <table id="exampleaa2" class="table table-bordered table-striped"> 
                  <thead> 
                    <tr style="background-color: #53c68c">
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Golongan</th> 
                      <th>No.SK</th>   
                      <th>Status</th>      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($datguru->result() as $key) { ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo $key->NIP;?></td>
                      <td><?php echo $key->Nama;?></td>
                      <td><?php echo $key->Golongan;?></td>
                      <td><?php echo $key->No_SK;?></td>
                      <td><?php echo $key->Status;?></td>

                        
                    </tr>
                    <?php $no++; }?>
                  </tbody>
                </table>

                <table id="exampleaa2" class="table table-bordered table-striped"> 
                  <thead> 
                    <tr style="background-color: #53c68c">
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Golongan</th> 
                      <th>No.SK</th>   
                      <th>Status</th>
                      <th>Pensiun</th>      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($datpensiun->result() as $key) { ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td><?php echo $key->NIP;?></td>
                      <td><?php echo $key->Nama;?></td>
                      <td><?php echo $key->Golongan;?></td>
                      <td><?php echo $key->No_SK;?></td>
                      <td><?php echo $key->Status;?></td>
                      <td><?php echo $key->Status_pensiun ?></td>

                        
                    </tr>
                    <?php $no++; }?>
                  </tbody>
                </table>
</body>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
        @media print {
          body {-webkit-print-color-adjust: exact;}
        }
      </style>
</head>
<body onload="window.print();">
<?php

function drawCal($bln, $thn, $simbol) {
 date_default_timezone_set("Asia/Jakarta");
 $d=date('d');
 $m=date('m');
 $y=date('Y');
 $nm=date('F');
       $bln=$bln; //$_GET['bln'];
       $thn=$thn; //$_GET['thn'];
       if (($bln !="") && ($thn!=""))
       {
        $m=date('m',mktime(0,0,0,$bln,1,$thn));
        $y=date('Y',mktime(0,0,0,$bln,1,$thn));
        $nm=date('F',mktime(0,0,0,$bln,1,$thn));
      }
      $mbef=$m-1;
      $maft=$m+1;
      $nmmbef=date('M',mktime(0,0,0,$mbef,1,$thn));
      $nmmaft=date('M',mktime(0,0,0,$maft,1,$thn));
      $ybef=$y;
      $yaft=$y;
      if ($mbef<1) {$mbef=12; $ybef=$y-1;}
      if ($maft>12) {$maft=1; $yaft=$y+1;}
      $jmlkosong=date('w',mktime(0,0,0,$m,1,$y));
      ?>
      <table summary="Calendar" >
       <caption>
         <?php echo $nm;?> <?php echo $y?>
       </caption>
       <thead>
        <tr>
         <th abbr="Monday" scope="col" title="Monday">M</th>
         <th abbr="Tuesday" scope="col" title="Tuesday">T</th>
         <th abbr="Wednesday" scope="col" title="Wednesday">W</th>
         <th abbr="Thursday" scope="col" title="Thursday">T</th>
         <th abbr="Friday" scope="col" title="Friday">F</th>
         <th abbr="Saturday" scope="col" title="Saturday">S</th>
         <th abbr="Sunday" scope="col" title="Sunday">S</th>
       </tr>
     </thead>
           <!--tfoot>
            <tr>
             <td abbr="October" colspan="3" id="prev"><a href="?bln=<?php echo $mbef;?>&thn=<?php echo $ybef;?>" title="">&laquo; <?php echo $nmmbef; ?></a></td>
             <td class="pad">&nbsp;</td>
             <td abbr="December" colspan="3" id="next"><a href="?bln=<?php echo $maft;?>&thn=<?php echo $yaft;?>" title=""><?php echo $nmmaft; ?> &raquo;</a></td>
            </tr>
          </tfoot-->
          <tbody>
            <?php
            $jmlhari=date('t',mktime(0,0,0,$m,1,$y));
            for ($i=1; $i<=$jmlkosong; $i++)
            {
              echo "<td>&nbsp;</td>";
            }
            $kolom=$jmlkosong;
            for ($i=1; $i<=$jmlhari;$i++)
            {
              $kolom=$kolom+1;
              $warna="#000000";
              if ($kolom=='7') {$warna="#FF0000";}
              if (($i==date('j')) && ($m==date('m')) && ($y==date('Y')))
              {
               $warna="#0000FF";
             }
        //mysql_connect("localhost","root","");
        //mysql_select_db("toko_online");
        //$q=mysql_query ("SELECT * FROM agenda WHERE DAY(tgl) = $i AND MONTH(tgl) = $m AND YEAR(tgl) = $y");
        //echo "SELECT * FROM agenda WHERE DAY(tgl) = $i AND MONTH(tgl) = $m AND YEAR(tgl) = $y";
        //$h=mysql_fetch_array ($q);
             $clk="";
             $cur="";
        ////if ($h['jenis']=='libur') {$warna = "#FF0000"; $clk="document.location='agenda.php?tgl=$i&bln=$m&thn=$y';"; $cur="cursor:pointer";}
        //if ($h['jenis']=='meeting') {$warna = "#FFFF00"; $clk="document.location='agenda.php?tgl=$i&bln=$m&thn=$y';"; $cur="cursor:pointer";}
        //if ($h['jenis']=='keluarga') {$warna = "#00FF00"; $clk="document.location='agenda.php?tgl=$i&bln=$m&thn=$y';"; $cur="cursor:pointer";}
             ?>
             <td onClick="<?php echo $clk; ?>" style="background-size: cover; <?php echo $cur; ?>" <?php if (@$simbol[ltrim($y,'0')][ltrim($m,'0')][$i] != "") { ?>background="<?php echo base_url(); ?>assets/simbol/<?php echo @$simbol[ltrim($y,'0')][ltrim($m,'0')][$i]; ?>"<?php } ?>><font color="<?php echo $warna; ?>"><div align="center" class="style1">&nbsp;<?php echo $i;//." ".@$simbol[$y][$m][$i]; //." ".$m." ".$y; ?>&nbsp; <?php /*if (@$simbol[ltrim($y,'0')][ltrim($m,'0')][$i] != "") { ?><img src="<?php echo base_url(); ?>assets/simbol/<?php echo @$simbol[ltrim($y,'0')][ltrim($m,'0')][$i]; ?>" width="10"/><?php } */?></div></font></td>
             <?php
             if ($kolom=='7')
             {
              echo '</tr><tr>';
              $kolom=0;}
            }
            ?>
          </tbody>
        </table>
        <?php
      }
      ?>

      
                   
                          <?php
                          drawCal(1, 2017, $simbol);
                          ?>
                          <br/>
                         <?php
                          drawCal(2, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(3, 2017, $simbol);
                          ?>
                       <br/>
                          <?php
                          drawCal(4, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(5, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(6, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(7, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(8, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(9, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(10, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(11, 2017, $simbol);
                          ?>
                        <br/>
                          <?php
                          drawCal(12, 2017, $simbol);
                          ?>
 <?php
                      // echo "<pre>";
                      // print_r($kaldik);
                      // echo "</pre>";
                      $p=0;
                      for ($o=0; $o<(count($kaldik)/5)  ; $o++) { 
                        
                        
                        echo "<div class='col-md-3'>";
                        while ($p < (5*($o+1))) {
                          if(!empty($kaldik[$p])) echo '<img src="'.base_url().'assets/simbol/'.$kaldik[$p]->simbol_kaldik.'" height="70" width="70"/> '.$kaldik[$p]->nama_kaldik.'<br/>';
                          $p++;
                        }
                        echo "</div>";
                        
                      }

                        // foreach ($kaldik as $rowkaldik) {
                        // echo '<img src="'.base_url().'assets/simbol/'.$rowkaldik->simbol_kaldik.'" width="50"/> '.$rowkaldik->nama_kaldik.'<br/>';
                        // }
                        
                      
                      ?>                      
</body>
</html>
                

                
<?php
header("Content-Type: application/download\n");
header("Content-Disposition: attachment; filename=\"presensi.xls\"");
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 14">
<link rel=File-List href="view_cetak_presensi_bulan_files/filelist.xml">
<style id="view_cetak_presensi_bulan_14515_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1514515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6314515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6414515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6514515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6614515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6714515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6814515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6914515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7014515
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="view_cetak_presensi_bulan_14515" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=554 style='border-collapse:
 collapse;table-layout:fixed;width:416pt'>
 <col width=64 span=2 style='width:48pt'>
 <col width=234 style='mso-width-source:userset;mso-width-alt:8557;width:176pt'>
 <col width=64 span=3 style='width:48pt'>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6914515 width=554 style='height:15.0pt;
  width:416pt'>LAPORAN PRESENSI PERBULAN</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl7014515 style='height:15.0pt'>KELAS <?php
          foreach ($kelas_reguler_berjalan as $d){
             if ($id_kelas_reguler_berjalan == $d->id_kelas_reguler_berjalan) { echo $d->nama_kelas; 
             }
          }?></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td rowspan=2 height=60 class=xl6314515 width=64 style='height:45.0pt;
  border-top:none;width:48pt'>Bulan</td>
  <td rowspan=2 class=xl6314515 width=64 style='border-top:none;width:48pt'>Nomor
  Absen</td>
  <td rowspan=2 class=xl6314515 width=234 style='border-top:none;width:176pt'>Nama
  Siswa</td>
  <td rowspan=2 class=xl6314515 width=64 style='border-top:none;width:48pt'>Sakit</td>
  <td rowspan=2 class=xl6314515 width=64 style='border-top:none;width:48pt'>Ijin</td>
  <td rowspan=2 class=xl6314515 width=64 style='border-top:none;width:48pt'>Absen</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <?php
for ($i=1;$i<=12;$i++) {

                $z=0; 
                foreach ($siswaperkelas as $rowsiswa) {
                  $z++;

  ?>
 <tr height=20 style='height:15.0pt'>
 	<?php
 		if ($z==1) { 
 		?>
  <td rowspan=<?php echo count($siswaperkelas); ?> height=111 class=xl6314515 width=64 style='border-bottom:1.0pt solid black;
  height:83.25pt;border-top:none;width:48pt'><?php 
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
  <td class=xl6414515 align=right width=64 style='border-top:none;border-left:
  none;width:48pt'><?php echo $z; ?></td>
  <td class=xl6414515 width=234 style='border-top:none;border-left:none;
  width:176pt'><?php echo $rowsiswa->nama; ?></td>
  <td class=xl6314515 width=64 style='border-top:none;border-left:none;
  width:48pt'><?php echo $datpresensibulan[$rowsiswa->nisn][$i]['S']; ?></td>
  <td class=xl6314515 width=64 style='border-top:none;border-left:none;
  width:48pt'><?php echo $datpresensibulan[$rowsiswa->nisn][$i]['I']; ?></td>
  <td class=xl6314515 width=64 style='border-top:none;border-left:none;
  width:48pt'><?php echo $datpresensibulan[$rowsiswa->nisn][$i]['A']; ?></td>
 </tr>
 <?php
 	}
 }
 ?>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=234 style='width:176pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>

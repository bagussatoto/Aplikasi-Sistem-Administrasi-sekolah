<?php
header("Content-Type: application/download\n");
header("Content-Disposition: attachment; filename=\"raport-$siswa->nama.xls\"");
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="view_cetak_rapor_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="view_cetak_rapor_32511_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl6332511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6432511
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6632511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6932511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7032511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7232511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7332511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7432511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7532511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7632511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7732511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7832511
	{color:white;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl7932511
	{color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl8032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8132511
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8332511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8732511
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8832511
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9332511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9532511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:"\#\,\#\#0";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9632511
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10332511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10732511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10832511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11332511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11632511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:"\#\,\#\#0";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12332511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12532511
	{padding:0px;
	mso-ignore:padding;
	color:white;
	font-size:14.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12632511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12832511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13132511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13332511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14232511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
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
.xl14332511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl14432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14532511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl14632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14732511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl14832511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl14932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15132511
	{color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl15232511
	{color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl15332511
	{color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl15432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16332511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl17032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17132511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl17232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl17332511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17432511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17532511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17632511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl17732511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17832511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
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
.xl17932511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18032511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18132511
	{color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl18232511
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Times New Roman", serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18332511
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
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

<div id="view_cetak_rapor_32511" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=837 class=xl6553532511
 style='border-collapse:collapse;table-layout:fixed;width:628pt'>
 <col class=xl6553532511 width=11 style='mso-width-source:userset;mso-width-alt:
 402;width:8pt'>
 <col class=xl6553532511 width=19 style='mso-width-source:userset;mso-width-alt:
 694;width:14pt'>
 <col class=xl6553532511 width=24 style='mso-width-source:userset;mso-width-alt:
 877;width:18pt'>
 <col class=xl6553532511 width=109 style='mso-width-source:userset;mso-width-alt:
 3986;width:82pt'>
 <col class=xl6553532511 width=9 style='mso-width-source:userset;mso-width-alt:
 329;width:7pt'>
 <col class=xl6553532511 width=42 style='mso-width-source:userset;mso-width-alt:
 1536;width:32pt'>
 <col class=xl6553532511 width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
 <col class=xl6553532511 width=38 style='mso-width-source:userset;mso-width-alt:
 1389;width:29pt'>
 <col class=xl6553532511 width=227 style='mso-width-source:userset;mso-width-alt:
 8301;width:170pt'>
 <col class=xl6553532511 width=44 style='mso-width-source:userset;mso-width-alt:
 1609;width:33pt'>
 <col class=xl6553532511 width=31 style='mso-width-source:userset;mso-width-alt:
 1133;width:23pt'>
 <col class=xl6553532511 width=8 style='mso-width-source:userset;mso-width-alt:
 292;width:6pt'>
 <col class=xl6553532511 width=227 style='mso-width-source:userset;mso-width-alt:
 8301;width:170pt'>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 width=11 style='height:15.75pt;width:8pt'><a
  name="RANGE!A1:M80"><span style='mso-spacerun:yes'> </span></a></td>
  <td colspan=12 class=xl14732511 width=826 style='width:620pt'>PENCAPAIAN
  KOMPETENSI SISWA</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6553532511 style='height:15.0pt'></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6553532511></td>
  <td class=xl6332511></td>
  <td class=xl6332511></td>
  <td class=xl6553532511></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6532511 colspan=3>Nama Sekolah</td>
  <td class=xl6832511>:</td>
  <td class=xl6532511 colspan=4><?php echo $setting->nama_sekolah; ?></td>
  <td class=xl6532511>Kelas</td>
  <td class=xl6932511></td>
  <td class=xl6932511>:</td>
  <td class=xl6732511><?php echo $siswa->nama_kelas; ?></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6532511 colspan=3>Alamat<span style='mso-spacerun:yes'> </span></td>
  <td class=xl6832511>:</td>
  <td class=xl6732511 colspan=3>Jl Kaliurang Km. 12</td>
  <td class=xl6732511></td>
  <td class=xl6532511 colspan=2>Semester</td>
  <td class=xl6932511>:</td>
  <td class=xl6732511><?php echo $setting->semester; ?></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6532511 colspan=3>Nama Peserta Didik</td>
  <td class=xl6832511>:</td>
  <td class=xl7032511 align=center><?php echo $siswa->nama; ?></td>
  <td class=xl7032511></td>
  <td class=xl7032511></td>
  <td class=xl7032511></td>
  <td class=xl6532511>T.P.</td>
  <td class=xl6932511></td>
  <td class=xl6932511>:</td>
  <td class=xl6732511><?php echo $setting->tahun_ajaran; ?></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6532511 colspan=3>No. Induk / NISN</td>
  <td class=xl6832511>:</td>
  <td class=xl7032511 align=left><?php echo $siswa->nisn; ?></td>
  <td class=xl7032511></td>
  <td class=xl7032511></td>
  <td class=xl7032511></td>
  <td class=xl6732511></td>
  <td class=xl7132511></td>
  <td class=xl7132511></td>
  <td class=xl6532511></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6832511></td>
  <td class=xl6832511></td>
  <td class=xl6732511></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6632511>A.</td>
  <td class=xl6632511 colspan=2>Sikap</td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7332511></td>
  <td class=xl7332511></td>
  <td class=xl7232511></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td class=xl7432511 colspan=2>1. Sikap Spiritual</td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7332511></td>
  <td class=xl7332511></td>
  <td class=xl7232511></td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6432511 style='height:7.5pt'></td>
  <td class=xl6432511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7232511></td>
  <td class=xl7332511></td>
  <td class=xl7332511></td>
  <td class=xl7232511></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td colspan=11 class=xl14832511 style='border-right:.5pt solid black'>Deskripsi</td>
 </tr>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td height=66 class=xl6432511 style='height:50.1pt'></td>
  <td class=xl6432511></td>
  <td colspan=11 class=xl15132511 width=807 style='border-right:.5pt solid black;
  width:606pt'>&nbsp;</td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td class=xl7532511 width=24 style='width:18pt'></td>
  <td class=xl7532511 width=109 style='width:82pt'></td>
  <td class=xl7632511 width=9 style='width:7pt'></td>
  <td class=xl7732511 width=42 style='width:32pt'></td>
  <td class=xl7732511 width=48 style='width:36pt'></td>
  <td class=xl7732511 width=38 style='width:29pt'></td>
  <td class=xl7732511 width=227 style='width:170pt'></td>
  <td class=xl7732511 width=44 style='width:33pt'></td>
  <td class=xl7732511 width=31 style='width:23pt'></td>
  <td class=xl7732511 width=8 style='width:6pt'></td>
  <td class=xl7732511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td class=xl7432511 colspan=2>2. Sikap Sosial</td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl6432511 style='height:9.0pt'></td>
  <td class=xl6432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td colspan=11 class=xl14832511 style='border-right:.5pt solid black'>Deskripsi</td>
 </tr>
 <tr class=xl7932511 height=66 style='mso-height-source:userset;height:50.1pt'>
  <td height=66 class=xl7832511 style='height:50.1pt'></td>
  <td class=xl7832511></td>
  <td colspan=11 class=xl15132511 width=807 style='border-right:.5pt solid black;
  width:606pt'>&nbsp;</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6432511></td>
  <td class=xl6732511></td>
  <td colspan=5 class=xl13432511 width=246 style='width:186pt'></td>
  <td class=xl8032511></td>
  <td colspan=4 class=xl14632511 width=310 style='width:232pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl6632511>B.</td>
  <td class=xl6632511 colspan=5>Pengetahuan dan Keterampilan</td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl8132511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl8132511></td>
  <td rowspan=2 class=xl15432511 style='border-bottom:2.0pt double black'>No.</td>
  <td rowspan=2 class=xl15632511 style='border-bottom:2.0pt double black'>Mata
  Pelajaran</td>
  <td class=xl8232511>&nbsp;</td>
  <td rowspan=2 class=xl15832511 style='border-bottom:2.0pt double black'>KKM</td>
  <td colspan=3 class=xl15932511 style='border-right:.5pt solid black;
  border-left:none'>Pengetahuan</td>
  <td colspan=4 class=xl15932511 style='border-right:.5pt solid black;
  border-left:none'>Keterampilan</td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl8132511></td>
  <td class=xl8332511>&nbsp;</td>
  <td class=xl8432511 style='border-top:none;border-left:none'>Angka</td>
  <td class=xl8532511 style='border-top:none'>Pred</td>
  <td class=xl8432511 style='border-top:none;border-left:none'>Deskripsi</td>
  <td class=xl8432511 style='border-top:none;border-left:none'>Angka</td>
  <td class=xl8532511 style='border-top:none'>Pred</td>
  <td colspan=2 class=xl16032511 style='border-right:.5pt solid black;
  border-left:none'>Deskripsi</td>
 </tr>

 <?php
 	$i=0;
	foreach($mapel as $rowmapel) {
		$i++;
 ?>
 <tr height=235 style='mso-height-source:userset;height:176.25pt'>
  <td height=235 class=xl8732511 style='height:176.25pt'></td>
  <td class=xl8832511></td>
  <td class=xl10232511><?php echo $i; ?></td>
  <td class=xl9032511 width=109 style='width:82pt'><?php echo $rowmapel->nama_mapel; ?></td>
  <td class=xl10332511 width=9 style='width:7pt'>&nbsp;</td>
  <td class=xl9232511 width=42 style='border-left:none;width:32pt'><?php echo $rowmapel->kkm;?></td>
  <td class=xl9332511 style='border-top:none'><?php echo $nilaisiswa_p[$rowmapel->id_mapel]; ?></td>
  <td class=xl9332511 style='border-top:none;border-left:none'><?php echo $predikatsiswa_p[$rowmapel->id_mapel]; ?></td>
  <td class=xl9432511 width=227 style='border-top:none;border-left:none;
  width:170pt'><?php  if($predikatsiswa_p[$rowmapel->id_mapel]=="A"){
			echo $predikat->deskripsi;
  } else if($predikatsiswa_p[$rowmapel->id_mapel]=="B"){
			echo $predikat->deskripsi;
  }	else if($predikatsiswa_p[$rowmapel->id_mapel]=="C"){
			echo $predikat->deskripsi;
}	else if($predikatsiswa_p[$rowmapel->id_mapel]=="D"){
			echo $predikat->deskripsi;
}	else {
	
  }
	foreach($kompetensi_p[$rowmapel->id_mapel] as $row_kompetensi_p) {
		echo $row_kompetensi_p->deskripsi_kd.'.';
	}
  ?></td>
  <td class=xl9532511 style='border-top:none;border-left:none'><?php echo $nilaisiswa_k[$rowmapel->id_mapel]; ?></td>
  <td class=xl9332511 style='border-top:none;border-left:none'><?php echo $predikatsiswa_k[$rowmapel->id_mapel]; ?></td>
  <td colspan=2 class=xl16532511 width=235 style='border-right:.5pt solid black;
  border-left:none;width:176pt'><?php  if($predikatsiswa_p[$rowmapel->id_mapel]=="A"){
			echo $predikat->deskripsi;
  } else if($predikatsiswa_p[$rowmapel->id_mapel]=="B"){
			echo $predikat->deskripsi;
  }	else if($predikatsiswa_p[$rowmapel->id_mapel]=="C"){
			echo $predikat->deskripsi;
	}else if($predikatsiswa_p[$rowmapel->id_mapel]=="D"){
			echo $predikat->deskripsi;
	}else {
	
  }
	foreach($kompetensi_k[$rowmapel->id_mapel] as $row_kompetensi_k) {
		echo $row_kompetensi_k->deskripsi_kd.'.';
	}
  ?></td>
 </tr>
<?php
	}
?>

 <tr height=50 style='mso-height-source:userset;height:37.5pt'>
  <td height=50 class=xl11832511 style='height:37.5pt'></td>
  <td class=xl11932511>C.<span style='mso-spacerun:yes'> </span></td>
  <td class=xl12032511 colspan=2>Ekstrkurikuler</td>
  <td class=xl11532511 width=9 style='width:7pt'>&nbsp;</td>
  <td class=xl11532511 width=42 style='width:32pt'>&nbsp;</td>
  <td class=xl6832511></td>
  <td class=xl6832511></td>
  <td class=xl12232511 width=227 style='width:170pt'></td>
  <td class=xl12332511>&nbsp;</td>
  <td class=xl12332511>&nbsp;</td>
  <td class=xl12432511 width=8 style='width:6pt'>&nbsp;</td>
  <td class=xl12432511 width=227 style='width:170pt'>&nbsp;</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl12532511 style='height:18.0pt'></td>
  <td class=xl12632511></td>
  <td class=xl12732511 style='border-top:none'>No.</td>
  <td colspan=3 class=xl16832511 style='border-left:none'>Ekstrakurikuler</td>
  <td colspan=3 class=xl17032511 width=313 style='width:235pt'>Predikat</td>
  <td colspan=4 class=xl17132511 style='border-right:.5pt solid black'>Keterangan</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl6432511 style='height:20.1pt'></td>
  <td class=xl12832511></td>
  <td class=xl10932511>1.</td>
  <td colspan=3 class=xl17732511 width=160 style='border-left:none;width:121pt'><?php echo @$nilai_ekstrakurikuler[0]->jenis_kls_tambahan; ?>&nbsp;</td>
  <td colspan=3 class=xl17832511 width=313 style='width:235pt'><?php  
  								  $nilai = @$nilai_ekstrakurikuler[0]->nilai_ekskul;
                                  if ($nilai > 85) {
                                    echo "A";
                                  } else if ($nilai > 65) {
                                    echo "B";
                                  } else if ($nilai > 45) {
                                    echo "C";
                                  } else if ($nilai > 25) {
                                    echo "D";
                                  } else if ($nilai == "") {
                                    echo " ";
                                  } else if ($nilai >= 0) {
                                    echo "E";
                                  } else {
                                    echo " ";
                                  }

                                  ?>&nbsp;</td>
  <td colspan=4 class=xl16332511 align=center style='border-right:.5pt solid black'><?php //echo @$nilai_ekstrakurikuler[0]->nilai_ekskul; ?>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl6432511 style='height:20.1pt'></td>
  <td class=xl12832511></td>
  <td class=xl8632511 style='border-top:none'>2.</td>
  <td colspan=3 class=xl9032511 width=160 style='border-left:none;width:121pt'><?php echo @$nilai_ekstrakurikuler[1]->jenis_kls_tambahan; ?>&nbsp;</td>
  <td colspan=3 class=xl17932511 width=313 style='width:235pt'><?php  
  								  $nilai = @$nilai_ekstrakurikuler[1]->nilai_ekskul;
                                  if ($nilai > 85) {
                                    echo "A";
                                  } else if ($nilai > 65) {
                                    echo "B";
                                  } else if ($nilai > 45) {
                                    echo "C";
                                  } else if ($nilai > 25) {
                                    echo "D";
                                  } else if ($nilai == "") {
                                    echo " ";
                                  } else if ($nilai >= 0) {
                                    echo "E";
                                  } else {
                                    echo " ";
                                  }

                                  ?>&nbsp;</td>
  <td colspan=4 class=xl14932511 align=center style='border-right:.5pt solid black'><?php //echo @$nilai_ekstrakurikuler[1]->nilai_ekskul; ?>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl6432511 style='height:20.1pt'></td>
  <td class=xl12832511></td>
  <td class=xl8632511 style='border-top:none'>3.</td>
  <td colspan=3 class=xl9032511 width=160 style='border-left:none;width:121pt'><?php echo @$nilai_ekstrakurikuler[2]->jenis_kls_tambahan; ?>&nbsp;</td>
  <td colspan=3 class=xl17932511 width=313 style='width:235pt'><?php  
  								  $nilai = @$nilai_ekstrakurikuler[2]->nilai_ekskul;
                                  if ($nilai > 85) {
                                    echo "A";
                                  } else if ($nilai > 65) {
                                    echo "B";
                                  } else if ($nilai > 45) {
                                    echo "C";
                                  } else if ($nilai > 25) {
                                    echo "D";
                                  } else if ($nilai == "") {
                                    echo " ";
                                  } else if ($nilai >= 0) {
                                    echo "E";
                                  } else {
                                    echo " ";
                                  }

                                  ?>&nbsp;</td>
  <td colspan=4 class=xl14932511 align=center style='border-right:.5pt solid black'><?php //echo @$nilai_ekstrakurikuler[2]->nilai_ekskul; ?>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl6432511 style='height:19.5pt'></td>
  <td class=xl12832511></td>
  <td class=xl12932511></td>
  <td class=xl13032511 width=109 style='width:82pt'></td>
  <td class=xl13032511 width=9 style='width:7pt'></td>
  <td class=xl13032511 width=42 style='width:32pt'></td>
  <td class=xl13032511 width=48 style='width:36pt'></td>
  <td class=xl13032511 width=38 style='width:29pt'></td>
  <td class=xl12932511></td>
  <td class=xl12932511></td>
  <td class=xl12932511></td>
  <td class=xl12932511></td>
  <td class=xl12932511></td>
 </tr>
 <tr height=51 style='mso-height-source:userset;height:38.25pt'>
  <td height=51 class=xl6432511 style='height:38.25pt'></td>
  <td class=xl13132511>D.</td>
  <td class=xl6532511 colspan=2>Ketidakhadiran</td>
  <td class=xl13232511 width=9 style='width:7pt'></td>
  <td class=xl13232511 width=42 style='width:32pt'></td>
  <td class=xl13232511 width=48 style='width:36pt'></td>
  <td class=xl13232511 width=38 style='width:29pt'></td>
  <td class=xl13332511></td>
  <td class=xl13232511 width=44 style='width:33pt'></td>
  <td class=xl13032511 width=31 style='width:23pt'></td>
  <td class=xl13032511 width=8 style='width:6pt'></td>
  <td class=xl13432511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl12832511></td>
  <td colspan=4 class=xl17632511>Sakit</td>
  <td colspan=2 class=xl9232511 width=86 style='width:65pt'><?php echo $datpresensisemester[$nisn]['S']; ?></td>
  <td class=xl10332511 width=227 style='width:170pt'>hari</td>
  <td class=xl13532511 width=44 style='border-left:none;width:33pt'>&nbsp;</td>
  <td class=xl13032511 width=31 style='width:23pt'></td>
  <td class=xl13032511 width=8 style='width:6pt'></td>
  <td class=xl13432511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl12832511></td>
  <td colspan=4 class=xl17632511>Izin</td>
  <td colspan=2 class=xl9232511 width=86 style='width:65pt'><?php echo $datpresensisemester[$nisn]['I']; ?></td>
  <td class=xl10332511 width=227 style='border-top:none;width:170pt'>hari</td>
  <td class=xl13532511 width=44 style='border-left:none;width:33pt'>&nbsp;</td>
  <td class=xl13032511 width=31 style='width:23pt'></td>
  <td class=xl13032511 width=8 style='width:6pt'></td>
  <td class=xl13432511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl12832511></td>
  <td colspan=4 class=xl17632511>Tanpa Keterangan</td>
  <td colspan=2 class=xl9232511 width=86 style='width:65pt'><?php echo $datpresensisemester[$nisn]['A']; ?></td>
  <td class=xl10332511 width=227 style='border-top:none;width:170pt'>hari</td>
  <td class=xl13532511 width=44 style='border-left:none;width:33pt'>&nbsp;</td>
  <td class=xl13032511 width=31 style='width:23pt'></td>
  <td class=xl13032511 width=8 style='width:6pt'></td>
  <td class=xl13432511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6432511 style='height:18.75pt'></td>
  <td class=xl12832511></td>
  <td class=xl13632511></td>
  <td class=xl13432511 width=109 style='width:82pt'></td>
  <td class=xl13432511 width=9 style='width:7pt'></td>
  <td class=xl13432511 width=42 style='width:32pt'></td>
  <td class=xl13432511 width=48 style='width:36pt'></td>
  <td class=xl13432511 width=38 style='width:29pt'></td>
  <td class=xl8032511></td>
  <td class=xl13432511 width=44 style='width:33pt'></td>
  <td class=xl13032511 width=31 style='width:23pt'></td>
  <td class=xl13032511 width=8 style='width:6pt'></td>
  <td class=xl13432511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl13132511>E.</td>
  <td class=xl6532511 colspan=2>Prestasi</td>
  <td class=xl13732511 width=9 style='width:7pt'></td>
  <td class=xl13732511 width=42 style='width:32pt'></td>
  <td class=xl13732511 width=48 style='width:36pt'></td>
  <td class=xl13732511 width=38 style='width:29pt'></td>
  <td class=xl13832511></td>
  <td class=xl13732511 width=44 style='width:33pt'></td>
  <td class=xl13932511 width=31 style='width:23pt'></td>
  <td class=xl13932511 width=8 style='width:6pt'></td>
  <td class=xl13732511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl6553532511 style='height:16.5pt'></td>
  <td class=xl7032511></td>
  <td class=xl12732511>No.</td>
  <td colspan=5 class=xl18032511 width=246 style='border-right:.5pt solid black;
  border-left:none;width:186pt'>Jenis Prestasi</td>
  <td colspan=5 class=xl16832511 style='border-right:.5pt solid black;
  border-left:none'>Keterangan</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl6553532511 style='height:16.5pt'></td>
  <td class=xl7032511></td>
  <td class=xl10932511>1.</td>
  <td colspan=5 class=xl17732511 width=246 style='border-right:.5pt solid black;
  border-left:none;width:186pt'><?php echo @$prestasi[0]->jenis_prestasi; ?>&nbsp;</td>
  <td colspan=5 class=xl17732511 width=537 style='border-right:.5pt solid black;
  border-left:none;width:402pt'><?php echo @$prestasi[0]->keterangan; ?>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl7032511></td>
  <td class=xl8632511 style='border-top:none'>2.</td>
  <td colspan=5 class=xl9032511 width=246 style='border-right:.5pt solid black;
  border-left:none;width:186pt'><?php echo @$prestasi[1]->jenis_prestasi; ?>&nbsp;</td>
  <td colspan=5 class=xl9032511 width=537 style='border-right:.5pt solid black;
  border-left:none;width:402pt'><?php echo @$prestasi[1]->keterangan; ?>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl7032511></td>
  <td class=xl8632511 style='border-top:none'>3.</td>
  <td colspan=5 class=xl9032511 width=246 style='border-right:.5pt solid black;
  border-left:none;width:186pt'><?php echo @$prestasi[2]->jenis_prestasi; ?>&nbsp;</td>
  <td colspan=5 class=xl9032511 width=537 style='border-right:.5pt solid black;
  border-left:none;width:402pt'><?php echo @$prestasi[2]->keterangan; ?>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl7032511></td>
  <td class=xl8632511 style='border-top:none'>4</td>
  <td colspan=5 class=xl9032511 width=246 style='border-right:.5pt solid black;
  border-left:none;width:186pt'><?php echo @$prestasi[3]->jenis_prestasi; ?>&nbsp;</td>
  <td colspan=5 class=xl9032511 width=537 style='border-right:.5pt solid black;
  border-left:none;width:402pt'><?php echo @$prestasi[3]->keterangan; ?>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl7032511></td>
  <td class=xl6732511></td>
  <td class=xl13232511 width=109 style='width:82pt'></td>
  <td class=xl13232511 width=9 style='width:7pt'></td>
  <td class=xl13232511 width=42 style='width:32pt'></td>
  <td class=xl13232511 width=48 style='width:36pt'></td>
  <td class=xl13232511 width=38 style='width:29pt'></td>
  <td class=xl13332511></td>
  <td class=xl13232511 width=44 style='width:33pt'></td>
  <td class=xl14032511 width=31 style='width:23pt'></td>
  <td class=xl14032511 width=8 style='width:6pt'></td>
  <td class=xl13232511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl13132511>F.</td>
  <td class=xl6532511 colspan=3>Catatan Wali Kelas</td>
  <td class=xl13232511 width=42 style='width:32pt'></td>
  <td class=xl13232511 width=48 style='width:36pt'></td>
  <td class=xl13232511 width=38 style='width:29pt'></td>
  <td class=xl13332511></td>
  <td class=xl13232511 width=44 style='width:33pt'></td>
  <td class=xl14032511 width=31 style='width:23pt'></td>
  <td class=xl14032511 width=8 style='width:6pt'></td>
  <td class=xl13232511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td height=66 class=xl6553532511 style='height:50.1pt'></td>
  <td class=xl7032511></td>
  <td colspan=11 class=xl18132511 width=807 style='border-right:.5pt solid black;
  width:606pt'>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl7032511></td>
  <td class=xl6732511></td>
  <td class=xl13232511 width=109 style='width:82pt'></td>
  <td class=xl13232511 width=9 style='width:7pt'></td>
  <td class=xl13232511 width=42 style='width:32pt'></td>
  <td class=xl13232511 width=48 style='width:36pt'></td>
  <td class=xl13232511 width=38 style='width:29pt'></td>
  <td class=xl13332511></td>
  <td class=xl13232511 width=44 style='width:33pt'></td>
  <td class=xl14032511 width=31 style='width:23pt'></td>
  <td class=xl14032511 width=8 style='width:6pt'></td>
  <td class=xl13232511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td height=30 class=xl14232511 style='height:22.5pt'></td>
  <td class=xl13132511>G.</td>
  <td class=xl6532511 colspan=5>Tanggapan Orang tua/ Wali</td>
  <td class=xl14132511 width=38 style='width:29pt'></td>
  <td class=xl14332511></td>
  <td class=xl14132511 width=44 style='width:33pt'></td>
  <td class=xl14432511 width=31 style='width:23pt'></td>
  <td class=xl14432511 width=8 style='width:6pt'></td>
  <td class=xl14132511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=66 style='mso-height-source:userset;height:50.1pt'>
  <td height=66 class=xl6553532511 style='height:50.1pt'></td>
  <td class=xl7032511></td>
  <td colspan=11 class=xl18232511 width=807 style='border-right:.5pt solid black;
  width:606pt'>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl12832511></td>
  <td class=xl13632511></td>
  <td class=xl13432511 width=109 style='width:82pt'></td>
  <td class=xl13432511 width=9 style='width:7pt'></td>
  <td class=xl13432511 width=42 style='width:32pt'></td>
  <td class=xl13432511 width=48 style='width:36pt'></td>
  <td class=xl13432511 width=38 style='width:29pt'></td>
  <td class=xl8032511></td>
  <td class=xl13432511 width=44 style='width:33pt'></td>
  <td class=xl13032511 width=31 style='width:23pt'></td>
  <td class=xl13032511 width=8 style='width:6pt'></td>
  <td class=xl13432511 width=227 style='width:170pt'></td>
 </tr>
 <tr height=69 style='mso-height-source:userset;height:51.75pt'>
  <td height=69 class=xl6432511 style='height:51.75pt'></td>
  <td class=xl12832511></td>
  <td class=xl6732511></td>
  <td class=xl13232511 width=109 style='width:82pt'></td>
  <td class=xl13232511 width=9 style='width:7pt'></td>
  <td class=xl13232511 width=42 style='width:32pt'></td>
  <td class=xl13232511 width=48 style='width:36pt'></td>
  <td class=xl13232511 width=38 style='width:29pt'></td>
  <td class=xl13332511></td>
  <td colspan=4 class=xl14032511 width=310 style='width:232pt'>Sleman, </td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9632511 style='height:15.75pt'></td>
  <td class=xl9632511></td>
  <td colspan=3 class=xl6832511>Orang Tua / Wali</td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td colspan=4 class=xl6832511>Wali Kelas</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9632511 style='height:15.75pt'></td>
  <td class=xl9632511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl13332511></td>
  <td class=xl6553532511></td>
  <td class=xl13332511></td>
  <td class=xl6732511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9632511 style='height:15.75pt'></td>
  <td class=xl9632511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl13332511></td>
  <td class=xl6553532511></td>
  <td class=xl13332511></td>
  <td class=xl6732511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9632511 style='height:15.75pt'></td>
  <td class=xl9632511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl13332511></td>
  <td class=xl6553532511></td>
  <td class=xl13332511></td>
  <td class=xl6732511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9632511 style='height:15.75pt'></td>
  <td class=xl9632511></td>
  <td colspan=3 class=xl6832511>……………………….</td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td colspan=4 class=xl6832511><?php echo @$wali[0]->Nama; ?></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl9632511 style='height:15.75pt'></td>
  <td class=xl9632511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td class=xl6732511></td>
  <td colspan=4 class=xl6832511>NIP:<?php echo @$wali[0]->NIP; ?><span style='mso-spacerun:yes'> </span></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td colspan=4 class=xl6932511>Mengetahui</td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td colspan=4 class=xl6932511>Kepala<span style='mso-spacerun:yes'> 
  </span>Madrasah</td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl14532511></td>
  <td class=xl14532511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl14532511></td>
  <td class=xl14532511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl14532511></td>
  <td class=xl14532511></td>
  <td class=xl7432511></td>
  <td class=xl6932511></td>
  <td class=xl6932511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td colspan=4 class=xl14732511><?php echo @$kepsek[0]->Nama; ?></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6553532511 style='height:15.75pt'></td>
  <td class=xl6553532511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td colspan=4 class=xl6932511>NIP:<?php echo @$kepsek[0]->NIP; ?><span style='mso-spacerun:yes'> </span></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
  <td class=xl7432511></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=11 style='width:8pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=24 style='width:18pt'></td>
  <td width=109 style='width:82pt'></td>
  <td width=9 style='width:7pt'></td>
  <td width=42 style='width:32pt'></td>
  <td width=48 style='width:36pt'></td>
  <td width=38 style='width:29pt'></td>
  <td width=227 style='width:170pt'></td>
  <td width=44 style='width:33pt'></td>
  <td width=31 style='width:23pt'></td>
  <td width=8 style='width:6pt'></td>
  <td width=227 style='width:170pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<center style="color:navy;">Pelanggaran Siswa SMP Yogyakarta<br></center>
			<center><small>Pelanggaran Siswa yang didapat selama berada di dalam sekolah</small></center>
		</h1>
		<ol class="breadcrumb">
			<li><a href="dashboard.php">Dashboard</a></li>
		</ol>
	</section>

	<?php echo $this->session->flashdata('pesan'); ?>
	 <!-- Main content -->
    <section class="content">
    	<?php
    	function tgl_indo($tanggal) {
    		$tgl = substr($tanggal, 8, 2);
    		$bln = substr($tanggal, 5, 2);
    		$thn = substr($tanggal, 0, 4);
    		if ($bln == "1") { $bulan = "Januari"; } 
    		if ($bln == "2") { $bulan = "Februari"; } 
    		if ($bln == "3") { $bulan = "Maret"; } 
    		if ($bln == "4") { $bulan = "April"; } 
    		if ($bln == "5") { $bulan = "Mei"; } 
    		if ($bln == "6") { $bulan = "Juni"; } 
    		if ($bln == "7") { $bulan = "Juli"; } 
    		if ($bln == "8") { $bulan = "Agustus"; } 
    		if ($bln == "9") { $bulan = "September"; } 
    		if ($bln == "10") { $bulan = "Oktober"; } 
    		if ($bln == "11") { $bulan = "November"; } 
    		if ($bln == "12") { $bulan = "Desember"; } 
    		return $tgl." ".$bulan." ".$thn;
    	}
    	?>
    	 <div class="box">
    	 	<div class="box-body">
    	 		<h4 class="box-title">Data Pelanggaran Siswa</h4>
    	 		<table class="table table-bordered">
    	 		 <tr style="background-color: #53c68c">
    	 		 	<th style="width: 10px">No</th>
    	 		 	<th>NISN</th>
    	 		 	<th>nama</th>
    	 		 	<th>Tanggal Pelanggaran</th>
    	 		 	<th>Kategori Pelanggaran</th> 
    	 		 	<th>Bentuk Pelanggaran</th>
    	 		 	<th>No Pasal</th>
    	 		 	<th>Point Pelanggaran</th>
    	 		 	<th>Sanksi</th>
    	 		 </tr>
    	 		 <?php
    	 		 $i=0;
    	 		 foreach ($pelanggaran as $rowpelanggaran) {
    	 		 	$i++;
	 		 	 ?>
	 		 	 <tr>
	 		 	 	<td><?php echo $i; ?>.</td>
	 		 	 	<td><?php echo $rowpelanggaran->nisn; ?></td>
	 		 	 	<td><?php echo $rowpelanggaran->nama; ?></td>
	 		 	 	<td><?php echo tgl_indo($rowpelanggaran->tgl_kejadian); ?></td>
	 		 	 	<td><?php echo $rowpelanggaran->kategori; ?></td>
	 		 	 	<td><?php echo $rowpelanggaran->bentuk_pelanggaran; ?></td>
	 		 	 	<td><?php echo $rowpelanggaran->no_pasal; ?></td>
	 		 	 	<td><?php echo $rowpelanggaran->poin; ?></td>
	 		 	 	<td><?php echo $rowpelanggaran->sanksi; ?></td>
	 		 	 </tr>
	 		 	 <?php
		 		 	}
		 		 ?>
	 		 	</table>
    	 	</div>
    	 </div>
    </section>
</div>
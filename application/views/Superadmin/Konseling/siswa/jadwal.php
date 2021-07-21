<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<center style="color:navy;">Jadwal Ekstrakurikuler SMP Yogyakarta<br></center>
			<center><small>Jadwal yang telah disetujui oleh pembimbing dan staff kesiswaan</small></center>
		</h1>
		<ol class="breadcrumb">
			<li><a href="dashboard.php">Dashboard</a></li>
		</ol>
	</section>


	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-body">
						<h4>Jadwal Ekstrakurikuler</h4>
						<?php //print_r($jadwal_ekskul); ?>
						<table class="table table-bordered">
							<tr style="background-color: #53c68c">
								<th style="width: 10px">No</th>
								<th>Hari</th>
								<th>Waktu</th>
								<th>Jenis Ekstrakurikuler</th>
								<th>Tempat</th>
								<th>Pembimbing</th>
							</tr>
							<?php $i = 0 ?>
							<?php foreach ($jadwal_ekskul as $hari => $jadwal) : ?>
								<?php $i++ ?>
								<?php $waktu = implode("<br>", $jadwal["waktu"]) ?>
								<?php $ekskul = implode("<br>", $jadwal["ekskul"]) ?>
								<?php $tempat = implode("<br>", $jadwal["tempat"]) ?>
								<?php $pembimbing = implode("<br>", $jadwal["pembimbing"]) ?>
								<tr>
									<td><?php echo $i."." ?></td>
									<td><?php echo $hari ?></td> 
									<td><?php echo $waktu ?></td>
									<td><?php echo $ekskul ?></td>
									<td><?php echo $tempat ?></td>
									<td><?php echo $pembimbing ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
					<div class="box-footer clearfix"  style="float:right;">
						<a href="#" class="btn btn-primary">PRINT</a>
					</div>
				</div>
			</div>

			
		    
		</div>
	</section>
    <!-- /.content -->
 </div>
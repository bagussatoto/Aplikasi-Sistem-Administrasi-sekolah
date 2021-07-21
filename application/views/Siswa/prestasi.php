<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<center style="color:navy;">Prestasi Siswa SMP Yogyakarta <br></center>
			<center><small>Prestasi Siswa selama mengikuti kegiatan diluar ataupun didalam sekolah</small></center>
		</h1>
		<ol class="breadcrumb">
			<li><a href="dashboard.php">Dashboard</a></li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<!-- Left col -->
            <section class="col-lg-12 ">
            	<div class="nav-tabs-custom">
            		<!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-left">
                	<li class="active"><a href="#tab1" data-toggle="tab">Data Prestasi siswa</a></li>
                </ul>
	                <div class="tab-content no-padding">
	                	<div class="chart tab-pane active" id="tab1" style="position: relative; ">
	                		<div class="box">
	                			<div class="box-body">
	                				<table class="table table-bordered">
	                					<tr style="background-color: #53c68c">
	                						<th style="width: 10px">No</th>
	                						<th>Nama Siswa</th>
	                						<th>Jenis Prestasi</th>
	                						<th>Tahun</th> 
	                						<th>Peringkat</th>
	                						<th>Tingkat</th>
	                						<th>Foto</th>
	                					</tr>
	                					<?php
	                					$i=0;
	                					foreach ($prestasi as $rowprestasi) {
	                						$i++;
	                					?>
	                					<tr>
	                						<td><?php echo $i; ?>.</td>
	                						<td><?php echo $rowprestasi->nama; ?></td>
	                						<td><?php echo $rowprestasi->jenis_prestasi; ?></td>
	                						<td><?php echo $rowprestasi->tahun; ?></td>
	                						<td><?php echo $rowprestasi->peringkat; ?></td>
	                						<td><?php echo $rowprestasi->tingkat_pend; ?></td>
	                						<td><img src="<?php echo base_url()."assets/nonakademik/image/".$rowprestasi->fotoprestasi; ?>" width="200"/></td>
	                					</tr>
	                					<?php
		                				}
		                				?>
	                				</table>
	                			</div>
	                		</div>
	                	</div>
	                </div>
            	</div>
            </section>
		</div>
	</section>


</div>
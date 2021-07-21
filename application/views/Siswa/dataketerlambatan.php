<html>
	<body>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Data Keterlambatan Siswa</h4>
				</div>

				<div class="modal-body">
					<table class="table table-bordered">
						<tr style="background-color: #53c68c">
							<th style="width: 50px">No</th>
							<th>NIS</th>
							<th>Nama Siswa</th>
							<th>Tanggal Terlambat</th>
							<th>Jumlah Terlambat</th>
							<th>Keterangan</th>
							<th>sanksi</th>
							<th>SP</th>
						</tr>
						<?php $i = 0; ?>
						<?php 
						$proses = "";
						foreach ($keterlambatan as $row) : 
							?>
							<tr>
								<?php
								if ($proses != $row->nisn) {
									$i++;
									$rowspan = 0;
									$id_keterlambatan = 0;
									foreach ($keterlambatan as $row2) {
										if ($row2->nisn == $row->nisn) {
											$rowspan++;
											$id_keterlambatan = $row2->id_keterlambatan;
										}
									}
									?>
									<td rowspan="<?php echo $rowspan; ?>"><?php echo $i; ?>.</td>
									<td rowspan="<?php echo $rowspan; ?>"><?php echo $row->nisn ?></td> 
									<td rowspan="<?php echo $rowspan; ?>"><?php echo $row->nama ?></td>
									<?php
									}
									?>
									<td><?php echo $row->tgl_terlambat ?></td>
									<?php
									if ($proses != $row->nisn) {
									?>
									<td rowspan="<?php echo $rowspan; ?>"><?php echo $jumlah ?></td>
									<?php
									}
									?>
									<td><?php echo $row->keterangan ?></td>
									<?php
									if ($proses != $row->nisn) {
									?>
									<td rowspan="<?php echo $rowspan; ?>"><?php 
									if ($jumlah == 3) {
										echo "Surat Peringatan";
									} else if ($jumlah == 5) {
										echo "Surat Peringatan 2";
									} else if ($jumlah == 8) {
										echo "Surat Peringatan 3";
									} else {
										echo "";
									}
									?>
									</td>
									<td rowspan="<?php echo $rowspan; ?>"><a target="_blank" href="<?php echo site_url('siswa/suratperingatan/'.$id_keterlambatan); ?>">Print</a>
									</td>
									<?php
									}
									?>
							</tr>
							<?php 
							$proses = $row->nisn;
							endforeach; 
							?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
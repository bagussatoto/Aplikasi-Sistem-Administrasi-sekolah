<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<center style="color:navy;">Pendaftaran Ekstrakurikuler Siswa SMP Yogyakarta<br></center>
			<center><small>Pendaftaran Ekstrakukurikuler Pilihan</small></center>
		</h1>
		<ol class="breadcrumb">
			<!-- <li ><a href="<?php echo site_url('siswa');?>">Dashboard</li> -->
		</ol>
	</section>


	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h4 class="box-title">Formulir Pendaftaran</h4>
					</div>
				</div>
				<div class="box-body">
				<form name="daftar_ekskul" id="daftar_ekskul" method="post" action="<?php echo site_url("siswa/pendaftaran/simpan") ?>">
					<div class="col-md-4">
						<div class="box-body">
					    	<div class="form-group">
		                        <label for="middle-name" class="control-label col-md-12">NISN</label>
		                        <div class="col-md-8">
		                        	<input type="text" name="nisn" id="nisn" required="required" class="form-control" placeholder="Nomor Induk Siswa" style="font-size: 14px">
		                        </div>
		                        <div class="col-md-4">
		                        	<button type="button" id="btn-cari" class="btn btn-primary">Cari</button>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="middle-name" class="control-label col-md-12">Nama</label>
		                        <div class="col-md-8" id="siswa_nama">
		                        
		                        </div>
		                        <label for="middle-name" class="control-label col-md-12">Alamat</label>
		                        <div class="col-md-8" id="siswa_alamat">
		                        
		                        </div>
		                        <label for="middle-name" class="control-label col-md-12">Jns. Kelamin</label>
		                        <div class="col-md-8" id="siswa_jnskelamin">
		                        
		                        </div>
		                    </div>
		                </div>
				    </div>
				    <div class="col-md-8">
				    	<div class="col-md-4">
				    		<div class="col-md-12">
					    		<div class="form-group">
					    			<label for="middle-name" class="control-label col-md-12">Tahun Ajaran</label>
				    				<select class="form-control" name="thn_ajaran">
				    					<?php for ($i = 2010; $i<=date(Y)+2; $i++) : ?>
				    						<?php $thn_ajaran = $i . " - " . ($i+1) ?>
				    						<option value="<?php echo $thn_ajaran ?>"><?php echo $thn_ajaran ?></option>
				    					<?php endfor; ?>
						    		</select>
					    		</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
					    			<label for="middle-name" class="control-label col-md-12">Semester</label>
				    				<select class="form-control" name="semester">
				    					<option value="Ganjil">Ganjil</option>
				    					<option value="Genap">Genap</option>
						    		</select>
					    		</div>
					    	</div>
					    	<!-- <div class="col-md-12">
					    		<div class="form-group">
					    			<label for="middle-name" class="control-label col-md-12">Jadwal Ekskul</label>
					    			<?php $arrhari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"); ?>
				    				<select class="form-control" name="jadwal_ekskul">
				    					<?php foreach($arrhari as $hari) : ?>
				    						<?php if (!empty($jdwal_ekskul[$hari])) : ?>
				    							<optgroup label="<?php echo $hari ?>">
				    								<?php foreach ($jdwal_ekskul[$hari] as $jadwal) : ?>
				    									<option value="<?php echo $jadwal->id_jadwal_ekskul ?>"><?php echo substr($jadwal->jam_mulai, 0, 5)." - ".substr($jadwal->jam_selesai, 0, 5)." ".$jadwal->jenis_kls_tambahan ?></option>
				    								<?php endforeach; ?>

						    					</optgroup>
				    						<?php endif; ?>
					    						
				    					<?php endforeach; ?>

						    		</select>
					    		</div>
					    	</div> -->
			    			<div class="col-md-12">
					    		<button type="submit" class="btn btn-primary">Simpan</button>
			    			</div>
				    	</div>
				    	<div class="col-md-6">
				    		<label for="middle-name" class="control-label col-md-12">Ekstrakurikuler</label>
					    	<?php foreach ($data_ekskul as $ekskul) : ?>
					    		<div class="col-md-6"><input type="checkbox" class="check_ekskul" name="ekskul[<?php echo $ekskul->id_jenis_kls_tambahan ?>]"> <?php echo $ekskul->jenis_kls_tambahan ?></div>
					    		<div class="col-md-6">
					    			<select class="form-control" name="jdwlekskul[<?php echo $ekskul->id_jenis_kls_tambahan ?>]">
					    				<?php 
					    					foreach($arrhari as $hari) : ?>
				    						<?php if (!empty($jdwal_ekskul[$hari])) : ?>
				    							<?php
				    								$ada = false;
				    								foreach ($jdwal_ekskul[$hari] as $jadwal) : 
				    									if ($jadwal->id_jenis_kls_tambahan == $ekskul->id_jenis_kls_tambahan) {
				    										$ada = true;
				    									}
				    								endforeach;

				    								if ($ada == true) {
				    							?>
				    							<optgroup label="<?php echo $hari ?>">
				    								<?php foreach ($jdwal_ekskul[$hari] as $jadwal) : ?>
				    									<?php
				    									if ($jadwal->id_jenis_kls_tambahan == $ekskul->id_jenis_kls_tambahan) {
				    									?>
				    									<option value="<?php echo $jadwal->id_jadwal_ekskul ?>"><?php echo substr($jadwal->jam_mulai, 0, 5)." - ".substr($jadwal->jam_selesai, 0, 5)." ".$jadwal->jenis_kls_tambahan ?></option>
				    									<?php
				    									}
				    									?>
				    								<?php endforeach; ?>

						    					</optgroup>
						    					<?php
						    						}
						    					?>
				    						<?php endif; ?>
					    						
				    					<?php endforeach; ?>
					    			</select>
					    		</div>
					    	<?php endforeach; ?>

					    	
				    	</div>
				    		
				    </div>
			    </form>
			    </div>
			</div>

		</div>

		<br><br>

		<div class="tab-content no-padding">
			<div class="chart tab-pane active" id="tab1" style="position: relative; ">
				<div class="box">
					<div class="box-body">
						<center><h3>Data Peserta Ekstrakurikuler SMP Yogyakarta</h3></center>
					</div>
					<table class="table table-bordered">
	                    <tr style="background-color: #53c68c">
	                      <th style="width: 10px">No</th>
	                      <th>Jenis Ekstrakurikuler</th>
	                      <th>Jumlah Peserta</th>
	                    </tr>
	                    <?php $i = 0; ?>
	                    <?php foreach ($statistik_ekskul as $eks) : ?>
	                    	<?php $i++; ?>
	                    	<tr>
		                      <td><?php echo $i; ?>.</td>
		                      <td><?php echo $eks->jenis_kls_tambahan ?></td> 
		                      <td><a data-toggle="modal" data-show="true" href="<?php echo site_url('siswa/datapeserta/'.$eks->id_jenis_kls_tambahan); ?>" data-target="#myModal<?php echo $eks->id_jenis_kls_tambahan ?>"><?php echo $eks->jumlah ?></a></td>
		                    </tr>

		                    <div id="myModal<?php echo $eks->id_jenis_kls_tambahan ?>" class="modal fade" role="dialog">
								  <div class="modal-dialog modal-md">

									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Edit Data</h4>
									  </div>
									  <div class="modal-body">
										
									  </div>
									</div>

								  </div>
								</div>

	                    <?php endforeach; ?>
		                    
	                    
	                  </table>
	                </div>


              </div>
			</div>
		</div>
	</section>
    <!-- /.content -->
 </div>


<script>
	$(function () {
		$("#btn-cari").click(function(){
			var nisn = $("#nisn").val();
			$.post( "<?php echo site_url("siswa/pendaftaran/get_siswa") ?>", {nis: nisn}, function( data ) {
				if (data != "")
				{
					var obj = jQuery.parseJSON( data );
					$("#siswa_nama").text(obj.nama);
					$("#siswa_alamat").text(obj.alamat);
					$("#siswa_jnskelamin").text(obj.jenis_kelamin);
				}
				else
				{
					$("#siswa_nama").text("");
					$("#siswa_alamat").text("");
					$("#siswa_jnskelamin").text("");
					alert("Data tidak ditemukan");
				}
			});
		});

		$("#daftar_ekskul").submit(function(){
			var jumcek = 0;
			$(".check_ekskul").each(function(){
				var iscek = $(this).prop("checked");
				if (iscek == true)
					jumcek++;
			});

			if (jumcek > 4)
			{
				alert("Pilihan Ekskul tidak boleh lebih dari 4.");
				return false;
			}

			var siswa_nama = $("#siswa_nama").text();
			//alert("A"+siswa_nama.trim()+"A");
			if ((siswa_nama.trim() == "") || (jumcek <= 0))
				return false;
		});
	});
</script>
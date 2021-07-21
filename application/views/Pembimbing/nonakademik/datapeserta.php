<html>
<body>
	<div class="modal-dialog">
	  
							<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Data Peserta Ekskul</h4>
							  </div>
							  <div class="modal-body">
							  <table class="table table-bordered">
				                    <tr style="background-color: #33669b">
				                      <th style="width: 10px">No</th>
				                      <th>NISN</th>
				                      <th>Nama</th>
				                    </tr>
				                    <?php $i = 0; ?>
				                    <?php foreach ($ekskul as $eks) : ?>
				                    	<?php $i++; ?>
				                    	<tr>
					                      <td><?php echo $i; ?>.</td>
					                      <td><?php echo $eks->nisn ?></td> 
					                      <td><?php echo $eks->nama ?></td>
					                    </tr>

					                    
				                    <?php endforeach; ?>
					                    
				                    
				                  </table>
	                  			</div>
							</div>
  
    </div>     
	<!-- /modal-dialog -->

</body>
</html>


<!-- <html>
<body>
	<div class="modal-dialog">
	  
							<div class="modal-content">
							  <form method="post" accept-charset="UTF-8" action="module/aksi_kantor.php?act=update">
							  <input type="hidden" name="id" value="2">
							  
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Kantor</h4>
							  </div>
							  <div class="modal-body">
								<input class="form-control" type="text" placeholder="Nama Kantor" id="kantor_nama" name="kantor_nama" value="Alam Bahasa">
							  </div>
							  <div class="modal-body">
								<input class="form-control" type="text" placeholder="Alamat Kantor" id="kantor_alamat" name="kantor_alamat" value="Sarirejo Rt 6 Rw 47, Maguwoharjo, Depok, Sleman">
							  </div>
							  <div class="modal-body">
								<input class="form-control" type="text" placeholder="Telp Kantor" id="kantor_telp" name="kantor_telp" value="+62851-0389-5187">
							  </div>
							  <div class="modal-body">
								<input class="form-control" type="text" placeholder="Email Kantor" id="kantor_email" name="kantor_email" value="learn@alambahasa.com">
							  </div>
							 
							  <div class="modal-body">
								<input class="form-control" type="text" placeholder="Latitude Kantor" id="kantor_lat" name="kantor_lat" value="-7.765663">
							  </div>
							  <div class="modal-body">
								<input class="form-control" type="text" placeholder="Longitude Kantor" id="kantor_lon" name="kantor_lon" value="110.432849">
							  </div>							  
							  <div class="modal-footer">
								  <input class="btn btn-primary" type="submit" value=" Simpan ">								  
							  </div>
							  </form>
							</div>
  
    </div>     
	<!-- /modal-dialog -->

</body>
</html>
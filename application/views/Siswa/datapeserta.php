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
				                    <tr style="background-color: #53c68c">
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
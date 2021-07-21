<?php

if (!empty($this->session->flashdata('error'))) {
	$message = $this->session->flashdata('error');
	?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php 
		if (is_array($message)) {
			foreach ($message as $error) {
				echo $error."<br>";
			}
		} else {
			echo $message;
		}
	?>
	</div>
	<?php
}

if (!empty($this->session->flashdata('success'))) {
	$message = $this->session->flashdata('success');
	?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php 
		if (is_array($message)) {
			foreach ($message as $success) {
				echo $success."<br>";
			}
		} else {
			echo $message;
		}
	?>
	</div>
	<?php
}


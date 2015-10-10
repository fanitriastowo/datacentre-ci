<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Gedung Detail</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<h1><?php echo $gedung_detail->nama ?></h1>
	</div>

	<?php $this->load->view('template/js'); ?>
	
</body>
</html>
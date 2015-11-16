<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Alur Pengisian</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<div class="row">
			<div class="thumbnail">
				<img width="60%" class="img-responsive img-rounded" src="<?php echo site_url('images/alur.png'); ?>">
			</div>
		</div>

	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#alur').addClass('active');
		});
	</script>
</body>
</html>
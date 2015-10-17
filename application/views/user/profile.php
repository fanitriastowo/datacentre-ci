<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Profile</title>
</head>
<body>
	<div class="container">
	<?php $this->load->view('template/navbar'); ?>

		<div class="row">
			Welcome User
		</div>

	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#user_profile').addClass('active');
		});
	</script>
</body>
</html>
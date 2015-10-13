<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Welcome</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<div class="jumbotron">
			<h1>Building Datacentre</h1>
			<p class="lead">Pangkalan Pusat Data bangunan gedung sebagai data utama penentuan prioritas perbaikan.</p>
			<h4 class="text-warning">* Silahkan Login untuk mengupdate data gedung</h4>

			<?php echo form_open('login/login', array('class' => 'form-signin')); ?>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<?php echo form_open(); ?>
		</div>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#login').addClass('active');
		});
	</script>
</body>
</html>
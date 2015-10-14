<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Silahkan Login</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<div class="jumbotron">
			<h1>Building Datacentre</h1>
			<p class="lead">Pangkalan Pusat Data bangunan gedung sebagai data utama penentuan prioritas perbaikan.</p>
			<h4 class="text-warning">* Silahkan Login untuk mengupdate data gedung</h4>

			<?php echo form_open('login/do_login', array('class' => 'form-signin')); ?>
				<label for="inputEmail" class="sr-only">Email address</label>
				<?php echo form_input(array('name' => 'email', 'id' => 'inputEmail', 'value' => '', 'class' => 'form-control', 'placeholder' => 'Email Address', 'required' => '', 'autofocus' => '')); ?>
				<label for="inputPassword" class="sr-only">Password</label>
				<?php echo form_password(array('name' => 'password', 'id' => 'inputPassword', 'value' => '', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => '')); ?>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<?php echo form_close(); ?>

			<?php if (($this->session->flashdata('error'))): ?>
				<div class="alert alert-danger alert-dismissible text-center" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<strong>Invalid Email or Password Combination!</strong>
				</div>
			<?php endif ?>
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
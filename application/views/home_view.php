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
			<h1>Jumbotron heading</h1>
			<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
		</div>

		<h1>This is Home View</h1>
		<p>Berisi Data Gedung lengkap dengan detailnya</p>
	</div>

<?php $this->load->view('template/js'); ?>
</body>
</html>
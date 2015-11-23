<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Profile</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>
		
		<div class="panel panel-default">
			<div class="panel-body">
				<?php if (count($users)): ?>
				<?php foreach ($users as $user): ?>
					<div class="col-md-3">
						<a href="#" class="thumbnail">
							<img src="<?php echo site_url('images/blank.jpg'); ?>" alt="Blank">
						</a>
						<h3 class="text-center"><?php echo $user->username; ?></h3>
					</div>
				<?php endforeach ?>
				<?php else: ?>
					<h3 class="text-center">Data masih Kosong</h3>
				<?php endif ?>
			</div>
		</div>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#admin_profile').addClass('active');
		});
	</script>
</body>
</html>
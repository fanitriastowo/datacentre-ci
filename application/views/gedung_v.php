<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Gedung</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<div class="row">
		<?php if (count($gedungs)): ?>
			<?php foreach ($gedungs as $gedung): ?>
				<div class="col-xs-6 col-md-3">
					<div class="thumbnail">
						<a href="<?php echo site_url('gedung/detail/'. $gedung->id); ?>">
							<img src="<?php echo site_url('images/blank.jpg'); ?>" alt="<?php echo $gedung->nama; ?>">
						</a>
						<div class="caption text-center">
							<h3><?php echo $gedung->nama; ?></h3>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		<?php else: ?>
		<div class="col-sm-12 text-center">
			<span class="label label-danger">Ooppss! Belum terdapat data gedung</span>
		</div>
		<?php endif ?>
		</div>

	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#gedung').addClass('active');
		});
	</script>
</body>
</html>
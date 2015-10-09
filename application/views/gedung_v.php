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
		<?php foreach ($gedungs as $gedung): ?>
			<div class="col-xs-6 col-md-3">
				<div class="thumbnail">
					<a href="<?php echo $gedung->id; ?>">
						<img src="<?php echo site_url('images/blank.jpg'); ?>" alt="<?php echo $gedung->nama; ?>">
					</a>
					<div class="caption text-center">
						<h3>GEDUNG <?php echo strtoupper($gedung->nama); ?></h3>
						<p>Detail Gedung Teknik</p>
					</div>
				</div>
			</div>
		<?php endforeach ?>
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
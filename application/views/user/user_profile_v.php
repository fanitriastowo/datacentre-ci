<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap-datetimepicker.min.css'); ?>">
</head>
<body>
<div class="container">
	<?php $this->load->view('template/navbar'); ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li><a href="#tab-profile" data-toggle="tab">Profle</a></li>
				<li><a href="#tab-air" data-toggle="tab">Air</a></li>
				<li><a href="#tab-atap" data-toggle="tab">Atap</a></li>
				<li><a href="#tab-kelistrikan" data-toggle="tab">Kelistrikan</a></li>
				<li><a href="#tab-lantai" data-toggle="tab">Lantai</a></li>
				<li><a href="#tab-plafon" data-toggle="tab">Plafon</a></li>
				<li><a href="#tab-pondasi" data-toggle="tab">Pondasi</a></li>
				<li><a href="#tab-ruangan" data-toggle="tab">Ruangan</a></li>
				<li><a href="#tab-struktur" data-toggle="tab">Struktur</a></li>
			</ul>
		</div>
		<div class="panel-body">

			<div class="tab-content">
				<div class="tab-pane fade" id="tab-profile"><?php $this->load->view('user/fragment/identity_v'); ?></div>
				<div class="tab-pane fade" id="tab-air"><?php $this->load->view('user/fragment/air_v'); ?></div>
				<div class="tab-pane fade" id="tab-atap">Atap</div>
				<div class="tab-pane fade" id="tab-kelistrikan">Kelistrikan</div>
				<div class="tab-pane fade" id="tab-lantai">Lantai</div>
				<div class="tab-pane fade" id="tab-plafon">Plafon</div>
				<div class="tab-pane fade" id="tab-pondasi">Pondasi</div>
				<div class="tab-pane fade" id="tab-ruangan">Ruangan</div>
				<div class="tab-pane fade" id="tab-struktur">Struktur</div>
			</div>

		</div> <!-- .panel-body -->
	</div> <!-- .panel -->

</div> <!-- .container -->

<?php $this->load->view('template/js'); ?>
<script type="text/javascript" src="<?php echo site_url('assets/js/moment.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/moment_id.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap-datetimepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap-growl.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.nav-tabs a:first').tab('show'); // Select first tab
		$('#user_profile').addClass('active');

		$('#datepicker_tahun_berdiri').datetimepicker({
			locale : 'id',
			viewMode : 'years',
			format : 'YYYY-MM-DD'
		});

		$('#datepicker_tahun_survey').datetimepicker({
			locale : 'id',
			viewMode : 'years',
			format : 'YYYY-MM-DD'
		});

		<?php if (!empty($this->session->flashdata('notif'))): ?>
			$.bootstrapGrowl("<strong><?php echo $this->session->flashdata('notif'); ?></strong>", {
				type: 'success', // (null, 'info', 'danger', 'success')
				offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
				align: 'center', // ('left', 'right', or 'center')
				width: 500 // (integer, or 'auto')
			});
		<?php endif ?>
		<?php if (!empty($this->session->flashdata('error'))): ?>
			$.bootstrapGrowl("<strong><?php echo $this->session->flashdata('error'); ?></strong>", {
				type: 'danger', // (null, 'info', 'danger', 'success')
				offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
				align: 'center', // ('left', 'right', or 'center')
				width: 500 // (integer, or 'auto')
			});
		<?php endif ?>
	});
</script>
</body>
</html>
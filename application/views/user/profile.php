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

		<?php if (!empty($this->session->flashdata('notif'))): ?>
			<div class="alert alert-success alert-dismissible text-center" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<strong><?php echo $this->session->flashdata('notif'); ?></strong>
			</div>
		<?php endif ?>

		<?php if (!empty($this->session->flashdata('error'))): ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<strong><?php echo $this->session->flashdata('error'); ?></strong>
			</div>
		<?php endif ?>

		<h1>Form Gedung</h1>
		<p class="text-warning">*Silahkan inputkan form-form berikut ini. apabila ada kesulitan menginputkan silahkan hubungi Pusat Perencanaan Pengembangan di Ekstensi: <kbd>334</kbd></p>
		<div class="panel panel-default">
			<div class="panel-body">
			
			<?php echo form_open('user/profile/insert', 'class="form-horizontal"'); ?>
			
			<div class="row">
			<div class="col-md-6">

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-4">
						<label for="insert_kode" class="control-label">Kode</label>
						<input title="Kode Huruf Gedung" type="text" name="kode" class="form-control" id="insert_kode" placeholder="Kode Gedung" autofocus>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-10">
						<label for="insert_nama" class="control-label">Nama</label>
						<input title="Nama Gedung" type="text" name="nama" class="form-control" id="insert_nama" placeholder="Nama Gedung">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-10">
						<label for="insert_lokasi" class="control-label">Lokasi</label>
						<textarea title="Lokasi Gedung misal Kampus 1 UMP Dukuhwaluh" name="lokasi" class="form-control" id="insert_lokasi" placeholder="Lokasi Gedung" rows="3" style="resize : none;"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-6">
						<label for="insert_jenis_gedung" class="control-label">Jenis Gedung</label>
						<select name="jenis_gedung" class="form-control" id="insert_jenis_gedung">
							<option value="1_Lantai">1 Lantai</option>
							<option value="2_Lantai">2 Lantai</option>
							<option value="3_Lantai">3 Lantai</option>
							<option value="4_Lantai">4 Lantai</option>
							<option value="5_Lantai">5 Lantai</option>
							<option value="6_Lantai">6 Lantai</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-6">
						<label for="insert_tahun_berdiri" class="control-label">Tahun Berdiri</label>
						<div class='input-group date' id='datepicker_tahun_berdiri'>
							<input title="Tahun Berdiri Gedung" type="text" name="tahun_berdiri" class="form-control" id="insert_tahun_berdiri" placeholder="Tahun Berdiri Gedung">
							<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-6">
						<label for="insert_tahun_survey" class="control-label">Tahun Survey</label>
						<div class='input-group date' id='datepicker_tahun_survey'>
							<input title="Tahun Survey Gedung" type="text" name="tahun_survey" class="form-control" id="insert_tahun_survey" placeholder="Tahun Survey Gedung">
							<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-10">
						<label for="insert_fungsi" class="control-label">Fungsi</label>
						<textarea title="Fungsi Gedung" name="fungsi" class="form-control" id="insert_fungsi" placeholder="Fungsi Gedung" rows="3"style="resize : none;"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-6">
						<label for="insert_luas" class="control-label">Luas</label>
						<input title="Luas Bangunan dalam m2" type="text" name="luas" class="form-control" id="insert_luas" placeholder="Luas Bangunan dalam m2">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-7 col-sm-4">
						<button type="submit" class="btn btn-lg btn-primary btn-block">Simpan</button>
					</div>
				</div>
			</div>
			</div>
	
			<?php echo form_close(); ?>

			</div>
		</div>

	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript" src="<?php echo site_url('assets/js/moment.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/moment_id.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap-datetimepicker.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
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
		});
	</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Profile</title>
</head>
<body>
	<div class="container">
	<?php $this->load->view('template/navbar'); ?>
		
		<h1>Form Gedung</h1>
		<p class="text-warning">*Silahkan inputkan form-form berikut ini. apabila ada kesulitan menginputkan silahkan hubungi Pusat Perencanaan Pengembangan di Ekstensi: <kbd>334</kbd></p>
		<div class="panel panel-default">
			<div class="panel-body">

			<?php echo form_open('user/profile/insert', 'class="form-horizontal"'); ?>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-3">
						<label for="insert_kode" class="control-label">Kode</label>
						<input title="Kode Huruf Gedung" type="text" name="kode" class="form-control" id="insert_kode" placeholder="Kode Gedung" autofocus>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<label for="insert_nama" class="control-label">Nama</label>
						<input title="Nama Gedung" type="text" name="nama" class="form-control" id="insert_nama" placeholder="Nama Gedung">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-5">
						<label for="insert_fungsi" class="control-label">Fungsi</label>
						<textarea title="Fungsi Gedung" name="fungsi" class="form-control" id="insert_fungsi" placeholder="Fungsi Gedung" rows="3"style="resize : none;"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<label for="insert_tahun_berdiri" class="control-label">Tahun Berdiri</label>
						<input title="Tahun Berdiri Gedung" type="text" name="tahun_berdiri" class="form-control" id="insert_tahun_berdiri" placeholder="Tahun Berdiri Gedung">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<label for="insert_tahun_survey" class="control-label">Tahun Survey</label>
						<input title="Tahun Survey Gedung" type="text" name="tahun_survey" class="form-control" id="insert_tahun_survey" placeholder="Tahun Survey Gedung">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<label for="insert_luas" class="control-label">Luas</label>
						<input title="Luas Bangunan dalam m2" type="text" name="luas" class="form-control" id="insert_luas" placeholder="Luas Bangunan dalam m2">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-5">
						<label for="insert_lokasi" class="control-label">Lokasi</label>
						<textarea title="Lokasi Gedung misal Kampus 1 UMP Dukuhwaluh" name="lokasi" class="form-control" id="insert_lokasi" placeholder="Lokasi Gedung" rows="3" style="resize : none;"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-3">
						<label for="insert_jenis_gedung" class="control-label">Jenis Gedung</label>
						<select class="form-control" id="insert_jenis_gedung">
							<option value="1_Lantai">1 Lantai</option>
							<option value="2_Lantai">2 Lantai</option>
							<option value="3_Lantai">3 Lantai</option>
							<option value="4_Lantai">4 Lantai</option>
							<option value="5_Lantai">5 Lantai</option>
							<option value="6_Lantai">6 Lantai</option>
						</select>
					</div>
				</div>
	
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-2">
						<button type="submit" class="btn btn-lg btn-primary btn-block">Simpan</button>
					</div>
				</div>
			<?php echo form_close(); ?>

			</div>
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
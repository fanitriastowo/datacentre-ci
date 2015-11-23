<?php echo form_open('user/profile/insert', 'class="form-horizontal"'); ?>

<div class="row">
	<div class="col-md-6">

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-4">
				<label for="insert_kode" class="control-label">Kode</label>
				<input value="<?php echo $gedung->kode; ?>" title="Kode Huruf Gedung" type="text" name="kode" class="form-control" id="insert_kode" placeholder="Kode Gedung" autofocus>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<label for="insert_nama" class="control-label">Nama</label>
				<input value="<?php echo $gedung->nama; ?>" title="Nama Gedung" type="text" name="nama" class="form-control" id="insert_nama" placeholder="Nama Gedung">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<label for="insert_lokasi" class="control-label">Lokasi</label>
				<textarea title="Lokasi Gedung misal Kampus 1 UMP Dukuhwaluh" name="lokasi" class="form-control" id="insert_lokasi" placeholder="Lokasi Gedung" rows="3" style="resize : none;"><?php echo $gedung->lokasi; ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label for="insert_jenis_gedung" class="control-label">Jenis Gedung</label>
				<?php $options = array('1_Lantai' => '1 Lantai','2_Lantai' => '2 Lantai','3_Lantai' => '3 Lantai','4_Lantai' => '4 Lantai','5_Lantai' => '5 Lantai', 'Lain-lain' => 'Lain-lain'); ?>
				<?php echo form_dropdown('jenis_gedung', $options, $gedung->jenis_gedung, 'class="form-control" id="insert_jenis_gedung"'); ?>
			</div>
		</div>
	</div> <!-- .col-sm-6 -->

	<div class="col-md-6">
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label for="insert_tahun_berdiri" class="control-label">Tahun Berdiri</label>
				<div class='input-group date' id='datepicker_tahun_berdiri'>
					<input value="<?php echo $gedung->tahun_berdiri; ?>" title="Tahun Berdiri Gedung" type="text" name="tahun_berdiri" class="form-control" id="insert_tahun_berdiri" placeholder="Tahun Berdiri Gedung">
					<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label for="insert_tahun_survey" class="control-label">Tahun Survey</label>
				<div class='input-group date' id='datepicker_tahun_survey'>
					<input value="<?php echo $gedung->tahun_survey; ?>" title="Tahun Survey Gedung" type="text" name="tahun_survey" class="form-control" id="insert_tahun_survey" placeholder="Tahun Survey Gedung">
					<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<label for="insert_fungsi" class="control-label">Fungsi</label>
				<textarea title="Fungsi Gedung" name="fungsi" class="form-control" id="insert_fungsi" placeholder="Fungsi Gedung" rows="3"style="resize : none;"><?php echo $gedung->fungsi; ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label for="insert_luas" class="control-label">Luas</label>
				<input value="<?php echo $gedung->luas; ?>" title="Luas Bangunan dalam m2" type="text" name="luas" class="form-control" id="insert_luas" placeholder="Luas Bangunan dalam m2">
			</div>
		</div>

	</div> <!-- .col-sm-6 -->
</div> <!-- .row -->

<div class="col-sm-12">
	<p class="text-warning text-right">*Silahkan inputkan form-form berikut ini. apabila ada kesulitan menginputkan silahkan hubungi Pusat Perencanaan Pengembangan di Ekstensi: <kbd>334</kbd></p>
	<div class="col-sm-offset-10 col-sm-2">
		<button type="submit" class="btn btn-lg btn-primary btn-block">Simpan</button>
	</div>
</div>

<?php echo form_close(); ?>
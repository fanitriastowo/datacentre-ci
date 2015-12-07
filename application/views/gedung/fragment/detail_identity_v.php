<?php echo form_open('', 'class="form-horizontal"'); ?>

<div class="row">
	<div class="col-md-6">

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-4">
				<label class="control-label">Kode</label>
				<input value="<?php echo $gedung->kode; ?>" title="Kode Huruf Gedung" type="text" class="form-control" disabled>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<label class="control-label">Nama</label>
				<input value="<?php echo $gedung->nama; ?>" title="Nama Gedung" type="text" class="form-control" disabled>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<label class="control-label">Lokasi</label>
				<textarea title="Lokasi Gedung misal Kampus 1 UMP Dukuhwaluh" class="form-control" rows="3" style="resize : none;" disabled><?php echo $gedung->lokasi; ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label class="control-label">Jenis Gedung</label>
				<input value="<?php echo $gedung->jenis_gedung; ?>" type="text" class="form-control" disabled>
			</div>
		</div>
	</div> <!-- .col-sm-6 -->

	<div class="col-md-6">
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label class="control-label">Tahun Berdiri</label>
				<input value="<?php echo $gedung->tahun_berdiri; ?>" title="Tahun Berdiri Gedung" type="text" class="form-control" disabled>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label class="control-label">Tahun Survey</label>
				<input value="<?php echo $gedung->tahun_survey; ?>" title="Tahun Survey Gedung" type="text" class="form-control" disabled>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-10">
				<label class="control-label">Fungsi</label>
				<textarea title="Fungsi Gedung" class="form-control" rows="3" style="resize : none;" disabled><?php echo $gedung->fungsi; ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-6">
				<label class="control-label">Luas</label>
				<input value="<?php echo $gedung->luas; ?>" title="Luas Bangunan dalam m2" type="text" class="form-control" disabled>
			</div>
		</div>

	</div> <!-- .col-sm-6 -->
</div> <!-- .row -->

<?php echo form_close(); ?>
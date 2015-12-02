<?php echo form_open('user/struktur/insert', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kolom</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kolom_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kolom" name="kolom_jumlah" id="kolom_jumlah_insert" placeholder="Jumlah Total kolom" value="<?php echo $struktur->kolom_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kolom_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kolom" name="kolom_bahan" id="kolom_bahan_insert" placeholder="Bahan Kolom" value="<?php echo $struktur->kolom_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kolom_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('kolom_kondisi', $option_kondisi, $struktur->kolom_kondisi, 'class="form-control" id="kolom_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Ring Balok</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ring_balok_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Ring Balok" name="ring_balok_jumlah" id="ring_balok_jumlah_insert" placeholder="Jumlah Ring Balok" value="<?php echo $struktur->ring_balok_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ring_balok_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Ring Balok" name="ring_balok_bahan" id="ring_balok_bahan_insert" placeholder="Bahan Ring Balok" value="<?php echo $struktur->ring_balok_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ring_balok_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('ring_balok_kondisi', $option_kondisi, $struktur->ring_balok_kondisi, 'class="form-control" id="ring_balok_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Balok</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="balok_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Balok" name="balok_jumlah" id="balok_jumlah_insert" placeholder="Jumlah Balok" value="<?php echo $struktur->balok_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="balok_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Balok" name="balok_bahan" id="balok_bahan_insert" placeholder="Bahan Balok" value="<?php echo $struktur->balok_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="balok_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('balok_kondisi', $option_kondisi, $struktur->balok_kondisi, 'class="form-control" id="balok_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Pelat Lantai</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="pelat_lantai_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Pelat Lantai" name="pelat_lantai_panjang" id="pelat_lantai_panjang_insert" placeholder="Panjang Pelat Lantai" value="<?php echo $struktur->pelat_lantai_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="pelat_lantai_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Pelat Lantai" name="pelat_lantai_bahan" id="pelat_lantai_bahan_insert" placeholder="Bahan Pelat Lantai" value="<?php echo $struktur->pelat_lantai_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="pelat_lantai_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('pelat_lantai_kondisi', $option_kondisi, $struktur->pelat_lantai_kondisi, 'class="form-control" id="pelat_lantai_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

</div> <!-- .row -->

<div class="col-sm-12">
	<p class="text-warning text-right">*Silahkan inputkan form-form berikut ini. apabila ada kesulitan menginputkan silahkan hubungi Pusat Perencanaan Pengembangan di Ekstensi: <kbd>334</kbd></p>
	<div class="col-sm-offset-10 col-sm-2">
		<button type="submit" class="btn btn-lg btn-primary btn-block">Simpan</button>
	</div>
</div>

<?php echo form_close(); ?>
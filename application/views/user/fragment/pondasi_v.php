<?php echo form_open('user/pondasi/insert', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Sloof</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="sloof_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Sloof" name="sloof_panjang" id="sloof_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $pondasi->sloof_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="sloof_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Sloof" name="sloof_bahan" id="sloof_bahan_insert" placeholder="Bahan Sloof" value="<?php echo $pondasi->sloof_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="sloof_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('sloof_kondisi', $option_kondisi, $pondasi->sloof_kondisi, 'class="form-control" id="sloof_kondisi_insert"'); ?>
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
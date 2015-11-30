<?php echo form_open('user/plafon/insert', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Lisplang</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="lisplang_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Lisplang" name="lisplang_panjang" id="lisplang_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $plafon->lisplang_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="lisplang_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Lisplang" name="lisplang_bahan" id="lisplang_bahan_insert" placeholder="Bahan Lisplang" value="<?php echo $plafon->lisplang_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="lisplang_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('lisplang_kondisi', $option_kondisi, $plafon->lisplang_kondisi, 'class="form-control" id="lisplang_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Rangka Plafon</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="rangka_plafon_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Rangka Plafon" name="rangka_plafon_panjang" id="rangka_plafon_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $plafon->rangka_plafon_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="rangka_plafon_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Rangka Plafon" name="rangka_plafon_bahan" id="rangka_plafon_bahan_insert" placeholder="Bahan Rangka Plafon" value="<?php echo $plafon->rangka_plafon_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="rangka_plafon_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('rangka_plafon_kondisi', $option_kondisi, $plafon->rangka_plafon_kondisi, 'class="form-control" id="rangka_plafon_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Plafon</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="plafon_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Plafon" name="plafon_panjang" id="plafon_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $plafon->plafon_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="plafon_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Plafon" name="plafon_bahan" id="plafon_bahan_insert" placeholder="Bahan Plafon" value="<?php echo $plafon->plafon_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="plafon_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('plafon_kondisi', $option_kondisi, $plafon->plafon_kondisi, 'class="form-control" id="plafon_kondisi_insert"'); ?>
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
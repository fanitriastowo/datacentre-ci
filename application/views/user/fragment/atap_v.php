<?php echo form_open('user/atap/insert', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Usuk</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="usuk_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Usuk" name="usuk_panjang" id="usuk_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $atap->usuk_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="usuk_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Usuk" name="usuk_bahan" id="usuk_bahan_insert" placeholder="Bahan Usuk" value="<?php echo $atap->usuk_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="usuk_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('usuk_kondisi', $option_kondisi, $atap->usuk_kondisi, 'class="form-control" id="usuk_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Gording</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="gording_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Gording" name="gording_panjang" id="gording_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $atap->gording_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="gording_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Gording" name="gording_bahan" id="gording_bahan_insert" placeholder="Bahan Gording" value="<?php echo $atap->gording_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="gording_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('gording_kondisi', $option_kondisi, $atap->gording_kondisi, 'class="form-control" id="gording_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Reng</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="reng_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Reng" name="reng_panjang" id="reng_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $atap->reng_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="reng_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Reng" name="reng_bahan" id="reng_bahan_insert" placeholder="Bahan Reng" value="<?php echo $atap->reng_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="reng_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('reng_kondisi', $option_kondisi, $atap->reng_kondisi, 'class="form-control" id="reng_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kuda Kuda</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kuda_kuda_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Kuda Kuda" name="kuda_kuda_panjang" id="kuda_kuda_panjang_insert" placeholder="Panjang Kuda Kuda" value="<?php echo $atap->kuda_kuda_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kuda_kuda_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kuda Kuda" name="kuda_kuda_bahan" id="kuda_kuda_bahan_insert" placeholder="Bahan Kuda Kuda" value="<?php echo $atap->kuda_kuda_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kuda_kuda_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('kuda_kuda_kondisi', $option_kondisi, $atap->kuda_kuda_kondisi, 'class="form-control" id="kuda_kuda_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->
</div> <!-- .row -->
<hr>
<div class="row">
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Ikatan Angin</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ikatan_angin_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Ikatan Angin" name="ikatan_angin_panjang" id="ikatan_angin_panjang_insert" placeholder="Panjang Ikatan Angin" value="<?php echo $atap->ikatan_angin_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ikatan_angin_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Ikatan Angin" name="ikatan_angin_bahan" id="ikatan_angin_bahan_insert" placeholder="Bahan Ikatan Angin" value="<?php echo $atap->ikatan_angin_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ikatan_angin_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('ikatan_angin_kondisi', $option_kondisi, $atap->ikatan_angin_kondisi, 'class="form-control" id="ikatan_angin_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Genteng</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="genteng_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Genteng" name="genteng_panjang" id="genteng_panjang_insert" placeholder="Panjang Genteng" value="<?php echo $atap->genteng_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="genteng_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Genteng" name="genteng_bahan" id="genteng_bahan_insert" placeholder="Bahan Genteng" value="<?php echo $atap->genteng_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="genteng_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('genteng_kondisi', $option_kondisi, $atap->genteng_kondisi, 'class="form-control" id="genteng_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Bumbungan</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="bumbungan_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Bumbungan" name="bumbungan_panjang" id="bumbungan_panjang_insert" placeholder="Panjang Bumbungan" value="<?php echo $atap->bumbungan_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="bumbungan_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Bumbungan" name="bumbungan_bahan" id="bumbungan_bahan_insert" placeholder="Bahan Bumbungan" value="<?php echo $atap->bumbungan_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="bumbungan_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('bumbungan_kondisi', $option_kondisi, $atap->bumbungan_kondisi, 'class="form-control" id="bumbungan_kondisi_insert"'); ?>
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
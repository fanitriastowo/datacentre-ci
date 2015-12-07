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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Usuk" value="<?php echo $atap->usuk_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Usuk" value="<?php echo $atap->usuk_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Usuk" value="<?php echo $atap->usuk_kondisi; ?>" disabled>
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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Gording" value="<?php echo $atap->gording_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Gording" value="<?php echo $atap->gording_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Gording" value="<?php echo $atap->gording_kondisi; ?>" disabled>
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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Reng" value="<?php echo $atap->reng_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Reng" value="<?php echo $atap->reng_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Reng" value="<?php echo $atap->reng_kondisi; ?>" disabled>
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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Kuda Kuda" value="<?php echo $atap->kuda_kuda_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kuda Kuda" value="<?php echo $atap->kuda_kuda_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Kuda-kuda" value="<?php echo $atap->kuda_kuda_kondisi; ?>" disabled>
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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Ikatan Angin" value="<?php echo $atap->ikatan_angin_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Ikatan Angin" value="<?php echo $atap->ikatan_angin_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Ikatan Angin" value="<?php echo $atap->ikatan_angin_kondisi; ?>" disabled>
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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Genteng" value="<?php echo $atap->genteng_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Genteng" value="<?php echo $atap->genteng_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Genteng" value="<?php echo $atap->genteng_kondisi; ?>" disabled> 
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
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Bumbungan" value="<?php echo $atap->bumbungan_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Bumbungan" value="<?php echo $atap->bumbungan_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Bumbungan" value="<?php echo $atap->bumbungan_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->
</div> <!-- .row -->

<?php echo form_close(); ?>
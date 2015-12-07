<?php echo form_open('', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Keramik</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Keramik" value="<?php echo $lantai->keramik_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Keramik Lantai" value="<?php echo $lantai->keramik_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Keramik" value="<?php echo $lantai->keramik_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

</div> <!-- .row -->

<?php echo form_close(); ?>
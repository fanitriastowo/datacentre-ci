<?php echo form_open('', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Instalasi Pipa Air Bersih</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang Pipa</label>
					<input type="text" class="form-control" title="Panjang Instalasi Pipa Air Bersih" value="<?php echo $air->i_p_a_b_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan Pipa</label>
					<input type="text" class="form-control" title="Bahan Instalasi Pipa Air Bersih" value="<?php echo $air->i_p_a_b_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi Pipa</label>
					<input type="text" class="form-control" title="Kondisi Pipa Air Bersih" value="<?php echo $air->i_p_a_b_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Tangki Air</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Volume</label>
					<input type="text" class="form-control" title="Volume Tangki Air" value="<?php echo $air->tangki_air_volume ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Tangki Air" value="<?php echo $air->tangki_air_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Pompa Air</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah Pompa</label>
					<input type="text" class="form-control" title="Jumlah Pompa Air" value="<?php echo $air->pompa_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi Pompa</label>
					<input type="text" class="form-control" title="Kondis Pompa Air" value="<?php echo $air->pompa_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kran Air</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah Kran</label>
					<input type="text" class="form-control" title="Jumlah Kran Air" value="<?php echo $air->kran_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Merek Kran</label>
					<input type="text" class="form-control" title="Merek Kran Air" value="<?php echo $air->kran_merek; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi Kran</label>
					<input type="text" class="form-control" title="Kondisi Kran Air" value="<?php echo $air->kran_kondisi; ?>" disabled>
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
			<h4>Ground Tank</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah Ground Tank</label>
					<input type="text" class="form-control" title="Jumlah Ground Tank" value="<?php echo $air->ground_tank_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Merek Ground Tank</label>
					<input type="text" class="form-control" title="Merek Ground Tank" value="<?php echo $air->ground_tank_merek; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi Ground Tank</label>
					<input type="text" class="form-control" title="Kondisi Ground Tank" value="<?php echo $air->ground_tank_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Instalasi Air Kotor</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang Instalasi</label>
					<input type="text" class="form-control" title="Panjang Instalasi Air Kotor" value="<?php echo $air->i_a_k_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan Instalasi</label>
					<input type="text" class="form-control" title="Bahan Instalasi Air Kotor" value="<?php echo $air->i_a_k_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi Instalasi</label>
					<input type="text" class="form-control" title="Kondisi Instalasi Air Kotor" value="<?php echo $air->i_a_k_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Drainase</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah Drainase</label>
					<input type="text" class="form-control" title="Jumlah Drainase" value="<?php echo $air->drainase_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan Drainase</label>
					<input type="text" class="form-control" title="Bahan Drainase" value="<?php echo $air->drainase_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi Drainase</label>
					<input type="text" class="form-control" title="Kondisi Drainase" value="<?php echo $air->drainase_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Water Closed</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Water Closed" value="<?php echo $air->water_closed_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Merek</label>
					<input type="text" class="form-control" title="Merek Water Closed" value="<?php echo $air->water_closed_merek; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondis</label>
					<input type="text" class="form-control" title="Kondisi Water Closed" value="<?php echo $air->water_closed_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->
</div> <!-- .row -->

<?php echo form_close(); ?>
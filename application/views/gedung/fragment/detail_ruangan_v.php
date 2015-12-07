<?php echo form_open('', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Dinding Ruangan</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Dinding Ruangan" value="<?php echo $ruangan->dinding_ruangan_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Dinding Ruangan" value="<?php echo $ruangan->dinding_ruangan_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Dinding Ruangan" value="<?php echo $ruangan->dinding_ruangan_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Cat Dinding</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Cat Dinding" value="<?php echo $ruangan->cat_dinding_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Cat Dinding" value="<?php echo $ruangan->cat_dinding_jenis; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Cat Dinding" value="<?php echo $ruangan->cat_dinding_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kusen Pintu</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kusen Pintu" value="<?php echo $ruangan->kusen_pintu_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kusen Pintu" value="<?php echo $ruangan->kusen_pintu_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Kusen Pintu" value="<?php echo $ruangan->kusen_pintu_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Daun Pintu</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Daun Pintu" value="<?php echo $ruangan->daun_pintu_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Daun Pintu" value="<?php echo $ruangan->daun_pintu_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Daun Pintu" value="<?php echo $ruangan->daun_pintu_kondisi; ?>" disabled>
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
			<h4>Kunci Hendel</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kunci Hendel" value="<?php echo $ruangan->kunci_hendel_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kunci Hendel" value="<?php echo $ruangan->kunci_hendel_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Kunci Hendel" value="<?php echo $ruangan->kunci_hendel_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Cat Pintu</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Cat Pintu" value="<?php echo $ruangan->cat_pintu_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Cat Pintu" value="<?php echo $ruangan->cat_pintu_jenis; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Cat Pintu" value="<?php echo $ruangan->cat_pintu_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kusen Jendela</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kusen Jendela" value="<?php echo $ruangan->kusen_jendela_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kusen Jendela" value="<?php echo $ruangan->kusen_jendela_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Kusen Jendela" value="<?php echo $ruangan->kusen_jendela_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Daun Jendela</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Daun Jendela" value="<?php echo $ruangan->daun_jendela_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Daun Jendela" value="<?php echo $ruangan->daun_jendela_bahan; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Daun Jendela" value="<?php echo $ruangan->daun_jendela_kondisi; ?>" disabled>
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
			<h4>Kaca</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Kaca" value="<?php echo $ruangan->kaca_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Total Kaca" value="<?php echo $ruangan->kaca_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Slot</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Slot" value="<?php echo $ruangan->slot_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Merek</label>
					<input type="text" class="form-control" title="Merek Slot" value="<?php echo $ruangan->slot_merek; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Slot" value="<?php echo $ruangan->slot_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Cat Jendela</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang total cat jendela" value="<?php echo $ruangan->cat_jendela_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Cat Jendela" value="<?php echo $ruangan->cat_jendela_jenis; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Cat Jendela" value="<?php echo $ruangan->cat_jendela_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->
</div> <!-- .row -->

<?php echo form_close(); ?>
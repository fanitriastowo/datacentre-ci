<?php echo form_open('', 'class="form-horizontal"'); ?>

<div class="row">
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Instalasi Kabel</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Instalasi Kabel" value="<?php echo $kelistrikan->instalasi_kabel_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Instalasi Kabel" value="<?php echo $kelistrikan->instalasi_kabel_jenis; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Instalasi Kabel" value="<?php echo $kelistrikan->instalasi_kabel_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Lampu</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Lampu" value="<?php echo $kelistrikan->lampu_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Lampu Kondisi Baik" value="<?php echo $kelistrikan->lampu_jumlah_baik; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Lampu Kondisi Rusak" value="<?php echo $kelistrikan->lampu_jumlah_rusak; ?>">
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Stop Kontak</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Stok Kontak" value="<?php echo $kelistrikan->stop_kontak_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Stop Kontak Kondisi Baik" value="<?php echo $kelistrikan->stop_kontak_jumlah_baik; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Stok Kontak Kondisi Rusak" value="<?php echo $kelistrikan->stop_kontak_jumlah_rusak; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Saklar</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Stok Saklar" value="<?php echo $kelistrikan->saklar_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Saklar Kondisi Baik" value="<?php echo $kelistrikan->saklar_jumlah_baik; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Saklar Kondisi Rusak" value="<?php echo $kelistrikan->saklar_jumlah_rusak; ?>" disabled>
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
			<h4>Instalasi Listrik</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Instalasi Listrik" value="<?php echo $kelistrikan->instalasi_listrik_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Instalasi Kabel LAN</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Instalasi Kabel LAN" value="<?php echo $kelistrikan->installasi_kable_LAN_panjang; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Kondisi</label>
					<input type="text" class="form-control" title="Kondisi Instalasi Kabel LAN" value="<?php echo $kelistrikan->installasi_kable_LAN_kondisi; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Switch</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Switch" value="<?php echo $kelistrikan->switch_jumlah; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Switch Kondisi Baik" value="<?php echo $kelistrikan->switch_jumlah_baik; ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Switch Kondisi Rusak" value="<?php echo $kelistrikan->switch_jumlah_rusak; ?>" disabled>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

</div> <!-- .row -->

<?php echo form_close(); ?>
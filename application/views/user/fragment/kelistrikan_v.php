<?php echo form_open('user/kelistrikan/insert', 'class="form-horizontal"'); ?>

<div class="row">
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Instalasi Kabel</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="instalasi_kabel_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Instalasi Kabel" name="instalasi_kabel_panjang" id="instalasi_kabel_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $kelistrikan->instalasi_kabel_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="instalasi_kabel_jenis_insert" class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Instalasi Kabel" name="instalasi_kabel_jenis" id="instalasi_kabel_jenis_insert" placeholder="Jenis Instalasi Kabel" value="<?php echo $kelistrikan->instalasi_kabel_jenis; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="instalasi_kabel_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('instalasi_kabel_kondisi', $option_kondisi, $kelistrikan->instalasi_kabel_kondisi, 'class="form-control" id="instalasi_kabel_kondisi_insert"'); ?>
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
					<label for="lampu_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Lampu" name="lampu_jumlah" id="lampu_jumlah_insert" placeholder="Jumlah Total Lampu" value="<?php echo $kelistrikan->lampu_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="lampu_jumlah_baik_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Lampu Kondisi Baik" name="lampu_jumlah_baik" id="lampu_jumlah_baik_insert" placeholder="Jumlah Lampu Kondisi Baik" value="<?php echo $kelistrikan->lampu_jumlah_baik; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="lampu_jumlah_rusak_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Lampu Kondisi Rusak" name="lampu_jumlah_rusak" id="lampu_jumlah_rusak_insert" placeholder="Jumlah Lampu Kondisi Rusak" value="<?php echo $kelistrikan->lampu_jumlah_rusak; ?>">
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
					<label for="stop_kontak_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Stok Kontak" name="stop_kontak_jumlah" id="stop_kontak_jumlah_insert" placeholder="Jumlah Total Stop Kontak" value="<?php echo $kelistrikan->stop_kontak_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="stop_kontak_jumlah_baik_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Stop Kontak Kondisi Baik" name="stop_kontak_jumlah_baik" id="stop_kontak_jumlah_baik_insert" placeholder="Jumlah Stok Kontak Kondisi Baik" value="<?php echo $kelistrikan->stop_kontak_jumlah_baik; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="stop_kontak_jumlah_rusak_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Stok Kontak Kondisi Rusak" name="stop_kontak_jumlah_rusak" id="stop_kontak_jumlah_rusak_insert" placeholder="Jumlah Stop Kontak Kondisi Rusak" value="<?php echo $kelistrikan->stop_kontak_jumlah_rusak; ?>">
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
					<label for="saklar_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Stok Saklar" name="saklar_jumlah" id="saklar_jumlah_insert" placeholder="Jumlah Total Saklar" value="<?php echo $kelistrikan->saklar_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="saklar_jumlah_baik_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Saklar Kondisi Baik" name="saklar_jumlah_baik" id="saklar_jumlah_baik_insert" placeholder="Jumlah Saklar Kondisi Baik" value="<?php echo $kelistrikan->saklar_jumlah_baik; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="saklar_jumlah_rusak_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Saklar Kondisi Rusak" name="saklar_jumlah_rusak" id="saklar_jumlah_rusak_insert" placeholder="Jumlah Saklar Kondisi Rusak" value="<?php echo $kelistrikan->saklar_jumlah_rusak; ?>">
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
					<label for="instalasi_listrik_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('instalasi_listrik_kondisi', $option_kondisi, $kelistrikan->instalasi_listrik_kondisi, 'class="form-control" id="instalasi_listrik_kondisi_insert"'); ?>
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
					<label for="installasi_kable_LAN_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Instalasi Kabel LAN" name="installasi_kable_LAN_panjang" id="installasi_kable_LAN_panjang_insert" placeholder="Panjang Instalasi Kabel LAN" value="<?php echo $kelistrikan->installasi_kable_LAN_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="installasi_kable_LAN_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('installasi_kable_LAN_kondisi', $option_kondisi, $kelistrikan->installasi_kable_LAN_kondisi, 'class="form-control" id="installasi_kable_LAN_kondisi_insert"'); ?>
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
					<label for="switch_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Total Switch" name="switch_jumlah" id="switch_jumlah_insert" placeholder="Jumlah Total Switch" value="<?php echo $kelistrikan->switch_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="switch_jumlah_baik_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Switch Kondisi Baik" name="switch_jumlah_baik" id="switch_jumlah_baik_insert" placeholder="Jumlah Switch Kondisi Baik" value="<?php echo $kelistrikan->switch_jumlah_baik; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="switch_jumlah_rusak_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Switch Kondisi Rusak" name="switch_jumlah_rusak" id="switch_jumlah_rusak_insert" placeholder="Jumlah Switch Kondisi Rusak" value="<?php echo $kelistrikan->switch_jumlah_rusak; ?>">
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
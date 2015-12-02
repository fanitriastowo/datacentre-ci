<?php echo form_open('user/ruangan/insert', 'class="form-horizontal"'); ?>

<div class="row">

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Dinding Ruangan</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="dinding_ruangan_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Dinding Ruangan" name="dinding_ruangan_panjang" id="dinding_ruangan_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $ruangan->dinding_ruangan_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="dinding_ruangan_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Dinding Ruangan" name="dinding_ruangan_bahan" id="dinding_ruangan_bahan_insert" placeholder="Bahan Dinding Ruangan" value="<?php echo $ruangan->dinding_ruangan_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="dinding_ruangan_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('dinding_ruangan_kondisi', $option_kondisi, $ruangan->dinding_ruangan_kondisi, 'class="form-control" id="dinding_ruangan_kondisi_insert"'); ?>
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
					<label for="cat_dinding_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Cat Dinding" name="cat_dinding_panjang" id="cat_dinding_panjang_insert" placeholder="Panjang dalam (m)" value="<?php echo $ruangan->cat_dinding_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="cat_dinding_jenis_insert" class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Cat Dinding" name="cat_dinding_jenis" id="cat_dinding_jenis_insert" placeholder="Jenis Cat Dinding" value="<?php echo $ruangan->cat_dinding_jenis; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="cat_dinding_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('cat_dinding_kondisi', $option_kondisi, $ruangan->cat_dinding_kondisi, 'class="form-control" id="cat_dinding_kondisi_insert"'); ?>
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
					<label for="kusen_pintu_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kusen Pintu" name="kusen_pintu_jumlah" id="kusen_pintu_jumlah_insert" placeholder="Jumlah Kusen Pintu" value="<?php echo $ruangan->kusen_pintu_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kusen_pintu_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kusen Pintu" name="kusen_pintu_bahan" id="kusen_pintu_bahan_insert" placeholder="Bahan Kusen Pintu" value="<?php echo $ruangan->kusen_pintu_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kusen_pintu_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('kusen_pintu_kondisi', $option_kondisi, $ruangan->kusen_pintu_kondisi, 'class="form-control" id="kusen_pintu_kondisi_insert"'); ?>
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
					<label for="daun_pintu_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Daun Pintu" name="daun_pintu_jumlah" id="daun_pintu_jumlah_insert" placeholder="Jumlah Daun Pintu" value="<?php echo $ruangan->daun_pintu_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="daun_pintu_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Daun Pintu" name="daun_pintu_bahan" id="daun_pintu_bahan_insert" placeholder="Bahan Daun Pintu" value="<?php echo $ruangan->daun_pintu_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="daun_pintu_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('daun_pintu_kondisi', $option_kondisi, $ruangan->daun_pintu_kondisi, 'class="form-control" id="daun_pintu_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kunci Hendel</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kunci_hendel_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kunci Hendel" name="kunci_hendel_jumlah" id="kunci_hendel_jumlah_insert" placeholder="Jumlah Kunci Hendel" value="<?php echo $ruangan->kunci_hendel_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kunci_hendel_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kunci Hendel" name="kunci_hendel_bahan" id="kunci_hendel_bahan_insert" placeholder="Bahan Kunci Hendel" value="<?php echo $ruangan->kunci_hendel_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kunci_hendel_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('kunci_hendel_kondisi', $option_kondisi, $ruangan->kunci_hendel_kondisi, 'class="form-control" id="kunci_hendel_kondisi_insert"'); ?>
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
					<label for="cat_pintu_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Cat Pintu" name="cat_pintu_panjang" id="cat_pintu_panjang_insert" placeholder="Panjang total dalam (m)" value="<?php echo $ruangan->cat_pintu_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="cat_pintu_jenis_insert" class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Cat Pintu" name="cat_pintu_jenis" id="cat_pintu_jenis_insert" placeholder="Jenis Cat Pintu" value="<?php echo $ruangan->cat_pintu_jenis; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="cat_pintu_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('cat_pintu_kondisi', $option_kondisi, $ruangan->cat_pintu_kondisi, 'class="form-control" id="cat_pintu_kondisi_insert"'); ?>
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
					<label for="kusen_jendela_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Kusen Jendela" name="kusen_jendela_jumlah" id="kusen_jendela_jumlah_insert" placeholder="Jumlah total kusen jendela" value="<?php echo $ruangan->kusen_jendela_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kusen_jendela_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Kusen Jendela" name="kusen_jendela_bahan" id="kusen_jendela_bahan_insert" placeholder="Bahan Kusen Jendela" value="<?php echo $ruangan->kusen_jendela_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kusen_jendela_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('kusen_jendela_kondisi', $option_kondisi, $ruangan->kusen_jendela_kondisi, 'class="form-control" id="kusen_jendela_kondisi_insert"'); ?>
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
					<label for="daun_jendela_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Daun Jendela" name="daun_jendela_jumlah" id="daun_jendela_jumlah_insert" placeholder="Jumlah total daun jendela" value="<?php echo $ruangan->daun_jendela_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="daun_jendela_bahan_insert" class="control-label">Bahan</label>
					<input type="text" class="form-control" title="Bahan Daun Jendela" name="daun_jendela_bahan" id="daun_jendela_bahan_insert" placeholder="Bahan Daun Jendela" value="<?php echo $ruangan->daun_jendela_bahan; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="daun_jendela_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('daun_jendela_kondisi', $option_kondisi, $ruangan->daun_jendela_kondisi, 'class="form-control" id="daun_jendela_kondisi_insert"'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->

<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Kaca</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kaca_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang Total Kaca" name="kaca_panjang" id="kaca_panjang_insert" placeholder="Panjang total kaca" value="<?php echo $ruangan->kaca_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kaca_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('kaca_kondisi', $option_kondisi, $ruangan->kaca_kondisi, 'class="form-control" id="kaca_kondisi_insert"'); ?>
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
					<label for="slot_jumlah_insert" class="control-label">Jumlah</label>
					<input type="text" class="form-control" title="Jumlah Slot" name="slot_jumlah" id="slot_jumlah_insert" placeholder="Jumlah total slot" value="<?php echo $ruangan->slot_jumlah; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="slot_merek_insert" class="control-label">Merek</label>
					<input type="text" class="form-control" title="Merek Slot" name="slot_merek" id="slot_merek_insert" placeholder="Merek Slot" value="<?php echo $ruangan->slot_merek; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="slot_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('slot_kondisi', $option_kondisi, $ruangan->slot_kondisi, 'class="form-control" id="slot_kondisi_insert"'); ?>
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
					<label for="cat_jendela_panjang_insert" class="control-label">Panjang</label>
					<input type="text" class="form-control" title="Panjang total cat jendela" name="cat_jendela_panjang" id="cat_jendela_panjang_insert" placeholder="Panjang total cat jendela" value="<?php echo $ruangan->cat_jendela_panjang; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="cat_jendela_jenis_insert" class="control-label">Jenis</label>
					<input type="text" class="form-control" title="Jenis Cat Jendela" name="cat_jendela_jenis" id="cat_jendela_jenis_insert" placeholder="Jenis Cat Jendela" value="<?php echo $ruangan->cat_jendela_jenis; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="cat_jendela_kondisi_insert" class="control-label">Kondisi</label>
					<?php echo form_dropdown('cat_jendela_kondisi', $option_kondisi, $ruangan->cat_jendela_kondisi, 'class="form-control" id="cat_jendela_kondisi_insert"'); ?>
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
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
					<label for="ipab_panjang_insert" class="control-label">Panjang Pipa</label>
					<input type="text" class="form-control" title="Panjang Instalasi Pipa Air Bersih" name="ipab_panjang" id="ipab_panjang_insert" placeholder="Panjang dalam (m)">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ipab_bahan_insert" class="control-label">Bahan Pipa</label>
					<input type="text" class="form-control" title="Bahan Instalasi Pipa Air Bersih" name="ipab_bahan" id="ipab_bahan_insert" placeholder="Bahan Pipa">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ipab_kondisi_insert" class="control-label">Kondisi Pipa</label>
					<select name="ipab_kondisi" class="form-control" id="ipab_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
					<label for="tangki_air_volume_insert" class="control-label">Volume</label>
					<input type="text" class="form-control" title="Volume Tangki Air" name="tangki_air_volume" id="tangki_air_volume_insert" placeholder="Volume dalam (m3)">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="tangki_air_kondisi_insert" class="control-label">Kondisi Pipa</label>
					<select name="ipab_kondisi" class="form-control" id="tangki_air_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
					<label for="pompa_jumlah_insert" class="control-label">Jumlah Pompa</label>
					<input type="text" class="form-control" title="Jumlah Pompa Air" name="pompa_jumlah" id="pompa_jumlah_insert" placeholder="Jumlah Pompa Air">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="pompa_kondisi_insert" class="control-label">Kondisi Pompa</label>
					<select name="ipab_kondisi" class="form-control" id="pompa_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
					<label for="kran_jumlah_insert" class="control-label">Jumlah Kran</label>
					<input type="text" class="form-control" title="Jumlah Kran Air" name="kran_jumlah" id="kran_jumlah_insert" placeholder="Jumlah Kran Air">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kran_merek_insert" class="control-label">Merek Kran</label>
					<input type="text" class="form-control" title="Merek Kran Air" name="kran_merek" id="kran_merek_insert" placeholder="Merek Kran Air">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="kran_kondisi_insert" class="control-label">Kondisi Kran</label>
					<select name="ipab_kondisi" class="form-control" id="kran_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div> <!-- .col-sm-3 -->
</div> <!-- .row -->

<div class="row">
<div class="col-md-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Ground Tank</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ground_tank_jumlah_insert" class="control-label">Jumlah Ground Tank</label>
					<input type="text" class="form-control" title="Jumlah Ground Tank" name="ground_tank_jumlah" id="ground_tank_jumlah_insert" placeholder="Jumlah Ground Tank">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ground_tank_merek_insert" class="control-label">Merek Ground Tank</label>
					<input type="text" class="form-control" title="Merek Ground Tank" name="ground_tank_merek" id="ground_tank_merek_insert" placeholder="Merek Ground Tank">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="ground_tank_kondisi_insert" class="control-label">Kondisi Ground Tank</label>
					<select name="ground_tank_kondisi" class="form-control" id="ground_tank_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
					<label for="i_a_k_panjang_insert" class="control-label">Panjang Instalasi</label>
					<input type="text" class="form-control" title="Panjang Instalasi Air Kotor" name="i_a_k_panjang" id="i_a_k_panjang_insert" placeholder="Panjang Instalasi Air Kotor">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="i_a_k_bahan_insert" class="control-label">Bahan Instalasi</label>
					<input type="text" class="form-control" title="Bahan Instalasi Air Kotor" name="i_a_k_bahan" id="i_a_k_bahan_insert" placeholder="Bahan Instalasi Air Kotor">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="i_a_k_kondisi_insert" class="control-label">Kondisi Instalasi</label>
					<select name="i_a_k_kondisi" class="form-control" id="i_a_k_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
					<label for="drainase_jumlah_insert" class="control-label">Jumlah Drainase</label>
					<input type="text" class="form-control" title="Jumlah Drainase" name="drainase_jumlah" id="drainase_jumlah_insert" placeholder="Jumlah Drainase">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="drainase_bahan_insert" class="control-label">Bahan Drainase</label>
					<input type="text" class="form-control" title="Bahan Drainase" name="drainase_bahan" id="drainase_bahan_insert" placeholder="Bahan Drainase">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="drainase_kondisi_insert" class="control-label">Kondisi Drainase</label>
					<select name="drainase_kondisi" class="form-control" id="drainase_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
					<label for="water_closed_jumlah_insert" class="control-label">Jumlah Water Closed</label>
					<input type="text" class="form-control" title="Jumlah Water Closed" name="water_closed_jumlah" id="water_closed_jumlah_insert" placeholder="Jumlah Water Closed">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="water_closed_merek_insert" class="control-label">Merek Water Closed</label>
					<input type="text" class="form-control" title="Merek Water Closed" name="water_closed_merek" id="water_closed_merek_insert" placeholder="Merek Water Closed">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<label for="water_closed_kondisi_insert" class="control-label">Kondisi Water Closed</label>
					<select name="water_closed_kondisi" class="form-control" id="water_closed_kondisi_insert">
						<option value="BAIK">Baik</option>
						<option value="RUSAK_RINGAN">Rusak Ringan</option>
						<option value="RUSAK_SEDANG">Rusak Sedang</option>
						<option value="RUSAK_BERAT">Rusak Berat</option>
					</select>
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
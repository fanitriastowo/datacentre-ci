<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Daftar Gedung</title>
</head>
<body>
	<div class="container">
	<?php $this->load->view('template/navbar'); ?>
		
		<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Fungsi</th>
					<th>Tahun Berdiri</th>
					<th>Tahun Survey</th>
					<th>Luas</th>
					<th>Lokasi</th>
					<th>Jenis</th>
					<th>Operasi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($gedungs as $i => $gedung): ?>
				<tr>
					<td><?php echo $i + 1; ?></td>
					<td><?php echo $gedung->kode; ?></td>
					<td><?php echo $gedung->nama; ?></td>
					<td><?php echo $gedung->fungsi; ?></td>
					<td><?php echo $gedung->tahun_berdiri; ?></td>
					<td><?php echo $gedung->tahun_survey; ?></td>
					<td><?php echo $gedung->luas; ?></td>
					<td><?php echo $gedung->lokasi; ?></td>
					<td><?php echo $gedung->jenis_gedung; ?></td>
					<td>
						<a href="#" class="btn btn-xs btn-primary">Edit</a>
						<a href="#" class="btn btn-xs btn-danger">Hapus</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		</div>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#admin_gedung').addClass('active');
		});
	</script>
</body>
</html>
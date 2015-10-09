<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Gedung</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<table class="table table-bordered table-hovered table-striped">
			<thead>
				<tr>
					<th>Kode</th>
					<th>Nama</th>
					<th>Fungsi</th>
					<th>Tahun Berdiri</th>
					<th>Tahun Survey</th>
					<th>Luas</th>
					<th>Lokasi</th>
					<th>Jenis Gedung</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($gedungs as $gedung): ?>
					<tr>
						<td><?php echo $gedung->kode; ?></td>
						<td><?php echo $gedung->nama; ?></td>
						<td><?php echo $gedung->fungsi; ?></td>
						<td><?php echo $gedung->tahun_berdiri; ?></td>
						<td><?php echo $gedung->tahun_survey; ?></td>
						<td><?php echo $gedung->luas; ?></td>
						<td><?php echo $gedung->lokasi; ?></td>
						<td><?php echo $gedung->jenis_gedung; ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#gedung').addClass('active');
		});
	</script>
</body>
</html>
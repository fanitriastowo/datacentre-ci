<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Daftar Gedung</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/datatables.bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">
	<?php $this->load->view('template/navbar'); ?>

		<?php if (!empty($this->session->flashdata('notif'))): ?>
			<div class="alert alert-success alert-dismissible text-center" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<strong><?php echo $this->session->flashdata('notif'); ?></strong>
			</div>
		<?php endif ?>

		<table id="gedung_table" class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<th width="5%">No.</th>
					<th width="5%">Kode</th>
					<th>Nama</th>
					<th>Fungsi</th>
					<th width="15%">Tahun Berdiri</th>
					<th width="15%">Tahun Survey</th>
					<th>Jenis</th>
					<th width="10%">Operasi</th>
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
					<td><?php echo $gedung->jenis_gedung; ?></td>
					<td>
						<a title="Detail Gedung" href="#" class="btn btn-xs btn-info"><i class="fa fa-list"></i></a>
						<a title="Update Gedung" href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
						<a title="Delete Gedung" href="<?php echo site_url('administrator/gedung/delete/' . $gedung->id); ?>" class="btn btn-xs btn-danger trigger-delete"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<!-- Modal Remove -->
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="delete_label" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span>
					</button>
					<h4 class="modal-title" id="delete_label">Hapus Gedung</h4>
				</div>
				<div class="modal-body">
					<strong>Apakah Anda yakin akan menghapus?</strong>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						<i class="fa fa-times"></i> Cancel</button>
					<a href="" class="btn btn-danger btn-delete">
						<i class="fa fa-check-circle"></i> Delete</a>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.datatables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/datatables.bootstrap.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#admin_gedung').addClass('active');
			$('#gedung_table').DataTable({
				"lengthMenu": [ 5, 10 ]
			});
		});

		$('.trigger-delete').click(function(e) {
			e.preventDefault();
			$('#modal-delete .btn-delete').attr("href", $(this).attr("href"));
			$('#modal-delete').modal();
		});
	</script>
</body>
</html>
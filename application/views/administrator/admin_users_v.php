<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/datatables.bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">
	<?php $this->load->view('template/navbar'); ?>
		
		<h1 class="text-center">Daftar User</h1>

		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_modal">
			<i class="fa fa-plus"></i> Add</button> <br><br>
			
		<table id="user_table" class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<td width="5%">No.</td>
					<td>Username</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Operation</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $i => $user): ?>
				<tr>
					<td><?php echo $i + 1; ?></td>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->phone; ?></td>
					<td>
						<a href="<?php echo site_url('administrator/user/detail/' . $user->id); ?>" class="btn btn-xs btn-info trigger-update">
							<i class="fa fa-pencil"></i> Edit</a>
						<a href="<?php echo site_url('administrator/user/delete/' . $user->id); ?>" class="btn btn-xs btn-danger trigger-delete">
							<i class="fa fa-trash"></i> Delete</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<!-- Add Modal -->
	<?php echo form_open('administrator/user/insert', 'class="form-horizontal"'); ?>
	<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="add_modal_label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="add_modal_label">Add User</h4>
				</div>
				<div class="modal-body">
					
					<div class="form-group">
						<div class="col-sm-6">
							<?php echo form_input('username', '', 'class="form-control" id="insert_username" placeholder="Username" required'); ?>
						</div>
						<div class="col-sm-6">
							<?php echo form_input('phone', '', 'class="form-control" id="insert_phone" placeholder="Nomor Ekstensi" required'); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<?php echo form_input('email', '', 'class="form-control" id="insert_email" placeholder="Email" required'); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<?php echo form_password('password', '', 'class="form-control" id="insert_password" placeholder="Password" required'); ?>
						</div>
						<div class="col-sm-6">
							<?php echo form_password('confirm_password', '', 'class="form-control" id="insert_confirm_password" placeholder="Confirm Password" required'); ?>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>

	<!-- Update Modal -->
	<?php echo form_open('administrator/user/update', 'class="form-horizontal"'); ?>
	<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="update_modal_label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="update_modal_label">Add User</h4>
				</div>
				<div class="modal-body">
					<?php echo form_hidden('update_id'); ?>
					<div class="form-group">
						<div class="col-sm-6">
							<?php echo form_input('username', '', 'class="form-control" id="update_username" placeholder="Username" required'); ?>
						</div>
						<div class="col-sm-6">
							<?php echo form_input('phone', '', 'class="form-control" id="update_phone" placeholder="Nomor Ekstensi" required'); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<?php echo form_input('email', '', 'class="form-control" id="update_email" placeholder="Email" required'); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<?php echo form_password('password', '', 'class="form-control" id="update_password" placeholder="Password"'); ?>
						</div>
						<div class="col-sm-6">
							<?php echo form_password('confirm_password', '', 'class="form-control" id="update_confirm_password" placeholder="Confirm Password"'); ?>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>

	<!-- Modal Remove -->
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Hapus User</h4>
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
	<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap-growl.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#admin_user').addClass('active');
			$('#user_table').DataTable({
				"lengthMenu": [ 5, 10 ]
			});
		});

		$('.trigger-delete').click(function(e) {
			e.preventDefault();
			$('#modal-delete .btn-delete').attr("href", $(this).attr("href"));
			$('#modal-delete').modal();
		});

		$('.trigger-update').click(function(e) {
			e.preventDefault();
			var updateURL = $(this).attr("href");
			$.getJSON(updateURL, function(data) {
				$('input[name="update_id"]').val(data.id);
				$('#update_username').val(data.username);
				$('#update_phone').val(data.phone);
				$('#update_email').val(data.email);
			});
			$('#update_modal').modal();
		});

		<?php if (!empty($this->session->flashdata('notif'))): ?>
			$.bootstrapGrowl("<?php echo $this->session->flashdata('notif'); ?>", {
				type: 'info', // (null, 'info', 'danger', 'success')
				offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
				align: 'right', // ('left', 'right', or 'center')
				width: 400 // (integer, or 'auto')
			});
		<?php endif ?>
		<?php if (!empty($this->session->flashdata('error'))): ?>
			$.bootstrapGrowl("<?php echo $this->session->flashdata('error'); ?>", {
				type: 'danger', // (null, 'info', 'danger', 'success')
				offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
				align: 'right', // ('left', 'right', or 'center')
				width: 400 // (integer, or 'auto')
			});
		<?php endif ?>
	</script>
</body>
</html>
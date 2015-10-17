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
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $i => $user): ?>
				<tr>
					<td><?php echo $i + 1; ?></td>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->phone; ?></td>
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
							<input type="text" class="form-control" id="insert_username" placeholder="Username">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="insert_phone" placeholder="Phone">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" class="form-control" id="insert_email" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<input type="password" class="form-control" id="insert_password" placeholder="Password">
						</div>
						<div class="col-sm-6">
							<input type="password" class="form-control" id="insert_confirm_password" placeholder="Confirm Password">
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

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.datatables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/datatables.bootstrap.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#admin_user').addClass('active');
			$('#user_table').DataTable({
				"lengthMenu": [ 5, 10 ]
			});
		});
	</script>
</body>
</html>
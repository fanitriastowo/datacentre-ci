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
		<table id="user_table" class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<td>No.</td>
					<td>username</td>
					<td>phone</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $i => $user): ?>
				<tr>
					<td><?php echo $i + 1; ?></td>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->phone; ?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.datatables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/datatables.bootstrap.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#admin_user').addClass('active');
			$('#user_table').DataTable();
		});
	</script>
</body>
</html>
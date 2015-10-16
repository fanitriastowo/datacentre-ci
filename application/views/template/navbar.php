<div class="header">
	<nav>
		<ul class="nav nav-pills pull-right">
			<?php if (!$this->ion_auth->logged_in()): ?>
				<li role="presentation" id="login"><?php echo anchor('', 'Login') ?></li>
				<li role="presentation" id="gedung"><?php echo anchor('gedung', 'Gedung') ?></li>
			<?php endif ?>

			<?php if ($this->ion_auth->is_admin()): ?>
				<li role="presentation" id="admin_profile"><?php echo anchor('administrator/profile', 'Profile') ?></li>
				<li role="presentation" id="admin_gedung"><?php echo anchor('administrator/gedung', 'Gedung') ?></li>
				<li role="presentation" id="admin_user"><?php echo anchor('administrator/user', 'User') ?></li>
				<li role="presentation" id="admin_logout"><?php echo anchor('login/logout', 'Logout') ?></li>
			<?php endif ?>

			<?php if ($this->ion_auth->in_group('user')): ?>
				<li role="presentation" id="user_profile"><?php echo anchor('user/profile', 'Profile') ?></li>
				<li role="presentation" id="user_logout"><?php echo anchor('login/logout', 'Logout') ?></li>
			<?php endif ?>
		</ul>
	</nav>
	<?php if ($this->ion_auth->logged_in()): ?>
		<h3 class="text-muted">Welcome <?php echo $this->ion_auth->user()->row()->username; ?></h3>
	<?php else: ?>
		<h3 class="text-muted"><a href="<?php echo site_url(''); ?>" style="text-decoration : none">Datacentre</a></h3>
	<?php endif ?>
</div>
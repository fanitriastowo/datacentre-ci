<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('template/css'); ?>
	<title>Gedung Detail</title>
</head>
<body>
	<div class="container">
		<?php $this->load->view('template/navbar'); ?>

		<h1>Gedung <?php echo $gedung->nama ?></h1>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="nav nav-tabs" id="detail-tabs">
					<li><a href="#tab-profile" data-toggle="tab">Profle</a></li>
					<li><a href="#tab-air" data-toggle="tab">Air</a></li>
					<li><a href="#tab-atap" data-toggle="tab">Atap</a></li>
					<li><a href="#tab-kelistrikan" data-toggle="tab">Kelistrikan</a></li>
					<li><a href="#tab-lantai" data-toggle="tab">Lantai</a></li>
					<li><a href="#tab-plafon" data-toggle="tab">Plafon</a></li>
					<li><a href="#tab-pondasi" data-toggle="tab">Pondasi</a></li>
					<li><a href="#tab-ruangan" data-toggle="tab">Ruangan</a></li>
					<li><a href="#tab-struktur" data-toggle="tab">Struktur</a></li>
				</ul>
			</div>
			<div class="panel-body">
				<div class="tab-content">
					<div class="tab-pane fade" id="tab-profile"><?php $this->load->view('gedung/fragment/detail_identity_v'); ?></div>
					<div class="tab-pane fade" id="tab-air"><?php $this->load->view('gedung/fragment/detail_air_v'); ?></div>
					<div class="tab-pane fade" id="tab-atap"><?php $this->load->view('gedung/fragment/detail_atap_v'); ?></div>
					<div class="tab-pane fade" id="tab-kelistrikan"><?php $this->load->view('gedung/fragment/detail_kelistrikan_v'); ?></div>
					<div class="tab-pane fade" id="tab-lantai"><?php $this->load->view('gedung/fragment/detail_lantai_v'); ?></div>
					<div class="tab-pane fade" id="tab-plafon"><?php $this->load->view('gedung/fragment/detail_plafon_v'); ?></div>
					<div class="tab-pane fade" id="tab-pondasi"><?php $this->load->view('gedung/fragment/detail_pondasi_v'); ?></div>
					<div class="tab-pane fade" id="tab-ruangan"><?php $this->load->view('gedung/fragment/detail_ruangan_v'); ?></div>
					<div class="tab-pane fade" id="tab-struktur"><?php $this->load->view('gedung/fragment/detail_struktur_v'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('template/js'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#gedung').addClass('active');
			$('#detail-tabs a:first').tab('show') // Select first tab
		});
	</script>
</body>
</html>
<?php 

class Migration_Create_Gedung extends CI_Migration {

	public function up() {
		$query = "CREATE TABLE `gedung` (
				  `id` INT(11) NOT NULL AUTO_INCREMENT,
				  `kode` CHAR(10) NOT NULL,
				  `nama` VARCHAR(100) NOT NULL,
				  `fungsi` VARCHAR(45) NULL,
				  `tahun_berdiri` DATE NOT NULL,
				  `tahun_survey` DATE NOT NULL,
				  `luas` DOUBLE NOT NULL DEFAULT 0,
				  `lokasi` TEXT NULL,
				  `jenis_gedung` VARCHAR(50) NOT NULL,
				  PRIMARY KEY (`id`) 
				  )";

		$insert_teknik = "INSERT INTO gedung SET kode = 'R', nama = 'Teknik', fungsi = 'Perkuliahan, Laboraturium', tahun_berdiri = '2014-07-15', tahun_survey = '2014-07-15', luas = 4000.0, lokasi = 'Kampus 1 UMP', jenis_gedung = '5 Lantai'";

		$insert_kedokteran = "INSERT INTO gedung SET kode = 'Q', nama = 'Kedokteran', fungsi = 'Perkuliahan, Laboraturium, Penelitian', tahun_berdiri = '2012-07-15', tahun_survey = '2013-07-15', luas = 4000.0, lokasi = 'Kampus 1 UMP', jenis_gedung = '5 Lantai'";

		$this->db->query($query);
		$this->db->query($insert_teknik);
		$this->db->query($insert_kedokteran);

	}
	public function down() {
		$this->dbforge->drop_table('gedung');
	}
}
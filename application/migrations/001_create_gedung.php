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
				  `jenis_gedung` ENUM(
				  				'1_LANTAI', '2_LANTAI', '3_LANTAI', 
				  				'4_LANTAI', '5_LANTAI', 'LAIN_LAIN') NOT NULL,
				  PRIMARY KEY (`id`) 
				  )";
		$this->db->query($query);
	}
	public function down() {
		$this->dbforge->drop_table('gedung');
	}
}
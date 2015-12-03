<?php 

class Migration_Create_Air extends CI_Migration {

	public function up() {
		$query = "CREATE TABLE air (
			id INT(11) unsigned NOT NULL,
			i_p_a_b_panjang DOUBLE COMMENT 'Panjang Instalasi Pipa Air Bersih' DEFAULT 0,
			i_p_a_b_bahan VARCHAR(100) COMMENT 'Bahan Instalasi Pipa Air Bersih',
			i_p_a_b_kondisi VARCHAR(100) COMMENT 'Kondisi Instalasi Pipa Air Bersih',
			tangki_air_volume DOUBLE DEFAULT 0,
			tangki_air_kondisi VARCHAR(100),
			pompa_jumlah INT(11) DEFAULT 0,
			pompa_kondisi VARCHAR(100),
			kran_jumlah INT(11) DEFAULT 0,
			kran_merek VARCHAR(100),
			kran_kondisi VARCHAR(100),
			ground_tank_jumlah INT(11) DEFAULT 0,
			ground_tank_merek VARCHAR(100),
			ground_tank_kondisi VARCHAR(100),
			i_a_k_panjang DOUBLE COMMENT 'Panjang Instalasi Air Kotor' DEFAULT 0,
			i_a_k_bahan VARCHAR(100) COMMENT 'Bahan Instalasi Air Kotor',
			i_a_k_kondisi VARCHAR(100) COMMENT 'Kondisi Instalasi Air Kotor',
			drainase_jumlah INT(11) DEFAULT 0,
			drainase_bahan VARCHAR(100),
			drainase_kondisi VARCHAR(100),
			water_closed_jumlah INT(11) DEFAULT 0,
			water_closed_merek VARCHAR(100),
			water_closed_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_AIR_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";

		$this->db->query($query);
	}

	public function down() {
		$this->dbforge->drop_table('air');
	}
}
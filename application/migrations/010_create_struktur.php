<?php 

class Migration_Create_struktur extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE struktur (
			id INT(11) unsigned NOT NULL,
			kolom_jumlah INT(11) DEFAULT 0,
			kolom_bahan VARCHAR(100),
			kolom_kondisi VARCHAR(100),
			ring_balok_jumlah INT(11) DEFAULT 0,
			ring_balok_bahan VARCHAR(100),
			ring_balok_kondisi VARCHAR(100),
			balok_jumlah INT(11) DEFAULT 0,
			balok_bahan VARCHAR(100),
			balok_kondisi VARCHAR(100),
			pelat_lantai_panjang DOUBLE DEFAULT 0,
			pelat_lantai_bahan VARCHAR(100),
			pelat_lantai_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_STRUKTUR_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";
		$this->db->query($query);
	}

	public function down(){
		$this->dbforge->drop_table('struktur');
	}
}
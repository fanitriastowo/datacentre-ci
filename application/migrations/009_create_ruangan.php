<?php 

class Migration_Create_ruangan extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE ruangan (
			id INT(11) unsigned NOT NULL,
			dinding_ruangan_panjang DOUBLE DEFAULT 0,
			dinding_ruangan_bahan VARCHAR(100),
			dinding_ruangan_kondisi VARCHAR(100),
			cat_dinding_panjang DOUBLE DEFAULT 0,
			cat_dinding_jenis VARCHAR(100),
			cat_dinding_kondisi VARCHAR(100),
			kusen_pintu_jumlah INT(11) DEFAULT 0,
			kusen_pintu_bahan VARCHAR(100),
			kusen_pintu_kondisi VARCHAR(100),
			daun_pintu_jumlah INT(11) DEFAULT 0,
			daun_pintu_bahan VARCHAR(100),
			daun_pintu_kondisi VARCHAR(100),
			kunci_hendel_jumlah INT(11) DEFAULT 0,
			kunci_hendel_bahan VARCHAR(100),
			kunci_hendel_kondisi VARCHAR(100),
			cat_pintu_panjang DOUBLE DEFAULT 0,
			cat_pintu_jenis VARCHAR(100),
			cat_pintu_kondisi VARCHAR(100),
			kusen_jendela_jumlah INT(11) DEFAULT 0,
			kusen_jendela_bahan VARCHAR(100),
			kusen_jendela_kondisi VARCHAR(100),
			daun_jendela_jumlah INT(11) DEFAULT 0,
			daun_jendela_bahan VARCHAR(100),
			daun_jendela_kondisi VARCHAR(100),
			kaca_panjang DOUBLE DEFAULT 0,
			kaca_kondisi VARCHAR(100),
			slot_jumlah INT(11) DEFAULT 0,
			slot_merek VARCHAR(100),
			slot_kondisi VARCHAR(100),
			cat_jendela_panjang DOUBLE DEFAULT 0,
			cat_jendela_jenis VARCHAR(100),
			cat_jendela_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_RUANGAN_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";
		$this->db->query($query);
	}

	public function down(){
		$this->dbforge->drop_table('ruangan');
	}
}
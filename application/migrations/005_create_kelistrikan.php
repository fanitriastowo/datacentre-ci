<?php 

class Migration_Create_Kelistrikan extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE kelistrikan (
			id INT(11) unsigned NOT NULL,
			instalasi_kabel_panjang DOUBLE DEFAULT 0,
			instalasi_kabel_jenis VARCHAR(100),
			instalasi_kabel_kondisi VARCHAR(100),
			lampu_jumlah INT(11) DEFAULT 0,
			lampu_jumlah_baik INT(11) DEFAULT 0,
			lampu_jumlah_rusak INT(11) DEFAULT 0,
			stop_kontak_jumlah INT(11) DEFAULT 0,
			stop_kontak_jumlah_baik INT(11) DEFAULT 0,
			stop_kontak_jumlah_rusak INT(11) DEFAULT 0,
			saklar_jumlah INT(11) DEFAULT 0,
			saklar_jumlah_baik INT(11) DEFAULT 0,
			saklar_jumlah_rusak INT(11) DEFAULT 0,
			instalasi_listrik_kondisi VARCHAR(100),
			installasi_kable_LAN_panjang DOUBLE DEFAULT 0,
			installasi_kable_LAN_kondisi VARCHAR(100),
			switch_jumlah INT(11) DEFAULT 0,
			switch_jumlah_baik INT(11) DEFAULT 0,
			switch_jumlah_rusak INT(11) DEFAULT 0,
			PRIMARY KEY (id),
			CONSTRAINT FK_KELISTRIKAN_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";

		$this->db->query($query);
	}
	public function down(){
		$this->dbforge->drop_table('kelistrikan');
	}
}
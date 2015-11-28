<?php 

class Migration_Create_Kelistrikan extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE kelistrikan (
			id INT(11) unsigned NOT NULL,
			instalasi_kabel_panjang DOUBLE,
			instalasi_kabel_jenis VARCHAR(100),
			instalasi_kabel_kondisi VARCHAR(100),
			lampu_jumlah INT(11),
			lampu_jumlah_baik INT(11),
			lampu_jumlah_rusak INT(11),
			stop_kontak_jumlah INT(11),
			stop_kontak_jumlah_baik INT(11),
			stop_kontak_jumlah_rusak INT(11),
			saklar_jumlah INT(11),
			saklar_jumlah_baik INT(11),
			saklar_jumlah_rusak INT(11),
			instalasi_listrik_kondisi VARCHAR(100),
			installasi_kable_LAN_panjang DOUBLE,
			installasi_kable_LAN_kondisi VARCHAR(100),
			switch_jumlah INT(11),
			switch_jumlah_baik INT(11),
			switch_jumlah_rusak INT(11),
			PRIMARY KEY (id),
			CONSTRAINT FK_KELISTRIKAN_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";

		$this->db->query($query);
	}
	public function down(){
		$this->dbforge->drop_table('kelistrikan');
	}
}
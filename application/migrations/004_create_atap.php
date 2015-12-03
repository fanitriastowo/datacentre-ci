<?php 

class Migration_create_atap extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE atap (
			id INT(11) unsigned NOT NULL,
			usuk_panjang DOUBLE DEFAULT 0,
			usuk_bahan VARCHAR(100),
			usuk_kondisi VARCHAR(100),
			gording_panjang DOUBLE DEFAULT 0,
			gording_bahan VARCHAR(100),
			gording_kondisi VARCHAR(100),
			reng_panjang DOUBLE DEFAULT 0,
			reng_bahan VARCHAR(100),
			reng_kondisi VARCHAR(100),
			kuda_kuda_panjang DOUBLE DEFAULT 0,
			kuda_kuda_bahan VARCHAR(100),
			kuda_kuda_kondisi VARCHAR(100),
			ikatan_angin_panjang DOUBLE DEFAULT 0,
			ikatan_angin_bahan VARCHAR(100),
			ikatan_angin_kondisi VARCHAR(100),
			genteng_panjang DOUBLE DEFAULT 0,
			genteng_bahan VARCHAR(100),
			genteng_kondisi VARCHAR(100),
			bumbungan_panjang DOUBLE DEFAULT 0,
			bumbungan_bahan VARCHAR(100),
			bumbungan_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_ATAP_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";

		$this->db->query($query);
	}

	public function down(){
		$this->dbforge->drop_table('atap');
	}
}
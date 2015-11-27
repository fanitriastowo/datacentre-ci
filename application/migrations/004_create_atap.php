<?php 

class Migration_create_atap extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE atap (
			id INT(11) unsigned NOT NULL,
			usuk_panjang DOUBLE,
			usuk_bahan VARCHAR(100),
			gording_panjang DOUBLE,
			gording_bahan VARCHAR(100),
			gording_kondisi VARCHAR(100),
			reng_panjang DOUBLE,
			reng_bahan VARCHAR(100),
			reng_kondisi VARCHAR(100),
			kuda_kuda_panjang DOUBLE,
			kuda_kuda_bahan VARCHAR(100),
			kuda_kuda_kondisi VARCHAR(100),
			ikatan_angin_panjang DOUBLE,
			ikatan_angin_bahan VARCHAR(100),
			ikatan_angin_kondisi VARCHAR(100),
			genteng_panjang DOUBLE,
			genteng_bahan VARCHAR(100),
			genteng_kondisi VARCHAR(100),
			bumbungan_panjang DOUBLE,
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
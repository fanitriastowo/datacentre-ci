<?php 

class Migration_Create_pondasi extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE pondasi (
			id INT(11) unsigned NOT NULL,
			sloof_panjang DOUBLE,
			sloof_bahan VARCHAR(100),
			sloof_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_PONDASI_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";
		$this->db->query($query);
	}

	public function down(){
		$this->dbforge->drop_table('pondasi');
	}
}
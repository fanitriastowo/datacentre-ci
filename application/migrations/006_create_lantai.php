<?php 

class Migration_Create_lantai extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE lantai (
			id INT(11) unsigned NOT NULL,
			keramik_panjang DOUBLE,
			keramik_bahan VARCHAR(100),
			keramik_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_LANTAI_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";

		$this->db->query($query);
	}
	public function down(){
		$this->dbforge->drop_table('lantai');
	}
}
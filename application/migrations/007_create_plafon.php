<?php 

class Migration_Create_plafon extends CI_Migration {

	public function up(){
		$query = "CREATE TABLE plafon (
			id INT(11) unsigned NOT NULL,
			lisplang_panjang DOUBLE,
			lisplang_bahan VARCHAR(100),
			lisplang_kondisi VARCHAR(100),
			rangka_plafon_panjang DOUBLE,
			rangka_plafon_bahan VARCHAR(100),
			rangka_plafon_kondisi VARCHAR(100),
			plafon_panjang DOUBLE,
			plafon_bahan VARCHAR(100),
			plafon_kondisi VARCHAR(100),
			PRIMARY KEY (id),
			CONSTRAINT FK_PLAFON_ID FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION)
		";
		$this->db->query($query);
	}

	public function down(){
		$this->dbforge->drop_table('plafon');
	}
}
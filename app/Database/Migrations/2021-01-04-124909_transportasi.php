<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transportasi extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			],
			'jenis_transportasi' => [
				'type' => 'ENUM',
				'constraint' => ['pesawat','kereta','kapal'],
				'default' => 'pesawat',
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 3,

			],

			
		]);
			$this->forge->addKey('id', TRUE);
			$this->forge->createTable('transportasi');
			
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transportasi');
	}
}

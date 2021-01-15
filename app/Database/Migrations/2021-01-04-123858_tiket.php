<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tiket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			],
			'berangkat' =>[
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'tujuan' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'jam_berangkat' => [
				'type' => 'TIME'
			],
			'tanggal_berangkat' => [
				'type' => 'DATE'
			]
			]);
		
			$this->forge->addKey('id', TRUE);
			$this->forge->createTable('tiket');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tiket');
	}
}

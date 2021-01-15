<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kursi extends Migration
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
			'id_transportasi' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned'=>TRUE,
			],
			'jumlah' => [
				'type' => 'INT',
				'constraint' => 3,
			]
		]);
			$this->forge->addKey('id', TRUE);
			$this->forge->addForeignKey('id_transportasi','transportasi','id');
			$this->forge->createTable('kursi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('kursi');

	}
}

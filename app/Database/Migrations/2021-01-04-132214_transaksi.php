<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'id_user' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'id_tiket' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'total_harga' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'created_at' => [
				'type' => 'DATETIME',
			]
	]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_user','user','id');
		$this->forge->addForeignKey('id_tiket','tiket','id');


		$this->forge->createTable('transaksi');
}

//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}

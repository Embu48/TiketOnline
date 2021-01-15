<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'=>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'password' => [
				'type' => 'TEXT'
			],
			'role' =>[
				'type' => 'INT',
				'constraint' => 1,
				'default' => 1,
			]
			]);
		
			$this->forge->addKey('id',TRUE);
			$this->forge->createTable('user');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('user');
	}
}

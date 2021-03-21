<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'user-id'=>[
				'type'=>'INT',
				'constraint'=>8,
				'unsigned'=>true,
				'autoincreament'=>true,
			],
			'user-email'=>[
				'type'=>'VARCHAR',
				'constraint'=>255,
			],
			'user-password'=>[
				'type'=>'varchar',
				'constraint'=>255,
			],
			'created_at'  => [
				'type'	      => 'DATETIME',
				'null'	      => true,
			],
			'updated_at' 	=> [
				'type'	     => 'DATETIME',
				'null'	     => true,
			]
		]);
		$this->forge->addPrimaryKey('user-id');
		$this->forge->createTable('users') ;

	}

	public function down()
	{
		//
		 $this->forge->dropTable('users');
	}
}

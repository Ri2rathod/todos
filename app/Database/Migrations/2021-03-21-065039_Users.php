<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

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
				'auto_increment'=>true,
			],
			'user-name'=>[
				'type'=>'VARCHAR',
				'constraint'=>255,
			],
			'user-email'=>[
				'type'=>'VARCHAR',
				'constraint'=>255,
				'unique'=> true,
			],
			'user-password'=>[
				'type'=>'varchar',
				'constraint'=>255,
			],
			'created_at'=>[
				'type'=>'timestamp',
			],
			
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

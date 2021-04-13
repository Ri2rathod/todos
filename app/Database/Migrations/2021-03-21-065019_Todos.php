<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Todos extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'todos-id'=>[
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>true,
				'auto_increment'=>true,
			],
			'todos-task'=>[
				'type'=>'VARCHAR',
				'constraint'=>100,
			],
			'todos-status'=>[
				'type'=>'BIT',
				'constraint'=>2,
			],
			'todos-due-date'=>[
				'type'=>'date',
			],
			'user-email'=>[
				'type'=>'varchar',
				'constraint'=>50,
			],	
			'created_at'=>[
				'type'=>'timestamp',
			],
		]);
		$this->forge->addkey('todos-id',true);
		// $forge->addForeignKey('user-id','users','id');
		$this->forge->createTable('todos');
		// $this->forge->addColumn();
   
	}

	public function down()
	{
		//
		$this->forge->dropTable('todos');
	}
}

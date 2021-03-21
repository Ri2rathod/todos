<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

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
				'constraint'=>1,
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
		$this->forge->addkey('todos-id',true);
		$this->forge->createTable('todos');
   
	}

	public function down()
	{
		//
		$this->forge->dropTable('todos');
	}
}

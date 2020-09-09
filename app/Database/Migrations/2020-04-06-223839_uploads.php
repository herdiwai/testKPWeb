<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Uploads extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'peng_upload'	=> [
				'type'           => 'VARCHAR',
				'constraint'     => '250',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('uploads');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}

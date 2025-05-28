<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProyectSettings extends Migration
{
    public function up()
    {
  $this->forge->addField([
      'id' => ['type'=> 'INT','unsigned' => true,'auto_increment' => true],
      'imagen' => ['type' => 'VARCHAR','constraint' => '255',],
      'texto_1' => ['type' => 'TEXT','null' => true,],
      'texto_2' => ['type' => 'TEXT','null' => true,],
      'data_groups' => ['type' => 'TEXT','null' => true,],
      'created_at' => ['type' => 'DATETIME','null' => true,],
      'updated_at' => ['type' => 'DATETIME','null' => true,],
      'deleted_at' => ['type' => 'DATETIME','null' => true,],
  ]);

  $this->forge->addKey('id', true);
  $this->forge->createTable('proyectos');
    }

    public function down()
    {
  $this->forge->dropTable('proyectos');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
            ],
            'nombre'    => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            ],
            'apellidos' => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            ],
            'empresa'   => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => true,
            ],
            'telefono'  => [
            'type'       => 'VARCHAR',
            'constraint' => 15,
            'null'       => true,
            ],
            'email'     => [
            'type'       => 'VARCHAR',
            'constraint' => 100,
            ],
            'asunto'    => [
            'type'       => 'VARCHAR',
            'constraint' => 150,
            ],
            'mensaje'   => [
            'type'       => 'TEXT',
            ],
            'created_at' => [
            'type'    => 'DATETIME',
            'null'    => true,
            ],
            'updated_at' => [
            'type'    => 'DATETIME',
            'null'    => true,
            ],
            'deleted_at' => [
            'type'    => 'DATETIME',
            'null'    => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('contactanos');
    }

    public function down()
    {
        $this->forge->dropTable('contactanos');
    }
}

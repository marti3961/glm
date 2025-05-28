<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nombre_usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'telefono' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'direccion' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'ciudad' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'zip' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
                'default' => new RawSql('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
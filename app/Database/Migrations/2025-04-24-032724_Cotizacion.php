<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cotizacion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
            ],
            'name' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
            ],
            'email' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
            ],
            'phone' => [
            'type'       => 'VARCHAR',
            'constraint' => '20',
            ],
            'product_extras_ids' => [
            'type' => 'TEXT',
            'null' => true,
            ],
            'product_id' => [
            'type'       => 'INT',
            'constraint' => 11,
            'unsigned'   => true,
            ],
            'tipo_de_transporte' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
            ],
            'cantidad' => [
            'type'       => 'INT',
            'constraint' => 11,
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
        $this->forge->createTable('cotizaciones');
    }

    public function down()
    {
        $this->forge->dropTable('cotizaciones');
    }
}

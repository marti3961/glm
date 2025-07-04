<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTestimonios extends Migration
{
    

public function up()
{
    $this->forge->addField([
            'id' => [
                'type'       => 'VARCHAR',
                'constraint' => 191,
                'null'       => false,
            ],
            'uri' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'orden' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
            ],
            'active'         => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1], // 1 for active, 0 for inactive
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('testimonios');
    }
    public function down()
    {
        $this->forge->dropTable('testimonios');
    }
}
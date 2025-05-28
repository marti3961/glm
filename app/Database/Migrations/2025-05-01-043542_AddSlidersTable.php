<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSlidersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            
            'type'           => ['type' => 'VARCHAR', 'constraint' => 100], // e.g., homepage, promo, etc.
            'title'          => ['type' => 'VARCHAR', 'constraint' => 500],
            'subtitle'          => ['type' => 'VARCHAR', 'constraint' => 500],
            'button1_text'   => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'button1_link'   => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'button2_text'   => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'button2_link'   => ['type' => 'VARCHAR', 'constraint' => 500, 'null' => true],
            'image'          => ['type' => 'VARCHAR', 'constraint' => 500],
            'position'       => ['type' => 'INT', 'default' => 0], // Used to order sliders
            'active'         => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1], // 1 for active, 0 for inactive
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
            'deleted_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sliders');
    }

    public function down()
    {
        $this->forge->dropTable('sliders');
    }
}

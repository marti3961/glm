<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGeneralSettings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'auto_increment' => true],
            'site_name'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'site_email'        => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'site_phone'        => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'site_logo'         => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'main_description'  => ['type' => 'TEXT', 'null' => true],
            'main_keywords'     => ['type' => 'TEXT', 'null' => true],
            'whatsapp'          => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'facebook'          => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'instagram'         => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'x'                 => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true], // Formerly Twitter
            'pinterest'         => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'linkedin'          => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at'        => ['type' => 'DATETIME', 'null' => true],
            'updated_at'        => ['type' => 'DATETIME', 'null' => true],
            'address'           => ['type' => 'TEXT', 'null' => true], // New field
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('general_settings');
    }

    public function down()
    {
        $this->forge->dropTable('general_settings');
    }
}
